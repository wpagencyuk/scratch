<?php
/**
 * Script Enqueueing
 *
 * Taken out of theme functions to make it easier to manage
 *
 * @package scratch
 */

namespace WPA_Scratch\enqueueing;

require __DIR__ . '/inc/namespace.php';

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\scripts' );
