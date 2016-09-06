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
 * @package Dyad
 */

get_header(); ?>

	<main id="primary" class="content-area" role="main">

	<?php $args = array(
		'sort_order' => 'asc',
		'sort_column' => 'ID',
		'hierarchical' => 1,
		'exclude' => '',
		'include' => '4, 6, 8, 10, 12, 14',
		'meta_key' => '',
		'meta_value' => '',
		'authors' => '',
		'child_of' => 0,
		'parent' => -1,
		'exclude_tree' => '',
		'number' => '',
		'offset' => 0,
		'post_type' => 'page',
		'post_status' => 'publish'
	); 
	$pages = get_pages($args); 
	?>
		<div id="homepage-content">
			<div id="homepage-inner-content">
				<?php if ( $pages ) : ?>
					
					<div id="posts" class="posts homepage-posts">
						<?php
						$counter = 1;
						?>
						<?php /* Start the Loop */ ?>
						<?php foreach($pages as &$page){ ?>
						<a href="<?php echo get_page_link( $page->ID )?>" class="<?php echo "chapter".$counter?>">
							<div class = "pageblock">
							</div>
						</a>

						<?php $counter++; }?>
					</div><!-- .posts -->

						<div id="wikifaq"></div>
					<!--<div class="homepage-sidebar shadow">
						<h3>Wiki</h3>
						<h3>FAQs</h3>
					</div>-->

					<?php the_posts_navigation(); ?>

				<?php else : ?>

				<?php endif; ?>
			</div
		</div>
	</main><!-- #main -->

<?php get_footer(); ?>
