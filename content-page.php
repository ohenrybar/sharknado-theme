<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package sharknado theme
 */
?>
<!-- this states that it calls the post id that has already been implemented in the database-->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?> 
	</header><!-- .entry-header -->
	<!-- this is a div, which also has a function, as well as links to arrays-->
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'sharknado-theme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer"> <!-- this places an option at the end of the page that allows the page to be edited ; the span tag is used to format-->
		<?php edit_post_link( __( 'Edit', 'sharknado-theme' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
