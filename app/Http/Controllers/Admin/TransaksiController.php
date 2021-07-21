<?php

namespace App\Http\Controllers\Admin;

use App\DetailOrder;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Order;

class TransaksiController extends Controller
{
    public function index()
    {
        $order = DB::table('orders')
        ->join('status_order', 'status_order.id', '=', 'orders.status_order_id')
        ->join('users', 'users.id', '=', 'orders.user_id')
        ->select('orders.*', 'status_order.name', 'users.name as nama_pemesan')
        ->where('orders.status_order_id', 1)
        ->get();
        $data = array(
            'orderbaru' => $order
            );
        return view('admin.transaksi.index', $data);
    }

    public function perludicek()
    {
        //ambil data order yang status nya 2 atau belum di cek / sudah bayar
        $order = DB::table('orders')
        ->join('status_order', 'status_order.id', '=', 'orders.status_order_id')
        ->join('users', 'users.id', '=', 'orders.user_id')
        ->select('orders.*', 'status_order.name', 'users.name as nama_pemesan')
        ->where('orders.status_order_id', 2)
        ->get();
        $data = array(
            'orderbaru' => $order
        );

        return view('admin.transaksi.perludicek',$data);
    }

    public function detail($id)
    {
        //ambil data detail order sesuai id
        $detail_order = DB::table('detail_orders')
                            ->join('products','products.id','=','detail_orders.product_id')
                            ->join('orders','orders.id','=','detail_orders.order_id')
                            ->select('products.name as nama_produk','products.image','detail_orders.*','products.price','orders.*')
                            ->where('detail_orders.order_id',$id)
                            ->get();
        $order = DB::table('orders')
                    ->join('users','users.id','=','orders.user_id')
                    ->join('status_order','status_order.id','=','orders.status_order_id')
                    ->select('orders.*','users.name as nama_pelanggan','status_order.name as status')
                    ->where('orders.id',$id)
                    ->first();
        $data = array(
            'detail' => $detail_order,
            'order'  => $order
        );
        return view('admin.transaksi.detail',$data);
    }

    public function perludikirim()
    {
        //ambil data order yang status nya 3 sudah dicek dan perlu dikirim(input no resi)
        $order = DB::table('orders')
                    ->join('status_order', 'status_order.id', '=', 'orders.status_order_id')
                    ->join('users', 'users.id', '=', 'orders.user_id')
                    ->select('orders.*', 'status_order.name', 'users.name as nama_pemesan')
                    ->where('orders.status_order_id', 3)
                    ->orderBy('id', 'DESC')->get();
        $data = array(
            'orderbaru' => $order
        );

        return view('admin.transaksi.perludikirim', $data);
    }

    public function dikirim()
    {
        $order = DB::table('orders')
                    ->join('status_order', 'status_order.id', '=', 'orders.status_order_id')
                    ->join('users', 'users.id', '=', 'orders.user_id')
                    ->select('orders.*', 'status_order.name', 'users.name as nama_pemesan')
                    ->where('orders.status_order_id', 4)
                    ->orderBy('id', 'DESC')->get();
        $data = array(
            'orderbaru' => $order
        );

        return view('admin.transaksi.dikirim', $data);
    }

    public function konfirmasi($id)
    {
        $order = Order::findOrFail($id);
        $order->status_order_id = 3;
        $order->save();
        $data = array(
            'invoice' => $order->invoice,
            'subtotal' => $order->subtotal,
            'email' => $order->email,
            'date' => date('Y-m-d')
        );
        Mail::send('email.adminkonfirmasi', $data, function ($message) use ($order) {
            $message->from('youthderma@gmail.com', 'YouthDerma Skincare');
            $message->to($order->user_email, 'Cusstomer');
        });
        // $kurangistok = DB::table('detail_order')->where('order_id',$id)->get();
        // foreach($kurangistok as $kurang){
        //     $ambilproduk = DB::table('products')->where('id',$kurang->product_id)->first();
        //     $ubahstok = $ambilproduk->stok - $kurang->qty;

        //     $update = DB::table('products')
        //             ->where('id',$kurang->product_id)
        //             ->update([
        //                 'stok' => $ubahstok
        //             ]);
        // }
        return redirect('admin/transaksi-perlu-dikirim')->with('status', 'Berhasil Mengonfirmasi Pembayaran Pesanan');
    }

    public function inputresi($id, Request $request)
    {
        //funtion untuk menginput no resi pesanan
        $order = Order::findOrFail($id);
        $order->no_resi = $request->no_resi;
        $order->status_order_id = 4;
        $order->save();
        $data = array(
            'invoice' => $order->invoice,
            'subtotal' => $order->subtotal,
            'email' => $order->email,
            'noresi' => $order->no_resi,
            'date' => date('Y-m-d')
        );
        Mail::send('email.adminnoresi', $data, function ($message) use ($order) {
            $message->from('youthderma@gmail.com', 'YouthDerma Skincare');
            $message->to($order->user_email, 'Cusstomer');
        });
        return redirect('/admin');
        // dd($order);
        // return redirect()->route('admin.transaksi.perludikirim')->with('status','Berhasil Menginput No Resi');
    }

    public function selesai()
    {
        $order = DB::table('orders')
        ->join('status_order', 'status_order.id', '=', 'orders.status_order_id')
        ->join('users', 'users.id', '=', 'orders.user_id')
        ->select('orders.*', 'status_order.name', 'users.name as nama_pemesan')
        ->where('orders.status_order_id', 5)
        ->orderBy('id', 'DESC')->get();
        $data = array(
                'orderbaru' => $order
                );

        return view('admin.transaksi.selesai', $data);
    }

    public function batal()
    {
        $order = DB::table('orders')
        ->join('status_order', 'status_order.id', '=', 'orders.status_order_id')
        ->join('users', 'users.id', '=', 'orders.user_id')
        ->select('orders.*', 'status_order.name', 'users.name as nama_pemesan')
        ->where('orders.status_order_id', 6)
        ->orderBy('id', 'DESC')->get();
        $data = array(
                'orderbaru' => $order
                );

        return view('admin.transaksi.batal', $data);
    }

    public function destroy($id){
        $order = Order::where('id',$id)->first();
        $order->delete();

        DetailOrder::where('order_id', $order->id)->delete();
        
        return redirect()->back();

    }

}
