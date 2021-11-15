import { Constants } from "../javascript/constants.js";

$(document).ready(function () {
  let obj = new Constants();
  var carts = JSON.parse(localStorage.getItem("carts")) || [];

  $(".cart").click(function () {
    var id = $(this).data("id");

    if (carts.includes(id) == true) {
      alert("San pham nay da ton tai trong gio hang.");
      return false;
    }
    carts.push(id);
    localStorage.setItem("carts", JSON.stringify(carts));
    $(".cart_quantity").html(
      localStorage.getItem("carts") == null ||
        localStorage.getItem("carts") == "NaN"
        ? "0"
        : localStorage.getItem("carts").split(",").length
    );
  });

  $(".cart_quantity").html(
    localStorage.getItem("carts") == null ||
      localStorage.getItem("carts") == "NaN"
      ? "0"
      : localStorage.getItem("carts").split(",").length
  );

  //   click cart
  // $(".clickCart").click(function () {
  //   getProducts(carts);
  // });

  // function getProducts(carts) {
  //   $.ajax({
  //     type: "POST",
  //     url: obj.baseUrl("cart/getProducts", carts),
  //     success: function (response) {
  //       let data = JSON.parse(response);
  //       console.log(data["data"]);
  //     },
  //     error: function (error) {
  //       console.log(error);
  //     },
  //   });
  // }

  // $(".clickCart").click(function () {
  //   $.ajax({
  //     type: "POST",
  //     url: "http://localhost/tp&shoppet/?module=cart&action=getProducts",
  //     success: function (response) {
  //       let data = [3, 5, 6];
  //       console.log(data);
  //     },
  //     error: function (error) {
  //       console.log(error);
  //     },
  //   });
  // });
});
