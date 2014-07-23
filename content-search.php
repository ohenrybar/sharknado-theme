<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package sharknado theme
 */
?>

<!--gets an article id from the post number in database -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<!--attaches link to the title -->
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<!--if it is a post, it gets the post type function -->
		<?php if ( 'post' == get_post_type() ) : ?>
		
		<!--adds posted on date -->
		<div class="entry-meta">
			<?php sharknado_theme_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<!--shows an exerpt of the article found -->
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'sharknado-theme' ) );
				if ( $categories_list && sharknado_theme_categorized_blog() ) :
			?>
			<!--shows category the post belongs to -->
			<span class="cat-links">
				<?php printf( __( 'Posted in %1$s', 'sharknado-theme' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'sharknado-theme' ) );
				if ( $tags_list ) :
			?>
			<!--shows tags attached to the posts -->
			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'sharknado-theme' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<!--opens comment form -->
		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'sharknado-theme' ), __( '1 Comment', 'sharknado-theme' ), __( '% Comments', 'sharknado-theme' ) ); ?></span>
		<?php endif; ?>

		<!--creates link to edit post -->
		<?php edit_post_link( __( 'Edit', 'sharknado-theme' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->