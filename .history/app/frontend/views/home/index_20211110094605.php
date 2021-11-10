<!-- banner slider-->
<div class="gird slider">
  <div class="gird">
    <div class="slide-warp">
      <div class="slide-banner">
        <div class="slide-banner__img"></div>
        <div class="slide-banner__text">
          <h2 class="slide-banner__title-1">Welcome to</h2>
          <h2 class="slide-banner__title-2">TP & SHOPPET</h2>
          <p class="slide-banner__description">We keep pets for pleasure.</p>
        </div>
      </div>
      <div class="next-warp__btn hidden-mobile">
        <div class="slide-banner__next slide-banner__next-left center">
          <i class="fas fa-chevron-left"></i>
        </div>
        <div class="slide-banner__next slide-banner__next-right center">
          <i class="fas fa-chevron-right"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- product  -->
<div class="products">
  <div class="product grid wide">
    <div class="product__title">
      <h4>Most popular</h4>
      <h2>Recent Products</h2>
    </div>

    <div class="row product__menu-pet">
      <div class="col l-2 m-2 c-12">
        <div class="product__icon-pet">
          <img
            class="product__img-pet"
            src="<?= load_images('icon','corgi.png') ?>"
            alt="icon"
          />
          <h3>Thú cưng</h3>
        </div>
      </div>
      <div class="col l-10 m-10 c-12">
        <div class="product__popular">
          <div class="row sm-gutter">

            <?php foreach($data[pet] as $product): ?>
            <div class="product-item col l-3 m-4 c-12">
              <div class="product-wrapper">
                <div class="product-img">
                  <a href="#">
                    <img
                      src="<?= load_images('pet', 'BichconFrise.jpg') ?>"
                      alt="hinh"
                    />
                  </a>
                  <div class="product-action">
                    <a href="#">
                      <i class="product-icon fas fa-plus"></i>
                    </a>
                    <a title="Add To Cart" href="#">
                      <i class="product-icon fas fa-shopping-cart"></i>
                    </a>
                  </div>
                </div>

                <div class="product-content">
                  <h4><a href="">Dog Calcium Food</a></h4>
                  <div class="product-evaluate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="product-price">
                    <span class="new">5.000.000 </span>
                    <span class="old">2.000.000</span>
                  </div>
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
            <div class="product-item col l-3 m-4 c-12">
              <div class="product-wrapper">
                <div class="product-img">
                  <a href="#">
                    <img
                      src="<?= load_images('pet', 'BichconFrise.jpg') ?>"
                      alt="hinh"
                    />
                  </a>
                  <div class="product-action">
                    <a href="#">
                      <i class="product-icon fas fa-plus"></i>
                    </a>
                    <a title="Add To Cart" href="#">
                      <i class="product-icon fas fa-shopping-cart"></i>
                    </a>
                  </div>
                </div>

                <div class="product-content">
                  <h4><a href="">Dog Calcium Food</a></h4>
                  <div class="product-evaluate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="product-price">
                    <span class="new">5.000.000 </span>
                    <span class="old">2.000.000</span>
                  </div>
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
            <div class="product-item col l-3 m-4 c-12">
              <div class="product-wrapper">
                <div class="product-img">
                  <a href="#">
                    <img
                      src="<?= load_images('pet', 'BichconFrise.jpg') ?>"
                      alt="hinh"
                    />
                  </a>
                  <div class="product-action">
                    <a href="#">
                      <i class="product-icon fas fa-plus"></i>
                    </a>
                    <a title="Add To Cart" href="#">
                      <i class="product-icon fas fa-shopping-cart"></i>
                    </a>
                  </div>
                </div>

                <div class="product-content">
                  <h4><a href="">Dog Calcium Food</a></h4>
                  <div class="product-evaluate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="product-price">
                    <span class="new">5.000.000 </span>
                    <span class="old">2.000.000</span>
                  </div>
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
        </div>
      </div>
      <a
        href="<?= base_url('pet/pet') ?>"
        class="product__select-pet hidden-mobile"
      >
        <h4>See more</h4>
        <i class="product__select-icon fas fa-angle-double-right"></i>
      </a>
    </div>

    <div class="row product__menu-noPet">
      <div class="col l-2 m-2 c-12">
        <div class="product__icon-noPet">
          <img
            class="product__img-pet"
            src="<?= load_images('icon','pet-food.png') ?>"
            alt="icon"
          />
          <h3>Mục khác</h3>
        </div>
      </div>
      <div class="col l-10 m-10">
        <div class="product__popular">
          <div class="row sm-gutter">
            <div class="product-item col l-3 m-4 c-12">
              <div class="product-wrapper">
                <div class="product-img">
                  <a href="#">
                    <img
                      src="<?= load_images('pet', 'BichconFrise.jpg') ?>"
                      alt="hinh"
                    />
                  </a>
                  <div class="product-action">
                    <a href="#">
                      <i class="product-icon fas fa-plus"></i>
                    </a>
                    <a title="Add To Cart" href="#">
                      <i class="product-icon fas fa-shopping-cart"></i>
                    </a>
                  </div>
                </div>

                <div class="product-content">
                  <h4><a href="">Dog Calcium Food</a></h4>
                  <div class="product-evaluate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="product-price">
                    <span class="new">5.000.000 </span>
                    <span class="old">2.000.000</span>
                  </div>
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
            <div class="product-item col l-3 m-4 c-12">
              <div class="product-wrapper">
                <div class="product-img">
                  <a href="#">
                    <img
                      src="<?= load_images('pet', 'BichconFrise.jpg') ?>"
                      alt="hinh"
                    />
                  </a>
                  <div class="product-action">
                    <a href="#">
                      <i class="product-icon fas fa-plus"></i>
                    </a>
                    <a title="Add To Cart" href="#">
                      <i class="product-icon fas fa-shopping-cart"></i>
                    </a>
                  </div>
                </div>

                <div class="product-content">
                  <h4><a href="">Dog Calcium Food</a></h4>
                  <div class="product-evaluate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="product-price">
                    <span class="new">5.000.000 </span>
                    <span class="old">2.000.000</span>
                  </div>
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
            <div class="product-item col l-3 m-4 c-12">
              <div class="product-wrapper">
                <div class="product-img">
                  <a href="#">
                    <img
                      src="<?= load_images('pet', 'BichconFrise.jpg') ?>"
                      alt="hinh"
                    />
                  </a>
                  <div class="product-action">
                    <a href="#">
                      <i class="product-icon fas fa-plus"></i>
                    </a>
                    <a title="Add To Cart" href="#">
                      <i class="product-icon fas fa-shopping-cart"></i>
                    </a>
                  </div>
                </div>

                <div class="product-content">
                  <h4><a href="">Dog Calcium Food</a></h4>
                  <div class="product-evaluate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="product-price">
                    <span class="new">5.000.000 </span>
                    <span class="old">2.000.000</span>
                  </div>
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
          </div>
        </div>
      </div>
      <a href="<?= base_url('product/product') ?>" class="product__select-noPet hidden-mobile">
        <h4>See more</h4>
        <i class="product__select-icon fas fa-angle-double-right"></i>
      </a>
    </div>
  </div>
</div>

<!-- review -->
<div class="review">
  <div class="grid">
    <div class="review__container">
      <div class="review__img"></div>
      <div class="review__text center">
        <h2>TOP REVIEW</h2>
        <p>
          Nuôi thú cưng là một trong những sở thích được yêu thích nhất hiện
          nay, đặc biệt là những quốc gia châu âu. Tuy nhiên không phổ biến ở
          Việt Nam, vì vậy hay lang tỏa tình yêu động vật đến moị người
        </p>
      </div>
      <div class="row review__users">
        <div class="col l-4 m-6 c-12">
          <div class="user-info">
            <div class="user-info__avatar">
              <img
                src="<?= load_images('pet', 'Chó Phốc sóc.jpg') ?>"
                alt="hinh"
              />
            </div>
            <div class="user-info__content">
              <h4 class="user-info__content-name">Tô thị thanh tâm</h4>
              <p class="user-info__content-comment">
                tôi rất yêu thích loài chó, tôi rất yêu thích loài chó tôi rất
                yêu thích loài chó
              </p>
              <div class="product-rate">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="user-info__content-city">Hà tỉnh</h5>
            </div>
          </div>
        </div>

        <div class="col l-4 m-6 c-12">
          <div class="user-info">
            <div class="user-info__avatar">
              <img
                src="<?= load_images('pet', 'Chó Phốc sóc.jpg') ?>"
                alt="hinh"
              />
            </div>
            <div class="user-info__content">
              <h4 class="user-info__content-name">Tô thị thanh tâm</h4>
              <p class="user-info__content-comment">
                tôi rất yêu thích loài chó, tôi rất yêu thích loài chó tôi rất
                yêu thích loài chó
              </p>
              <div class="product-rate">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="user-info__content-city">Hà tỉnh</h5>
            </div>
          </div>
        </div>

        <div class="col l-4 m-6 c-12">
          <div class="user-info">
            <div class="user-info__avatar">
              <img
                src="<?= load_images('pet', 'Chó Phốc sóc.jpg') ?>"
                alt="hinh"
              />
            </div>
            <div class="user-info__content">
              <h4 class="user-info__content-name">Tô thị thanh tâm</h4>
              <p class="user-info__content-comment">
                tôi rất yêu thích loài chó, tôi rất yêu thích loài chó tôi rất
                yêu thích loài chó
              </p>
              <div class="product-rate">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="user-info__content-city">Hà tỉnh</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="review__page hidden-table-mobile">
        <button type="button" class="page__btn"></button>
        <button type="button" class="page__btn page-active"></button>
        <button type="button" class="page__btn"></button>
      </div>
    </div>
  </div>
</div>
