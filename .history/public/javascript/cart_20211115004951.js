import { Constants } from "../javascript/constants.js";

$(document).ready(function () {
  let obj = new Constants();
  var carts = JSON.parse(localStorage.getItem("carts")) || [];
  var data = localStorage.getItem("carts");
  $.ajax({
    type: "POST",
    url: obj.baseUrl("cart/get_product_ajax"),
    data: data,
    success: function (response) {
      let data = JSON.parse(response);
      console.log(data["data"]);
    },
    error: function (error) {
      console.log(error);
    },
  });
  var cart_html = `
    <div class="product-cart__list">
      <div class="row">
        <div class="col l-4">
          <div class="product-cart__list--description">
            <div class="product-cart__list-product">
              <img
                src="./assets/img/Phocsoc.jpg"
                alt=""
                class="product-cart__list--img"
              />
              <div class="product-cart__list--name">
                Chó Phốc Sóc Pomeranian Black tan, vàng
              </div>
            </div>
          </div>
        </div>
        <!--Price-->
        <div class="col l-2">
          <div class="product-cart__list--price">
            <div class="product-cart__list--price-old">
              <sup>đ</sup>2.000.000
            </div>
            <div class="product-cart__list--price-new">
              <sup>đ</sup>1.500.000
            </div>
          </div>
        </div>
        <!--Amount-->
        <div class="col l-2">
          <div class="product-cart__list--count">
            <div class="product-cart__list--amount">
              <input
                class="btn-minus--amount"
                type="button"
                onclick="minus()"
                value="-"
              />
              <input id="amount" class="input--amount" type="text" value="1" />
              <input
                class="btn-plus--amount"
                type="button"
                onclick="plus()"
                value="+"
              />
            </div>
            <div class="product-cart__list--ready">Còn 6 sản phẩm</div>
          </div>
        </div>
        <div class="col l-2">
          <div class="product-cart__list--money"><sup>đ</sup>1.500.000</div>
        </div>
        <div class="col l-2">
          <div class="product-cart__list--delete">
            <i class="product-cart__list--garbage fas fa-trash"></i>
            <button class="product-cart__list--nofity">Xoá</button>
          </div>
        </div>
      </div>
    </div>
  `;

  $(".get-product-list").append(cart_html);

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

  $(".clickCart").click(function () {
    $.ajax({
      type: "POST",
      url: "http://localhost/tp&shoppet/?module=test&action=test",
      success: function (response) {
        console.log(response);
      },
    });
  });
});
