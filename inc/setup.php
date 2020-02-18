<?php

function am_setup_theme() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'amshop' ) );
}

//  add custom Attribute to navbar menu
function am_menu_attributes( $atts, $item, $args ) {
  if( $args->theme_location == 'primary' ):
      $atts['data-nav-section'] = strtolower($item->title);
  endif;
  return $atts;
}