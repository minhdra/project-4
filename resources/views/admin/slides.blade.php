@extends('_admin_layout')
@section('content')
<div ng-controller="slidesController">
  <div class="main-panel">
    <div class="main-content">
      <div class="content-wrapper">
        <div class="container-fluid">
          <!--Extended Table starts-->
          <div class="row">
            <div class="col-12">
              <h2 class="content-header">@{{title}}</h2>
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
                            <th>Đường dẫn</th>
                            <th>Thứ tự</th>
                            <th>Ảnh</th>
                            <th>Tác vụ</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr dir-paginate="row in data|filter: q|itemsPerPage:10" current-page="currentPage">
                            <td>@{{$index+1}}</td>
                            <td>@{{row.category_name}}</td>
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
                  <label for="link">Đường dẫn</label>
                  <input type="text" class="form-control" id="link" ng-model="item.link" require>
                </fieldset>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                <fieldset class="form-group">
                  <label for="sort-order">Thứ tự</label>
                  <input type="number" class="form-control" id="sort-order" ng-model="item.sort_order" require>
                </fieldset>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-12 mb-1 align-self-end">
                <fieldset class="form-group">
                  <div class="custom-file">
                    <input class="custom-file-input" type="file" accept="image/*" name="file_img" id="img_file_upid">
                    <label class="custom-file-label" for="file_img" id="file_img">Chọn ảnh</label>
                  </div>
                </fieldset>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-12 mb-1"></div>
              <div class="col-xl-4 col-lg-4 col-md-12 mb-1"></div>
              <div class="col-xl-4 col-lg-4 col-md-12 mb-1">
                <div>
                  <img ng-if="book.image == '' || book.image==null" ng-src="/assets/img/books/book_temp.png" id="img_prv" style="max-width: 150px;max-height: 150px;min-width: 150px;min-height: 150px" class="img-thumbnail" alt="">
                  <img id="img_prv" ng-if="book.image != '' && book.image!=null" ng-src="/assets/img/books/@{{book.image}}" id="img_prv" style="max-width: 150px;max-height: 150px;min-width: 150px;min-height: 150px" class="img-thumbnail" alt="">
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
<script src="/assets/js/controllers/slidesController.js"></script>
<script>

</script>
@stop