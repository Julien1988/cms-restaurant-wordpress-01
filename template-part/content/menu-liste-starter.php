<?php
/*
Template Name : menu-liste-starter
*/

?>

<!-- Logique conditionelle pour la selection du chef -->
<?php
// $chief_selection = "chef-selection--title";
// $chief_selection_border = "main-menu-page__section__container main-menu-page__section-starter__container";
// $get_field = the_field('selection-du-chef-menu-page-01');
// if ($get_field != 1) {
//     $chief_selection = "chef-selection--title chef-selection--title--show";
//     $chief_selection_border = "chef-selection";
// } else {
//     $chief_selection = "chef-selection--title";
//     $chief_selection_border = "main-menu-page__section__container main-menu-page__section-starter__container";
// }


?>
<!-- Affichage du menu STARTER -->
<h5 class="<?php the_field('selection-du-chef-menu-page-01'); ?>">
    chef selection
</h5>
<div class="<?php the_field('selection-du-chef-menu-page-02'); ?>">

    <div class="main-menu-page__section__container__content-box">
        <h4 class="main-menu-page__section__container__content-box__title">
            <?php the_field('titre-menu-page-01'); ?>

        </h4>
        <span class="main-menu-page__section__container__content-box__span"></span>
        <p class="main-menu-page__section__container__content-box__price">
            <?php the_field('prix-menu-page-01'); ?>€
        </p>
    </div>
    <p class="main-menu-page__section__container__text">
        <?php the_field('texte-menu-page-01'); ?>
    </p>
</div>





<!-- LAst Article posts -->