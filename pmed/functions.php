<?php

function load_stylesh()
{
wp_register_style('bootstrap',get_template_directory_uri() .'/bootstrap/css/bootstrap.min.css' ,array(), 1, 'all');
wp_enqueue_style('bootstrap');

wp_register_style('grid',get_template_directory_uri() .'/bootstrap/css/bootstrap-grid.min.css' ,array(), 1, 'all');
wp_enqueue_style('grid');

wp_register_style('styles',get_template_directory_uri() .'/css/style.css', array(), 1, 'all');
wp_enqueue_style('styles');
}

add_action('wp_enqueue_scripts', 'load_stylesh');

















//Load scripts
 
function load_js()
{
    wp_register_script('scripts',get_template_directory_uri() . '/js/script.js', array(), 1, 1, 1);
    wp_enqueue_script('scripts');

}
add_action('wp_enqueue_scripts', 'load_js');














































