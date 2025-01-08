<?php
    include_once 'includes/enqueue-files.php';

function restaurant_theme_setup() {
    // featured images
    add_theme_support('post-thumbnails');

    // menu register
    register_nav_menus([
        'primary' => __('Main Menu', 'restaurant-theme'),
        'footer'  => __('Footer Menu', 'restaurant-theme'),
    ]);
}
add_action('after_setup_theme', 'restaurant_theme_setup');

// scripts and styes
function restaurant_theme_assets() {
    wp_enqueue_style('restaurant-style', get_stylesheet_uri());
    wp_enqueue_script('restaurant-scripts', get_template_directory_uri() . '/assets/js/main.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'restaurant_theme_assets');