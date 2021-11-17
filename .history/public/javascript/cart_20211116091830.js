import { Constants } from "../javascript/constants.js";

$(document).ready(function () {
  let obj = new Constants();
  var carts = JSON.parse(localStorage.getItem("carts")) || [];

  $(".cart").click(function () {
    var id = $(this).data("id");
    var img = $(".data-img").data("img");
    var number = parseInt($(".input-amount").val());
    var name = $(".name").data("name");
    var price_old = $(".price-old").data("old_price");
    var price_new = $(".price-new").data("new_price");

    // if (carts.includes(id) == true) {
    //   alert("San pham nay da ton tai trong gio hang.");
    //   return false;
    // }

    var product_detail = {
      id: id,
      img: img,
      number: number,
      name: name,
      price_old: price_old,
      price_new: price_new,
    };
    carts.push(product_detail);
    localStorage.setItem("carts", JSON.stringify(carts));
    $(".cart_quantity").html(
      JSON.parse(localStorage.getItem("carts")).length == 0
        ? "0"
        : JSON.parse(localStorage.getItem("carts")).length
    );
  });

  $(".cart_quantity").html(
    JSON.parse(localStorage.getItem("carts")).length == 0
      ? "0"
      : JSON.parse(localStorage.getItem("carts")).length
  );

  var total = 0;
  carts.forEach((cart, index) => {
    total = total + cart.number * cart.price_new;
    let cart_html = `
    <div class="product-cart__list">
      <div class="row">
        <div class="col l-4">
          <div class="product-cart__list--description">
            <div class="product-cart__list-product">
              <img
                src="public/images/${cart.img}"
                alt=""
                class="product-cart__list--img"
              />
              <div class="product-cart__list--name" name="name" value="${
                cart.name
              }">
              ${cart.name}
              </div>
            </div>
          </div>
        </div>
        <!--Price-->
        <div class="col l-2">
          <div class="product-cart__list--price">
            <div class="product-cart__list--price-old">
              <sup>đ</sup>${cart.price_old}
            </div>
            <div class="product-cart__list--price-new">
              <sup>đ</sup>${cart.price_new}
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
              <input id="amount" class="input--amount" type="text" value="${
                cart.number
              }" />
              <input
                class="btn-plus--amount"
                type="button"
                onclick="plus()"
                value="+"
              />
            </div>
          </div>
        </div>
        <div class="col l-2">
          <div class="product-cart__list--money "><sup>đ</sup>${
            cart.number * cart.price_new
          }</div>
        </div>
        <div class="col l-2">
          <div class="product-cart__list--delete">
            <button class="product-cart__list--nofity">Xoá</button>
          </div>
        </div>
      </div>
    </div>
          `;
    $(".get-product-list").append(cart_html);
  });
  var total_html = `
  <div class="row">
    <div class="col l-12">
      <div class="product-cart__total--pay">
        <div class="product-cart__total--price">
          <div class="product-cart__total--text">Tổng thanh toán :</div>
          <div class="product-cart__total--money"><sup>đ</sup>${total}</div>
        </div>
        <a class="product-cart__buy clickCart">Mua hàng</a>
      </div>
    </div>
  </div>`;

  $(".product-cart__total").append(total_html);
  //   click get cart
  $(".clickCart").click(function () {
    console.log(carts.id);
    getProducts(carts);
  });

  function getProducts(carts) {
    console.log(obj.baseUrlFindIds("cart/get_product_ajax", carts));

    $.ajax({
      type: "post",
      url: obj.baseUrlFindIds("cart/get_product_ajax", carts.join(",")),
      data: carts,
      success: function (response) {
        let data = JSON.parse(response);
        console.log(data);
      },
      error: function (error) {
        console.log(error);
      },
    });
  }
});
