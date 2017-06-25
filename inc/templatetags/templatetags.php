<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package scratch
 */

namespace WPA_Scratch\TemplateTags;

require __DIR__ . '/inc/namespace.php';

add_action( 'edit_category',  __NAMESPACE__ . '\\category_transient_flusher' );
add_action( 'save_post',      __NAMESPACE__ . '\\category_transient_flusher' );
