<section class="blog section section--big" id="blog">
    <div class="container">
        <h2 class="blog__title">
            Полезные стаьи
        </h2>
        <div class="blog__slider swiper">
            <div class="swiper-wrapper">

            <?php

            if( have_posts() ) :

                while( have_posts() ): the_post();

                get_template_part('tempalte-parts/excerpt/excerpt-post');

                endwhile;
                
            endif;

            ?>

            </div>
            <?php get_template_part('template-parts/components/swiper-navigation'); ?>
        </div>
    </div>
</section>
