<html>
    <p>{{$email}} Selamat Orderan anda sudah kami kirim, dengan  </p>
    <p>No invoice : {{$invoice}}</p>
    <p>Status : Sudah Di bayar</p>
    <p>Tanggal : {{$date}}</p>
    <p>Dengan Jumlah tagihan :{{  'Rp.' . number_format($subtotal) }}</p>
    <p>Dengan No Resi :{{ $noresi }}</p>
    <p>Terima Kasih</p>
    <p>Silahkan cek dashboard website <a href="https://youthdermaclinic.com/shop/order"> Youhdertma Skincare</a> </p>
</html>
</html>