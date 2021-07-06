@extends('layouts.shop')
@section('content')
<div id="page-content">
    <!--Page Title-->
    <div class="page section-header text-center">
        <div class="page-title">
            <div class="wrapper"><h1 class="page-width">Checkout</h1></div>
          </div>
    </div>
    <!--End Page Title-->
    
    <div class="container">
       
        <div class="row billing-fields">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 sm-margin-30px-bottom">
                <div class="create-ac-content bg-light-gray padding-20px-all">
                    <form>
                        <fieldset>
                            <h2 class="login-title mb-3">Billing details</h2>
                            <div class="row">
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="input-firstname"> Name <span class="required-f">*</span></label>
                                    <input name="name" value="{{Auth::user()->name}}" id="input-firstname" type="text" disabled>
                                </div>
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="input-email">E-Mail <span class="required-f">*</span></label>
                                    <input name="email" value="{{Auth::user()->email}}" id="input-email" type="email" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="input-telephone">Telephone <span class="required-f">*</span></label>
                                    <input name="telephone" value="{{$alamat->phone}}" id="input-telephone" type="tel" disabled>
                                </div>
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="input-telephone">Detail Address <span class="required-f">*</span></label>
                                    <input name="telephone" value="{{$alamat->detail}}" id="input-telephone" type="tel" disabled>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="row">
                                <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                    <label for="input-company">Province</label>
                                    <input name="company" value="{{$alamat->prov}}" id="input-company" type="text">
                                </div>
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="input-address-1">City <span class="required-f">*</span></label>
                                    <input name="address_1" value="{{$alamat->kota}}" id="input-address-1" type="text">
                                </div>
                            </div>
                            <div class="row">
                                {{-- <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                    <label for="input-address-2">Courier <span class="required-f">*</span></label>
                                    <select  name="courier">
                                        <option value="0">-- pilih jasa kurir --</option>
                                        <option value="jne">JNE</option>
                                        <option value="pos">POS</option>
                                        <option value="tiki">TIKI</option>
                                        
                                    </select>
                                </div> --}}
                                {{-- <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="input-city">Province <span class="required-f">*</span></label>
                                    <select  name="province_destination">
                                        <option value="0">-- pilih provinsi asal --</option>
                                        @foreach ($alamat as $value)
                                            <option value="{{ $value->province_id  }}">{{ $value->prov }}</option>
                                        @endforeach
                                    </select>
                                </div> --}}
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="input-postcode">Post Code <span class="required-f">*</span></label>
                                    <input name="postcode" value="" id="input-postcode" type="text">
                                </div>
                                {{-- <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="input-country">City <span class="required-f">*</span></label>
                                    <select name="city_destination" id="input-country">
                                        <option value=""> --- Please Select --- </option>
                            
                                    </select>
                                </div> --}}
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                               
                                <a href="{{url('shop/edit-address/' . Auth::user()->id)}}" class="">Edit Alamat</a>
                               
                            </div>
                                {{-- <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="input-zone">Region / State <span class="required-f">*</span></label>
                                    <select name="zone_id" id="input-zone">
                                        <option value=""> --- Please Select --- </option>
                                        <option value="3513">Aberdeen</option>
                                        <option value="3514">Aberdeenshire</option>
                                        <option value="3515">Anglesey</option>
                                        <option value="3516">Angus</option>
                                    </select>
                                </div> --}}
                            </div>
                        </fieldset>

                        <fieldset>
                            {{-- <div class="row">
                                <div class="form-group form-check col-md-12 col-lg-12 col-xl-12">
                                    <label class="form-check-label padding-15px-left">
                                        <input type="checkbox" class="form-check-input" value=""><strong>Create an account ?</strong>
                                    </label>
                                </div>
                            </div> --}}
                        </fieldset>

                        <fieldset>
                            {{-- <div class="row">
                                <div class="form-group col-md-12 col-lg-12 col-xl-12">
                                    <label for="input-company">Order Notes <span class="required-f">*</span></label>
                                    <textarea class="form-control resize-both" rows="3"></textarea>
                                </div>
                            </div> --}}
                        </fieldset>
                    </form>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="your-order-payment">
                    <div class="your-order">
                        <h2 class="order-title mb-4">Your Order</h2>

                        <div class="table-responsive-sm order-table">
                            <form action="{{url("order-simpan")}}" method="POST">
                                @csrf 
                            <table class="bg-white table table-bordered table-hover text-center">
                                <thead>
                                    <tr>
                                        <th class="text-left">Product Name</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $subtotal=0; foreach ($keranjangs as $item): ?>
                                        
                                    <tr>
                                        <td class="text-left">{{$item->name_produk}}</td>
                                        <td>{{ 'Rp.' . number_format($item->price) }}</td>
                                        <td>{{$item->qty}}</td>
                                        <td>{{ 'Rp.' . number_format($item->price * $item->qty) }}</td>
                                    </tr>
                                    <?php
                                            $total = $item->price * $item->qty;
                                            $subtotal = $subtotal + $total;
                                    ?> 
                                    
                                    <?php endforeach; ?>

                                </tbody>
                                <tfoot class="font-weight-600">
                                    <tr>
                                        <td colspan="3" class="text-right">Total</td>
                                        <td>{{'Rp.' . number_format($subtotal)}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="text-right">Biaya Ongkir (JNE)</td>
                                        <td>{{'Rp.' . number_format($ongkir)}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="text-right">Grand Total</td>
                                        <td>{{'Rp.' . number_format($ongkir + $subtotal)}}</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    
                    <hr />

                    <div class="your-payment">
                        <h2 class="payment-title mb-3">payment method</h2>
                        <div class="payment-method">
                            <div class="payment-accordion">
                                <div id="accordion" class="payment-section">
                                    <div class="card mb-2">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapseOne">Bank Transfer </a>
                                        </div>
                                        <div id="collapseOne" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="col">
                                                    {{-- <div>
                                                    <img src="{{asset('image/bank/bca.png')}}" style="width: 250px;height: 150px;">
                                                    </div> --}}
                                                    <p>Transfer Sebesar {{'Rp.' . number_format($ongkir + $subtotal)}}  </p>
                                                    <p>No Rek : 123121212121</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="card mb-2">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">Cheque Payment</a>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                <p class="no-margin font-15">Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="card margin-15px-bottom border-radius-none">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree"> PayPal </a>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                <p class="no-margin font-15">Pay via PayPal; you can pay with your credit card if you don't have a PayPal account.</p>
                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="card mb-2">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour"> Payment Information </a>
                                        </div>
                                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                            <label for="input-cardname">Name on Card <span class="required-f">*</span></label>
                                                            <input name="cardname" value="" placeholder="Card Name" id="input-cardname" class="form-control" type="text">
                                                        </div>
                                                        <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                            <label for="input-country">Credit Card Type <span class="required-f">*</span></label>
                                                            <select name="country_id" class="form-control">
                                                                <option value=""> --- Please Select --- </option>
                                                                <option value="1">American Express</option>
                                                                <option value="2">Visa Card</option>
                                                                <option value="3">Master Card</option>
                                                                <option value="4">Discover Card</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                            <label for="input-cardno">Credit Card Number  <span class="required-f">*</span></label>
                                                            <input name="cardno" value="" placeholder="Credit Card Number" id="input-cardno" class="form-control" type="text">
                                                        </div>
                                                        <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                            <label for="input-cvv">CVV Code <span class="required-f">*</span></label>
                                                            <input name="cvv" value="" placeholder="Card Verification Number" id="input-cvv" class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                            <label>Expiration Date <span class="required-f">*</span></label>
                                                            <input type="date" name="exdate" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                            <img class="padding-25px-top xs-padding-5px-top" src="assets/images/payment-img.jpg" alt="card" title="card" />
                                                        </div>
                                                    </div>
                                                </fieldset>

                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <?php ?>

                            <input type="hidden" value="{{ $invoice }}" name="invoice">
                            <input type="hidden" value="{{ $ongkir + $subtotal }}" name="subtotal">
                            <input type="hidden" value="{{ $ongkir }}" name="ongkir">
                            <input name="no_hp" value="{{$alamat->phone}}"  type="hidden" >
                            <div class="order-button-payment">
                                <button class="btn" value="Place order" type="submit">Place order</button>
                            </div>
                        </div>
                    </div>
                </form>

                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="card d-none ongkir">
                                <div class="card-body">
                                    <ul class="list-group" id="ongkir"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
@section('script-shop')
<script>
    $(document).ready(function(){
        //active select2
        $(".provinsi-asal , .kota-asal, .provinsi-tujuan, .kota-tujuan").select2({
            theme:'bootstrap4',width:'style',
        });
        //ajax select kota asal
        $('select[name="province_origin"]').on('change', function () {
            let provindeId = $(this).val();
            if (provindeId) {
                jQuery.ajax({
                    url: '/cities/'+provindeId,
                    type: "GET",
                    dataType: "json",
                    success: function (response) {
                        $('select[name="city_origin"]').empty();
                        $('select[name="city_origin"]').append('<option value="">-- pilih kota asal --</option>');
                        $.each(response, function (key, value) {
                            $('select[name="city_origin"]').append('<option value="' + key + '">' + value + '</option>');
                        });
                    },
                });
            } else {
                $('select[name="city_origin"]').append('<option value="">-- pilih kota asal --</option>');
            }
        });
        //ajax select kota tujuan
        $('select[name="province_destination"]').on('change', function () {
            let provindeId = $(this).val();
            if (provindeId) {
                jQuery.ajax({
                    url: '/shop/check-out/getcities/'+provindeId,
                    type: "GET",
                    dataType: "json",
                    success: function (response) {
                        $('select[name="city_destination"]').empty();
                        $('select[name="city_destination"]').append('<option value="">-- pilih kota tujuan --</option>');
                        $.each(response, function (key, value) {
                            $('select[name="city_destination"]').append('<option value="' + key + '">' + value + '</option>');
                        });
                    },
                });
            } else {
                $('select[name="city_destination"]').append('<option value="">-- pilih kota tujuan --</option>');
            }
        });


        //ajax check ongkir
        let isProcessing = false;
        $('.btn-check').click(function (e) {
            e.preventDefault();

            let token            = $("meta[name='csrf-token']").attr("content");
            let city_origin      = $('select[name=city_origin]').val();
            let city_destination = $('select[name=city_destination]').val();
            let courier          = $('select[name=courier]').val();
            let weight           = $('#weight').val();

            if(isProcessing){
                return;
            }

            isProcessing = true;
            jQuery.ajax({
                url: "/ongkir",
                data: {
                    _token:              token,
                    city_origin:         city_origin,
                    city_destination:    city_destination,
                    courier:             courier,
                    weight:              weight,
                },
                dataType: "JSON",
                type: "POST",
                success: function (response) {
                    isProcessing = false;
                    if (response) {
                        $('#ongkir').empty();
                        $('.ongkir').addClass('d-block');
                        $.each(response[0]['costs'], function (key, value) {
                            $('#ongkir').append('<li class="list-group-item">'+response[0].code.toUpperCase()+' : <strong>'+value.service+'</strong> - Rp. '+value.cost[0].value+' ('+value.cost[0].etd+' hari)</li>')
                        });

                    }
                }
            });

        });

    });
</script>
@endsection