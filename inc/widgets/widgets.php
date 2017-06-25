<?php
/**
 * scratch widgets
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package scratch
 */

namespace WPA_Scratch\Widgets;

require __DIR__ . '/inc/namespace.php';

add_action( 'widgets_init', __NAMESPACE__ . '\\widgets_init' );
