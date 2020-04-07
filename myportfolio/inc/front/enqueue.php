<?php

function am_register_scripts() {

  $uri = get_theme_file_uri();
  // echo $uri;

  $ver = AM_DEV_MODE ? time() : false;

  wp_register_style( 'am-google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' );
  wp_register_style( 'am-style', $uri . '/assets/css/style.css', [], $ver );
  wp_register_style( 'am-bootstrap', $uri . '/assets/css/bootstrap/bootstrap-grid.css', [], $ver );
  wp_register_style( 'am-iconic-bootstrap', $uri . '/assets/css/open-iconic-bootstrap.min.css', [], $ver );
  wp_register_style( 'am-animate', $uri . '/assets/css/animate.css', [], $ver );
  wp_register_style( 'am-owl-carousel', $uri . '/assets/css/owl.carousel.min.css', [], $ver );
  wp_register_style( 'am-owl-theme', $uri . '/assets/css/owl.theme.default.min.css', [], $ver );
  wp_register_style( 'am-magnific-popup', $uri . '/assets/css/magnific-popup.css', [], $ver );
  wp_register_style( 'am-aos', $uri . '/assets/css/aos.css', [], $ver );
  wp_register_style( 'am-ionicons', $uri . '/assets/css/ionicons.min.css', [], $ver );
  wp_register_style( 'am-flaticon', $uri . '/assets/css/flaticon.css', [], $ver );
  wp_register_style( 'am-icomoon', $uri . '/assets/css/icomoon.css', [], $ver );


  wp_enqueue_style( 'am-google-fonts' );
  wp_enqueue_style( 'am-style' );
  wp_enqueue_style( 'am-bootstrap' );
  wp_enqueue_style( 'am-animate' );
  wp_enqueue_style( 'am-owl-carousel' );
  wp_enqueue_style( 'am-owl-theme' );
  wp_enqueue_style( 'am-magnific-popup' );
  wp_enqueue_style( 'am-aos' );
  wp_enqueue_style( 'am-ionicons' );
  wp_enqueue_style( 'am-flaticon' );
  wp_enqueue_style( 'am-icomoon' );
}