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
            <?php $order = DB::table('orders')->where('user_id', Auth::user()->id)->where('status_order_id', 1)->count(); ?>
            @if ($order != null)
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
                        <p class="card-text" style="font-size: 20px">PT Citra Utama Andalan </p>
                        </div>
                        </div>
                        </div>
                    </div>
                    <div class="row  mb-4">
                        {{-- <div class="col-md-12 text-center">
                            Transfer Sebesar Rp {{ number_format($order->subtotal,2,',','.') }} Ke No Rekening Di Atas
                        </div> --}}
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form action="{{url("confirm-payment")}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">No Invoice</label>
                            <select name="invoice" class="form-control" id="invoice">
                                <option value="#">-- Pilih No Invoice Anda --</option>
                                <?php $o = DB::table('orders')->where('user_id', Auth::user()->id)->get(); ?>
                                @foreach ($o as $item)
                                <option value="{{$item->invoice}}">{{$item->invoice}}</option>
                                @endforeach
                            </select>
                        </div>
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
            <h3 id="test">Data Tidak Ada</h3>       
            @else
                <h3>Data Tidak Ada</h3>
            @endif

        </div>
    </div>
    

    </div>
</div>
@endsection

@section('script-shop')
    <script>
        $("#invoice").on('change' ,function () {
            var id = $("#invoice").val();
           
        });
        
    </script>
@endsection