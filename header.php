<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, height=device-height initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="developed" content="Development by Simon Kat & AB">

    <!-- Favicon devices support -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= DIST_URI ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= DIST_URI ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= DIST_URI ?>/favicon-16x16.png">
    <link rel="mask-icon" href="<?= DIST_URI ?>/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">

	<!-- Preloading fonts -->
	<link rel="preload" href="<?= DIST_URI ?>/fonts/IBMPlexSerif/IBMPlexSerif-Italic.woff2" as="font" type="font/woff2" crossorigin="anonymous">
	<link rel="preload" href="<?= DIST_URI ?>/fonts/Circe/Circe-Regular.woff2" as="font" type="font/woff2" crossorigin="anonymous">
	<link rel="preload" href="<?= DIST_URI ?>/fonts/Circe/Circe-Bold.woff2" as="font" type="font/woff2" crossorigin="anonymous">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="header">
        <div class="header__content container">
            <a href="#hero" class="header__logo logo">
                <svg width="48" height="48" class="logo__img">
                    <use xlink:href="<?= DIST_URI ?>/img/icons/svg-sprite.svg#logo"></use>
                </svg>
                <div class="logo__content">
                    <span class="logo__title">Правовое плечо</span>
                    <span class="logo__text">Центр юристов и адвокатов</span>
                </div>
            </a>

            <?php /*
                $args = array(
                    'theme_location' => 'header-menu',
                    'container' => 'nav',
                    'menu_class' => 'header__nav nav',
                );
                wp_nav_menu($args);
            */ ?>

            <nav class="header__nav nav">
                <ul>
                    <li><a href="#blog">Блог</a></li>
                    <li><a href="#reviews">Отзывы</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="#contacts">Контакты</a></li>
                </ul>
            </nav>

            <div class="header__contacts">
                <a href="tel:8 800-999-99-99">8 800-999-99-99</a>
                <a href="mailto:example@domain.com">example@domain.com</a>
            </div>

            <button class="header__btn btn" 
                    data-fancybox 
                    data-src="#modal-call" 
                    role="button">
                Перезвонить мне
            </button>
        </div>
    </header>

    <div class="wrapper">
        <main class="main">
