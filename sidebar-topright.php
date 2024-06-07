<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package repairCafeOdense
 */

if ( ! is_active_sidebar( 'topright-1' ) ) {
	return;
}
?>

<aside id="topright-widget-area" class="widget-area">
	<?php dynamic_sidebar( 'topright-1' ); ?>
</aside><!-- #secondary -->
