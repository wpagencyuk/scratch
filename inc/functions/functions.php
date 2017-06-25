<?php
/**
 * scratch functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package scratch
 */

namespace WPA_Scratch\Functions;

require __DIR__ . '/inc/namespace.php';

add_action( 'after_setup_theme', __NAMESPACE__ . '\\setup' );
add_action( 'after_setup_theme', __NAMESPACE__ . '\\content_width', 0 );
