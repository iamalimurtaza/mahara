<?php

function mahara_styles(){
  // Styles
  wp_register_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', [], '4.7.0' );
  wp_register_style( 'swipercss', get_template_directory_uri() . '/css/swiper.min.css', [], '4.5.4' );
  wp_register_style( 'style', get_stylesheet_uri(), [], '1.0.0' );

  wp_enqueue_style( 'font-awesome' );
  wp_enqueue_style( 'swipercss' );
  wp_enqueue_style( 'style' );


  // Scripts
  wp_register_script( 'swiperjs', get_template_directory_uri() . '/js/swiper.min.js', [], '4.5.4', true );
  wp_register_script( 'app', get_template_directory_uri() . '/js/app.js', [], '1.0.0', true );

  wp_enqueue_script( 'swiperjs' );
  wp_enqueue_script( 'app' );
}