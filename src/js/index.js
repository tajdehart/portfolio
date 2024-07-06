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

    const main = document.querySelector('main'),
        header = document.querySelector('header'),
        loader = document.getElementById('loader'),
        aside = document.querySelector('body > aside');

    const transitionLinks = document.querySelectorAll('a[href^="/"]'),
        transitionTime = getValue('page-transition-time');

    function pageIn() {
        main.classList.add('on');

        if (header) {
            header.classList.add('on');
        }

        if (aside) {
            aside.classList.add('on');
        }

        loader.classList.add('off');
    }

    function pageOut(url) {
        main.classList.remove('on');

        if (header) {
            header.classList.remove('on');
        }

        if (aside) {
            aside.classList.remove('on');
        }

        setTimeout(() => {
            window.location = url;
        }, transitionTime);
    }

    window.addEventListener('pageshow', () => {
        pageIn();
    });

    transitionLinks.forEach((link) => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            event.stopPropagation();

            if (link.id == 'submit') {
                submit(link);
                return;
            }

            pageOut(link.href);
        });
    });

    // Form submission

    const contactForm = document.getElementById('contact-form'),
        submit = document.getElementById('submit'),
        email = document.getElementById('emobbail'),
        name = document.getElementById('nobbame'),
        emailTooltip = document.getElementById('email-tooltip'),
        emailRequiredTooltip = document.getElementById('email-required-tooltip'),
        nameRequiredTooltip = document.getElementById('name-required-tooltip'),
        successURL = '/success.html',
        failureURL = '/failure.html',
        endPoint = 'https://tools.greenvisionmedia.net/honeypot/index.php';

    if (contactForm) {
        submit.addEventListener('click', (event) => {
            event.preventDefault();
            event.stopPropagation();

            switch (validateForm()) {
                case 'no-name':
                    nameRequiredTooltip.style.opacity = '1';
                    setTimeout(() => {
                        nameRequiredTooltip.style.opacity = '0';
                    }, 3000);
                    break;
                case 'no-email':
                    emailRequiredTooltip.style.opacity = '1';
                    setTimeout(() => {
                        emailRequiredTooltip.style.opacity = '0';
                    }, 3000);
                    break;
                case 'bad-email':
                    emailTooltip.style.opacity = '1';
                    setTimeout(() => {
                        emailTooltip.style.opacity = '0';
                    }, 3000);
                    break;
                case 'valid':
                    submitForm();
                    break;
            }
        });
    }

    async function submitForm() {
        const formData = new FormData(contactForm);

        pageOut(successURL);

        try {
            const response = await fetch(endPoint, {
                method: 'POST',
                body: formData,
            });
            const result = await response.json();
            console.log('Success:', result);
            pageOut(successURL);
        } catch (error) {
            console.error('Error:', error);
            pageOut(failureURL);
        }
    }

    function validateForm() {
        const emailRegex =
            /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

        if (!name.value) {
            return 'no-name';
        }

        if (!email.value) {
            return 'no-email';
        }

        if (!emailRegex.test(email.value)) {
            return 'bad-email';
        }

        return 'valid';
    }
    // Mobile nav logo slide

    const menu = document.querySelector('nav menu'),
        logo = document.getElementById('logo');

    function logoOut() {
        if (window.scrollY > 25) {
            menu.classList.add('on');
            logo.classList.add('off');
            window.removeEventListener('scroll', logoOut);
        }
    }

    if (window.innerWidth < 651) {
        window.addEventListener('scroll', logoOut, {passive: true});
    }

    // Dark mode toggle

    function setValue(prop, variable) {
        return root.style.setProperty(`--${prop}`, variable);
    }

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
    } else if (window.sessionStorage.getItem('darkMode') == 'off') {
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
        darkIcon.classList.add('on');
        lightIcon.classList.remove('on');
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
        darkIcon.classList.remove('on');
        lightIcon.classList.add('on');
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
    const wrappers = document.querySelectorAll('.tooltip-wrapper:not(#contact-form)');

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
