<?php $features = get_field('features'); ?>

<section class="features section">
    <div class="container">
        <div class="features__content wow fadeInUp">
            <?php if ($features['title']): ?>
                <h2 class="features__title">
                    <?= $features['title']; ?>
                </h2>
            <?php endif; ?>
            <?php if ($features['text']): ?>
                <div class="features__text">
                    <?= $features['text']; ?>
                </div>
            <?php endif; ?>
        </div>
        <?php if($features['list']): ?>
        <div class="features__slider swiper">
            <div class="swiper-wrapper">
                <?php foreach($features['list'] as $feature): ?>
                <div class="features__item feature swiper-slide">
                    <?= $feature['svg']; ?>
                    <div class="feature__title">
                        <?= $feature['title']; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php get_template_part('template-parts/components/swiper-navigation'); ?>
        </div>
        <?php endif; ?>
    </div>
</section>