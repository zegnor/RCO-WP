<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package repairCafeOdense
 */

if ( ! is_active_sidebar( 'facebook-1' ) ) {
	return;
}
?>

<aside id="facebook-widget-area" class="widget-area">
	<?php dynamic_sidebar( 'facebook-1' ); ?>
</aside><!-- #secondary -->
