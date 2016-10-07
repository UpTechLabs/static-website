<?php
/**
 * Navigation functionality
 *
 * @package     UpTechLabs
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://UpTechLabs.io
 * @license     GNU General Public License 2.0+
 */

/**
 * Render active class for the nav item.
 *
 * @since 1.0.0
 *
 * @param string $page_name
 * @param string $active_page
 *
 * @return void
 */
function render_active_nav_class( $page_name, $active_page ) {
	if ( $active_page == $page_name ) {
		echo ' active';
	}
}
