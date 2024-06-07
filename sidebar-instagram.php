<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package repairCafeOdense
 */

if ( ! is_active_sidebar( 'instagram-1' ) ) {
	return;
}
?>

<aside id="instagram-widget-area instagram-widgets" class="widget-area">
	<?php dynamic_sidebar( 'instagram-1' ); ?>
</aside><!-- #secondary -->
