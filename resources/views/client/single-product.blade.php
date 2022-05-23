@extends('_client_layout')
@section('content')

<div class="m-auto" ng-controller="singleBookController" ng-init="loadData()" style="max-width: 1200px;">
  <input type="text" id="book-id" hidden value="{{$id}}">
  <div class="page-header border-bottom">
    <div class="container">
      <div class="d-md-flex justify-content-between align-items-center py-4">
        <h1 class="page-title font-size-3 font-weight-medium mb-md-0 text-lh-lg">Chi tiết</h1>
        <nav class="woocommerce-breadcrumb font-size-2">
          <a href="{{route('home')}}" class="h-primary font-weight-medium">Trang chủ</a>
          <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-right"></i></span>
          <a href="{{route('shop')}}" class="h-primary font-weight-medium">Cửa hàng</a>
          <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-right"></i></span>Chi tiết
        </nav>
      </div>
    </div>
  </div>
  <div id="primary" class="content-area">
    <main id="main" class="site-main ">
      <div class="product">
        <div class="">
          <div class="container">
            <div class="row">
              <div class="col-md-4 col-wd-5 woocommerce-product-gallery woocommerce-product-gallery--with-images images">
                <figure class="woocommerce-product-gallery__wrapper pt-8 mb-0">
                  <div class="u-slick" data-pagi-classes="text-center u-slick__pagination my-4">
                    <div class="js-slide text-right">
                      <img ng-src="/assets/img/books/@{{item.image}}" width="300px" alt="Image Description" class="mx-auto img-fluid">
                    </div>
                  </div>
                </figure>
              </div>
              <div class="col-md-8 col-wd-7 pl-0 summary entry-summary">
                <div class="space-top-2 px-4 px-xl-5 px-wd-7 pb-5">
                  <h1 class="product_title entry-title font-size-6 mb-3">@{{item.book_name}}</h1>
                  <div class="font-size-2 mb-4">
                    <span class="text-yellow-darker">
                      <span class="fas fa-star"></span>
                      <span class="fas fa-star"></span>
                      <span class="fas fa-star"></span>
                      <span class="fas fa-star"></span>
                      <span class="fas fa-star"></span>
                    </span>
                    <span class="ml-3">(1)</span> |
                    <span class="ml-3 font-weight-medium text-gray-600">Đã bán:</span>
                    <span class="ml-2 "><strong>@{{40}}</strong></span>
                  </div>
                  <p class="price font-size-22 font-weight-medium mb-3">
                    <!-- <span class="woocommerce-Price-amount amount">
                      <span class="woocommerce-Price-currencySymbol">$</span>29.95
                    </span> – -->
                    <span class="woocommerce-Price-amount amount">
                      <span class="woocommerce-Price-currencySymbol">đ</span>
                      <span class="text-primary"><strong>@{{item.prices.price | number}}</strong></span>
                    </span>
                  </p>
                  <div class="d-flex flex-wrap">
                    <div class="pr-4 border-right">
                      <div class="font-size-2 mb-4">
                        <span class="font-weight-medium text-gray-600">Tác giả:</span>
                        <span class="ml-2 "><strong><a href="#">@{{item.authors.author_name}}</a></strong></span>
                      </div>
                      <div class="font-size-2 mb-4">
                        <span class="font-weight-medium text-gray-600">Thể loại:</span>
                        <span class="ml-2 "><strong><a href="#">@{{item.categories.category_name}}</a></strong></span>
                      </div>
                      <div class="font-size-2 mb-4">
                        <span class="font-weight-medium text-gray-600">Isbn:</span>
                        <span class="ml-2 "><strong>@{{item.isnb}}</strong></span>
                      </div>
                      <div class="font-size-2 mb-4">
                        <span class="font-weight-medium text-gray-600">Đối tượng: </span>
                        <span class="ml-2 "><strong>@{{item.publishers.publisher_name}}</strong></span>
                      </div>
                      <div class="font-size-2 mb-4">
                        <span class="font-weight-medium text-gray-600">Nhà xuất bản:</span>
                        <span class="ml-2 "><strong>@{{item.publishers.publisher_name}}</strong></span>
                      </div>
                      <div class="font-size-2 mb-4">
                        <span class="font-weight-medium text-gray-600">Số trang:</span>
                        <span class="ml-2 "><strong>@{{item.numpages}}</strong></span>
                      </div>
                      <div class="font-size-2 mb-4">
                        <span class="font-weight-medium text-gray-600">Khuôn khổ:</span>
                        <span class="ml-2 "><strong>@{{item.dimensions.indexOf('cm') < 0 ? item.dimensions + 'cm' : item.dimensions}}</strong></span>
                      </div>
                      <div class="font-size-2 mb-4">
                        <span class="font-weight-medium text-gray-600">Trọng lượng:</span>
                        <span class="ml-2 "><strong>@{{item.weight}} gam</strong></span>
                      </div>
                    </div>
                    <div class="pl-4">
                      <div class="cart">
                        <div class="quantity mb-4 mb-md-0 d-flex align-items-center">

                          <div class="border px-3 width-120">
                            <div class="js-quantity">
                              <div class="d-flex align-items-center">
                                <label class="screen-reader-text sr-only">Số lượng</label>
                                <a class="js-minus text-dark" href="javascript:;" ng-click="changeQuantity(0)">
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" height="1px">
                                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M-0.000,-0.000 L10.000,-0.000 L10.000,1.000 L-0.000,1.000 L-0.000,-0.000 Z" />
                                  </svg>
                                </a>
                                <input type="text" class="input-text qty text js-result form-control text-center border-0" name="quantity" ng-model="quantity" title="Quantity" style="pointer-events: none;">
                                <a class="js-plus text-dark" href="javascript:;" ng-click="changeQuantity(1)">
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" height="10px">
                                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M10.000,5.000 L6.000,5.000 L6.000,10.000 L5.000,10.000 L5.000,5.000 L-0.000,5.000 L-0.000,4.000 L5.000,4.000 L5.000,-0.000 L6.000,-0.000 L6.000,4.000 L10.000,4.000 L10.000,5.000 Z" />
                                  </svg>
                                </a>
                              </div>
                            </div>
                          </div>

                        </div>
                        <br>
                        <button type="submit" name="add-to-cart" value="7145" class="mb-4 mb-md-0 btn btn-primary border-0 rounded p-2 min-width-250 single_add_to_cart_button button alt" ng-click="addCart()">Thêm vào giỏ</button>
                        <!-- <ul class="list-unstyled nav ml-xl-5 mt-md-4 mt-xl-0">
                          <li class="mr-6 mb-4 mb-md-0">
                            <a href="#" class="h-primary"><i class="flaticon-heart mr-2"></i> Add to Wishlist</a>
                          </li>
                        </ul> -->
                      </div>
                    </div>
                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="woocommerce-tabs wc-tabs-wrapper mb-10">

          <ul class="tabs wc-tabs nav pb-6 justify-content-md-center flex-nowrap flex-md-wrap overflow-auto overflow-md-visble" id="pills-tab" role="tablist">
            <li class="flex-shrink-0 flex-md-shrink-1 nav-item">
              <a class="py-2 nav-link font-weight-medium active" id="pills-one-example1-tab" data-toggle="pill" href="#pills-one-example1" role="tab" aria-controls="pills-one-example1" aria-selected="true">
                Mô tả sản phẩm
              </a>
            </li>
            <li class="flex-shrink-0 flex-md-shrink-1 nav-item">
              <a class="py-2 nav-link font-weight-medium" id="pills-four-example1-tab" data-toggle="pill" href="#pills-four-example1" role="tab" aria-controls="pills-four-example1" aria-selected="false">
                Đánh giá (0)
              </a>
            </li>
          </ul>


          <div class="tab-content container" id="pills-tabContent">
            <div id="des-single" class="woocommerce-Tabs-panel panel col-xl-8 offset-xl-2 entry-content wc-tab tab-pane fade show active" role="tabpanel" aria-labelledby="pills-one-example1-tab">

            </div>
            <div class="woocommerce-Tabs-panel panel col-xl-8 offset-xl-2 entry-content wc-tab tab-pane fade pt-9" id="pills-four-example1" role="tabpanel" aria-labelledby="pills-four-example1-tab">

              <h4 class="font-size-3">Khách hàng đánh giá </h4>
              <div class="row mb-8">
                <div class="col-md-6 mb-6 mb-md-0">
                  <div class="d-flex  align-items-center mb-4">
                    <span class="font-size-15 font-weight-bold">4.6</span>
                    <div class="ml-3 h6 mb-0">
                      <span class="font-weight-normal">400 đánh giá</span>
                      <div class="text-yellow-darker">
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="far fa-star"></small>
                      </div>
                    </div>
                  </div>
                  <div class="d-md-flex">
                    <button type="button" class="btn btn-outline-dark rounded-0 px-5 mb-3 mb-md-0">Xem tất cả đánh giá</button>
                    <button type="button" class="btn btn-dark ml-md-3 rounded-0 px-5">Viết đánh giá</button>
                  </div>
                </div>
                <div class="col-md-6">

                  <ul class="list-unstyled pl-xl-4">
                    <li class="py-2">
                      <a class="row align-items-center mx-gutters-2 font-size-2" href="javascript:;">
                        <div class="col-auto">
                          <span class="text-dark">5 sao</span>
                        </div>
                        <div class="col px-0">
                          <div class="progress bg-white-100" style="height: 7px;">
                            <div class="progress-bar bg-yellow-darker" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="col-2">
                          <span class="text-secondary">205</span>
                        </div>
                      </a>
                    </li>
                    <li class="py-2">
                      <a class="row align-items-center mx-gutters-2 font-size-2" href="javascript:;">
                        <div class="col-auto">
                          <span class="text-dark">4 sao</span>
                        </div>
                        <div class="col px-0">
                          <div class="progress bg-white-100" style="height: 7px;">
                            <div class="progress-bar bg-yellow-darker" role="progressbar" style="width: 53%;" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="col-2">
                          <span class="text-secondary">55</span>
                        </div>
                      </a>
                    </li>
                    <li class="py-2">
                      <a class="row align-items-center mx-gutters-2 font-size-2" href="javascript:;">
                        <div class="col-auto">
                          <span class="text-dark">3 sao</span>
                        </div>
                        <div class="col px-0">
                          <div class="progress bg-white-100" style="height: 7px;">
                            <div class="progress-bar bg-yellow-darker" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="col-2">
                          <span class="text-secondary">23</span>
                        </div>
                      </a>
                    </li>
                    <li class="py-2">
                      <a class="row align-items-center mx-gutters-2 font-size-2" href="javascript:;">
                        <div class="col-auto">
                          <span class="text-dark">2 sao</span>
                        </div>
                        <div class="col px-0">
                          <div class="progress bg-white-100" style="height: 7px;">
                            <div class="progress-bar bg-yellow-darker" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="col-2">
                          <span class="text-secondary">0</span>
                        </div>
                      </a>
                    </li>
                    <li class="py-2">
                      <a class="row align-items-center mx-gutters-2 font-size-2" href="javascript:;">
                        <div class="col-auto">
                          <span class="text-dark">1 sao</span>
                        </div>
                        <div class="col px-0">
                          <div class="progress bg-white-100" style="height: 7px;">
                            <div class="progress-bar bg-yellow-darker" role="progressbar" style="width: 1%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="col-2">
                          <span class="text-secondary">4</span>
                        </div>
                      </a>
                    </li>
                  </ul>

                </div>
              </div>
              <h4 class="font-size-3 mb-8">1-5 của 44 đánh giá</h4>
              <ul class="list-unstyled mb-8">
                <li class="mb-4 pb-5 border-bottom">
                  <div class="d-flex align-items-center mb-3">
                    <h6 class="mb-0">Amazing Story! You will LOVE it</h6>
                    <div class="text-yellow-darker ml-3">
                      <small class="fas fa-star"></small>
                      <small class="fas fa-star"></small>
                      <small class="fas fa-star"></small>
                      <small class="fas fa-star"></small>
                      <small class="far fa-star"></small>
                    </div>
                  </div>
                  <p class="mb-4 text-lh-md">Such an incredibly complex story! I had to buy it because there was a waiting list of 30+ at the local library for this book. Thrilled that I made the purchase</p>
                  <div class="text-gray-600 mb-4">Staci, February 22, 2020 </div>
                  <ul class="nav">
                    <li class="mr-7">
                      <a href="#" class="text-gray-600 d-flex align-items-center">
                        <i class="text-dark font-size-5 flaticon-like-1"></i>
                        <span class="ml-2">90</span>
                      </a>
                    </li>
                    <li class="mr-7">
                      <a href="#" class="text-gray-600 d-flex align-items-center">
                        <i class="text-dark font-size-5 flaticon-dislike"></i>
                        <span class="ml-2">10</span>
                      </a>
                    </li>
                    <li class="mr-7">
                      <a href="#" class="text-gray-600 d-flex align-items-center">
                        <i class="text-dark font-size-5 flaticon-flag"></i>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="mb-4 pb-5 border-bottom">
                  <div class="d-flex align-items-center mb-3">
                    <h6 class="mb-0">Get the best seller at a great price.</h6>
                    <div class="text-yellow-darker ml-3">
                      <small class="fas fa-star"></small>
                      <small class="fas fa-star"></small>
                      <small class="fas fa-star"></small>
                      <small class="fas fa-star"></small>
                      <small class="far fa-star"></small>
                    </div>
                  </div>
                  <p class="mb-4 text-lh-md">Awesome book, great price, fast delivery. Thanks so much.</p>
                  <div class="text-gray-600 mb-4">Staci, February 22, 2020 </div>
                  <ul class="nav">
                    <li class="mr-7">
                      <a href="#" class="text-gray-600 d-flex align-items-center">
                        <i class="text-dark font-size-5 flaticon-like-1"></i>
                        <span class="ml-2">90</span>
                      </a>
                    </li>
                    <li class="mr-7">
                      <a href="#" class="text-gray-600 d-flex align-items-center">
                        <i class="text-dark font-size-5 flaticon-dislike"></i>
                        <span class="ml-2">10</span>
                      </a>
                    </li>
                    <li class="mr-7">
                      <a href="#" class="text-gray-600 d-flex align-items-center">
                        <i class="text-dark font-size-5 flaticon-flag"></i>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="mb-4 pb-5 border-bottom">
                  <div class="d-flex align-items-center mb-3">
                    <h6 class="mb-0">I read this book short...</h6>
                    <div class="text-yellow-darker ml-3">
                      <small class="fas fa-star"></small>
                      <small class="fas fa-star"></small>
                      <small class="fas fa-star"></small>
                      <small class="fas fa-star"></small>
                      <small class="far fa-star"></small>
                    </div>
                  </div>
                  <p class="mb-4 text-lh-md">I read this book shortly after I got it and didn't just put it on my TBR shelf mainly because I saw it on Reese Witherspoon's bookclub September read. It was one of the best books I've read this year, and reminded me some of Kristen Hannah's The Great Alone. </p>
                  <div class="text-gray-600 mb-4">Staci, February 22, 2020 </div>
                  <ul class="nav">
                    <li class="mr-7">
                      <a href="#" class="text-gray-600 d-flex align-items-center">
                        <i class="text-dark font-size-5 flaticon-like-1"></i>
                        <span class="ml-2">90</span>
                      </a>
                    </li>
                    <li class="mr-7">
                      <a href="#" class="text-gray-600 d-flex align-items-center">
                        <i class="text-dark font-size-5 flaticon-dislike"></i>
                        <span class="ml-2">10</span>
                      </a>
                    </li>
                    <li class="mr-7">
                      <a href="#" class="text-gray-600 d-flex align-items-center">
                        <i class="text-dark font-size-5 flaticon-flag"></i>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
              <h4 class="font-size-3 mb-4">Viết đánh giá</h4>
              <div class="d-flex align-items-center mb-6">
                <h6 class="mb-0">Chọn đánh giá(yêu cầu)</h6>
                <div class="text-yellow-darker ml-3 font-size-4">
                  <small class="far fa-star"></small>
                  <small class="far fa-star"></small>
                  <small class="far fa-star"></small>
                  <small class="far fa-star"></small>
                  <small class="far fa-star"></small>
                </div>
              </div>
              <div class="js-form-message form-group mb-4">
                <label for="descriptionTextarea" class="form-label text-dark h6 mb-3">Viết chi tiết! Điều đó khiến cửa hàng chúng tôi tốt hơn.</label>
                <textarea class="form-control rounded-0 p-4" rows="7" id="descriptionTextarea" placeholder="What did you like or dislike? What should other shoppers know before buying?" required data-msg="Please enter your message." data-error-class="u-has-error" data-success-class="u-has-success"></textarea>
              </div>
              <div class="form-group mb-5">
                <label for="inputCompanyName" class="form-label text-dark h6 mb-3">Thêm tiêu đề</label>
                <input type="text" class="form-control rounded-0 px-4" name="companyName" id="inputCompanyName" placeholder="3000 characters remaining" aria-label="3000 characters remaining">
              </div>
              <div class="d-flex">
                <button type="submit" class="btn btn-dark btn-wide rounded-0 transition-3d-hover">Đăng</button>
              </div>

            </div>
          </div>

        </div>

        <section class="space-bottom-3">
          <div class="container">
            <header class="mb-5 d-md-flex justify-content-between align-items-center">
              <h2 class="font-size-5 mb-3 mb-md-0">Có thể bạn cũng quan tâm</h2>
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
      </div>
    </main>
  </div>


</div>



@stop
@section('js')
<script src="/assets/js/controllers/client/singleBookController.js"></script>
@stop