document.addEventListener('DOMContentLoaded', () => {
    // Nav selector star slide
    const star = document.getElementById('menu-star');

    document.querySelectorAll('i').forEach((trigger) => {
        new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting && entry.target.id == 'a-trigger') {
                    star.style.marginRight = '66%';
                }
                if (entry.isIntersecting && entry.target.id == 'w-trigger') {
                    star.style.marginRight = '0%';
                }
                if (entry.isIntersecting && entry.target.id == 'w-trigger-b') {
                    star.style.marginRight = '0%';
                }
                if (entry.isIntersecting && entry.target.id == 'c-trigger') {
                    star.style.marginRight = '-66%';
                }
            });
        }).observe(trigger);
    });

    // Draggable slider module
    const nav = document.querySelector('nav');
    const sliders = document.querySelectorAll('.slider');

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
            () => {
                cancelMomentum();
            },
            {passive: true}
        );

        nav.addEventListener('click', () => {
            cancelMomentum();
        });

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

    // Form
    const form = document.querySelector('form'),
        success = document.getElementById('success'),
        failure = document.getElementById('failure'),
        formData = new FormData(form);

    form.addEventListener('submit', (event) => {
        event.preventDefault();

        submit(formData);
    });

    async function submit(formData) {
        try {
            const response = await fetch('ENDPOINTGOESHERE', {
                method: 'PUT',
                body: formData,
            });
            const result = await response.json();
            console.log('Success:', result);
            showSuccess();
        } catch (error) {
            console.error('Error:', error);
            showFailure();
        }
    }

    function hideForm() {}

    function showSuccess() {}

    function showFailure() {}
});
