<?php

/*
Template Name : blog-article-liste
*/

?>

<article class="main-front-page__section-06__article">
    <a href="#" class="main-front-page__section-06__article__link">
        <img src="assets/images/the-chef.jpg" alt="" class="main-front-page__section-06__article__link__image" />
    </a>
    <div class="main-front-page__section-06__article__content-box">
        <i class="main-front-page__section-06__article__content-box__icone far fa-clock"></i>
        <p class="main-front-page__section-06__article__content-box__date">
            <?php the_time('d F Y'); ?>
        </p>
    </div>
    <a href="#" class="main-front-page__section-06__article__content-box__link">
        <h3 class="main-front-page__section-06__article__content-box__link__title">
            <?php the_title(); ?>
        </h3>
    </a>
    <p class="main-front-page__section-06__article__content-box__text">
        <?php the_excerpt(); ?>
    </p>
    <a href="<?php the_permalink(); ?>" class="main-front-page__section-06__article__content-box__link">
        <butoon class="main-front-page__section-06__article__content-box__link__button">
            <span>
                . . . . . . . . . . . . . . . . . . . . . . .
            </span>
            Read More</butoon>
    </a>
</article>