<?php


get_header();
?>
<img src="assets/images/hachures-blanches.png" alt="" class="main-post-type__image" />
<section class="main-post-type__section main-post-type__section-01">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();

            get_template_part('template-part/content/article-single');

        endwhile;
    endif;
    wp_reset_postdata();
    ?>
</section>

<?php
get_footer();
