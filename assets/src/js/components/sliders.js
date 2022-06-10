import Swiper, { Navigation } from 'swiper';
Swiper.use([Navigation]);

export default function () {
    const swipers = document.querySelectorAll('.swiper');
    swipers && swipers.forEach(swiper => {
        new Swiper(swiper, {
            slidesPerView: 'auto',
            navigation: {
                nextEl: '.swiper-button--next',
                prevEl: '.swiper-button--prev',
            },
            spaceBetween: 10,
            breakpoints: {
                768: {
                    spaceBetween: 20
                }
            },
        });
    })

    const reviewsSlider = document.querySelector('.reviews__slider');
    reviewsSlider && new Swiper(reviewsSlider, {
        slidesPerView: 'auto',
        navigation: {
            nextEl: '.swiper-button--next',
            prevEl: '.swiper-button--prev',
        },
        spaceBetween: 20,
        breakpoints: {
            992: {
                spaceBetween: 52
            }
        },
    });
}
