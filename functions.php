<?php

function ffshpress_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'ffshpress-style', get_stylesheet_uri(), $dependencies );
}

function ffshpress_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '4.1.3', true );
}

function ffshpress_wp_setup() {
    add_theme_support( 'title-tag' );
}

function ffshpress_register_menu() {
    register_nav_menu('header-menu', __( 'Header Menu' ));
}


add_action( 'wp_enqueue_scripts', 'ffshpress_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'ffshpress_enqueue_scripts' );
add_action( 'after_setup_theme', 'ffshpress_wp_setup' );
add_action( 'init', 'ffshpress_register_menu' );

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
require_once('wp_bootstrap_pagination.php');
?>