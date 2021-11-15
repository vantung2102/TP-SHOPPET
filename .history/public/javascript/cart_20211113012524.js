$(document).ready(function () {
  let obj = [];

  $(".cart").click(function () {

    var id = $(this).data("id");

    if (localStorage) {
        var cart ;
        if (!lo)
        
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
