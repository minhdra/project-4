@extends('_client_layout')
@section('content')


<div class="right-sidebar woocommerce-checkout m-auto" style="max-width: 1200px;" ng-controller="checkoutController">

  <div ng-if="!order">
    <div class="page-header border-bottom">
      <div class="container">
        <div class="d-md-flex justify-content-between align-items-center py-4">
          <h1 class="page-title font-size-3 font-weight-medium m-0 text-lh-lg">Thủ tục thanh toán</h1>
          <nav class="woocommerce-breadcrumb font-size-2">
            <a href="route('home')" class="h-primary">Trang chủ</a>
            <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-right"></i></span>
            <a href="route('cart')" class="h-primary">Giỏ hàng</a>
            <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-right"></i></span>
            Thủ tục thanh toán
          </nav>
        </div>
      </div>
    </div>
    <div id="content" class="site-content space-bottom-3">
      <div class="col-full container">
        <div id="primary" class="content-area">
          <main id="main" class="site-main">
            <article id="post-6" class="post-6 page type-page status-publish hentry">

              <div class="entry-content">
                <div class="woocommerce">
                  <form name="checkout" method="post" class="checkout woocommerce-checkout row mt-8" action="https://themes.woocommerce.com/storefront/checkout/" enctype="multipart/form-data" novalidate="novalidate">
                    <div class="col2-set col-md-6 col-lg-7 col-xl-8 mb-6 mb-md-0" id="customer_details">
                      <div class="px-4 pt-5 bg-white">
                        <div class="woocommerce-billing-fields">
                          <div class="d-flex justify-content-between align-items-center">
                            <h3 class="mb-4 font-size-5">Thông tin</h3>
                            <div class="woocommerce-info mb-4 bg-white">Xin chào,
                              <span class="showcoupon text-primary" href="">
                                @{{customer.info.full_name ? customer.info.full_name : customer.username}}
                              </span>
                            </div>
                          </div>
                          <div class="woocommerce-billing-fields__field-wrapper row">
                            <p class="col-lg-6 mb-4d75 form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field" data-priority="10">
                              <label for="billing_first_name" class="form-label">Họ và tên <abbr class="required text-danger" title="required">*</abbr></label>
                              <input type="text" class="input-text form-control" name="billing_first_name" id="billing_first_name" placeholder="" autocomplete="given-name" autofocus="autofocus" ng-model="customer.info.full_name">
                            </p>
                            <p class="col-lg-6 mb-4d75 form-row form-row-first validate-required validate-phone" id="billing_phone_field" data-priority="100">
                              <label for="billing_phone" class="form-label">Số điện thoại <abbr class="required text-danger" title="required">*</abbr></label>
                              <input type="tel" class="input-text form-control" name="billing_phone" id="billing_phone" placeholder="" autocomplete="tel" ng-model="customer.info.phone">
                            </p>
                            <p class="col-12 mb-4d75 form-row form-row-last validate-required validate-email" id="billing_email_field" data-priority="110">
                              <label for="billing_email" class="form-label">Địa chỉ email <abbr class="required text-danger" title="required">*</abbr></label>
                              <input type="text" class="input-text form-control" name="billing_email" id="billing_email" placeholder="" autocomplete="email" ng-model="customer.info.email">
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="px-4 pt-5 bg-white">
                        <div class="woocommerce-billing-fields">
                          <div class="d-flex justify-content-between align-items-center">
                            <h3 class="mb-4 font-size-5">Địa chỉ giao hàng</h3>
                          </div>
                          <div class="woocommerce-billing-fields__field-wrapper">
                            <div class="checkout__content--step checkout__contact--information2 border-radius-5 px-4 py-2 border rounded">
                              <div class="checkout__review d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                                <div class="checkout__review--inner d-flex align-items-center" ng-if="delivery_address">
                                  <span class="checkout__review--label pr-5 text-chili">Liên lạc</span>
                                  <span class="checkout__review--content">@{{delivery_address.full_name}}, @{{delivery_address.phone}}</span>
                                </div>
                                <div class="checkout__review--inner d-flex align-items-center" ng-if="!delivery_address">
                                  <span class="checkout__review--content">Bạn phải có địa chỉ giao hàng</span>
                                </div>
                                <div class="checkout__review--link">
                                  <button class="border-0 text-primary bg-white p-0" type="button" ng-click="showDeliveryAddresses()">Thay đổi</button>
                                </div>
                              </div>
                              <div class="checkout__review d-flex justify-content-between align-items-center" ng-if="delivery_address">
                                <div class="checkout__review--inner d-flex align-items-center">
                                  <span class="checkout__review--label pr-4 text-chili">Giao đến</span>
                                  <span class="checkout__review--content">@{{delivery_address.commune}}, @{{delivery_address.district}}, @{{delivery_address.province}}</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <h3 id="order_review_heading" class="d-none">Đơn hàng của bạn</h3>
                    <div id="order_review" class="col-md-6 col-lg-5 col-xl-4 woocommerce-checkout-review-order border-left">
                      <div id="checkoutAccordion" class="bg-white mb-5">
                        <div class="p-4d875 border-bottom">
                          <div id="listCart" class="checkout-head">
                            <a href="" class="text-dark d-flex align-items-center justify-content-between" data-toggle="collapse" data-target="#listCartCollapse" aria-expanded="true" aria-controls="listCartCollapse">
                              <h3 class="checkout-title mb-0 font-weight-medium font-size-3">Đơn hàng của bạn</h3>
                              <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                              </svg>
                              <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                              </svg>
                            </a>
                          </div>
                          <div id="listCartCollapse" class="mt-4 checkout-content collapse show" aria-labelledby="listCart" data-parent="#listCart">
                            <table class="shop_table woocommerce-checkout-review-order-table">
                              <thead class="d-none">
                                <tr>
                                  <th class="product-name">Sản phẩm</th>
                                  <th class="product-total">Tổng</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr class="cart_item" ng-repeat="row in customer.cart_details">
                                  <td class="product-name">
                                    @{{row.book.book_name}}&nbsp; <strong class="product-quantity">× @{{row.quantity}}</strong>
                                  </td>
                                  <td class="product-total">
                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">đ</span><span class="text-primary">@{{row.quantity*row.single_price|number}}</span></span>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="p-4d875 border-bottom">
                          <div id="cartHeadingOne" class="cart-head">
                            <div class="d-flex align-items-center justify-content-between text-dark" href="#" data-toggle="collapse" aria-expanded="true" aria-controls="cartCollapseOne">
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
                            <div class="d-flex align-items-center justify-content-between text-dark" href="#" data-toggle="collapse" aria-expanded="true" aria-controls="cartCollapseThree">
                              <h3 class="cart-title mb-0 font-weight-medium font-size-3">Phiếu mua hàng</h3>

                            </div>
                          </div>
                          <div id="cartCollapseThree" class="mt-4 cart-content collapse show" aria-labelledby="cartHeadingThree" data-parent="#cartAccordion">
                            <div class="coupon">
                              <label for="coupon_code">Phiếu mua hàng:</label>
                              <input type="text" name="coupon_code" class="input-text" id="coupon_code" placeholder="Mã phiếu mua hàng" autocomplete="off">
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
                      <div class="form-row place-order">
                        <a href="" class="button alt btn btn-dark btn-block rounded-0 py-4" ng-click="payment()">Đặt hàng</a>
                        <input type="hidden" id="_wpnonce" name="_wpnonce" value="926470d564"><input type="hidden" name="_wp_http_referer" value="/storefront/?wc-ajax=update_order_review">
                      </div>
                    </div>
                  </form>
                </div>
              </div>

            </article>

          </main>

        </div>

      </div>

    </div>
  </div>
  <!-- show order -->
  <div ng-if="order">
    <main id="content">
      <div class="bg-gray-200 space-bottom-3">
        <div class="container">
          <div class="py-5 py-lg-7">
            <h6 class="font-weight-medium font-size-7 text-center mt-lg-1">Đơn hàng đã nhận</h6>
          </div>
          <div class="max-width-890 mx-auto">
            <div class="bg-white pt-6 border">
              <h6 class="font-size-3 font-weight-medium text-center mb-4 pb-xl-1">Cảm ơn bạn đã lựa chọn chúng tôi</h6>
              <div class="border-bottom mb-5 pb-5 overflow-auto overflow-md-visible">
                <div class="pl-3">
                  <table class="table table-borderless mb-0 ml-1">
                    <thead>
                      <tr>
                        <th scope="col" class="font-size-2 font-weight-normal py-0">Mã hóa đơn:</th>
                        <th scope="col" class="font-size-2 font-weight-normal py-0">Ngày:</th>
                        <th scope="col" class="font-size-2 font-weight-normal py-0 text-md-center">Tổng: </th>
                        <th scope="col" class="font-size-2 font-weight-normal py-0 text-md-right pr-md-9">Phương thức thanh toán:</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row" class="pr-0 py-0 font-weight-medium">#@{{order.id}}</th>
                        <td class="pr-0 py-0 font-weight-medium">@{{order.created_at | date}}</td>
                        <td class="pr-0 py-0 font-weight-medium text-md-center">đ@{{order.total | number}}</td>
                        <td class="pr-md-4 py-0 font-weight-medium text-md-right">Thanh toán khi nhận hàng</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="border-bottom mb-5 pb-6">
                <div class="px-3 px-md-4">
                  <div class="ml-md-2">
                    <h6 class="font-size-3 on-weight-medium mb-4 pb-1">Đơn hàng chi tiết</h6>
                    <div class="d-flex justify-content-between mb-4" ng-repeat="row in order.details">
                      <div class="d-flex align-items-baseline">
                        <div>
                          <h6 class="font-size-2 font-weight-normal mb-1">@{{row.book.book_name}}</h6>
                          <span class="font-size-2 text-gray-600">(@{{row.book.type}}, @{{row.book.book_languages.language_name}})</span>
                        </div>
                        <span class="font-size-2 ml-4 ml-md-8">x@{{row.quantity}}</span>
                      </div>
                      <span class="font-weight-medium font-size-2">đ@{{row.single_price*row.quantity|number}}</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="border-bottom mb-5 pb-5">
                <ul class="list-unstyled px-3 pl-md-5 pr-md-4 mb-0">
                  <li class="d-flex justify-content-between py-2">
                    <span class="font-weight-medium font-size-2">Tổng phụ:</span>
                    <span class="font-weight-medium font-size-2">đ@{{order.total|number}}</span>
                  </li>
                  <li class="d-flex justify-content-between py-2">
                    <span class="font-weight-medium font-size-2">Giao hàng:</span>
                    <span class="font-weight-medium font-size-2">Miễn phí</span>
                  </li>
                  <li class="d-flex justify-content-between pt-2">
                    <span class="font-weight-medium font-size-2">Phương thức thanh toán:</span>
                    <span class="font-weight-medium font-size-2">Thanh toán khi nhận hàng</span>
                  </li>
                </ul>
              </div>
              <div class="border-bottom mb-5 pb-4">
                <div class="px-3 pl-md-5 pr-md-4">
                  <div class="d-flex justify-content-between">
                    <span class="font-size-2 font-weight-medium">Tổng</span>
                    <span class="font-weight-medium fon-size-2">đ@{{order.total|number}}</span>
                  </div>
                </div>
              </div>
              <div class="px-3 pl-md-5 pr-md-4 mb-6 pb-xl-1">
                <div class="row row-cols-1 row-cols-md-2">
                  <div class="col">
                    <div class="mb-6 mb-md-0">
                      <h6 class="font-weight-medium font-size-22 mb-3">Địa chỉ giao hàng
                      </h6>
                      <address class="d-flex flex-column mb-0">
                        <span class="text-gray-600 font-size-2">@{{delivery_address.full_name}},</span>
                        <span class="text-gray-600 font-size-2">@{{delivery_address.phone}}</span>
                        <span class="text-gray-600 font-size-2">@{{delivery_address.commune}}, </span>
                        <span class="text-gray-600 font-size-2">@{{delivery_address.district}},</span>
                        <span class="text-gray-600 font-size-2">@{{delivery_address.province}}</span>
                        <span class="text-gray-600 font-size-2">@{{delivery_address.type}}</span>
                      </address>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <!-- List delivery addresses -->
  <!-- Start modal -->
  <div class="modal fade" id="modal1" data-animation="slideInUp">
    <div class="modal-dialog modal-dialog-centered" role="document" style="min-width:600px; min-height:250px">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Địa chỉ của bạn</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="" ng-if="customer.delivery_addresses.length > 0">
            <div class="d-flex flex-column align-items-center justify-content-center">
              <div class="col-12 mb-20" ng-repeat="row in customer.delivery_addresses">
                <div class="d-flex align-items-center justify-content-between">
                  <input type="radio" name="address" id="address@{{$index}}" ng-checked="row.status" ng-click="changeDefault(row)">
                  <label for="address@{{$index}}">
                    <div>@{{row.full_name}}, @{{row.phone_number}}</div>
                    <div>@{{delivery_address.commune}}, @{{delivery_address.district}}, @{{delivery_address.province}}</div>
                  </label>
                  <div style="width:50px">@{{row.status===0?'':'Default'}}</div>
                  <button class="border-0 text-primary bg-white p-0" type="button" ng-click="showUpdateDeliveryAddress(row)">Thay đổi</button>
                </div>
              </div>
              <div class="col-12 btn-group text-right">
                <button class="btn btn-primary rounded" ng-click="showUpdateDeliveryAddress()">Thêm nữa</button>
              </div>
            </div>
          </div>
          <div class="" ng-if="customer.delivery_addresses.length === 0">
            <div class="d-flex flex-column align-items-center justify-content-center" style="height: 180px">
              <h5 class="">Bạn chưa có địa chỉ nào</h5>
              <button class="btn btn-primary rounded" ng-click="showUpdateDeliveryAddress()">Thêm ngay!</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End modal -->

  <!-- Update delivery address -->
  <!-- Start modal -->
  <div class="modal fade" id="modal2" data-animation="slideInUp">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">@{{modelTitleAddress}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-6 mb-4">
              <div class="checkout__input--list ">
                <label class="d-block">
                  <input class="form-control" placeholder="Họ và tên" type="text" spellcheck="false" ng-model="full_name" data-ms-editor="true">
                </label>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="checkout__input--list">
                <label class="d-block">
                  <input class="form-control" placeholder="Số điện thoại" type="number" spellcheck="false" ng-model="phone" data-ms-editor="true">
                </label>
              </div>
            </div>
            <div class="col-4 mb-4">
              <div class="checkout__input--list checkout__input--select select">
                <label class="checkout__select--label" for="country">Tỉnh / Thành phố</label>
                <select class="form-control" ng-options="row.code as row.name_with_type for row in cities" ng-model="city_code" ng-change="changeCity()" id="country">
                </select>
              </div>
            </div>
            <div class="col-4 mb-4">
              <div class="checkout__input--list checkout__input--select select">
                <label class="checkout__select--label" for="district">Huyện</label>
                <select class="form-control" ng-options="row.code as row.name_with_type for row in districts" ng-model="district_code" ng-change="changeDistrict()" id="district">
                </select>
              </div>
            </div>
            <div class="col-4 mb-4">
              <div class="checkout__input--list checkout__input--select select">
                <label class="checkout__select--label" for="country">Xã / Phường</label>
                <select class="form-control" ng-options="row.name_with_type as row.name_with_type for row in communes" ng-model="commune" id="country">
                </select>
              </div>
            </div>
            <div class="col-12 mb-4">
              <div class="checkout__input--list">
                <label class="d-block">
                  <input class="form-control" placeholder="Địa chỉ cụ thể" type="text" spellcheck="false" ng-model="specific_address" data-ms-editor="true">
                </label>
              </div>
            </div>
            <div class="col-12 mb-4">
              <fieldset class="variant__input--fieldset weight text-right">
                <input id="home" name="type_address" type="radio" ng-checked="checkType===0">
                <label class="variant__size--value red" ng-click="getTypeAddress($event)" style="width: auto; padding: .25rem" for="home">Nhà riêng</label>
                <input id="company" name="type_address" type="radio" ng-checked="checkType===1">
                <label class="variant__size--value red" ng-click="getTypeAddress($event)" style="width: auto; padding: .25rem" for="company">Công ty</label>
              </fieldset>
            </div>
            <div class="col-12 mb-4">
              <div class="checkout__checkbox">
                <input class="checkout__checkbox--input" id="default" type="checkbox" ng-checked="status===0?false:true" ng-model="status">
                <span class="checkout__checkbox--checkmark"></span>
                <label class="checkout__checkbox--label" for="default">
                  Mặc định</label>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary rounded" style="background-color: #647589;" data-dismiss="modal">Đóng</button>
          <button class="btn btn-primary rounded" ng-click="saveDeliveryAddress()">Lưu</button>
        </div>
      </div>
    </div>
  </div>
  <!-- End modal -->
</div>

@stop

@section('js')
<script src="/assets/js/controllers/client/checkoutController.js"></script>
@stop