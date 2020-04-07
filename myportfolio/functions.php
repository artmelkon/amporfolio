<?php


// Setup
define( 'AM_DEV_MODE', true );

// Include
include( get_theme_file_path( '/inc/front/enqueue.php' ) ); 

// Hooks
add_action( 'wp_enqueue_scripts', 'am_register_scripts');

// Shortcodes

