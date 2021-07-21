@extends('layouts.back-end')
@section('title')
   Dashboard 
@endsection
@section('content')
    


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <?php $d= DB::table('orders')->where('status_order_id', 1)->count(); ?>
                <h3><?php echo $d;?></h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{url('admin/transaksi')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ 'Rp.' . number_format($pendapatan->penghasilan) }}</h3>

                <p>Income</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{url('admin/transaksi-selesai')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php $e= DB::table('users')->count(); ?>
                <h3><?php echo $e;?></h3>
                <p>Customers</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{ url('/admin/customers') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">10 Transaksi Terbaru</h4>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th> Invoice </th>
                        <th> Pemesan </th>
                        <th> Subtotal </th>
                        <th> Status Pesanan </th>
                        <th> Aksi </th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($order_baru as $order)
                        <tr>
                          <td>{{ $order->invoice }}</td>
                          <td>{{ $order->nama_pemesan }}</td>
                          <td>{{ $order->subtotal }}</td>
                          <td>{{ $order->name }}</td>
                          <td> <a href="{{url("admin/transaksi-detail/$order->id")}}" class="btn btn-warning btn-sm">Detail</a></td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
  </div>
  

  @endsection
  