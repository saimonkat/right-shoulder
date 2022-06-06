import { Fancybox } from '@fancyapps/ui';
const header = document.querySelector('.header');
const heroBg = document.querySelector('.hero__bg');

Fancybox.bind('[data-fancybox]', {
    dragToClose: false,
    on: {
        init: () => {
            const scrollbarW = window.innerWidth - document.documentElement.clientWidth;
            header.style.paddingRight = scrollbarW + 'px';
            heroBg.style.right = scrollbarW + 'px';
        },
        destroy: () => {
            header.style.paddingRight = '';
            heroBg.style.right = '';
        }
    },
});
