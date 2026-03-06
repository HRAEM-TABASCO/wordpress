<?php

function followhmujertab_menus() {
    $locations = array(
        'primary' => 'Navigation bar',
        'footer'  => 'Footer Menu Items',
    );

    register_nav_menus($locations);
}
add_action('init', 'followhmujertab_menus');

function followhmujertab_theme_support() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'followhmujertab_theme_support');

$followhmujertab_walker = get_template_directory() . '/class-walker.php';
if (file_exists($followhmujertab_walker)) {
    require_once $followhmujertab_walker;
}

function followhmujertab_register_styles() {
    wp_enqueue_style('hmujertab-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');
    wp_enqueue_style('hmujertab-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '1.0', 'all');
    wp_enqueue_style('hmujertab-icons-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'followhmujertab_register_styles');

function followhmujertab_register_scripts() {
    wp_enqueue_script('hmujertab-bootstrap', get_template_directory_uri() . '/assets/bootstrap/dist/js/bootstrap.min.js', array(), '5.0', true);
    wp_enqueue_script('hmujertab-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'followhmujertab_register_scripts');
