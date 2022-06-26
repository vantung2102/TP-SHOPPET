import { Constants } from "../javascript/constants.js";

$(document).ready(function () {
  let obj = new Constants();
  var carts = JSON.parse(localStorage.getItem("carts")) || [];
  var ids = JSON.parse(localStorage.getItem("ids")) || [];

  $(".cart").click(function () {
    var id = $(this).data("id");
    var img = $(".data-img").data("img");
    var number = parseInt($(".input-amount").val());
    var name = $(".name").data("name");
    var price_old = $(".price-old").data("old_price");
    var price_new = $(".price-new").data("new_price");

    if (number <= 0) {
      alert("Số lượng sản phẩm phải lớn hơn 0");
      return false;
    }

    var addItem = carts.find((res) => res.id === id);
    console.log(addItem);

    if (addItem) {
      alert("San pham nay da ton tai trong gio hang.");
      return false;
    }

    var product_detail = {
      id: id,
      img: img,
      number: number,
      name: name,
      price_old: price_old,
      price_new: price_new,
    };
    ids.push(id);
    carts.push(product_detail);
    localStorage.setItem("carts", JSON.stringify(carts));
    $(".cart_quantity").html(
      JSON.parse(localStorage.getItem("carts")).length == 0
        ? "0"
        : JSON.parse(localStorage.getItem("carts")).length
    );
  });

  $(".cart_quantity").html(
    JSON.parse(localStorage.getItem("carts")).length == 0 ||
      JSON.parse(localStorage.getItem("carts")) == null
      ? "0"
      : JSON.parse(localStorage.getItem("carts")).length
  );

  var total = 0;
  carts.forEach((cart, index) => {
    total = total + cart.number * cart.price_new;
    let cart_html = `
    <div class="product-cart__list" id="${cart.id}">
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
                class="btn-minus--amount cart_item_decrease"
                type="button"
                value="-"
              />
              <input id="amount" class="input--amount" type="text" value="${
                cart.number
              }" />
              <input
                class="btn-plus--amount cart_item_increase"
                type="button"
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

  // total price
  var total_html = `<sup>đ</sup>${total}`;

  $(".product-cart__total--money").append(total_html);

  //   click get cart
  $(".clickCart").click(function () {
    getProducts();
  });

  function getProducts() {
    $.ajax({
      type: "post",
      data: { carts: JSON.stringify(carts) },
      url: "http://localhost/tp&shoppet/?module=cart&action=get_product_ajax",
      success: function (response) {
        if (response.status == "401") {
          alert("Bạn phải đăng nhập mới mua được !");
        } else {
          window.location.replace(obj.baseUrl("cart/cart"));
          alert("Bạn mua thành công !");
          JSON.parse(localStorage.removeItem("carts"));
        }
        console.log(response);
      },
      error: function (error) {
        console.log(error);
      },
    });
  }
});

$(document).on("click", ".cart_item_increase", function (e) {
  event.preventDefault();
  var idProduct = $(this).closest(".product-quantity");
  // .siblings(".product-name")
  // .attr("id");
  console.log(idProduct);
});
