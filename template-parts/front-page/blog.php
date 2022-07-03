<section class="blog section section--big" id="blog">
    <div class="container">
        <h2 class="blog__title">
            Полезные стаьи
        </h2>
        <div class="blog__slider swiper">
            <div class="swiper-wrapper">

            <?php

			$args = array(
				'post_type' 	 => 'post',
				'posts_per_page' => 6,
				'publish' 		 => true
			);


			$q = new WP_Query($args);

            if( $q->have_posts() ) :

                while( $q->have_posts() ): $q->the_post();

                get_template_part('template-parts/excerpt/excerpt-post');

                endwhile;

			else:

			echo 'Здесь пока ничего нет';

            endif;

			wp_reset_postdata();

            ?>

            </div>
            <?php get_template_part('template-parts/components/swiper-navigation'); ?>
        </div>
    </div>
</section>
