<?php

function tskwoo_enqueue_stylesheets () {
	$handle = 'tskwoo-stylesheet';
	$src 	= get_template_directory_uri() . '/style.css';
	$deps 	= '';
	$ver 	= '2019July';
	$media 	= 'all';
	wp_register_style( $handle, $src, $deps, $ver, $media );
	wp_enqueue_style('tskwoo-stylesheet');
	$handle = 'tskwoo-app';
	$src 	= get_template_directory_uri() . '/app.css';
	wp_register_style( $handle, $src, $deps, $ver, $media );
	wp_enqueue_style('tskwoo-app');
}
add_action( 'wp_enqueue_scripts', 'tskwoo_enqueue_stylesheets' );


function tskwoo_enqueue_scripts() {
	$handle = 'tskwoo-js';
	$src 	= get_template_directory_uri() . '/app.js';
	$deps 	= 'jquery';
	$ver 	= '2019July';
	$media 	= 'all';
	wp_enqueue_script( $handle, $src, $deps , $ver , true);
	wp_enqueue_script('tskwoo-js');
}
add_action( 'wp_enqueue_scripts', 'tskwoo_enqueue_scripts' );


