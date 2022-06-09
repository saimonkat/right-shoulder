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
                Страница не найдена
            </h1>
            <a href="<?= esc_url(home_url('/')); ?>" 
               class="page-404__btn btn">
                Вернуться на главную
            </a>

        </section>
    </div>

</div>

<?php get_footer(); ?>