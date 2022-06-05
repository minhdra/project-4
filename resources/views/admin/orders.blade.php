@extends('_admin_layout')


@section('content')
<div ng-controller="ordersController">
  <div class="main-panel">
    <div class="main-content">
      <div class="content-wrapper">
        <div class="container-fluid">
          <!--Extended Table starts-->
          <div class="row">
            <div class="col-12">
              <h2 class="content-header">Quản lý đơn hàng bán</h2>
            </div>
          </div>
          <section id="extended">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header" style="display: flex;justify-content: space-between;">
                    <div class="input-group mb-3" style="width:27%;">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3">Tìm kiếm</span>
                      </div>
                      <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" ng-model='finding'>
                    </div>
                    <div class="card-title-wrap bar-success">
                      <h4 class="card-title">
                        <button class="btn btn-info btn-block" style="margin: 0px;" ng-click="openModal(0)">Thêm đơn nhập</button>
                      </h4>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="card-block">
                      <table class="table table-responsive-md text-center table-striped">
                        <thead>
                          <tr>
                            <th style="width:15%;"><input ng-model='tmp.id' type="text" placeholder="Tìm theo mã" class="form-control" style="width:100%;"></th>
                            <th style="width:15%;"><input ng-model='tmp.created_at' type="text" placeholder="Tìm thời gian" class="form-control" style="width:100%;"></th>
                            <th style="width:15%;"><input  ng-model='tmp.customer.info.full_name' placeholder="Tìm tên"  type="text" class="form-control" style="width:100%;"></th>
                            <th style="width:15%;"><input  ng-model='tmp.customer.info.phone' placeholder="Tìm SĐT"  type="text" class="form-control" style="width:100%;"></th>
                            <th style="width:15%;"><input  ng-model='tmp.total' type="text"  placeholder="Tìm tổng cộng" class="form-control" style="width:100%;"></th>
                            <th style="width:15%;"><input  ng-model='tmp.status.status_name' type="text" placeholder="Tìm trạng thái"  class="form-control" style="width:100%;"></th>
                            <th style="width:10%;"></th>
                          </tr>
                          <tr>
                            <th>Mã đơn hàng</th>
                            <th>Thời gian</th>
                            <th>Khách hàng</th>
                            <th>Số ĐT</th>
                            <th>Tổng cộng</th>
                            <th >Trạng thái</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr dir-paginate="row in data| orderBy:'-' |filter:tmp|filter: finding|itemsPerPage:9" current-page="currentPage">
                            <td>@{{row.id}}</td>
                            <td>@{{row.created_at}}</td>
                            <td>@{{row.customer.info.full_name}}</td>
                            <td>@{{row.customer.info.phone}}</td>
                            <td align="right">@{{row.total}}</td>
                            <!-- <td style="width: 15%;">
                            <select class="form-control" ng-model="row.order_status_id" ng-selected="status_change(row,row.order_status_id)" ng-options="status.id as status.status_name for status in statuses">
                            </select>
                            </td> -->
                            <td>@{{row.status.status_name}}</td>
                            <td>
                              <a class="success p-0" data-original-title="" ng-click="openModal(row)" data-toggle="tooltip" title="Xem chi tiết">
                                <i class="fa fa-pencil font-medium-3 mr-2"></i>
                              </a>  
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <dir-pagination-controls style="float: right; padding-right: 100px;" direction-links="true" boundary-links="true">
                      </dir-pagination-controls>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--Extended Table Ends-->
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade text-left" id="large" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-2xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel17" style="width: 293px;">Thông tin đơn hàng</h4>
          <div style="display: flex;justify-content: flex-end;width: 63.3%;align-items: center;">
            <label for="book_name col-xl-4 col-lg-4 col-md-4" style="margin:0px;padding-right: 5px;">Khách hàng: </label>
            <input ng-model="order.customer.info.full_name" type="text" class="form-control-plaintext col-xl-2 col-lg-2 col-md-2" readonly>
          </div>
          
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-body">
            <div class="col-xl-12 col-lg-12 col-md-12" style="display:flex;">
                <div class="col-xl-8 col-lg-8 col-md-8"  style="background: oldlace;padding: 20px;border-radius: 6px;">
                    <div class="row" style="display: flex;justify-content: center;">
                        <div class="form-group" style="width:70%;">
                            <input class="form-control" placeholder="Tìm kiếm chi tiết đơn hàng" ng-model='fin'>
                        </div>
                    </div>
                    <div class="row">
                        <table class="table table-responsive-md text-center table-striped" id="invoice_details">
                            <thead>
                              <tr>
                                  <th>STT</th>
                                  <th>Tên sách</th>
                                  <th>Số lượng</th>
                                  <th>Đơn giá</th>
                                  <th>Thành tiền</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr dir-paginate="row in order.details|filter: find|itemsPerPage:5" current-page="currentPage2">
                                  <td>@{{$index+1}}</td>
                                  <td>@{{row.book.book_name}}</td>
                                  <td>@{{row.quantity}}</td>
                                  <td>@{{row.single_price}}</td>
                                  <td>@{{row.quantity*row.single_price}}</td>
                              </tr>
                            </tbody>
                        </table>
                        <dir-pagination-controls style="float: right; padding-right: 100px;" direction-links="true" boundary-links="true">
                      </dir-pagination-controls>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="block" style="width:100%;display:flex;justify-content: space-between;">
                        <div class="form-group col-xl-12 col-lg-12 col-md-12" style="display: flex;align-items: center;justify-content: space-between;">
                            <label for="book_name col-xl-4 col-lg-4 col-md-4" style="margin:0px;padding-right: 5px;">Ngày đặt hàng</label>
                            <input ng-model="order.created_at"  type="text" readonly class="form-control-plaintext col-xl-8 col-lg-8 col-md-8" >
                        </div>
                    </div>
                    <div class="block" style="width:100%;display:flex;justify-content: space-between;">
                        <div class="form-group col-xl-12 col-lg-12 col-md-12" style="display: flex;align-items: center;justify-content: space-between;">
                            <label for="book_name col-xl-4 col-lg-4 col-md-4" style="margin:0px;padding-right: 5px;">Giảm giá:</label>
                            <input ng-model="order.discount_id" ng-change="invoice_discount_change(invoice.discount)" readonly type="number" min="0" max="99" class="form-control-plaintext col-xl-8 col-lg-8 col-md-8">
                        </div>
                    </div>
                    <div class="block" style="width:100%;display:flex;justify-content: space-between;">
                        <div class="form-group col-xl-12 col-lg-12 col-md-12" style="display: flex;align-items: center;justify-content: space-between;">
                            <label for="book_name col-xl-4 col-lg-4 col-md-4" style="margin:0px;padding-right: 5px;">Tổng tiền:</label>
                            <input ng-model="order.total" type="text" class="form-control-plaintext col-xl-8 col-lg-8 col-md-8" readonly >
                        </div>
                    </div>
                    <div class="block" style="width:100%;display:flex;justify-content: space-between;">
                        <div class="form-group col-xl-12 col-lg-12 col-md-12" style="display: flex;align-items: center;justify-content: space-between;">
                            <label for="book_name col-xl-4 col-lg-4 col-md-4" style="margin:0px;padding-right: 5px;">Địa chỉ:</label>
                            <textarea class="form-control-plaintext col-xl-8 col-lg-8 col-md-8" ng-model="order.delivery_address" rows="3" readonly></textarea>
                        </div>
                    </div>

                    <div class="block" style="width:100%;display:flex;justify-content: space-between;">
                        <div class="form-group col-xl-12 col-lg-12 col-md-12" style="display: flex;align-items: center;justify-content: space-between;">
                            <label for="book_name col-xl-4 col-lg-4 col-md-4" style="margin:0px;padding-right: 5px;">Trạng thái:</label>
                            <select class="form-control col-xl-8 col-lg-8 col-md-8" ng-model="order.order_status_id" ng-change="status_change(order.order_status_id)" ng-options="status.id as status.status_name for status in statuses">
                              <option value="" selected disabled>Thay đổi trạng thái</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-info" ng-click="generate_pdf(order)">Tạo hóa đơn</button>
          <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Đóng</button>
          <button type="button" class="btn btn-outline-primary" ng-click="saveData(order)">Lưu</button>
        </div>
      </div>
    </div>
  </div>

    
</div>
@stop

@section('js')
<script src="/assets/js/datalist.js"></script>
<script src="/assets/js/controllers/ordersController.js"></script>
@stop