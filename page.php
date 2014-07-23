<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package sharknado theme
 */
/*gets header*/
get_header(); ?>
	<!--opens div called content-area-->
	<div id="primary" class="content-area">
		<!--opens another div called site-main-->
		<main id="main" class="site-main" role="main">
			<!--loop that shows available posts-->
			<?php while ( have_posts() ) : the_post(); ?>
				<!--loads template or page layout -->
				<?php get_template_part( 'content', 'page' ); ?>
				<!--if there are comments, and comments are allowed then will show the existing comments-->
				<?php
					/* If comments are open or we have at least one comment, load up the comment template*/
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; /* end of the loop.*/ ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<!--loads sidebar-->
<?php get_sidebar(); ?>
<!--loads footer-->
<?php get_footer(); ?>