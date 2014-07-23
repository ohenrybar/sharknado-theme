<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package sharknado theme
 */
/* loads header file*/
get_header(); ?>

	<!--creates div for main content -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<!--prints out error message when 404 page is called upon -->
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'sharknado-theme' ); ?></h1>
				</header><!-- .page-header -->

				<!--div section for more text -->
				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'sharknado-theme' ); ?></p>

					<!--loads up search bar -->
					<?php get_search_form(); ?>

					<!-- loads up widget that shows recent posts -->
					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<!-- if to call up categories widget -->
					<?php if ( sharknado_theme_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<!-- loads up categories widget -->
					<div class="widget widget_categories">
						<h2 class="widget-title"><?php _e( 'Most Used Categories', 'sharknado-theme' ); ?></h2>
						<ul>
						<!-- lists the loaded categories -->
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->
					<?php endif; ?>

					<!--suggests user look in archives, provides archives widget -->
					<?php
						/* translators: %1$s: smiley */
						$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'sharknado-theme' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
					?>

					<!-- widget that displays tag cloud -->
					<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<!-- loads the site footer -->
<?php get_footer(); ?>