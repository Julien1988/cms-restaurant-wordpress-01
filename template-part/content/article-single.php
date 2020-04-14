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
    <!-- <img src="assets/images/resto1.jpg" alt="" class="main-post-type__section-01__container__image" /> -->
    <div class="main-post-type__section-01__container__content-box">
        <h6 class="main-post-type__section-01__container__content-box__title main-front-page__section-06__article__content-box__date"> OCTOBER 4, 2018
        </h6>



        <h4 class="main-post-type__section-01__container__content-box__subtitle">
            catégorie de l'article
        </h4>

        <?php the_content(); ?>


    </div>

    <style>
        p {

            padding-left: 0.5em !important;
            padding-right: 0.5em !important;
        }
    </style>
</div>
<!-- </section> -->