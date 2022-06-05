<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, height=device-height initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="developed" content="Development by OnePix & Thousand Lines">

    <!-- Favicon devices support -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= DIST_URI ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= DIST_URI ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= DIST_URI ?>/favicon-16x16.png">
    <link rel="mask-icon" href="<?= DIST_URI ?>/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">

	<!-- Preloading fonts -->
	<link rel="preload" href="<?= DIST_URI ?>/fonts/Roboto/Roboto-Regular.woff2" as="font" type="font/woff2" crossorigin="anonymous">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="header">
        <div class="header__content container">   
            <a href="/" class="header__logo">
                <svg width="50" height="30">
                    <use xlink:href="<?= DIST_URI . '/images/icons/svg-sprite.svg#logo'; ?>"></use>
                </svg>
            </a>
         
            <?php
                $args = array(
                    'theme_location' => 'header-menu',
                    'container' => 'nav',
                    'menu_class' => 'header__nav nav',
                );
                wp_nav_menu($args);
            ?>

            <div class="nav-backdrop"></div>

            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <div class="wrapper">
        <main class="main">
