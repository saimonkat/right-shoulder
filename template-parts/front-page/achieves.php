<section class="achieves section">
    <div class="container">
        <h2 class="visually-hidden">Наши достижения</h2>
        <div class="achieves__list">
            <?php if( have_rows('achieves', 'option') ): ?>
                <?php while( have_rows('achieves', 'option') ): the_row(); ?>
                    <div class="achieves__item achieve wow fadeInUp" data-wow-delay="">
                        <div class="achieve__title h2"><?= get_sub_field('title', 'option'); ?></div>
                        <div class="achieve__text"><?= get_sub_field('desc', 'option'); ?></div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
