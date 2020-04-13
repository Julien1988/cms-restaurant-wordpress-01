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
    <section class="main-front-page__section main-front-page__section-05">
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
    </section>

    <section class="main-front-page__section main-front-page__section-banner">
        <img src="assets/images/hachures-noires.png" alt="" class="main-front-page__section-banner__image main-front-page__section-banner__image-top" />

        <div class="main-front-page__section-banner__container">
            <div class="main-front-page__section-banner__container__content-box">
                <img src="assets/svg/award.svg" alt="" class="main-front-page__section-banner__container__content-box__image" />
                <p class="main-front-page__section-banner__container__content-box__number">
                    28
                </p>
                <p class="main-front-page__section-banner__container__content-box__text">
                    Award Win
                </p>
            </div>
            <div class="main-front-page__section-banner__container__content-box">
                <img src="assets/svg/qualifiedstaff.svg" alt="" class="main-front-page__section-banner__container__content-box__image" />
                <p class="main-front-page__section-banner__container__content-box__number">
                    82
                </p>
                <p class="main-front-page__section-banner__container__content-box__text">
                    Qualified Staff
                </p>
            </div>
            <div class="main-front-page__section-banner__container__content-box">
                <img src="assets/svg/branches.svg" alt="" class="main-front-page__section-banner__container__content-box__image" />
                <p class="main-front-page__section-banner__container__content-box__number">
                    3
                </p>
                <p class="main-front-page__section-banner__container__content-box__text">
                    Branches
                </p>
            </div>
            <div class="main-front-page__section-banner__container__content-box">
                <img src="assets/svg/happycustomers.svg" alt="" class="main-front-page__section-banner__container__content-box__image" />
                <p class="main-front-page__section-banner__container__content-box__number">
                    6028
                </p>
                <p class="main-front-page__section-banner__container__content-box__text">
                    Happy Customers
                </p>
            </div>
        </div>
        <img src="assets/images/hachures-noires.png" alt="" class="main-front-page__section-banner__image main-front-page__section-banner__image-bottom" />
    </section>

    <section class="main-front-page__section main-front-page__section-06">
        <h1 class="main-front-page__section-06__title">Last updated</h1>
        <h2 class="main-front-page__section-06__subtitle">Recpipes blog</h2>
        <article class="main-front-page__section-06__article">
            <a href="#" class="main-front-page__section-06__article__link">
                <img src="assets/images/the-chef.jpg" alt="" class="main-front-page__section-06__article__link__image" />
            </a>
            <div class="main-front-page__section-06__article__content-box">
                <i class="main-front-page__section-06__article__content-box__icone far fa-clock"></i>
                <p class="main-front-page__section-06__article__content-box__date">
                    OCTOBER 4, 2018
                </p>
            </div>
            <a href="#" class="main-front-page__section-06__article__content-box__link">
                <h3 class="main-front-page__section-06__article__content-box__link__title">
                    Fluffy Japaness Pancakes
                </h3>
            </a>
            <p class="main-front-page__section-06__article__content-box__text">
                My money's in that office, right? If she start giving me some
                bullshit about it ain't there, and we got to go someplace else and
                get it, I'm gonna shoot you in the head then and there.
            </p>
            <a href="#" class="main-front-page__section-06__article__content-box__link">
                <butoon class="main-front-page__section-06__article__content-box__link__button">
                    <span>
                        . . . . . . . . . . . . . . . . . . . . . . .
                    </span>
                    Read More</butoon>
            </a>
        </article>
        <article class="main-front-page__section-06__article">
            <a href="#" class="main-front-page__section-06__article__link">
                <img src="assets/images/the-chef.jpg" alt="" class="main-front-page__section-06__article__link__image" />
            </a>
            <div class="main-front-page__section-06__article__content-box">
                <i class="main-front-page__section-06__article__content-box__icone far fa-clock"></i>
                <p class="main-front-page__section-06__article__content-box__date">
                    OCTOBER 4, 2018
                </p>
            </div>
            <a href="#" class="main-front-page__section-06__article__content-box__link">
                <h3 class="main-front-page__section-06__article__content-box__link__title">
                    Fluffy Japaness Pancakes
                </h3>
            </a>
            <p class="main-front-page__section-06__article__content-box__text">
                My money's in that office, right? If she start giving me some
                bullshit about it ain't there, and we got to go someplace else and
                get it, I'm gonna shoot you in the head then and there.
            </p>
            <a href="#" class="main-front-page__section-06__article__content-box__link">
                <butoon class="main-front-page__section-06__article__content-box__link__button">
                    <span>
                        . . . . . . . . . . . . . . . . . . . . . . .
                    </span>
                    Read More</butoon>
            </a>
        </article>
        <article class="main-front-page__section-06__article">
            <a href="#" class="main-front-page__section-06__article__link">
                <img src="assets/images/the-chef.jpg" alt="" class="main-front-page__section-06__article__link__image" />
            </a>
            <div class="main-front-page__section-06__article__content-box">
                <i class="main-front-page__section-06__article__content-box__icone far fa-clock"></i>
                <p class="main-front-page__section-06__article__content-box__date">
                    OCTOBER 4, 2018
                </p>
            </div>
            <a href="#" class="main-front-page__section-06__article__content-box__link">
                <h3 class="main-front-page__section-06__article__content-box__link__title">
                    Fluffy Japaness Pancakes
                </h3>
            </a>
            <p class="main-front-page__section-06__article__content-box__text">
                My money's in that office, right? If she start giving me some
                bullshit about it ain't there, and we got to go someplace else and
                get it, I'm gonna shoot you in the head then and there.
            </p>
            <a href="#" class="main-front-page__section-06__article__content-box__link">
                <butoon class="main-front-page__section-06__article__content-box__link__button">
                    <span>
                        . . . . . . . . . . . . . . . . . . . . . . .
                    </span>
                    Read More</butoon>
            </a>
        </article>
    </section>
</main>