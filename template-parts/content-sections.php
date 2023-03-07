<?php $post_id = false; ?>
<?php if (is_home()) : ?>
	<?php $post_id = get_option('page_for_posts'); ?>	
<?php endif; ?>

<?php
if (have_rows('content', $post_id)) {
	while ( have_rows('content', $post_id)) {
		the_row();

		get_template_part( 'template-parts/sections/' . get_row_layout() );
	}
}