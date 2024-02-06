<section class="project__hero" data-scroll-section data-scroll-section-id="section100" data-scroll-section-inview>
    <div class="project__main__text">
        <h1 class="project__title section-head__title title-medium cb"><?php echo get_sub_field('title'); ?></h1>
        <div class="section-head__subtitle cb columns">
            <?php echo get_sub_field('subtitle'); ?>
        </div>
    </div>
</section>

<section class="f-img__section" data-scroll-section data-scroll-section-id="section1" data-scroll-section-inview>    
    <div class="f-img1__container f-img__container">
        <div class="f-img1__wrp">
            <img class="f-img1 ofc__img tt-ab" data-scroll data-scroll-speed="-1.5" src="<?php echo get_sub_field('image')['url']; ?>" alt="">
        </div>
    </div>
</section>

<div class="gallery">
    <div class="gallery-icon">
        <svg width="32" height="21" viewBox="0 0 32 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="7" y="1" width="18" height="19" stroke="black" stroke-width="2"/>
            <path d="M26 3L31 3V18H26" stroke="black" stroke-width="2"/>
            <path d="M6 3L1 3V18H6" stroke="black" stroke-width="2"/>
        </svg>
        <span>Galerija</span>
    </div>
    <div class="gallery-popup" id="galleryPopup">
    <span class="close-popup">&times;</span>
        <div class="gallery-content">
            <div class="swiper-container-gallery">
                <div class="swiper-wrapper">
                    <?php if ( have_rows('gallery') ) : ?>
                        <?php while ( have_rows('gallery') ) : the_row(); ?>

                        <div class="swiper-slide gallery-item">
                            <img class="lazy" data-src="<?php echo get_sub_field('image')['url']; ?>" alt="">
                            <p><?php echo get_sub_field('title'); ?></p>
                        </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
            </div>
            
        </div>
    </div>
</div>

