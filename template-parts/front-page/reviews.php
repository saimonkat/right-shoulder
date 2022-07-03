<?php $reviews = get_field('reviews'); ?>

<section class="reviews section section--big" id="reviews">
    <div class="container">
        <h2 class="reviews__title wow fadeInUp">
            Закрываем дела.
            <span>За это нас ценят.</span>
        </h2>
        <div class="reviews__slider swiper">
            <div class="swiper-wrapper">
                <?php foreach($reviews['list'] as $review): ?>
<<<<<<< HEAD

                        <div class="reviews__item review swiper-slide">
                            <div class="review__video">
                                <div class="review__video-bg">
                                    <picture class="review__video-poster">
                                        <source srcset="<?= DIST_URI ?>/img/base/review.webp"
                                            type="image/webp">
                                            <?php if ($achieve['preview']): ?>
                                        <img src="<?= DIST_URI ?>/img/base/review.jpg"
                                            data-src="<<?= ($achieve['preview']): ?>"
=======
                    
                    <div class="reviews__item review swiper-slide">
                        <div class="review__video">
                            <div class="review__video-bg">
                                <picture class="review__video-poster">
                                    <!-- <source srcset="<?= $review['preview'] ?>"
                                        type="image/webp"> -->
                                        <?php if ($achieve['preview']): ?>
                                            <img src="<?= $review['preview'] ?>"
                                            data-src="<?= $review['preview'] ?>"
>>>>>>> 1874dc7f841431c5973a126bfff95476abdf9634
                                            alt="">
                                        <?php endif; ?>
                                    </picture>
                                    <svg width="20" height="27">
                                        <use xlink:href="<?= DIST_URI ?>/img/icons/svg-sprite.svg#play"></use>
                                    </svg>
                                </div>
                                <video src="<?= $review['video']['url'] ?>"></video>
                            </div>
                            <div class="review__content">
                                <div class="review__name">
                                    <?= $review['name'] ?>
                                </div>
                                <div class="review__type">
                                    <?= $review['type'] ?>
                                </div>
                                <div class="review__text">
                                    <?= $review['text'] ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php get_template_part('template-parts/components/swiper-navigation'); ?>
            </div>
        </div>
    </section>