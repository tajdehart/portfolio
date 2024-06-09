// Page animations
const main = document.querySelector('main'),
    header = document.querySelector('header'),
    hero = document.getElementById('hero'),
    loader = document.getElementById('loader'),
    controlPanel = document.getElementById('control-panel');

const transitionLinks = main.querySelectorAll('a[href^="../"], a[href^="/studies/"]'),
    transitionTime = getValue('page-transition-time'),
    controlPosition = getValue('control-position');

function animateIn() {
    setTimeout(() => {
        main.style.translate = '0%';
        header.style.translate = '0%';
        loader.style.opacity = '0%';
        controlPanel.style.translate = '0%';
    }, 0.5 * transitionTime);
}

function animateOut() {
    main.style.translate = '-100%';
    header.style.translate = '-100%';
    controlPanel.style.translate = '0 ' + controlPosition;
}

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

window.addEventListener(
    'load',
    () => {
        animateIn();
        window.sessionStorage.setItem('hasLoaded', 'true');
    },
    {once: true}
);

if (window.sessionStorage.getItem('hasLoaded') == 'false') {
    animateIn();
}

transitionLinks.forEach((link) => {
    link.addEventListener('click', (event) => {
        event.preventDefault();
        event.stopPropagation();

        animateOut();

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
        function slide() {
            if (window.scrollY > 25) {
                menu.style.translate = '0%';
                logo.style.translate = '-230%';
                window.removeEventListener('scroll', slide);
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
