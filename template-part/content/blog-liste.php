<?php

/*
Template Name : blog-liste
*/

?>


<section class="main-front-page__section main-front-page__section-06">
    <h1 class="main-front-page__section-06__title">Last updated</h1>
    <h2 class="main-front-page__section-06__subtitle">Recpipes blog</h2>

    <?php
    $args = array(
        'post_type' => 'post',
        'category_name' => 'Blog'

    );
    $query = new WP_Query($args);

    if ($query->have_posts()) :

        while ($query->have_posts()) : $query->the_post();

            get_template_part('template-part/content/blog-article-liste');

        endwhile;



        wp_reset_postdata();


    endif;



    ?>


</section>