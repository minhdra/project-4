@extends('_client_layout')
@section('content')
<div class="right-sidebar woocommerce-cart" ng-controller="customerController" ng-init="loadData()">
  <div class="page-header border-bottom">
    <div class="container">
      <div class="d-md-flex justify-content-between align-items-center py-4">
        <h1 class="page-title font-size-3 font-weight-medium m-0 text-lh-lg">Giỏ hàng</h1>
        <nav class="woocommerce-breadcrumb font-size-2">
          <a href="{{route('home')}}" class="h-primary font-weight-medium">Trang chủ</a>
          <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-right"></i></span>
          Giỏ hàng
        </nav>
      </div>
    </div>
  </div>
  <div class="site-content overflow-hidden" id="content">
    <div class="container">
      <header class="entry-header space-top-2 space-bottom-1 mb-2">
        <h1 class="entry-title font-size-7">Giỏ của bạn: @{{customer.cart_details.length || 0}} sản phẩm</h1>
      </header>
      <div class="row pb-8">
        <div id="primary" class="content-area">
          <main id="main" class="site-main ">
            <div class="page type-page status-publish hentry">

              <div class="entry-content">
                <div class="woocommerce">
                  <div class="woocommerce-cart-form table-responsive" ng-if="customer.cart_details.length > 0">
                    <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents">
                      <thead>
                        <tr>
                          <th class="product-name">Sản phẩm</th>
                          <th class="product-price">Giá</th>
                          <th class="product-quantity">Số lượng</th>
                          <th class="product-subtotal">Tổng tiền</th>
                          <th class="product-remove">&nbsp;</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="woocommerce-cart-form__cart-item cart_item" ng-repeat="row in $root.customer.cart_details">
                          <td class="product-name" data-title="Product">
                            <div class="d-flex align-items-start">
                              <a href="#">
                                <img ng-src="/assets/img/books/@{{row.image}}" width="100px" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">
                              </a>
                              <div class="ml-3 m-w-200-lg-down">
                                <a href="/shop/list/@{{row.id}}" class="font-size-4">@{{row.book.book_name}}</a>
                                <a href="#" class="text-gray-700 font-size-2 d-block" tabindex="0">@{{row.book.authors.author_name?row.book.authors.author_name:row.book.categories.category_name}}</a>
                              </div>
                            </div>
                          </td>
                          <td class="product-price" data-title="Price">
                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">VND</span> @{{row.single_price|number}}</span>
                          </td>
                          <td class="product-quantity" data-title="Quantity">
                            <div class="quantity d-flex align-items-center">

                              <div class="border px-3 width-120">
                                <div class="js-quantity">
                                  <div class="d-flex align-items-center">
                                    <label class="screen-reader-text sr-only">Số lượng</label>
                                    <a class="js-minus text-dark" href="javascript:;" ng-click="changedCount(1, $index)">
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" height="1px">
                                        <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M-0.000,-0.000 L10.000,-0.000 L10.000,1.000 L-0.000,1.000 L-0.000,-0.000 Z" />
                                      </svg>
                                    </a>
                                    <input type="text" class="input-text qty text js-result form-control text-center border-0" name="quantity" ng-model="row.quantity" title="Quantity" style="pointer-events: none;">
                                    <a class="js-plus text-dark" href="javascript:;" ng-click="changedCount(0, $index)">
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" height="10px">
                                        <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M10.000,5.000 L6.000,5.000 L6.000,10.000 L5.000,10.000 L5.000,5.000 L-0.000,5.000 L-0.000,4.000 L5.000,4.000 L5.000,-0.000 L6.000,-0.000 L6.000,4.000 L10.000,4.000 L10.000,5.000 Z" />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </td>
                          <td class="product-subtotal" data-title="Total">
                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">VND</span> @{{row.single_price*row.quantity|number}}</span>
                          </td>
                          <td class="product-remove">
                            <a class="remove" aria-label="Remove this item" ng-click="remove(row.id, $index)">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.011,13.899 L13.899,15.012 L7.500,8.613 L1.101,15.012 L-0.012,13.899 L6.387,7.500 L-0.012,1.101 L1.101,-0.012 L7.500,6.387 L13.899,-0.012 L15.011,1.101 L8.613,7.500 L15.011,13.899 Z" />
                              </svg>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div ng-if="customer.cart_details.length === 0" class="woocommerce-cart-form">
                    <h1>Bạn chưa có sản phẩm nào trong giỏ hàng</h1>
                  </div>
                </div>
              </div>

            </div>
          </main>
        </div>
        <div id="secondary" class="sidebar cart-collaterals order-1" role="complementary">
          <div id="cartAccordion" class="border border-dark bg-white mb-5">
            <div class="p-4d875 border-bottom">
              <div id="cartHeadingOne" class="cart-head">
                <div class="d-flex align-items-center justify-content-between text-dark" href="#" data-toggle="collapse"  aria-expanded="true" aria-controls="cartCollapseOne">
                  <h3 class="cart-title mb-0 font-weight-medium font-size-3">Tổng giỏ hàng</h3>
                  
                </div>
              </div>
              <div id="cartCollapseOne" class="mt-4 cart-content collapse show" aria-labelledby="cartHeadingOne" data-parent="#cartAccordion">
                <table class="shop_table shop_table_responsive">
                  <tbody>
                    <tr class="cart-subtotal">
                      <th>Tổng</th>
                      <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">VND</span> @{{$root.total | number}}</span></td>
                    </tr>
                    <tr class="order-shipping">
                      <th>Phí giao hàng</th>
                      <td data-title="Shipping">Miễn phí</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="p-4d875 border-bottom">
              <div id="cartHeadingThree" class="cart-head">
                <div class="d-flex align-items-center justify-content-between text-dark" href="#" data-toggle="collapse"  aria-expanded="true" aria-controls="cartCollapseThree">
                  <h3 class="cart-title mb-0 font-weight-medium font-size-3">Phiếu mua hàng</h3>
                  
                </div>
              </div>
              <div id="cartCollapseThree" class="mt-4 cart-content collapse show" aria-labelledby="cartHeadingThree" data-parent="#cartAccordion">
                <div class="coupon">
                  <label for="coupon_code">Phiếu mua hàng:</label>
                  <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Mã phiếu mua hàng" autocomplete="off">
                  <input type="submit" class="button" name="apply_coupon" value="Áp dụng">
                </div>
              </div>
            </div>
            <div class="p-4d875 border-bottom">
              <table class="shop_table shop_table_responsive">
                <tbody>
                  <tr class="order-total">
                    <th>Tổng</th>
                    <td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">VND</span> @{{$root.total | number}}</span></strong> </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="wc-proceed-to-checkout">
            <a href="{{route('checkout')}}" class="checkout-button button alt wc-forward btn btn-primary btn-block rounded-0" ng-if="$root.total > 0">Tiến hành thanh toán</a>
            <a class="checkout-button button alt wc-forward btn btn-secondary btn-block rounded-0 text-white" ng-if="$root.total <= 0">Tiến hành thanh toán</a>
          </div>
        </div>
      </div>
    </div>
  </div>


</div>
@stop

@section('js')
<script src="/assets/js/controllers/client/customerController.js"></script>
@stop