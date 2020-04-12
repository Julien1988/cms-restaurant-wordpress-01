<?php

/*
Template Name : article-single
*/
?>


<!-- <img src="assets/images/hachures-blanches.png" alt="" class="main-post-type__image" />
<section class="main-post-type__section main-post-type__section-01"> -->
<h1 class="main-post-type__section-01__title"><?php the_title(); ?></h1>
<h2 class="main-post-type__section-01__subtitle">
    <?php the_excerpt(); ?>
</h2>
<div class="main-post-type__section-01__container">
    <img src="assets/images/resto1.jpg" alt="" class="main-post-type__section-01__container__image" />
    <div class="main-post-type__section-01__container__content-box">
        <h3 class="main-post-type__section-01__container__content-box__title main-front-page__section-06__article__content-box__date"></h3>

        OCTOBER 4, 2018

        </h3>
        <h4 class="main-post-type__section-01__container__content-box__subtitle">
            catégorie de l'article
        </h4>
        <p class="main-post-type__section-01__container__content-box__text">
            <?php the_content(); ?>

        </p>
    </div>
</div>
<!-- </section> -->