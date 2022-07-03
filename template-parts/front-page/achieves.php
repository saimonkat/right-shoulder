<?php $achieves = get_field('achieves'); ?>

<section class="achieves section">
    <div class="container">
        <h2 class="visually-hidden">Наши достижения</h2>
        <div class="achieves__list">
<<<<<<< HEAD
            <?php foreach($achieves['list'] as $achieve): ?>
                <div class="achieves__item achieve wow fadeInUp" data-wow-delay="">

=======
            
            <?php foreach($achieves['list'] as $achieve): ?>
                <div class="achieves__item achieve wow fadeInUp" data-wow-delay="">
>>>>>>> 1874dc7f841431c5973a126bfff95476abdf9634
                    <?php if ($achieve['title']): ?>
                    <div class="achieve__title h2"><?= $achieve['title'] ?></div>
					 <?php endif; ?>
					 <?php if ($achieve['text']): ?>
                    <div class="achieve__text"><?= $achieve['text'] ?></div>
                <?php endif; ?>
<<<<<<< HEAD
                
=======
>>>>>>> 1874dc7f841431c5973a126bfff95476abdf9634
            </div>
        <?php endforeach; ?>
    </div>
</div>
</section>
