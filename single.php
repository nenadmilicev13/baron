<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package nmtheme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="main-content">
				<div class="page-wrap">
					<div class="wrapper">
						<?php
						while ( have_posts() ) : the_post(); ?>

							<div class="entry-content">
								<?php the_content();  ?>
							</div>
							
							<?php
							//nmtheme_paging_nav();

							// If comments are open or we have at least one comment, load up the comment template.
							// if ( comments_open() || get_comments_number() ) :
							// 	comments_template();
							// endif;

						endwhile; // End of the loop.
						?>
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
