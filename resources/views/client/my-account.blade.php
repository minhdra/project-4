@extends('_client_layout')
@section('content')

<main id="content" ng-controller="customerController" ng-init="loadData()">
  <div class="container">
    <div class="row">
      <div class="col-md-3 border-right">
        <h6 class="font-weight-medium font-size-7 pt-5 pt-lg-8  mb-5 mb-lg-7">Tài khoản của tôi</h6>
        <div class="tab-wrapper">
          <ul class="my__account-nav nav flex-column mb-0" role="tablist" id="pills-tab">
            <li class="nav-item mx-0" ng-click="setClassSidebar($event)">
              <a class="nav-link d-flex align-items-center px-0" id="pills-two-example1-tab" data-toggle="pill" href="#pills-two-example1" role="tab" aria-controls="pills-two-example1" aria-selected="false">
                <span class="font-weight-normal text-gray-600 active">Hóa đơn</span>
              </a>
            </li>
            <li class="nav-item mx-0" ng-click="setClassSidebar($event)">
              <a class="nav-link d-flex align-items-center px-0" id="pills-four-example1-tab" data-toggle="pill" href="#pills-four-example1" role="tab" aria-controls="pills-four-example1" aria-selected="false">
                <span class="font-weight-normal text-gray-600">Địa chỉ</span>
              </a>
            </li>
            <li class="nav-item mx-0" ng-click="setClassSidebar($event)">
              <a class="nav-link d-flex align-items-center px-0" id="pills-five-example1-tab" data-toggle="pill" href="#pills-five-example1" role="tab" aria-controls="pills-five-example1" aria-selected="false">
                <span class="font-weight-normal text-gray-600">Thông tin tài khoản</span>
              </a>
            </li>
            <li class="nav-item mx-0" ng-click="setClassSidebar($event)">
              <a class="nav-link d-flex align-items-center px-0" id="pills-six-example1-tab" data-toggle="pill" href="#pills-six-example1" role="tab" aria-controls="pills-six-example1" aria-selected="false">
                <span class="font-weight-normal text-gray-600">Danh sách yêu thích</span>
              </a>
            </li>
            <li class="nav-item mx-0">
              <a class="nav-link d-flex align-items-center px-0" href="{{route('home')}}" ng-click="logout()">
                <span class="font-weight-normal text-gray-600">Đăng xuất</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-9">
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-two-example1" role="tabpanel" aria-labelledby="pills-two-example1-tab">
            <div class="pt-5 pl-md-5 pt-lg-8 pl-lg-9 space-bottom-lg-2 mb-lg-4">

              <div class="d-flex justify-content-between align-items-start">
                <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Đơn hàng của bạn</h6>
                <a class="btn btn-wide btn-primary text-white rounded-0 transition-3d-hover" href="{{route('tracking')}}">Tracking</a>
              </div>
              <table class="table" ng-if="customer.orders.length > 0">
                <thead>
                  <tr class="border">
                    <th scope="col" class="py-3 border-bottom-0 font-weight-medium pl-3 pl-lg-5">Đơn hàng</th>
                    <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Ngày</th>
                    <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Trạng thái</th>
                    <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Tổng tiền</th>
                    <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="border" dir-paginate="row in customer.orders | itemsPerPage: 6">
                    <th class="pl-3 pl-md-5 font-weight-normal align-middle py-6">#@{{row.id}}</th>
                    <td class="align-middle py-5">@{{row.created_at | date}}</td>
                    <td class="align-middle py-5">
                      @{{row.status.status_name}}
                    </td>
                    <td class="align-middle py-5">
                      <span class="text-primary">@{{row.total|number}} VND</span> cho @{{row.details.length || 0}} chi tiết
                    </td>
                    <td class="align-middle py-5">
                      <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary rounded font-weight-medium" data-toggle="modal" ng-click="showDetails(row.id)">Xem chi tiết
                        </button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
              <dir-pagination-controls max-size="10" direction-links="true" boundary-links="true">
              </dir-pagination-controls>
              <h6 class="font-size-5 text-primary" ng-if="customer.orders.length === 0">Bạn chưa có đơn hàng nào</h6>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-four-example1" role="tabpanel" aria-labelledby="pills-four-example1-tab">
            <div class="pt-5 pl-md-5 pt-lg-8 pl-lg-9 space-bottom-2 mb-lg-4">
              <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-4 mb-lg-4 pb-xl-1">Địa chỉ của bạn</h6>
              <button class="btn btn-primary rounded mb-4" type="button" ng-click="showUpdateDeliveryAddress()">Thêm địa chỉ mới</button>
              <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                <div class="col" ng-repeat="row in customer.delivery_addresses">
                  <div class="mb-6 mb-md-0">
                    <h6 class="font-weight-medium font-size-22 mb-3">@{{row.status===1?'Mặc định':'Khác'}}
                    </h6>
                    <address class="d-flex flex-column mb-4">
                      <span class="text-gray-600 font-size-2">@{{row.full_name}}, @{{row.phone}}</span>
                      <span class="text-gray-600 font-size-2">@{{row.specific_address}},</span>
                      <span class="text-gray-600 font-size-2">@{{row.commune}}, </span>
                      <span class="text-gray-600 font-size-2">@{{row.district}},</span>
                      <span class="text-gray-600 font-size-2">@{{row.province}}</span>
                      <span class="text-gray-600 font-size-2">@{{row.type}}</span>

                    </address>
                    <div class="d-flex">
                      <button class="btn btn-info rounded py-1 mr-2" type="button" ng-click="showUpdateDeliveryAddress(row)">Sửa</button>
                      <button class="btn btn-danger rounded py-1" type="button" ng-click="removeDeliveryAddress(row.id)">Xóa</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-five-example1" role="tabpanel" aria-labelledby="pills-five-example1-tab">
            <div class="border-bottom mb-6 pb-6 mb-lg-8 pb-lg-9">
              <div class="pt-5 pl-md-5 pt-lg-8 pl-lg-9">
                <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Thông tin của <span class="text-primary">@{{customer.info.full_name ? customer.info.full_name : customer.username}}</span></h6>
                <div class="font-weight-medium font-size-22 mb-4 pb-xl-1">

                </div>
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="js-form-message">
                      <label for="exampleFormControlInput1">Họ và tên *</label>
                      <input type="text" class="form-control rounded-0 pl-3 placeholder-color-3" id="exampleFormControlInput1" name="name" aria-label="Jack Wayley" required="" placeholder="Họ và tên" data-error-class="u-has-error" data-msg="Please enter your name." data-success-class="u-has-success" ng-model="customer.info.full_name">
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="js-form-message">
                      <label for="exampleFormControlInput2">Số điện thoại *</label>
                      <input type="text" class="form-control rounded-0 pl-3 placeholder-color-3" id="exampleFormControlInput2" name="name" aria-label="Jack Wayley" placeholder="Số điện thoại" required="" data-error-class="u-has-error" data-msg="Please enter your name." data-success-class="u-has-success" ng-model="customer.info.phone">
                    </div>
                  </div>
                  <div class="col-md-12 mb-4">
                    <div class="js-form-message">
                      <label for="exampleFormControlInput3">Địa chỉ email</label>
                      <input type="text" class="form-control rounded-0" name="name" aria-label="Jack Wayley" id="exampleFormControlInput3" required="" placeholder="Địa chỉ email" data-error-class="u-has-error" data-msg="Please enter your name." data-success-class="u-has-success" ng-model="customer.info.email">
                    </div>
                  </div>
                </div>
                <div class="">
                  <button class="btn btn-wide btn-dark text-white rounded-0 transition-3d-hover height-60 width-390" ng-click="updateInfo()">Cập nhật</button>
                </div>
              </div>
            </div>
            <div class="pl-md-5 pl-lg-9 space-bottom-2 space-bottom-lg-3">
              <div class="font-weight-medium font-size-22 mb-4 pb-xl-1">Đổi mật khẩu</div>
              <div class="row">
                <div class="col-md-12 mb-4">
                  <div class="js-form-message">
                    <label for="exampleFormControlInput5">Mật khẩu hiện tại</label>
                    <input type="password" class="form-control rounded-0" name="name" id="exampleFormControlInput5" aria-label="Jack Wayley" required="" data-error-class="u-has-error" data-msg="Please enter your name." data-success-class="u-has-success" ng-model="password">
                    <span class="font-size-1 text-danger" ng-if="password!=customer.password">Mật khẩu không đúng</span>
                  </div>
                </div>
                <div class="col-md-12 mb-4">
                  <div class="js-form-message">
                    <label for="exampleFormControlInput6">Mật khẩu mới</label>
                    <input type="password" class="form-control rounded-0" name="name" id="exampleFormControlInput6" aria-label="Jack Wayley" required="" data-error-class="u-has-error" data-msg="Please enter your name." data-success-class="u-has-success" ng-model="newPassword">
                  </div>
                </div>
                <div class="col-md-12 mb-5">
                  <div class="js-form-message">
                    <label for="exampleFormControlInput7">Xác nhận mật khẩu mới</label>
                    <input type="password" class="form-control rounded-0" name="name" id="exampleFormControlInput7" aria-label="Jack Wayley" required="" data-error-class="u-has-error" data-msg="Please enter your name." data-success-class="u-has-success" ng-model="confirmNewPassword">
                    <span class="font-size-1 text-danger" ng-if="newPassword!=confirmNewPassword">Mật khẩu phải giống nhau</span>
                  </div>
                </div>
                <div class="ml-3">
                  <button type="submit" class="btn btn-wide btn-dark text-white rounded-0 transition-3d-hover height-60 width-390" ng-click="changePassword()">Đổi mật khẩu</button>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-six-example1" role="tabpanel" aria-labelledby="pills-six-example1-tab">
            <div class="pt-5 pl-md-5 pt-lg-8 pl-lg-9 space-bottom-lg-3">
              <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Wishlist</h6>
              <table class="table mb-0">
                <thead>
                  <tr class="border">
                    <th scope="col" class="py-3 border-bottom-0 font-weight-medium pl-3 pl-md-5">Prouct</th>
                    <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Price</th>
                    <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Stock Staus</th>
                    <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="border">
                    <th class="pl-3 pl-md-5 font-weight-normal align-middle py-6">
                      <div class="d-flex align-items-center">
                        <a class="d-block" href="#">
                          <img class="img-fluid" ng-src="" alt="Image-Description">
                        </a>
                        <div class="ml-xl-4">
                          <div class="font-weight-normal">
                            <a href="#">The Overdue Life of Amy Byler</a>
                          </div>
                          <div class="font-size-2"><a href="#" class="text-gray-700" tabindex="0">Jay Shetty</a></div>
                        </div>
                      </div>
                    </th>
                    <td class="align-middle py-5">$37</td>
                    <td class="align-middle py-5">In Stock</td>
                    <td class="align-middle py-5">
                      <span class="product__add-to-cart">Thêm vào giỏ</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="modalOrder" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Danh sách chi tiết</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="table">
            <thead>
              <tr class="border">
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium pl-3 pl-lg-5">Sách / Truyện</th>
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Giá sản phẩm</th>
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Số lượng</th>
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Hình ảnh</th>
                <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Tổng tiền</th>
              </tr>
            </thead>
            <tbody>
              <tr class="border" ng-repeat="row in order.details">
                <th class="pl-3 pl-md-5 font-weight-normal py-5">@{{row.book.book_name}}</th>
                <td class="py-5">@{{row.single_price | number}} VND</td>
                <td class="py-5">@{{row.quantity}}</td>
                <td class="py-5">
                  <img ng-src="/assets/img/books/@{{row.image}}" alt="" width="100px">
                </td>
                <td class="py-5">@{{row.single_price*row.quantity | number}} VND</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Đóng</button>
        </div>
      </div>
    </div>
  </div>

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
</main>
@stop
@section('js')
<script src="/assets/js/controllers/client/customerController.js"></script>
@stop