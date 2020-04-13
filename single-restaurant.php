<?php
/*
Template Name: single-restaurant
*/

get_header();
?>

<article class="main-front-page__section main-front-page__section-04__article">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();

            get_template_part('template-part/content/restaurant-single');

        endwhile;
    endif;
    wp_reset_postdata();
    ?>
</article>

<?php
get_footer();
