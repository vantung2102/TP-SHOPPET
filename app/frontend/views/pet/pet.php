<!-- banner detail -->
<div class="gird banner">
    <div class="banner__warp">
        <div class="banner__product-img"></div>
        <div class="slide-banner__text slide-banner__text2">
            <h2 class="slide-banner__title-1">Welcome to</h2>
            <h2 class="slide-banner__title-2">TP & SHOPPET</h2>
            <p class="slide-banner__description banner-detail">Pets</p>
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
                        <a href="<?= base_url('pet/processSortAsc') ?>" class="select-input__link">Giá : Thấp đến
                            cao</a>
                    </li>
                    <li class="select-input-item">
                        <a href="<?= base_url('pet/processSortDesc') ?>" class="select-input__link">Giá : Cao đến
                            thấp</a>
                    </li>
                </ul>

            </div>
        </div>

        <!--Product-->
        <div class="grid wide">
            <div class="row">

                <?php foreach ($data['pet'] as $key) : $id = $key['id']; ?>

                    <div class="col l-3 m-6 c-12">
                        <div class="category-products-item">
                            <div class="category-products-item__img" style="
                    background-image: url(<?= load_images('pet', $key['img']) ?>);
                    "></div>
                            <h4 class="category-products-item__name">
                                <?= $key['name'] ?>
                            </h4>
                            <div class="category-products-item__price">
                                <span class="category-products-item__price-old"><?= $key['old_price'] ?></span>
                                <span class="category-products-item__price-new"><?= $key['new_price'] ?></span>
                            </div>
                            <div class="category-products-item__action">
                                <div class="product-evaluate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <a href="<?= base_url("petDetail/petDetail&id_pet=$id") ?>" class="category-products-item__detail">Chi tiết</a>
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
                        <!-- pagination-item-active -->

                        <?php if (isset($_GET['page'])) : ?>
                            <?php for ($i = 1; $i <= $data['total_pages']; $i++) : ?>
                                <?php if ($_GET['page'] == $i) : ?>
                                    <li class="product__pagination-item pagination-item-active">
                                        <a href="<?= base_url("pet/pet&page=$i") ?>" class="product__pagination-link"><?= $i ?></a>
                                    </li>
                                <?php else : ?>
                                    <li class="product__pagination-item">
                                        <a href="<?= base_url("pet/pet&page=$i") ?>" class="product__pagination-link"><?= $i ?></a>
                                    </li>
                                <?php endif ?>
                            <?php endfor; ?>
                        <?php else : ?>
                            <li class="product__pagination-item pagination-item-active">
                                <a href="<?= base_url("pet/pet&page=1") ?>" class="product__pagination-link">1</a>
                            </li>
                            <?php for ($i = 2; $i <= $data['total_pages']; $i++) : ?>
                                <li class="product__pagination-item ">
                                    <a href="<?= base_url("pet/pet&page=$i") ?>" class="product__pagination-link"><?= $i ?></a>
                                </li>
                            <?php endfor; ?>
                        <?php endif ?>

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

<script>
    let $ = document.querySelector.bind(document);
    let $$ = document.querySelectorAll.bind(document);

    var paginates = document.querySelectorAll(".product__pagination-item");
    paginates.forEach((paginate) => {
        console.log($(".product__pagination-item.pagination-item-active"));

        paginate.onclick = function() {
            // console.log(paginate);
            $(".product__pagination-item.pagination-item-active").classList.remove(
                "pagination-item-active"
            );
            this.classList.add("pagination-item-active");
            $(".product__pagination-item:first-child").classList.remove(
                "pagination-item-active"
            );
            $(".product__pagination-item:last-child").classList.remove(
                "pagination-item-active"
            );
        };
    });
</script>