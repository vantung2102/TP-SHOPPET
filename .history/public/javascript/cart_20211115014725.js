import { Constants } from "../javascript/constants.js";

$(document).ready(function () {
  let obj = new Constants();
  var carts = JSON.parse(localStorage.getItem("carts")) || [];

  $(".cart").click(function () {
    var id = $(this).data("id");
    var name = $(".name").data("name");
    var price_old = $(".price-old").data("old_price");
    var price_new = $(".price-new").text();
    if (carts.includes(id) == true) {
      alert("San pham nay da ton tai trong gio hang.");
      return false;
    }
    var product_detail = {
      id: id,
      name: name,
      price_old: price_old,
      price_new: price_new,
    };
    carts.push(product_detail);
    localStorage.setItem("carts", JSON.stringify(carts));
    $(".cart_quantity").html(
      localStorage.getItem("carts") == null ||
        localStorage.getItem("carts") == "NaN"
        ? "0"
        : JSON.parse(localStorage.getItem("carts")).length
    );
  });

  $(".cart_quantity").html(
    localStorage.getItem("carts") == null ||
      localStorage.getItem("carts") == "NaN"
      ? "0"
      : JSON.parse(localStorage.getItem("carts")).length
  );
});
