<?php

add_theme_support('menus');

function register_theme_menus() {

	register_nav_menus(

		array(
			'primary-menu' => __ ('Primary Menu'),
			)
		);
}
add_action( 'init', 'register_theme_menus');

function knoxcarter_scripts() {

	#CSS Stylesheets

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/css/customcss.min.css' );
	

	
	

    
    #JS
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.7', true );



	wp_enqueue_script( 'sr_js', get_template_directory_uri() . '/js/scrollreveal.js', array('jquery'), '3.3.7', true );
	wp_enqueue_script( 'custom_js', get_template_directory_uri() . '/js/custom.js', array('jquery'), '3.3.7', true );

}

add_action( 'wp_enqueue_scripts', 'knoxcarter_scripts' );