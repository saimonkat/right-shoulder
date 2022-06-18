<?php $hero = get_field('hero'); ?>

<section class="hero section" id="hero">
    <div class="hero__container container">
        <div class="hero__content">
            <?php if ($hero['title']): ?>
                <h1 class="hero__title wow fadeInUp" data-wow-delay="200">
                    <?= $hero['title']; ?>
                </h1>
            <?php endif; ?>

            <?php if ($hero['text']): ?>
                <div class="hero__text wow fadeInUp" data-wow-delay="300">
                    <?= $hero['text']; ?>
                </div>
            <?php endif; ?>

            <div class="hero__buttons wow fadeInUp" data-wow-delay="400">
                <?php if ($hero['button_1']): ?>
                    <button class="btn btn--big"
                            data-fancybox
                            data-src="<?= $hero['button_1']['url']; ?>">
                        <?= $hero['button_1']['title']; ?>
                    </button>
                <?php endif; ?>
                <?php if ($hero['button_2']): ?>
                    <a href="<?= $hero['button_2']['url']; ?>"
                       class="btn btn--big btn--white">
                        <?= $hero['button_2']['title']; ?>
                    </a>
                <?php endif; ?>
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
