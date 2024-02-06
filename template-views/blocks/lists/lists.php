<section class="project__third__text "data-scroll-section data-scroll-section-id="section5" data-scroll-section-inview>
    <div class="project__text project__text--flex">
        <?php if ( have_rows('items') ) : ?>
            <?php while ( have_rows('items') ) : the_row(); ?>
                <ul class="project__list">
                    <?php if ( have_rows('lists') ) : ?>
                        <?php while ( have_rows('lists') ) : the_row(); ?>
                            <li><?php echo get_sub_field('text'); ?></li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>