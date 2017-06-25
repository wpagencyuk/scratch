<?php
/**
 * scratch Theme Customizer
 *
 * @package scratch
 */

namespace WPA_Scratch\customizer;

require __DIR__ . '/inc/namespace.php';

add_action( 'customize_register', __NAMESPACE__ . '\\customize_register' );
add_action( 'customize_preview_init', __NAMESPACE__ . '\\customize_preview_js' );
