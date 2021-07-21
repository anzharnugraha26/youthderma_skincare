@extends('layouts.back-end')
@section('title')
   Daftar Cusstommer(User)
@endsection
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Customers (User)</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
              <li class="breadcrumb-item active">Customers (User)</li>
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
                  <th>No</th>
                  <th>Name</th>       
                  <th>email</th>       
                  <th>image</th>
                  <th>action</th>
                </tr>
                </thead>
                <tbody>
                    <?php $user = DB::table('users')->get();?>
                   @foreach ($user as $item)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$item->name}}</td>
                  <td>{{ $item->email }}</td>  
                  <td>Test</td>
                  <td>
                    <a class="btn btn-info btn-sm" href="{{url('admin/product/edit/'.$item->id )}}" style="margin-top: 10px"> <i class="fas fa-pencil-alt edit"></i> Edit</a>  <a class="btn btn-info btn-sm" href="{{url("/product-detail/$item->id")}}" style="background:blue;margin-top: 10px"  target="_blank"><i class="fas fa-eye"></i> View</a>
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