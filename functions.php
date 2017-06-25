<?php
/**
 * scratch functions and definitions. Split into different files to allow for namespacing
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package scratch
 */

/**
* Functions.
*/
require get_template_directory() . '/inc/functions/functions.php';

/**
 * Theme widgets
 */
require get_template_directory() . '/inc/widgets/widgets.php';

/**
 * Script enqueueing.
 */
require get_template_directory() . '/inc/enqueueing/enqueueing.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/templatetags/templatetags.php';

/**
 * Additional features to allow styling of the templates.
 */
require get_template_directory() . '/inc/templatefunctions/templatefunctions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack/jetpack.php';
