<?php
function load_styles_and_scripts()
{
	wp_enqueue_style('tailwind-styles', get_template_directory_uri() . '/css/tailwind_output.css', array(), null);
	wp_enqueue_style('bootstrap-styles', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css', array(), '5.3.2');
	wp_enqueue_script('bootstrap-scripts', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array(), null);
	wp_enqueue_style('bootstrap-icons-styles', get_template_directory_uri() . '/node_modules/bootstrap-icons/font/bootstrap-icons.min.css', array(), '5.3.2');
}

add_action('wp_enqueue_scripts', 'load_styles_and_scripts');
