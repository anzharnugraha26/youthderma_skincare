@extends('layouts.shop')
@section('content')    

<div id="page-content">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Orders</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
            <div class="col-md-12 text-center" style="margin-bottom: 40px">
                <h2 class="display-5">Silahkan Lakukan Pembayaran Lewat No Rekening Berikut</h2>
            </div>
            <div class="row  mb-2 text-center">
                       
                <div class="col-md-4" style="margin-left: 35%">
                <div style="max-width: 18rem;">
                
                <div class="card-body">
                    <img src="{{asset('image/logo/bca.png')}}">
                <p style="font-size: 10px">ATM BCA</p>
                <p style="font-size: 30px">6044611222</h5>
                <p class="card-text" style="font-size: 20px">Atas Nama : </p>
                <p class="card-text" style="font-size: 20px">PT Citra Utama Andalan </p>
                </div>
                </div>
                </div>

                {{-- <div class="col-md-4">
                    <div style="max-width: 18rem;">
                        <img src="{{asset('image/logo/bri.png')}}">
                    <div class="card-body">
                    <h5 class="card-title">ATM BRI</h5>
                    <p class="card-text">Atas Nama </p>
                    </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div style="max-width: 18rem;">
                        <img src="{{asset('image/logo/mandiri.png')}}">
                    <div class="card-body">
                    <h5 class="card-title">ATM MANDIRI</h5>
                    <p class="card-text">Atas Nama </p>
                    </div>
                    </div>
                </div> --}}

                {{-- <div class="col-md-3">
                    <div style="max-width: 18rem;">
                    
                    <div class="card-body">
                    <h5 class="card-title">GOPAY</h5>
                    <p class="card-text">Atas Nama </p>
                    </div>
                    </div>
                </div> --}}
            </div>
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                	<div class="alert alert-success text-uppercase" role="alert">
						&nbsp;<strong>Congratulations!</strong> Silahkan Konfirmasi Pembayaran dengan click tombol bayar 
					</div>
                    <div class="box-body table-responsive no-padding">
                		<table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-left">Invoice</th>
                                    <th class="text-left">Status</th>
                                    <th class="text-left">Total</th> 
                                    <th class="text-center">&nbsp;Option</th>
                                </tr>
                            </thead>
                           <tbody>
                                @foreach($order as $o)
                                <tr>
                                    <td>
                                        {{ $o->invoice }}
                                    </td>
                                    <td>
                                        {{ $o->name }}
                                    </td>
                                    <td>
                                         {{ 'Rp.' . number_format($o->subtotal)}}
                                    </td>
                                    <td>
                                        <a href="{{url('order/konfirmasi/' . $o->id)}}" class="btn btn-secondary btn--small  small--hide" style="background: green">Konfirmasi Pembayaran</a>
                                        <a href="{{url('order/batal/' . $o->id)}}" class="btn btn-secondary btn--small  small--hide" style="background: red" onclick="return confirm('Yakin ingin membatalkan pesanan')">Batalkan</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                    		<tfoot>
                                <tr>
                                    <td colspan="3" class="text-left"><a href="{{url("products")}}" class="btn btn-secondary btn--small cart-continue" style="background: #8AA385">Continue shopping</a></td>
                                    <td colspan="3" class="text-right">
	                        
                                    </td>
                                </tr>
                            </tfoot>
                    </table> 
                    </div>                 
               	</div>
            </div>
        </div>

        

        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                	<div class="alert alert-success text-uppercase" role="alert">
						&nbsp;<strong>Congratulations!</strong> 
					</div>
                    <div class="box-body table-responsive no-padding">
                	
                		<table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-left">Invoice</th>
                                    <th class="text-left">Status</th>
                                    <th class="text-right">Total</th>
                                    <th class="text-center">&nbsp;Option</th>
                                </tr>
                            </thead>
                    		<tbody>
                                @foreach($dicek as $o)
                                <tr>
                                    <td>
                                        {{ $o->invoice }}
                                    </td>
                                    <td>
                                        @if($o->name == 'Perlu Di Cek')
                                        Sedang Di Cek
                                        @else
                                        {{ $o->name }}
                                        @endif
                                    </td>
            
                                    <td>
                                         {{ 'Rp.' . number_format($o->subtotal)}}
                                    </td>
                                    <td>
                                        <a href="{{url("order-detail/$o->id")}}" name="clear" class="btn btn-secondary btn--small  small--hide" style="background: green">Detail</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                    		
                    </table> 
                   
                    </div>                   
               	</div>
            </div>
        </div>
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                	<div class="alert alert-success text-uppercase" role="alert">
						&nbsp;<strong>History Orders</strong> 
					</div>
                    <div class="box-body table-responsive no-padding">
                		<table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-left">Invoice</th>
                                    <th class="text-left">Total</th>
                                    <th class="text-right">Status</th>
                                    <th class="text-center">&nbsp;Option</th>
                                </tr>
                            </thead>
                    		<tbody>
                                @foreach($histori as $o)
                                <tr>
                                    <td>
                                        {{ $o->invoice }}
                                    </td>
                                    <td>
                                        @if($o->name == 'Perlu Di Cek')
                                        Sedang Di Cek
                                        @else
                                        {{ $o->name }}
                                        @endif
                                    </td>
            
                                    <td>
                                         {{ 'Rp.' . number_format($o->subtotal)}}
                                    </td>
                                    <td>
                                        <a href="{{url("order-detail/$o->id")}}" name="clear" class="btn btn-secondary btn--small  small--hide" style="background: green">Detail</button>
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


    @endsection