<div data-active-color="white" data-background-color="danger" data-image="/assets/admin/img/sidebar-bg/04.jpg" class="app-sidebar">
  <div class="sidebar-header">
    <div class="logo clearfix"><a href="/admin" class="logo-text float-left">
        <div class="logo-img"><img ng-src="/assets/admin/img/logo.png" alt="Convex Logo" /></div><span class="text align-middle">CONVEX</span>
      </a><a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block"><i data-toggle="expanded" class="ft-disc toggle-icon"></i></a><a id="sidebarClose" href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none"><i class="ft-circle"></i></a></div>
  </div>
  <div class="sidebar-content">
    <div class="nav-container">
      <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
        <li class="nav-item" ng-class="getClass('/admin')"><a href="/admin" class="menu-item"><i class="icon-home"></i><span data-i18n="" class="menu-title">Dashboard</span></a>
        </li>
        <li class="has-sub nav-item"><a href="#"><i class="icon-screen-desktop"></i><span data-i18n="" class="menu-title">Nhà sách</span></a>
          <ul class="menu-content">
            <li ng-class="getClass('/books')"><a href="/admin/books" class="menu-item">Quản lý sách</a>
            </li>
            <li ng-class="getClass('/invoices')"><a href="/admin/invoices" class="menu-item">Quản lý nhập hàng</a>
            </li>
            <li ng-class="getClass('/orders')"><a href="/admin/orders" class="menu-item">Đơn hàng bán</a>
            </li>
            <li ng-class="getClass('/categories')"><a href="/admin/categories" class="menu-item">Quản lý thể loại sách</a>
            </li>
            <li ng-class="getClass('/authors')"><a href="/admin/authors" class="menu-item">Quản lý tác giả</a>
            </li>
            <li ng-class="getClass('/publishers')"><a href="/admin/publishers" class="menu-item">Quản lý nhà xuất bản</a>
            </li>
            <li ng-class="getClass('/languages')"><a href="/admin/languages" class="menu-item">Quản lý ngôn ngữ</a>
            </li>
          </ul>
        </li>
        <li class=" nav-item"><a href=""><i class="icon-support"></i><span data-i18n="" class="menu-title">Support</span></a>
        </li>
      </ul>
    </div>
  </div>
  <div class="sidebar-background"></div>
</div>