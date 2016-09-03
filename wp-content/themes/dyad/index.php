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

					<div id="posts" class="posts homepage-posts" style="padding: 15px">

						<?php /* Start the Loop */ ?>
						<?php foreach($pages as &$page){ ?>
						

						<?php
						$thumb = $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'large' );
						?>
						<a href="<?php echo get_page_link( $page->ID )?>">
							<div class = "pageblock shadow">
								<div class="brickmenuimg" style="background: #dedede url('<?php echo $thumb[0]?>') no-repeat bottom left";></div>
								<div class="brickcontent">
									<h3><?php
										echo $page->post_title
									?></h3>
								</div>
							</div>
						</a>

						<?php }?>

					</div><!-- .posts -->

					<div class="homepage-sidebar shadow">
						<h3>Wiki</h3>
						<h3>FAQs</h3>
					</div><!-- .homepage-sidebar -->

					<?php the_posts_navigation(); ?>

				<?php else : ?>

				<?php endif; ?>
			</div
		</div>
	</main><!-- #main -->

<?php get_footer(); ?>
