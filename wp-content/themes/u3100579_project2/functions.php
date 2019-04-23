<?php
/*
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Flexia Child - Flexia
 * @since 1.0.0
 */

/*
 * Define Constants
 */
define( 'FLEXIA_CHILD_FLEXIA_CHILD_VERSION', '1.0.0' );

/*
 * Enqueue styles
 */
function child_enqueue_styles() {
    $parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_stylesheet_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), FLEXIA_CHILD_FLEXIA_CHILD_VERSION, 'all' );
}
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles' );

