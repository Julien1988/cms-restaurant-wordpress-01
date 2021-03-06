// Gesttion de la nav bar pour la vue mobile

(() => {
  // Récupération des données du menu dans le HTML généré par wordpress

  let getWpNavList = document.querySelector(".menu-desktop-view");

  let getWpNavListChildes = getWpNavList.children;
  // console.log(getWpNavList);
  // console.log(getWpNavListChildes.length);
  // console.log(getWpNavListChildes[0]);

  let arrayElement = [];

  for (let i = 0; i < getWpNavListChildes.length; i++) {
    console.log(getWpNavListChildes[i].firstChild);
    arrayElement.push(getWpNavListChildes[i].innerHTML);
  }
  // FIN de la récupération

  // Exemple d'utilisation de la boucle

  // const arrayElement = [
  //   "<a class='header__burger-menu__list__item__link' href='#'><i class='fas fa-home'></i></a>",
  //   "<a class='header__burger-menu__list__item__link' href='#'>Ours restaurants</a>",
  //   "<a class='header__burger-menu__list__item__link' href='#'>Menu</a>",
  //   "<a class='header__burger-menu__list__item__link' href='#'>Recipes</a>",
  //   "<a class='header__burger-menu__list__item__link' href='#'>Reservations</a>",
  //   "<a class='header__burger-menu__list__item__link primary-button' href='#'>Order</a>",
  //   "<a class='header__burger-menu__list__item__link' href='#'><i class='fas fa-shopping-cart'></i></a>",
  // ];

  let getElement = document.querySelector(".header");
  let clickCount = 0;
  let getBurger = document.querySelector(".header__nav__burger-menu__icone");
  let getElementToHide = document.querySelector(".header__container");
  let getHeaderElement = document.querySelector(".header");
  document
    .querySelector(".header__nav__burger-menu")
    .addEventListener("click", () => {
      if (clickCount === 0) {
        clickCount++;
        let ul = getElement.appendChild(document.createElement("ul"));
        ul.className = "header__burger-menu__liste";
        getElementToHide.className = "header__container hidden-class";
        getBurger.className = "header__nav__burger-menu__icone fas fa-times";
        getHeaderElement.className = "header header-background-js";
        for (let i = 0; i < arrayElement.length; i++) {
          let li = ul.appendChild(document.createElement("li"));
          li.className = "header__burger-menu__liste__item";
          li.innerHTML = arrayElement[i];
        }
        // AJOUT BUF Fix
        document.querySelector(".header__container__background-box").className =
          "header__container__background-box desktop-view";
        // END
        console.log(clickCount);
        return clickCount;
      } else {
        clickCount--;
        let removeElement = document.querySelector(
          ".header__burger-menu__liste"
        );
        getBurger.className = "header__nav__burger-menu__icone fas fa-bars";
        getElementToHide.className = "header__container";
        getHeaderElement.className = "header";
        removeElement.remove(removeElement);
        //getElement.removeChild(getElement.lastChild);
        return clickCount;
      }
    });
})();

// Animation of the focus JS

(() => {
  let getElement = document.querySelector(
    ".main-front-page__section-03__container-mid"
  );
  let elementLength = getElement.childElementCount;

  let childrenElement = getElement.children;
  //console.log(childrenElement);
  let count = 1;
  let count2 = count + 1;
  let endOfAnimation = 0;
  let elementArray = [];
  // Animation repeat
  const TimeOfAnimation = 50;
  // Choice where the animation start
  const StartOfAnimation = 1;

  for (let i = 0; i < elementLength; i++) {
    elementArray.push(childrenElement[i]);
    index = i;
  }

  function resolveAfter() {
    return new Promise((changinColor) => {
      setInterval(changinColor(count), 1000);
    });
  }
  async function changinColor() {
    if (count < elementLength) {
      childrenElement[count].className =
        "main-front-page__section-03__container-mid__content-box js-action-class";
      //console.log("count2", count2);
      childrenElement[count2].className =
        "main-front-page__section-03__container-mid__content-box";
      count = count + 1;
      count2 = count - 1;
      await resolveAfter;
    } else {
      //console.log("fin de la condition");
      if (endOfAnimation < TimeOfAnimation) {
        //console.log(endOfAnimation);
        return (
          (count = StartOfAnimation), (endOfAnimation = endOfAnimation + 1)
        );
      } else {
        console.log("end of animation");

        elementLength = elementLength - 1;
        childrenElement[elementLength].className =
          "main-front-page__section-03__container-mid__content-box";
        clearInterval(stopAnimation);
      }
    }
  }

  let stopAnimation = setInterval(changinColor, 1000);
})();
