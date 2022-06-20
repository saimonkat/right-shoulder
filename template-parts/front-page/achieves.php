<?php $achieves = get_field('achieves'); ?>

<section class="achieves section">
    <div class="container">
        <h2 class="visually-hidden">Наши достижения</h2>
        <div class="achieves__list">
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
    </div>
</div>
</section>
