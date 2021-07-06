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
                       
                        <div class="col-md-3">
                        <div class="card text-white bg-info mb-3 " style="max-width: 18rem;">
                        <div class="card-header"></div>
                        <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text">Atas Nama </p>
                        </div>
                        </div>
                        </div>
                        
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