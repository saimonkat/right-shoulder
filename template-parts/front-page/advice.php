<?php $advice = get_field('advice'); ?>

<section class="advice section">
    <div class="container">
        <div class="advice__content wow fadeInUp">
            <?php if ($advice['subtitle']): ?>
                <div class="advice__subtitle"><?= $advice['subtitle'] ?></div>
            <?php endif; ?>
            <?php if ($advice['title']): ?>
            <h2 class="advice__title"><?= $advice['title'] ?></h2>
            <?php endif; ?>
            <div class="advice__text">
				<?php if ($advice['text_1']): ?>
                	<p><?= $advice['text_1'] ?></p>
				<?php endif; ?>
				<?php if ($advice['text_2']): ?>
                <p><?= $advice['text_2'] ?></p>
				<?php endif; ?>
            </div>
        </div>
    </div>
</section>
