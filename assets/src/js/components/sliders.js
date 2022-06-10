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
        spaceBetween: 10,
        breakpoints: {
            992: {
                spaceBetween: 20
            }
        },
    });
    const reviewsSlider = document.querySelector('.reviews__slider');

    reviewsSlider && new Swiper(reviewsSlider, {
        direction: "horizontal",
        slidesPerView: 'auto',
        spaceBetween: 20,
        navigation: {
            nextEl: '.swiper-button--next',
            prevEl: '.swiper-button--prev',
        },
        breakpoints: {
            992: {
                spaceBetween: 52
            }
        },
    });
}
