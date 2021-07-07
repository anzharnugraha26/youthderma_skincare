@extends('layouts.shop')
@section('content')
    
<div id="page-content">
    <!--Page Title-->
    <div class="page section-header text-center">
        <div class="page-title">
            <div class="wrapper"><h1 class="page-width">Create an Account</h1></div>
          </div>
    </div>
    <!--End Page Title-->
    
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
                <div class="mb-4">
                   <form method="post" action="{{url("updatealamat/". $alamat->id)}}" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form">	
                    @csrf  
                    <div class="row">
                          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="FirstName">Pilih Provinsi</label>
                                <select name="province_id" placeholder="" id="province_id" autofocus="">
                                    <option value="">Pilih Provinsi</option>
                                    <?php $a = DB::table('provinces')->get();  ?>
                                        @foreach($a as $provinsi)
                                        <option value="{{ $provinsi->province_id }}"  @if($provinsi->province_id == $alamat->province_id) selected="selected" @endif>{{ $provinsi->name }}</option>
                                        @endforeach
                                </select>
                            </div>
                           </div>
                           <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="LastName">Pilih Kota Kabupaten</label>
                                <select name="cities_id" id="cities_id"autofocus="" >
                                    <?php $b = DB::table('cities')->where('province_id', $alamat->province_id)->get();  ?>
                                    @foreach($b as $kota)
                                   <option value="{{$kota->city_id}}" @if($kota->city_id == $alamat->city_id) selected="selected" @endif>{{$kota->type}} {{$kota->name}}</option>
                                   @endforeach
                                </select>
                            </div>
                           </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="CustomerEmail">No Telp</label>
                                <input type="text" name="phone" value="{{$alamat->phone}}" placeholder="" id="CustomerEmail" class="" autocorrect="off" autocapitalize="off" autofocus="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="CustomerPassword">Alamat Lengkap</label>
                                <textarea  name="detail" placeholder="" id="CustomerPassword" class="">{{$alamat->detail}}</textarea>                        	
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                            <input type="submit" class="btn mb-3" value="Update">
                        </div>
                     </div>
                 </form>
                </div>
               </div>
        </div>
    </div>
    
</div>

@endsection

@section('script-shop')
<script>
    var toHtml = (tag, value) => {
	$(tag).html(value);
	}
 $(document).ready(function() {
    //  $('#province_id').select2();
    //  $('#cities_id').select2();
     $('#province_id').on('change',function(){
     var id = $('#province_id').val();
     var url = window.location.href;
     var urlNya = url.substring(0, url.lastIndexOf('/alamat/'));   
     $.ajax({
         type:'GET',
         url:urlNya + '/getcity/' + id,
         dataType:'json',
         success:function(data){
            var op = '<option value="">Pilih Kota</option>';
            if(data.length > 0) {
			var i = 0;
			for(i = 0; i < data.length; i++) {
				op += `<option value="${data[i].city_id}">${data[i].type} ${data[i].name}</option>`
			}
		    }
            toHtml('[name="cities_id"]', op);
         }
     })
     })
 });    
    
    
    </script>
@endsection
