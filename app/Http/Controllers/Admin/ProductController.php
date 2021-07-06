<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('admin.product.index', compact('product'));
    }

 
    public function create()
    {
        return view('admin.product.create');
    }

 
    public function store(Request $request)
    {
        $fileName = '';
        if ($request->image->getClientOriginalName()) {
            $file = str_replace(' ', '', $request->image->getClientOriginalName());
            $fileName = date('mYdHs') . rand(1, 999) . '_' . $file;
            $request->image->move('image/product', $fileName);
        }
        $product = Product::create(array_merge($request->all(), [
            'image' => $fileName
        ]));
        return redirect('admin/product')->with('simpan', "hhh");
    }

  
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $product = Product::where('id', $id)->first();
        return view('admin.product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if ($request->hasFile('image')) {
            if (file_exists('image/product/' . $product->image)) {
                unlink('image/product/' . $product->image);
            }
            $file = str_replace(' ', '', $request->image->getClientOriginalName());
            $fileName = date('mYdHs') . rand(1, 999) . '_' . $file;
            $request->image->move('image/product/', $fileName);
        } else {
            $fileName = $request->input('image_old');
        }
        Product::find($id)->update(array_merge(
            $request->all(),
            [
            'image'=> $fileName
            ]
        ));
        return redirect("/admin/product")->with('update', "a");
    }


    public function destroy($id)
    {
        $product = Product::where('id', $id)->first();
        $product->delete();
        return redirect()->back()->with('delete', "h");
    }
}
