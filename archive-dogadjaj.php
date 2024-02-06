<?php get_header(); ?>

<main id="primary" class="site-main">
    <div class="main-content" data-scroll-container>
        <div class="wrap-container">
            <section class="index-content" data-scroll-section data-scroll-section-id="section101" data-scroll-section-inview>
                <div class="project__main__text">
                    <h1 class="project__title section-head__title title-medium">Događaji</h1>
                    <div class="section-head__subtitle">
                        <p>Neki dani su jednostavno posebniji od drugih, a mi smo tu da svaki detalj proslave učinimo posebnim i zajedno sa vama kreiramo priču koju ćete zauvek pamtiti.</p>
                    </div>
                </div>
            </section>
            <?php if (have_posts()) : ?>
                <div class="f-img__section " data-scroll-section data-scroll-section-id="section20" data-scroll-section-inview>
                    <div class="index-card">
                        <?php while (have_posts()) : the_post(); ?>
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
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php else : ?>
                <p>Nema postova u CPT 'zena'.</p>
            <?php endif; ?>

           
            <footer  id="colophon" class="site-footer" data-scroll-section data-scroll-section-id="section12" data-scroll-section-inview>
                <div class="container">
                    <div class="footer__container">
                        <div class="footer__wrap">
                            <div class="footer-left">
                                <ul>
                                    <li><a href="/baron/zene/">Žene</a></li>
                                    <li><a href="/baron/muskarci/">Muškarci</a></li>
                                    <li><a href="/baron/dogadjaji/">Događaji</a></li>
                                    <li><a href="/baron/lepota/">Lepota</a></li>
                                </ul>
                            </div>
                            <div class="footer-right">
                                <ul>
                                    <li><a href="/baron/o-nama/">O nama</a></li>
                                    <li><a href="/baron/kontakt/">Kontakt</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer__wrap-bottom">
                            <div class="footer-left__bottom">
                                <div class="footer-left__bottom-item">
                                    <span>Baron Fashion Studio</span>
                                    <span>Krilova 1, Novi Sad</span>
                                </div>
                                <div class="footer-left__bottom-item">
                                    <span>Baron Castel</span>
                                    <span>Ribarsko ostrvo bb, </span>
                                    <span>Novi Sad</span>
                                </div>
                                <div class="footer-left__bottom-item">
                                    <a href="tel:063512992">063 512992</a>
                                    <a href="mailto:baron@office.com">baron@office.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</main>
