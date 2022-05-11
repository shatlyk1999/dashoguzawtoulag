document.addEventListener('DOMContentLoaded', function() {
    new Splide('.splide', {
        type: 'loop',
        width: '100%',
        autoplay: true,
        interval: 4000,
    }).mount();
});