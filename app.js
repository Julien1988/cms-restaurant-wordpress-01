// Gesttion de la nav bar pour la vue mobile

(() => {
  const arrayElement = [
    "<a href='#'><i class='fas fa-home'></i></a>",
    "<a href='#'>Ours restaurants</a>",
    "<a href='#'>Menu</a>",
    "<a href='#'>Recipes</a>",
    "<a href='#'>Reservations</a>",
    "<a href='#'>Order</a>",
    "<a href='#'><i class='fas fa-shopping-cart'></i></a>"
  ];

  let getElement = document.querySelector(".header");
  let clickCount = 0;

  document
    .querySelector(".header__nav__burger-menu")
    .addEventListener("click", () => {
      if (clickCount === 0) {
        clickCount++;
        let ul = getElement.appendChild(document.createElement("ul"));
        for (let i = 0; i < arrayElement.length; i++) {
          let li = ul.appendChild(document.createElement("li"));
          li.innerHTML = arrayElement[i];
        }
        console.log(clickCount);
        return clickCount;
      } else {
        clickCount--;
        getElement.removeChild(getElement.lastChild);
        return clickCount;
      }
    });
})();
