<?php
/**
 * The template for displaying blog
 *
 * @package nmtheme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		
		<div class="main-content">
			<?php get_template_part( 'template-parts/modules/module', 'banner' ); ?>
			
			<!-- content here -->
			
			<?php
				get_template_part( 'template-parts/content', 'sections' );
			?>
			
			</div><!-- .main-content -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();