@extends('_admin_layout')
@section('content')
<div ng-controller="booksController">
  <div class="main-panel">
    <div class="main-content">
      <div class="content-wrapper">
        <div class="container-fluid">
          <!--Extended Table starts-->
          <div class="row">
            <div class="col-12">
              <h2 class="content-header">Quản lý sách</h2>
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
                            <th>Tên sách</th>
                            <th>Nhà xuất bản</th>
                            <th>Ngôn ngữ</th>
                            <th>Tồn kho</th>
                            <th>Giá bán</th>
                            <th>Hình ảnh</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr dir-paginate="book in books|filter: finding|itemsPerPage:10" current-page="currentPage">
                            <td>@{{$index+1}}</td>
                            <td>@{{book.book_name}}</td>
                            <td>@{{book.publishers.publisher_name}}</td>
                            <td>@{{book.book_languages.language_name}}</td>
                            <td align="right">@{{book.quantity}}</td>
                            <td align="right">@{{book.prices.price}}</td>
                            <td style="padding: 4px;"><img ng-src="/assets/img/books/@{{book.image}}" style='height:40px;' alt=""></td>
                            <td>
                              <a class="success p-0" data-original-title="" ng-click="openModal(book.id,book)" data-toggle="tooltip" title="Sửa">
                                <i class="fa fa-pencil font-medium-3 mr-2"></i>
                              </a>
                              <a class="danger p-0" data-original-title="" data-toggle="tooltip" title="Xóa" ng-click="deleteClick(book)">
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

  <div class="modal fade text-left" id="large" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" style="display: none; z-index:99999" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
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
                  <label for="book-name">Tên sách</label>
                  <input type="text" class="form-control" id="book-name" ng-model="book.book_name" >
                </fieldset>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                <fieldset class="form-group">
                  <label for="publisher">Nhà xuất bản</label>
                  <select class="form-control" name="publisher" id="publisher" ng-model="book.publisherID">
                    <option ng-repeat="option in publishers" value="@{{option.id}}">@{{option.publisher_name}}</option>
                  </select>
                </fieldset>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                <fieldset class="form-group">
                  <label for="language">Ngôn ngữ</label>
                  <select class="form-control" name="language" id="language" ng-model="book.languageID">
                    <option ng-repeat="option in book_languages" value="@{{option.id}}">@{{option.language_name}}</option>
                  </select>
                </fieldset>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                <fieldset class="form-group">
                  <label for="genres">Thể loại</label>
                  <div class="edit-on-delete form-control tagging" data-tags-input-name="edit-on-delete" id="genres">
                    <input class="type-zone" contenteditable="true" spellcheck="false" data-ms-editor="true">
                  </div>
                </fieldset>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                <fieldset class="form-group">
                  <label for="category">Loại sách</label>
                  <select class="form-control" name="category" id="category" ng-model="book.categoryID">
                    <option ng-repeat="option in categories" value="@{{option.id}}">@{{option.category_name}}</option>
                  </select>
                </fieldset>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                <fieldset class="form-group">
                  <label for="isnb">ISNB</label>
                  <input type="text" class="form-control" id="isnb" ng-model="book.isnb" >
                </fieldset>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                <fieldset class="form-group">
                  <label for="weight">Trọng lượng</label>
                  <input type="text" class="form-control" id="weight" ng-model="book.weight" >
                </fieldset>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                <fieldset class="form-group">
                  <label for="type">Kiểu sách</label>
                  <input type="text" class="form-control" id="type" ng-model="book.type" >
                </fieldset>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                <fieldset class="form-group">
                  <label for="dimensions">Kích thước</label>
                  <input type="text" class="form-control" id="dimensions" ng-model="book.dimensions" >
                </fieldset>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                <fieldset class="form-group">
                  <label for="publish_date">Ngày xuất bản</label>
                  <input type="datetime-local" class="form-control" id="" ng-model="book.publish_date" name="publish_date">
                </fieldset>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                <fieldset class="form-group">
                  <label for="price">Giá bán</label>
                  <input type="text" class="form-control" id="price" ng-model="book.price" >
                </fieldset>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                <fieldset class="form-group">
                  <label for="numpages">Số trang</label>
                  <input type="text" class="form-control" id="numpages" ng-model="book.numpages" >
                </fieldset>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                <div class="input-group mb-3">
                  <div class="custom-file">
                    <input class="custom-file-input" type="file" accept="image/*" name="file_img" id="img_file_upid" >
                    <label class="custom-file-label" for="file_img" id="file_img">Chọn ảnh</label>
                  </div>
                </div>
                <div style="float: right;">
                      <img ng-if="book.image == '' || book.image==null" ng-src="/assets/img/books/book_temp.png" id="img_prv" style="max-width: 150px;max-height: 150px" class="img-thumbnail" alt="">
                      <img id="img_prv" ng-if="book.image != '' && book.image!=null" ng-src="/assets/img/books/@{{book.image}}" id="img_prv" style="max-width: 150px;max-height: 150px" class="img-thumbnail" alt="">
                  </div>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                <div class="input-group mb-3">
                  <div class="custom-file">
                    <input class="custom-file-input" type="file" accept="application/pdf"  name="file_pdf" id="pdf_file_upid" >
                    <label class="custom-file-label" for="file_pdf" id="file_pdf">Chọn ảnh</label>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                <fieldset class="form-group">
                  <input type="text" class="form-control" ng-model="book.quantity" placeholder="Tồn kho">
                </fieldset>
              </div>

              <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                <fieldset class="form-group">
                  <label for="description">Mô tả</label>
                  <div ckeditor="text.options" ng-model="text.textInput">
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
<script src="/assets/js/controllers/booksController.js"></script>

<script type="application/javascript">
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        // console.log(this.labels());
        console.log($('#'+this.name).html(fileName));

        // $(this).label().html(fileName);
    });
</script>

@stop