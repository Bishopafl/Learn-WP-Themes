<?php

function load_scripts() {
    wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );
    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js', array('jquery'), '3.4.1', true );
    wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css', array(), '3.4.1', 'all' );
}
add_action('wp_enqueue_scripts', 'load_scripts');

function learnwp_config() {
    // Registering out menus
    register_nav_menus(
        array(
            'my_mayne_menu' => 'Mayne Menu',
            'footer_menu' => 'Footer Menu'
        )
    );

    // custom header themes
    $args = array(
        'height'    => 225,
        'width'     => 1920
    );
    add_theme_support( 'custom-header', $args);

    // add thumbnail support
    add_theme_support( 'post-thumbnails' );
}
// last param handles priority of the function
add_action( 'after_setup_theme', 'learnwp_config', 0);