@extends('_admin_layout')
@section('content')

<div class="main-panel">
  <div class="main-content">
    <div class="content-wrapper">
      <form method="post" action="{{route('upload.uploadfile')}}" id="" enctype="multipart/form-data">
        @csrf
        <div>
          <label for="file">Choose file</label>
          <input type="file" id="file" name="file">
        </div>
        <button type="submit" name="">Submit</button>
      </form>
      <div class="container-fluid">
        <!--Extended Table starts-->
        <div class="row">
          <div class="col-12">
            <h2 class="content-header">Extended Tables</h2>
            <p class="content-sub-header">Tables with some actions and with more feathers.</p>
          </div>
        </div>
        <section id="extended">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title-wrap bar-success">
                    <h4 class="card-title">Action Buttons</h4>
                  </div>
                </div>
                <div class="card-body">
                  <div class="card-block">
                    <table class="table table-responsive-md text-center table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th></th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Email</th>
                          <th>Contact</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>
                            <div class="custom-control custom-checkbox m-0">
                              <input type="checkbox" class="custom-control-input" id="item1">
                              <label class="custom-control-label" for="item1"></label>
                            </div>
                          </td>
                          <td>Jean</td>
                          <td>Cartez</td>
                          <td>jeancartez@mail.com</td>
                          <td>0123456789</td>
                          <td>
                            <a class="success p-0" data-original-title="" title="">
                              <i class="fa fa-pencil font-medium-3 mr-2"></i>
                            </a>
                            <a class="info p-0" data-original-title="" title="">
                              <i class="fa fa-check font-medium-3 mr-2"></i>
                            </a>
                            <a class="danger p-0" data-original-title="" title="">
                              <i class="fa fa-trash-o font-medium-3 mr-2"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>
                            <div class="custom-control custom-checkbox m-0">
                              <input type="checkbox" checked class="custom-control-input" id="item2">
                              <label class="custom-control-label" for="item2"></label>
                            </div>
                          </td>
                          <td>Pal</td>
                          <td>Patil</td>
                          <td>palpatil@mail.com</td>
                          <td>0789654123</td>
                          <td>
                            <a class="success p-0" data-original-title="" title="">
                              <i class="fa fa-pencil font-medium-3 mr-2"></i>
                            </a>
                            <a class="info p-0" data-original-title="" title="">
                              <i class="fa fa-check font-medium-3 mr-2"></i>
                            </a>
                            <a class="danger p-0" data-original-title="" title="">
                              <i class="fa fa-trash-o font-medium-3 mr-2"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>
                            <div class="custom-control custom-checkbox m-0">
                              <input type="checkbox" class="custom-control-input" id="item3">
                              <label class="custom-control-label" for="item3"></label>
                            </div>
                          </td>
                          <td>Jack</td>
                          <td>Rawn</td>
                          <td>jackrawn@mail.com</td>
                          <td>0456987123</td>
                          <td>
                            <a class="success p-0" data-original-title="" title="">
                              <i class="fa fa-pencil font-medium-3 mr-2"></i>
                            </a>
                            <a class="info p-0" data-original-title="" title="">
                              <i class="fa fa-check font-medium-3 mr-2"></i>
                            </a>
                            <a class="danger p-0" data-original-title="" title="">
                              <i class="fa fa-trash-o font-medium-3 mr-2"></i>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
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
@stop