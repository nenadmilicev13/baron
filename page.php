<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nmtheme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="main-content">
				<?php
					get_template_part( 'template-parts/modules/module', 'banner' );
				?>
				
				<?php
				while ( have_posts() ) :
					the_post();  
					
					$the_content = apply_filters('the_content', get_the_content());
					if ( !empty($the_content) ) : ?>
						<div class="content-wrap">
							<div class="wrapper">
								<div class="entry-content">
									<?php the_content();  ?>
								</div>
							</div>
						</div>
					
					<?php
					endif;
					// If comments are open or we have at least one comment, load up the comment template.
					// if ( comments_open() || get_comments_number() ) :
					// 	comments_template();
					// endif;

				endwhile; // End of the loop.
				?>
				

				<?php
					get_template_part( 'template-parts/content', 'sections' );
				?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
