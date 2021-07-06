<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Keranjang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{

    public function index()
    {
        if (Auth::check()) {
            $userId = Auth::user()->id;
            $alamat = DB::table('alamats')->where('user_id', $userId)->count();
            $items = Keranjang::where("user_id", $userId)->get();
            return view('shop.cart', compact('items', 'alamat'));
        } else {
            return redirect('/login')->with('chart', "empty");
        }
    }


    public function create()
    {
        //
    }


    public function store(Request $request, $id)
    {
        if (Auth::check()) {
            // $keranjang = Keranjang::get();
            $product_id = Keranjang::where('user_id', Auth::user()->id)->where('products_id', $id)->first();
            if (empty($product_id)) {
                Keranjang::create([
                "user_id" => Auth::user()->id,
                "products_id" => $request->product_id,
                "qty" => $request->qty
            ]);
                return redirect()->back()->with('add-to', "empty");
            } else {
                $quantity = $product_id->qty * 1;
                $currentquantity = $request->qty + $quantity;
                Keranjang::where('user_id', Auth::user()->id)->where('products_id', $id)->update(array('qty' =>  $currentquantity));
                return redirect()->back()->with('add-to', "empty");
            }
  
            return redirect()->back();
        } else {
            return redirect('/login')->with('chart', "empty");
        }
    }

 
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request)
    {
        $index = 0;
        foreach ($request->id as $id) {
            $keranjang = Keranjang::findOrFail($id);
            $keranjang->qty = $request->qty[$index];
            $keranjang->save();
            $index++;
        }
        
        return redirect()->back();
    }


    public function destroy($id)
    {
        Keranjang::destroy($id);
        
        return redirect()->back();
    }
}
