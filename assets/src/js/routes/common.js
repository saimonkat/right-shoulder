import navMenu from '../components/nav-menu';
import pageScroll from '../components/page-scroll';
import anchorScroll from '../components/anchor-scroll';
import forms from '../components/forms';
import textarea from '../components/textarea';
import wow from '../components/wow';
import sliders from '../components/sliders';

export default {
    init() {
        navMenu();
        pageScroll();
        anchorScroll();
        forms();
        textarea();
        wow();
        sliders();
    },
    finalize() {}
}
