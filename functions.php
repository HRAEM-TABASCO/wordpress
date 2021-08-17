<?php

function followhmujertab_register_styles() {
    wp_enqueue_style('hmujertab-style',get_template_directory_uri()."/style.css", array(), '1.0', 'all');
    wp_enqueue_style('hmujertab-bootstrap',get_template_directory_uri()."/style.css", array(), '1.0', 'all');
    wp_enqueue_style('hmujertab-fontawesome',get_template_directory_uri()."/style.css", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'followhmujertab_register_styles');
