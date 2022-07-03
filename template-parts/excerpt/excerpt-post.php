<article class="blog__item blog-post swiper-slide">
	<picture class="blog-post__img">
		<source srcset="<?= DIST_URI ?>/img/base/blog-post.webp"
			type="image/webp">
		<img src="<?= DIST_URI ?>/img/base/blog-post.jpg"
			data-src="<?= DIST_URI ?>/img/base/blog-post.jpg"
			alt="">
	</picture>
	<div class="blog-post__content">
		<h3 class="blog-post__title h3">
			<?php the_title() ?>
		</h3>
		<p class="blog-post__text">
			<?= get_the_excerpt() ?>
		</p>
		<a href="<?php the_permalink() ?>" class="blog-post__btn btn">Читать</a>
	</div>
</article>
