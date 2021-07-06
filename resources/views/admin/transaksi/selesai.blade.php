@extends('layouts.back-end')
@section('title')
  Transaksi Selesai 
@endsection
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Transaksi selesai</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Daftar Transaksi</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="box-body table-responsive no-padding">
              <table id="tbl" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th width="5%">No</th>
                    <th>No Invoice</th>
                    <th>Pemesan</th>
                    <th>Subtotal</th>
                    <th>Metode Pembayaran</th>
                    <th>Status Pesanan</th>
                    <th width="15%">Aksi</th>
                </tr>
                </thead>
                <tbody>
                   @foreach ($orderbaru as $item)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{ $item->invoice }}</td>
                  <td>{{ $item->nama_pemesan }}</td>
                  <td>{{  'Rp.' . number_format($item->subtotal) }}</td>
                  <td>{{ $item->metode_pembayaran }}</td>
                  <td>{{ $item->name }}</td>
                  <td>
                    <a class="btn btn-info btn-sm" href="{{url("admin/transaksi-detail/$item->id")}}" style="background:blue;margin-top: 10px"  target="_blank"><i class="fas fa-eye"></i> Detail</a>
                  </td>
                </tr>
                @endforeach
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
@endsection
@section('script')
@include('admin.include.script')    
@endsection