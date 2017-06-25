<?php
/**
 * Script Enqueueing
 *
 * Taken out of theme functions to make it easier to manage
 *
 * @package scratch
 */

namespace WPA_Scratch\enqueueing;

/**
 * Enqueue scripts and styles.
 */
function scripts() {
	wp_enqueue_style( 'scratch-style', get_template_directory_uri() . '/css/style.css' );

	wp_enqueue_script( 'scratch-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'scratch-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'scratch-scripts', get_template_directory_uri() . '/js/scripts-min.js', [ 'jquery' ], '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
