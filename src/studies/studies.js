/*! studies.js | If you can read this you're tailgaiting */

document.addEventListener('DOMContentLoaded', () => {
    // Opening animation
    const main = document.querySelector('main'),
    header = document.querySelector('header'),
    hero = document.getElementById('hero');
    hero.addEventListener('load', ()=>{
        main.style.translate = "0%";
        header.style.translate = "0%";
    });
    // Transition animation
    const transitionLinks = main.querySelectorAll('.return-link');
    transitionLinks.forEach((link) => {
        link.addEventListener('click', (event)=> {
            event.preventDefault();
            event.stopPropagation();
            main.style.translate = "-100%";
            header.style.translate = "-100%";
            setTimeout(()=>{
                window.location = link.href;
            }, 250);
        })
    });
    // Add construction lines and correct spacing to images
    document.querySelectorAll('p').forEach((p) => {
        if (p.firstChild.tagName == 'IMG') {
            p.classList.add('figure');
        }
    });
    // Scroll indicator
    const progress = document.getElementById('progress');
    let timeOfLastScroll = 0;
    let requestedAniFrame = false;
    function scroll() {
        if (!requestedAniFrame) {
            requestAnimationFrame(updateProgress);
            requestedAniFrame = true;
        }
        timeOfLastScroll = Date.now();
    }
    addEventListener('scroll', scroll);
    let winHeight = 1000;
    let bottom = 10000;
    function updateProgress() {
        requestedAniFrame = false;
        var percent = Math.min(
            (document.scrollingElement.scrollTop / (bottom - winHeight)) * 100,
            100
        );
        progress.style.paddingLeft = `${percent}%`;
        if (Date.now() - timeOfLastScroll < 3000) {
            requestAnimationFrame(updateProgress);
            requestedAniFrame = true;
        }
    }
    new ResizeObserver(() => {
        bottom =
            document.scrollingElement.scrollTop +
            document.querySelector('#comments,footer').getBoundingClientRect()
                .top;
        winHeight = window.innerHeight;
        scroll();
    }).observe(document.body);
    // Mobile nav logo slide
    const menu = document.getElementById('menu'),
        logo = document.getElementById('logo');
    if (window.innerWidth < 651) {
        window.addEventListener(
            'scroll',
            function slide() {
                if (window.scrollY > 25) {
                    menu.style.translate = '0%';
                    logo.style.translate = '-230%';
                    removeEventListener('scroll', slide, false);
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
        // document.documentElement.style.backgroundColor = black;
        darkOn();
    }
    else {
        // document.documentElement.style.backgroundColor = white;
        darkOff();
    }
    function getValue(color) {
        return window
            .getComputedStyle(document.documentElement)
            .getPropertyValue(`--${color}`);
    }
    function setValue(prop, color) {
        return root.style.setProperty(`--${prop}`, color);
    }
    function darkOn() {
        setValue('black', white);
        setValue('white', black);
        setValue('green', blue);
        setValue('blue', green);
        setValue('green-hover', blueHover)
        setValue('blue-hover', greenHover)
        setValue('light-shadow', darkShadow)
        setValue('dark-shadow', lightShadow)
        darkIcon.style.translate = '0% 0%';
        lightIcon.style.translate = '0% 175%';
        isDark = true;
    }
    function darkOff() {
        setValue('black', black);
        setValue('white', white);
        setValue('blue', blue);
        setValue('green', green);
        setValue('blue-hover', blueHover)
        setValue('green-hover', greenHover)
        setValue('light-shadow', lightShadow)
        setValue('dark-shadow', darkShadow)
        darkIcon.style.translate = '0% -175%';
        lightIcon.style.translate = '0% 0%';
        isDark = false;
    }
    darkModeButton.addEventListener('click', () => {
        if (isDark) {
            darkOff();
            window.sessionStorage.setItem("darkMode", "off");
        } else {
            darkOn();
            window.sessionStorage.setItem("darkMode", "on");
        }
    });
    // Carbon value
    const carbon = document.querySelector('footer'),
        domain = encodeURIComponent(window.location.href);
    let newRequest = function (render = true) {
        fetch('https://api.websitecarbon.com/b?url=' + domain)
            .then(function (r) {
                if (!r.ok) {
                    throw Error(r);
                }
                return r.json();
            })
            .then(function (r) {
                if (render) {
                    renderResult(r);
                }
                r.t = new Date().getTime();
                localStorage.setItem(domain, JSON.stringify(r));
            })
            .catch(function (e) {
                carbon.innerHTML = '✦ This website runs on renewable energy ✦';
                console.log(e);
                localStorage.removeItem(domain);
            });
    };
    const renderResult = function (r) {
        carbon.innerHTML =
            '✦ This page produces ' +
            r.c +
            'g of CO<sub>2</sub>/view, cleaner than ' +
            r.p +
            '% of pages tested ✦';
    };
    if ('fetch' in window) {
        carbon.innerHTML = '✦ Measuring CO<sub>2</sub>&hellip; ✦';
        let cachedResponse = localStorage.getItem(domain);
        const t = new Date().getTime();
        if (cachedResponse) {
            const r = JSON.parse(cachedResponse);
            renderResult(r);
            if (t - r.t > 86400000) {
                newRequest(false);
            }
        } else {
            newRequest();
        }
    }
});
