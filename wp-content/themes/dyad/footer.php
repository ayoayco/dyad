<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Dyad
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>

				<div class="widget-area <?php echo esc_attr( dyad_widget_column_class( 'sidebar-1' ) ); ?>" role="complementary">
					<div class="grid-container">
						<?php dynamic_sidebar( 'sidebar-1' ); ?>
					</div><!-- .grid-container -->
				</div><!-- #secondary -->

			<?php } ?>

			<div class="footer-bottom-info <?php if ( has_nav_menu( 'social' ) ) { echo 'has-social-menu'; } ?>">
				<?php
				if ( has_nav_menu( 'social' ) ) {
					wp_nav_menu( array(
						'theme_location'  => 'social',
						'container'       => 'div',
						'container_id'    => '',
						'container_class' => 'social-links',
						'menu_id'         => '',
						'menu_class'      => 'social-links-items',
						'depth'           => 1,
						'link_before'     => '<span class="screen-reader-text">',
						'link_after'      => '</span>',
						'fallback_cb'     => '',
					) );
				}
				?>

				<div class="site-info">
					2016 &copy; All Rights Reserved
					<span class="sep"> | </span>
					<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'dyad' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'dyad' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<a href="http://ayoayco.com" target="_blank">Development by <span style="text-decoration: underline">Ayo</span></a>
					<!--<?php /*printf( esc_html__( 'Theme: %1$s by %2$s.', 'dyad' ), 'Dyad', '<a href="http://wordpress.com/themes/dyad/" rel="designer">WordPress.com</a>' );*/ ?>-->
				</div><!-- .site-info -->
			</div><!-- .footer-bottom-info -->

		</footer><!-- #colophon -->

	</div><!-- .site-inner -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/dyad.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/jquery-3.1.0.min.js"></script>
</body>
</html>
