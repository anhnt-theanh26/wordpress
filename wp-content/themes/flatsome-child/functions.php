<?php
// Add custom Theme Functions here
// Add custom Theme Functions here
add_filter('use_block_editor_for_post', '__return_false');
add_filter('gutenberg_use_widgets_block_editor', '__return_false');
add_filter('use_widgets_block_editor', '__return_false');


define('URL_TG', get_stylesheet_directory_uri());
define('DOMAIN', 'flatsome');




function load_css()
{
    wp_enqueue_script('my-js', get_stylesheet_directory_uri() . '/assets/js/my-js.js', array(), '', true);
    wp_enqueue_style('owl-theme-css', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style('owl-css', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_script('jquery');
    // js sale 1
    wp_enqueue_script('owl-js', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js');
    // css sale 1
    wp_enqueue_style('css_desktop', get_stylesheet_directory_uri() . '/assets/css/css.desktop.css');
    wp_enqueue_style('css_mobile', get_stylesheet_directory_uri() . '/assets/css/css.mobile.css');
    wp_enqueue_style('css_tablet', get_stylesheet_directory_uri() . '/assets/css/css.tablet.css');

    
    // js sale 2
    wp_enqueue_script('sale2_js', get_stylesheet_directory_uri() . '/assets/js/sale2.js');
    // css sale 2
    wp_enqueue_style('sale2_css_desktop', get_stylesheet_directory_uri() . '/assets/css/sale2.destop.css');
    wp_enqueue_style('sale2_css_mobile', get_stylesheet_directory_uri() . '/assets/css/sale2.mobile.css');
    wp_enqueue_style('sale2_css_tablet', get_stylesheet_directory_uri() . '/assets/css/sale2.tablet.css');
}
add_action('wp_enqueue_scripts', 'load_css');

include 'code/bg_image.php';
include 'code/add_shortcode.php';
include 'code/st3_add_owl_slide.php';
include 'code/st4_add_table.php';
include 'code/st5_add_tab.php';
include 'code/st6_add_footer.php';
include 'code/post-type.php';

include 'code/sale2_st2_owl_carousel.php';