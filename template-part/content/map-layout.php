<?php
/*
Template Name : Map-layout
*/
?>

<h1 class="main-post-type__section-02__title"><?php the_field('titre-location-post-type-01') ?></h1>
<h2 class="main-post-type__section-02__subtitle"><?php the_field('sous-titre-location-post-type-01') ?></h2>
<iframe src=<?php the_field('map-location-post-type-01') ?> width="600" height="450" frameborder="0" style="border: 0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>