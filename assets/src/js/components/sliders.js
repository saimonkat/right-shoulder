import Swiper, { Navigation } from 'swiper';
Swiper.use([Navigation]);

export default function () {
    const featuresSlider = document.querySelector('.features__slider');
    featuresSlider && new Swiper(featuresSlider, {
        slidesPerView: 2,
        navigation: {
            nextEl: '.swiper-button--next',
            prevEl: '.swiper-button--prev',
        },
        spaceBetween: 10,
        breakpoints: {
            768: {
                spaceBetween: 20,
                slidesPerView: 'auto',
            }
        },
    });

    const reviewsSlider = document.querySelector('.reviews__slider');
    reviewsSlider && new Swiper(reviewsSlider, {
        slidesPerView: 1,
        navigation: {
            nextEl: '.swiper-button--next',
            prevEl: '.swiper-button--prev',
        },
        spaceBetween: 20,
        breakpoints: {
            768: {
                slidesPerView: 'auto',
            },
            992: {
                spaceBetween: 52
            }
        },
    });

    const blogSlider = document.querySelector('.blog__slider');
    blogSlider && new Swiper(blogSlider, {
        slidesPerView: 1,
        navigation: {
            nextEl: '.swiper-button--next',
            prevEl: '.swiper-button--prev',
        },
        spaceBetween: 10,
        breakpoints: {
            768: {
                spaceBetween: 20,
                slidesPerView: 'auto',
            }
        },
    });
}
