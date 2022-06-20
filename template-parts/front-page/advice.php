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
			<?php if ($advice['text']): ?>
            <div class="advice__text">
                <p><?= $advice['text_1'] ?></p>
                <p><?= $advice['text_2'] ?></p>
            </div>
			<?php endif; ?>
        </div>
    </div>
</section>
