<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NM_Theme
 */

?>

	<!-- </div>#content -->

	<footer  id="colophon" class="site-footer" data-scroll-section data-scroll-section-id="section12" data-scroll-section-inview>
		<div class="container">
			<div class="footer__container">
				<div class="footer__wrap">
					<div class="footer-left">
						<ul>
							<?php if ( have_rows('footer_left', 'option') ) : ?>
								<?php while ( have_rows('footer_left', 'option') ) : the_row(); ?>

									<li><a href="<?php echo get_sub_field('link', 'option'); ?>"><?php echo get_sub_field('label', 'option'); ?></a></li>

								<?php endwhile; ?>
							<?php endif; ?>
							
						</ul>
					</div>
					<div class="footer-right">
						<ul>
							<?php if ( have_rows('footer_right', 'option') ) : ?>
								<?php while ( have_rows('footer_right', 'option') ) : the_row(); ?>

									<li><a href="<?php echo get_sub_field('link', 'option'); ?>"><?php echo get_sub_field('label', 'option'); ?></a></li>

								<?php endwhile; ?>
							<?php endif; ?>
						</ul>
					</div>
				</div>
				<div class="footer__wrap-bottom">
					<div class="footer-left__bottom">
						<?php if ( have_rows('footer_bottom', 'option') ) : ?>
							<?php while ( have_rows('footer_bottom', 'option') ) : the_row(); ?>

							<div class="footer-left__bottom-item">
							<?php if ( have_rows('items') ) : ?>
								<?php while ( have_rows('items') ) : the_row(); ?>

								<a href="<?php echo get_sub_field('link', 'option'); ?>"><?php echo get_sub_field('label', 'option'); ?></a>

								<?php endwhile; ?>
							<?php endif; ?>
								
							</div>

							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
</div><!-- #page -->



</body>
</html>




