<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nmtheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png"/>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'nmtheme' ); ?></a>	
	
	<!-- header -->
	<header class="header js-header">
		<div class="header__wrap">
			<div class="header-btn">
				<a href="javascript:;" id="js-menu-btn" class="menu-btn js-menu-btn"><span></span></a>
			</div>
			<div class="header__logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
				</a>
			</div>
		</div>
		
		<div class="header__container">
			
			<div class="header__container-box">
				<div class="header__container-wrap">
					<div class="header__left-img">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/2.jpg" alt="">
					</div>
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
	

	<div id="content" class="main-content">