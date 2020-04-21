<?php
/*
Template Name: page-post
*/

get_header();
?>
<main class="main-front-page main main-post-type">
    <img src="assets/images/hachures-blanches.png" alt="" class="main-post-type__image" />
    <section class="main-post-type__section main-post-type__section-01">
        <h1 class="main-post-type__section-01__title">Welcome</h1>
        <h2 class="main-post-type__section-01__subtitle">Presentation</h2>
        <div class="main-post-type__section-01__container">
            <img src="assets/images/resto1.jpg" alt="" class="main-post-type__section-01__container__image" />
            <div class="main-post-type__section-01__container__content-box">
                <h3 class="main-post-type__section-01__container__content-box__title">
                    Our original restaurant
                </h3>
                <h4 class="main-post-type__section-01__container__content-box__subtitle">
                    The chef's cafeteria
                </h4>
                <p class="main-post-type__section-01__container__content-box__text">
                    Do you see any Teletubbies in here? Do you see a slender plastic
                    tag clipped to my shirt with my name printed on it? Do you see a
                    little Asian child with a blank expression on his face sitting
                    outside on a mechanical helicopter that shakes when you put
                    quarters in it? No? Well, that's what you see at a toy store. And
                    you must think you're in a toy store, because you're here shopping
                    for an infant named Jeb.
                </p>
            </div>
        </div>
        <div class="main-post-type__section-01__container">
            <img src="assets/images/resto2.jpg" alt="" class="main-post-type__section-01__container__image" />
            <div class="main-post-type__section-01__container__content-box">
                <h3 class="main-post-type__section-01__container__content-box__title">
                    Our original restaurant
                </h3>
                <h4 class="main-post-type__section-01__container__content-box__subtitle">
                    The chef's cafeteria
                </h4>
                <p class="main-post-type__section-01__container__content-box__text">
                    Do you see any Teletubbies in here? Do you see a slender plastic
                    tag clipped to my shirt with my name printed on it? Do you see a
                    little Asian child with a blank expression on his face sitting
                    outside on a mechanical helicopter that shakes when you put
                    quarters in it? No? Well, that's what you see at a toy store. And
                    you must think you're in a toy store, because you're here shopping
                    for an infant named Jeb.
                </p>
            </div>
        </div>
    </section>
    <section class="main-post-type__section main-post-type__section-02">
        <h1 class="main-post-type__section-02__title">Find Us</h1>
        <h2 class="main-post-type__section-02__subtitle">Location</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.6813219788114!2d5.58462641602951!3d50.63303657950092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0f118d22c1b85%3A0x47f4b33cb5f3e2bf!2sBeCode%20Li%C3%A8ge!5e0!3m2!1sen!2sbe!4v1585734178090!5m2!1sen!2sbe" width="600" height="450" frameborder="0" style="border: 0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
    <section class="main-post-type__section main-post-type__section-04">
        <div class="main-post-type__section-04__container">
            <h1 class="main-post-type__section-04__container__title">
                Let's discover food
            </h1>
            <h2 class="main-post-type__section-04__container__subtitle">
                Discover our menu
            </h2>
            <p class="main-post-type__section-04__container__text">
                Well, the way they make shows is, they make one show. That show's
                called a pilot. Then they show that show to the people who make
                shows, and on the strength of that one show they decide if they're
                going to make more shows. Some pilots get picked and become
                television programs. Some don't, become nothing. She starred in one
                of the ones that became nothing.
            </p>
            <a href="#" class="main-post-type__section-04__container__link link-button-order">
                <button class="main-post-type__section-04__container__link__button button-view-all">
                    View the full menu
                </button>
            </a>
        </div>

        <!-- Hide on mobile view -->
        <div class="main-post-type__section-04__container hide-on-mobile-view desktop-view">
            <img src="assets/images/joseph-gonzalez-zcUgjyqEwe8-unsplash.jpg" alt="" class="main-post-type__section-04__container__image" />
            <img src="assets/images/joseph-gonzalez-zcUgjyqEwe8-unsplash.jpg" alt="" class="main-post-type__section-04__container__image" />
            <img src="assets/images/joseph-gonzalez-zcUgjyqEwe8-unsplash.jpg" alt="" class="main-post-type__section-04__container__image" />
            <img src="assets/images/joseph-gonzalez-zcUgjyqEwe8-unsplash.jpg" alt="" class="main-post-type__section-04__container__image" />
        </div>
    </section>
    <section class="main-front-page__section main-front-page__section-06">
        <h1 class="main-front-page__section-06__title">Last updated</h1>
        <h2 class="main-front-page__section-06__subtitle">Recpipes blog</h2>
        <article class="main-front-page__section-06__article">
            <a href="#" class="main-front-page__section-06__article__link">
                <img src="assets/images/the-chef.jpg" alt="" class="main-front-page__section-06__article__link__image" />
            </a>
            <div class="main-front-page__section-06__article__content-box">
                <i class="main-front-page__section-06__article__content-box__icone far fa-clock"></i>
                <p class="main-front-page__section-06__article__content-box__date">
                    OCTOBER 4, 2018
                </p>
            </div>
            <a href="#" class="main-front-page__section-06__article__content-box__link">
                <h3 class="main-front-page__section-06__article__content-box__link__title">
                    Fluffy Japaness Pancakes
                </h3>
            </a>
            <p class="main-front-page__section-06__article__content-box__text">
                My money's in that office, right? If she start giving me some
                bullshit about it ain't there, and we got to go someplace else and
                get it, I'm gonna shoot you in the head then and there.
            </p>
            <a href="#" class="main-front-page__section-06__article__content-box__link">
                <butoon class="main-front-page__section-06__article__content-box__link__button">
                    <span>
                        . . . . . . . . . . . . . . . . . . . . . . .
                    </span>
                    Read More</butoon>
            </a>
        </article>
        <article class="main-front-page__section-06__article">
            <a href="#" class="main-front-page__section-06__article__link">
                <img src="assets/images/the-chef.jpg" alt="" class="main-front-page__section-06__article__link__image" />
            </a>
            <div class="main-front-page__section-06__article__content-box">
                <i class="main-front-page__section-06__article__content-box__icone far fa-clock"></i>
                <p class="main-front-page__section-06__article__content-box__date">
                    OCTOBER 4, 2018
                </p>
            </div>
            <a href="#" class="main-front-page__section-06__article__content-box__link">
                <h3 class="main-front-page__section-06__article__content-box__link__title">
                    Fluffy Japaness Pancakes
                </h3>
            </a>
            <p class="main-front-page__section-06__article__content-box__text">
                My money's in that office, right? If she start giving me some
                bullshit about it ain't there, and we got to go someplace else and
                get it, I'm gonna shoot you in the head then and there.
            </p>
            <a href="#" class="main-front-page__section-06__article__content-box__link">
                <butoon class="main-front-page__section-06__article__content-box__link__button">
                    <span>
                        . . . . . . . . . . . . . . . . . . . . . . .
                    </span>
                    Read More</butoon>
            </a>
        </article>
        <article class="main-front-page__section-06__article">
            <a href="#" class="main-front-page__section-06__article__link">
                <img src="assets/images/the-chef.jpg" alt="" class="main-front-page__section-06__article__link__image" />
            </a>
            <div class="main-front-page__section-06__article__content-box">
                <i class="main-front-page__section-06__article__content-box__icone far fa-clock"></i>
                <p class="main-front-page__section-06__article__content-box__date">
                    OCTOBER 4, 2018
                </p>
            </div>
            <a href="#" class="main-front-page__section-06__article__content-box__link">
                <h3 class="main-front-page__section-06__article__content-box__link__title">
                    Fluffy Japaness Pancakes
                </h3>
            </a>
            <p class="main-front-page__section-06__article__content-box__text">
                My money's in that office, right? If she start giving me some
                bullshit about it ain't there, and we got to go someplace else and
                get it, I'm gonna shoot you in the head then and there.
            </p>
            <a href="#" class="main-front-page__section-06__article__content-box__link">
                <butoon class="main-front-page__section-06__article__content-box__link__button">
                    <span>
                        . . . . . . . . . . . . . . . . . . . . . . .
                    </span>
                    Read More</butoon>
            </a>
        </article>
    </section>
</main>
<?php
get_footer();
