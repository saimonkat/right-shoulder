import Swiper, { Navigation } from 'swiper';
Swiper.use([Navigation]);

export default function () {
    const featuresSlider = document.querySelector('.features__slider');

    featuresSlider && new Swiper(featuresSlider, {
        direction: "horizontal",
        slidesPerView: 'auto',
        navigation: {
            nextEl: '.swiper-button--next',
            prevEl: '.swiper-button--prev',
        },
        speed: 700,
        spaceBetween: 10,
        breakpoints: {
            992: {
                spaceBetween: 20
            }
        },
    });
}
