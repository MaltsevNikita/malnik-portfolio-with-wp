<?php
  wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css');
  wp_enqueue_style( 'bootstap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
  wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css');
  wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css');

// Регистрация jQuery
add_action( 'wp_enqueue_scripts', 'jquery_script_method' );
function jquery_script_method() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );
}    

wp_enqueue_script( 'WOW', get_template_directory_uri() . '/assets/js/wow.min.js');