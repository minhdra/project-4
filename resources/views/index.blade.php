@extends('_client_layout')
@section('content')

<!-- Slider -->
<section class="space-bottom-3">
  <div class="bg-gray-200 space-2 space-lg-0 bg-img-hero" style="background-image: url(/assets/img/1920x588/img1.jpg);">
    <div class="container">
      <div class="js-slick-carousel u-slick" data-pagi-classes="text-center u-slick__pagination position-absolute right-0 left-0 mb-n8 mb-lg-4 bottom-0">
        <div class="js-slide">
          <div class="hero row min-height-588 align-items-center">
            <div class="col-lg-7 col-wd-6 mb-4 mb-lg-0">
              <div class="media-body mr-wd-4 align-self-center mb-4 mb-md-0">
                <p class="hero__pretitle text-uppercase font-weight-bold text-gray-400 mb-2" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">Bộ sưu tập của Bookworm</p>
                <h2 class="hero__title font-size-14 mb-4" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300">
                  <span class="hero__title-line-1 font-weight-regular d-block">Sách nổi bật của</span>
                  <span class="hero__title-line-2 font-weight-bold d-block">Tháng Hai</span>
                </h2>
                <a href="../shop/v1.html" class="btn btn-dark btn-wide rounded-0 hero__btn" data-scs-animation-in="fadeInLeft" data-scs-animation-delay="400">Xem thêm</a>
              </div>
            </div>
            <div class="col-lg-5 col-wd-6" data-scs-animation-in="fadeInRight" data-scs-animation-delay="500">
              <img class="img-fluid" src="/assets/img/800x420/img1.png" alt="image-description">
            </div>
          </div>
        </div>
        <div class="js-slide">
          <div class="hero row min-height-588 align-items-center">
            <div class="col-lg-7 col-wd-6 mb-4 mb-lg-0">
              <div class="media-body mr-wd-4 align-self-center mb-4 mb-md-0">
                <p class="hero__pretitle text-uppercase font-weight-bold text-gray-400 mb-2" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">The Bookworm Editors'</p>
                <h2 class="hero__title font-size-14 mb-4" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300">
                  <span class="hero__title-line-1 font-weight-regular d-block">Featured Books of the</span>
                  <span class="hero__title-line-2 font-weight-bold d-block">February</span>
                </h2>
                <a href="../shop/v1.html" class="btn btn-dark btn-wide rounded-0 hero__btn" data-scs-animation-in="fadeInLeft" data-scs-animation-delay="400">See More</a>
              </div>
            </div>
            <div class="col-lg-5 col-wd-6" data-scs-animation-in="fadeInRight" data-scs-animation-delay="500">
              <img class="img-fluid" src="/assets/img/800x420/img1.png" alt="image-description">
            </div>
          </div>
        </div>
        <div class="js-slide">
          <div class="hero row min-height-588 align-items-center">
            <div class="col-lg-7 col-wd-6 mb-4 mb-lg-0">
              <div class="media-body mr-wd-4 align-self-center mb-4 mb-md-0">
                <p class="hero__pretitle text-uppercase font-weight-bold text-gray-400 mb-2" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">The Bookworm Editors'</p>
                <h2 class="hero__title font-size-14 mb-4" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300">
                  <span class="hero__title-line-1 font-weight-regular d-block">Featured Books of the</span>
                  <span class="hero__title-line-2 font-weight-bold d-block">February</span>
                </h2>
                <a href="../shop/v1.html" class="btn btn-dark btn-wide rounded-0 hero__btn" data-scs-animation-in="fadeInLeft" data-scs-animation-delay="400">See More</a>
              </div>
            </div>
            <div class="col-lg-5 col-wd-6" data-scs-animation-in="fadeInRight" data-scs-animation-delay="500">
              <img class="img-fluid" src="/assets/img/800x420/img1.png" alt="image-description">
            </div>
          </div>
        </div>
        <div class="js-slide">
          <div class="hero row min-height-588 align-items-center">
            <div class="col-lg-7 col-wd-6 mb-4 mb-lg-0">
              <div class="media-body mr-wd-4 align-self-center mb-4 mb-md-0">
                <p class="hero__pretitle text-uppercase font-weight-bold text-gray-400 mb-2" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">The Bookworm Editors'</p>
                <h2 class="hero__title font-size-14 mb-4" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300">
                  <span class="hero__title-line-1 font-weight-regular d-block">Featured Books of the</span>
                  <span class="hero__title-line-2 font-weight-bold d-block">February</span>
                </h2>
                <a href="../shop/v1.html" class="btn btn-dark btn-wide rounded-0 hero__btn" data-scs-animation-in="fadeInLeft" data-scs-animation-delay="400">See More</a>
              </div>
            </div>
            <div class="col-lg-5 col-wd-6" data-scs-animation-in="fadeInRight" data-scs-animation-delay="500">
              <img class="img-fluid" src="/assets/img/800x420/img1.png" alt="image-description">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Test controller -->
<!-- Featured categories -->
<section class="space-bottom-3">
  <div class="container">
    <header class="mb-5 d-md-flex justify-content-between align-items-center">
      <h2 class="font-size-7 mb-3 mb-md-0">Loại sách nổi bật</h2>
      <a href="../shop/v1.html" class="h-primary d-block">Xem tất cả<i class="glyph-icon flaticon-next"></i></a>
    </header>
    <ul class="list-unstyled my-0 row row-cols-md-2 row-cols-lg-3 row-cols-xl-4 row-cols-wd-5">
      <li class="product-category col mb-4 mb-xl-0">
        <div class="product-category__inner bg-indigo-light px-6 py-5">
          <div class="product-category__icon font-size-12 text-primary-indigo"><i class="glyph-icon flaticon-gallery"></i></div>
          <div class="product-category__body">
            <h3 class="text-truncate font-size-3">Nghệ thuật &amp; Nhiếp ảnh</h3>
            <a href="../shop/v1.html" class="stretched-link text-dark">Đến ngay</a>
          </div>
        </div>
      </li>
      <li class="product-category col mb-4 mb-xl-0">
        <div class="product-category__inner bg-tangerine-light px-6 py-5">
          <div class="product-category__icon font-size-12 text-tangerine"><i class="glyph-icon flaticon-cook"></i></div>
          <div class="product-category__body">
            <h3 class="text-truncate font-size-3">Đồ ăn &amp; Đồ uống</h3>
            <a href="../shop/v1.html" class="stretched-link text-dark">Đến ngay</a>
          </div>
        </div>
      </li>
      <li class="product-category col mb-4 mb-xl-0">
        <div class="product-category__inner bg-chili-light px-6 py-5">
          <div class="product-category__icon font-size-12 text-chili"><i class="glyph-icon flaticon-like"></i></div>
          <div class="product-category__body">
            <h3 class="text-truncate font-size-3">Lãng mạn</h3>
            <a href="../shop/v1.html" class="stretched-link text-dark">Đến ngay</a>
          </div>
        </div>
      </li>
      <li class="product-category col mb-4 mb-xl-0">
        <div class="product-category__inner bg-carolina-light px-6 py-5">
          <div class="product-category__icon font-size-12 text-carolina"><i class="glyph-icon flaticon-doctor"></i></div>
          <div class="product-category__body">
            <h3 class="text-truncate font-size-3">Sức khỏe</h3>
            <a href="../shop/v1.html" class="stretched-link text-dark">Đến ngay</a>
          </div>
        </div>
      </li>
      <li class="product-category col mb-4 mb-xl-0 d-xl-none d-wd-block">
        <div class="product-category__inner bg-punch-light px-6 py-5">
          <div class="product-category__icon font-size-12 text-punch"><i class="glyph-icon flaticon-resume"></i></div>
          <div class="product-category__body">
            <h3 class="text-truncate font-size-3">Tiểu sử</h3>
            <a href="../shop/v1.html" class="stretched-link text-dark">Đến ngay</a>
          </div>
        </div>
      </li>
    </ul>
  </div>
</section>
<!-- Bestselling books -->
<section class="space-bottom-3">
  <div class="container">
    <header class="mb-5 d-md-flex justify-content-between align-items-center">
      <h2 class="font-size-7 mb-3 mb-md-0">Sách bán chạy nhất</h2>
      <a href="../shop/v1.html" class="h-primary d-block">Xem tất cả <i class="glyph-icon flaticon-next"></i></a>
    </header>
    <div class="js-slick-carousel products no-gutters border-top border-left border-right" data-pagi-classes="d-xl-none text-center position-absolute right-0 left-0 u-slick__pagination mt-4 mb-0" data-arrows-classes="d-none d-xl-block u-slick__arrow u-slick__arrow-centered--y" data-arrow-left-classes="fas fa-chevron-left u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n10" data-arrow-right-classes="fas fa-chevron-right u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n10" data-slides-show="5" data-responsive='[{
                     "breakpoint": 1500,
                     "settings": {
                       "slidesToShow": 4
                     }
                  },{
                     "breakpoint": 1199,
                     "settings": {
                       "slidesToShow": 3
                     }
                  },{
                     "breakpoint": 992,
                     "settings": {
                       "slidesToShow": 2
                     }
                  }, {
                     "breakpoint": 768,
                     "settings": {
                       "slidesToShow": 1
                     }
                  }, {
                     "breakpoint": 554,
                     "settings": {
                       "slidesToShow": 1
                     }
                  }]'>
      <div class="product">
        <div class="product__inner overflow-hidden p-3 p-md-4d875">
          <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
            <div class="woocommerce-loop-product__thumbnail">
              <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/150x226/img1.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
            </div>
            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
              <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
              <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Think Like a Monk: Train Your Mind for Peace and Purpose Everyday</a></h2>
              <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
              <div class="price d-flex align-items-center font-weight-medium font-size-3">
                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
              </div>
            </div>
            <div class="product__hover d-flex align-items-center">
              <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                <span class="product__add-to-cart">ADD TO CART</span>
                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
              </a>
              <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                <i class="flaticon-switch"></i>
              </a>
              <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                <i class="flaticon-heart"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="product__inner overflow-hidden p-3 p-md-4d875">
          <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
            <div class="woocommerce-loop-product__thumbnail">
              <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/150x226/img2.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
            </div>
            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
              <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Kindle Edition</a></div>
              <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">The Last Sister (Columbia River Book 1)</a></h2>
              <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Kelly Harms</a></div>
              <div class="price d-flex align-items-center font-weight-medium font-size-3">
                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
              </div>
            </div>
            <div class="product__hover d-flex align-items-center">
              <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                <span class="product__add-to-cart">ADD TO CART</span>
                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
              </a>
              <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                <i class="flaticon-switch"></i>
              </a>
              <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                <i class="flaticon-heart"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="product__inner overflow-hidden p-3 p-md-4d875">
          <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
            <div class="woocommerce-loop-product__thumbnail">
              <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/150x226/img3.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
            </div>
            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
              <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
              <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">All You Can Ever Know: A Memoir</a></h2>
              <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
              <div class="price d-flex align-items-center font-weight-medium font-size-3">
                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
              </div>
            </div>
            <div class="product__hover d-flex align-items-center">
              <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                <span class="product__add-to-cart">ADD TO CART</span>
                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
              </a>
              <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                <i class="flaticon-switch"></i>
              </a>
              <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                <i class="flaticon-heart"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="product__inner overflow-hidden p-3 p-md-4d875">
          <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
            <div class="woocommerce-loop-product__thumbnail">
              <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/150x226/img4.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
            </div>
            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
              <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Kindle Edition</a></div>
              <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">The Overdue Life of Amy Byler</a></h2>
              <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Kelly Harms</a></div>
              <div class="price d-flex align-items-center font-weight-medium font-size-3">
                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
              </div>
            </div>
            <div class="product__hover d-flex align-items-center">
              <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                <span class="product__add-to-cart">ADD TO CART</span>
                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
              </a>
              <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                <i class="flaticon-switch"></i>
              </a>
              <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                <i class="flaticon-heart"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="product__inner overflow-hidden p-3 p-md-4d875">
          <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
            <div class="woocommerce-loop-product__thumbnail">
              <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/150x226/img5.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
            </div>
            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
              <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Kindle Edition</a></div>
              <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">The Last Sister (Columbia River Book 1)</a></h2>
              <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Kelly Harms</a></div>
              <div class="price d-flex align-items-center font-weight-medium font-size-3">
                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
              </div>
            </div>
            <div class="product__hover d-flex align-items-center">
              <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                <span class="product__add-to-cart">ADD TO CART</span>
                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
              </a>
              <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                <i class="flaticon-switch"></i>
              </a>
              <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                <i class="flaticon-heart"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="product__inner overflow-hidden p-3 p-md-4d875">
          <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
            <div class="woocommerce-loop-product__thumbnail">
              <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/150x226/img6.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
            </div>
            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
              <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
              <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">All You Can Ever Know: A Memoir</a></h2>
              <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
              <div class="price d-flex align-items-center font-weight-medium font-size-3">
                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
              </div>
            </div>
            <div class="product__hover d-flex align-items-center">
              <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                <span class="product__add-to-cart">ADD TO CART</span>
                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
              </a>
              <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                <i class="flaticon-switch"></i>
              </a>
              <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                <i class="flaticon-heart"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="product__inner overflow-hidden p-3 p-md-4d875">
          <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
            <div class="woocommerce-loop-product__thumbnail">
              <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/150x226/img7.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
            </div>
            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
              <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Kindle Edition</a></div>
              <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">The Overdue Life of Amy Byler</a></h2>
              <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Kelly Harms</a></div>
              <div class="price d-flex align-items-center font-weight-medium font-size-3">
                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
              </div>
            </div>
            <div class="product__hover d-flex align-items-center">
              <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                <span class="product__add-to-cart">ADD TO CART</span>
                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
              </a>
              <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                <i class="flaticon-switch"></i>
              </a>
              <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                <i class="flaticon-heart"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Featured books -->
<section class="space-bottom-3" ng-controller='booksController'>
  <header class="mb-4 container">
    <h2 class="font-size-7 text-center">Featured Books</h2>
  </header>
  <div class="container">
    <ul class="nav justify-content-md-center nav-gray-700 mb-5 flex-nowrap flex-md-wrap overflow-auto overflow-md-visible" id="featuredBooks" role="tablist">
      <li class="nav-item mx-5 mb-1 flex-shrink-0 flex-md-shrink-1">
        <a class="nav-link px-0 active" id="featured-tab" data-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="true">Featured</a>
      </li>
      <li class="nav-item mx-5 mb-1 flex-shrink-0 flex-md-shrink-1">
        <a class="nav-link px-0" id="onsale-tab" data-toggle="tab" href="#onsale" role="tab" aria-controls="onsale" aria-selected="false">On Sale</a>
      </li>
      <li class="nav-item mx-5 mb-1 flex-shrink-0 flex-md-shrink-1">
        <a class="nav-link px-0" id="mostviewed-tab" data-toggle="tab" href="#mostviewed" role="tab" aria-controls="mostviewed" aria-selected="false">Most Viewed</a>
      </li>
    </ul>
    <div class="tab-content" id="featuredBooksContent">
      <div class="tab-pane fade show active" id="featured" role="tabpanel" aria-labelledby="featured-tab">
        <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-wd-6 border-top border-left my-0">
          <li class="product col" ng-repeat="row in data.books">
            <div class="product__inner overflow-hidden p-3 p-md-4d875">
              <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                <div class="woocommerce-loop-product__thumbnail">
                  <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/books/@{{row.image}}" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                </div>
                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                  <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">@{{row.type}}</a></div>
                  <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">@{{row.book_name}}</a></h2>
                  <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">@{{row.authors.author_name}}</a></div>
                  <div class="price d-flex align-items-center font-weight-medium font-size-3">
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>@{{row.price.price | number}}</span>đ
                  </div>
                </div>
                <div class="product__hover d-flex align-items-center">
                  <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                    <span class="product__add-to-cart">ADD TO CART</span>
                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                  </a>
                  <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-switch"></i>
                  </a>
                  <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-heart"></i>
                  </a>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="tab-pane fade" id="onsale" role="tabpanel" aria-labelledby="onsale-tab">
        <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-wd-6 border-top border-left my-0">
          <li class="product col">
            <div class="product__inner overflow-hidden p-3 p-md-4d875">
              <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                <div class="woocommerce-loop-product__thumbnail">
                  <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img1.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                </div>
                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                  <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                  <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Think Like a Monk: Train Your Mind for Peace and Purpose Everyday</a></h2>
                  <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                  <div class="price d-flex align-items-center font-weight-medium font-size-3">
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                  </div>
                </div>
                <div class="product__hover d-flex align-items-center">
                  <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                    <span class="product__add-to-cart">ADD TO CART</span>
                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                  </a>
                  <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-switch"></i>
                  </a>
                  <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-heart"></i>
                  </a>
                </div>
              </div>
            </div>
          </li>
          <li class="product col">
            <div class="product__inner overflow-hidden p-3 p-md-4d875">
              <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                <div class="woocommerce-loop-product__thumbnail">
                  <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img2.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                </div>
                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                  <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                  <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">The Overdue Life of Amy Byler</a></h2>
                  <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                  <div class="price d-flex align-items-center font-weight-medium font-size-3">
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                  </div>
                </div>
                <div class="product__hover d-flex align-items-center">
                  <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                    <span class="product__add-to-cart">ADD TO CART</span>
                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                  </a>
                  <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-switch"></i>
                  </a>
                  <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-heart"></i>
                  </a>
                </div>
              </div>
            </div>
          </li>
          <li class="product col">
            <div class="product__inner overflow-hidden p-3 p-md-4d875">
              <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                <div class="woocommerce-loop-product__thumbnail">
                  <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img3.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                </div>
                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                  <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                  <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">All You Can Ever Know: A Memoir</a></h2>
                  <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                  <div class="price d-flex align-items-center font-weight-medium font-size-3">
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                  </div>
                </div>
                <div class="product__hover d-flex align-items-center">
                  <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                    <span class="product__add-to-cart">ADD TO CART</span>
                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                  </a>
                  <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-switch"></i>
                  </a>
                  <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-heart"></i>
                  </a>
                </div>
              </div>
            </div>
          </li>
          <li class="product col">
            <div class="product__inner overflow-hidden p-3 p-md-4d875">
              <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                <div class="woocommerce-loop-product__thumbnail">
                  <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img4.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                </div>
                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                  <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                  <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Broken Faith: Inside the Word of Faith...</a></h2>
                  <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                  <div class="price d-flex align-items-center font-weight-medium font-size-3">
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                  </div>
                </div>
                <div class="product__hover d-flex align-items-center">
                  <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                    <span class="product__add-to-cart">ADD TO CART</span>
                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                  </a>
                  <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-switch"></i>
                  </a>
                  <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-heart"></i>
                  </a>
                </div>
              </div>
            </div>
          </li>
          <li class="product col">
            <div class="product__inner overflow-hidden p-3 p-md-4d875">
              <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                <div class="woocommerce-loop-product__thumbnail">
                  <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img5.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                </div>
                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                  <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                  <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Think Like a Monk: Train Your Mind for Peace and Purpose Everyday</a></h2>
                  <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                  <div class="price d-flex align-items-center font-weight-medium font-size-3">
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                  </div>
                </div>
                <div class="product__hover d-flex align-items-center">
                  <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                    <span class="product__add-to-cart">ADD TO CART</span>
                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                  </a>
                  <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-switch"></i>
                  </a>
                  <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-heart"></i>
                  </a>
                </div>
              </div>
            </div>
          </li>
          <li class="product col">
            <div class="product__inner overflow-hidden p-3 p-md-4d875">
              <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                <div class="woocommerce-loop-product__thumbnail">
                  <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img6.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                </div>
                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                  <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                  <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">The Overdue Life of Amy Byler</a></h2>
                  <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                  <div class="price d-flex align-items-center font-weight-medium font-size-3">
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                  </div>
                </div>
                <div class="product__hover d-flex align-items-center">
                  <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                    <span class="product__add-to-cart">ADD TO CART</span>
                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                  </a>
                  <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-switch"></i>
                  </a>
                  <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-heart"></i>
                  </a>
                </div>
              </div>
            </div>
          </li>
          <li class="product col">
            <div class="product__inner overflow-hidden p-3 p-md-4d875">
              <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                <div class="woocommerce-loop-product__thumbnail">
                  <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img7.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                </div>
                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                  <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                  <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">All You Can Ever Know: A Memoir</a></h2>
                  <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                  <div class="price d-flex align-items-center font-weight-medium font-size-3">
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                  </div>
                </div>
                <div class="product__hover d-flex align-items-center">
                  <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                    <span class="product__add-to-cart">ADD TO CART</span>
                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                  </a>
                  <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-switch"></i>
                  </a>
                  <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-heart"></i>
                  </a>
                </div>
              </div>
            </div>
          </li>
          <li class="product col">
            <div class="product__inner overflow-hidden p-3 p-md-4d875">
              <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                <div class="woocommerce-loop-product__thumbnail">
                  <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img8.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                </div>
                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                  <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                  <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Broken Faith: Inside the Word of Faith...</a></h2>
                  <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                  <div class="price d-flex align-items-center font-weight-medium font-size-3">
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                  </div>
                </div>
                <div class="product__hover d-flex align-items-center">
                  <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                    <span class="product__add-to-cart">ADD TO CART</span>
                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                  </a>
                  <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-switch"></i>
                  </a>
                  <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-heart"></i>
                  </a>
                </div>
              </div>
            </div>
          </li>
          <li class="product col d-xl-none d-wd-block">
            <div class="product__inner overflow-hidden p-3 p-md-4d875">
              <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                <div class="woocommerce-loop-product__thumbnail">
                  <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img9.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                </div>
                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                  <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                  <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Think Like a Monk: Train Your Mind for Peace and Purpose Everyday</a></h2>
                  <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                  <div class="price d-flex align-items-center font-weight-medium font-size-3">
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                  </div>
                </div>
                <div class="product__hover d-flex align-items-center">
                  <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                    <span class="product__add-to-cart">ADD TO CART</span>
                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                  </a>
                  <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-switch"></i>
                  </a>
                  <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-heart"></i>
                  </a>
                </div>
              </div>
            </div>
          </li>
          <li class="product col d-xl-none d-wd-block">
            <div class="product__inner overflow-hidden p-3 p-md-4d875">
              <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                <div class="woocommerce-loop-product__thumbnail">
                  <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img10.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                </div>
                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                  <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                  <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">The Overdue Life of Amy Byler</a></h2>
                  <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                  <div class="price d-flex align-items-center font-weight-medium font-size-3">
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                  </div>
                </div>
                <div class="product__hover d-flex align-items-center">
                  <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                    <span class="product__add-to-cart">ADD TO CART</span>
                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                  </a>
                  <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-switch"></i>
                  </a>
                  <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-heart"></i>
                  </a>
                </div>
              </div>
            </div>
          </li>
          <li class="product col d-xl-none d-wd-block">
            <div class="product__inner overflow-hidden p-3 p-md-4d875">
              <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                <div class="woocommerce-loop-product__thumbnail">
                  <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img1.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                </div>
                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                  <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                  <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">All You Can Ever Know: A Memoir</a></h2>
                  <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                  <div class="price d-flex align-items-center font-weight-medium font-size-3">
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                  </div>
                </div>
                <div class="product__hover d-flex align-items-center">
                  <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                    <span class="product__add-to-cart">ADD TO CART</span>
                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                  </a>
                  <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-switch"></i>
                  </a>
                  <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-heart"></i>
                  </a>
                </div>
              </div>
            </div>
          </li>
          <li class="product col d-xl-none d-wd-block">
            <div class="product__inner overflow-hidden p-3 p-md-4d875">
              <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                <div class="woocommerce-loop-product__thumbnail">
                  <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img3.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                </div>
                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                  <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                  <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Broken Faith: Inside the Word of Faith...</a></h2>
                  <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                  <div class="price d-flex align-items-center font-weight-medium font-size-3">
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                  </div>
                </div>
                <div class="product__hover d-flex align-items-center">
                  <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                    <span class="product__add-to-cart">ADD TO CART</span>
                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                  </a>
                  <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-switch"></i>
                  </a>
                  <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-heart"></i>
                  </a>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="tab-pane fade" id="mostviewed" role="tabpanel" aria-labelledby="mostviewed-tab">
        <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-wd-6 border-top border-left my-0">
          <li class="product col">
            <div class="product__inner overflow-hidden p-3 p-md-4d875">
              <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                <div class="woocommerce-loop-product__thumbnail">
                  <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img1.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                </div>
                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                  <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                  <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Think Like a Monk: Train Your Mind for Peace and Purpose Everyday</a></h2>
                  <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                  <div class="price d-flex align-items-center font-weight-medium font-size-3">
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                  </div>
                </div>
                <div class="product__hover d-flex align-items-center">
                  <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                    <span class="product__add-to-cart">ADD TO CART</span>
                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                  </a>
                  <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-switch"></i>
                  </a>
                  <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-heart"></i>
                  </a>
                </div>
              </div>
            </div>
          </li>
          <li class="product col">
            <div class="product__inner overflow-hidden p-3 p-md-4d875">
              <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                <div class="woocommerce-loop-product__thumbnail">
                  <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img2.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                </div>
                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                  <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                  <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">The Overdue Life of Amy Byler</a></h2>
                  <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                  <div class="price d-flex align-items-center font-weight-medium font-size-3">
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                  </div>
                </div>
                <div class="product__hover d-flex align-items-center">
                  <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                    <span class="product__add-to-cart">ADD TO CART</span>
                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                  </a>
                  <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-switch"></i>
                  </a>
                  <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-heart"></i>
                  </a>
                </div>
              </div>
            </div>
          </li>
          <li class="product col">
            <div class="product__inner overflow-hidden p-3 p-md-4d875">
              <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                <div class="woocommerce-loop-product__thumbnail">
                  <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img3.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                </div>
                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                  <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                  <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">All You Can Ever Know: A Memoir</a></h2>
                  <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                  <div class="price d-flex align-items-center font-weight-medium font-size-3">
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                  </div>
                </div>
                <div class="product__hover d-flex align-items-center">
                  <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                    <span class="product__add-to-cart">ADD TO CART</span>
                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                  </a>
                  <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-switch"></i>
                  </a>
                  <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-heart"></i>
                  </a>
                </div>
              </div>
            </div>
          </li>
          <li class="product col">
            <div class="product__inner overflow-hidden p-3 p-md-4d875">
              <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                <div class="woocommerce-loop-product__thumbnail">
                  <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img4.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                </div>
                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                  <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                  <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Broken Faith: Inside the Word of Faith...</a></h2>
                  <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                  <div class="price d-flex align-items-center font-weight-medium font-size-3">
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                  </div>
                </div>
                <div class="product__hover d-flex align-items-center">
                  <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                    <span class="product__add-to-cart">ADD TO CART</span>
                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                  </a>
                  <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-switch"></i>
                  </a>
                  <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-heart"></i>
                  </a>
                </div>
              </div>
            </div>
          </li>
          <li class="product col">
            <div class="product__inner overflow-hidden p-3 p-md-4d875">
              <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                <div class="woocommerce-loop-product__thumbnail">
                  <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img5.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                </div>
                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                  <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                  <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Think Like a Monk: Train Your Mind for Peace and Purpose Everyday</a></h2>
                  <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                  <div class="price d-flex align-items-center font-weight-medium font-size-3">
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                  </div>
                </div>
                <div class="product__hover d-flex align-items-center">
                  <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                    <span class="product__add-to-cart">ADD TO CART</span>
                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                  </a>
                  <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-switch"></i>
                  </a>
                  <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-heart"></i>
                  </a>
                </div>
              </div>
            </div>
          </li>
          <li class="product col">
            <div class="product__inner overflow-hidden p-3 p-md-4d875">
              <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                <div class="woocommerce-loop-product__thumbnail">
                  <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img6.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                </div>
                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                  <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                  <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">The Overdue Life of Amy Byler</a></h2>
                  <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                  <div class="price d-flex align-items-center font-weight-medium font-size-3">
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                  </div>
                </div>
                <div class="product__hover d-flex align-items-center">
                  <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                    <span class="product__add-to-cart">ADD TO CART</span>
                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                  </a>
                  <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-switch"></i>
                  </a>
                  <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-heart"></i>
                  </a>
                </div>
              </div>
            </div>
          </li>
          <li class="product col">
            <div class="product__inner overflow-hidden p-3 p-md-4d875">
              <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                <div class="woocommerce-loop-product__thumbnail">
                  <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img7.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                </div>
                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                  <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                  <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">All You Can Ever Know: A Memoir</a></h2>
                  <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                  <div class="price d-flex align-items-center font-weight-medium font-size-3">
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                  </div>
                </div>
                <div class="product__hover d-flex align-items-center">
                  <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                    <span class="product__add-to-cart">ADD TO CART</span>
                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                  </a>
                  <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-switch"></i>
                  </a>
                  <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-heart"></i>
                  </a>
                </div>
              </div>
            </div>
          </li>
          <li class="product col">
            <div class="product__inner overflow-hidden p-3 p-md-4d875">
              <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                <div class="woocommerce-loop-product__thumbnail">
                  <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img8.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                </div>
                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                  <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                  <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Broken Faith: Inside the Word of Faith...</a></h2>
                  <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                  <div class="price d-flex align-items-center font-weight-medium font-size-3">
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                  </div>
                </div>
                <div class="product__hover d-flex align-items-center">
                  <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                    <span class="product__add-to-cart">ADD TO CART</span>
                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                  </a>
                  <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-switch"></i>
                  </a>
                  <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-heart"></i>
                  </a>
                </div>
              </div>
            </div>
          </li>
          <li class="product col d-xl-none d-wd-block">
            <div class="product__inner overflow-hidden p-3 p-md-4d875">
              <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                <div class="woocommerce-loop-product__thumbnail">
                  <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img9.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                </div>
                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                  <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                  <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Think Like a Monk: Train Your Mind for Peace and Purpose Everyday</a></h2>
                  <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                  <div class="price d-flex align-items-center font-weight-medium font-size-3">
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                  </div>
                </div>
                <div class="product__hover d-flex align-items-center">
                  <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                    <span class="product__add-to-cart">ADD TO CART</span>
                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                  </a>
                  <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-switch"></i>
                  </a>
                  <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-heart"></i>
                  </a>
                </div>
              </div>
            </div>
          </li>
          <li class="product col d-xl-none d-wd-block">
            <div class="product__inner overflow-hidden p-3 p-md-4d875">
              <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                <div class="woocommerce-loop-product__thumbnail">
                  <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img10.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                </div>
                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                  <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                  <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">The Overdue Life of Amy Byler</a></h2>
                  <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                  <div class="price d-flex align-items-center font-weight-medium font-size-3">
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                  </div>
                </div>
                <div class="product__hover d-flex align-items-center">
                  <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                    <span class="product__add-to-cart">ADD TO CART</span>
                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                  </a>
                  <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-switch"></i>
                  </a>
                  <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-heart"></i>
                  </a>
                </div>
              </div>
            </div>
          </li>
          <li class="product col d-xl-none d-wd-block">
            <div class="product__inner overflow-hidden p-3 p-md-4d875">
              <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                <div class="woocommerce-loop-product__thumbnail">
                  <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img1.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                </div>
                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                  <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                  <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">All You Can Ever Know: A Memoir</a></h2>
                  <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                  <div class="price d-flex align-items-center font-weight-medium font-size-3">
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                  </div>
                </div>
                <div class="product__hover d-flex align-items-center">
                  <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                    <span class="product__add-to-cart">ADD TO CART</span>
                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                  </a>
                  <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-switch"></i>
                  </a>
                  <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-heart"></i>
                  </a>
                </div>
              </div>
            </div>
          </li>
          <li class="product col d-xl-none d-wd-block">
            <div class="product__inner overflow-hidden p-3 p-md-4d875">
              <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                <div class="woocommerce-loop-product__thumbnail">
                  <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img3.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                </div>
                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                  <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                  <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Broken Faith: Inside the Word of Faith...</a></h2>
                  <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                  <div class="price d-flex align-items-center font-weight-medium font-size-3">
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                  </div>
                </div>
                <div class="product__hover d-flex align-items-center">
                  <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                    <span class="product__add-to-cart">ADD TO CART</span>
                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                  </a>
                  <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-switch"></i>
                  </a>
                  <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                    <i class="flaticon-heart"></i>
                  </a>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- Deals of the week -->
<section class="space-bottom-3">
  <div class="space-top-3 space-bottom-4 bg-gray-200">
    <div class="container">
      <header class="mb-5 d-md-flex justify-content-between align-items-center">
        <h2 class="font-size-7 mb-3 mb-md-0">Deals of the Week</h2>
        <a href="#" class="h-primary d-block">Xem tất cả <i class="glyph-icon flaticon-next"></i></a>
      </header>
      <div class="js-slick-carousel u-slick products border bg-white no-gutters" data-arrows-classes="u-slick__arrow u-slick__arrow-centered--y" data-arrow-left-classes="fas fa-chevron-left u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n10" data-arrow-right-classes="fas fa-chevron-right u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n10" data-pagi-classes="text-center u-slick__pagination u-slick__pagination mt-6 mb-0 position-absolute right-0 left-0" data-slides-show="2" data-responsive='[{
                         "breakpoint": 1199,
                         "settings": {
                           "slidesToShow": 1
                         }
                      }, {
                         "breakpoint": 768,
                         "settings": {
                           "slidesToShow": 1
                         }
                      }, {
                         "breakpoint": 554,
                         "settings": {
                           "slidesToShow": 1
                         }
                      }]'>
        <div class="product product__card border-right">
          <div class="media p-md-6 p-4 d-block d-md-flex">
            <div class="woocommerce-loop-product__thumbnail mb-4 mb-md-0">
              <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/200x327/img1.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image d-block mx-auto" alt="image-description"></a>
            </div>
            <div class="woocommerce-loop-product__body media-body ml-md-5d25">
              <div class="mb-3">
                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Kindle Edition</a></div>
                <h2 class="woocommerce-loop-product__title font-size-3 text-lh-md mb-2 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Dark in Death: An Eve Dallas Novel (In Death, Book 46)</a></h2>
                <div class="font-size-2 text-gray-700 mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Nora Roberts</a></div>
                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                  <ins class="text-decoration-none mr-2"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>79</span></ins>
                  <del class="font-size-1 font-weight-regular text-gray-700"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>99</span></del>
                </div>
              </div>
              <div class="countdown-timer mb-5">
                <h5 class="countdown-timer__title font-size-3 mb-3 font-weight-bold">Hurry Up! <span class="font-weight-regular">Offer ends in:</span></h5>
                <div class="d-flex align-items-stretch justify-content-between">
                  <div class="py-2d75">
                    <span class="font-weight-medium font-size-3">114</span>
                    <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Days</span>
                  </div>
                  <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                  <div class="py-2d75">
                    <span class="font-weight-medium font-size-3">03</span>
                    <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Hours</span>
                  </div>
                  <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                  <div class="py-2d75">
                    <span class="font-weight-medium font-size-3">60</span>
                    <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Mins</span>
                  </div>
                  <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                  <div class="py-2d75">
                    <span class="font-weight-medium font-size-3">25</span>
                    <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Secs</span>
                  </div>
                </div>
              </div>
              <div class="deal-progress">
                <div class="d-flex justify-content-between font-size-2 mb-2d75">
                  <span>Already Sold: 14</span>
                  <span>Available: 3</span>
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width:82%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="17"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="product product__card border-right">
          <div class="media p-md-6 p-4 d-block d-md-flex">
            <div class="woocommerce-loop-product__thumbnail mb-4 mb-md-0">
              <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/200x327/img2.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image d-block mx-auto" alt="image-description"></a>
            </div>
            <div class="woocommerce-loop-product__body media-body ml-md-5d25">
              <div class="mb-3">
                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Kindle Edition</a></div>
                <h2 class="woocommerce-loop-product__title font-size-3 text-lh-md mb-2 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Under a Firefly Moon (Firefly Lake Book 1)</a></h2>
                <div class="font-size-2 text-gray-700 mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Nora Roberts</a></div>
                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                  <ins class="text-decoration-none mr-2"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>79</span></ins>
                  <del class="font-size-1 font-weight-regular text-gray-700"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>99</span></del>
                </div>
              </div>
              <div class="countdown-timer mb-5">
                <h5 class="countdown-timer__title font-size-3 mb-3 font-weight-bold">Hurry Up! <span class="font-weight-regular">Offer ends in:</span></h5>
                <div class="d-flex align-items-stretch justify-content-between">
                  <div class="py-2d75">
                    <span class="font-weight-medium font-size-3">114</span>
                    <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Days</span>
                  </div>
                  <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                  <div class="py-2d75">
                    <span class="font-weight-medium font-size-3">03</span>
                    <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Hours</span>
                  </div>
                  <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                  <div class="py-2d75">
                    <span class="font-weight-medium font-size-3">60</span>
                    <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Mins</span>
                  </div>
                  <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                  <div class="py-2d75">
                    <span class="font-weight-medium font-size-3">25</span>
                    <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Secs</span>
                  </div>
                </div>
              </div>
              <div class="deal-progress">
                <div class="d-flex justify-content-between font-size-2 mb-2d75">
                  <span>Already Sold: 14</span>
                  <span>Available: 3</span>
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width:82%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="17"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="product product__card border-right">
          <div class="media p-md-6 p-4 d-block d-md-flex">
            <div class="woocommerce-loop-product__thumbnail mb-4 mb-md-0">
              <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/200x327/img3.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image d-block mx-auto" alt="image-description"></a>
            </div>
            <div class="woocommerce-loop-product__body media-body ml-md-5d25">
              <div class="mb-3">
                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Kindle Edition</a></div>
                <h2 class="woocommerce-loop-product__title font-size-3 text-lh-md mb-2 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Dark in Death: An Eve Dallas Novel (In Death, Book 46)</a></h2>
                <div class="font-size-2 text-gray-700 mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Nora Roberts</a></div>
                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                  <ins class="text-decoration-none mr-2"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>79</span></ins>
                  <del class="font-size-1 font-weight-regular text-gray-700"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>99</span></del>
                </div>
              </div>
              <div class="countdown-timer mb-5">
                <h5 class="countdown-timer__title font-size-3 mb-3 font-weight-bold">Hurry Up! <span class="font-weight-regular">Offer ends in:</span></h5>
                <div class="d-flex align-items-stretch justify-content-between">
                  <div class="py-2d75">
                    <span class="font-weight-medium font-size-3">114</span>
                    <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Days</span>
                  </div>
                  <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                  <div class="py-2d75">
                    <span class="font-weight-medium font-size-3">03</span>
                    <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Hours</span>
                  </div>
                  <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                  <div class="py-2d75">
                    <span class="font-weight-medium font-size-3">60</span>
                    <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Mins</span>
                  </div>
                  <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                  <div class="py-2d75">
                    <span class="font-weight-medium font-size-3">25</span>
                    <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Secs</span>
                  </div>
                </div>
              </div>
              <div class="deal-progress">
                <div class="d-flex justify-content-between font-size-2 mb-2d75">
                  <span>Already Sold: 14</span>
                  <span>Available: 3</span>
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width:82%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="17"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="product product__card border-right">
          <div class="media p-md-6 p-4 d-block d-md-flex">
            <div class="woocommerce-loop-product__thumbnail mb-4 mb-md-0">
              <a href="../shop/single-product-v4.html" class="d-block"><img src="/assets/img/200x327/img4.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image d-block mx-auto" alt="image-description"></a>
            </div>
            <div class="woocommerce-loop-product__body media-body ml-md-5d25">
              <div class="mb-3">
                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Kindle Edition</a></div>
                <h2 class="woocommerce-loop-product__title font-size-3 text-lh-md mb-2 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Under a Firefly Moon (Firefly Lake Book 1)</a></h2>
                <div class="font-size-2 text-gray-700 mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Nora Roberts</a></div>
                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                  <ins class="text-decoration-none mr-2"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>79</span></ins>
                  <del class="font-size-1 font-weight-regular text-gray-700"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>99</span></del>
                </div>
              </div>
              <div class="countdown-timer mb-5">
                <h5 class="countdown-timer__title font-size-3 mb-3 font-weight-bold">Hurry Up! <span class="font-weight-regular">Offer ends in:</span></h5>
                <div class="d-flex align-items-stretch justify-content-between">
                  <div class="py-2d75">
                    <span class="font-weight-medium font-size-3">114</span>
                    <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Days</span>
                  </div>
                  <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                  <div class="py-2d75">
                    <span class="font-weight-medium font-size-3">03</span>
                    <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Hours</span>
                  </div>
                  <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                  <div class="py-2d75">
                    <span class="font-weight-medium font-size-3">60</span>
                    <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Mins</span>
                  </div>
                  <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                  <div class="py-2d75">
                    <span class="font-weight-medium font-size-3">25</span>
                    <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Secs</span>
                  </div>
                </div>
              </div>
              <div class="deal-progress">
                <div class="d-flex justify-content-between font-size-2 mb-2d75">
                  <span>Already Sold: 14</span>
                  <span>Available: 3</span>
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width:82%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="17"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="product product__card border-right">
          <div class="media p-md-6 p-4 d-block d-md-flex">
            <div class="woocommerce-loop-product__thumbnail mb-4 mb-md-0">
              <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/200x327/img5.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image d-block mx-auto" alt="image-description"></a>
            </div>
            <div class="woocommerce-loop-product__body media-body ml-md-5d25">
              <div class="mb-3">
                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Kindle Edition</a></div>
                <h2 class="woocommerce-loop-product__title font-size-3 text-lh-md mb-2 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Dark in Death: An Eve Dallas Novel (In Death, Book 46)</a></h2>
                <div class="font-size-2 text-gray-700 mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Nora Roberts</a></div>
                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                  <ins class="text-decoration-none mr-2"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>79</span></ins>
                  <del class="font-size-1 font-weight-regular text-gray-700"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>99</span></del>
                </div>
              </div>
              <div class="countdown-timer mb-5">
                <h5 class="countdown-timer__title font-size-3 mb-3 font-weight-bold">Hurry Up! <span class="font-weight-regular">Offer ends in:</span></h5>
                <div class="d-flex align-items-stretch justify-content-between">
                  <div class="py-2d75">
                    <span class="font-weight-medium font-size-3">114</span>
                    <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Days</span>
                  </div>
                  <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                  <div class="py-2d75">
                    <span class="font-weight-medium font-size-3">03</span>
                    <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Hours</span>
                  </div>
                  <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                  <div class="py-2d75">
                    <span class="font-weight-medium font-size-3">60</span>
                    <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Mins</span>
                  </div>
                  <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                  <div class="py-2d75">
                    <span class="font-weight-medium font-size-3">25</span>
                    <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Secs</span>
                  </div>
                </div>
              </div>
              <div class="deal-progress">
                <div class="d-flex justify-content-between font-size-2 mb-2d75">
                  <span>Already Sold: 14</span>
                  <span>Available: 3</span>
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width:82%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="17"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="product product__card border-right">
          <div class="media p-md-6 p-4 d-block d-md-flex">
            <div class="woocommerce-loop-product__thumbnail mb-4 mb-md-0">
              <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/200x327/img6.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image d-block mx-auto" alt="image-description"></a>
            </div>
            <div class="woocommerce-loop-product__body media-body ml-md-5d25">
              <div class="mb-3">
                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Kindle Edition</a></div>
                <h2 class="woocommerce-loop-product__title font-size-3 text-lh-md mb-2 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Under a Firefly Moon (Firefly Lake Book 1)</a></h2>
                <div class="font-size-2 text-gray-700 mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Nora Roberts</a></div>
                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                  <ins class="text-decoration-none mr-2"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>79</span></ins>
                  <del class="font-size-1 font-weight-regular text-gray-700"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>99</span></del>
                </div>
              </div>
              <div class="countdown-timer mb-5">
                <h5 class="countdown-timer__title font-size-3 mb-3 font-weight-bold">Hurry Up! <span class="font-weight-regular">Offer ends in:</span></h5>
                <div class="d-flex align-items-stretch justify-content-between">
                  <div class="py-2d75">
                    <span class="font-weight-medium font-size-3">114</span>
                    <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Days</span>
                  </div>
                  <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                  <div class="py-2d75">
                    <span class="font-weight-medium font-size-3">03</span>
                    <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Hours</span>
                  </div>
                  <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                  <div class="py-2d75">
                    <span class="font-weight-medium font-size-3">60</span>
                    <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Mins</span>
                  </div>
                  <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                  <div class="py-2d75">
                    <span class="font-weight-medium font-size-3">25</span>
                    <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Secs</span>
                  </div>
                </div>
              </div>
              <div class="deal-progress">
                <div class="d-flex justify-content-between font-size-2 mb-2d75">
                  <span>Already Sold: 14</span>
                  <span>Available: 3</span>
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width:82%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="17"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- New -->
<section class="space-bottom-3 banner-with-product">
  <div class="container">
    <header class="mb-5 d-md-flex justify-content-between align-items-center">
      <h2 class="font-size-7 mb-3 mb-md-0">New Releases</h2>
      <ul class="nav nav-gray-700 flex-nowrap flex-md-wrap overflow-auto overflow-md-visible" role="tablist">
        <li class="nav-item mx-4 flex-shrink-0 flex-md-shrink-1">
          <a class="nav-link pb-1 px-0 active" id="history-tab" data-toggle="tab" href="#history-1" role="tab" aria-controls="history-1" aria-selected="true">History</a>
        </li>
        <li class="nav-item mx-4 flex-shrink-0 flex-md-shrink-1">
          <a class="nav-link pb-1 px-0" id="sciencemath-tab" data-toggle="tab" href="#sciencemath-1" role="tab" aria-controls="sciencemath-1" aria-selected="false">Science &amp; Math</a>
        </li>
        <li class="nav-item mx-4 flex-shrink-0 flex-md-shrink-1">
          <a class="nav-link pb-1 px-0" id="romance-tab" data-toggle="tab" href="#romance-1" role="tab" aria-controls="romance-1" aria-selected="false">Romance</a>
        </li>
        <li class="nav-item ml-4 flex-shrink-0 flex-md-shrink-1">
          <a class="nav-link pb-1 px-0" id="travel-tab" data-toggle="tab" href="#travel-1" role="tab" aria-controls="travel-1" aria-selected="false">Travel</a>
        </li>
      </ul>
    </header>
    <div class="tab-content u-slick__tab">
      <div class="tab-pane fade show active" id="history-1" role="tabpanel" aria-labelledby="history-tab">
        <div class="row no-gutters">
          <div class="col-xl-4 border-right-0 border bg-gray-200 px-1">
            <div class="banner px-lg-8 px-3 py-4 py-xl-0 d-flex h-100 align-items-center justify-content-center">
              <div class="banner__body">
                <div class="banner__image pb-1 mb-5">
                  <img class="img-fluid" src="/assets/img/350x282/img1.png" alt="image-description">
                </div>
                <h3 class="banner_text m-0">
                  <span class="d-block mb-1 font-size-10 font-weight-regular">Get Extra</span>
                  <span class="d-block mb-3 font-size-12 text-primary font-weight-medium">Sale -25%</span>
                  <span class="d-block mb-5 text-uppercase font-size-7 font-weight-regular text-gray-400">On Order Over $100</span>
                </h3>
                <a href="../shop/v1.html" class="btn btn-primary btn-wide rounded-0">View More</a>
              </div>
            </div>
          </div>
          <div class="col-xl-8">
            <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-lg-3 row-cols-wd-4 border-top border-left my-0">
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img10.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Think Like a Monk: Train Your Mind for Peace and Purpose Everyday</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img1.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Man's Search for Meaning</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img2.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Blindside (Michael Bennett)</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img3.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">The Overdue Life of Amy Byler</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img4.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Call Me By Your Name</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img5.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Camino Winds</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col d-xl-none d-wd-block">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img6.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Man's Search for Meaning</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col d-xl-none d-wd-block">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img7.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Blindside (Michael Bennett)</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="sciencemath-1" role="tabpanel" aria-labelledby="sciencemath-tab">
        <div class="row no-gutters">
          <div class="col-xl-4 border-right-0 border bg-gray-200 px-1">
            <div class="banner px-lg-8 px-3 py-4 py-xl-0 d-flex h-100 align-items-center justify-content-center">
              <div class="banner__body">
                <div class="banner__image pb-1 mb-5">
                  <img class="img-fluid" src="/assets/img/350x282/img1.png" alt="image-description">
                </div>
                <h3 class="banner_text m-0">
                  <span class="d-block mb-1 font-size-10 font-weight-regular">Get Extra</span>
                  <span class="d-block mb-3 font-size-12 text-primary font-weight-medium">Sale -25%</span>
                  <span class="d-block mb-5 text-uppercase font-size-7 font-weight-regular text-gray-400">On Order Over $100</span>
                </h3>
                <a href="../shop/v1.html" class="btn btn-primary btn-wide rounded-0">View More</a>
              </div>
            </div>
          </div>
          <div class="col-xl-8">
            <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-lg-3 row-cols-wd-4 border-top border-left my-0">
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img10.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Think Like a Monk: Train Your Mind for Peace and Purpose Everyday</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img1.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Man's Search for Meaning</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img2.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Blindside (Michael Bennett)</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img3.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">The Overdue Life of Amy Byler</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img4.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Call Me By Your Name</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img5.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Camino Winds</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col d-xl-none d-wd-block">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img6.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Man's Search for Meaning</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col d-xl-none d-wd-block">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img7.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Blindside (Michael Bennett)</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="romance-1" role="tabpanel" aria-labelledby="romance-tab">
        <div class="row no-gutters">
          <div class="col-xl-4 border-right-0 border bg-gray-200 px-1">
            <div class="banner px-lg-8 px-3 py-4 py-xl-0 d-flex h-100 align-items-center justify-content-center">
              <div class="banner__body">
                <div class="banner__image pb-1 mb-5">
                  <img class="img-fluid" src="/assets/img/350x282/img1.png" alt="image-description">
                </div>
                <h3 class="banner_text m-0">
                  <span class="d-block mb-1 font-size-10 font-weight-regular">Get Extra</span>
                  <span class="d-block mb-3 font-size-12 text-primary font-weight-medium">Sale -25%</span>
                  <span class="d-block mb-5 text-uppercase font-size-7 font-weight-regular text-gray-400">On Order Over $100</span>
                </h3>
                <a href="../shop/v1.html" class="btn btn-primary btn-wide rounded-0">View More</a>
              </div>
            </div>
          </div>
          <div class="col-xl-8">
            <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-lg-3 row-cols-wd-4 border-top border-left my-0">
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img10.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Think Like a Monk: Train Your Mind for Peace and Purpose Everyday</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img1.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Man's Search for Meaning</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img2.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Blindside (Michael Bennett)</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img3.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">The Overdue Life of Amy Byler</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img4.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Call Me By Your Name</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img5.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Camino Winds</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col d-xl-none d-wd-block">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img6.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Man's Search for Meaning</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col d-xl-none d-wd-block">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img7.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Blindside (Michael Bennett)</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="travel-1" role="tabpanel" aria-labelledby="travel-tab">
        <div class="row no-gutters">
          <div class="col-xl-4 border-right-0 border bg-gray-200 px-1">
            <div class="banner px-lg-8 px-3 py-4 py-xl-0 d-flex h-100 align-items-center justify-content-center">
              <div class="banner__body">
                <div class="banner__image pb-1 mb-5">
                  <img class="img-fluid" src="/assets/img/350x282/img1.png" alt="image-description">
                </div>
                <h3 class="banner_text m-0">
                  <span class="d-block mb-1 font-size-10 font-weight-regular">Get Extra</span>
                  <span class="d-block mb-3 font-size-12 text-primary font-weight-medium">Sale -25%</span>
                  <span class="d-block mb-5 text-uppercase font-size-7 font-weight-regular text-gray-400">On Order Over $100</span>
                </h3>
                <a href="../shop/v1.html" class="btn btn-primary btn-wide rounded-0">View More</a>
              </div>
            </div>
          </div>
          <div class="col-xl-8">
            <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-lg-3 row-cols-wd-4 border-top border-left my-0">
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img10.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Think Like a Monk: Train Your Mind for Peace and Purpose Everyday</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img1.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Man's Search for Meaning</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img2.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Blindside (Michael Bennett)</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img3.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">The Overdue Life of Amy Byler</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img4.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Call Me By Your Name</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img5.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Camino Winds</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col d-xl-none d-wd-block">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img6.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Man's Search for Meaning</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col d-xl-none d-wd-block">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img7.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Blindside (Michael Bennett)</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Biographies books -->
<section class="space-bottom-3">
  <div class="container">
    <header class="mb-5 d-md-flex justify-content-between align-items-center">
      <h2 class="font-size-7 mb-3 mb-md-0">Biographies Books</h2>
      <a href="../shop/v1.html" class="h-primary d-block">Xem tất cả <i class="glyph-icon flaticon-next"></i></a>
    </header>
    <div class="js-slick-carousel u-slick products border" data-pagi-classes="text-center u-slick__pagination mt-md-8 mt-4 position-absolute right-0 left-0" data-slides-show="3" data-responsive='[{
                     "breakpoint": 992,
                     "settings": {
                       "slidesToShow": 2
                     }
                  }, {
                     "breakpoint": 768,
                     "settings": {
                       "slidesToShow": 1
                     }
                  }, {
                     "breakpoint": 554,
                     "settings": {
                       "slidesToShow": 1
                     }
                  }]'>
      <div class="product product__card border-right">
        <div class="media p-3 p-md-4d875">
          <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img1.jpg" alt="image-description"></a>
          <div class="media-body ml-4d875">
            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Hard Cover</a></div>
            <h2 class="woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">The Rural Diaries: Love, Livestock, and Big Life Lessons Down on Mischief Farm</a></h2>
            <div class="font-size-2 mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Hillary Burton</a></div>
            <div class="price d-flex align-items-center font-weight-medium font-size-3">
              <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>15</span>
            </div>
          </div>
        </div>
      </div>
      <div class="product product__card border-right">
        <div class="media p-3 p-md-4d875">
          <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img2.jpg" alt="image-description"></a>
          <div class="media-body ml-4d875">
            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Hard Cover</a></div>
            <h2 class="woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">The Ride of a Lifetime: Lessons Learned from 15 Years as CEO...</a></h2>
            <div class="font-size-2 mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Hillary Burton</a></div>
            <div class="price d-flex align-items-center font-weight-medium font-size-3">
              <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>15</span>
            </div>
          </div>
        </div>
      </div>
      <div class="product product__card border-right">
        <div class="media p-3 p-md-4d875">
          <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img3.jpg" alt="image-description"></a>
          <div class="media-body ml-4d875">
            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Hard Cover</a></div>
            <h2 class="woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Russians Among Us: Sleeper Cells, Ghost Stories, and the Hunt...</a></h2>
            <div class="font-size-2 mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Hillary Burton</a></div>
            <div class="price d-flex align-items-center font-weight-medium font-size-3">
              <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>15</span>
            </div>
          </div>
        </div>
      </div>
      <div class="product product__card border-right">
        <div class="media p-3 p-md-4d875">
          <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img4.jpg" alt="image-description"></a>
          <div class="media-body ml-4d875">
            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Hard Cover</a></div>
            <h2 class="woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">The Rural Diaries: Love, Livestock, and Big Life Lessons Down on Mischief Farm</a></h2>
            <div class="font-size-2 mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Hillary Burton</a></div>
            <div class="price d-flex align-items-center font-weight-medium font-size-3">
              <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>15</span>
            </div>
          </div>
        </div>
      </div>
      <div class="product product__card border-right">
        <div class="media p-3 p-md-4d875">
          <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img5.jpg" alt="image-description"></a>
          <div class="media-body ml-4d875">
            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Hard Cover</a></div>
            <h2 class="woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">The Ride of a Lifetime: Lessons Learned from 15 Years as CEO...</a></h2>
            <div class="font-size-2 mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Hillary Burton</a></div>
            <div class="price d-flex align-items-center font-weight-medium font-size-3">
              <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>15</span>
            </div>
          </div>
        </div>
      </div>
      <div class="product product__card border-right">
        <div class="media p-3 p-md-4d875">
          <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img6.jpg" alt="image-description"></a>
          <div class="media-body ml-4d875">
            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Hard Cover</a></div>
            <h2 class="woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">Russians Among Us: Sleeper Cells, Ghost Stories, and the Hunt...</a></h2>
            <div class="font-size-2 mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Hillary Burton</a></div>
            <div class="price d-flex align-items-center font-weight-medium font-size-3">
              <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>15</span>
            </div>
          </div>
        </div>
      </div>
      <div class="product product__card border-right">
        <div class="media p-3 p-md-4d875">
          <a href="../shop/single-product-v1.html" class="d-block"><img src="/assets/img/120x180/img7.jpg" alt="image-description"></a>
          <div class="media-body ml-4d875">
            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="../shop/single-product-v1.html">Hard Cover</a></div>

            <h2 class="woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html">The Rural Diaries: Love, Livestock, and Big Life Lessons Down on Mischief Farm</a></h2>
            <div class="font-size-2 mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Hillary Burton</a></div>
            <div class="price d-flex align-items-center font-weight-medium font-size-3">
              <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>15</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Favorite authors -->
<section class="space-bottom-3">
  <div class="container">
    <header class="d-md-flex justify-content-between align-items-center mb-8">
      <h2 class="font-size-7 mb-3 mb-md-0">Favorite Authors</h2>
      <a href="../others/authors-list.html" class="h-primary d-block">Xem tất cả <i class="glyph-icon flaticon-next"></i></a>
    </header>
    <ul class="row rows-cols-5 no-gutters authors list-unstyled js-slick-carousel u-slick" data-slides-show="5" data-arrows-classes="u-slick__arrow u-slick__arrow-centered--y" data-arrow-left-classes="fas fa-chevron-left u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n10" data-arrow-right-classes="fas fa-chevron-right u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n10" data-responsive='[{
                      "breakpoint": 1025,
                      "settings": {
                          "slidesToShow": 3
                      }
                  }, {
                      "breakpoint": 992,
                      "settings": {
                          "slidesToShow": 2
                      }
                  }, {
                      "breakpoint": 768,
                      "settings": {
                          "slidesToShow": 1
                      }
                  }, {
                      "breakpoint": 554,
                      "settings": {
                          "slidesToShow": 1
                      }
                  }]'>
      <li class="author col">
        <a href="../others/authors-single.html" class="text-reset">
          <img src="/assets/img/140x140/img1.jpg" class="mx-auto mb-5 d-block rounded-circle" alt="image-description">
          <div class="author__body text-center">
            <h2 class="author__name h6 mb-0">Barbara O'Neil</h2>
            <div class="text-gray-700 font-size-2">25 Published Books</div>
          </div>
        </a>
      </li>
      <li class="author col">
        <a href="../others/authors-single.html" class="text-reset">
          <img src="/assets/img/140x140/img2.jpg" class="mx-auto mb-5 d-block rounded-circle" alt="image-description">
          <div class="author__body text-center">
            <h2 class="authorf__name h6 mb-0">Stephen King</h2>
            <div class="text-gray-700 font-size-2">25 Published Books</div>
          </div>
        </a>
      </li>
      <li class="author col">
        <a href="../others/authors-single.html" class="text-reset">
          <img src="/assets/img/140x140/img3.jpg" class="mx-auto mb-5 d-block rounded-circle" alt="image-description">
          <div class="author__body text-center">
            <h2 class="author__name h6 mb-0">David Walliams</h2>
            <div class="text-gray-700 font-size-2">25 Published Books</div>
          </div>
        </a>
      </li>
      <li class="author col">
        <a href="../others/authors-single.html" class="text-reset">
          <img src="/assets/img/140x140/img4.jpg" class="mx-auto mb-5 d-block rounded-circle" alt="image-description">
          <div class="author__body text-center">
            <h2 class="author__name h6 mb-0">Joe Wicks</h2>
            <div class="text-gray-700 font-size-2">25 Published Books</div>
          </div>
        </a>
      </li>
      <li class="author col">
        <a href="../others/authors-single.html" class="text-reset">
          <img src="/assets/img/140x140/img5.jpg" class="mx-auto mb-5 d-block rounded-circle" alt="image-description">
          <div class="author__body text-center">
            <h2 class="author__name h6 mb-0">Jessica Simpson</h2>
            <div class="text-gray-700 font-size-2">25 Published Books</div>
          </div>
        </a>
      </li>
      <li class="author col">
        <a href="../others/authors-single.html" class="text-reset">
          <img src="/assets/img/140x140/img6.jpg" class="mx-auto mb-5 d-block rounded-circle" alt="image-description">
          <div class="author__body text-center">
            <h2 class="author__name h6 mb-0">David Walliams</h2>
            <div class="text-gray-700 font-size-2">25 Published Books</div>
          </div>
        </a>
      </li>
      <li class="author col">
        <a href="../others/authors-single.html" class="text-reset">
          <img src="/assets/img/140x140/img7.jpg" class="mx-auto mb-5 d-block rounded-circle" alt="image-description">
          <div class="author__body text-center">
            <h2 class="author__name h6 mb-0">Joe Wicks</h2>
            <div class="text-gray-700 font-size-2">25 Published Books</div>
          </div>
        </a>
      </li>
      <li class="author col">
        <a href="../others/authors-single.html" class="text-reset">
          <img src="/assets/img/140x140/img8.jpg" class="mx-auto mb-5 d-block rounded-circle" alt="image-description">
          <div class="author__body text-center">
            <h2 class="author__name h6 mb-0">Barbara O'Neil</h2>
            <div class="text-gray-700 font-size-2">25 Published Books</div>
          </div>
        </a>
      </li>
    </ul>
  </div>
</section>

@stop
@section('js')
  <script src="/assets/js/controllers/booksController.js"></script>     
@stop