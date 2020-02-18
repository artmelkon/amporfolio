<?php

function am_theme_enqueue() {

  $uri = get_theme_file_uri();
  $ver = AM_DEV_MODE ? time() : false;

  wp_register_style( 'am-google-fonts', 'https://fonts.googleapis.com/css?family=Lato:700|Montserrat:300,400,500,600', [], $ver );
  wp_register_style( 'am-theme-style', $uri . '/assets/css/theme.css', [], $ver );
  wp_register_style( 'am-bootstrap-style', $uri . '/assets/css/bootstrap.css', [], $ver );
  // wp_register_style( 'am-bootstrap-style', $uri . '/assets/bootstrap/css/bootstrap.css', [], $ver );
  wp_register_style( 'am-animate-style', $uri . '/assets/css/animate.css', [], $ver );
  wp_register_style( 'am-icomoon-style', $uri . '/assets/css/icomoon.css', [], $ver );
  wp_register_style( 'am-owl-carousel-style', $uri . '/assets/css/owl.carousel.min.css', [], $ver );
  wp_register_style( 'am-flexslider-style', $uri . '/assets/css/flexslider.css', [], $ver );

  wp_enqueue_style( 'am-google-fonts' );
  wp_enqueue_style( 'am-theme-style' );
  wp_enqueue_style( 'am-bootstrap-style' );
  wp_enqueue_style( 'am-animate-style' );
  wp_enqueue_style( 'am-icomoon-style' );
  wp_enqueue_style( 'am-owl-carousel-style' );
  wp_enqueue_style( 'am-flexslider-style' );

  wp_register_script( 'am-bootstrap-min-js' , $uri . '/assets/js/bootstrap.min.js', [], $ver, true );
  // wp_register_script( 'am-bootstrap-js' , $uri . '/assets/bootstrap/js/bootstrap.js', [], $ver, true );
  wp_register_script( 'am-modernizr-min-js' , $uri . '/assets/js/modernizr-2.6.2.min.js', [], $ver, false );
  wp_register_script( 'am-jq-countTo-min-js' , $uri . '/assets/js/jquery.countTo.js', [], $ver, true );
  wp_register_script( 'am-jq-easing-js' , $uri . '/assets/js/jquery.easing.1.3.js', [], $ver, true );
  wp_register_script( 'am-main-js' , $uri . '/assets/js/main.js', ['jquery'], $ver, true );


// we are going to upgrade jquery to newest version
  wp_deregister_script( 'jquery' );
  wp_register_script('jquery', $uri . '/assets/js/jquery.min.js', [], '2.1.4'.$ver, false );
  wp_enqueue_script('jquery');

  wp_enqueue_script( 'am-jq-easing-js' );
  wp_enqueue_script( 'am-theme-js' );
  wp_enqueue_script( 'am-bootstrap-min-js' );
  // wp_enqueue_script( 'am-bootstrap-js' );
  wp_enqueue_script( 'am-modernizr-min-js' );
  wp_enqueue_script( 'am-jq-countTo-min-js' );
  wp_enqueue_script( 'am-main-js' );

}
