/*! index.js | If you can read this you're tailgaiting */

document.addEventListener('DOMContentLoaded', () => {
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
                    menu.style.transform = 'translate(0)';
                    logo.style.transform = 'translate(-230%)';
                    removeEventListener('scroll', slide, false);
                }
            },
            {passive: true}
        );
    }
    // Dark mode toggle
    const root = document.querySelector(':root'),
        darkMode = document.getElementById('dark-mode'),
        darkIcon = document.getElementById('light-icon'),
        lightIcon = document.getElementById('dark-icon');
    let isDark = false;
    darkMode.addEventListener('click', () => {
        if (!isDark) {
            root.style.setProperty('--black', '#eee8e0');
            root.style.setProperty('--white', '#1c2e2e');
            root.style.setProperty('--green', '#09ae8f');
            darkIcon.style.transform = 'translate(0, 0)';
            lightIcon.style.transform = 'translate(0, 100%)';
            isDark = true;
        } else {
            root.style.setProperty('--white', '#eee8e0');
            root.style.setProperty('--black', '#1c2e2e');
            root.style.setProperty('--green', '#0e6f79');
            darkIcon.style.transform = 'translate(0, -100%)';
            lightIcon.style.transform = 'translate(0, 0)';
            isDark = false;
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
    // Add construction lines and correct spacing to images
    document.querySelectorAll('p').forEach((p) => {
        if (p.firstChild.tagName == 'IMG') {
            p.classList.add('figure');
        }
    });
});
