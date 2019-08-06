<?php
/**
 * Add theme supports
 */
add_action('after_setup_theme', function () {
  add_theme_support('custom-logo', [
    'height'      => 200,
    'width'       => 200,
    'flex-width'  => true,
    'flex-height' => true,
    'header-text' => ['site-title', 'site-description']
  ]);

  // This theme uses wp_nav_menu() in two locations.
  register_nav_menus([
    'menu-main' => __( 'Main', 'themeofoz' )
  ]);
});

/**
 * Include styles
 * - style.css isn't actually 
 */
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('style', get_template_directory_uri() . '/dist/app.css');
});