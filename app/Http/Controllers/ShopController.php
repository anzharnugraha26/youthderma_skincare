<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

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


     public function store(Request $request)
    {
        //
    }

 
    public function productDetail($id)
    {
        $product = Product::find($id);
        return view('shop.product_detail', compact('product'));
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
