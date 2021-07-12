@extends('layouts.back-end')
@section('title')
   Create Product
@endsection
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Create Product</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{url("/")}}">Home</a></li>
                <li class="breadcrumb-item active">Create Product</li>
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
                    <h3>Input Product</h3>
                </div>
                <div class="card-body">
                    <form action="{{url('admin/product/store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                      
                      <div class="col-md-6">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" name="name" required>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Cara Penggunaan</label>
                          <textarea class="form-control" id="exampleInputEmail1" placeholder="Enter Name" name="cara_penggunaan" ></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">ML</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter ML" name="ml">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Price</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Price" name="price">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Suited To</label>
                            <textarea  class="form-control" id="exampleInputEmail1" placeholder="Enter Suited To" name="suitedto"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Image</label>
                            <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="image">
                        </div>


                    </div>
                      
                      <div class="col-md-6">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea  class="form-control" id="exampleInputEmail1" placeholder="Enter Description" name="description"></textarea>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">bpom</label>
                          <input type="text"  class="form-control" id="exampleInputEmail1" placeholder="Enter Description" name="bpom">
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">berat</label>
                          <input type="text"  class="form-control" id="exampleInputEmail1" placeholder="Enter Description" name="weight" value=""> 
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">How To Use</label>
                            <textarea  class="form-control" id="exampleInputEmail1" placeholder="Enter How To Use" name="howtouse"></textarea>
                        </div>
                        
                        <div class="form-group">
                          <label>Skin Feel</label>
                          <textarea  class="form-control" id="exampleInputEmail1" placeholder="Skin Feel" name="skinfeel"></textarea>
                        </div>
                       
                      </div>
                      
                    </div>
        
                   
                    <div class="row">
                      <div class="col-12 col-sm-6">
                        <div class="form-group">
                          <label>Key Ingredients</label>
                          <textarea class="textarea" placeholder="Place some text here" name="ingredients"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
                      </div>
                      <!-- /.col -->
                      <div class="col-12 col-sm-6">
                        <div class="form-group">
                          <label>Ingredients</label>
                          <textarea class="textarea" placeholder="Place some text here" name="keyingredients"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
                        <!-- /.form-group -->
                      </div>
                      <!-- /.col -->
                    </div>
                    
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>

                  </div>
              </div>
            </div>
        </div>
    </section>
</div>
@endsection