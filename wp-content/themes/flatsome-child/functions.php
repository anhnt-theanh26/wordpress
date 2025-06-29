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
    wp_enqueue_style('owl-theme-css', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style('owl-css', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.css');
    wp_enqueue_script('jquery-js', 'https://code.jquery.com/jquery-3.4.1.min.js', array('jquery'));
    wp_enqueue_script('owl-js', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'));

    wp_enqueue_style('css_desktop', get_stylesheet_directory_uri() . '/assets/css/css.desktop.css', array(), '', 'all');
    wp_enqueue_style('css_mobile', get_stylesheet_directory_uri() . '/assets/css/css.mobile.css', array(), '', 'all');
    wp_enqueue_style('css_tablet', get_stylesheet_directory_uri() . '/assets/css/css.tablet.css', array(), '', 'all');
}
add_action('wp_enqueue_scripts', 'load_css');

include 'code/add_shortcode.php';
include 'code/st3_add_owl_slide.php';
include 'code/st4_add_table.php';