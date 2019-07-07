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

// add theme support
add_theme_support('menus');
add_theme_support ('post-thumbnails');

// register Menus
register_nav_menus (
	array (
		'top-menu' => __('Top Menu', 'tskwoo'),
	)
);

// add image size
// add_image_size('post_image', 1100, 550, true); true-> crop
// its better to upload all images of same size for featured image
add_image_size('post_image', 1100, 550, false);


// add Widgets
register_sidebar (
	[
		'name'			=> 'Page Sider Bar',
		'id'			=> 'page-sidebar',
		'class'			=> '',
		'before_title'	=> '<h4>',
		'after_title'	=> '</h4>'
	]
);




