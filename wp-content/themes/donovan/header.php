<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Donovan
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'donovan' ); ?></a>

		<?php do_action( 'donovan_header_bar' ); ?>

		<header id="masthead" class="site-header clearfix" role="banner">

			
		<!--	<div class="header-main container clearfix">

				

				<?php //get_template_part( 'template-parts/header/navigation', 'social' ); ?>

			</div>
			<!-- .header-main -->
			
		

			<?php get_template_part( 'template-parts/header/navigation', 'main' ); ?>

			 <?php //echo do_shortcode('[wonderplugin_carousel id="1"]'); ?>

			<?php donovan_header_image(); ?>

			<?php donovan_breadcrumbs(); ?>

		</header><!-- #masthead -->

		<div id="content" class="site-content container">
