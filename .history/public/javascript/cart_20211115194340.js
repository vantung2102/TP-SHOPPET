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

  carts.forEach((cart, index) => {
    cart_html = `
    <div class="product-cart__list">
      <div class="row">
        <div class="col l-4">
          <div class="product-cart__list--description">
            <div class="product-cart__list-product">
              <img
                src="<?= load_img(${cart.img})  ?>"
                alt=""
                class="product-cart__list--img"
              />
              <div class="product-cart__list--name">
                Chó Phốc Sóc
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
  });
});
