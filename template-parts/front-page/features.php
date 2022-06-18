<section class="features section">
    <div class="container">
        <div class="features__content wow fadeInUp">
            <h2 class="features__title">Что мы можем вам<br> предложить</h2>
            <div class="features__text">У нас доступно много специализаций<br> юридической помощи</div>
        </div>
        <div class="features__slider swiper">
            <div class="swiper-wrapper">
                <?php if( have_rows('achieves', 'option') ): ?>
                    <?php while( have_rows('achieves', 'option') ): the_row(); ?>
                        <div class="features__item feature swiper-slide">
                            <svg width="64" height="64" class="feature__icon">
                                <use xlink:href="<?= get_sub_field('img', 'option'); ?>"></use>
                            </svg>
                            <div class="feature__title"><?= get_sub_field('name', 'option'); ?></div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <?php get_template_part('template-parts/components/swiper-navigation'); ?>
        </div>
    </div>
</section>
