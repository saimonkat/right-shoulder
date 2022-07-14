export default function(){
    location.hash && smoothScrollTo(location.hash);
    const anchors = document.querySelectorAll('a[href^="#"], a[href^="/#"]');

    anchors.length && anchors.forEach(anchor => {
        anchor.addEventListener("click", function(e){
            smoothScrollTo(anchor.getAttribute('href').slice(1), e);
        });
    })

    function smoothScrollTo(target, e){
        target = target.replaceAll('/', '');
        const targetEl = document.querySelector(target);

        if (targetEl) {
            e && e.preventDefault();
            const offsetTop = document.querySelector(target).offsetTop;

            scroll({
                top: offsetTop,
                behavior: "smooth"
            });
        }
    }
}
