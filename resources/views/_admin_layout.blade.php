<!DOCTYPE html>
<html lang="en" class="loading">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf_token" content="{{csrf_token()}}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Convex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, Convex admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <title>Extended Table - Convex bootstrap 4 admin dashboard template</title>
  <link rel="apple-touch-icon" sizes="60x60" href="/assets/admin/img/ico/apple-icon-60.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/admin/img/ico/apple-icon-76.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/assets/admin/img/ico/apple-icon-120.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/assets/admin/img/ico/apple-icon-152.png">
  <link rel="shortcut icon" type="image/x-icon" href="/assets/admin/img/ico/favicon.ico">
  <link rel="shortcut icon" type="image/png" href="/assets/admin/img/ico/favicon-32.png">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/assets/admin/fonts/feather/style.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/admin/fonts/simple-line-icons/style.css">
  <link rel="stylesheet" type="text/css" href="/assets/admin/fonts/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/admin/vendors/css/perfect-scrollbar.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/admin/vendors/css/prism.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/admin/vendors/css/toastr.css">
  <link rel="stylesheet" type="text/css" href="/assets/admin/vendors/css/tagging.css">
  <link rel="stylesheet" type="text/css" href="/assets/admin/css/app.css">
  <link rel="stylesheet" type="text/css" href="/assets/styles/custom_theme.css">
</head>

<body data-col="2-columns" class=" 2-columns " ng-app="app" ng-controller="globalController">
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="wrapper">

    <!-- Sidebar -->
    @include('includes.admin.sidebar')


    <!-- Header -->
    @include('includes.admin.header')

    <!-- Content -->
    @yield('content')
    
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->

  <!-- BEGIN VENDOR JS-->
  <script src="/assets/admin/vendors/js/core/jquery-3.3.1.min.js"></script>
  <script src="/assets/admin/vendors/js/core/popper.min.js"></script>
  <script src="/assets/admin/vendors/js/core/bootstrap.min.js"></script>
  <script src="/assets/admin/vendors/js/perfect-scrollbar.jquery.min.js"></script>
  <script src="/assets/admin/vendors/js/prism.min.js"></script>
  <script src="/assets/admin/vendors/js/jquery.matchHeight-min.js"></script>
  <script src="/assets/admin/vendors/js/screenfull.min.js"></script>
  <script src="/assets/admin/vendors/js/pace/pace.min.js"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="/assets/admin/vendors/js/tagging.min.js"></script>
  <script src="/assets/admin/vendors/js/toastr.min.js"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN CONVEX JS-->
  <script src="/assets/admin/js/app-sidebar.js"></script>
  <script src="/assets/admin/js/notification-sidebar.js"></script>
  <script src="/assets/admin/js/customizer.js"></script>
  <script src="/assets/admin/js/tagging.js"></script>
  <!-- END CONVEX JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <!-- END PAGE LEVEL JS-->

  <!-- AngularJS -->
  <script src="/assets/js/angular.min.js"></script>
  <script src="/assets/js/dirPagination.js"></script>
  <script src="/assets/js/controllers/initializationController.js"></script>
  <script src="/assets/js/controllers/admin/globalController.js"></script>
  <script src="//cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
  <script src="/assets/js/angular-ckeditor.js"></script>
  @yield('js')
  

</body>

</html>