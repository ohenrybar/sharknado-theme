<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package sharknado theme
 */
/*if statement that looks if sidebar 1 is active, and returns or displays...*/
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<!--div area for the sidebar 1-->
<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->