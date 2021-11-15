$(document).ready(function () {
  let obj = [];

  $(".cart").click(function () {
    var carts = JSON.parse(localStorage.getItem("carts")) || [];

    var id = $(this).data("id");

    // if (ids.includes(id) == true) {
    //   alert("San pham nay da ton tai trong gio hang.");
    //   return false;
    // }

    carts = JSON.parse(localStorage.getItem("carts"));

    carts.push(id);
    // $(".cart_quantity").html(
    //   localStorage.setItem("ids") == null
    //     ? "0"
    //     : localStorage.getItem("ids").split(",").length
    // );
    localStorage.setItem("ids", JSON.stringify(carts));
  });

  $(".cart_quantity").html(
    localStorage.getItem("ids") == null || localStorage.getItem("ids") == "NaN"
      ? "0"
      : localStorage.getItem("ids").split(",").length
  );

  //   click cart
  $(".clickCart").click(function () {});
});
