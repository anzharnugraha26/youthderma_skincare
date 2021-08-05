<?php

namespace App\Http\Controllers\Shop;

use App\Alamat;
use App\BankInfo;
use App\DetailOrder;
use App\Http\Controllers\Controller;
use App\Keranjang;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function index()
    {
        $userId = Auth::user()->id;
        $order = DB::table('orders')
        ->join('status_order', 'status_order.id', '=', 'orders.status_order_id')
        ->select('orders.*', 'status_order.name')
        ->where('orders.status_order_id', 1)
        ->where('orders.user_id', $userId)->get();
        $dicek = DB::table('orders')
        ->join('status_order', 'status_order.id', '=', 'orders.status_order_id')
        ->select('orders.*', 'status_order.name')
        ->where('orders.status_order_id', '!=', 1)
        ->Where('orders.status_order_id', '!=', 5)
        ->Where('orders.status_order_id', '!=', 6)
        ->where('orders.user_id', $userId)->get();
        $histori = DB::table('orders')
        ->join('status_order', 'status_order.id', '=', 'orders.status_order_id')
        ->select('orders.*', 'status_order.name')
        ->where('orders.status_order_id', '!=', 1)
        ->Where('orders.status_order_id', '!=', 2)
        ->Where('orders.status_order_id', '!=', 3)
        ->Where('orders.status_order_id', '!=', 4)
        ->where('orders.user_id', $userId)->get();
        $data = array(
                'order' => $order,
                'dicek' => $dicek,
                'histori'=> $histori
                );
        // dd($data);
        return view('shop.order.index', $data);
    }

  
    public function bayar($id)
    {
        $order = Order::where('id', $id)->first();
        return view('shop.order.konfirmasi', compact('order'));
    }

    public function batal($id){
        $order = Order::findOrFail($id);
        $order->status_order_id = 6;
        $order->save();

        return redirect()->back();
    }
  
    public function store(Request $request)
    {

        $alamat = Alamat::where('user_id', Auth::user()->id)->first();
        if ($alamat == null) {
            return redirect()->back()->with('alamat', "test");
        } else {
            $order =  Order::create([
                'invoice' => $request->invoice,
                    'user_id' => Auth::user()->id,
                    'user_email' => Auth::user()->email,
                    'phone' => $request->no_hp,
                    'subtotal'=> $request->subtotal,
                    'status_order_id' => 1,
                    'metode_pembayaran' => "trf",
                    'ongkir' => $request->ongkir,
                    // 'pesan' => "test"
            ]);
    
            $bankinfo = BankInfo::create([
                'order_id' => $order->id,
                'user_id' => Auth::user()->id,
                'name' => $request->cardname,
                'bank' => $request->bank,
                'number' => $request->number,
                'email' => $request->cvv 
            ]);
    
            $order = Order::where('invoice', $request->invoice)->first();
            $barang = Keranjang::where('user_id', Auth::user()->id)->get();
            foreach ($barang as  $brg) {
                DetailOrder::create([
                    'order_id' => $order->id,
                    'product_id' => $brg->products_id,
                    'qty' => $brg->qty,
                ]);
            }
            
            Keranjang::where('user_id', Auth::user()->id)->delete();
    
            $data = array(
                'invoice' => $order->invoice,
                'subtotal' => $order->subtotal,
                'email' => Auth::user()->email,
                'date' => date('Ymd'),
                'bank_name' => $bankinfo->bank,
                'atsname' => $bankinfo->name,
                'no_rek' => $bankinfo->number
            );
            
           
            Mail::send('emailorder', $data, function ($message) {
                $message->from(Auth::user()->email, Auth::user()->email);
                $message->to('youthderma@gmail.com', 'Youthderma aesthetic Clinic');
                $message->subject('Pesanan dari  :' . Auth::user()->email, Auth::user()->email);
            });
            return redirect('/order');
            // dd($order); 
        }

    }

    public function kirimBukti(Request $request, $id)
    {
        $fileName = '';
        if ($request->bukti_pembayaran->getClientOriginalName()) {
            $file = str_replace(' ', '', $request->bukti_pembayaran->getClientOriginalName());
            $fileName = date('mYdHs') . rand(1, 999) . '_' . $file;
            $request->bukti_pembayaran->move('image/bukti/', $fileName);
        }
        $order = Order::findOrFail($id);
        $order->bukti_bayar = $fileName;
        $order->status_order_id  = 2;

        $order->update();
        // dd($order);
        return redirect('/order');
    }


    public function show($id)
    {
        $detail_order = DB::table('detail_orders')
        ->join('products', 'products.id', '=', 'detail_orders.product_id')
        ->join('orders', 'orders.id', '=', 'detail_orders.order_id')
        ->select('products.name as nama_produk', 'products.image', 'detail_orders.*', 'products.price', 'orders.*')
        ->where('detail_orders.order_id', $id)
        ->get();
        $order = DB::table('orders')
        ->join('users', 'users.id', '=', 'orders.user_id')
        ->join('status_order', 'status_order.id', '=', 'orders.status_order_id')
        ->select('orders.*', 'users.name as nama_pelanggan', 'status_order.name as status')
        ->where('orders.id', $id)
        ->first();
        $data = array(
        'detail' => $detail_order,
        'order'  => $order
        );
        return view('shop.order.detail', $data);
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
