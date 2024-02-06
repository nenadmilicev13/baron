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
                    elseif (get_row_layout() == 'main_section') :
                            get_template_part('template-views/blocks/main-section/main-section');
                    elseif (get_row_layout() == 'category_list') :
                        get_template_part('template-views/blocks/category-list/category-list');
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
                    elseif (get_row_layout() == 'muskarci_list') : ?>
                   
                    <div class="f-img__section " data-scroll-section data-scroll-section-id="section20" data-scroll-section-inview>
                        <div class="index-card">
                            <?php
                                $args = array(
                                    'post_type'      => 'muskarac',
                                    'posts_per_page' => -1,
                                );

                                $products_query = new WP_Query($args);

                                if ($products_query->have_posts()) {
                                    while ($products_query->have_posts()) {
                                        $products_query->the_post();
                                        ?>
                                            <div class="index-card__container f-img__container">
                                                <div class="index-card__item">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php if (has_post_thumbnail()) : ?>
                                                            <?php the_post_thumbnail('medium'); ?>
                                                        <?php endif; ?>
                                                        <h2><?php the_title(); ?></h2>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php
                                    }
                                    wp_reset_postdata();
                                } else {
                                    echo 'Nema postova u CPT muskarac.';
                                }
                            ?>
                        </div>
                    </div>
                   
                        
                    <?php elseif (get_row_layout() == 'zene_list') : ?>
                        <div class="f-img__section " data-scroll-section data-scroll-section-id="section20" data-scroll-section-inview>
                            <div class="index-card">
                                    <?php
                                    $args = array(
                                        'post_type'      => 'zena',
                                        'posts_per_page' => -1,
                                    );

                                    $products_query = new WP_Query($args);

                                    if ($products_query->have_posts()) {
                                        while ($products_query->have_posts()) {
                                            $products_query->the_post();
                                            ?>
                                                <div class="index-card__container f-img__container">
                                                    <div class="index-card__item">
                                                        <a href="<?php the_permalink(); ?>">
                                                            <?php if (has_post_thumbnail()) : ?>
                                                                <?php the_post_thumbnail('medium'); ?>
                                                            <?php endif; ?>
                                                            <h2><?php the_title(); ?></h2>
                                                        </a>
                                                    </div>
                                                </div>
                                            <?php
                                        }
                                        wp_reset_postdata();
                                    } else {
                                        echo 'Nema postova u CPT zena.';
                                    }
                                ?>
                            </div>
                        </div>
                    <?php elseif (get_row_layout() == 'dogadjaji_list') : ?>
                        <div class="f-img__section " data-scroll-section data-scroll-section-id="section20" data-scroll-section-inview> 
                            <div class="index-card">
                                <?php
                                    $args = array(
                                        'post_type'      => 'dogadjaj',
                                        'posts_per_page' => -1,
                                    );

                                    $products_query = new WP_Query($args);

                                    if ($products_query->have_posts()) {
                                        while ($products_query->have_posts()) {
                                            $products_query->the_post();
                                            ?>
                                                <div class="index-card__container f-img__container">
                                                    <div class="index-card__item">
                                                        <a href="<?php the_permalink(); ?>">
                                                            <?php if (has_post_thumbnail()) : ?>
                                                                <?php the_post_thumbnail('medium'); ?>
                                                            <?php endif; ?>
                                                            <h2><?php the_title(); ?></h2>
                                                        </a>
                                                    </div>
                                                </div>
                                            <?php
                                        }
                                        wp_reset_postdata();
                                    } else {
                                        echo 'Nema postova u CPT Dogadjaj.';
                                    }
                                ?>
                            </div>
                            
                        </div>
                    <?php elseif (get_row_layout() == 'lepota_list') : ?>
                        <div class="f-img__section " data-scroll-section data-scroll-section-id="section20" data-scroll-section-inview> 
                        <div class="index-card">
                            <?php
                                    $args = array(
                                        'post_type'      => 'lepota',
                                        'posts_per_page' => -1,
                                    );

                                    $products_query = new WP_Query($args);

                                    if ($products_query->have_posts()) {
                                        while ($products_query->have_posts()) {
                                            $products_query->the_post();
                                            ?>
                                                <div class="index-card__container f-img__container">
                                                    <div class="index-card__item">
                                                        <a href="<?php the_permalink(); ?>">
                                                            <?php if (has_post_thumbnail()) : ?>
                                                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'cpt'); ?>" alt="<?php the_title(); ?>">
                                                            <?php endif; ?>
                                                            <h2><?php the_title(); ?></h2>
                                                        </a>
                                                    </div>
                                                </div>

                                            <?php
                                        }
                                        wp_reset_postdata();
                                    } else {
                                        echo 'Nema postova u CPT Lepota.';
                                    }
                                ?>
                        </div>
                            
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php
get_footer();
?>


