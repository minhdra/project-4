@extends('_admin_layout')
@section('css')
<style>
        datalist {
            position: absolute;
            max-height: 15em !important;
            border: 0 none;
            overflow-x: hidden;
            overflow-y: auto;
            }

            datalist option {
            font-size: 14px !important;
            padding: 0.3em 1em;
            background-color: white;
            cursor: pointer;
            }

            /* option active styles */
            datalist option:hover, datalist option:focus {
            color: #fff;
            background-color: #036;
            outline: 0 none;
            }
    </style>
@stop


@section('content')
<div ng-controller="invoicesController">
  <div class="main-panel">
    <div class="main-content">
      <div class="content-wrapper">
        <div class="container-fluid">
          <!--Extended Table starts-->
          <div class="row">
            <div class="col-12">
              <h2 class="content-header">Nhập hàng</h2>
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
                            <th style="width:10%;"><input ng-model='tmp.id' type="text" placeholder="Mã..." class="form-control" style="width:100%;"></th>
                            <th style="width:15%;"><input ng-model='tmp.invoice_date' type="text" placeholder="Thời gian..." class="form-control" style="width:100%;"></th>
                            <th style="width:15%;"><input  ng-model='tmp.publishers.publisher_name' placeholder="Nhà xuất bản..."  type="text" class="form-control" style="width:100%;"></th>
                            <th style="width:15%;"><input  ng-model='tmp.total' placeholder="Tổng cộng..."  type="text" class="form-control" style="width:100%;"></th>
                            <th style="width:15%;"><input  ng-model='tmp.status' type="text"  placeholder="Trạng thái" class="form-control" style="width:100%;"></th>
                            
                            <th style="width:10%;"></th>
                          </tr>
                          <tr>
                            <th>Mã nhập</th>
                            <th>Thời gian</th>
                            <th>Nhà xuất bản</th>
                            <th>Tổng cộng</th>
                            <th>Trạng thái</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr dir-paginate="row in data| orderBy:'-invoice_date' |filter: finding|itemsPerPage:10" current-page="currentPage">
                            <td>@{{row.id}}</td>
                            <td>@{{row.invoice_date}}</td>
                            <td>@{{row.publishers.publisher_name}}</td>
                            <td align="right">@{{row.total}}</td>
                            <td>@{{row.status_name}}</td>
                            <td>
                              <a class="success p-0" data-original-title="" ng-click="openModal(row.id)" data-toggle="tooltip" title="Sửa">
                                <i class="fa fa-pencil font-medium-3 mr-2"></i>
                              </a>  
                              <a class="danger p-0" data-original-title="" data-toggle="tooltip" title="Xóa" ng-click="deleteClick(row.id)">
                                <i class="fa fa-trash-o font-medium-3 mr-2"></i>
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
          <h4 class="modal-title" id="myModalLabel17" style="width: 293px;">@{{modalTitle}}</h4>
          <div style="display: flex;justify-content: flex-end;width: 63.3%;align-items: center;">
            <label for="book_name col-xl-4 col-lg-4 col-md-4" style="margin:0px;padding-right: 5px;">Nhân viên: </label>
            <input ng-model="staffname" type="text" class="form-control-plaintext col-xl-2 col-lg-2 col-md-2" readonly>
          </div>
          
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-body">
            <div class="col-xl-12 col-lg-12 col-md-12" style="display:flex;">
                <div class="col-xl-8 col-lg-8 col-md-8"  style="background: oldlace;padding: 20px;border-radius: 6px;">
                    <div class="row" style="display: flex;justify-content: center;" ng-if="isCreate">
                        <div class="form-group" style="width:70%;">
                            <input class="form-control-plaintext" placeholder="Tìm kiếm sách" id="book_finding" list="ShowDataList" onFocus="this.value=''" ng-focus="toggleDataList($event)" ng-blur="toggleDataList()">
                            <datalist id="ShowDataList" style="z-index: 100;">
                              <option value="@{{book.book_name}}" ng-repeat="book in books" ng-click="book_selected(book)">@{{book.book_name}}</option>
                            </datalist>
                        </div>
                    </div>
                    <div class="row">
                        <div class="block" style="display: flex;">
                            <div class="form-group col-xl-4 col-lg-4 col-md-4" style="display: flex;align-items: center;justify-content: space-between;">
                                <label for="book_name col-xl-4 col-lg-4 col-md-4" style="margin:0px;padding-right: 5px;">Tên sách:</label>
                                <input ng-model="selected_invoice_details.books.book_name" type="text" class="form-control-plaintext col-xl-8 col-lg-8 col-md-8" readonly id="book_name">
                            </div>
                            <div class="form-group col-xl-4 col-lg-4 col-md-4" style="display: flex;align-items: center;justify-content: space-between;">
                                <label for="book_name col-xl-4 col-lg-4 col-md-4" style="margin:0px;padding-right: 5px;">Số lượng:</label>
                                <input ng-model="selected_invoice_details.quantity" type="number" min="0" class="form-control col-xl-8 col-lg-8 col-md-8" id="book_name">
                            </div>
                            <div class="form-group col-xl-4 col-lg-4 col-md-4" style="display: flex;align-items: center;justify-content: space-between;">
                                <label for="book_name col-xl-4 col-lg-4 col-md-4" style="margin:0px;padding-right: 5px;">Đơn giá:</label>
                                <input ng-model="selected_invoice_details.price" type="number" min="0" class="form-control col-xl-8 col-lg-8 col-md-8" id="book_name">
                            </div>
                        </div>
                        <div class="block" style="width:100%;display:flex;justify-content: space-between;">
                            <div class="form-group col-xl-4 col-lg-4 col-md-4" style="display: flex;align-items: center;justify-content: space-between;">
                                <label for="book_name col-xl-4 col-lg-4 col-md-4" style="margin:0px;padding-right: 5px;">Giảm giá:</label>
                                <input ng-model="selected_invoice_details.discount" type="number" min="0" max="99" class="form-control col-xl-8 col-lg-8 col-md-8" id="book_name">
                            </div>
                            <button class="btn btn-info" style="margin-right: 15px;" ng-click="update(selected_invoice_details)">Cập nhật</button>
                        </div>
                        <table class="table table-responsive-md text-center table-striped" id="invoice_details">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên sách</th>
                                <th>Tồn kho</th>
                                <th>Số lượng</th>
                                <th>Đơn giá</th>
                                <th>Giảm giá</th>
                                <th>Thành tiền</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr dir-paginate="row in invoice_details|filter: q|itemsPerPage:5" current-page="currentPage2" ng-click="selected_row(row)">
                                <td>@{{$index+1}}</td>
                                <td>@{{row.books.book_name}}</td>
                                <td>@{{row.books.quantity}}</td>
                                <td>@{{row.quantity}}</td>
                                <td>@{{row.price}}</td>
                                <td>@{{row.discount}}</td>
                                <td>@{{row.total}}</td>
                                <td>
                                <a class="danger p-0" data-original-title="" data-toggle="tooltip" title="Xóa" ng-click="deleteClick_createform(row)" ng-if="isCreate">
                                    <i class="fa fa-trash-o font-medium-3 mr-2"></i>
                                </a>
                                <a class="danger p-0" data-original-title="" data-toggle="tooltip" title="Xóa" ng-click="deleteClick(row)" ng-if="!isCreate">
                                    <i class="fa fa-trash-o font-medium-3 mr-2"></i>
                                </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <dir-pagination-controls style="float: right; padding-right: 100px;" direction-links="true" boundary-links="true">
                      </dir-pagination-controls>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="row" style="display: flex;justify-content: center;">
                        <div class="form-group" style="width:70%;">
                          <select name="" id="" class="form-control" ng-model="invoice.publisher_id" ng-change="publisher_change(invoice.publisher_id)">
                            <option value="" selected disabled>Chọn nhà xuất bản</option>
                            <option value="@{{publisher.id}}" ng-repeat="publisher in publishers">@{{publisher.publisher_name}}</option>
                          </select>
                        </div>
                    </div>
                    <div class="block" style="width:100%;display:flex;justify-content: space-between;">
                        <div class="form-group col-xl-12 col-lg-12 col-md-12" style="display: flex;align-items: center;justify-content: space-between;">
                            <label for="book_name col-xl-4 col-lg-4 col-md-4" style="margin:0px;padding-right: 5px;">Nhà xuất bản:</label>
                            <input ng-model="publisher_name" type="text" class="form-control-plaintext col-xl-8 col-lg-8 col-md-8" readonly >
                        </div>
                    </div>
                    <div class="block" style="width:100%;display:flex;justify-content: space-between;">
                        <div class="form-group col-xl-12 col-lg-12 col-md-12" style="display: flex;align-items: center;justify-content: space-between;">
                            <label for="book_name col-xl-4 col-lg-4 col-md-4" style="margin:0px;padding-right: 5px;">Tổng tiền tạm tính:</label>
                            <input ng-model="total_invoice"  type="text" readonly class="form-control-plaintext col-xl-8 col-lg-8 col-md-8" >
                        </div>
                    </div>
                    <div class="block" style="width:100%;display:flex;justify-content: space-between;">
                        <div class="form-group col-xl-12 col-lg-12 col-md-12" style="display: flex;align-items: center;justify-content: space-between;">
                            <label for="book_name col-xl-4 col-lg-4 col-md-4" style="margin:0px;padding-right: 5px;">Giảm giá:</label>
                            <input ng-model="invoice.discount" ng-change="invoice_discount_change(invoice.discount)"  type="number" min="0" max="99" class="form-control col-xl-8 col-lg-8 col-md-8">
                        </div>
                    </div>
                    <div class="block" style="width:100%;display:flex;justify-content: space-between;">
                        <div class="form-group col-xl-12 col-lg-12 col-md-12" style="display: flex;align-items: center;justify-content: space-between;">
                            <label for="book_name col-xl-4 col-lg-4 col-md-4" style="margin:0px;padding-right: 5px;">Tổng tiền phải trả:</label>
                            <input ng-model="invoice.total" type="text" class="form-control-plaintext col-xl-8 col-lg-8 col-md-8" readonly >
                        </div>
                    </div>
                    <div class="block" style="width:100%;display:flex;justify-content: space-between;">
                        <div class="form-group col-xl-12 col-lg-12 col-md-12" style="display: flex;align-items: center;justify-content: space-between;">
                            <select class="form-control col-xl-12 col-lg-12 col-md-12" ng-model="invoice.status" ng-options="status.id as status.name for status in InvoiceStatus">
                              <option value="" selected disabled>Trạng thái</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Đóng</button>
          <button type="button" class="btn btn-outline-primary" ng-click="saveData()">Lưu</button>
        </div>
      </div>
    </div>
  </div>

    
</div>
@stop

@section('js')
<script src="/assets/js/datalist.js"></script>
<script src="/assets/js/controllers/invoicesController.js"></script>
@stop