<section class="achieves section">
    <div class="container">
        <h2 class="visually-hidden">Наши достижения</h2>
        <div class="achieves__list">
<<<<<<< Updated upstream
            <?php if( have_rows('achieves', 'option') ): ?>
                <?php while( have_rows('achieves', 'option') ): the_row(); ?>
                    <div class="achieves__item achieve wow fadeInUp" data-wow-delay="">
                        <div class="achieve__title h2"><?= get_sub_field('title', 'option'); ?></div>
                        <div class="achieve__text"><?= get_sub_field('desc', 'option'); ?></div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
=======
            <?php foreach($achieves['list'] as $achieve): ?>
                <div class="achieves__item achieve wow fadeInUp" data-wow-delay="">
                    <?php if ($achieve['title']): ?>
                    <div class="achieve__title h2"><?= $achieve['title'] ?></div>
					 <?php endif; ?>
					 <?php if ($achieve['text']): ?>
                    <div class="achieve__text"><?= $achieve['text'] ?></div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
>>>>>>> Stashed changes
    </div>
</section>
