<?php

function zosia_theme_support(){
    add_theme_support('custom-logo');
}

add_action('after_setup_theme','zosia_theme_support');


function zosia_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('zosia-style', get_template_directory_uri() . '/style.css', null , $version, 'all');
    wp_enqueue_style('zosia-main-style', get_template_directory_uri() . '/assets/src/sass/main.css', null, time(), 'all');
    wp_enqueue_style('zosia-fonts', 'https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap', null, $version, 'all');

}

add_action('wp_enqueue_scripts', 'zosia_register_styles');

function zosia_register_scripts()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('zosia-script', get_template_directory_uri() . '/assets/dist/index.js', null, $version, true);
}

add_action('wp_enqueue_scripts', 'zosia_register_scripts');

function zosia_menus(){
    $locations = array(
        'main' => 'Main menu',
    );
    register_nav_menus($locations);
}

add_action('init','zosia_menus');