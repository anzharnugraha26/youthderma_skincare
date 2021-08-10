@extends('layouts.shop')
@section('content')
<div class="site-section">
    <div class="container">
    <div class="row mb-3">
        <div class="col-md-12 text-center">
            <h2 class="display-5">Konfirmasi Pembayaran</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php $order = DB::table('orders')->where('user_id', Auth::user()->id)->where('status_order_id', 1)->count(); ?>
            @if ($order != null)
            <div class="card">
                <div class="card-body">
                 
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
                                <label for="">Jumlah Pembayaran</label>
                                <select name="cities_id" id="cities_id"autofocus="">
                                   
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Upload Bukti Pembayaran</label>
                                <input type="file" name="bukti_pembayaran" id="" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Dari Bank</label>
                                <input type="text" name="bank" id="" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Atas Nama</label>
                                <input type="text" name="name" id="" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Email Address</label>
                                <input type="text" name="email" id="" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Account Number</label>
                                <input type="text" name="number" id="" class="form-control" required>
                            </div>
                            <div class="text-right">
                            <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>              
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
    var toHtml = (tag, value) => {
	$(tag).html(value);
	}
 $(document).ready(function() {
    //  $('#province_id').select2();
    //  $('#cities_id').select2();
     $('#invoice').on('change',function(){
     var id = $('#invoice').val();
     var url = window.location.href;
     var urlNya = url.substring(0, url.lastIndexOf('/order/'));   
     $.ajax({
         type:'GET',
         url:urlNya + '/getorder/' + id,
         dataType:'json',
         success:function(data){
            var op = '<option value="">Pilih Nominal Pembayaran Anda</option>';
            if(data.length > 0) {
			var i = 0;
			for(i = 0; i < data.length; i++) {
				op += `<option value="${data[i].subtotal}">Rp. ${data[i].subtotal.toLocaleString()}</option>`
			}
		    }
            toHtml('[name="cities_id"]', op);
         }
     })
     })
 });    
    
    
</script>
@endsection