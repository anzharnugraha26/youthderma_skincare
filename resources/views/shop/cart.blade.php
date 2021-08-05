@extends('layouts.shop')
@section('content')

    <!--Body Content-->
    <div id="page-content">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Your cart</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                    <div class="box-body table-responsive no-padding">
                	<form action="{{url('/carts/update')}}" method="post" >
                		@csrf 
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th colspan="2" class="text-center">Product</th>
                                        <th class="text-center">Price</th>
                        
                                        <th class="text-center">Quantity</th>
                                        <th class="text-center">Total</th>
                                        <th class="action">&nbsp;Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $subtotal=0; foreach ($keranjangs as $item): ?>
                                    <tr>
                                        <td class="cart__image-wrapper cart-flex-item">
                                            <?php $products = DB::table('products')->where('id', $item->products_id)->get(); ?>
                                            @foreach ($products as $i)
                                            <a href="#"><img class="cart__image" src="{{asset('image/product/'. $i->image)}}" alt="Elastic Waist Dress - Navy / Small"></a> 
                                        
                                        </td>
                                        <td class="cart__meta small--text-left cart-flex-item">
                                            <div class="list-view-item__title">
                                                <a href="#">{{$i->name}} </a>
                                            </div>
                                        </td>
                                        <td class="cart__price-wrapper cart-flex-item">
                                            <span class="money">{{ 'Rp.' . number_format($i->price) }}</span>
                                        </td>
                                        <td class="cart__update-wrapper cart-flex-item text-right">
                                            <div class="cart__qty text-center">
                                                <div class="qtyField">
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon icon-minus"></i></a>
                                                    <input type="hidden" name="id[]" value="{{ $item->id }}">
                                                    <input class="cart__qty-input qty" type="text" name="qty[]" id="qty" value="{{$item->qty}}" pattern="[0-9]*">
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon icon-plus"></i></a>
                                                </div>
                                            </div>
                                            
                                        </td>
                                        <td class="cart__price-wrapper cart-flex-item">
                                            <div><span class="money">{{ 'Rp.' . number_format($i->price * $item->qty) }} </span></div>
                                        </td>
                                        <td class="text-center small--hide"><a href="{{url('/cart/remove/'. $item->id)}}" class="btn btn--secondary cart__remove" title="Remove tem" onclick="return confirm('Anda Yakin akan menghapus daftar belanja ini ?')"><i class="icon icon anm anm-times-l"></i></a></td>
                                    </tr>
                                        
                                    <?php
                                        $total = $i->price * $item->qty;
                                        $subtotal = $subtotal + $total;
                                    ?> 
                                    @endforeach
                                
                                <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3" class="text-left"><a href="{{url("/products")}}" class="btn--link cart-continue"><i class="icon icon-arrow-circle-left"></i> Continue shopping</a></td>
                                        <td colspan="3" class="text-right">Click For <button name="update" class="btn--link cart-update"><i class="fa fa-refresh"></i> Update</button></td>
                                    </tr>
                                </tfoot>
                            </table>
                       
                    
                    {{-- <div class="currencymsg">We processes all orders in USD. While the content of your cart is currently displayed in USD, the checkout will use USD at the most current exchange rate.</div> --}}
            
                    {{-- <button>Update</button> --}}

                    
                    </form>   
                </div>                
               	</div>
                
            </div>

            <div class="row" style="margin-top: 20px">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 sm-margin-30px-bottom">
                    @if ($count > 0)
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
                    @else 
                        <div class="create-ac-content bg-light-gray padding-20px-all">
                            <fieldset>
                                <h2 class="login-title mb-3">Add Address</h2>
                                <form method="post" action="{{url("savealamat")}}" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form">	
                                    @csrf 
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="FirstName">Pilih Provinsi</label>
                                                <select name="province_id" placeholder="" id="province_id" autofocus="">
                                                    <option value="">Pilih Provinsi</option>
                                                    <?php $province = DB::table('provinces')->get(); ?>
                                                    @foreach ($province as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="LastName">Pilih Kota Kabupaten</label>
                                                <select name="cities_id" id="cities_id" autofocus="">
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
                                                <textarea name="detail" placeholder="" id="CustomerPassword" class=""></textarea>                        	
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                            <input type="submit" class="btn mb-3" value="Create">
                                        </div>
                                    </div>
                                </form>
                            </fieldset>
                        </div>
                    @endif
                </div>
                <div class="col-12 col-sm-12 col-md-5 col-lg-5 cart__footer">
                    <form action="{{url("order-simpan")}}" method="POST">
                        @csrf
                    <div class="solid-border">	
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
                                                       <label>Pt Citra Utama Andalan</label>
                                                        <p>No Rek : 6044611222</p>
                                                    </div>
                                                </div>
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
                                                                <input name="cardname" placeholder="Card Name" id="input-cardname" class="form-control" type="text" required>
                                                            </div>
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                <label for="input-country">Bank Name <span class="required-f">*</span></label>
                                                                <input name="bank"  placeholder="Bank Name"  class="form-control" type="text" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                <label for="input-cardno">Card Number  <span class="required-f">*</span></label>
                                                                <input name="number" value="" placeholder="Card Number" id="input-cardno" class="form-control" type="text" required>
                                                            </div>
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                <label for="input-cvv">Email Address<span class="required-f">*</span></label>
                                                                <input name="cvv" value="" placeholder="Email Address" id="input-cvv" class="form-control" type="email" required>
                                                            </div>
                                                        </div>
                                                    </fieldset>
    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mb-2">
                                            <div class="card-header">
                                                <a class="card-link" data-toggle="collapse" href="#collapseFour1" aria-expanded="true"> Add Your Note </a>
                                            </div>
                                            <div id="collapseFour1" class="collapse" data-parent="#accordion" style="">
                                                <div class="card-body">
                                                    <h5><label for="CartSpecialInstructions" class="cart-note__label small--text-center">your note</label></h5>
                                                    <textarea name="note" id="CartSpecialInstructions" class="cart-note__input"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                @if ($count > 0)
                                <input type="hidden" value="{{ $invoice }}" name="invoice">
                                <input type="hidden" value="{{ $ongkir + $subtotal }}" name="subtotal">
                                <input type="hidden" value="{{ $ongkir }}" name="ongkir">
                                <input name="no_hp" value="{{$alamat->phone}}"  type="hidden" >            
                                @endif
                                

                            </div>
                        </div>
                      
                    </div>

                </div>

                <div class="col-12 col-sm-12 col-md-3 col-lg-3 cart__footer">
                	
                    <div class="solid-border">	
                        <div class="row border-bottom pb-2">
                          <span class="col-12 col-sm-6 cart__subtotal-title">Subtotal</span>
                          <span class="col-12 col-sm-6 text-right"><span class="money">{{ 'Rp.' . number_format($subtotal)}}</span></span>
                        </div>
                        <div class="row border-bottom pb-2 pt-2">
                          <span class="col-12 col-sm-6 cart__subtotal-title">Ongkir (Jne)</span>
                          @if ($count > 0)
                          <span class="col-12 col-sm-6 text-right">{{'Rp.' . number_format($ongkir)}}</span>
                          @else
                          <span class="col-12 col-sm-6 text-right">0</span>
                          @endif
                        </div>
                        <div class="row border-bottom pb-2 pt-2">
                          <span class="col-12 col-sm-6 cart__subtotal-title"><strong>Grand Total</strong></span>
                          @if ($count > 0)
                          <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span class="money">{{'Rp.' . number_format($ongkir + $subtotal)}}</span></span>
                          @else
                          <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span class="money">{{'Rp.' . number_format($subtotal)}}</span></span>
                          @endif
                        </div>
                        <div class="cart__shipping">Shipping &amp; taxes calculated at checkout</div>
                        <p class="cart_tearm">
                          <label>
                            <input type="checkbox" name="tearm" class="checkbox" value="tearm" required="" id="check">
                            I agree with the terms and conditions
                          </label>
                        </p>
                        <input type="submit" name="checkout" id="button"  class="btn btn--small-wide checkout" value="Proceed To Checkout" style="background: #8AA385">
                        
                    </div>
                </form>
                </div>
            </div>
        </div>
        
    </div>
    <script>
        var check = document.getElementById('check');
        var button = document.getElementById('button');
        button.disabled = true;
        check.onchange = function () {
            if (this.checked) {
                button.disabled = false ;
            } else {
                button.disabled = true ;
            }
        }
    </script>
    
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