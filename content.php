<?php
/**
 * @package sharknado theme
 */
?>
<!--gets the id for the post -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!--creates header for the post -->
	<header class="entry-header">
		<!--link attached to the title -->
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		
		<!--if there is a post, get the type of the post -->
		<?php if ( 'post' == get_post_type() ) : ?>
		<!--creates meta for the entry -->
		<div class="entry-meta">
			<!--displays date posted on -->
			<?php sharknado_theme_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<!--div for the content -->
	<div class="entry-content">
		<!--continue reading link added -->
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'sharknado-theme' ) ); ?>
		
		<!--array of pages that come before and after the current one -->
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'sharknado-theme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'sharknado-theme' ) );
				if ( $categories_list && sharknado_theme_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( 'Posted in %1$s', 'sharknado-theme' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'sharknado-theme' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'sharknado-theme' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<!-- no password required and comments are open -->
		<!-- also gets comments if there are comments -->
		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'sharknado-theme' ), __( '1 Comment', 'sharknado-theme' ), __( '% Comments', 'sharknado-theme' ) ); ?></span>
		<?php endif; ?>

		<!--link to edit page -->
		<?php edit_post_link( __( 'Edit', 'sharknado-theme' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->