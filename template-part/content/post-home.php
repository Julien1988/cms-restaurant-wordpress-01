<main class="main main-front-page">


    <section class="main-front-page__section main-front-page__section-top">
        <div class="main-front-page__section-top__container">
            <img class="main-front-page__section-top__image" src=<?php the_field('vignette-top-logo-01'); ?> alt="" />

            <h1 class="main-front-page__section-top__container__title">
                <?php the_field('vignette-top-titre-01');
                _ ?>
            </h1>
            <p class="main-front-page__section-top__container__text">
                <?php the_field('vignette-top-text-01');
                _ ?>
            </p>
        </div>
        <div class="main-front-page__section-top__container">
            <img class="main-front-page__section-top__image" src=<?php the_field('vignette-top-logo-02'); ?> alt="" />

            <h1 class="main-front-page__section-top__container__title">
                <?php the_field('vignette-top-titre-02');
                _ ?>
            </h1>
            <p class="main-front-page__section-top__container__text">
                <?php the_field('vignette-top-text-02');
                _ ?>
            </p>
        </div>
        <div class="main-front-page__section-top__container">
            <img class="main-front-page__section-top__image" src=<?php the_field('vignette-top-logo-03'); ?> alt="" />

            <h1 class="main-front-page__section-top__container__title">
                <?php the_field('vignette-top-titre-03');
                _ ?>
            </h1>
            <p class="main-front-page__section-top__container__text">
                <?php the_field('vignette-top-text-03');
                _ ?>
            </p>
        </div>
    </section>
    <section class="main-front-page__section main-front-page__section-02">
        <img src=<?php the_field('section-02-image-01');
                    _ ?> alt="" class="main-front-page__section-02__image" />

        <div class="main-front-page__section-02__container">
            <h1 class="main-front-page__section-02__container__title">
                <?php the_field('section-02-titre-01');
                _ ?>
            </h1>
            <h2 class="main-front-page__section-02__container__subtitle">
                <?php the_field('section-02-sous-titre-01');
                _ ?>
            </h2>
            <h3 class="main-front-page__section-02__container__sub-subtitle">
                <?php the_field('section-02-titre-02');
                _ ?>
            </h3>
            <p class="main-front-page__section-02__container__text">
                <?php the_field('section-02-text-01');
                _ ?>
            </p>
            <h3 class="main-front-page__section-02__container__sub-subtitle main-front-page__section-02__container__sub-subtitle-02">
                <?php the_field('section-02-sous-titre-03');
                _ ?>
            </h3>
            <h1 class="main-front-page__section-02__container__title main-front-page__section-02__container__title-02">
                <?php the_field('section-02-sous-titre-04');
                _ ?>
            </h1>
        </div>
    </section>
    <section class="main-front-page__section main-front-page__section-03">
        <div class="main-front-page__section-03__container-top">
            <h1 class="main-front-page__section-03__container-top__title">
                <?php the_field('section-03-titre-01');
                _ ?>
            </h1>
            <h2 class="main-front-page__section-03__container-top__subtitle">
                <?php the_field('section-03-sous-titre-01');
                _ ?>
            </h2>
        </div>
        <div class="main-front-page__section-03__container-mid">
            <div class="main-front-page__section-03__container-mid__content-box">
                <img src=<?php the_field('section-03-logo-image-01');
                            _ ?> alt="" class="main-front-page__section-03__container-mid__content-box__image" />
                <p class="main-front-page__section-03__container-mid__content-box__text">
                    <?php the_field('section-03-logo-titre-01');
                    _ ?>
                </p>
            </div>
            <div class="main-front-page__section-03__container-mid__content-box">
                <img src=<?php the_field('section-03-logo-image-02');
                            _ ?> alt="" class="main-front-page__section-03__container-mid__content-box__image" />
                <p class="main-front-page__section-03__container-mid__content-box__text">
                    <?php the_field('section-03-logo-titre-02');
                    _ ?>
                </p>
            </div>
            <div class="main-front-page__section-03__container-mid__content-box">
                <img src=<?php the_field('section-03-logo-image-03');
                            _ ?> alt="" class="main-front-page__section-03__container-mid__content-box__image" />
                <p class="main-front-page__section-03__container-mid__content-box__text">
                    <?php the_field('section-03-logo-titre-03');
                    _ ?>
                </p>
            </div>
            <div class="main-front-page__section-03__container-mid__content-box">
                <img src=<?php the_field('section-03-logo-image-04');
                            _ ?> alt="" class="main-front-page__section-03__container-mid__content-box__image" />
                <p class="main-front-page__section-03__container-mid__content-box__text">
                    <?php the_field('section-03-logo-titre-04');
                    _ ?>
                </p>
            </div>
            <div class="main-front-page__section-03__container-mid__content-box">
                <img src=<?php the_field('section-03-logo-image-05');
                            _ ?> alt="" class="main-front-page__section-03__container-mid__content-box__image" />
                <p class="main-front-page__section-03__container-mid__content-box__text">
                    <?php the_field('section-03-logo-titre-05');
                    _ ?>
                </p>
            </div>
        </div>
        <div class="main-front-page__section-03__container-bot">
            <?php
            // $cathegory = 'produit';
            // $arg = "category_name=$arg";
            $query = new WP_Query('category_name=produit');
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();

                    get_template_part('template-part/content/article-liste');
                }
            }

            wp_reset_query()
            ?>
            <!-- TODO mettre un url a la view all -->
            <a href="#" class="main-front-page__section-03__container-bot__link link-button-order link-button-view-all">
                <button class="main-front-page__section-03__container-bot__link__button button-order button-view-all">
                    View All
                </button>
            </a>
        </div>
    </section>
    <section class="main-front-page__section main-front-page__section-04">
        <h1 class="main-front-page__section-04__title">
            Discover our franchise
        </h1>
        <h2 class="main-front-page__section-04__subtitle">Our Restaurants</h2>

        <!-- Boucle des pages articles -->

        <?php
        $args = array(
            'post_type' => 'restaurant',
            'post_status' => 'publish',
            'posts_per_page' => 8,
            'orderby' => 'title',
            'order' => 'ASC',
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();

                get_template_part('template-part/content/restaurant-liste');
            }
        }

        wp_reset_query()


        ?>

    </section>
    <section class="main-front-page__section main-front-page__section-05 hide-on-mobile-view desktop-view">
        <?php


        get_template_part('template-part/content/menu-layout');


        ?>
    </section>

    <section class="main-front-page__section main-front-page__section-banner">

        <img src="assets/images/hachures-noires.png" alt="" class="main-front-page__section-banner__image main-front-page__section-banner__image-top" />

        <div class="main-front-page__section-banner__container">
            <div class="main-front-page__section-banner__container__content-box">
                <img src=<?php the_field('image-home-banniere-01'); ?> alt="" class="main-front-page__section-banner__container__content-box__image" />
                <p class="main-front-page__section-banner__container__content-box__number">
                    <?php the_field('nombre-home-banniere-08'); ?>
                </p>
                <p class="main-front-page__section-banner__container__content-box__text">
                    <?php the_field('titre-home-banniere-01'); ?>
                </p>
            </div>
            <div class="main-front-page__section-banner__container__content-box">
                <img src=<?php the_field('image-home-banniere-02'); ?> alt="" class="main-front-page__section-banner__container__content-box__image" />
                <p class="main-front-page__section-banner__container__content-box__number">
                    <?php the_field('nombre-home-banniere-09'); ?>
                </p>
                <p class="main-front-page__section-banner__container__content-box__text">
                    <?php the_field('titre-home-banniere-02'); ?>
                </p>
            </div>
            <div class="main-front-page__section-banner__container__content-box">
                <img src=<?php the_field('image-home-banniere-03'); ?> alt="" class="main-front-page__section-banner__container__content-box__image" />
                <p class="main-front-page__section-banner__container__content-box__number">
                    <?php the_field('nombre-home-banniere-10'); ?>
                </p>
                <p class="main-front-page__section-banner__container__content-box__text">
                    <?php the_field('titre-home-banniere-03'); ?>
                </p>
            </div>
            <div class="main-front-page__section-banner__container__content-box">
                <img src=<?php the_field('image-home-banniere-04'); ?> alt="" class="main-front-page__section-banner__container__content-box__image" />
                <p class="main-front-page__section-banner__container__content-box__number">
                    <?php the_field('nombre-home-banniere-11'); ?>
                </p>
                <p class="main-front-page__section-banner__container__content-box__text">
                    <?php the_field('titre-home-banniere-04'); ?>
                </p>
            </div>
        </div>
        <img src="assets/images/hachures-noires.png" alt="" class="main-front-page__section-banner__image main-front-page__section-banner__image-bottom" />
    </section>

    <!-- Boucle des articles -->

    <?php

    get_template_part('template-part/content/blog-liste');

    ?>

</main>