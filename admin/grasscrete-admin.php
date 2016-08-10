<?php

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function grasscrete_check_unsemantic() {
    global $wp_styles;
    $srcs = array_map('basename', (array) wp_list_pluck($wp_styles->registered, 'src') );
    if ( in_array('unsemantic-grid.min.css', $srcs) || in_array('unsemantic-grid.css', $srcs) ) {
        /* echo 'unsemantic-grid registered */
    } else {
        wp_enqueue_style( 'unsemantic-grid', plugins_url('css/unsemantic-grid.min.css', dirname(__FILE__) ) );
    }
}

