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
                   <form method="post" action="{{url("savealamat")}}" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form">	
                    @csrf  
                    <div class="row">
                          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="FirstName">Pilih Provinsi</label>
                                <select name="province_id" placeholder="" id="province_id" autofocus="">
                                    <option value="">Pilih Provinsi</option>
                                        @foreach($province as $provinsi)
                                        <option value="{{ $provinsi->province_id }}">{{ $provinsi->name }}</option>
                                        @endforeach
                                </select>
                            </div>
                           </div>
                           <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="LastName">Pilih Kota Kabupaten</label>
                                <select name="cities_id" id="cities_id"autofocus="">
                                   
                                </select>
                            </div>
                           </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="CustomerEmail">No Telp</label>
                                <input type="text" name="phone" placeholder="" id="CustomerEmail" class="" autocorrect="off" autocapitalize="off" autofocus="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="CustomerPassword">Alamat Lengkap</label>
                                <textarea  name="detail" placeholder="" id="CustomerPassword" class=""></textarea>                        	
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                            <input type="submit" class="btn mb-3" value="Create">
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
        $('select[name="province_id"]').on('change', function () {
            let provindeId = $(this).val();
            if (provindeId) {
                jQuery.ajax({
                    url: '/getcity/'+provindeId,
                    type: "GET",
                    dataType: "json",
                    success: function (response) {
                        $('select[name="cities_id"]').empty();
                        $('select[name="cities_id"]').append('<option value="">-- pilih kota tujuan --</option>');
                        $.each(response, function (key, value) {
                            $('select[name="cities_id"]').append('<option value="' + key + '">' + value + '</option>');
                        });
                    },
                });
            } else {
                $('select[name="cities_id"]').append('<option value="">-- pilih kota tujuan --</option>');
            }
        });
     });
    </script>
@endsection
