<div class="main-front-page__section-05__container">
    <h1 class="main-front-page__section-05__container__title mobile-view">
        <?php the_field('titre-menu-home-01'); ?>
    </h1>
    <h2 class="main-front-page__section-05__container__subtitle mobile-view">
        <?php the_field('sous-titre-menu-home-01'); ?>
    </h2>
</div>
<div class="main-front-page__section-05__container main-front-page__section-05__container-image">
    <img src=<?php the_field('image-menu-01'); ?> alt="" class="main-front-page__section-05__container-image__image" />
    <img src=<?php the_field('image-menu-02'); ?> alt="" class=" main-front-page__section-05__container-image__image" />
    <img src=<?php the_field('image-menu-03'); ?> alt="" class=" main-front-page__section-05__container-image__image" />
    <img src=<?php the_field('image-menu-04'); ?> alt="" class=" main-front-page__section-05__container-image__image" />
</div>
<div class="main-front-page__section-05__container container-desktop-view">
    <h1 class="main-front-page__section-05__container__title desktop-view">
        <?php the_field('titre-menu-home-01'); ?>
    </h1>
    <h2 class="main-front-page__section-05__container__subtitle desktop-view">
        <?php the_field('sous-titre-menu-home-01'); ?>
    </h2>
    <p class="main-front-page__section-05__container__text">
        <?php the_field('texte-menu-home-01'); ?>
    </p>
    <!-- http://localhost:8000/menu -->
    <a href=<?php echo get_home_url() . '/menu' ?> class="main-front-page__section-05__container__link link-button-order link-button-view-all">
        <button class="main-front-page__section-05__container__link__button button-view-all">
            View the Full Menu
        </button>
    </a>
</div>