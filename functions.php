<?php

/* *---------------------------------------------------------------------------
 * Herozh - Child Theme Functions and Definitions
 * ----------------------------------------------------------------------------
 * Contents:
 * 00 - Global Variables
 * 01 - Theme Constants
 * 02 - Basic Definitions
 * 03 - Includes
 */

function studiare_child_enqueue_styles() {
    wp_enqueue_style( "studiare-child", get_template_directory_uri() . '/style.css');
}
add_action( 'wp_enqueue_scripts', 'studiare_child_enqueue_styles',100 );