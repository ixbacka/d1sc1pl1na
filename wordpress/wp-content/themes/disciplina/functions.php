<?php
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script( 'fotorama', get_template_directory_uri() . '/js/fotorama-4.6.4/fotorama.js', none, '4.6.4', false);
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', none, '1.0', false);
	wp_enqueue_style( 'fotorama', get_template_directory_uri() . '/js/fotorama-4.6.4/fotorama.css',false,'4.6.4','all');
?>