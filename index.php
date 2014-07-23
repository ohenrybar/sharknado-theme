<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package sharknado theme
 */
/*loads up header file*/
get_header(); ?>
<?php get_sidebar(); ?>

<!--gets the sidebar-->
<?php get_sidebar(); ?>

	<!--opens divs for main content-->
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<<<<<<< HEAD
		<!--loads up the function of the slider plugin-->
=======

>>>>>>> FETCH_HEAD
		<?php
			if( function_exists('FA_display_slider') ){
				FA_display_slider(30);
			}
		?>
<<<<<<< HEAD
		<!--if there are posts...-->
=======
		
>>>>>>> FETCH_HEAD
		<?php if ( have_posts() ) : ?>
			<!--display posts, if there are posts-->
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<!--loads page layout or template for displaying posts-->
				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>
			<!--loads the pages lower navigation options-->
			<?php sharknado_theme_paging_nav(); ?>

		<?php else : ?>
			<!--pulls up template and page for if there is no content-->
			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<<<<<<< HEAD
<!--gets the footer file -->
=======
>>>>>>> FETCH_HEAD
<?php get_footer(); ?>