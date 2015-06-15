<?php

add_theme_support( 'post-thumbnails' );

function add_sass(){
	wp_enqueue_style('prefix-style', get_template_directory_uri() . '/css/stylesheets/screen.css');
}
function add_google_fonts(){
	wp_enqueue_style('prefix-style', 'http://fonts.googleapis.com/css?family=Bree+Serif');
	wp_enqueue_style('prefix-style', 'http://fonts.googleapis.com/css?family=Raleway:400,300');
}

add_action('wp_enqueue_scripts', 'add_sass');
add_action('wp_enqueue_scripts', 'add_google_fonts');

?>