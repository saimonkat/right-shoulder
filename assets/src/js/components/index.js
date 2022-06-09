import pageScroll from './page-scroll';
import anchorScroll from './anchor-scroll';
import forms from './forms';
import textarea from './textarea';
import wow from './wow';
import sliders from './sliders';
import fancybox from './fancybox';

export default {
    init() {
        pageScroll();
        // anchorScroll();
        forms();
        textarea();
        wow();
        sliders();
        fancybox();
    },
    finalize() {}
}
