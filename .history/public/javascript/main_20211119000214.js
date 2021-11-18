var active_page = document.querySelector(".accordion-menu li.active-page");
var activeLis = document.querySelectorAll(".accordion-menu li a");

activeLis.forEach((activeLi) => {
  activeLi.onclick = function () {
    active_page.classList.remove("active-page");
    this.classList.add("active-page");
    console.log(00);
  };
});

// amount product
function plus() {
  var quanty = document.getElementById("amount").value;
  document.getElementById("amount").value = parseInt(quanty) + 1;
}

function minus() {
  var quanty = document.getElementById("amount").value;
  if (parseInt(quanty) > 1) {
    document.getElementById("amount").value = parseInt(quanty) - 1;
  }
}

/*Amount product on Mobile*/
function plus_mobile() {
  var quanty = document.getElementById("amount_mobile").value;
  document.getElementById("amount_mobile").value = parseInt(quanty) + 1;
}

function minus_mobile() {
  var quanty = document.getElementById("amount_mobile").value;
  if (parseInt(quanty) > 1) {
    document.getElementById("amount_mobile").value = parseInt(quanty) - 1;
  }
}

// Select image
function changeImage(id) {
  let imagePath = document.getElementById(id).getAttribute("src");
  console.log(imagePath);
  document.getElementById("img-main").setAttribute("src", imagePath);
}

// Like and dislike
var heartvar = document.getElementById("heart");
function like() {
  if (heartvar.style.color == "red") {
    heartvar.style.color = "grey";
  } else {
    heartvar.style.color = "red";
  }
}

// //pagination-item-active
// let k = document.querySelector.bind(document);
// let kk = document.querySelectorAll.bind(document);

// var paginates = document.querySelectorAll(".product__pagination-item");
// paginates.forEach((paginate) => {
//   console.log(paginate);

//   paginate.onclick = function () {
//     console.log(paginate);
//     k(".product__pagination-item.pagination-item-active").classList.remove(
//       "pagination-item-active"
//     );
//     this.classList.add("pagination-item-active");
//     k(".product__pagination-item:first-child").classList.remove(
//       "pagination-item-active"
//     );
//     k(".product__pagination-item:last-child").classList.remove(
//       "pagination-item-active"
//     );
//   };
// });

var totalMobile = 0;
carts.forEach((cart, index) => {
  totalMobile = totalMobile + cart.number * cart.price_new;
  let cart_mobile = `
    <div class="product-cart-mobile-item">
      <div class="row">
        <div class="product-cart-mobile_description m-11 c-11">
          <div class="product-cart-mobile__image">
          <img
          src="public/images/${cart.img}"
          alt=""
          class="product-cart-mobile__img"
        />
          </div>
          <div class="product-cart-mobile__specific">
            <div class="product-cart-mobile__name" name="name" value="${cart.name}">    
            ${cart.name}
            </div>
            <div class="product-cart-mobile__price">
              <div class="product-cart-mobile__price--old">
                <sup>đ</sup>${cart.price_old}
              </div>
              <div class="product-cart-mobile__price--new">
                <sup>đ</sup>${cart.price_new}
              </div>
            </div>
              <div class="product-cart-mobile__ready">Còn 6 sản phẩm</div>
                <div class="product-cart-mobile__amount">
                <input class="btn-minus--amount__mobile" type="button" onclick="minus_mobile()" value="-" />
                <input id="amount_mobile" class="input--amount__mobile" type="text" value="${cart.number}"  />
                <input class="btn-plus--amount__mobile" type="button" onclick="plus_mobile()" value="+" value="${cart.number}" />
              </div>
            </div>
         </div>
        <div class="product-cart-mobile__delete m-1 c-1">
          <i class="product-cart__mobile--garbage fas fa-trash"></i>
        </div>
    </div>
    </div> 
          `;
  $(".get-product-list-mobile").append(cart_mobile);
});

// total price on Mobile and Tablet
var totalOnMobile = `: ${totalMobile}đ`;

$(".product-cart__mobile-money").append(totalOnMobile);
