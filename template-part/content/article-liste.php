<?php
/*
Template Name : article-liste
*/

?>

<article class="main-front-page__section-03__container-bot__article">
    <a href="#" class="main-front-page__section-03__container-bot__article__grid-layout"><img src=<?php the_field('article-produit_image-01') ?> alt="" class="main-front-page__section-03__container-bot__article__grid-layout__image" />
        <span class="main-front-page__section-03__container-bot__article__grid-layout__span"><?php the_field('article-produit-prix-01');
                                                                                                _ ?>$</span>
    </a>

    <a href="#" class="main-front-page__section-03__container-bot__article__link">
        <h3 class="main-front-page__section-03__container-bot__article__link__title">
            <?php the_title() ?>
        </h3>
    </a>
    <a href="#" class="main-front-page__section-03__container-bot__article__link">
        <p class="main-front-page__section-03__container-bot__article__link__text">
            <?php the_excerpt() ?>
        </p>
    </a>
    <a href="<?php the_permalink() ?>" class="main-front-page__section-03__container-bot__article__link link-button-order">
        <button class="main-front-page__section-03__container-bot__article__link__button button-order">
            Order
        </button>
    </a>
</article>

<?php wp_reset_query() ?>