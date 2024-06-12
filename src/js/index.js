document.addEventListener('DOMContentLoaded', () => {
    // Page animations

    function getValue(variable) {
        let prop = window
            .getComputedStyle(document.documentElement)
            .getPropertyValue(`--${variable}`);
        if (prop.charAt(prop.length - 1) == 's') {
            prop = prop.replace(/\D/g, '');
        }
        return prop;
    }

    function setValue(prop, variable) {
        return root.style.setProperty(`--${prop}`, variable);
    }

    const main = document.querySelector('main'),
        header = document.querySelector('header'),
        hero = document.getElementById('hero'),
        loader = document.getElementById('loader'),
        aside = document.querySelector('body > aside');

    const transitionLinks = document.querySelectorAll('a[href^="/"]'),
        transitionTime = getValue('page-transition-time'),
        buttonSize = getValue('button-offset');

    function pageIn() {
        main.classList.add('in');
        main.classList.remove('out');
        header.classList.add('in');
        header.classList.remove('out');
        aside.classList.add('in');
        aside.classList.remove('out');
        loader.classList.add('out');
    }

    function pageOut() {
        main.classList.add('out');
        main.classList.remove('in');
        header.classList.add('out');
        header.classList.remove('in');
        aside.classList.add('out');
        aside.classList.remove('in');
    }

    window.addEventListener('pageshow', () => {
        pageIn();
    });

    transitionLinks.forEach((link) => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            event.stopPropagation();

            pageOut();

            setTimeout(() => {
                window.location = link.href;
            }, transitionTime);
        });
    });

    // Mobile nav logo slide
    const menu = document.querySelector('nav menu'),
        logo = document.getElementById('logo');

    if (window.innerWidth < 651) {
        window.addEventListener(
            'scroll',
            function logoOut() {
                if (window.scrollY > 25) {
                    menu.classList.add('in');
                    logo.classList.add('out');
                    window.removeEventListener('scroll', logoOut);
                }
            },
            {passive: true}
        );
    }

    // Dark mode toggle
    const root = document.querySelector(':root'),
        darkModeButton = document.getElementById('dark-mode'),
        darkIcon = document.getElementById('light-icon'),
        lightIcon = document.getElementById('dark-icon'),
        white = getValue('white'),
        black = getValue('black'),
        green = getValue('green'),
        blue = getValue('blue'),
        greenHover = getValue('green-hover'),
        blueHover = getValue('blue-hover'),
        lightShadow = getValue('light-shadow'),
        darkShadow = getValue('dark-shadow');
    let isDark;

    if (window.sessionStorage.getItem('darkMode') == 'on') {
        darkOn();
    } else {
        darkOff();
    }

    function darkOn() {
        setValue('black', white);
        setValue('white', black);
        setValue('green', blue);
        setValue('blue', green);
        setValue('green-hover', blueHover);
        setValue('blue-hover', greenHover);
        setValue('light-shadow', darkShadow);
        setValue('dark-shadow', lightShadow);
        darkIcon.style.translate = '0% 0%';
        lightIcon.style.translate = '0% 175%';
        isDark = true;
    }

    function darkOff() {
        setValue('black', black);
        setValue('white', white);
        setValue('blue', blue);
        setValue('green', green);
        setValue('blue-hover', blueHover);
        setValue('green-hover', greenHover);
        setValue('light-shadow', lightShadow);
        setValue('dark-shadow', darkShadow);
        darkIcon.style.translate = '0% -175%';
        lightIcon.style.translate = '0% 0%';
        isDark = false;
    }

    darkModeButton.addEventListener('click', () => {
        if (isDark) {
            darkOff();
            window.sessionStorage.setItem('darkMode', 'off');
        } else {
            darkOn();
            window.sessionStorage.setItem('darkMode', 'on');
        }
    });

    // Carbon value
    const carbon = document.getElementById('carbon'),
        domain = encodeURIComponent(window.location.href);

    function newRequest(render = true) {
        fetch('https://api.websitecarbon.com/b?url=' + domain)
            .then((response) => {
                if (!response.ok) {
                    throw Error(r);
                }
                return response.json();
            })
            .then((response) => {
                if (render) {
                    renderResult(response);
                }
                response.t = new Date().getTime();
                localStorage.setItem(domain, JSON.stringify(r));
            })
            .catch(() => {
                carbon.innerHTML = '✦ This website runs on renewable energy ✦';
                localStorage.removeItem(domain);
            });
    }

    function renderResult(response) {
        carbon.innerHTML =
            '✦ This page produces ' +
            response.c +
            'g of CO<sub>2</sub>/view, cleaner than ' +
            response.p +
            '% of pages tested ✦';
    }

    carbon.innerHTML = '✦ Measuring CO<sub>2</sub>&hellip; ✦';

    let cachedResponse = localStorage.getItem(domain);

    const time = new Date().getTime();

    if (cachedResponse) {
        const response = JSON.parse(cachedResponse);
        renderResult(response);
        if (time - response.t > 86400000) {
            newRequest(false);
        }
    } else {
        newRequest();
    }

    // Tooltips
    const wrappers = document.querySelectorAll('.tooltip');

    wrappers.forEach((wrapper) => {
        const tooltip = document.getElementById(`${wrapper.id}-tooltip`);

        let wasHovered = false,
            leaveDelay = 750,
            stayDelay = 2000;

        wrapper.addEventListener('mouseover', function over() {
            tooltip.style.opacity = '100%';
            setTimeout(() => {
                endFollow();
            }, stayDelay);
            wrapper.removeEventListener('mouseover', over);
        });

        wrapper.addEventListener('mouseleave', function leave() {
            setTimeout(() => {
                endFollow();
            }, leaveDelay);
            wrapper.removeEventListener('mouseleave', leave);
        });

        if (tooltip.classList.contains('is-follower')) {
            leaveDelay = 500;

            document.addEventListener('mousemove', function move(event) {
                if (wasHovered) {
                    setTimeout(() => {
                        document.removeEventListener('mousemove', move);
                    }, leaveDelay);
                }

                tooltip.style.top = `${event.clientY}px`;
                tooltip.style.left = `${event.clientX}px`;
            });
        }

        function endFollow() {
            wasHovered = true;
            tooltip.style.opacity = '0%';
        }
    });
});
