$(document).ready(function () {
  let obj = [];

  $(".cart").click(function () {
    var id = $(this).data("id");
    debugger;
    if (localStorage) {
      var cart;
      if (!localStorage["cart"]) {
        cart = [];
      } else {
        cart = JSON.parse(localStorage["cart"]);
        if (!(cart instanceof Array)) {
          cart = [];
          cart.push(id);
        }
        localStorage.setItem("cart", JSON.stringify(cart));
      }
    }
  });

  $(".cart_quantity").html(
    localStorage.getItem("ids") == null || localStorage.getItem("ids") == "NaN"
      ? "0"
      : localStorage.getItem("ids").split(",").length
  );

  //   click cart
  $(".clickCart").click(function () {});
});
