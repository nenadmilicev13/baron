<?php
/**
 * Template name: Homepage
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nmtheme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="main-section">
				<div class="main-section__left">
					<div class="main-section__left-img">
						<img class="active" id="women" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/4.jpg" alt="">
					</div>
					<img id="men" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/3.jpg" alt="">
					<img id="events" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/2.jpg" alt="">
					<img id="beauty" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/1.jpg" alt="">
				</div>
				<div class="main-section__right">
					<ul class="main-section__right-list">
						<li class="list"><a data-color="#f5eafa" data-image="women" id="link-w" class="tab_link " href="#women">Women</a>
							<ul class="main-section__right-submenu sub-active">
								<li><a class="main-section__right-submenu-link" href="javascripttt:;">Ženska moda</a></li>
								<li><a class="main-section__right-submenu-link" href="javascripttt2:;">Venčanice</a></li>
							</ul>
						</li>
						<li class="list"><a data-color="#eff7ff" data-image="men" class="tab_link test" href="#men">Men</a>
							<ul class="main-section__right-submenu">
								<li><a class="main-section__right-submenu-link" href="javascript1:;">Muška moda</a></li>
							</ul>
						</li>
						<li class="list"><a data-color="#faf3ed" data-image="events" class="tab_link test" href="#events">Events</a>
							<ul class="main-section__right-submenu">
								<li><a class="main-section__right-submenu-link" href="javascript:;">Baron Castel</a></li>
								<li><a class="main-section__right-submenu-link" href="javascript:;">Organizacija venčanja</a></li>
								<li><a class="main-section__right-submenu-link" href="javascript:;">Organizacija proslava</a></li>
								<li><a class="main-section__right-submenu-link" href="javascript:;">Dekoracije</a></li>
							</ul>
						</li>
						<li class="list"><a data-color="#faf3ed" data-image="beauty" class="tab_link test" href="#beauty">Beauty</a>
							<ul class="main-section__right-submenu">
								<li><a class="main-section__right-submenu-link" href="javascript:;">Frizerski salon</a></li>
								<li><a class="main-section__right-submenu-link" href="javascript:;">Šminkanje</a></li>
							</ul>
						</li>
					</ul>
					<p class="main-section__right-bottom-text">Gravida nulla pellentesque netus porta. Tincidunt sagittis tempor volutpat, nullam. In aliquet eget pulvinar eu, duis aliquet vitae ipsum. Cras pellentesque imperdiet et gravida egestas.</p>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
