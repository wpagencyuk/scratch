<?php
/**
 * Jetpack Compatibility File
 *
 * @link https://jetpack.com/
 *
 * @package scratch
 */

namespace WPA_Scratch\jetpack;

require __DIR__ . '/inc/namespace.php';

add_action( 'after_setup_theme', __NAMESPACE__ . '\\jetpack_setup' );
