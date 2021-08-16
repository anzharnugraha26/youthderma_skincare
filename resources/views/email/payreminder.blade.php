<p>Hai {{$user_name}}, thank you for shoping with Youthderma Skin Care</p>

<hr size="10px" style="color: black">
<p>No Invoice: {{$order2->invoice}}, <b>Placed On : </b> {{$date}} </p>


<p>AWAITING PAYMENT</p>
<p>Dear {{$user_name}}</p>
<p>You have chosen to pay using bank transfer. Please complete your payment at your earliest convenience: </p>
<p>Transfer to</p>
<p>Bank	BCA</p>
<p>Virtual Account No :60446112223</p>
<p>Name : PT Citra Utama Andalan</p>

<table align="center" border="1" cellpadding="0" cellspacing="0" width="600" style="margin-top: 30px">
    <thead>
        <tr>
            <th class="text-left">Product Name</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach ($order1 as $item)
            
       
        <tr>
            <td class="text-left">{{$item->nama_produk}}</td>
            <td>{{ 'Rp.' . number_format($item->price)}}</td>
            <td>{{$item->qty}}</td>
            <td>{{ 'Rp.' . number_format($item->price * $item->qty) }}</td>
        </tr>


        @endforeach

    </tbody>
    <tfoot class="font-weight-600">
        <tr>
            <td colspan="3" style="text-align: right">Biaya Ongkir (JNE): </td>
            <td>{{ 'Rp.' . number_format($item->ongkir)}}</td>
        </tr>
        <tr>
            <td colspan="3" style="text-align: right">Grand Total: </td>
            <td>{{'Rp.' . number_format($item->subtotal)}}</td>
        </tr>
    </tfoot>
</table>