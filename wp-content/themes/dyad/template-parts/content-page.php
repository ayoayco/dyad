<?php
/**
 * Template part for displaying pages.
 *
 * @package Dyad
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-inner">

		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<?php edit_post_link( esc_html__( 'Edit', 'dyad' ), '<div class="edit-link">', '</div>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dyad' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

	</div><!-- .entry-inner -->
</article><!-- #post-## -->

