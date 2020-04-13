<?php
/*
Template Name: page-menu
*/

get_header();
?>

<main class="main-front-page main main-post-type main-menu-page">

    <img src="assets/images/hachures-blanches.png" alt="" class="main-post-type__image" />
    <h1 class="main-menu-page__title">Welcome</h1>
    <h2 class="main-menu-page__subtitle">The menu</h2>
    <section class="main-menu-page__section main-menu-page__section-starter">


        <h3 class="main-menu-page__section-starter__title">Starter</h3>
        <?php
        $args = array(
            'post_type' => 'menu',
            'post_status' => 'publish',
            'posts_per_page' => 10,
            'orderby' => 'title',
            'order' => 'ASC',
            'meta_value' => 'Starter'

        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();

                get_template_part('template-part/content/menu-liste-starter');


            endwhile;
        endif;

        wp_reset_postdata();
        ?>
    </section>
    <section class="main-menu-page__section main-menu-page__section-mains">
        <h3 class="main-menu-page__section-mains__title">Mains</h3>
        <?php
        $args = array(
            'post_type' => 'menu',
            'post_status' => 'publish',
            'posts_per_page' => 10,
            'orderby' => 'title',
            'order' => 'ASC',
            'meta_value' => 'Main'

        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();

                get_template_part('template-part/content/menu-liste-starter');


            endwhile;
        endif;

        wp_reset_postdata();
        ?>
    </section>
    <section class="main-menu-page__section main-menu-page__section-desserts">
        <h3 class="main-menu-page__section-desserts__title">Desserts</h3>
        <?php
        $args = array(
            'post_type' => 'menu',
            'post_status' => 'publish',
            'posts_per_page' => 10,
            'orderby' => 'title',
            'order' => 'ASC',
            'meta_value' => 'Dessert'

        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();

                get_template_part('template-part/content/menu-liste-starter');


            endwhile;
        endif;

        wp_reset_postdata();
        ?>
    </section>
</main>

<?php
get_footer();
