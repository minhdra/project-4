@extends('_admin_layout')
@section('content')
<div ng-controller="publishersController">
  <div class="main-panel">
    <div class="main-content">
      <div class="content-wrapper">
        <div class="container-fluid">
          <!--Extended Table starts-->
          <div class="row">
            <div class="col-12">
              <h2 class="content-header">Quản lý nhà xuất bản</h2>
              <p class="content-sub-header">Tables with some actions and with more feathers.</p>
            </div>
          </div>
          <section id="extended">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title-wrap bar-success">
                      <h4 class="card-title">
                        <button class="btn btn-info btn-block" style="margin: 0px;" ng-click="openModal(0)">Thêm</button>
                      </h4>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="card-block">
                      <table class="table table-responsive-md text-center table-striped">
                        <thead>
                          <tr>
                            <th>STT</th>
                            <th>Tên nhà xuất bản</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr dir-paginate="row in data|filter: q|itemsPerPage:10" current-page="currentPage">
                            <td>@{{$index+1}}</td>
                            <td>@{{row.publisher_name}}</td>
                            <td>
                              <a class="success p-0" data-original-title="" ng-click="openModal(row.id)" data-toggle="tooltip" title="Sửa">
                                <i class="fa fa-pencil font-medium-3 mr-2"></i>
                              </a>
                              <a class="info p-0" data-original-title="" data-toggle="tooltip" title="check">
                                <i class="fa fa-check font-medium-3 mr-2"></i>
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
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel17">@{{modalTitle}}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-body">
            <div class="row">
              <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                <fieldset class="form-group">
                  <label for="publisher-name">Tên nhà xuất bản</label>
                  <input type="text" class="form-control" id="publisher-name" ng-model="item.publisher_name" require>
                </fieldset>
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
<script src="/assets/js/controllers/publishersController.js"></script>
<script>

</script>
@stop