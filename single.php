<?php
/**
 * The template for displaying all single posts.
 *
 * @package sharknado theme
 */

/*gets header file*/
get_header(); ?>

	<!--creates div for main content-->
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<!--loop that displays posts when there are posts to display-->
		<?php while ( have_posts() ) : the_post(); ?>
			<!--uses "single content page" layout-->
			<?php get_template_part( 'content', 'single' ); ?>
			<!--provides extra navigation function after the post for short cut to other content-->
			<?php sharknado_theme_post_nav(); ?>

			<?php
				/* If comments are open or we have at least one comment, load up the comment template*/
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<!--gets the sidebar file containing the sidebar widgets-->
<?php get_sidebar(); ?>
<!--gets the footer file with extra website information-->
<?php get_footer(); ?>