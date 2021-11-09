<!-- banner detail -->
<div class="gird banner">
  <div class="banner__warp">
    <div class="banner__product-img"></div>
    <div class="slide-banner__text slide-banner__text2">
      <h2 class="slide-banner__title-1">Welcome to</h2>
      <h2 class="slide-banner__title-2">TP & SHOPPET</h2>
      <p class="slide-banner__description banner-detail">Product</p>
    </div>
  </div>
</div>

<div class="products__container">
  <div class="grid wide">
    <!--Header sort-->
    <div class="home-filter">
      <span class="home-filter__label">Sắp xếp theo</span>
      <button class="home-filter__btn">Liên quan</button>
      <button class="home-filter__btn btn--primary">Mới nhất</button>
      <button class="home-filter__btn">Bán chạy</button>

      <div class="select-input">
        <span class="select-input__label">Giá</span>
        <i class="fas fa-angle-down"></i>

        <!--List option-->
        <ul class="select-input__list">
          <li class="select-input-item">
            <a href="" class="select-input__link">Giá : Thấp đến cao</a>
          </li>
          <li class="select-input-item">
            <a href="" class="select-input__link">Giá : Cao đến thấp</a>
          </li>
        </ul>
      </div>
    </div>

    <!--Product-->
    <div class="grid wide">
      <div class="row">

      <?php foreach($data['pet'] as $data) ?>
        <div class="col l-3 m-6 c-12">
          <div class="category-products-item">
            <div
              class="category-products-item__img"
              style="
                background-image: url(https://dogily.vn/wp-content/uploads/2021/04/cho-phoc-sco-con-mau-trang-2-thang-tuoi-1-250x300.jpg);
              "
            ></div>
            <h4 class="category-products-item__name">
              Phốc Sóc Pomeranian Trắng – PST000086
            </h4>
            <div class="category-products-item__price">
              <span class="category-products-item__price-old">2.000.000đ</span>
              <span class="category-products-item__price-new">1.500.000đ</span>
            </div>
            <div class="category-products-item__action">
              <div class="product-evaluate">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <a href="#" class="category-products-item__detail">Chi tiết</a>
            </div>

            <div class="product-favourite">
              <i class="fas fa-check"></i>
              <span>HOT NEW</span>
            </div>
            <div class="product-sale-off">
              <span class="product-percent">10%</span>
              <span class="product-label">Giảm</span>
            </div>
          </div>
        </div>

      <?php endforeach; ?>
      </div>

      <div class="product__pagination row">
        <div class="col l-12 m-12 c-12">
          <ul class="product__pagination-list center">
            <li class="product__pagination-item">
              <a href="#" class="product__pagination-link">
                <i class="fas fa-angle-left"></i>
              </a>
            </li>
            <li class="product__pagination-item pagination-item-active">
              <a href="#" class="product__pagination-link">1</a>
            </li>
            <li class="product__pagination-item">
              <a href="#" class="product__pagination-link">2</a>
            </li>
            <li class="product__pagination-item">
              <a href="#" class="product__pagination-link">3</a>
            </li>
            <li class="product__pagination-item">
              <a href="#" class="product__pagination-link">4</a>
            </li>
            <li class="product__pagination-item">
              <a href="#" class="product__pagination-link">
                <i class="fas fa-angle-right"></i>
              </a>
            </li>
            <li class="product__pagination-item">
              <a href="#" class="product__pagination-link">
                <i class="fas fa-angle-double-right"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>