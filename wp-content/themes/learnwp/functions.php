<?php

function load_scripts() {
    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js', array('jquery'), '3.4.1', true );
    wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css', array(), '3.4.1', 'all' );
    wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );
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
    // add formatting menu to theme
    add_theme_support( 'post-formats', array('video', 'image') );
}
// last param handles priority of the function
add_action( 'after_setup_theme', 'learnwp_config', 0);

// Registering our sidebars
function learnwp_sidebars() {
    // homepage sidebar
    register_sidebar(
        array(
            'name'          => 'Home Page Sidebar',
            'id'            => 'sidebar-1',
            'description'   => 'This is the Home Page Sidebar. You can add your widgets here',
            'before_widget' => '<div class="widget-wrapper">', // The HTML element that will serve as a wrapper element for the widget
            'after_widget'  => '</div>', // Closing of the html element above
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>'
        )
    );
    // blog sidebar
    register_sidebar(
        array(
            'name'          => 'Blog Sidebar',
            'id'            => 'sidebar-2',
            'description'   => 'This is the Blog Page Sidebar. You can add your widgets here',
            'before_widget' => '<div class="widget-wrapper">', // The HTML element that will serve as a wrapper element for the widget
            'after_widget'  => '</div>', // Closing of the html element above
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>'
        )
    );
}
add_action('widgets_init', 'learnwp_sidebars');