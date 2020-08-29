<?php
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Mahara',
		'menu_title'	=> 'Mahara Options',
		'menu_slug' 	=> 'mahara-options',
		'capability'	=> 'edit_posts',
    'redirect'		=> false,
    'icon_url'    => 'dashicons-marker'
	));
}