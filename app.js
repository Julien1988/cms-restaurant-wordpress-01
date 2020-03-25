(() => {
  let arrayElement = [
    "<a href='#'><i class='fas fa-home'></i></a>",
    "<a href='#'>Ours restaurants</a>",
    "<a href='#'>Menu</a>",
    "<a href='#'>Recipes</a>",
    "<a href='#'>Reservations</a>",
    "<a href='#'>Order</a>",
    "<a href='#'><i class='fas fa-shopping-cart'></i></a>"
  ];

  let getElement = document.querySelector(".header");

  document
    .querySelector(".header__nav__burger-menu")
    .addEventListener("click", () => {
      let ul = getElement.appendChild(document.createElement("ul"));
      for (let i = 0; i < arrayElement.length; i++) {
        let li = ul.appendChild(document.createElement("li"));
        li.innerHTML = arrayElement[i];
      }
    });
})();
