<?php
/**
 * scratch widgets
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package scratch
 */

namespace WPA_Scratch\Widgets;

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function widgets_init() {
	register_sidebar( [
		'name' => esc_html__( 'Sidebar', 'scratch' ),
		'id' => 'sidebar-1',
		'description' => esc_html__( 'Add widgets here.', 'scratch' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
		]
	);
}
