<?php

namespace App\Http\Controllers;

use App\BankInfo;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{

    public function index()
    {
        $product = Product::all();
        return view("shop.index", compact('product'));
    }

 
    public function product()
    {
        $product = Product::all();
        return view("shop.product", compact('product'));
    }

    public function kontakUs()
    {
        return view("shop.kontak");
    }

    public function gallery()
    {
        return view("shop.gallery");
    }


    public function payment()
    {
        if (Auth::check()) {
            return view('shop.konfirmpayment');
        } else {
            return redirect('login');
        }
    }

    public function savepayment(Request $request)
    {
        $fileName = '';
        if ($request->bukti_pembayaran->getClientOriginalName()) {
            $file = str_replace(' ', '', $request->bukti_pembayaran->getClientOriginalName());
            $fileName = date('mYdHs') . rand(1, 999) . '_' . $file;
            $request->bukti_pembayaran->move('image/bukti/', $fileName);
        }
        $order = Order::where('invoice', $request->invoice)->first();
        $order->update([
            'bukti_bayar' => $fileName,
            'status_order_id' => '2'
        ]);
        BankInfo::create([
            'name' => $request->name,
            'user_id' => Auth::user()->id,
            'order_id' => $order->id,
            'bank' => $request->bank,
            'email' => $request->email,
            'number' => $request->number
        ]);
        return redirect()->back();
    }

 
    public function productDetail($id)
    {
        $product = Product::find($id);
        return view('shop.product_detail', compact('product'));
    }

 
    public function getOrder($id)
    {
        $order = Order::where('invoice', $id)->get();
        return response()->json($order);
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
