<?php 
    $categoryWrap = get_sub_field('container');
    $itemsPosition = get_sub_field('items_position'); // Pretpostavljam da je ovo default vrednost koja dolazi iz polja

    // Postavljanje vrednosti za $container i $itemsPosition zavisno od $categoryWrap
    if ( $categoryWrap == 'normal' ) :
        $container = '';
    elseif ( $categoryWrap == 'sm') :
        $container = 'category-wrapp--sm';
        $itemsPosition = 'category-item--left'; // Postavljanje $itemsPosition na 'category-item--left' kada je $categoryWrap 'sm'
    endif;
?>

<section class="category-container" data-scroll-section data-scroll-section-id="section2" data-scroll-section-inview>
    <div class="category-wrapp  <?php echo $container; ?>">
        <!-- repeater -->
        <?php if ( have_rows('items') ) : ?>
            <?php while ( have_rows('items') ) : the_row(); ?>
                <?php if ( $categoryWrap != 'sm' ) : ?>
                    <a href="<?php echo get_sub_field('link'); ?>">
                <?php endif; ?>
                        <div class="category-item <?php echo $itemsPosition; ?>">
                            <img src="<?php echo get_sub_field('image')['url']; ?>" alt="">
                            <div class="category-item__wrap">
                                <h2><?php echo get_sub_field('title'); ?></h2>
                                <?php $address = get_sub_field('address'); ?>
                                <?php if ( !empty($address) ) : ?>
                                    <span class="category-item__addresse"><?php echo $address; ?></span>
                                <?php endif; ?>
                                <?php if ( have_rows('mail') ) : ?>
                                    <?php while ( have_rows('mail') ) : the_row(); ?>
                                        <?php $mailLink = get_sub_field('link'); ?>
                                        <?php $mailLabel = get_sub_field('label'); ?>
                                        <?php if ( !empty($mailLink) && !empty($mailLabel) ) : ?>
                                            <a class="category-item__mail" href="mailto:<?php echo $mailLink; ?>"><?php echo $mailLabel; ?></a>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php if ( have_rows('phone') ) : ?>
                                    <?php while ( have_rows('phone') ) : the_row(); ?>
                                        <?php $phoneTel = get_sub_field('tel'); ?>
                                        <?php $phoneLabel = get_sub_field('label'); ?>
                                        <?php if ( !empty($phoneTel) && !empty($phoneLabel) ) : ?>
                                            <a class="category-item__phone" href="tel:<?php echo $phoneTel; ?>"><?php echo $phoneLabel; ?></a>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                <?php if ( $categoryWrap != 'sm' ) : ?>
                    </a>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

