<article class="blog__item blog-post swiper-slide">
    <a href="<?php the_permalink() ?>">
        <picture class="blog-post__img">
            <img src="<?= the_post_thumbnail_url()?>"
                data-src="<?= the_post_thumbnail_url()?>"
                alt="">
        </picture>
    </a>
	<div class="blog-post__content">
        <a href="<?php the_permalink() ?>">
            <h3 class="blog-post__title h3">
                <?php the_title() ?>
            </h3>
        </a>
		<p class="blog-post__text">
			<?= get_the_excerpt() ?>
		</p>
		<a href="<?php the_permalink() ?>" class="blog-post__btn btn">Читать</a>
	</div>
</article>
