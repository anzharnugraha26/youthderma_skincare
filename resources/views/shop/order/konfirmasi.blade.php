@extends('layouts.shop')
@section('content')
<div class="site-section">
    <div class="container">
    <div class="row mb-3">
        <div class="col-md-12 text-center">
            <h2 class="display-5">Silahkan Lakukan Pembayaran Lewat No Rekening Berikut</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row  mb-2 text-center">
                       
                        <div class="col-md-4" style="margin-left: 35%">
                        <div style="max-width: 18rem;">
                        
                        <div class="card-body">
                            <img src="{{asset('image/logo/bca.png')}}">
                        <p>ATM BCA</p>
                        <h5 class="card-title">6044611222</h5>
                        <p class="card-text" style="font-size: 20px">Atas Nama : </p>
                        <p class="card-text" style="font-size: 20px">pt citra utama andalan </p>
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
                    <div class="row  mb-4">
                        <div class="col-md-12 text-center">
                            Transfer Sebesar Rp {{ number_format($order->subtotal,2,',','.') }} Ke No Rekening Di Atas
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form action="{{'/bukti-bayar/'. $order->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                            <label for="">Upload Bukti Pembayaran</label>
                            <input type="file" name="bukti_pembayaran" id="" class="form-control" required>
                            </div>
                            <div class="text-right">
                            <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    </div>
</div>
@endsection