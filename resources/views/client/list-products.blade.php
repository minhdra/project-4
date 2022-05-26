@extends('_client_layout')
@section('content')
<div class="left-sidebar" ng-controller="productsController">
  <input type="text" hidden id="category_id" value="{{request()->category}}">
  <input type="text" hidden id="keyword" value="{{request()->keyword}}">
  <div class="page-header border-bottom mb-8">
    <div class="container">
      <div class="d-md-flex justify-content-between align-items-center py-4">
        <h1 class="page-title font-size-3 font-weight-medium m-0 text-lh-lg">Cửa hàng</h1>
        <nav class="woocommerce-breadcrumb font-size-2">
          <a href="{{route('home')}}" class="h-primary">Trang chủ</a>
          <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-right"></i></span>
          Cửa hàng
        </nav>
      </div>
    </div>
  </div>
  <div class="site-content space-bottom-3" id="content">
    <div class="container">
      <div class="row">
        <div id="primary" class="content-area order-2">
          <div class="shop-control-bar d-lg-flex justify-content-between align-items-center mb-5 text-center text-md-left">
            <div class="shop-control-bar__left mb-4 m-lg-0">
              <p class="woocommerce-result-count m-0">Hiển thị @{{data.length >= 12 ? 12 : data.length}} của @{{data.length}} kết quả</p>
            </div>
            <div class="shop-control-bar__right d-md-flex align-items-center">
              <form class="woocommerce-ordering mb-4 m-md-0" method="get">

                <select class="js-select selectpicker dropdown-select orderby" name="orderby" data-style="border-bottom shadow-none outline-none py-2" ng-model="option" ng-options="row.value as row.label for row in sortOptions" ng-change="sorted(option)">
                </select>

              </form>
              <ul class="nav nav-tab ml-lg-4 justify-content-center justify-content-md-start ml-md-auto" id="pills-tab" role="tablist">
                <li class="nav-item border">
                  <a class="nav-link p-0 height-38 width-38 justify-content-center d-flex align-items-center active" id="pills-one-example1-tab" data-toggle="pill" href="#pills-one-example1" role="tab" aria-controls="pills-one-example1" aria-selected="true">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="17px">
                      <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M-0.000,0.000 L3.000,0.000 L3.000,3.000 L-0.000,3.000 L-0.000,0.000 Z" />
                      <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M7.000,0.000 L10.000,0.000 L10.000,3.000 L7.000,3.000 L7.000,0.000 Z" />
                      <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M14.000,0.000 L17.000,0.000 L17.000,3.000 L14.000,3.000 L14.000,0.000 Z" />
                      <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M-0.000,7.000 L3.000,7.000 L3.000,10.000 L-0.000,10.000 L-0.000,7.000 Z" />
                      <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M7.000,7.000 L10.000,7.000 L10.000,10.000 L7.000,10.000 L7.000,7.000 Z" />
                      <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M14.000,7.000 L17.000,7.000 L17.000,10.000 L14.000,10.000 L14.000,7.000 Z" />
                      <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M-0.000,14.000 L3.000,14.000 L3.000,17.000 L-0.000,17.000 L-0.000,14.000 Z" />
                      <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M7.000,14.000 L10.000,14.000 L10.000,17.000 L7.000,17.000 L7.000,14.000 Z" />
                      <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M14.000,14.000 L17.000,14.000 L17.000,17.000 L14.000,17.000 L14.000,14.000 Z" />
                    </svg>
                  </a>
                </li>
                <li class="nav-item border">
                  <a class="nav-link p-0 height-38 width-38 justify-content-center d-flex align-items-center" id="pills-two-example1-tab" data-toggle="pill" href="#pills-two-example1" role="tab" aria-controls="pills-two-example1" aria-selected="false">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="23px" height="17px">
                      <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M-0.000,0.000 L3.000,0.000 L3.000,3.000 L-0.000,3.000 L-0.000,0.000 Z" />
                      <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M7.000,0.000 L23.000,0.000 L23.000,3.000 L7.000,3.000 L7.000,0.000 Z" />
                      <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M-0.000,7.000 L3.000,7.000 L3.000,10.000 L-0.000,10.000 L-0.000,7.000 Z" />
                      <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M7.000,7.000 L23.000,7.000 L23.000,10.000 L7.000,10.000 L7.000,7.000 Z" />
                      <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M-0.000,14.000 L3.000,14.000 L3.000,17.000 L-0.000,17.000 L-0.000,14.000 Z" />
                      <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M7.000,14.000 L23.000,14.000 L23.000,17.000 L7.000,17.000 L7.000,14.000 Z" />
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab">

              <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-lg-3 row-cols-wd-4 border-top border-left mb-6">
                <li class="product col" dir-paginate="row in data | itemsPerPage: 12">
                  <div class="product__inner overflow-hidden p-3 p-md-4d875">
                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                      <div class="woocommerce-loop-product__thumbnail">
                        <a href="/shop/list/@{{row.id}}" class="d-block"><img ng-src="/assets/img/books/@{{row.image}}" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                      </div>
                      <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="/shop/list/@{{row.id}}">@{{row.type}}</a></div>
                        <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2"><a href="/shop/list/@{{row.id}}">@{{row.book_name}}</a></h2>
                        <div class="font-size-2  mb-2 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">@{{row.book_authors.length>0?row.book_authors[0].authors.author_name:row.categories.category_name}}</a></div>
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
                </li>
              </ul>

            </div>
            <div class="tab-pane fade" id="pills-two-example1" role="tabpanel" aria-labelledby="pills-two-example1-tab">

              <ul class="products list-unstyled mb-6">
                <li class="product product__list" dir-paginate="row in data | itemsPerPage: 12">
                  <div class="product__inner overflow-hidden p-3 p-md-4d875">
                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link row position-relative">
                      <div class="col-md-auto woocommerce-loop-product__thumbnail mb-3 mb-md-0">
                        <a href="/shop/list/@{{row.id}}" class="d-block"><img ng-src="/assets/img/books/@{{row.image}}" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description" width="200px"></a>
                      </div>
                      <div class="col-md woocommerce-loop-product__body product__body pt-3 bg-white mb-3 mb-md-0">
                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="/shop/list/@{{row.id}}">@{{row.type}}</a></div>
                        <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 crop-text-2 h-dark"><a href="/shop/list/@{{row.id}}" tabindex="0">@{{row.book_name}}</a></h2>
                        <div class="font-size-2  mb-2 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">@{{row.book_authors.length>0?row.book_authors[0].authors.author_name:row.categories.category_name}}</a></div>
                        <!-- <p class="font-size-2 mb-2 crop-text-2">After disappearing for three years, Artemis Fowl has returned to a life different from the one he left. And spends his days teaching his twin siblings the</p> -->
                        <div class="price d-flex align-items-center font-weight-medium font-size-3">
                          <span class="woocommerce-Price-amount amount text-primary"><span class="text-primary"> @{{row.prices.price | number}}đ</span></span>
                        </div>
                      </div>
                      <div class="col-md-auto d-flex align-items-center">
                        <a href="/shop/list/@{{row.id}}" class="text-uppercase text-dark h-dark font-weight-medium mr-4" data-toggle="tooltip" data-placement="right" title="" data-original-title="THÊM GIỎ HÀNG">
                          <span class="product__add-to-cart">THÊM GIỎ HÀNG</span>
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
                </li>
              </ul>

            </div>
          </div>

          <dir-pagination-controls max-size="10" direction-links="true" boundary-links="true">
          </dir-pagination-controls>
        </div>
        <div id="secondary" class="sidebar widget-area order-1" role="complementary">
          <div id="widgetAccordion">
            <div id="prices" class="widget p-4d875 border woocommerce widget_product_categories">
              <div id="priceFilter" class="widget-head">
                <a class="d-flex align-items-center justify-content-between text-dark" data-toggle="collapse" data-target="#priceFilterCollapse" aria-expanded="true" aria-controls="priceFilterCollapse">
                  <h3 class="widget-title mb-0 font-weight-medium font-size-3">Khoảng giá</h3>
                  <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                  </svg>
                  <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                  </svg>
                </a>
              </div>
              <div id="priceFilterCollapse" class="mt-3 widget-content collapse show" aria-labelledby="priceFilter" data-parent="#priceFilter">
                <ul class="product-categories">
                  <li class="custom-control custom-checkbox mb-2 pb-2">
                    <input type="radio" name="prices" class="custom-control-input" id="allPrice" ng-model="priceFilter" ng-change="handleChangePriceFilter()" value="0" checked>
                    <label class="custom-control-label" for="allPrice">Tất cả</label>
                  </li>
                  <li class="custom-control custom-checkbox mb-2 pb-2">
                    <input type="radio" name="prices" class="custom-control-input" ng-model="priceFilter" ng-change="handleChangePriceFilter()" value="1" id="underHundred">
                    <label class="custom-control-label" for="underHundred">Dưới 100.000đ</label>
                  </li>
                  <li class="custom-control custom-checkbox mb-2 pb-2">
                    <input type="radio" name="prices" class="custom-control-input" ng-model="priceFilter" ng-change="handleChangePriceFilter()" value="2" id="100to200">
                    <label class="custom-control-label" for="100to200">Từ 100.000đ - 200.000đ</label>
                  </li>
                </ul>
              </div>
            </div>
            <div id="Authors" class="widget widget_search widget_author p-4d875 border">
              <div id="widgetHeading21" class="widget-head">
                <a class="d-flex align-items-center justify-content-between text-dark" data-toggle="collapse" data-target="#widgetCollapse21" aria-expanded="true" aria-controls="widgetCollapse21">
                  <h3 class="widget-title mb-0 font-weight-medium font-size-3">Tác giả</h3>
                  <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                  </svg>
                  <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                  </svg>
                </a>
              </div>
              <div id="widgetCollapse21" class="mt-4 widget-content collapse show" aria-labelledby="widgetHeading21" data-parent="#widgetHeading21">
                <form class="form-inline my-2 overflow-hidden">
                  <div class="input-group flex-nowrap w-100">
                    <div class="input-group-prepend">
                      <i class="glph-icon flaticon-loupe py-2d75 bg-white-100 border-white-100 text-dark pl-3 pr-0 rounded-0"></i>
                    </div>
                    <input class="form-control bg-white-100 py-2d75 height-4 border-white-100 rounded-0" type="search" placeholder="Search" aria-label="Search">
                  </div>
                  <button class="btn btn-outline-success my-2 my-sm-0 sr-only" type="submit">Search</button>
                </form>
                <ul class="product-categories">
                  <li class="cat-item cat-item-9 cat-parent">
                    <a href="../others/authors-single.html">Khác</a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- <div id="Language" class="widget p-4d875 border">
              <div id="widgetHeading22" class="widget-head">
                <a class="d-flex align-items-center justify-content-between text-dark" data-toggle="collapse" data-target="#widgetCollapse22" aria-expanded="true" aria-controls="widgetCollapse22">
                  <h3 class="widget-title mb-0 font-weight-medium font-size-3">Ngôn ngữ</h3>
                  <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                  </svg>
                  <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                  </svg>
                </a>
              </div>
              <div id="widgetCollapse22" class="mt-4 widget-content collapse show" aria-labelledby="widgetHeading22" data-parent="#widgetHeading22">
                <ul class="product-categories">
                  <li class="custom-control custom-checkbox mb-2 pb-2">
                    <input type="checkbox" class="custom-control-input" id="brandVietnam">
                    <label class="custom-control-label" for="brandVietnam">Tiếng việt</label>
                  </li>
                  <li class="custom-control custom-checkbox mb-2 pb-2">
                    <input type="checkbox" class="custom-control-input" id="brandEnglish">
                    <label class="custom-control-label" for="brandEnglish">English</label>
                  </li>
                  <li class="custom-control custom-checkbox mb-2 pb-2">
                    <input type="checkbox" class="custom-control-input" id="brandJapan">
                    <label class="custom-control-label" for="brandJapan">Japan</label>
                  </li>
                </ul>
              </div>
            </div> -->
            <div id="woocommerce_product_categories-2" class="widget p-4d875 border woocommerce widget_product_categories">
              <div id="widgetHeadingOne" class="widget-head">
                <a class="d-flex align-items-center justify-content-between text-dark" data-toggle="collapse" data-target="#widgetCollapseOne" aria-expanded="true" aria-controls="widgetCollapseOne">
                  <h3 class="widget-title mb-0 font-weight-medium font-size-3">Thể loại</h3>
                  <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                  </svg>
                  <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                  </svg>
                </a>
              </div>
              <div id="widgetCollapseOne" class="mt-3 widget-content collapse show" aria-labelledby="widgetHeadingOne" data-parent="#widgetHeadingOne">
                <ul class="product-categories">
                  <li class="cat-item cat-item-9 cat-parent" ng-repeat="row in categories">
                    <a href="/shop/list?keyword={{request()->keyword}}&category=@{{row.id}}">@{{row.category_name}}</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@stop

@section('js')
<script src="/assets/js/controllers/client/productsController.js"></script>
@stop