<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- 
    <link rel="stylesheet" href="style.scss" />
    <link rel="stylesheet" href="output.css" />
    <link rel="stylesheet" href="output.css.map" />
    <link rel="stylesheet" href="input.scss" /> -->
    <?php wp_head(); ?>

    <script src="https://kit.fontawesome.com/640150b068.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <nav class="header__nav mobile-view">
            <h1 class="header__nav__title">
                <a href="#" class="header__nav__title__link"><?php bloginfo('title'); ?></a>
            </h1>
            <span class="header__nav__subtitle">
                <a href="#" class="header__nav__subtile__link">Menu</a>
            </span>
            <a href="#" class="header__nav__burger-menu"><i class="header__nav__burger-menu__icone fas fa-bars"></i></a>
        </nav>
        <!-- ICI JS action -->
        <!-- NAV view descope -->
        <nav class="header__nav desktop-view">
            <h1 class="header__nav__title">
                <a href="#" class="header__nav__title__link"><?php bloginfo('title'); ?></a>
            </h1>
            <?php
            $defaults = array(
                'menu' => '',
                'menu_class' => 'header__nav desktop-view',
                'menu_id' => '',
                'container' => false,
                'container_class' => '',
                'fallback_cb' => 'wp_page_menu',
                'beffore' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'echo' => true,
                'depth' => 0,
                'walker' => '',
                'theme_location' => '',
                'item_wrap' => '<a class="header__burger-menu__list__item__link" href="#">Ours restaurants</a>',
                'item_spacing' => 'preserve',
            );


            wp_nav_menu($defaults);

            ?>
            <style>
                .header,
                .desktop-view {
                    padding-left: 0em !important;
                    padding-right: 0em !important;
                    margin-top: 0em !important;
                }
            </style>
            <!-- <a class="header__burger-menu__list__item__link" href="#"><i class="fas fa-home"></i></a>
            <a class="header__burger-menu__list__item__link" href="#">Ours restaurants</a>
            <a class="header__burger-menu__list__item__link" href="#">Menu</a>
            <a class="header__burger-menu__list__item__link" href="#">Recipes</a>
            <a class="header__burger-menu__list__item__link" href="#">Reservations</a>
            <a class="header__burger-menu__list__item__link primary-button" href="#">Order</a>
            <a class="header__burger-menu__list__item__link" href="#"><i class="fas fa-shopping-cart"></i></a> -->
        </nav>
        <!-- END -->
        <div class="header__container">
            <h2 class="header__container__title">
                For happy day
            </h2>
            <h3 class="header__container__subtitle">
                Enjoy <br />
                happy Meal
            </h3>
            <div class="header__container__content-box">
                <span class="header__container__content-box__span"></span>
                <p class="header__container__content-box__text">check our menu</p>
            </div>
        </div>
        <div class="header__container__background-box"></div>
    </header>