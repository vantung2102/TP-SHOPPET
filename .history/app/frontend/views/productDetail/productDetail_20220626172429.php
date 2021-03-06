<!-- banner detail -->
<div class="gird banner">
    <div class="banner__warp">
        <div class="banner__product-img"></div>
        <div class="slide-banner__text slide-banner__text2">
            <h2 class="slide-banner__title-1">Welcome to</h2>
            <h2 class="slide-banner__title-2">TP & SHOPPET</h2>
            <p class="slide-banner__description banner-detail">Product Detail</p>
        </div>
    </div>
</div>

<div class="detail-product" id="detail-product">
    <div class="grid wide">
        <div class="detail-product__link">
            <a class="detail-product__link-Shop" href="index.html">Trang chủ</a>
            <i class="fas fa-chevron-right"></i>
            <a class="detail-product__link-Products" href="Products.html">Chó cảnh</a>
            <i class="fas fa-chevron-right"></i>
            <a>Phốc sóc</a>
        </div>
        <div class="detail-product__information">
            <div class="row">
                <!--Image and share -->
                <?php foreach ($data['detail'] as $data) : ?>

                    <div class="col l-5 m-5 c-12">
                        <div class="product-detail__illustration">
                            <div class="product-detail__illustration-img">
                                <img src="<?= load_images('product', $data['img']) ?>" class="product-detail__illustration-img-main" id="img-main" data-img="<?= $data['img'] ?>" />
                                <div class="product-detail__illustration-img-show">
                                    <img src="<?= load_images('product', $data['img']) ?>" class="product-detail__illustration-img-item" onclick="changeImage('one')" id="one" />

                                    <img src="<?= load_images('product', $data['img']) ?>" class="product-detail__illustration-img-item" onclick="changeImage('two')" id="two" />

                                    <img src="<?= load_images('product', $data['img']) ?>" class="product-detail__illustration-img-item" onclick="changeImage('three')" id="three" />

                                    <img src="<?= load_images('product', $data['img']) ?>" class="product-detail__illustration-img-item" onclick="changeImage('four')" id="four" />
                                </div>
                            </div>
                        </div>

                        <div class="product-detail__illustration-share">
                            <div class="product-detail__illustration-share-link">
                                <div class="product-detail__illustration-share-link-text">
                                    Chia sẻ:
                                </div>

                                <div class="product-detail__illustration-share-link-internet">
                                    <a class="product-detail__illustration-share-link-item" type="button" role="button" title="Share on facebook" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fparse.com" target="_blank" rel="noopener">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                    <a class="product-detail__illustration-share-link-item" type="button" role="button" title="Share on messenger" href="fb-messenger://share/?link= https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fsharing%2Freference%2Fsend-dialog&app_id=123456789" target="_blank" rel="noopener">
                                        <i class="fab fa-facebook-messenger"></i>
                                    </a>
                                    <a class="product-detail__illustration-share-link-item" href="https://twitter.com/intent/tweet?original_referer=https%3A%2F%2Fshopee.vn%2Ffaviti.official%2F1589295236&text=" role="button" title="Share on instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product-detail__illustration-like">
                                <div class="product-detail__illustration-like-sperate">|</div>
                                <div onclick="like()" class="product-detail__illustration-like-heart" id="heart">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="product-detail__illustration-like-text">
                                    Đã thích (3,0k)
                                </div>
                            </div>
                        </div>
                    </div>

                    <!---Information abput products-->
                    <div class="col l-7 m-7 c-12">
                        <div class="product-detail__infor">
                            <div class="product-detail__infor-title">
                                <div class="product-detail__infor-title-name">
                                    <h1><?= $data['name'] ?></h1>
                                </div>
                                <div class="product-detail__infor-title-review">
                                    <div class="product-detail__infor-title-review-link">
                                        <div class="product-detail__infor-title-review-link-star">
                                            <a href="">5.0</a>
                                        </div>
                                        <div class="product-detail__infor-title-review-star">
                                            <i class="
                          product-detail__infor-title-review-sta-item
                          fas
                          fa-star
                        "></i>
                                            <i class="
                          product-detail__infor-title-review-sta-item
                          fas
                          fa-star
                        "></i>
                                            <i class="
                          product-detail__infor-title-review-sta-item
                          fas
                          fa-star
                        "></i>
                                            <i class="
                          product-detail__infor-title-review-sta-item
                          fas
                          fa-star
                        "></i>
                                            <i class="
                          product-detail__infor-title-review-sta-item
                          fas
                          fa-star
                        "></i>
                                        </div>
                                        <div class="product-detail__infor-title-review-sparate">
                                            |
                                        </div>
                                        <a class="product-detail__infor-title-review-link" href="#reviews">
                                            50 Reviews
                                        </a>
                                        <div class="product-detail__infor-title-review-sparate">
                                            |
                                        </div>
                                        <a>100 Sold</a>
                                    </div>
                                </div>
                                <div class="product-detail__infor-select">
                                    <div class="product-detail__infor-select-price">
                                        <div class="product-detail__infor-select-price-old">
                                            <?= $data['old_price'] ?>
                                        </div>
                                        <div class="product-detail__infor-select-price-new">
                                            <?= $data['new_price'] ?>
                                        </div>
                                    </div>
                                    <div class="product-detail__infor-select-transport">
                                        <p>Vận chuyển</p>
                                        <div class="product-detail__infor-select-transport-fee">
                                            <p>
                                                <i class="fas fa-truck-moving"></i>
                                                Miễn phí vận chuyển
                                            </p>
                                            <p class="color-opacity">
                                                Miễn phí vận chuyển cho hóa đơn trên 500.000đ
                                            </p>
                                        </div>
                                    </div>
                                    <div class="product-detail__infor-select-amount">
                                        <div class="product-detail__infor-select-amount-infor">
                                            Số lượng
                                            <div class="
                          product-detail__infor-select-amount-infor
                          btn-select-amount
                        ">
                                                <input class="btn-minus-product" type="button" onclick="minus()" value="-" />
                                                <input id="amount" class="input-amount" type="text" value="1" />
                                                <input class="btn-plus-product" type="button" onclick="plus()" value="+" />
                                            </div>
                                            <div class="product-detail__infor-select-amount-infor-ready">
                                                <?= $data['count'] ?> sản phẩm có sẵn
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-detail__infor-select-cart">
                                        <button class="bag-btn cart" data-id="1">
                                            <i class="fas fa-cart-plus"></i>
                                            Thêm vào giỏ hàng
                                        </button>
                                        <button class="buy-btn">
                                            <a class="btn-buy" href="#">Mua ngay</a>
                                        </button>
                                    </div>
                                </div>
                                <hr />

                                <!--Thong tin chi tiet san pham 2 -->
                                <div class="product-detail__infor-description-add">
                                    <div class="product-detail__infor-description-title">
                                        <h2>Thông tin chi tiết sản phẩm</h2>
                                    </div>
                                    <div class="product-detail__infor-description-container">
                                        <div class="product-detail__infor-description-container-item">
                                            <div class="
                          product-detail__infor-description-container-item-title
                        ">
                                                Màu
                                            </div>
                                            <div class="
                          product-detail__infor-description-container-item-contain
                        ">
                                                <?= $data['color'] ?>
                                            </div>
                                        </div>
                                        <div class="product-detail__infor-description-container-item">
                                            <div class="
                          product-detail__infor-description-container-item-title
                        ">
                                                Loại
                                            </div>
                                            <div class="
                          product-detail__infor-description-container-item-contain
                        ">
                                                <?= $data['type'] ?>
                                            </div>
                                        </div>
                                        <div class="product-detail__infor-description-container-item">
                                            <div class="
                          product-detail__infor-description-container-item-title
                        ">
                                                Đặc trưng
                                            </div>
                                            <div class="
                          product-detail__infor-description-container-item-contain
                        ">
                                                <?= $data['description'] ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>