<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Management</title>
        <base href="{{asset('')}}">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        <!-- Tempusdominus Bbootstrap 4 -->
        <link rel="stylesheet" href="source/assets/dest/css/tempusdominus-bootstrap-4.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="source/assets/dest/css/adminlte.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="source/assets/dest/css/OverlayScrollbars.min.css">
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">

        @yield('content')

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{route('trang-chu')}}" class="brand-link">
            <img src="source/image/luffy.jpg" alt="BeautyShine logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">HOME PAGE</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="source/image/luffy.jpg" class="img-circle elevation-2" alt="Admin Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Trần Văn Thuật</a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                            with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{asset('products')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Products</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{asset('categories')}}" class="nav-link">
                                        <i class="fas fa-book nav-icon"></i>
                                        <p>Categories</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{asset('bill')}}" class="nav-link">
                                        <i class="fas fa-list-ol"></i>
                                        <p>List bill</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- jQuery -->
        <script src="source/assets/dest/js/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="source/assets/dest/js/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="source/assets/dest/js/bootstrap.bundle.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="source/assets/dest/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="source/assets/dest/js/adminlte.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    </body>
</html>