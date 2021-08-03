<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="{{asset('image/logo/logo3.png')}}" type="image/png">

  <title>Admin | @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('lte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('lte/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('lte/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('lte/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('lte/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('lte/plugins/toastr/toastr.min.css')}}">

  <link rel="stylesheet" href="{{asset('lte/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{asset('lte/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

  {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>   --}}
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>

    <!-- SEARCH FORM -->
    {{-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> --}}

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
    
      <!-- Notifications Dropdown Menu -->
   
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    {{-- <a href="{{url("/")}}" class="brand-link"> 
      <img src="{{asset('image/logo/logo4.png')}}" alt="" style="height: 52px; width: 141px">
    </a> --}}

    <!-- Sidebar -->
    <div class="sidebar" >
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('image/logo/logo3.png')}}" class="img-circle " alt="User Image">
        </div>
        
        <div class="info">
          <a href="{{url("/admin")}}" class="d-block">{{Auth::user()->name}} </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <li class="nav-item">
            <a href="{{url("admin")}}" class="nav-link  {{ 'admin' == request()->path()? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url("admin/product")}}" class="nav-link  {{ 'admin/product' == request()->path()? 'active' : ''}} {{ 'admin/product/create' == request()->path()? 'active' : ''}}">
              <i class="nav-icon fas fa-sort-amount-up-alt"></i>
              <p>
                Products
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                Transaksi 
                <i class="fas fa-angle-left right"></i>
                <?php $p = DB::table('orders')->whereIn('status_order_id', [1,2,3,4])->count(); ?>
                @if($p > 0)
                <span class="badge badge-info right"><?php echo $p ?></span>
                @endif
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url("admin/transaksi")}}" class="nav-link">
                  <?php $a = DB::table('orders')->where('status_order_id', 1)->count();?>
                  <p> Transaksi Baru <span class="badge badge-info right"></span>
                    @if($a > 0)
                    <span class="badge badge-info right"><?php echo $a ?></span>
                     @endif
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url("admin/transaksi-perlu-dicek")}}" class="nav-link">
                  <?php $b = DB::table('orders')->where('status_order_id', 2)->count(); ?>
                  <p> Transaksi Perlu Di Cek
                    @if($b > 0)
                    <span class="badge badge-info right"><?php echo $b;?></span>
                    @endif
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url("admin/transaksi-perlu-dikirim")}}" class="nav-link">
                  <?php $c = DB::table('orders')->where('status_order_id', 3)->count();?>
                  <p> Transaksi Perlu Di Kirim
                  @if($c > 0)  
                  <span class="badge badge-info right"><?php echo $c;?></span>
                  @endif
                </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url("admin/transaksi-dikirim")}}" class="nav-link">
                  <?php $d = DB::table('orders')->where('status_order_id', 4)->count()?>
                  <p> Transaksi Di Kirim 
                    @if($d > 0)  
                  <span class="badge badge-info right"><?php echo $d;?></span>
                  @endif
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url("admin/transaksi-dibatalkan")}}" class="nav-link">
                  <?php $d = DB::table('orders')->where('status_order_id', 6)->count()?>
                  <p> Transaksi Di Batalkan 
                    @if($d > 0)  
                  <span class="badge badge-info right"><?php echo $d;?></span>
                  @endif
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url("admin/transaksi-selesai")}}" class="nav-link">
                  <p> Transaksi Selesai 
                  </p>
                </a>
              </li>

            </ul>
          </li>
          <hr>
          <li class="nav-item">
            <a href="{{url("admin/product")}}" class="nav-link  {{ 'admin/product' == request()->path()? 'active' : ''}} {{ 'admin/product/create' == request()->path()? 'active' : ''}}">
              <i class="nav-icon far fa-envelope"></i>
              <p>
               Contact Us
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url("admin/product")}}" class="nav-link  {{ 'admin/product' == request()->path()? 'active' : ''}} {{ 'admin/product/create' == request()->path()? 'active' : ''}}">
              <i class="nav-icon fas fa-cog"></i>
              <p>
               Admin Setting
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
               Log-Out
              </p>
            </a>
          </li>
       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

@yield('content')
<footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="{{url("/")}}">Youthderma Aesthectic Clinic Website </a></strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('lte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('lte/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('lte/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('lte/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('lte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('lte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('lte/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('lte/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('lte/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('lte/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('lte/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('lte/dist/js/demo.js')}}"></script>

<script src="{{asset('lte/plugins/toastr/toastr.min.js')}}"></script>

<script src="{{asset('lte/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('lte/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

<script src="{{asset('lte/plugins/select2/js/select2.full.min.js')}}"></script>


@yield('script')
</body>
</html>
