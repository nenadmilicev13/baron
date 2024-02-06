<?php
/**
 * Template View for displaying Blocks
 *
 * @package NM_Theme
 */
?>


<section class="main-section dark-background" data-scroll-section data-scroll-section-id="section0" data-scroll-section-inview>
	<div class="main-section__hero">
		<div class="main-section__hero-image-line">
			<img src="<?php echo get_sub_field('image_1')['url']; ?>" alt="">
		</div>
		<div class="main-section__hero-image-main">
		<picture>
			<!-- Koristi se za ekrane manje od 767px -->
			<source media="(max-width: 767px)" srcset="<?php echo get_sub_field('image_mobile')['url']; ?>">
			<!-- Podrazumevana slika za ekrane veće od 767px -->
			<img src="<?php echo get_sub_field('image_main')['url']; ?>" alt="">
    	</picture>
		</div>
		<div class="main-section__title">
			<h1><?php echo get_sub_field('title_first_word'); ?><span> <?php echo get_sub_field('another_word'); ?></span></h1>
		</div>
		<div class="main-section__signature">
			<div id="lottie-signature"></div>
		</div>
		<div class="main-section__since">
			<!-- <img src="<?php echo get_sub_field('bottom_image')['url']; ?>" alt=""> -->
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/since.svg" alt="">
		</div> 
	</div>
</section>