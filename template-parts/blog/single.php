<div class="page">
    <div class="container">
        <div class="post">
            <?php the_post_thumbnail('full', ['class' => 'post__img']); ?>
            <h1 class="post__title">
                <?php the_title(); ?>
            </h1>
            <div class="post__content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>