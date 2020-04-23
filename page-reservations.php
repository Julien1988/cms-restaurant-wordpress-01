<?php
/*
Template Name: page-restervations
*/

get_header();
?>


<main class="main-front-page main main-post-type">

    <!-- Boucle page Restervations -->

    <?php
    $args = array(
        'post_type' => 'page',
        'post_status' => 'publish',
        'posts_per_page' => 10,
        'orderby' => 'title',
        'order' => 'ASC'


    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) :
            $query->the_post();

            get_template_part('template-part/content/reservation-layout');


        endwhile;
    endif;

    wp_reset_postdata();
    ?>



</main>
<?php
get_footer();
