<?php
function mahara_support(){
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'html5' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'menus' );
  add_image_size( 'home-slide', 1280, 450, true );
  add_image_size( 'home-course', 370, 230, true );

  // Menus
  register_nav_menus([
    'primary-menu'    =>  __('Primary Menu', 'mahara'),
    'footer-menu'     =>  __('Footer Menu', 'mahara'),
    'language-switch' =>  __('Language Switcher', 'mahara')
  ]);
}