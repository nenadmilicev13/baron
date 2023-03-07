<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nmtheme
 */

?>

<div class="wrapper wrapper--md">
	<section class="no-results not-found centered">
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'nmtheme' ); ?></h1>
		</header><!-- .page-header -->

		<div class="page-content">
			<?php
			if ( is_home() && current_user_can( 'publish_posts' ) ) :

				printf(
					'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
						__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'nmtheme' ),
						array(
							'a' => array(
								'href' => array(),
							),
						)
					) . '</p>',
					esc_url( admin_url( 'post-new.php' ) )
				);

			elseif ( is_search() ) :
				?>

				<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'nmtheme' ); ?></p>
				<div class="search-wrap">
					<form role="search" method="get" class="search__box search__box--dark search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<label>
							<span class="sr-only">Search for:</span>
							<div class="search__box-field">
								<input type="search" class="search-field" placeholder="Search" value="" name="s">
								<span class="icon font-search"></span>
							</div>
						</label>
						<input type="submit" class="search-submit" value="Search">
					</form>
				</div>

			<?php else :
				?>

				<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'nmtheme' ); ?></p>
				<div class="search-wrap">
					<form role="search" method="get" class="search__box search__box--dark search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<label>
							<span class="sr-only">Search for:</span>
							<div class="search__box-field">
								<input type="search" class="search-field" placeholder="Search" value="" name="s">
								<span class="icon font-search"></span>
							</div>
						</label>
						<input type="submit" class="search-submit" value="Search">
					</form>
				</div>

			<?php endif;
			?>
		</div><!-- .page-content -->
	</section><!-- .no-results -->
</div>
