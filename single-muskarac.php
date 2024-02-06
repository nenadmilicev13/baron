<?php
get_header();
?>

<main id="primary" class="site-main">
    <div class="main-content" data-scroll-container>
		<div class="wrap-container">
			<?php if (have_rows('content', get_queried_object())) : ?>
				<?php while (have_rows('content', get_queried_object())) : the_row(); ?>
					<?php if (get_row_layout() == 'index_banner') : ?>
						<?php get_template_part('template-views/blocks/index/index'); ?>
					
						<?php elseif (get_row_layout() == 'footer') :
							get_template_part('template-views/blocks/footer/footer');
                            elseif (get_row_layout() == 'hero_single') :
                                get_template_part('template-views/blocks/hero-single/hero-single');
                            elseif (get_row_layout() == 'text_sec') :
                                get_template_part('template-views/blocks/text-sec/text-sec');
                            elseif (get_row_layout() == 'images_sec1') :
                                get_template_part('template-views/blocks/images-sec1/images-sec1');
                            elseif (get_row_layout() == 'lists') :
                                get_template_part('template-views/blocks/lists/lists');
                            elseif (get_row_layout() == 'image_sec2') :
                                get_template_part('template-views/blocks/image-sec2/image-sec2');
                            elseif (get_row_layout() == 'images_sec3') :
                                get_template_part('template-views/blocks/images-sec3/images-sec3');
                            elseif (get_row_layout() == 'images_sec4') :
                                get_template_part('template-views/blocks/images-sec4/images-sec4');
						?>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
        
    </div>
</main>

