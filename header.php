<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Royal_Event
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'royal-event' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<i class="fas fa-bars"></i>
				<i class="fas fa-times"></i>
			</button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->

		<div class="clear"></div>

		<div class="site-branding">
			<div class="site-branding__contacts">
				<a href="tel:<?php echo get_theme_mod('dc-phone');?>"><i class="fas fa-phone"></i><?php echo get_theme_mod('dc-phone');?></a>
				<a href="mailto:<?php echo get_theme_mod('dc-email');?>"><?php echo get_theme_mod('dc-email');?></a>
			</div>
			<div class="site-branding__logo">
				<?php the_custom_logo(); ?>
				<div class="site-branding__circle"></div>
			</div>
			<div class="site-branding__cart">
				<a href="/">
					<span>
						<i class="fas fa-shopping-cart"></i>
						<?php echo __( 'your cart', 'royal-event' ); ?> :
					</span>
					<span>
						0 <?php echo __( 'items', 'royal-event' ); ?> - $0.00
					</span>
				</a>
			</div>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
