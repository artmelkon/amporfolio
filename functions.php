<?php

// setup
define('AM_DEV_MODE', true);

// includeds
include( get_theme_file_path( '/inc/front/enqueue.php' ) );
include( get_theme_file_path( '/inc/setup.php' ) );
// include( get_theme_file_path( '/inc/custom-nav-walker.php' ) );
// hooks
add_action( 'wp_enqueue_scripts', 'am_theme_enqueue' );
add_action( 'after_setup_theme', 'am_setup_theme' );

add_filter( 'nav_menu_link_attributes', 'am_menu_attributes', 10, 3 );

// shortcodes
