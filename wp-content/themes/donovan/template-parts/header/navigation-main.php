<?php
/**
 * Main Navigation
 *
 * @package Donovan
 */
?>

<div id="main-navigation-wrap" class="primary-navigation-wrap">
	
	<div id="main-navigation-container" class="primary-navigation-container container">
		<div class="header_top_m">
		<?php do_action( 'donovan_header_search' ); ?>
		
		<div id="logo" class="site-branding clearfix">

					<?php donovan_site_logo(); ?>
					<?php //donovan_site_title(); ?>
					<?php //donovan_site_description(); ?>

				</div><!-- .site-branding -->

		<nav id="main-navigation" class="primary-navigation navigation clearfix" role="navigation">
			<?php
				// Display Main Navigation.
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'container' => false,
					'menu_class' => 'main-navigation-menu',
					'echo' => true,
					'fallback_cb' => 'donovan_default_menu',
					)
				);
			?>
		</nav><!-- #main-navigation -->
		</div>

	</div>

</div>
