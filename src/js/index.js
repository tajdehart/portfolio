/*! index.js | If you can read this you're tailgaiting */

document.addEventListener('DOMContentLoaded', () => {
    // Nav selector star slide
    const star = document.getElementById('star');
    document.body.querySelectorAll('i').forEach((trigger) => {
        new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting && entry.target.id == 'a-trigger') {
                    star.style.marginRight = '-66%';
                }
                if (entry.isIntersecting && entry.target.id == 'w-trigger') {
                    star.style.marginRight = '-33%';
                }
                if (entry.isIntersecting && entry.target.id == 'w-trigger-b') {
                    star.style.marginRight = '-33%';
                }
                if (entry.isIntersecting && entry.target.id == 'c-trigger') {
                    star.style.marginRight = '-66%';
                }
            });
        }).observe(trigger);
    });
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
    // Draggable slider module
    const nav = document.querySelector('nav');
    const buttons = document.querySelectorAll('button');
    const sliders = document.querySelectorAll('.work_slider');
    let isPressed = false,
        velX = 0,
        startX,
        idleId,
        momentumId,
        scrollLeft;
    sliders.forEach((slider) => {
        slider.addEventListener('mousedown', (event) => {
            event.preventDefault();
            isPressed = true;
            slider.style.cursor = 'grabbing';
            startX = event.pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
            cancelMomentum();
            cancelIdle();
        });
        slider.addEventListener('mouseup', (event) => {
            event.preventDefault();
            isPressed = false;
            slider.style.cursor = 'grab';
            beginMomentum();
        });
        slider.addEventListener('mousemove', (event) => {
            event.preventDefault();
            if (!isPressed) return;
            const x = event.pageX - slider.offsetLeft;
            const walk = x - startX;
            var prevScrollLeft = slider.scrollLeft;
            slider.scrollLeft = scrollLeft - walk;
            velX = slider.scrollLeft - prevScrollLeft;
        });
        slider.addEventListener(
            'wheel',
            (event) => {
                cancelMomentum();
                if (event.deltaX > 10 || event.deltaX < -10) {
                    cancelIdle();
                }
            },
            {passive: true}
        );
        nav.addEventListener('click', () => {
            cancelMomentum();
        });
        buttons.forEach((button) => {
            button.addEventListener('click', () => {
                cancelMomentum();
            });
        });
        new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    beginIdle();
                }
            });
        }).observe(slider);
        function beginIdle() {
            cancelIdle();
            idleId = requestAnimationFrame(idleLoop);
        }
        function cancelIdle() {
            cancelAnimationFrame(idleId);
        }
        function idleLoop() {
            slider.scrollLeft += 1;
            idleId = requestAnimationFrame(idleLoop);
        }
        function beginMomentum() {
            cancelMomentum();
            momentumId = requestAnimationFrame(momentumLoop);
            setTimeout(() => {
                cancelMomentum();
            }, 5000);
        }
        function cancelMomentum() {
            cancelAnimationFrame(momentumId);
        }
        function momentumLoop() {
            slider.scrollLeft += velX * 2;
            velX *= 0.96;
            if (Math.abs(velX) > 0.5) {
                momentumId = requestAnimationFrame(momentumLoop);
            }
        }
    });
    // Obfuscate email
    const email = document.getElementById('email'),
        user = 'tajdehart',
        site = 'gmail.com';
    email.setAttribute('href', 'mailto:' + user + '@' + site);
    email.innerHTML = user + '@' + site;
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
