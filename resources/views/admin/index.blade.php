@extends('_admin_layout')
@section('content')
<div class="main-panel">
  <div class="main-content">
    <div class="content-wrapper">
      <div class="container-fluid">
        <!--Statistics cards Starts-->
        <div class="row">
          <div class="col-xl-4 col-lg-6 col-md-6 col-12">
            <div class="card bg-white">
              <div class="card-body">
                <div class="card-block pt-2 pb-0">
                  <div class="media">
                    <div class="media-body white text-left">
                      <h4 class="font-medium-5 card-title mb-0">$5789</h4>
                      <span class="grey darken-1">Total Visits</span>
                    </div>
                    <div class="media-right text-right">
                      <i class="icon-cup font-large-1 primary"></i>
                    </div>
                  </div>
                </div>
                <div id="Widget-line-chart" class="height-150 lineChartWidget WidgetlineChart mb-2">
                  <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;">
                    <g class="ct-grids"></g>
                    <g>
                      <g class="ct-series ct-series-a">
                        <path d="M10,145L10,145C42.22,145,42.22,88.667,74.44,88.667C106.66,88.667,106.66,119,138.88,119C171.1,119,171.1,15,203.32,15C235.54,15,235.54,67,267.76,67C299.98,67,299.98,23.667,332.2,23.667L332.2,145Z" class="ct-area"></path>
                        <path d="M10,145C42.22,145,42.22,88.667,74.44,88.667C106.66,88.667,106.66,119,138.88,119C171.1,119,171.1,15,203.32,15C235.54,15,235.54,67,267.76,67C299.98,67,299.98,23.667,332.2,23.667" class="ct-line"></path>
                        <circle cx="10" cy="145" r="10" class="ct-point-circle-transperent"></circle>
                        <circle cx="74.44000244140625" cy="88.66666666666666" r="10" class="ct-point-circle-transperent"></circle>
                        <circle cx="138.8800048828125" cy="119" r="10" class="ct-point-circle-transperent"></circle>
                        <circle cx="203.32000732421875" cy="15" r="10" class="ct-point-circle"></circle>
                        <circle cx="267.760009765625" cy="67" r="10" class="ct-point-circle-transperent"></circle>
                        <circle cx="332.20001220703125" cy="23.66666666666667" r="10" class="ct-point-circle-transperent"></circle>
                      </g>
                    </g>
                    <g class="ct-labels"></g>
                    <defs>
                      <linearGradient id="wGradient" x1="0" y1="1" x2="0" y2="0">
                        <stop offset="0" stop-color="rgba(130,73,232, 1)"></stop>
                        <stop offset="1" stop-color="rgba(41,123,249, 1)"></stop>
                      </linearGradient>
                    </defs>
                    <line x1="203.32000732421875" x2="203.32000732421875" y1="145" y2="15" class="ct-target-line"></line>
                  </svg>
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
                      <h4 class="font-medium-5 card-title mb-0">15132</h4>
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
                      <h4 class="font-medium-5 card-title mb-0">15132</h4>
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

        <!--Line with Area Chart 1 Starts-->
        <div class="row match-height">
          <div class="col-xl-8 col-lg-12 col-12">
            <div class="card" style="">
              <div class="card-header">
                <div class="card-title-wrap bar-success">
                  <h4 class="card-title">Product Valuation</h4>
                </div>
              </div>
              <div class="card-body">
                <div class="card-block">
                  <div id="line-chart" class="height-300 lineChart lineChartShadow">
                    <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;">
                      <g class="ct-grids">
                        <line y1="265" y2="265" x1="50" x2="656.4000244140625" class="ct-grid ct-vertical"></line>
                        <line y1="193.57142857142856" y2="193.57142857142856" x1="50" x2="656.4000244140625" class="ct-grid ct-vertical"></line>
                        <line y1="122.14285714285714" y2="122.14285714285714" x1="50" x2="656.4000244140625" class="ct-grid ct-vertical"></line>
                        <line y1="50.71428571428572" y2="50.71428571428572" x1="50" x2="656.4000244140625" class="ct-grid ct-vertical"></line>
                      </g>
                      <g>
                        <g class="ct-series ct-series-a">
                          <path d="M50,265C93.314,265,93.314,104.286,136.629,104.286C179.943,104.286,179.943,172.143,223.257,172.143C266.571,172.143,266.571,47.143,309.886,47.143C353.2,47.143,353.2,172.143,396.514,172.143C439.829,172.143,439.829,32.857,483.143,32.857C526.457,32.857,526.457,150.714,569.771,150.714C613.086,150.714,613.086,22.143,656.4,22.143" class="ct-line"></path>
                          <circle cx="50" cy="265" r="10" class="ct-circle-transperent"></circle>
                          <circle cx="136.62857491629464" cy="104.28571428571428" r="10" class="ct-circle"></circle>
                          <circle cx="223.25714983258928" cy="172.14285714285714" r="10" class="ct-circle"></circle>
                          <circle cx="309.88572474888394" cy="47.14285714285714" r="10" class="ct-circle"></circle>
                          <circle cx="396.51429966517856" cy="172.14285714285714" r="10" class="ct-circle"></circle>
                          <circle cx="483.14287458147317" cy="32.85714285714286" r="10" class="ct-circle"></circle>
                          <circle cx="569.7714494977679" cy="150.71428571428572" r="10" class="ct-circle"></circle>
                          <circle cx="656.4000244140625" cy="22.14285714285714" r="10" class="ct-circle-transperent"></circle>
                        </g>
                      </g>
                      <g class="ct-labels">
                        <foreignObject style="overflow: visible;" x="50" y="270" width="86.62857491629464" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 87px; height: 20px;">1st</span></foreignObject>
                        <foreignObject style="overflow: visible;" x="136.62857491629464" y="270" width="86.62857491629464" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 87px; height: 20px;">2nd</span></foreignObject>
                        <foreignObject style="overflow: visible;" x="223.25714983258928" y="270" width="86.62857491629467" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 87px; height: 20px;">3rd</span></foreignObject>
                        <foreignObject style="overflow: visible;" x="309.88572474888394" y="270" width="86.62857491629461" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 87px; height: 20px;">4th</span></foreignObject>
                        <foreignObject style="overflow: visible;" x="396.51429966517856" y="270" width="86.62857491629461" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 87px; height: 20px;">5th</span></foreignObject>
                        <foreignObject style="overflow: visible;" x="483.14287458147317" y="270" width="86.62857491629472" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 87px; height: 20px;">6th</span></foreignObject>
                        <foreignObject style="overflow: visible;" x="569.7714494977679" y="270" width="86.62857491629461" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 87px; height: 20px;">7th</span></foreignObject>
                        <foreignObject style="overflow: visible;" x="656.4000244140625" y="270" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;">8th</span></foreignObject>
                        <foreignObject style="overflow: visible;" y="193.57142857142856" x="10" height="71.42857142857143" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 71px; width: 30px;">0K</span></foreignObject>
                        <foreignObject style="overflow: visible;" y="122.14285714285712" x="10" height="71.42857142857143" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 71px; width: 30px;">2K</span></foreignObject>
                        <foreignObject style="overflow: visible;" y="50.71428571428572" x="10" height="71.42857142857142" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 71px; width: 30px;">4K</span></foreignObject>
                        <foreignObject style="overflow: visible;" y="15" x="10" height="35.71428571428572" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 36px; width: 30px;">6K</span></foreignObject>
                      </g>
                      <defs>
                        <linearGradient id="linear1" x1="1" y1="0" x2="0" y2="0">
                          <stop offset="0" stop-color="rgba(185,168,231, 1)"></stop>
                          <stop offset="1" stop-color="rgba(118,74,233, 1)"></stop>
                        </linearGradient>
                      </defs>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-12 col-12">
            <div class="card" style="">
              <div class="card-header">
                <div class="card-title-wrap bar-danger">
                  <h4 class="card-title">Today's Activity</h4>
                </div>
              </div>
              <div class="card-body">
                <div class="col-12 timeline-left" id="activity">
                  <div class="timeline">
                    <ul class="list-unstyled base-timeline activity-timeline">
                      <li class="">
                        <div class="timeline-icon bg-danger">
                          <i class="fa fa-tasks"></i>
                        </div>
                        <div class="act-time">Today</div>
                        <div class="base-timeline-info">
                          <a href="#" class="text-uppercase text-danger">Task Added</a>
                        </div>
                        <small class="text-muted">
                          25 mins ago
                        </small>
                      </li>
                      <li class="">
                        <div class="timeline-icon bg-primary">
                          <i class="fa fa-handshake-o"></i>
                        </div>
                        <div class="act-time">Yesterday</div>
                        <div class="base-timeline-info">
                          <a href="#" class="text-uppercase text-primary">Deal Added</a>
                        </div>
                        <small class="text-muted">
                          23 hours ago
                        </small>
                      </li>
                      <li class="">
                        <div class="timeline-icon bg-dark">
                          <i class="fa fa-tasks"></i>
                        </div>
                        <div class="act-time">09 March</div>
                        <div class="base-timeline-info">
                          <a href="#" class="text-uppercase text-dark">Task Updated</a>
                        </div>
                        <small class="text-muted">
                          15 days ago
                        </small>
                      </li>
                      <li class="">
                        <div class="timeline-icon bg-warning">
                          <i class="fa fa-handshake-o"></i>
                        </div>
                        <div class="act-time">04 March</div>
                        <div class="base-timeline-info">
                          <a href="#" class="text-uppercase text-warning">Started Task</a>
                        </div>
                        <small class="text-muted">
                          20 days ago
                        </small>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Line with Area Chart 1 Ends-->

        <div class="row match-height">
          <div class="col-xl-4 col-lg-12 col-12">
            <div class="card" style="">
              <div class="card-header">
                <div class="card-title-wrap bar-warning">
                  <h4 class="card-title">Sales</h4>
                </div>
              </div>
              <div class="card-body">
                <p class="font-medium-2 text-muted text-center pb-2">Last 12 Months Sales</p>
                <div id="Stack-bar-chart" class="height-300 Stackbarchart mb-2">
                  <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;">
                    <g class="ct-grids">
                      <line y1="240" y2="240" x1="30" x2="694.4000244140625" class="ct-grid ct-vertical"></line>
                      <line y1="205" y2="205" x1="30" x2="694.4000244140625" class="ct-grid ct-vertical"></line>
                      <line y1="170" y2="170" x1="30" x2="694.4000244140625" class="ct-grid ct-vertical"></line>
                      <line y1="135" y2="135" x1="30" x2="694.4000244140625" class="ct-grid ct-vertical"></line>
                      <line y1="100" y2="100" x1="30" x2="694.4000244140625" class="ct-grid ct-vertical"></line>
                      <line y1="65" y2="65" x1="30" x2="694.4000244140625" class="ct-grid ct-vertical"></line>
                      <line y1="30" y2="30" x1="30" x2="694.4000244140625" class="ct-grid ct-vertical"></line>
                    </g>
                    <g>
                      <g class="ct-series ct-series-a">
                        <line x1="57.684334350585935" x2="57.68333435058594" y1="135" y2="37" class="ct-bar" ct:value="7" style="stroke-width: 5px"></line>
                        <circle cx="57.68333435058594" cy="37" r="5" class="ct-slice-bar"></circle>
                        <line x1="113.05100305175782" x2="113.05000305175781" y1="135" y2="79" class="ct-bar" ct:value="4" style="stroke-width: 5px"></line>
                        <circle cx="113.05000305175781" cy="79" r="5" class="ct-slice-bar"></circle>
                        <line x1="168.4176717529297" x2="168.4166717529297" y1="135" y2="107" class="ct-bar" ct:value="2" style="stroke-width: 5px"></line>
                        <circle cx="168.4166717529297" cy="107" r="5" class="ct-slice-bar"></circle>
                        <line x1="223.78434045410157" x2="223.78334045410156" y1="135" y2="163" class="ct-bar" ct:value="-2" style="stroke-width: 5px"></line>
                        <circle cx="223.78334045410156" cy="163" r="5" class="ct-slice-bar"></circle>
                        <line x1="279.1510091552734" x2="279.15000915527344" y1="135" y2="191" class="ct-bar" ct:value="-4" style="stroke-width: 5px"></line>
                        <circle cx="279.15000915527344" cy="191" r="5" class="ct-slice-bar"></circle>
                        <line x1="334.5176778564453" x2="334.5166778564453" y1="135" y2="233" class="ct-bar" ct:value="-7" style="stroke-width: 5px"></line>
                        <circle cx="334.5166778564453" cy="233" r="5" class="ct-slice-bar"></circle>
                        <line x1="389.88434655761716" x2="389.8833465576172" y1="135" y2="233" class="ct-bar" ct:value="-7" style="stroke-width: 5px"></line>
                        <circle cx="389.8833465576172" cy="233" r="5" class="ct-slice-bar"></circle>
                        <line x1="445.25101525878904" x2="445.25001525878906" y1="135" y2="191" class="ct-bar" ct:value="-4" style="stroke-width: 5px"></line>
                        <circle cx="445.25001525878906" cy="191" r="5" class="ct-slice-bar"></circle>
                        <line x1="500.6176839599609" x2="500.61668395996094" y1="135" y2="163" class="ct-bar" ct:value="-2" style="stroke-width: 5px"></line>
                        <circle cx="500.61668395996094" cy="163" r="5" class="ct-slice-bar"></circle>
                        <line x1="555.9843526611328" x2="555.9833526611328" y1="135" y2="107" class="ct-bar" ct:value="2" style="stroke-width: 5px"></line>
                        <circle cx="555.9833526611328" cy="107" r="5" class="ct-slice-bar"></circle>
                        <line x1="611.3510213623047" x2="611.3500213623047" y1="135" y2="79" class="ct-bar" ct:value="4" style="stroke-width: 5px"></line>
                        <circle cx="611.3500213623047" cy="79" r="5" class="ct-slice-bar"></circle>
                        <line x1="666.7176900634765" x2="666.7166900634766" y1="135" y2="37" class="ct-bar" ct:value="7" style="stroke-width: 5px"></line>
                        <circle cx="666.7166900634766" cy="37" r="5" class="ct-slice-bar"></circle>
                      </g>
                    </g>
                    <g class="ct-labels">
                      <foreignObject style="overflow: visible;" x="30" y="270" width="55.366668701171875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 55px; height: 20px;">J</span></foreignObject>
                      <foreignObject style="overflow: visible;" x="85.36666870117188" y="270" width="55.366668701171875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 55px; height: 20px;">F</span></foreignObject>
                      <foreignObject style="overflow: visible;" x="140.73333740234375" y="270" width="55.366668701171875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 55px; height: 20px;">M</span></foreignObject>
                      <foreignObject style="overflow: visible;" x="196.10000610351562" y="270" width="55.366668701171875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 55px; height: 20px;">A</span></foreignObject>
                      <foreignObject style="overflow: visible;" x="251.4666748046875" y="270" width="55.366668701171875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 55px; height: 20px;">M</span></foreignObject>
                      <foreignObject style="overflow: visible;" x="306.8333435058594" y="270" width="55.366668701171875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 55px; height: 20px;">J</span></foreignObject>
                      <foreignObject style="overflow: visible;" x="362.20001220703125" y="270" width="55.366668701171875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 55px; height: 20px;">J</span></foreignObject>
                      <foreignObject style="overflow: visible;" x="417.5666809082031" y="270" width="55.366668701171875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 55px; height: 20px;">A</span></foreignObject>
                      <foreignObject style="overflow: visible;" x="472.933349609375" y="270" width="55.366668701171875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 55px; height: 20px;">S</span></foreignObject>
                      <foreignObject style="overflow: visible;" x="528.3000183105469" y="270" width="55.366668701171875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 55px; height: 20px;">O</span></foreignObject>
                      <foreignObject style="overflow: visible;" x="583.6666870117188" y="270" width="55.366668701171875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 55px; height: 20px;">N</span></foreignObject>
                      <foreignObject style="overflow: visible;" x="639.0333557128906" y="270" width="55.366668701171875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 55px; height: 20px;">D</span></foreignObject>
                    </g>
                    <defs>
                      <linearGradient id="StackbarGradient" x1="0" y1="1" x2="0" y2="0">
                        <stop offset="0" stop-color="rgba(0, 201, 255,1)"></stop>
                        <stop offset="1" stop-color="rgba(17,228,183, 1)"></stop>
                      </linearGradient>
                    </defs>
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-8" id="recent-sales">
            <div class="card" style="">
              <div class="card-header">
                <div class="card-title-wrap bar-primary">
                  <h4 class="card-title">Recent Buyers</h4>
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
                        <th class="border-top-0">Product</th>
                        <th class="border-top-0">Customers</th>
                        <th class="border-top-0">Categories</th>
                        <th class="border-top-0">Popularity</th>
                        <th class="border-top-0">Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-truncate">iPone X</td>
                        <td class="text-truncate">Jim</td>
                        <td>
                          <button class="btn btn-sm btn-outline-danger round mb-0" type="button">Mobile</button>
                        </td>
                        <td>
                          <div class="box-shadow-2 mt-1">
                            <div class="progress" style="height: 8px;">
                              <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" aria-valuenow="85" aria-valuemin="20" aria-valuemax="100" style="width:85%"></div>
                            </div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 1200.00</td>
                      </tr>
                      <tr>
                        <td class="text-truncate">iPad</td>
                        <td class="text-truncate">Jack</td>
                        <td>
                          <button class="btn btn-sm btn-outline-success round mb-0" type="button">Tablet</button>
                        </td>
                        <td>
                          <div class="box-shadow-2 mt-1">
                            <div class="progress" style="height: 8px;">
                              <div class="progress-bar progress-bar-striped bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="20" aria-valuemax="100" style="width:75%"></div>
                            </div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 1190.00</td>
                      </tr>
                      <tr>
                        <td class="text-truncate">OnePlus</td>
                        <td class="text-truncate">Dolly</td>
                        <td>
                          <button class="btn btn-sm btn-outline-danger round mb-0" type="button">Mobile</button>
                        </td>
                        <td>
                          <div class="box-shadow-2 mt-1">
                            <div class="progress" style="height: 8px;">
                              <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" aria-valuenow="70" aria-valuemin="20" aria-valuemax="100" style="width:70%"></div>
                            </div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 999.00</td>
                      </tr>
                      <tr>
                        <td class="text-truncate">ZenPad</td>
                        <td class="text-truncate">Sam</td>
                        <td>
                          <button class="btn btn-sm btn-outline-success round mb-0" type="button">Tablet</button>
                        </td>
                        <td>
                          <div class="box-shadow-2 mt-1">
                            <div class="progress" style="height: 8px;">
                              <div class="progress-bar progress-bar-striped bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="20" aria-valuemax="100" style="width:60%"></div>
                            </div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 1150.00</td>
                      </tr>
                      <tr>
                        <td class="text-truncate">Pixel 2</td>
                        <td class="text-truncate">John</td>
                        <td>
                          <button class="btn btn-sm btn-outline-danger round mb-0" type="button">Mobile</button>
                        </td>
                        <td>
                          <div class="box-shadow-2 mt-1">
                            <div class="progress" style="height: 8px;">
                              <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" aria-valuenow="45" aria-valuemin="20" aria-valuemax="100" style="width:45%"></div>
                            </div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 1180.00</td>
                      </tr>
                      <tr>
                        <td class="text-truncate">Pixel 2</td>
                        <td class="text-truncate">John</td>
                        <td>
                          <button class="btn btn-sm btn-outline-danger round mb-0" type="button">Mobile</button>
                        </td>
                        <td>
                          <div class="box-shadow-2 mt-1">
                            <div class="progress" style="height: 8px;">
                              <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" aria-valuenow="45" aria-valuemin="20" aria-valuemax="100" style="width:45%"></div>
                            </div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 1180.00</td>
                      </tr>
                      <tr>
                        <td class="text-truncate">Pixel 1</td>
                        <td class="text-truncate">Tony</td>
                        <td>
                          <button class="btn btn-sm btn-outline-danger round mb-0" type="button">Mobile</button>
                        </td>
                        <td>
                          <div class="box-shadow-2 mt-1">
                            <div class="progress" style="height: 8px;">
                              <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" aria-valuenow="45" aria-valuemin="20" aria-valuemax="100" style="width:45%"></div>
                            </div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 1080.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row match-height">
          <div class="col-xl-6 col-lg-12">
            <div class="card">
              <div class="card-header">
                <div class="card-title-wrap bar-primary">
                  <h4 class="card-title">Product Statistics</h4>
                </div>
              </div>
              <div class="card-body">

                <p class="font-medium-2 text-muted text-center">Hobbies</p>
                <div id="bar-chart" class="height-250 BarChartShadow BarChart">
                  <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;">
                    <g class="ct-grids"></g>
                    <g>
                      <g class="ct-series ct-series-a">
                        <line x1="79.94100244140625" x2="79.94000244140625" y1="195" y2="98.33333333333333" class="ct-bar" ct:value="35"></line>
                        <circle cx="79.94000244140625" cy="98.33333333333333" r="12" class="ct-slice-bar"></circle>
                        <line x1="219.82100732421875" x2="219.82000732421875" y1="195" y2="148.33333333333331" class="ct-bar" ct:value="20"></line>
                        <circle cx="219.82000732421875" cy="148.33333333333331" r="12" class="ct-slice-bar"></circle>
                        <line x1="359.7010122070312" x2="359.70001220703125" y1="195" y2="115" class="ct-bar" ct:value="30"></line>
                        <circle cx="359.70001220703125" cy="115" r="12" class="ct-slice-bar"></circle>
                        <line x1="499.5810170898437" x2="499.58001708984375" y1="195" y2="65" class="ct-bar" ct:value="45"></line>
                        <circle cx="499.58001708984375" cy="65" r="12" class="ct-slice-bar"></circle>
                        <line x1="639.4610219726562" x2="639.4600219726562" y1="195" y2="31.666666666666657" class="ct-bar" ct:value="55"></line>
                        <circle cx="639.4600219726562" cy="31.666666666666657" r="12" class="ct-slice-bar"></circle>
                      </g>
                    </g>
                    <g class="ct-labels">
                      <foreignObject style="overflow: visible;" x="10" y="220" width="139.8800048828125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 140px; height: 20px;">Sport</span></foreignObject>
                      <foreignObject style="overflow: visible;" x="149.8800048828125" y="220" width="139.8800048828125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 140px; height: 20px;">Music</span></foreignObject>
                      <foreignObject style="overflow: visible;" x="289.760009765625" y="220" width="139.8800048828125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 140px; height: 20px;">Travel</span></foreignObject>
                      <foreignObject style="overflow: visible;" x="429.6400146484375" y="220" width="139.8800048828125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 140px; height: 20px;">News</span></foreignObject>
                      <foreignObject style="overflow: visible;" x="569.52001953125" y="220" width="139.8800048828125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 140px; height: 20px;">Blog</span></foreignObject>
                    </g>
                    <defs>
                      <linearGradient id="gradient4" x1="0" y1="1" x2="0" y2="0">
                        <stop offset="0" stop-color="rgba(238, 9, 121,1)"></stop>
                        <stop offset="1" stop-color="rgba(255, 106, 0, 1)"></stop>
                      </linearGradient>
                      <linearGradient id="gradient5" x1="0" y1="1" x2="0" y2="0">
                        <stop offset="0" stop-color="rgba(0, 75, 145,1)"></stop>
                        <stop offset="1" stop-color="rgba(120, 204, 55, 1)"></stop>
                      </linearGradient>
                      <linearGradient id="gradient6" x1="0" y1="1" x2="0" y2="0">
                        <stop offset="0" stop-color="rgba(132, 60, 247,1)"></stop>
                        <stop offset="1" stop-color="rgba(56, 184, 242, 1)"></stop>
                      </linearGradient>
                      <linearGradient id="gradient7" x1="0" y1="1" x2="0" y2="0">
                        <stop offset="0" stop-color="rgba(155, 60, 183,1)"></stop>
                        <stop offset="1" stop-color="rgba(255, 57, 111, 1)"></stop>
                      </linearGradient>
                      <linearGradient id="gradient8" x1="0" y1="1" x2="0" y2="0">
                        <stop offset="0" stop-color="rgba(0, 201, 255,1)"></stop>
                        <stop offset="1" stop-color="rgba(17,228,183, 1)"></stop>
                      </linearGradient>
                    </defs>
                  </svg>
                </div>

                <div class="card-block">
                  <div class="row">
                    <div class="col text-center">
                      <span class="gradient-pomegranate d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                      <span class="font-large-1 d-block mb-2">48</span>
                      <span>Sport</span>
                    </div>
                    <div class="col text-center">
                      <span class="gradient-green-tea d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                      <span class="font-large-1 d-block mb-2">9</span>
                      <span>Music</span>
                    </div>
                    <div class="col text-center">
                      <span class="gradient-blackberry d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                      <span class="font-large-1 d-block mb-2">26</span>
                      <span>Travel</span>
                    </div>
                    <div class="col text-center">
                      <span class="gradient-ibiza-sunset d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                      <span class="font-large-1 d-block mb-2">17</span>
                      <span>News</span>
                    </div>
                    <div class="col text-center">
                      <span class="gradient-back-to-earth d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                      <span class="font-large-1 d-block mb-2">52</span>
                      <span>Blog</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-12">
            <div class="card" style="">
              <div class="card-header">
                <div class="card-title-wrap bar-warning">
                  <h4 class="card-title">Trạng thái đặt hàng</h4>
                </div>
              </div>
              <div class="card-body">
                <p class="font-medium-2 text-muted text-center">Project Tasks</p>
                <div id="donut-dashboard-chart" class="height-250 donut donutShadow">
                  <svg  width="100%" height="100%" class="ct-chart-donut" style="width: 100%; height: 100%;">
                    <g ct:series-name="done" class="ct-series ct-done">
                      <path d="M460.498,193.829A120,120,0,0,0,270.275,47.865L293.256,67.149A90,90,0,0,1,435.924,176.622Z" class="ct-slice-donut-solid" ct:value="35"></path>
                    </g>
                    <g ct:series-name="progress" class="ct-series ct-progress">
                      <path d="M331.142,240.911A120,120,0,0,0,460.738,193.486L436.103,176.364A90,90,0,0,1,338.906,211.933Z" class="ct-slice-donut-solid" ct:value="14"></path>
                    </g>
                    <g ct:series-name="outstanding" class="ct-series ct-outstanding">
                      <path d="M270.275,47.865A120,120,0,0,0,331.547,241.019L339.21,212.014A90,90,0,0,1,293.256,67.149Z" class="ct-slice-donut-solid" ct:value="23"></path>
                    </g>
                    <g ct:series-name="outstanding2" class="ct-series ct-outstanding2">
                      <path d="M270.275,47.865A120,120,0,0,0,331.547,241.019L339.21,212.014A90,90,0,0,1,293.256,67.149Z" class="ct-slice-donut-solid" ct:value="23"></path>
                    </g>
                    <g><text dx="362.20001220703125" dy="125" text-anchor="middle" class="ct-label">72%</text></g>
                    <defs>
                      <linearGradient id="donutGradient1" x1="0" y1="1" x2="0" y2="0">
                        <stop offset="0" stop-color="rgba(155, 60, 183,1)"></stop>
                        <stop offset="1" stop-color="rgba(255, 57, 111, 1)"></stop>
                      </linearGradient>
                      <linearGradient id="donutGradient2" x1="0" y1="1" x2="0" y2="0">
                        <stop offset="0" stop-color="rgba(0, 75, 145,0.8)"></stop>
                        <stop offset="1" stop-color="rgba(120, 204, 55, 0.8)"></stop>
                      </linearGradient>
                      <linearGradient id="donutGradient3" x1="0" y1="1" x2="0" y2="0">
                        <stop offset="0" stop-color="rgba(132, 60, 247,1)"></stop>
                        <stop offset="1" stop-color="rgba(56, 184, 242, 1)"></stop>
                      </linearGradient>
                    </defs>
                  </svg>
                </div>

                <div class="card-block">
                  <div class="row my-3">
                    <div class="col">
                      <span class="mb-1 text-muted d-block">23% - Started</span>
                      <div class="progress" style="height: 8px;">
                        <div class="progress-bar gradient-blackberry" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <div class="col">
                      <span class="mb-1 text-muted d-block">35% - In Progress</span>
                      <div class="progress" style="height: 8px;">
                        <div class="progress-bar gradient-pomegranate" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <div class="col">
                      <span class="mb-1 text-muted d-block">14% - Done</span>
                      <div class="progress" style="height: 8px;">
                        <div class="progress-bar gradient-green-tea" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
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