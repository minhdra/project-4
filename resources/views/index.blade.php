@extends('_client_layout')
@section('content')

<div ng-controller="homeController" class="m-auto" ng-init="loadData(); loadSlides();">
  <!-- Slider -->
  <section class="space-bottom-3 m-auto">
    <div class="space-2 space-lg-0">
      <div class="container">
        <data-owl-carousel class="owl-carousel slides" data-options="{loop:true, nav: true}">
          <div owl-carousel-item="" class="" ng-repeat="row in slides">
            <a href="@{{row.link}}" class="hero row min-height-588 align-items-center">
              <img width="100%" ng-src="/assets/img/slides/@{{row.image}}" alt="">
            </a>
          </div>
        </data-owl-carousel>
      </div>
    </div>
  </section>
  <!-- Newest books -->
  <section class="space-bottom-3 m-auto" style="max-width: 1200px;">
    <div class="container">
      <header class="mb-5 d-md-flex justify-content-between align-items-center">
        <h2 class="font-size-5 mb-3 mb-md-0 text-uppercase">Sách mới</h2>
        <a href="{{route('shop')}}" class="h-primary d-block text-primary">Xem tất cả <i class="glyph-icon flaticon-next"></i></a>
      </header>
      <data-owl-carousel class="products no-gutters owl-carousel" data-options="{loop:false, items: 5, autoplay: false, nav: true, dots: false}">
        <div owl-carousel-item="" class="product p-1 m-1" ng-repeat="row in dataNewest">
          <div class="product__inner overflow-hidden">
            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
              <div class="woocommerce-loop-product__thumbnail">
                <a href="/shop/list/@{{row.id}}" class="d-block"><img ng-src="/assets/img/books/@{{row.image}}" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
              </div>
              <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="/shop/list/@{{row.id}}">@{{row.type}}</a></div>
                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2"><a href="/shop/list/@{{row.id}}">@{{row.book_name}}</a></h2>
                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">@{{row.book_authors.length > 0 ? row.book_authors[0].authors.author_name : row.categories.category_name}}</a></div>
                <div class="price d-flex align-items-center font-weight-medium font-size-2">
                  <span class="woocommerce-Price-amount amount text-primary"><span class="text-primary"> @{{row.prices.price | number}} VND</span></span>
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
      </data-owl-carousel>
    </div>
  </section>
  <!-- Best seller books -->
  <section class="space-bottom-3 m-auto" style="max-width: 1200px;" ng-if="dataBestSeller.length > 0">
    <div class="container">
      <header class="mb-5 d-md-flex justify-content-between align-items-center">
        <h2 class="font-size-5 mb-3 mb-md-0 text-uppercase">Sách bán chạy nhất</h2>
        <a href="{{route('shop')}}" class="h-primary d-block text-primary">Xem tất cả <i class="glyph-icon flaticon-next"></i></a>
      </header>
      <data-owl-carousel class="products no-gutters owl-carousel" data-options="{loop:false, items: 5, autoplay: false, nav: true, dots: false}">
        <div owl-carousel-item="" class="product p-1 m-1" ng-repeat="row in dataBestSeller">
          <div class="product__inner overflow-hidden">
            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
              <div class="woocommerce-loop-product__thumbnail">
                <a href="/shop/list/@{{row.id}}" class="d-block"><img ng-src="/assets/img/books/@{{row.image}}" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
              </div>
              <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="/shop/list/@{{row.id}}">@{{row.type}}</a></div>
                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2"><a href="/shop/list/@{{row.id}}">@{{row.book_name}}</a></h2>
                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">@{{row.book_authors.length > 0 ? row.book_authors[0].authors.author_name : row.categories.category_name}}</a></div>
                <div class="price d-flex align-items-center font-weight-medium font-size-2">
                  <span class="woocommerce-Price-amount amount text-primary"><span class="text-primary"> @{{row.prices.price | number}} VND</span></span>
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
      </data-owl-carousel>
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
        <a href="{{route('shop')}}" class="h-primary text-primary d-block">Xem tất cả <i class="glyph-icon flaticon-next"></i></a>
      </header>
      <data-owl-carousel class="products no-gutters owl-carousel" data-options="{loop:false, items: 5, autoplay: false, nav: true, dots: false}">
        <div owl-carousel-item="" class="product p-1 m-1" ng-repeat="row in books">
          <div class="product__inner overflow-hidden">
            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
              <div class="woocommerce-loop-product__thumbnail">
                <a href="/shop/list/@{{row.id}}" class="d-block"><img ng-src="/assets/img/books/@{{row.image}}" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
              </div>
              <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="/shop/list/@{{row.id}}">@{{row.type}}</a></div>
                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2"><a href="/shop/list/@{{row.id}}">@{{row.book_name}}</a></h2>
                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">@{{row.book_authors.length > 0 ? row.book_authors[0].authors.author_name : row.categories.category_name}}</a></div>
                <div class="price d-flex align-items-center font-weight-medium font-size-2">
                  <span class="woocommerce-Price-amount amount text-primary"><span class="text-primary"> @{{row.prices.price | number}} VND</span></span>
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
      </data-owl-carousel>
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
        <a href="{{route('shop')}}" class="h-primary text-primary d-block">Xem tất cả <i class="glyph-icon flaticon-next"></i></a>
      </header>
      <data-owl-carousel class="products no-gutters owl-carousel" data-options="{loop:false, items: 5, autoplay: false, nav: true, dots: false}">
        <div owl-carousel-item="" class="product p-1 m-1" ng-repeat="row in books">
          <div class="product__inner overflow-hidden">
            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
              <div class="woocommerce-loop-product__thumbnail">
                <a href="/shop/list/@{{row.id}}" class="d-block"><img ng-src="/assets/img/books/@{{row.image}}" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
              </div>
              <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="/shop/list/@{{row.id}}">@{{row.type}}</a></div>
                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2"><a href="/shop/list/@{{row.id}}">@{{row.book_name}}</a></h2>
                <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">@{{row.book_authors.length > 0 ? row.book_authors[0].authors.author_name : row.categories.category_name}}</a></div>
                <div class="price d-flex align-items-center font-weight-medium font-size-2">
                  <span class="woocommerce-Price-amount amount text-primary"><span class="text-primary"> @{{row.prices.price | number}} VND</span></span>
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
      </data-owl-carousel>
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