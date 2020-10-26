<?php
function mahara_admin_styles(){
    wp_register_style( 'admin-css', get_template_directory_uri() . '/admin/admin-styles.css', [], false );
    wp_enqueue_style( 'admin-css' );
}
add_action( 'admin_enqueue_scripts', 'mahara_admin_styles' );