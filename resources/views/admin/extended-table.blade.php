@extends('_admin_layout')
@section('content')
<div class="main-panel">
  <div class="main-content">
    <div class="content-wrapper">
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
                    <table class="table table-responsive-md text-center">
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
        <!--Shopping cart starts-->
        <section id="shopping-cart">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title-wrap bar-warning">
                    <h4 class="card-title">Invoice Summary</h4>
                  </div>
                </div>
                <div class="card-body">
                  <div class="card-block">
                    <div class="table-responsive">
                      <table id="recent-orders" class="table table-hover table-xl mb-0">
                        <thead>
                          <tr>
                            <th class="border-top-0">Status</th>
                            <th class="border-top-0">Invoice#</th>
                            <th class="border-top-0">Customer Name</th>
                            <th class="border-top-0">Products</th>
                            <th class="border-top-0">Categories</th>
                            <th class="border-top-0">Shipping</th>
                            <th class="border-top-0">Amount</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-truncate"><i class="fa fa-dot-circle-o success font-medium-1 mr-1"></i> Paid</td>
                            <td class="text-truncate"><a href="#">INV-001001</a></td>
                            <td class="text-truncate">
                              <span class="avatar avatar-xs">
                                <img class="box-shadow-2" src="/assets/admin/img/portrait/small/avatar-s-4.jpg" alt="avatar">
                              </span>
                              <span>Elizabeth W.</span>
                            </td>
                            <td class="text-truncate p-1">
                              <ul class="list-unstyled users-list m-0">
                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                  <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="/assets/admin/img/portfolio/portfolio-1.jpg" alt="Avatar">
                                </li>
                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                  <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="/assets/admin/img/portfolio/portfolio-2.jpg" alt="Avatar">
                                </li>
                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Rebecca Jones" class="avatar avatar-sm pull-up">
                                  <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="/assets/admin/img/portfolio/portfolio-4.jpg" alt="Avatar">
                                </li>
                                <li class="avatar avatar-sm">
                                  <span class="badge badge-info">+1 more</span>
                                </li>
                              </ul>
                            </td>
                            <td>
                              <button type="button" class="btn btn-sm btn-outline-danger round">Food</button>
                            </td>
                            <td>
                              <div class="progress mb-2">
                                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" aria-valuenow="25" aria-valuemin="20" aria-valuemax="100" style="width:25%"></div>
                              </div>
                            </td>
                            <td class="text-truncate">$ 1200.00</td>
                          </tr>
                          <tr>
                            <td class="text-truncate"><i class="fa fa-dot-circle-o danger font-medium-1 mr-1"></i> Declined</td>
                            <td class="text-truncate"><a href="#">INV-001002</a></td>
                            <td class="text-truncate">
                              <span class="avatar avatar-xs">
                                <img class="box-shadow-2" src="/assets/admin/img/portrait/small/avatar-s-5.jpg" alt="avatar">
                              </span>
                              <span>Doris R.</span>
                            </td>
                            <td class="text-truncate p-1">
                              <ul class="list-unstyled users-list m-0">
                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                  <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="/assets/admin/img/portfolio/portfolio-5.jpg" alt="Avatar">
                                </li>
                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                  <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="/assets/admin/img/portfolio/portfolio-6.jpg" alt="Avatar">
                                </li>
                                <li class="avatar avatar-sm">
                                  <span class="badge badge-info">+2 more</span>
                                </li>
                              </ul>
                            </td>
                            <td>
                              <button type="button" class="btn btn-sm btn-outline-warning round">Electronics</button>
                            </td>
                            <td>
                              <div class="progress mb-2">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" aria-valuenow="45" aria-valuemin="20" aria-valuemax="100" style="width:45%"></div>
                              </div>
                            </td>
                            <td class="text-truncate">$ 1850.00</td>
                          </tr>
                          <tr>
                            <td class="text-truncate"><i class="fa fa-dot-circle-o warning font-medium-1 mr-1"></i> Pending</td>
                            <td class="text-truncate"><a href="#">INV-001003</a></td>
                            <td class="text-truncate">
                              <span class="avatar avatar-xs">
                                <img class="box-shadow-2" src="/assets/admin/img/portrait/small/avatar-s-6.jpg" alt="avatar">
                              </span>
                              <span>Megan S.</span>
                            </td>
                            <td class="text-truncate p-1">
                              <ul class="list-unstyled users-list m-0">
                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                  <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="/assets/admin/img/portfolio/portfolio-2.jpg" alt="Avatar">
                                </li>
                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                  <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="/assets/admin/img/portfolio/portfolio-5.jpg" alt="Avatar">
                                </li>
                              </ul>
                            </td>
                            <td>
                              <button type="button" class="btn btn-sm btn-outline-success round">Groceries</button>
                            </td>
                            <td>
                              <div class="progress mb-2">
                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="20" aria-valuemax="100" style="width:75%"></div>
                              </div>
                            </td>
                            <td class="text-truncate">$ 3200.00</td>
                          </tr>
                          <tr>
                            <td class="text-truncate"><i class="fa fa-dot-circle-o success font-medium-1 mr-1"></i> Paid</td>
                            <td class="text-truncate"><a href="#">INV-001004</a></td>
                            <td class="text-truncate">
                              <span class="avatar avatar-xs">
                                <img class="box-shadow-2" src="/assets/admin/img/portrait/small/avatar-s-7.jpg" alt="avatar">
                              </span>
                              <span>Andrew D.</span>
                            </td>
                            <td class="text-truncate p-1">
                              <ul class="list-unstyled users-list m-0">
                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                  <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="/assets/admin/img/portfolio/portfolio-6.jpg" alt="Avatar">
                                </li>
                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                  <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="/assets/admin/img/portfolio/portfolio-1.jpg" alt="Avatar">
                                </li>
                                <li class="avatar avatar-sm">
                                  <span class="badge badge-info">+1 more</span>
                                </li>
                              </ul>
                            </td>
                            <td>
                              <button type="button" class="btn btn-sm btn-outline-info round">Apparels</button>
                            </td>
                            <td>
                              <div class="progress mb-2">
                                <div class="progress-bar progress-bar-striped bg-info" role="progressbar" aria-valuenow="65" aria-valuemin="20" aria-valuemax="100" style="width:65%"></div>
                              </div>
                            </td>
                            <td class="text-truncate">$ 4500.00</td>
                          </tr>
                          <tr>
                            <td class="text-truncate"><i class="fa fa-dot-circle-o success font-medium-1 mr-1"></i> Paid</td>
                            <td class="text-truncate"><a href="#">INV-001005</a></td>
                            <td class="text-truncate">
                              <span class="avatar avatar-xs">
                                <img class="box-shadow-2" src="/assets/admin/img/portrait/small/avatar-s-9.jpg" alt="avatar">
                              </span>
                              <span>Walter R.</span>
                            </td>
                            <td class="text-truncate p-1">
                              <ul class="list-unstyled users-list m-0">
                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                  <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="/assets/admin/img/portfolio/portfolio-5.jpg" alt="Avatar">
                                </li>
                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                  <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="/assets/admin/img/portfolio/portfolio-3.jpg" alt="Avatar">
                                </li>
                              </ul>
                            </td>
                            <td>
                              <button type="button" class="btn btn-sm btn-outline-danger round">Food</button>
                            </td>
                            <td>
                              <div class="progress mb-2">
                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" aria-valuenow="35" aria-valuemin="20" aria-valuemax="100" style="width:35%"></div>
                              </div>
                            </td>
                            <td class="text-truncate">$ 1500.00</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--Shopping cart ends-->
      </div>
    </div>
  </div>

</div>
@stop