export default function(){
    const pageScroll = () => {
        document.documentElement.classList.toggle(
            'page-scrolled',
            window.scrollY > 0
        )
    }

    pageScroll();
    window.addEventListener('scroll', pageScroll);
}
