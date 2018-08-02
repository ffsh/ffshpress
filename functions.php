<?php

function grotaxblog_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'grotaxblog-style', get_stylesheet_uri(), $dependencies );
}

function grotaxblog_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '3.3.6', true );
}

function grotaxblog_wp_setup() {
    add_theme_support( 'title-tag' );
}

add_action( 'wp_enqueue_scripts', 'grotaxblog_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'grotaxblog_enqueue_scripts' );
add_action( 'after_setup_theme', 'grotaxblog_wp_setup' );

?>