@extends('layouts.back-end')
@section('title')
   Product
@endsection
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-body pad table-responsive">
              <a href="{{url("/admin/product/create")}}" class="btn block btn-primary btn-lg" style="margin-top: 20px">Tambah Product</a>
              </div>
            </div>
            <div class="card-body">
              <div class="box-body table-responsive no-padding">
              <table id="tbl" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>       
                  <th>Price</th>       
                  <th>image</th>
                  <th>action</th>
                </tr>
                </thead>
                <tbody>
                   @foreach ($product as $item)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$item->name}}</td>
                  <td>{{ 'Rp.' . number_format($item->price) }}</td>
                 
                  <td><img src="{{asset('image/product/'. $item->image)}}" style="width: 100px;height: 100px;"></td>
                  <td>
                    <a class="btn btn-info btn-sm" href="{{url('admin/product/edit/'.$item->id )}}" style="margin-top: 10px"> <i class="fas fa-pencil-alt edit"></i> Edit</a>  <a class="btn btn-info btn-sm" href="{{url("/product-detail/$item->id")}}" style="background:blue;margin-top: 10px"  target="_blank"><i class="fas fa-eye"></i> View</a>
                    <a class="btn btn-danger btn-sm delete" href="{{url('admin/product/destroy/'.$item->id)}}" onclick="return confirm('Anda Yakin akan menghapus data ini ?')" style="margin-top: 10px" id="{{$item->id}}"><i class="far fa-trash-alt" ></i> Delete</a>
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