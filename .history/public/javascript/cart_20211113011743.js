$(document).ready(function () {
  let obj = [];

  $(".cart").click(function () {
    var ids = JSON.parse(localStorage.getItem("ids")) || [];

    var id = $(this).data("id");

    debugger;
    // if (ids.includes(id) == true) {
    //   alert("San pham nay da ton tai trong gio hang.");
    //   return false;
    // }

    ids.push(id);

    // $(".cart_quantity").html(
    //   localStorage.setItem("ids") == null
    //     ? "0"
    //     : localStorage.getItem("ids").split(",").length
    // );
    localStorage.setItem("ids", JSON.stringify(ids));
  });

  $(".cart_quantity").html(
    localStorage.getItem("ids") == null || localStorage.getItem("ids") == "NaN"
      ? "0"
      : localStorage.getItem("ids").split(",").length
  );

  //   click cart
  $(".clickCart").click(function () {});
});
