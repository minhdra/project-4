@extends('_admin_layout')
@section('content')
<div class="main-panel" ng-controller="homeController">
  <div class="main-content">
    <div class="content-wrapper">
      <div class="container-fluid">
        <!--Statistics cards Starts-->
        <div class="row">
          <div class="col-xl-4 col-lg-6 col-md-6 col-12">
            <div class="card bg-white">
              <div class="card-body">
                <div class="card-block pt-2">
                  <div class="media"  style="align-items: center;">
                    <div class="media-body white text-left">
                      <span class="grey darken-1">Số người dùng gia tăng trong tháng</span>
                      <h4 class="font-medium-5 card-title mb-0">@{{quantityCustomer}}</h4>
                    </div>
                    <div class="media-right text-right">
                    <i class="icon-cup font-large-1 primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6 col-12">
            <div class="card bg-white">
              <div class="card-body">
                <div class="card-block pt-2">
                  <div class="media"  style="align-items: center;">
                    <div class="media-body white text-left">
                      <span class="grey darken-1">Tổng doanh thu trong tháng 6</span>
                      <h4 class="font-medium-5 card-title mb-0">@{{sumPrice | number}}</h4>
                    </div>
                    <div class="media-right text-right">
                      <i class="icon-wallet font-large-1 warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6 col-12">
            <div class="card bg-white">
              <div class="card-body">
                <div class="card-block pt-2">
                  <div class="media"  style="align-items: center;">
                    <div class="media-body white text-left">
                      <span class="grey darken-1">Số lượng đơn hàng trong ngày</span>
                      <h4 class="font-medium-5 card-title mb-0">@{{orderToday | number}}</h4>
                    </div>
                    <div class="media-right text-right">
                      <i class="icon-basket-loaded font-large-1 success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Statistics cards Ends-->

        <!--Line with Area Chart 1 Ends-->
        
        <div class="row match-height">
          <div class="col-12 col-md-8" id="recent-sales">
              <div class="card" style="">
                <div class="card-header">
                  <div class="card-title-wrap bar-primary">
                    <h4 class="card-title">Top sách bán chạy tháng 6</h4>
                  </div>
                  <a class="heading-elements-toggle">
                    <i class="la la-ellipsis-v font-medium-3"></i>
                  </a>
                </div>
                <div class="card-content mt-1">
                  <div class="table-responsive">
                    <table class="table table-hover table-xl mb-0" id="recent-orders">
                      <thead>
                        <tr>
                          <th class="border-top-0">STT</th>
                          <th class="border-top-0">Tên sách</th>
                          <th class="border-top-0">Giá bán hiện tại</th>
                        <th class="border-top-0">Độ phổ biến</th>
                          <th class="border-top-0">Tổng thu</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr ng-repeat="row in top_books">
                          <td class="text-truncate">@{{$index+1}}</td>
                          <td class="text-truncate">@{{row.book.book_name}}</td>
                          <td align="right">@{{row.book.prices.price}}</td>
                          <td>
                            <div class="box-shadow-2 mt-1">
                              <div class="progress" style="height: 8px;">
                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" aria-valuenow="@{{row.book.sum_quantity}}" aria-valuemin="@{{count_quantity}}" aria-valuemax="100" ng-style="{width:row.book.progress + '%'}"></div>
                              </div>
                            </div>
                          </td>
                          <td class="text-truncate" align="right">@{{row.total_price}}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          <div class="col-xl-4 col-lg-12">
            <div class="card">
              <div class="card-header">
                <div class="card-title-wrap bar-warning">
                  <h4 class="card-title">Trạng thái đặt hàng</h4>
                </div>
              </div>
              <div class="card-body">
                  <div class="chart">
                    <canvas id="myChart" width="400" height="400"></canvas>
                  </div>
                  <a href="/admin/orders" style="position: absolute;bottom: 5px;right: 10px;">Xem chi tiết</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row match-height" style="">
          <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                  <div class="card-title-wrap bar-warning">
                    <h4 class="card-title">Doanh số bán hàng theo tháng</h4>
                  </div>
                </div>
                <div class="card-body">
                    <div class="chart">
                      <canvas id="myChart2" height="80px"></canvas>
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

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="/assets/js/controllers/admin/homeController.js"></script>
@stop