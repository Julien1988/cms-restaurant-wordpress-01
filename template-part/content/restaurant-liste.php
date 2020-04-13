<?php
/*
Template Name : restaurant-liste
*/

?>

<article class="main-front-page__section main-front-page__section-04__article">
    <div class="main-front-page__section-04__article__container-img">
        <img src=<?php the_field('information-page-image-01');
                    _ ?> alt="" class="main-front-page__section-04__article__container-img__image" />
    </div>
    <div class="main-front-page__section-04__article__container">
        <a href="#" class="main-front-page__section-04__article__container__link">
            <h3 class="main-front-page__section-04__article__container__link__title">
                <?php the_title(); ?>
            </h3>
        </a>
        <a href="#" class="main-front-page__section-04__article__container__link">
            <h4 class="main-front-page__section-04__article__container__link__subtitle">
                <?php the_field('information-page-sous-titre-01');
                _ ?>
            </h4>
        </a>
        <div class="main-front-page__section-04__article__container__text">
            <?php the_excerpt(); ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="main-front-page__section-04__article__container__link link-button-order link-button-view-all">
            <button class="main-front-page__section-04__article__container__link__button button-order button-view-all">
                More infos
            </button>
        </a>
    </div>
</article>