<?php

define('DIST_URI', get_template_directory_uri() . '/assets/dist');

if ( ! defined('_S_VERSION')) {
    define('_S_VERSION', '1.0.0');
}

if ( ! function_exists('theme_setup')) :
    function theme_setup()
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');

        register_nav_menus(
            array(
                'header-menu' => esc_html__('Header', 'theme'),
                'footer-menu' => esc_html__('Footer', 'theme'),
            )
        );

        add_theme_support(
            'html5',
            array(
                'gallery',
                'style',
                'script',
            )
        );

    }
endif;
add_action('after_setup_theme', 'theme_setup');


function enqueue_theme_style_scripts()
{
    wp_enqueue_style('styles', get_template_directory_uri() . '/assets/dist/css/style.min.css', array(), _S_VERSION);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/dist/js/scripts.bundle.js', array(), _S_VERSION, true);
}

add_action('wp_enqueue_scripts', 'enqueue_theme_style_scripts');

// Lazyload fix
function nonoscript_lazyload($in) {
   return str_replace( '<noscript><style>.lazyload{display:none;}</style></noscript>', '', $in ) ;
}
add_filter( 'autoptimize_filter_imgopt_lazyload_cssoutput', 'nonoscript_lazyload');

require get_template_directory() . '/app/vendor/autoload.php';
require get_template_directory() . '/app/init.php';


add_action( 'wp_footer', 'metrika' );

function metrika(){
	?>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
       (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
       m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
       (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

       ym(89240116, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
       });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/89240116" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
	<?php
}
