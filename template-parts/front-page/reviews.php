<section class="reviews section" id="reviews">
    <div class="container">
        <h2 class="reviews__title wow fadeInUp">
            Закрываем дела.
            <span>За это нас ценят.</span>
        </h2>
        <div class="reviews__slider swiper">
            <div class="swiper-wrapper">
                <div class="reviews__item review swiper-slide">
                    <div class="review__video">
                        <div class="review__video-bg">
                            <picture class="review__video-poster">
                                <source srcset="<?= DIST_URI ?>/img/base/review.webp"
                                    type="image/webp">
                                <img src="<?= DIST_URI ?>/img/base/review.jpg"
                                    data-src="<?= DIST_URI ?>/img/base/review.jpg"
                                    alt="">
                            </picture>
                            <svg width="20" height="27">
                                <use xlink:href="<?= DIST_URI ?>/img/icons/svg-sprite.svg#play"></use>
                            </svg>
                        </div>
                        <video src="<?= DIST_URI ?>/img/base/review.mp4"></video>
                    </div>
                    <div class="review__content">
                        <div class="review__name">
                            Александр Перлов
                        </div>
                        <div class="review__type">
                            Возврат вклада
                        </div>
                        <div class="review__text">
                            Большое спасибо за ваш профессионализм. Эта стрессовая ситуация прошла в итоге максимально гладко и без нервов. Очень хорошие юристы.
                        </div>
                    </div>
                </div>
                <div class="reviews__item review swiper-slide">
                    <div class="review__video">
                        <div class="review__video-bg">
                            <picture class="review__video-poster">
                                <source srcset="<?= DIST_URI ?>/img/base/review.webp"
                                    type="image/webp">
                                <img src="<?= DIST_URI ?>/img/base/review.jpg"
                                    data-src="<?= DIST_URI ?>/img/base/review.jpg"
                                    alt="">
                            </picture>
                            <svg width="20" height="27">
                                <use xlink:href="<?= DIST_URI ?>/img/icons/svg-sprite.svg#play"></use>
                            </svg>
                        </div>
                        <video src="<?= DIST_URI ?>/img/base/review.mp4"></video>
                    </div>
                    <div class="review__content">
                        <div class="review__name">
                            Александр Перлов
                        </div>
                        <div class="review__type">
                            Возврат вклада
                        </div>
                        <div class="review__text">
                            Большое спасибо за ваш профессионализм. Эта стрессовая ситуация прошла в итоге максимально гладко и без нервов. Очень хорошие юристы.
                        </div>
                    </div>
                </div>
                <div class="reviews__item review swiper-slide">
                    <div class="review__video">
                        <div class="review__video-bg">
                            <picture class="review__video-poster">
                                <source srcset="<?= DIST_URI ?>/img/base/review.webp"
                                    type="image/webp">
                                <img src="<?= DIST_URI ?>/img/base/review.jpg"
                                    data-src="<?= DIST_URI ?>/img/base/review.jpg"
                                    alt="">
                            </picture>
                            <svg width="20" height="27">
                                <use xlink:href="<?= DIST_URI ?>/img/icons/svg-sprite.svg#play"></use>
                            </svg>
                        </div>
                        <video src="<?= DIST_URI ?>/img/base/review.mp4"></video>
                    </div>
                    <div class="review__content">
                        <div class="review__name">
                            Александр Перлов
                        </div>
                        <div class="review__type">
                            Возврат вклада
                        </div>
                        <div class="review__text">
                            Большое спасибо за ваш профессионализм. Эта стрессовая ситуация прошла в итоге максимально гладко и без нервов. Очень хорошие юристы.
                        </div>
                    </div>
                </div>
            </div>
            <?php get_template_part('template-parts/components/swiper-navigation'); ?>
        </div>
    </div>
</section>