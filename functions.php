<?php

function followhmujertab_menus(){
    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );
    register_nav_menus( $locations);
}

add_action('init', 'followhmujertab_menus');
function followhmujertab_theme_support(){
    /* add dynamic title tag support */

    add_theme_support('title-tag');

}

add_action('after_setup_theme', 'followhmujertab_theme_support');
/* CSS */
function followhmujertab_register_styles() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('hmujertab-style',get_template_directory_uri()."/style.css", array('hmujertab-bootstrap'), '1.0', 'all');
    wp_enqueue_style('hmujertab-bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '1.0', 'all');
    wp_enqueue_style('hmujertab-fontawesome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'followhmujertab_register_styles');

/*JavaScript*/
function followhmujertab_register_scripts() {
    wp_enqueue_script('hmujertab-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('hmujertab-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '3.4.1', true);
    wp_enqueue_script('hmujertab-main', get_template_directory_uri().'/assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'followhmujertab_register_scripts');



