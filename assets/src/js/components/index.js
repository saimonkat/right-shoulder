import sliders from './sliders';
import typeCards from './type-cards';
import faq from './faq';
import reviews from './reviews';

export default {
    init() {
        sliders();
        typeCards();
        faq();
        reviews();
    },
    finalize() {}
}
