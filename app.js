// Gesttion de la nav bar pour la vue mobile

(() => {
  const arrayElement = [
    "<a class='header__burger-menu__list__item__link' href='#'><i class='fas fa-home'></i></a>",
    "<a class='header__burger-menu__list__item__link' href='#'>Ours restaurants</a>",
    "<a class='header__burger-menu__list__item__link' href='#'>Menu</a>",
    "<a class='header__burger-menu__list__item__link' href='#'>Recipes</a>",
    "<a class='header__burger-menu__list__item__link' href='#'>Reservations</a>",
    "<a class='header__burger-menu__list__item__link primary-button' href='#'>Order</a>",
    "<a class='header__burger-menu__list__item__link' href='#'><i class='fas fa-shopping-cart'></i></a>"
  ];

  let getElement = document.querySelector(".header");
  let clickCount = 0;
  let getBurger = document.querySelector(".header__nav__burger-menu__icone");
  document
    .querySelector(".header__nav__burger-menu")
    .addEventListener("click", () => {
      if (clickCount === 0) {
        clickCount++;
        let ul = getElement.appendChild(document.createElement("ul"));
        ul.className = "header__burger-menu__liste";
        getBurger.className = "header__nav__burger-menu__icone fas fa-times";
        for (let i = 0; i < arrayElement.length; i++) {
          let li = ul.appendChild(document.createElement("li"));
          li.className = "header__burger-menu__liste__item";
          li.innerHTML = arrayElement[i];
        }
        console.log(clickCount);
        return clickCount;
      } else {
        clickCount--;
        let removeElement = document.querySelector(
          ".header__burger-menu__liste"
        );
        getBurger.className = "header__nav__burger-menu__icone fas fa-bars";
        removeElement.remove(removeElement);
        //getElement.removeChild(getElement.lastChild);
        return clickCount;
      }
    });
})();
