<?php
/*

Template Name : Contacte-liste

*/
?>

<h2 class="footer__section-02__container__subtitle"><?php the_field('titre-contact-footer-01') ?></h2>
<div class="footer__section-02__container__content-box footer__section-02__container__content-box-contact">
    <?php the_field('logo-contact-footer-01') ?>
    <a href="tel:<?php the_field('telephone-contact-footer-01') ?>" class="footer__section-02__container__content-box__link">:<?php the_field('telephone-contact-footer-01') ?></a>
</div>
<div class="footer__section-02__container__content-box footer__section-02__container__content-box-contact">
    <i class="footer__section-02__container__content-box__icone fas fa-map-marker-alt"></i>
    <p class="footer__section-02__container__content-box__text">
        Rue de Mulhouse, 36 <br />
        4020 Liège <br />
        Belgium
    </p>
</div>
<div class="footer__section-02__container__content-box footer__section-02__container__content-box-contact">
    <i class="footer__section-02__container__content-box__icone fas fa-envelope"></i>
    <a href="email:0devdesign.studio@gmail.com" class="footer__section-02__container__content-box__link">
        0devdesign.studio@gmail.com</a>
</div>