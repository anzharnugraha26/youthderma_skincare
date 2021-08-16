@extends('layouts.back-end')
@section('title')
  Daftar Admin Website
@endsection
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url("admin/control-admin/create")}}" class="btn btn-info btn-sm"><i class="fas fa-save"></i>  Add Admin</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    
    <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Admin</h3>
  
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="box-body table-responsive no-padding"> 
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 20%">
                                Admin Name
                            </th>
                            <th style="width: 20%">
                                Email
                            </th>
                            <th style="width: 8%" class="text-center">
                            Role
                            </th>
                        
                            <th style="width: 20%">
                                
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $admin = DB::table('users')->where('role', 'admin')->get(); ?>
                        @foreach ($admin as $item)
                
                        <tr>
                            <td>
                                #
                            </td>
                            <td>
                                {{$item->name}}
                            </td>
                            <td>
                                {{$item->email}}
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">{{$item->role}}</span>
                            </td>
                            
                            <td class="project-actions text-right">
                            
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        
                        @endforeach     


                    </tbody>
                </table>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
  
      </section>
</div>


@endsection