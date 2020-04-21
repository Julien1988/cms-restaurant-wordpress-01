<?php
/*
Template Name: page-post
*/

get_header();
?>


<main class="main-front-page main main-post-type">
    <img src="assets/images/hachures-blanches.png" alt="" class="main-post-type__image" />
    <section class="main-post-type__section main-post-type__section-01">
        <?php


        get_template_part('template-part/content/post-type');



        ?>

    </section>
    <section class="main-post-type__section main-post-type__section-02">
        <?php


        get_template_part('template-part/content/map-layout');



        ?>
    </section>
    <section class="main-post-type__section main-post-type__section-03">
        <h1 class="main-post-type__section-03__title">
            Submit information to Place Order
        </h1>
        <h2 class="main-post-type__section-03__subtitle">Reserve a table</h2>
        <div class="main-post-type__section-03__container">
            <img src="assets/images/resto3.jpg" alt="" class="main-post-type__section-03__container__image" />
            <form action="#" method="POST" class="main-post-type__section-03__container__form link-button-order">
                <div class="main-post-type__section-03__container__form__form-group form-group-name">
                    <label for="yourInputName">Your Name</label>
                    <input type="name" placeholder="Enter your name" />
                </div>
                <div class="main-post-type__section-03__container__form__form-group form-group-email">
                    <label for="yourInputEmail">Your Email</label>
                    <input type="email" placeholder="Enter your Email" />
                </div>
                <div class="main-post-type__section-03__container__form__form-group form-group-number">
                    <label for="yourInputnumber">Your Number</label>
                    <input type="tel" placeholder="Enter your Number" />
                </div>
                <div class="main-post-type__section-03__container__form__form-group form-group-table">
                    <label for="tableInputNumber">Table for</label>
                    <select>
                        <option value="1">1 person</option>
                        <option value="2">2 persons</option>
                        <option value="3">3 persons</option>
                        <option value="4">4 persons</option>
                        <option value="5">5 persons</option>
                    </select>
                </div>
                <div class="main-post-type__section-03__container__form__form-group form-group-place">
                    <label for="placeInputLocation">Place</label>
                    <select>
                        <option value="The Chief's Cafetaria">The Chief's Cafetaria</option>
                        <option value="The Great Room">The Great Room</option>
                    </select>
                </div>
                <div class="main-post-type__section-03__container__form__form-group form-group-hour">
                    <label for="timeInputNumber">Select Time</label>
                    <select>
                        <option value="10:00">10:00 AM</option>
                        <option value="11:00">11:00 AM</option>
                        <option value="12:00">12:00 AM</option>
                        <option value="13:00">1:00 PM</option>
                    </select>
                </div>
                <div class="main-post-type__section-03__container__form__form-group form-group-date">
                    <label for="dateInputNumber">Select Time</label>
                    <select>
                        <option value="31/12/2020">31 Décembre 2020</option>
                        <option value="31/12/2020">31 Décembre 2020</option>
                        <option value="31/12/2020">31 Décembre 2020</option>
                        <option value="31/12/2020">31 Décembre 2020</option>
                    </select>
                </div>
                <div class="main-post-type__section-03__container__form__form-group form-group-text-message">
                    <label for="textInputArea">Select Time</label>
                    <textarea name="textInputArea" id="textInputArea" cols="25" rows="5"></textarea>
                </div>
                <div class="main-post-type__section-03__container__form__form-group form-group-button">
                    <button class="button-order" type="submit">
                        Reserve now
                    </button>
                </div>
            </form>
        </div>
    </section>
    <section class="main-front-page__section main-front-page__section-05 hide-on-mobile-view desktop-view">

        <?php


        get_template_part('template-part/content/menu-layout');


        ?>



    </section>

    <!-- Boucle des articles -->

    <?php

    get_template_part('template-part/content/blog-liste');

    ?>

</main>
<?php
get_footer();
