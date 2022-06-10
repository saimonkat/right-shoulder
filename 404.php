<?php 
/**
	* The template for displaying 404 pages (not found)
	*/

	get_header();
?>

<div class="page-404">
    <div class="container">
        <section class="page-404__content">
            <h1 class="page-404__title">
                404
            </h1>
            <div class="page-404__text">
                Страница не найдена
            </div>
            <a href="<?= esc_url(home_url('/')); ?>" 
               class="page-404__btn btn">
                Вернуться на главную
            </a>

        </section>
    </div>

</div>

<?php get_footer(); ?>