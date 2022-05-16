@extends('_client_layout')
@section('content')
<div class="left-sidebar">
  <div class="page-header border-bottom mb-8">
    <div class="container">
      <div class="d-md-flex justify-content-between align-items-center py-4">
        <h1 class="page-title font-size-3 font-weight-medium m-0 text-lh-lg">Cửa hàng</h1>
        <nav class="woocommerce-breadcrumb font-size-2">
          <a   href="{{route('home')}}" class="h-primary">Trang chủ</a>
          <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-right"></i></span>
          <a href="../shop/v3.html" class="h-primary">Cửa hàng</a>
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
              <p class="woocommerce-result-count m-0">Hiển thị 1–12 của 126 kết quả</p>
            </div>
            <div class="shop-control-bar__right d-md-flex align-items-center">
              <form class="woocommerce-ordering mb-4 m-md-0" method="get">

                <select class="js-select selectpicker dropdown-select orderby" name="orderby" data-style="border-bottom shadow-none outline-none py-2">
                  <option value="popularity">Độ phổ biến</option>
                  <option value="default" selected="selected">Mặc định</option>
                  <option value="date">Mới</option>
                  <option value="price">Giá từ thấp đến cao</option>
                  <option value="price-desc">Giá từ cao đến thấp</option>
                </select>

              </form>
              <form class="number-of-items ml-md-4 mb-4 m-md-0 d-none d-xl-block" method="get">

                <select class="js-select selectpicker dropdown-select orderby" name="orderby" data-style="border-bottom shadow-none outline-none py-2" data-width="fit">
                  <option value="show10">Hiển thị 10</option>
                  <option value="show15">Hiển thị 15</option>
                  <option value="show20" selected="selected">Hiển thị 20</option>
                  <option value="show25">Hiển thị 25</option>
                  <option value="show30">Hiển thị 30</option>
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
                <li class="product col">
                  <div class="product__inner overflow-hidden p-3 p-md-4d875">
                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                      <div class="woocommerce-loop-product__thumbnail">
                        <a   href="/shop/list/@{{row.id}}" class="d-block"><img src="../../assets/img/150x226/img1.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                      </div>
                      <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a   href="/shop/list/@{{row.id}}">Bìa mềm</a></div>
                        <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a   href="/shop/list/@{{row.id}}">Think Like a Monk: Train Your Mind for Peace and Purpose Everyday</a></h2>
                        <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                        <div class="price d-flex align-items-center font-weight-medium font-size-3">
                          <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">đ</span>50.000</span>
                        </div>
                      </div>
                      <div class="product__hover d-flex align-items-center">
                        <a   href="/shop/list/@{{row.id}}" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="" data-original-title="THÊM GIỎ HÀNG">
                          <span class="product__add-to-cart">THÊM GIỎ HÀNG</span>
                          <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                          <i class="flaticon-switch"></i>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="h-p-bg btn btn-outline-primary border-0">
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
                        <a   href="/shop/list/@{{row.id}}" class="d-block"><img src="../../assets/img/150x226/img2.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                      </div>
                      <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a   href="/shop/list/@{{row.id}}">Bìa mềm</a></div>
                        <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a   href="/shop/list/@{{row.id}}">The Overdue Life of Amy Byler</a></h2>
                        <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                        <div class="price d-flex align-items-center font-weight-medium font-size-3">
                          <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">đ</span>50.000</span>
                        </div>
                      </div>
                      <div class="product__hover d-flex align-items-center">
                        <a   href="/shop/list/@{{row.id}}" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="" data-original-title="THÊM GIỎ HÀNG">
                          <span class="product__add-to-cart">THÊM GIỎ HÀNG</span>
                          <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                          <i class="flaticon-switch"></i>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="h-p-bg btn btn-outline-primary border-0">
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
                        <a   href="/shop/list/@{{row.id}}" class="d-block"><img src="../../assets/img/150x226/img3.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                      </div>
                      <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a   href="/shop/list/@{{row.id}}">Bìa mềm</a></div>
                        <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a   href="/shop/list/@{{row.id}}">The Last Sister (Columbia River Book 1)</a></h2>
                        <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                        <div class="price d-flex align-items-center font-weight-medium font-size-3">
                          <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">đ</span>50.000</span>
                        </div>
                      </div>
                      <div class="product__hover d-flex align-items-center">
                        <a   href="/shop/list/@{{row.id}}" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="" data-original-title="THÊM GIỎ HÀNG">
                          <span class="product__add-to-cart">THÊM GIỎ HÀNG</span>
                          <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                          <i class="flaticon-switch"></i>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="h-p-bg btn btn-outline-primary border-0">
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
                        <a   href="/shop/list/@{{row.id}}" class="d-block"><img src="../../assets/img/150x226/img4.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                      </div>
                      <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a   href="/shop/list/@{{row.id}}">Bìa mềm</a></div>
                        <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a   href="/shop/list/@{{row.id}}">All You Can Ever Know: A Memoir</a></h2>
                        <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                        <div class="price d-flex align-items-center font-weight-medium font-size-3">
                          <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">đ</span>50.000</span>
                        </div>
                      </div>
                      <div class="product__hover d-flex align-items-center">
                        <a   href="/shop/list/@{{row.id}}" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="" data-original-title="THÊM GIỎ HÀNG">
                          <span class="product__add-to-cart">THÊM GIỎ HÀNG</span>
                          <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                          <i class="flaticon-switch"></i>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="h-p-bg btn btn-outline-primary border-0">
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
                        <a   href="/shop/list/@{{row.id}}" class="d-block"><img src="../../assets/img/150x226/img5.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                      </div>
                      <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a   href="/shop/list/@{{row.id}}">Bìa mềm</a></div>
                        <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a   href="/shop/list/@{{row.id}}">Think Like a Monk: Train Your Mind for Peace and Purpose Everyday</a></h2>
                        <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                        <div class="price d-flex align-items-center font-weight-medium font-size-3">
                          <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">đ</span>50.000</span>
                        </div>
                      </div>
                      <div class="product__hover d-flex align-items-center">
                        <a   href="/shop/list/@{{row.id}}" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="" data-original-title="THÊM GIỎ HÀNG">
                          <span class="product__add-to-cart">THÊM GIỎ HÀNG</span>
                          <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                          <i class="flaticon-switch"></i>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="h-p-bg btn btn-outline-primary border-0">
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
                        <a   href="/shop/list/@{{row.id}}" class="d-block"><img src="../../assets/img/150x226/img6.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                      </div>
                      <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a   href="/shop/list/@{{row.id}}">Bìa mềm</a></div>
                        <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a   href="/shop/list/@{{row.id}}">The Overdue Life of Amy Byler</a></h2>
                        <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                        <div class="price d-flex align-items-center font-weight-medium font-size-3">
                          <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">đ</span>50.000</span>
                        </div>
                      </div>
                      <div class="product__hover d-flex align-items-center">
                        <a   href="/shop/list/@{{row.id}}" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="" data-original-title="THÊM GIỎ HÀNG">
                          <span class="product__add-to-cart">THÊM GIỎ HÀNG</span>
                          <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                          <i class="flaticon-switch"></i>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="h-p-bg btn btn-outline-primary border-0">
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
                        <a   href="/shop/list/@{{row.id}}" class="d-block"><img src="../../assets/img/150x226/img7.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                      </div>
                      <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a   href="/shop/list/@{{row.id}}">Bìa mềm</a></div>
                        <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a   href="/shop/list/@{{row.id}}">The Last Sister (Columbia River Book 1)</a></h2>
                        <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                        <div class="price d-flex align-items-center font-weight-medium font-size-3">
                          <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">đ</span>50.000</span>
                        </div>
                      </div>
                      <div class="product__hover d-flex align-items-center">
                        <a   href="/shop/list/@{{row.id}}" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="" data-original-title="THÊM GIỎ HÀNG">
                          <span class="product__add-to-cart">THÊM GIỎ HÀNG</span>
                          <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                          <i class="flaticon-switch"></i>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="h-p-bg btn btn-outline-primary border-0">
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
                        <a   href="/shop/list/@{{row.id}}" class="d-block"><img src="../../assets/img/150x226/img8.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                      </div>
                      <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a   href="/shop/list/@{{row.id}}">Bìa mềm</a></div>
                        <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a   href="/shop/list/@{{row.id}}">All You Can Ever Know: A Memoir</a></h2>
                        <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                        <div class="price d-flex align-items-center font-weight-medium font-size-3">
                          <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">đ</span>50.000</span>
                        </div>
                      </div>
                      <div class="product__hover d-flex align-items-center">
                        <a   href="/shop/list/@{{row.id}}" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="" data-original-title="THÊM GIỎ HÀNG">
                          <span class="product__add-to-cart">THÊM GIỎ HÀNG</span>
                          <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                          <i class="flaticon-switch"></i>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="h-p-bg btn btn-outline-primary border-0">
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
                        <a   href="/shop/list/@{{row.id}}" class="d-block"><img src="../../assets/img/150x226/img9.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                      </div>
                      <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a   href="/shop/list/@{{row.id}}">Bìa mềm</a></div>
                        <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a   href="/shop/list/@{{row.id}}">Think Like a Monk: Train Your Mind for Peace and Purpose Everyday</a></h2>
                        <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                        <div class="price d-flex align-items-center font-weight-medium font-size-3">
                          <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">đ</span>50.000</span>
                        </div>
                      </div>
                      <div class="product__hover d-flex align-items-center">
                        <a   href="/shop/list/@{{row.id}}" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="" data-original-title="THÊM GIỎ HÀNG">
                          <span class="product__add-to-cart">THÊM GIỎ HÀNG</span>
                          <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                          <i class="flaticon-switch"></i>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="h-p-bg btn btn-outline-primary border-0">
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
                        <a   href="/shop/list/@{{row.id}}" class="d-block"><img src="../../assets/img/150x226/img10.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                      </div>
                      <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a   href="/shop/list/@{{row.id}}">Bìa mềm</a></div>
                        <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a   href="/shop/list/@{{row.id}}">The Overdue Life of Amy Byler</a></h2>
                        <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                        <div class="price d-flex align-items-center font-weight-medium font-size-3">
                          <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">đ</span>50.000</span>
                        </div>
                      </div>
                      <div class="product__hover d-flex align-items-center">
                        <a   href="/shop/list/@{{row.id}}" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="" data-original-title="THÊM GIỎ HÀNG">
                          <span class="product__add-to-cart">THÊM GIỎ HÀNG</span>
                          <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                          <i class="flaticon-switch"></i>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="h-p-bg btn btn-outline-primary border-0">
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
                        <a   href="/shop/list/@{{row.id}}" class="d-block"><img src="../../assets/img/150x226/img1.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                      </div>
                      <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a   href="/shop/list/@{{row.id}}">Bìa mềm</a></div>
                        <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a   href="/shop/list/@{{row.id}}">The Last Sister (Columbia River Book 1)</a></h2>
                        <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                        <div class="price d-flex align-items-center font-weight-medium font-size-3">
                          <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">đ</span>50.000</span>
                        </div>
                      </div>
                      <div class="product__hover d-flex align-items-center">
                        <a   href="/shop/list/@{{row.id}}" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="" data-original-title="THÊM GIỎ HÀNG">
                          <span class="product__add-to-cart">THÊM GIỎ HÀNG</span>
                          <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                          <i class="flaticon-switch"></i>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="h-p-bg btn btn-outline-primary border-0">
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
                        <a   href="/shop/list/@{{row.id}}" class="d-block"><img src="../../assets/img/150x226/img7.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                      </div>
                      <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a   href="/shop/list/@{{row.id}}">Bìa mềm</a></div>
                        <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a   href="/shop/list/@{{row.id}}">All You Can Ever Know: A Memoir</a></h2>
                        <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                        <div class="price d-flex align-items-center font-weight-medium font-size-3">
                          <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">đ</span>50.000</span>
                        </div>
                      </div>
                      <div class="product__hover d-flex align-items-center">
                        <a   href="/shop/list/@{{row.id}}" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="" data-original-title="THÊM GIỎ HÀNG">
                          <span class="product__add-to-cart">THÊM GIỎ HÀNG</span>
                          <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                          <i class="flaticon-switch"></i>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="h-p-bg btn btn-outline-primary border-0">
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
                <li class="product product__list">
                  <div class="product__inner overflow-hidden p-3 p-md-4d875">
                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link row position-relative">
                      <div class="col-md-auto woocommerce-loop-product__thumbnail mb-3 mb-md-0">
                        <a   href="/shop/list/@{{row.id}}" class="d-block"><img src="../../assets/img/150x226/img1.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                      </div>
                      <div class="col-md woocommerce-loop-product__body product__body pt-3 bg-white mb-3 mb-md-0">
                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a   href="/shop/list/@{{row.id}}">Bìa mềm</a></div>
                        <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 crop-text-2 h-dark"><a   href="/shop/list/@{{row.id}}" tabindex="0">The Overdue Life of Amy Byler</a></h2>
                        <div class="font-size-2  mb-2 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                        <p class="font-size-2 mb-2 crop-text-2">After disappearing for three years, Artemis Fowl has returned to a life different from the one he left. And spends his days teaching his twin siblings the</p>
                        <div class="price d-flex align-items-center font-weight-medium font-size-3">
                          <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">đ</span>50.000</span>
                        </div>
                      </div>
                      <div class="col-md-auto d-flex align-items-center">
                        <a   href="/shop/list/@{{row.id}}" class="text-uppercase text-dark h-dark font-weight-medium mr-4" data-toggle="tooltip" data-placement="right" title="" data-original-title="THÊM GIỎ HÀNG">
                          <span class="product__add-to-cart">THÊM GIỎ HÀNG</span>
                          <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                          <i class="flaticon-switch"></i>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="h-p-bg btn btn-outline-primary border-0">
                          <i class="flaticon-heart"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="product product__list">
                  <div class="product__inner overflow-hidden p-3 p-md-4d875">
                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link row position-relative">
                      <div class="col-md-auto woocommerce-loop-product__thumbnail mb-3 mb-md-0">
                        <a   href="/shop/list/@{{row.id}}" class="d-block"><img src="../../assets/img/150x226/img2.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                      </div>
                      <div class="col-md woocommerce-loop-product__body product__body pt-3 bg-white mb-3 mb-md-0">
                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a   href="/shop/list/@{{row.id}}">Bìa mềm</a></div>
                        <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 crop-text-2 h-dark"><a   href="/shop/list/@{{row.id}}" tabindex="0">All You Can Ever Know: A Memoir</a></h2>
                        <div class="font-size-2  mb-2 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                        <p class="font-size-2 mb-2 crop-text-2">After disappearing for three years, Artemis Fowl has returned to a life different from the one he left. And spends his days teaching his twin siblings the</p>
                        <div class="price d-flex align-items-center font-weight-medium font-size-3">
                          <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">đ</span>50.000</span>
                        </div>
                      </div>
                      <div class="col-md-auto d-flex align-items-center">
                        <a   href="/shop/list/@{{row.id}}" class="text-uppercase text-dark h-dark font-weight-medium mr-4" data-toggle="tooltip" data-placement="right" title="" data-original-title="THÊM GIỎ HÀNG">
                          <span class="product__add-to-cart">THÊM GIỎ HÀNG</span>
                          <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                          <i class="flaticon-switch"></i>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="h-p-bg btn btn-outline-primary border-0">
                          <i class="flaticon-heart"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="product product__list">
                  <div class="product__inner overflow-hidden p-3 p-md-4d875">
                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link row position-relative">
                      <div class="col-md-auto woocommerce-loop-product__thumbnail mb-3 mb-md-0">
                        <a   href="/shop/list/@{{row.id}}" class="d-block"><img src="../../assets/img/150x226/img3.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                      </div>
                      <div class="col-md woocommerce-loop-product__body product__body pt-3 bg-white mb-3 mb-md-0">
                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a   href="/shop/list/@{{row.id}}">Bìa mềm</a></div>
                        <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 crop-text-2 h-dark"><a   href="/shop/list/@{{row.id}}" tabindex="0">The Cinderella Reversal</a></h2>
                        <div class="font-size-2  mb-2 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                        <p class="font-size-2 mb-2 crop-text-2">After disappearing for three years, Artemis Fowl has returned to a life different from the one he left. And spends his days teaching his twin siblings the</p>
                        <div class="price d-flex align-items-center font-weight-medium font-size-3">
                          <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">đ</span>50.000</span>
                        </div>
                      </div>
                      <div class="col-md-auto d-flex align-items-center">
                        <a   href="/shop/list/@{{row.id}}" class="text-uppercase text-dark h-dark font-weight-medium mr-4" data-toggle="tooltip" data-placement="right" title="" data-original-title="THÊM GIỎ HÀNG">
                          <span class="product__add-to-cart">THÊM GIỎ HÀNG</span>
                          <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                          <i class="flaticon-switch"></i>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="h-p-bg btn btn-outline-primary border-0">
                          <i class="flaticon-heart"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="product product__list">
                  <div class="product__inner overflow-hidden p-3 p-md-4d875">
                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link row position-relative">
                      <div class="col-md-auto woocommerce-loop-product__thumbnail mb-3 mb-md-0">
                        <a   href="/shop/list/@{{row.id}}" class="d-block"><img src="../../assets/img/150x226/img4.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                      </div>
                      <div class="col-md woocommerce-loop-product__body product__body pt-3 bg-white mb-3 mb-md-0">
                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a   href="/shop/list/@{{row.id}}">Bìa mềm</a></div>
                        <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 crop-text-2 h-dark"><a   href="/shop/list/@{{row.id}}" tabindex="0">Scot Under the Covers: The Wild Wicked</a></h2>
                        <div class="font-size-2  mb-2 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                        <p class="font-size-2 mb-2 crop-text-2">After disappearing for three years, Artemis Fowl has returned to a life different from the one he left. And spends his days teaching his twin siblings the</p>
                        <div class="price d-flex align-items-center font-weight-medium font-size-3">
                          <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">đ</span>50.000</span>
                        </div>
                      </div>
                      <div class="col-md-auto d-flex align-items-center">
                        <a   href="/shop/list/@{{row.id}}" class="text-uppercase text-dark h-dark font-weight-medium mr-4" data-toggle="tooltip" data-placement="right" title="" data-original-title="THÊM GIỎ HÀNG">
                          <span class="product__add-to-cart">THÊM GIỎ HÀNG</span>
                          <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                          <i class="flaticon-switch"></i>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="h-p-bg btn btn-outline-primary border-0">
                          <i class="flaticon-heart"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="product product__list">
                  <div class="product__inner overflow-hidden p-3 p-md-4d875">
                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link row position-relative">
                      <div class="col-md-auto woocommerce-loop-product__thumbnail mb-3 mb-md-0">
                        <a   href="/shop/list/@{{row.id}}" class="d-block"><img src="../../assets/img/150x226/img5.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                      </div>
                      <div class="col-md woocommerce-loop-product__body product__body pt-3 bg-white mb-3 mb-md-0">
                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a   href="/shop/list/@{{row.id}}">Bìa mềm</a></div>
                        <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 crop-text-2 h-dark"><a   href="/shop/list/@{{row.id}}" tabindex="0">Winter Garden</a></h2>
                        <div class="font-size-2  mb-2 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                        <p class="font-size-2 mb-2 crop-text-2">After disappearing for three years, Artemis Fowl has returned to a life different from the one he left. And spends his days teaching his twin siblings the</p>
                        <div class="price d-flex align-items-center font-weight-medium font-size-3">
                          <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">đ</span>50.000</span>
                        </div>
                      </div>
                      <div class="col-md-auto d-flex align-items-center">
                        <a   href="/shop/list/@{{row.id}}" class="text-uppercase text-dark h-dark font-weight-medium mr-4" data-toggle="tooltip" data-placement="right" title="" data-original-title="THÊM GIỎ HÀNG">
                          <span class="product__add-to-cart">THÊM GIỎ HÀNG</span>
                          <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                          <i class="flaticon-switch"></i>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="h-p-bg btn btn-outline-primary border-0">
                          <i class="flaticon-heart"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="product product__list">
                  <div class="product__inner overflow-hidden p-3 p-md-4d875">
                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link row position-relative">
                      <div class="col-md-auto woocommerce-loop-product__thumbnail mb-3 mb-md-0">
                        <a   href="/shop/list/@{{row.id}}" class="d-block"><img src="../../assets/img/150x226/img6.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                      </div>
                      <div class="col-md woocommerce-loop-product__body product__body pt-3 bg-white mb-3 mb-md-0">
                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a   href="/shop/list/@{{row.id}}">Bìa mềm</a></div>
                        <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 crop-text-2 h-dark"><a   href="/shop/list/@{{row.id}}" tabindex="0">Call Me By Your Name</a></h2>
                        <div class="font-size-2  mb-2 text-truncate"><a href="../others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                        <p class="font-size-2 mb-2 crop-text-2">After disappearing for three years, Artemis Fowl has returned to a life different from the one he left. And spends his days teaching his twin siblings the</p>
                        <div class="price d-flex align-items-center font-weight-medium font-size-3">
                          <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">đ</span>50.000</span>
                        </div>
                      </div>
                      <div class="col-md-auto d-flex align-items-center">
                        <a   href="/shop/list/@{{row.id}}" class="text-uppercase text-dark h-dark font-weight-medium mr-4" data-toggle="tooltip" data-placement="right" title="" data-original-title="THÊM GIỎ HÀNG">
                          <span class="product__add-to-cart">THÊM GIỎ HÀNG</span>
                          <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                          <i class="flaticon-switch"></i>
                        </a>
                        <a   href="/shop/list/@{{row.id}}" class="h-p-bg btn btn-outline-primary border-0">
                          <i class="flaticon-heart"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>

            </div>
          </div>

          <nav aria-label="Page navigation example">
            <ul class="pagination pagination__custom justify-content-md-center flex-nowrap flex-md-wrap overflow-auto overflow-md-visble">
              <li class="flex-shrink-0 flex-md-shrink-1 page-item"><a class="page-link" href="#">Trước</a></li>
              <li class="flex-shrink-0 flex-md-shrink-1 page-item"><a class="page-link" href="#">1</a></li>
              <li class="flex-shrink-0 flex-md-shrink-1 page-item"><a class="page-link" href="#">2</a></li>
              <li class="flex-shrink-0 flex-md-shrink-1 page-item active" aria-current="page"><a class="page-link" href="#">3</a></li>
              <li class="flex-shrink-0 flex-md-shrink-1 page-item"><a class="page-link" href="#">4</a></li>
              <li class="flex-shrink-0 flex-md-shrink-1 page-item"><a class="page-link" href="#">5</a></li>
              <li class="flex-shrink-0 flex-md-shrink-1 page-item"><a class="page-link" href="#">Sau</a></li>
            </ul>
          </nav>
        </div>
        <div id="secondary" class="sidebar widget-area order-1" role="complementary">
          <div id="widgetAccordion">
            <div id="woocommerce_product_categories-2" class="widget p-4d875 border woocommerce widget_product_categories">
              <div id="widgetHeadingOne" class="widget-head">
                <a class="d-flex align-items-center justify-content-between text-dark" href="#" data-toggle="collapse" data-target="#widgetCollapseOne" aria-expanded="true" aria-controls="widgetCollapseOne">
                  <h3 class="widget-title mb-0 font-weight-medium font-size-3">Thể loại</h3>
                  <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                  </svg>
                  <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                  </svg>
                </a>
              </div>
              <div id="widgetCollapseOne" class="mt-3 widget-content collapse show" aria-labelledby="widgetHeadingOne" data-parent="#widgetAccordion">
                <ul class="product-categories">
                  <li class="cat-item cat-item-9 cat-parent">
                    <a href="../shop/v3.html">Học đường</a>
                  </li>
                  <li class="cat-item cat-item-69 cat-parent">
                    <a href="../shop/v3.html">Lãng mạn</a>
                  </li>
                  <li class="cat-item cat-item-65 cat-parent">
                    <a href="../shop/v3.html">Trinh thám</a>
                  </li>
                  <li class="cat-item cat-item-11 cat-parent"><a href="../shop/v3.html">Hài hước</a>
                  </li>
                  <li class="cat-item cat-item-12"><a href="../shop/v3.html">Giả tưởng</a></li>
                  <li class="cat-item cat-item-31"><a href="../shop/v3.html">Xuyên không</a></li>
                  <li class="cat-item cat-item-45"><a href="../shop/v3.html">Shounen</a></li>
                </ul>
              </div>
            </div>
            <div id="Authors" class="widget widget_search widget_author p-4d875 border">
              <div id="widgetHeading21" class="widget-head">
                <a class="d-flex align-items-center justify-content-between text-dark" href="#" data-toggle="collapse" data-target="#widgetCollapse21" aria-expanded="true" aria-controls="widgetCollapse21">
                  <h3 class="widget-title mb-0 font-weight-medium font-size-3">Tác giả</h3>
                  <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                  </svg>
                  <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                  </svg>
                </a>
              </div>
              <div id="widgetCollapse21" class="mt-4 widget-content collapse show" aria-labelledby="widgetHeading21" data-parent="#widgetAccordion">
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
                    <a href="../others/authors-single.html">A. J. Finn</a>
                  </li>
                  <li class="cat-item cat-item-69 cat-parent">
                    <a href="../others/authors-single.html">Anne Frank</a>
                  </li>
                  <li class="cat-item cat-item-65 cat-parent">
                    <a href="../others/authors-single.html">Camille Pagán</a>
                  </li>
                  <li class="cat-item cat-item-11 cat-parent"><a href="../others/authors-single.html">Daniel H. Pink</a>
                  </li>
                  <li class="cat-item cat-item-12"><a href="../others/authors-single.html">Danielle Steel</a></li>
                  <li class="cat-item cat-item-31"><a href="../others/authors-single.html">David Quammen</a></li>
                </ul>
              </div>
            </div>
            <div id="Language" class="widget p-4d875 border">
              <div id="widgetHeading22" class="widget-head">
                <a class="d-flex align-items-center justify-content-between text-dark" href="#" data-toggle="collapse" data-target="#widgetCollapse22" aria-expanded="true" aria-controls="widgetCollapse22">
                  <h3 class="widget-title mb-0 font-weight-medium font-size-3">Ngôn ngữ</h3>
                  <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                  </svg>
                  <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                  </svg>
                </a>
              </div>
              <div id="widgetCollapse22" class="mt-4 widget-content collapse show" aria-labelledby="widgetHeading22" data-parent="#widgetAccordion">
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
            </div>
            <div id="Format" class="widget p-4d875 border">
              <div id="widgetHeading23" class="widget-head">
                <a class="d-flex align-items-center justify-content-between text-dark" href="#" data-toggle="collapse" data-target="#widgetCollapse23" aria-expanded="true" aria-controls="widgetCollapse23">
                  <h3 class="widget-title mb-0 font-weight-medium font-size-3">Kiểu sách</h3>
                  <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                  </svg>
                  <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                  </svg>
                </a>
              </div>
              <div id="widgetCollapse23" class="mt-3 widget-content collapse show" aria-labelledby="widgetHeading23" data-parent="#widgetAccordion">
                <ul class="product-categories">
                  <li class="cat-item cat-item-65 cat-parent">
                    <a href="../shop/v3.html">Bìa cứng</a>
                  </li>
                  <li class="cat-item cat-item-11 cat-parent"><a href="../shop/v3.html">Kindle</a>
                  </li>
                  <li class="cat-item cat-item-12"><a href="../shop/v3.html">Bìa mềm</a></li>
                </ul>
              </div>
            </div>
            <div id="woocommerce_price_filter-2" class="widget p-4d875 border woocommerce widget_price_filter">
              <div id="widgetHeadingTwo" class="widget-head">
                <a class="d-flex align-items-center justify-content-between text-dark" href="#" data-toggle="collapse" data-target="#widgetCollapseTwo" aria-expanded="true" aria-controls="widgetCollapseTwo">
                  <h3 class="widget-title mb-0 font-weight-medium font-size-3">Lọc theo giá</h3>
                  <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                  </svg>
                  <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                  </svg>
                </a>
              </div>
              <div id="widgetCollapseTwo" class="mt-4 widget-content collapse show" aria-labelledby="widgetHeadingTwo" data-parent="#widgetAccordion">
                <form method="get" action="https://themes.woocommerce.com/storefront/shop/">
                  <div class="price_slider_wrapper">
                    <div class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" style="">
                      <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 98%;"></span>
                    </div>
                    <div class="price_slider_amount">
                      <input type="text" id="min_price" name="min_price" value="2" data-min="2" placeholder="Min price" style="display: none;">
                      <input type="text" id="max_price" name="max_price" value="1495" data-max="1495" placeholder="Max price" style="display: none;">
                      <button type="submit" class="button d-none">Lọc</button>
                      <div class="mx-auto price_label mt-2" style="">
                        Giá: <span class="from">đ20.000</span> — <span class="to">đ100.000</span>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div id="Review" class="widget p-4d875 border">
              <div id="widgetHeading24" class="widget-head">
                <a class="d-flex align-items-center justify-content-between text-dark" href="#" data-toggle="collapse" data-target="#widgetCollapse24" aria-expanded="true" aria-controls="widgetCollapse24">
                  <h3 class="widget-title mb-0 font-weight-medium font-size-3">Theo đánh giá</h3>
                  <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                  </svg>
                  <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                  </svg>
                </a>
              </div>
              <div id="widgetCollapse24" class="mt-4 widget-content collapse show" aria-labelledby="widgetHeading24" data-parent="#widgetAccordion">
                <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-2 pb-1">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="rating5">
                    <label class="custom-control-label" for="rating5">
                      <span class="d-block text-yellow-darker mt-plus-3">
                        <span class="fas fa-star font-size-2 mr-1"></span>
                        <span class="fas fa-star font-size-2 mr-1"></span>
                        <span class="fas fa-star font-size-2 mr-1"></span>
                        <span class="fas fa-star font-size-2 mr-1"></span>
                        <span class="fas fa-star font-size-2 "></span>
                      </span>
                    </label>
                  </div>
                  <small class="font-size-2 text-gray-600">24</small>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-2 pb-1">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="rating4">
                    <label class="custom-control-label" for="rating4">
                      <span class="d-block text-yellow-darker mt-plus-3">
                        <span class="fas fa-star font-size-2 mr-1"></span>
                        <span class="fas fa-star font-size-2 mr-1"></span>
                        <span class="fas fa-star font-size-2 mr-1"></span>
                        <span class="fas fa-star font-size-2 mr-1"></span>
                        <span class="far fa-star font-size-2 "></span>
                      </span>
                    </label>
                  </div>
                  <small class="font-size-2 text-gray-600">15</small>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-2 pb-1">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="rating3">
                    <label class="custom-control-label" for="rating3">
                      <span class="d-block text-yellow-darker mt-plus-3">
                        <span class="fas fa-star font-size-2 mr-1"></span>
                        <span class="fas fa-star font-size-2 mr-1"></span>
                        <span class="fas fa-star font-size-2 mr-1"></span>
                        <span class="far fa-star font-size-2 mr-1"></span>
                        <span class="far fa-star font-size-2 "></span>
                      </span>
                    </label>
                  </div>
                  <small class="font-size-2 text-gray-600">43</small>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-2 pb-1">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="rating2">
                    <label class="custom-control-label" for="rating2">
                      <span class="d-block text-yellow-darker mt-plus-3">
                        <span class="fas fa-star font-size-2 mr-1"></span>
                        <span class="fas fa-star font-size-2 mr-1"></span>
                        <span class="far fa-star font-size-2 mr-1"></span>
                        <span class="far fa-star font-size-2 mr-1"></span>
                        <span class="far fa-star font-size-2"></span>
                      </span>
                    </label>
                  </div>
                  <small class="font-size-2 text-gray-600">78</small>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-0">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="rating1">
                    <label class="custom-control-label" for="rating1">
                      <span class="d-block text-yellow-darker mt-plus-3">
                        <span class="fas fa-star font-size-2 mr-1"></span>
                        <span class="far fa-star font-size-2 mr-1"></span>
                        <span class="far fa-star font-size-2 mr-1"></span>
                        <span class="far fa-star font-size-2 mr-1"></span>
                        <span class="far fa-star font-size-2"></span>
                      </span>
                    </label>
                  </div>
                  <small class="font-size-2 text-gray-600">21</small>
                </div>
              </div>
            </div>
            <div id="Featuredbooks" class="widget p-4d875 border">
              <div id="widgetHeading25" class="widget-head">
                <a class="d-flex align-items-center justify-content-between text-dark" href="#" data-toggle="collapse" data-target="#widgetCollapse25" aria-expanded="true" aria-controls="widgetCollapse25">
                  <h3 class="widget-title mb-0 font-weight-medium font-size-3">Sách nổi bật</h3>
                  <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                  </svg>
                  <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                  </svg>
                </a>
              </div>
              <div id="widgetCollapse25" class="mt-5 widget-content collapse show" aria-labelledby="widgetHeading25" data-parent="#widgetAccordion">
                <div class="mb-5">
                  <div class="media d-md-flex">
                    <a class="d-block" href="../shop/single-product-v3.html">
                      <img class="img-fluid" src="../../assets/img/60x92/img1.jpg" alt="Image-Description">
                    </a>
                    <div class="media-body ml-3 pl-1">
                      <h6 class="font-size-2 text-lh-md font-weight-normal">
                        <a href="../shop/single-product-v3.html">Lessons Learned from 15 Years as CEO...</a>
                      </h6>
                      <span class="font-weight-medium">đ37</span>
                    </div>
                  </div>
                </div>
                <div class="mb-5">
                  <div class="media d-md-flex">
                    <a class="d-block" href="../shop/single-product-v3.html">
                      <img class="img-fluid" src="../../assets/img/60x92/img2.jpg" alt="Image-Description">
                    </a>
                    <div class="media-body ml-3 pl-1">
                      <h6 class="font-size-2 text-lh-md font-weight-normal">
                        <a href="../shop/single-product-v3.html">Love, Livestock, and Big Life Lessons...</a>
                      </h6>
                      <span class="font-weight-medium">đ21</span>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="media d-md-flex">
                    <a class="d-block" href="../shop/single-product-v3.html">
                      <img class="img-fluid" src="../../assets/img/60x92/img3.jpg" alt="Image-Description">
                    </a>
                    <div class="media-body ml-3 pl-1">
                      <h6 class="font-size-2 text-lh-md font-weight-normal">
                        <a href="../shop/single-product-v3.html">Sleeper Cells, Ghost Stories, and Hunt...</a>
                      </h6>
                      <span class="font-weight-medium">đ182</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@stop