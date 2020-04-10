<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * 
 */

get_header();
?>

<main class="main-front-page main main-post-type">
    <?php
    get_template_part('template-part/content/product-page');
    ?>
</main>

<?php
get_footer();
