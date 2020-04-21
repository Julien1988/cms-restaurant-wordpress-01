<?php
/*
Template Name : Poste-Type
*/
?>

<h1 class="main-post-type__section-01__title"><?php the_field('titre-post-type-01') ?></h1>
<h2 class="main-post-type__section-01__subtitle"><?php the_field('sous-titre-post-type-01') ?></h2>
<div class="main-post-type__section-01__container">
    <img src=<?php the_field('image-article-post-type-01') ?> alt="" class="main-post-type__section-01__container__image" />
    <div class="main-post-type__section-01__container__content-box">
        <h3 class="main-post-type__section-01__container__content-box__title">
            <?php the_field('titre-article-post-type-01') ?>
        </h3>
        <h4 class="main-post-type__section-01__container__content-box__subtitle">
            <?php the_field('sous-titre-article-post-type-01') ?>
        </h4>
        <p class="main-post-type__section-01__container__content-box__text">
            <?php the_field('text-article-post-type-01') ?>
        </p>
    </div>
</div>
<div class="main-post-type__section-01__container">
    <img src=<?php the_field('image-article-post-type-02') ?> alt="" class="main-post-type__section-01__container__image" />
    <div class="main-post-type__section-01__container__content-box">
        <h3 class="main-post-type__section-01__container__content-box__title">
            <?php the_field('titre-article-post-type-02') ?>
        </h3>
        <h4 class="main-post-type__section-01__container__content-box__subtitle">
            <?php the_field('sous-titre-article-post-type-02') ?>
        </h4>
        <p class="main-post-type__section-01__container__content-box__text">
            <?php the_field('text-article-post-type-02') ?>
        </p>
    </div>
</div>