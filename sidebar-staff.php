<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package repairCafeOdense
 */

if ( ! is_active_sidebar( 'staff-1' ) ) {
	return;
}
?>

<aside id="staff-widget-area staff-widgets" class="widget-area">
	<?php dynamic_sidebar( 'staff-1' ); ?>
</aside><!-- #secondary -->
