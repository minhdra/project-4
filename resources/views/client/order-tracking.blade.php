@extends('_client_layout')
@section('content')
<main id="content" ng-controller="trackingController">
  <div class="container">
    <div class="">
      <div class="pb-lg-2">
        <div class="py-4 pt-lg-8 pb-lg-7">
          <h6 class="font-weight-medium font-size-7 text-center">Order Tracking</h6>
        </div>
        <div class="max-width-770 mx-auto">
          <p class="font-size-2 text-center text-lh-1dot72 text-gray-600 mb-6">To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p>
        </div>
        <div class="row align-items-end justify-content-center mb-6">
          <div class="col-md-6 mb-5 mb-md-0">
            <div class="js-form-message">
              <label for="exampleFormControlInput1">Order ID</label>
              <input type="text" class="form-control rounded-0" name="name" aria-label="Jack Wayley" id="exampleFormControlInput1" required="" data-error-class="u-has-error" data-msg="Please enter your name." data-success-class="u-has-success" ng-model="order_id">
            </div>
          </div>
          <button type="submit" class="btn btn-wide btn-dark text-white rounded-0 transition-3d-hover height-60 width-250" ng-click="trackingOrder()">Track</button>
        </div>
      </div>
    </div>
  </div>
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
                        <th scope="col" class="font-size-2 font-weight-normal py-0 text-md-right pr-md-4">Trạng thái: @{{order.status.status_name}}</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row" class="pr-0 py-0 font-weight-medium">#@{{order.id}}</th>
                        <td class="pr-0 py-0 font-weight-medium">@{{order.created_at | date}}</td>
                        <td class="pr-0 py-0 font-weight-medium text-md-center">@{{order.total | number}} VND</td>
                        <td class="pr-md-4 py-0 font-weight-medium text-md-right">
                          <button class="btn btn-primary text-white rounded" ng-click="cancelOrder()" ng-if="order.order_status_id==1">Hủy đơn</button>
                        </td>
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
                      <span class="font-weight-medium font-size-2">@{{row.single_price*row.quantity|number}} VND</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="border-bottom mb-5 pb-5">
                <ul class="list-unstyled px-3 pl-md-5 pr-md-4 mb-0">
                  <li class="d-flex justify-content-between py-2">
                    <span class="font-weight-medium font-size-2">Tổng phụ:</span>
                    <span class="font-weight-medium font-size-2">@{{order.total|number}} VND</span>
                  </li>
                  <li class="d-flex justify-content-between py-2">
                    <span class="font-weight-medium font-size-2">Giao hàng:</span>
                    <span class="font-weight-medium font-size-2">Miễn phí</span>
                  </li>
                  <li class="d-flex justify-content-between pt-2">
                    <span class="font-weight-medium font-size-2">Thông tin:</span>
                    <span class="font-weight-medium font-size-2">@{{order.delivery_address}}</span>
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
                    <span class="font-weight-medium fon-size-2">@{{order.total|number}} VND</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</main>
@stop

@section('js')
<script src="/assets/js/controllers/client/trackingController.js"></script>
@stop