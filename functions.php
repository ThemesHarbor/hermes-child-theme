<?php
/**
 * Functions and definitions of Hermes child theme.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Hermes
 * @since 1.0.0
 */

 /**
  *  Sets up child theme defaults and registers support for various WordPress features.
  *
  * @link http://codex.wordpress.org/Child_Themes
  */
 function hermes_child_theme_setup() {
     load_child_theme_textdomain( 'hermes', get_stylesheet_directory() . '/languages' );
 }
 add_action( 'after_setup_theme', 'hermes_child_theme_setup' );

/**
 * Enqueue parent style.
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function hermes_child_enqueue_parent_styles() {
    wp_enqueue_style( 'hermes-parent-style', get_template_directory_uri() . '/style.css', array( 'hermes-css-framework' ) );
}
add_action( 'wp_enqueue_scripts', 'hermes_child_enqueue_parent_styles' );
