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
            
        </div>
        
        <div class="row billing-fields">

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 sm-margin-30px-bottom">
                <div class="create-ac-content bg-light-gray padding-20px-all">
            <fieldset>
                <h2 class="login-title mb-3">Details Address</h2>
            <table>
                <tr>
                    <th>Name</th>
                    <td>:</td>
                    <td>{{ Auth::user()->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>:</td>
                    <td>{{ Auth::user()->email }}</td>
                </tr>
                <tr>
                    <th>Phone Number</th>
                    <td>:</td>
                    <td>{{$alamat->phone}}</td>
                </tr>
                <tr>
                    <th>Province</th>
                    <td>:</td>
                    <td>{{$alamat->prov}}</td>
                </tr>
                <tr>
                    <th>City</th>
                    <td>:</td>
                    <td>{{$alamat->type}} {{$alamat->kota}}</td>
                </tr>
                <tr>
                    <th>Detail</th>
                    <td>:</td>
                    <td><p>{{$alamat->detail}}, {{$alamat->type}} {{$alamat->kota}}, {{$alamat->prov}}</p></td>
                </tr>
                <tr>
                    <th>Postal Code</th>
                    <td>:</td>
                    <td>{{$alamat->postal_code}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td  class="p-2"><a href="{{url('edit-address/' . Auth::user()->id)}}"  class="btn btn-primary mt-1" style="background: #8AA385">Edit Address</a><br>
                    {{-- <small>Klik tombol ini jika pembeli sudah terbukti melakukan pembayaran</small> --}}
                    </td>
                </tr>
                
            </table>
            </fieldset>
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
                                            {{-- <div class="card-body">
                                                <div class="col">
                                                    <div>
                                                        <?php
                                                        \Midtrans\Config::$serverKey = 'SB-Mid-server-52BfXyttd6q5XHlxWlgW66T-';
                                                        \Midtrans\Config::$isProduction = false;
                                                        \Midtrans\Config::$isSanitized = true;
                                                        \Midtrans\Config::$is3ds = true;
                                                        
                                                        $params = array(
                                                            'transaction_details' => array(
                                                                'order_id' => rand(),
                                                                'gross_amount' => $ongkir + $subtotal,
                                                            ),
                                                            'customer_details' => array(
                                                                'first_name' => 'MR.',
                                                                'last_name' =>  Auth::user()->name,
                                                                'email' => Auth::user()->email,
                                                                'phone' => $alamat->phone,
                                                            ),
                                                        );
                                                        
                                                        $snapToken = \Midtrans\Snap::getSnapToken($params);
                                                  ?>
                                                    <img src="{{asset('image/bank/bca.png')}}" style="width: 250px;height: 150px;" id="pay-button">
                                                    </div>
                                                    <p>Transfer Sebesar {{'Rp.' . number_format($ongkir + $subtotal)}}  </p>
                                                    <p>No Rek : 123121212121</p>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>  
                                    <div class="card mb-2">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapseFour" aria-expanded="true"> Payment Information </a>
                                        </div>
                                        <div id="collapseFour" class="collapse show" data-parent="#accordion" style="">
                                            <div class="card-body">
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                            <label for="input-cardname">Name<span class="required-f">*</span></label>
                                                            <input name="cardname" value="{{Auth::user()->name}}" placeholder="Card Name" id="input-cardname" class="form-control" type="text">
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
                                                            <label for="input-cardno">Card Number  <span class="required-f">*</span></label>
                                                            <input name="cardno" value="" placeholder="Card Number" id="input-cardno" class="form-control" type="text">
                                                        </div>
                                                        <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                            <label for="input-cvv">Email Address<span class="required-f">*</span></label>
                                                            <input name="cvv" value="" placeholder="Email Address" id="input-cvv" class="form-control" type="email">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                            <label>Expiration Date <span class="required-f">*</span></label>
                                                            <input type="date" name="exdate" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                            
                                                        </div>
                                                    </div>
                                                </fieldset>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <?php ?>

                            <input type="hidden" value="{{ $invoice }}" name="invoice">
                            <input type="hidden" value="{{ $ongkir + $subtotal }}" name="subtotal">
                            <input type="hidden" value="{{ $ongkir }}" name="ongkir">
                            <input name="no_hp" value="{{$alamat->phone}}"  type="hidden" >
                            <div class="order-button-payment">
                                <button class="btn" value="Place order" type="submit" style="background: #8AA385">Place order</button>
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