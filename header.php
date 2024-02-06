<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NM_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png"/>
	<link rel="stylesheet" href="https://use.typekit.net/nou7xfn.css">
	<!-- Preload fonts -->
	<!-- <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/OpenSans-Regular.woff2" as="font" crossorigin /> -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nm_theme' ); ?></a>

	<header class="header js-header">
		<div class="header__wrap">
			<div class="header-btn">
				<a href="javascript:;" id="js-menu-btn" class="menu-btn js-menu-btn"><span></span></a>
			</div>
			<div class="header__logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-min.svg" alt="">
				</a>
			</div>
		</div>

		<div class="header__container">
			<div class="header__container-box">
				<div class="header__container-wrap">
					<nav id="nav-container" class="header__nav js-main-nav">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'menu_class'     => 'primary-menu',
								'container'      => false
							) );
						?>
					</nav>
				</div>
			</div>
		</div>
	</header>

	<div class="content-overlay"></div>
	<div class="landscape-blocker" style="display: none;">
		Za bolji doživljaj okrenite vaš telefon u vertikalni položaj.
	</div>							
	<div id="content" class="site-content">
