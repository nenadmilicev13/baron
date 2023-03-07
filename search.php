<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package nmtheme
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<div class="page-wrap">
			<?php
			if ( have_posts() ) : ?>
				
				
				<div class="wrapper">
					<?php
						the_archive_title( '<h2 class="page-title">', '</h2>' );
					?>
					<div class="cards__container">

						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );

						endwhile; ?>
						
						</div>

						<?php nmtheme_paging_nav();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif; ?>
					
				</div>
			</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
