<?php
/**
 * The template for displaying search results pages.
 *
 * @package sharknado theme
 */
/*gets header file*/
get_header(); ?>
	<!--opens a section on the page for content-->
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<!--if statement that looks for posts, and if there are posts ...-->
		<?php if ( have_posts() ) : ?>
			<!--labels the following as page-header-->
			<header class="page-header">
				<!--under class of page-title, it displays search results for the search query ran.-->
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'sharknado-theme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<!--while loop that displays the posts that match the entry searched.-->
			<?php /* Start the Loop*/ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );
				?>

			<?php endwhile; ?>
			<!--applys page layout-->
			<?php sharknado_theme_paging_nav(); ?>
		<!--if no results, then shows...-->
		<?php else : ?>
			<!--no results page-->
			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->
<!--loads sidebar (if there is one)-->
<?php get_sidebar(); ?>
<!--loads footer-->
<?php get_footer(); ?>