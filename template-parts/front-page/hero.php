<section class="hero section" id="hero">
    <div class="hero__container container">
        <div class="hero__content">
            <h1 class="hero__title wow fadeInUp" data-wow-delay="200">
                Бесплатная<br> юридическая<br> консультация
            </h1>
            <div class="hero__text wow fadeInUp" data-wow-delay="300">
                мы ответим на ваш вопрос и предложим выход из спорной ситуации
            </div>
            <div class="hero__buttons wow fadeInUp" data-wow-delay="400">
                <button class="btn btn--big"
                        data-fancybox
                        data-src="#modal-call">
                    Перезвонить мне
                </button>
                <a href="https://wa.me/88009999999"
                   class="btn btn--big btn--white">
                   WhatsApp
                </a>
            </div>
        </div>
    </div>

    <div class="hero__bg">
        <picture class="wow fadeInLeft">
            <source srcset="<?= DIST_URI ?>/img/base/hero-case.webp"
                type="image/webp">
            <img src="<?= DIST_URI ?>/img/base/hero-case.png"
                data-src="<?= DIST_URI ?>/img/base/hero-case.png"
                alt="">
        </picture>
        <picture class="wow fadeInRight">
            <source srcset="<?= DIST_URI ?>/img/base/case-left.webp"
                type="image/webp">
            <img src="<?= DIST_URI ?>/img/base/case-left.png"
                data-src="<?= DIST_URI ?>/img/base/case-left.png"
                alt="">
        </picture>
    </div>
</section>
