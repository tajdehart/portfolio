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

// Obfuscate email
const email = document.getElementById('email'),
    user = 'tajdehart',
    site = 'gmail.com';

email.setAttribute('href', 'mailto:' + user + '@' + site);
email.innerHTML = user + '@' + site;
