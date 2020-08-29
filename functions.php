<?php

// Includes
include get_template_directory() . '/inc/enqueue.php';
include get_template_directory() . '/inc/acf.php';
include get_template_directory() . '/inc/support.php';

// Hooks
add_action( 'wp_enqueue_scripts', 'mahara_styles' );
add_action( 'after_setup_theme', 'mahara_support' );