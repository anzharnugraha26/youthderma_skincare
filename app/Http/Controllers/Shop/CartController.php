<?php

namespace App\Http\Controllers\Shop;

use App\City;
use App\Http\Controllers\Controller;
use App\Keranjang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Kavist\RajaOngkir\Facades\RajaOngkir;

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
        if (Auth::check()) {
            # code...
           
            $userId = auth()->user()->id;
            $city = City::get();
            $items = DB::table('keranjangs')
            ->join('users', 'users.id', '=', 'keranjangs.user_id')
            ->join('products', 'products.id', '=', 'keranjangs.products_id')
            ->select('products.name as name_produk', 'products.image', 'products.image', 'products.weight', 'users.name', 'keranjangs.*', 'products.price')
            ->where('keranjangs.user_id', '=', $userId)->get();
 
        $count = Keranjang::where('user_id', $userId)->count();
        $alamatcount = DB::table('alamats')->where('user_id', $userId)->count();
            if (empty($count)) {
                return redirect()->back();
            } else{

                if ($alamatcount >0) {
                    
                    $beratTotal = 0;
                    foreach ($items as $k) {
                        $berat = $k->weight * $k->qty ;
                        $beratTotal = $beratTotal + $berat;
                    }
                    $city = DB::table('alamats')->where('user_id', $userId)->get();
                    $city_dest = $city[0]->cities_id;
                    $cost = RajaOngkir::ongkosKirim([
                        'origin' => 457,
                        'destination' => $city_dest,
                        'weight' => $beratTotal,
                        'courier' => 'jne'
                    ])->get();
                    //dd($cost);
                    $ongkir =  $cost[0]['costs'][0]['cost'][0]['value'];
    
                    $alamat_user = DB::table('alamats')
                    ->join('cities', 'cities.city_id', '=', 'alamats.cities_id')
                    ->join('provinces', 'provinces.province_id', '=', 'cities.province_id')
                    ->select('alamats.*', 'cities.name as kota', 'provinces.name as prov', 'cities.postal_code', 'cities.type')
                    ->where('alamats.user_id', $userId)
                    ->first();
    
                    $data = [
                    'invoice' => 'YSC'.Date('Ymdhi'),
                    'keranjangs' => $items,
                    'ongkir' => $ongkir,
                    'alamat' => $alamat_user,
                    'count' => $alamatcount
                    ];
                }else {
                    $data = [
                        'invoice' => 'YSC'.Date('Ymdhi'),
                        'keranjangs' => $items,
                        'ongkir' => 0 ,
                        'alamat' => "not-found",
                        'count' => $alamatcount
                    ];
                }
                return view('shop.cart', $data);
            }
        } else {
            return redirect('login');
        }
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
