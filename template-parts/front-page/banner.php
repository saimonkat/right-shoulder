<?php $banner = get_field('banner'); ?>

<section class="home-banner section">
    <div class="container">
        <?php if ($banner['text']): ?>
            <div class="home-banner__text">
                <?= $banner['text']; ?>
            </div>
        <?php endif; ?>
        <?php if ($banner['link_1']): ?>
            <a href="<?= $banner['link_1']['url']; ?>" class="btn">
                <?= $banner['link_1']['title']; ?>
            </a>
        <?php endif;?>
    </div>
</section>