<?php
// Enqueue styles
function asthan_theme_styles() {
  wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'asthan_theme_styles');

// Enable featured images
add_theme_support('post-thumbnails');

// Register nav menu
function asthan_register_menus() {
  register_nav_menus(array(
    'main-menu' => __('Main Menu'),
  ));
}
add_action('after_setup_theme', 'asthan_register_menus');