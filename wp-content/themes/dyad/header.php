<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Dyad
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/dyad.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dyad' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?php /* put logos here */ ?>
				</a>
			</h1>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'dyad' ); ?></button>
			<?php wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_id' => 'primary-menu',
				'container' => 'div',
				'container_class' => 'primary-menu',
			) );?>
		</nav>

	</header><!-- #masthead -->

	<div class="site-inner">

		<?php if ( is_home() || is_front_page() || ( is_single() && 'image' == get_post_format() ) ) : ?>
			<div class="featured-content">
				<?php get_template_part( 'template-parts/loop', 'banner' ); ?>
			</div>
		<?php endif; ?>

		<div id="content" class="site-content">
