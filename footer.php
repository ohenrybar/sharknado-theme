<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sharknado theme
 */
?>
	<!--closes the left open content div -->
	</div> <!-- #content -->
	<!--gives the footer an id and class-->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<!--opens a div inside the footer area-->
		<div class="site-info">
			<!--writes out the that the site is a wordpress site with a link-->
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'sharknado-theme' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'sharknado-theme' ), 'WordPress' ); ?></a>
			<!--creates a separation line-->
			<span class="sep"> | </span>
			<!--prints off the name of the theme and acknowledges that it is built off the underscores theme-->
			<?php printf( __( 'Theme: %1$s by %2$s.', 'sharknado-theme' ), 'sharknado theme', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
			
		</div> <!-- .site-info -->
	</footer> <!-- #colophon -->
</div> <!-- #page -->
<!--loads the wordpress footer-->
<?php wp_footer(); ?>

</body>
</html>
