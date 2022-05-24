@extends('_client_layout')
@section('content')

<div ng-controller="homeController" class="m-auto">
  <!-- Slider -->
  <section class="space-bottom-3 m-auto">
    <div class="bg-gray-200 space-2 space-lg-0 bg-img-hero" style="background-image: url(/assets/img/1920x588/img1.jpg);">
      <div class="container">
        <div class="owl-carousel slides">
          <div class="js-slide">
            <div class="hero row min-height-588 align-items-center">
              <div class="col-lg-7 col-wd-6 mb-4 mb-lg-0">
                <div class="media-body mr-wd-4 align-self-center mb-4 mb-md-0">
                  <p class="hero__pretitle text-uppercase font-weight-bold text-gray-400 mb-2" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">Bộ sưu tập của Bookworm</p>
                  <h2 class="hero__title font-size-14 mb-4" data-scs-animation-in="fadeInUp" data-scs-animation-delay="100">
                    <span class="hero__title-line-1 font-weight-regular d-block">Sách nổi bật của</span>
                    <span class="hero__title-line-2 font-weight-bold d-block">Tháng Hai</span>
                  </h2>
                  <a href="../shop/v1.html" class="btn btn-dark btn-wide rounded-0 hero__btn" data-scs-animation-in="fadeInLeft" data-scs-animation-delay="100">Xem thêm</a>
                </div>
              </div>
              <div class="col-lg-5 col-wd-6" data-scs-animation-in="fadeInRight" data-scs-animation-delay="100">
                <img class="img-fluid" ng-src="/assets/img/800x420/img1.png" alt="image-description">
              </div>
            </div>
          </div>
          <div class="js-slide">
            <div class="hero row min-height-588 align-items-center">
              <div class="col-lg-7 col-wd-6 mb-4 mb-lg-0">
                <div class="media-body mr-wd-4 align-self-center mb-4 mb-md-0">
                  <p class="hero__pretitle text-uppercase font-weight-bold text-gray-400 mb-2" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">The Bookworm Editors'</p>
                  <h2 class="hero__title font-size-14 mb-4" data-scs-animation-in="fadeInUp" data-scs-animation-delay="100">
                    <span class="hero__title-line-1 font-weight-regular d-block">Featured Books of the</span>
                    <span class="hero__title-line-2 font-weight-bold d-block">February</span>
                  </h2>
                  <a href="../shop/v1.html" class="btn btn-dark btn-wide rounded-0 hero__btn" data-scs-animation-in="fadeInLeft" data-scs-animation-delay="100">See More</a>
                </div>
              </div>
              <div class="col-lg-5 col-wd-6" data-scs-animation-in="fadeInRight" data-scs-animation-delay="100">
                <img class="img-fluid" ng-src="/assets/img/800x420/img1.png" alt="image-description">
              </div>
            </div>
          </div>
          <div class="js-slide">
            <div class="hero row min-height-588 align-items-center">
              <div class="col-lg-7 col-wd-6 mb-4 mb-lg-0">
                <div class="media-body mr-wd-4 align-self-center mb-4 mb-md-0">
                  <p class="hero__pretitle text-uppercase font-weight-bold text-gray-400 mb-2" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">The Bookworm Editors'</p>
                  <h2 class="hero__title font-size-14 mb-4" data-scs-animation-in="fadeInUp" data-scs-animation-delay="100">
                    <span class="hero__title-line-1 font-weight-regular d-block">Featured Books of the</span>
                    <span class="hero__title-line-2 font-weight-bold d-block">February</span>
                  </h2>
                  <a href="../shop/v1.html" class="btn btn-dark btn-wide rounded-0 hero__btn" data-scs-animation-in="fadeInLeft" data-scs-animation-delay="100">See More</a>
                </div>
              </div>
              <div class="col-lg-5 col-wd-6" data-scs-animation-in="fadeInRight" data-scs-animation-delay="100">
                <img class="img-fluid" ng-src="/assets/img/800x420/img1.png" alt="image-description">
              </div>
            </div>
          </div>
          <div class="js-slide">
            <div class="hero row min-height-588 align-items-center">
              <div class="col-lg-7 col-wd-6 mb-4 mb-lg-0">
                <div class="media-body mr-wd-4 align-self-center mb-4 mb-md-0">
                  <p class="hero__pretitle text-uppercase font-weight-bold text-gray-400 mb-2" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">The Bookworm Editors'</p>
                  <h2 class="hero__title font-size-14 mb-4" data-scs-animation-in="fadeInUp" data-scs-animation-delay="100">
                    <span class="hero__title-line-1 font-weight-regular d-block">Featured Books of the</span>
                    <span class="hero__title-line-2 font-weight-bold d-block">February</span>
                  </h2>
                  <a href="../shop/v1.html" class="btn btn-dark btn-wide rounded-0 hero__btn" data-scs-animation-in="fadeInLeft" data-scs-animation-delay="100">See More</a>
                </div>
              </div>
              <div class="col-lg-5 col-wd-6" data-scs-animation-in="fadeInRight" data-scs-animation-delay="100">
                <img class="img-fluid" ng-src="/assets/img/800x420/img1.png" alt="image-description">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Newest books -->
  <section class="space-bottom-3 m-auto" style="max-width: 1200px;">
    <div class="container">
      <header class="mb-5 d-md-flex justify-content-between align-items-center">
        <h2 class="font-size-5 mb-3 mb-md-0 text-uppercase">Sách mới</h2>
        <a href="../shop/v1.html" class="h-primary d-block text-primary">Xem tất cả <i class="glyph-icon flaticon-next"></i></a>
      </header>
      <div class="products no-gutters owl-carousel">
        <div class="product p-1 m-1" ng-repeat="row in dataNewest">
          <div class="product__inner overflow-hidden">
            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
              <div class="woocommerce-loop-product__thumbnail">
                <a href="/shop/list/@{{row.id}}" class="d-block"><img ng-src="/assets/img/books/@{{row.image}}" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
              </div>
              <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="/shop/list/@{{row.id}}">@{{row.type}}</a></div>
                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2"><a href="/shop/list/@{{row.id}}">@{{row.book_name}}</a></h2>
                <!-- <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div> -->
                <div class="price d-flex align-items-center font-weight-medium font-size-2">
                  <span class="woocommerce-Price-amount amount text-primary"><span class="text-primary"> @{{row.prices.price | number}}đ</span></span>
                </div>
              </div>
              <div class="product__hover d-flex align-items-center">
                <a href="/shop/list/@{{row.id}}" class="text-uppercase text-dark font-weight-medium mr-auto">
                  <span class="product__add-to-cart">Thêm vào giỏ</span>
                  <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                </a>
                <a href="/shop/list/@{{row.id}}" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                  <i class="flaticon-switch"></i>
                </a>
                <a href="/shop/list/@{{row.id}}" class="h-p-bg btn btn-outline-primary border-0">
                  <i class="flaticon-heart"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Best seller books -->
  <section class="space-bottom-3 m-auto" style="max-width: 1200px;" ng-if="dataBestSeller.length > 0">
    <div class="container">
      <header class="mb-5 d-md-flex justify-content-between align-items-center">
        <h2 class="font-size-5 mb-3 mb-md-0 text-uppercase">Sách bán chạy nhất</h2>
        <a href="../shop/v1.html" class="h-primary d-block text-primary">Xem tất cả <i class="glyph-icon flaticon-next"></i></a>
      </header>
      <div class="products no-gutters owl-carousel">
        <div class="product p-1 m-1" ng-repeat="row in dataBestSeller">
          <div class="product__inner overflow-hidden">
            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
              <div class="woocommerce-loop-product__thumbnail">
                <a href="/shop/list/@{{row.id}}" class="d-block"><img ng-src="/assets/img/books/@{{row.image}}" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
              </div>
              <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="/shop/list/@{{row.id}}">@{{row.type}}</a></div>
                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2"><a href="/shop/list/@{{row.id}}">@{{row.book_name}}</a></h2>
                <!-- <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div> -->
                <div class="price d-flex align-items-center font-weight-medium font-size-2">
                  <span class="woocommerce-Price-amount amount text-primary"><span class="text-primary"> @{{row.prices.price | number}}đ</span></span>
                </div>
              </div>
              <div class="product__hover d-flex align-items-center">
                <a href="/shop/list/@{{row.id}}" class="text-uppercase text-dark font-weight-medium mr-auto">
                  <span class="product__add-to-cart">Thêm vào giỏ</span>
                  <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                </a>
                <a href="/shop/list/@{{row.id}}" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                  <i class="flaticon-switch"></i>
                </a>
                <a href="/shop/list/@{{row.id}}" class="h-p-bg btn btn-outline-primary border-0">
                  <i class="flaticon-heart"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Banner -->
  <div class="banner_home_pro mb-8">
    <a href="/collections/manga">
      <img ng-src="/assets/img/banners/banner_home_pro_4.webp" width="100%">
    </a>
  </div>
  <!-- Manga collections -->
  <section class="space-bottom-3 m-auto" style="max-width: 1200px;">
    <div class="container">
      <header class="mb-5 d-md-flex justify-content-between align-items-center">
        <h2 class="font-size-5 mb-3 mb-md-0 text-uppercase">Manga - Comic</h2>
        <a href="../shop/v1.html" class="h-primary text-primary d-block">Xem tất cả <i class="glyph-icon flaticon-next"></i></a>
      </header>
      <div class="products no-gutters owl-carousel">
        <div class="product p-1 m-1" ng-repeat="row in books">
          <div class="product__inner overflow-hidden">
            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
              <div class="woocommerce-loop-product__thumbnail">
                <a href="/shop/list/@{{row.id}}" class="d-block"><img ng-src="/assets/img/books/@{{row.image}}" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
              </div>
              <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="/shop/list/@{{row.id}}">@{{row.type}}</a></div>
                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2"><a href="/shop/list/@{{row.id}}">@{{row.book_name}}</a></h2>
                <!-- <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div> -->
                <div class="price d-flex align-items-center font-weight-medium font-size-2">
                  <span class="woocommerce-Price-amount amount text-primary"><span class="text-primary"> @{{row.prices.price | number}}đ</span></span>
                </div>
              </div>
              <div class="product__hover d-flex align-items-center">
                <a href="/shop/list/@{{row.id}}" class="text-uppercase text-dark font-weight-medium mr-auto">
                  <span class="product__add-to-cart">Thêm vào giỏ</span>
                  <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                </a>
                <a href="/shop/list/@{{row.id}}" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                  <i class="flaticon-switch"></i>
                </a>
                <a href="/shop/list/@{{row.id}}" class="h-p-bg btn btn-outline-primary border-0">
                  <i class="flaticon-heart"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Banner -->
  <div class="banner_home_pro mb-8">
    <a href="/collections/manga">
      <img ng-src="/assets/img/banners/banner_home_pro_5.webp" width="100%">
    </a>
  </div>
  <!-- Doraemon -->
  <section class="space-bottom-3 m-auto" style="max-width: 1200px;">
    <div class="container">
      <header class="mb-5 d-md-flex justify-content-between align-items-center">
        <h2 class="font-size-5 mb-3 mb-md-0 text-uppercase">Doraemon</h2>
        <a href="../shop/v1.html" class="h-primary text-primary d-block">Xem tất cả <i class="glyph-icon flaticon-next"></i></a>
      </header>
      <div class="products no-gutters owl-carousel">
        <div class="product p-1 m-1" ng-repeat="row in books">
          <div class="product__inner overflow-hidden">
            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
              <div class="woocommerce-loop-product__thumbnail">
                <a href="/shop/list/@{{row.id}}" class="d-block"><img ng-src="/assets/img/books/@{{row.image}}" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
              </div>
              <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="/shop/list/@{{row.id}}">@{{row.type}}</a></div>
                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2"><a href="/shop/list/@{{row.id}}">@{{row.book_name}}</a></h2>
                <!-- <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div> -->
                <div class="price d-flex align-items-center font-weight-medium font-size-2">
                  <span class="woocommerce-Price-amount amount text-primary"><span class="text-primary"> @{{row.prices.price | number}}đ</span></span>
                </div>
              </div>
              <div class="product__hover d-flex align-items-center">
                <a href="/shop/list/@{{row.id}}" class="text-uppercase text-dark font-weight-medium mr-auto">
                  <span class="product__add-to-cart">Thêm vào giỏ</span>
                  <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                </a>
                <a href="/shop/list/@{{row.id}}" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                  <i class="flaticon-switch"></i>
                </a>
                <a href="/shop/list/@{{row.id}}" class="h-p-bg btn btn-outline-primary border-0">
                  <i class="flaticon-heart"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Favorite authors -->
  <section class="space-bottom-3 m-auto" style="max-width: 1200px;">
    <div class="container">
      <header class="d-md-flex justify-content-between align-items-center mb-8">
        <h2 class="font-size-5 mb-3 mb-md-0 text-uppercase">Favorite Authors</h2>
        <a href="../others/authors-list.html" class="h-primary d-block text-primary">Xem tất cả <i class="glyph-icon flaticon-next"></i></a>
      </header>
      <ul class="row rows-cols-5 authors list-unstyled owl-carousel">
        <li class="author col">
          <a href="../others/authors-single.html" class="text-reset">
            <img ng-src="/assets/img/140x140/img1.jpg" class="mx-auto mb-5 d-block rounded-circle" alt="image-description">
            <div class="author__body text-center">
              <h2 class="author__name h6 mb-0">Barbara O'Neil</h2>
              <div class="text-gray-700 font-size-2">25 Published Books</div>
            </div>
          </a>
        </li>
        <li class="author col">
          <a href="../others/authors-single.html" class="text-reset">
            <img ng-src="/assets/img/140x140/img2.jpg" class="mx-auto mb-5 d-block rounded-circle" alt="image-description">
            <div class="author__body text-center">
              <h2 class="authorf__name h6 mb-0">Stephen King</h2>
              <div class="text-gray-700 font-size-2">25 Published Books</div>
            </div>
          </a>
        </li>
        <li class="author col">
          <a href="../others/authors-single.html" class="text-reset">
            <img ng-src="/assets/img/140x140/img3.jpg" class="mx-auto mb-5 d-block rounded-circle" alt="image-description">
            <div class="author__body text-center">
              <h2 class="author__name h6 mb-0">David Walliams</h2>
              <div class="text-gray-700 font-size-2">25 Published Books</div>
            </div>
          </a>
        </li>
        <li class="author col">
          <a href="../others/authors-single.html" class="text-reset">
            <img ng-src="/assets/img/140x140/img4.jpg" class="mx-auto mb-5 d-block rounded-circle" alt="image-description">
            <div class="author__body text-center">
              <h2 class="author__name h6 mb-0">Joe Wicks</h2>
              <div class="text-gray-700 font-size-2">25 Published Books</div>
            </div>
          </a>
        </li>
        <li class="author col">
          <a href="../others/authors-single.html" class="text-reset">
            <img ng-src="/assets/img/140x140/img5.jpg" class="mx-auto mb-5 d-block rounded-circle" alt="image-description">
            <div class="author__body text-center">
              <h2 class="author__name h6 mb-0">Jessica Simpson</h2>
              <div class="text-gray-700 font-size-2">25 Published Books</div>
            </div>
          </a>
        </li>
        <li class="author col">
          <a href="../others/authors-single.html" class="text-reset">
            <img ng-src="/assets/img/140x140/img6.jpg" class="mx-auto mb-5 d-block rounded-circle" alt="image-description">
            <div class="author__body text-center">
              <h2 class="author__name h6 mb-0">David Walliams</h2>
              <div class="text-gray-700 font-size-2">25 Published Books</div>
            </div>
          </a>
        </li>
        <li class="author col">
          <a href="../others/authors-single.html" class="text-reset">
            <img ng-src="/assets/img/140x140/img7.jpg" class="mx-auto mb-5 d-block rounded-circle" alt="image-description">
            <div class="author__body text-center">
              <h2 class="author__name h6 mb-0">Joe Wicks</h2>
              <div class="text-gray-700 font-size-2">25 Published Books</div>
            </div>
          </a>
        </li>
        <li class="author col">
          <a href="../others/authors-single.html" class="text-reset">
            <img ng-src="/assets/img/140x140/img8.jpg" class="mx-auto mb-5 d-block rounded-circle" alt="image-description">
            <div class="author__body text-center">
              <h2 class="author__name h6 mb-0">Barbara O'Neil</h2>
              <div class="text-gray-700 font-size-2">25 Published Books</div>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </section>
</div>

@stop
@section('js')
<script src="/assets/js/controllers/client/homeController.js"></script>
@stop