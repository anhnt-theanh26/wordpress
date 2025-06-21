<?php
// Add custom Theme Functions here

function load_bootstrap_assets()
{
    wp_enqueue_style('css_bootstrap', get_template_directory_uri() . './css/bootstrap.min.css', array(), '5.3.7', 'all');
    wp_enqueue_script('js_bootstrap', get_template_directory_uri() . './js/bootstrap.min.js', array('jquery'), '5.3.7', true);
}

add_action('wp_enqueue_scripts', 'load_bootstrap_assets');