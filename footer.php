<!-- footer -->

<footer class="footer">
    <img src="assets/images/hachures-noires.png" alt="" class="footer__image desktop-view" />
    <section class="footer__section footer__section-01">
        <img src="assets/images/hachures-noires.png" alt="" class="footer__section-01__image" />
        <form class="footer__section-01__form" action="#" method="POST">
            <h1 class="footer__section-01__form__title">
                Join our Newsletter
            </h1>
            <div>
                <input id="footer-input-email" type="email" name="user_email" placeholder="Your Email Address" />
                <div class="footer__section-01__form__box-button">
                    <button class="footer__section-01__form__box-button__button" type="submit">
                        Subscribe
                    </button>
                </div>
            </div>
        </form>
    </section>
    <section class="footer__section footer__section-02">
        <div class="footer__section-02__container">
            <h1 class="footer__section-02__container__title">Dev Restaurant</h1>
            <p class="footer__section-02__container__text">
                The path of the righteous man is beset on all sides by the
                iniquities of the selfish and the tyranny of evil men. Blessed is he
                who, in the name of charity and good will, shepherds the weak
                through the valley of darkness, for he is truly his brother's keeper
                and the finder of lost children.
            </p>

            <ul class="footer__section-02__container__list">
                <?php
                $args = array(
                    'post_type' => 'social',
                    'post_status' => 'publish',
                    'posts_per_page' => 10,
                    'orderby' => 'title',
                    'order' => 'ASC',


                );

                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) :
                        $query->the_post();

                        get_template_part('template-part/content/social-liste');


                    endwhile;
                endif;

                wp_reset_postdata();

                ?>
            </ul>
        </div>
        <div class="footer__section-02__container">
            <?php
            $args = array(
                'post_type' => 'horaire',
                'post_status' => 'publish',
                'posts_per_page' => 10,
                'orderby' => 'title',
                'order' => 'ASC',


            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post();

                    get_template_part('template-part/content/horaire-liste');


                endwhile;
            endif;

            wp_reset_postdata();

            ?>
            <!-- <h2 class="footer__section-02__container__subtitle">Open Hours</h2>
            <div class="footer__section-02__container__content-box">
                <i class="footer__section-02__container__content-box__icone far fa-clock"></i>
                <p class="footer__section-02__container__content-box__text">
                    Mondays
                </p>
                <span class="footer__section-02__container__content-box__bar"></span>
                <p class="footer__section-02__container__content-box__text">
                    Closed
                </p>
            </div>
            <div class="footer__section-02__container__content-box">
                <i class="footer__section-02__container__content-box__icone far fa-clock"></i>
                <p class="footer__section-02__container__content-box__text">
                    Tue-Fri
                </p>
                <span class="footer__section-02__container__content-box__bar"></span>
                <p class="footer__section-02__container__content-box__text">
                    10am - 12am
                </p>
            </div>
            <div class="footer__section-02__container__content-box">
                <i class="footer__section-02__container__content-box__icone far fa-clock"></i>
                <p class="footer__section-02__container__content-box__text">
                    Sat-Sun
                </p>
                <span class="footer__section-02__container__content-box__bar"></span>
                <p class="footer__section-02__container__content-box__text">
                    7am - 1am
                </p>
            </div>
            <div class="footer__section-02__container__content-box">
                <i class="footer__section-02__container__content-box__icone far fa-clock"></i>
                <p class="footer__section-02__container__content-box__text">
                    Public Holidays
                </p>
                <span class="footer__section-02__container__content-box__bar"></span>
                <p class="footer__section-02__container__content-box__text">
                    7an - 1am
                </p>
            </div> -->
        </div>
        <div class="footer__section-02__container">

            <?php
            $args = array(
                'post_type' => 'contact',
                'post_status' => 'publish',
                'posts_per_page' => 10,
                'orderby' => 'title',
                'order' => 'ASC',


            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post();

                    get_template_part('template-part/content/contact-liste');


                endwhile;
            endif;

            wp_reset_postdata();

            ?>
            <!-- <h2 class="footer__section-02__container__subtitle">Contact Us</h2>
            <div class="footer__section-02__container__content-box footer__section-02__container__content-box-contact">
                <i class="footer__section-02__container__content-box__icone fas fa-phone"></i>
                <a href="tel:123-465-7890" class="footer__section-02__container__content-box__link">+ 1 (123) xxx-xxxx</a>
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
            </div> -->
        </div>
        <div class="footer__section-02__container">
            <h2 class="footer__section-02__container__subtitle">Instagrame</h2>
            <img src="assets/images/joseph-gonzalez-zcUgjyqEwe8-unsplash.jpg" alt="" class="footer__section-02__container__image" />
            <img src="assets/images/joseph-gonzalez-zcUgjyqEwe8-unsplash.jpg" alt="" class="footer__section-02__container__image" />
            <img src="assets/images/joseph-gonzalez-zcUgjyqEwe8-unsplash.jpg" alt="" class="footer__section-02__container__image" />
            <img src="assets/images/joseph-gonzalez-zcUgjyqEwe8-unsplash.jpg" alt="" class="footer__section-02__container__image" />
            <img src="assets/images/joseph-gonzalez-zcUgjyqEwe8-unsplash.jpg" alt="" class="footer__section-02__container__image" />
            <img src="assets/images/joseph-gonzalez-zcUgjyqEwe8-unsplash.jpg" alt="" class="footer__section-02__container__image" />
        </div>
    </section>
    <section class="footer__section footer__section-03">
        <div class="footer__section-03__container">
            <p class="footer__section-03__container__text">
                <i class="footer__section-03__container__text__icone button-order far fa-copyright"></i>
                2019 All rights Reserved. <br />
                Designed By Devdesign Studio
            </p>
        </div>
    </section>
</footer>
<?php wp_footer(); ?>
<script src="app.js"></script>
</body>

</html>