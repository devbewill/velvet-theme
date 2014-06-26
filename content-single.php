<?php
/**
 * @package velvet
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-meta">
			<?php velvet_posted_on(); ?>
		</div><!-- .entry-meta -->
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'velvet' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ' ', 'velvet' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ' ', 'velvet' ) );

			if ( ! velvet_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( '%2$s. salva il <a href="%3$s" rel="bookmark">permalink</a>.', 'velvet' );
				} else {
					$meta_text = __( 'salva il <a href="%3$s" rel="bookmark">permalink</a>.', 'velvet' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( 'salvato in %1$s con i tag %2$s </a>.', 'velvet' );
				} else {
					$meta_text = __( 'salvato in %1$s</a>.', 'velvet' );
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink()
			);
		?>

		<?php edit_post_link( __( 'Edit', 'velvet' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
