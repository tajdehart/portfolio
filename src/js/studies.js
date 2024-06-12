// Move first paragraph
const paragraphs = document.querySelectorAll('p');
paragraphs[0].innerHTML = paragraphs[1].innerHTML;
paragraphs[1].remove();

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
        document.querySelector('#comments,footer').getBoundingClientRect().top;
    winHeight = window.innerHeight;
    scroll();
}).observe(document.body);
