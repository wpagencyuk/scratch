<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package standardchartered
 */

namespace WPA_Scratch\Templatefunctions;

require __DIR__ . '/inc/namespace.php';

add_filter( 'body_class', __NAMESPACE__ . '\\body_classes' );
add_filter( 'wp_head', __NAMESPACE__ . '\\pingback_header' );
