<?php

namespace App\Http\Controllers\Shop;

use App\City;
use App\Http\Controllers\Controller;
use App\Keranjang;
use App\Province;
use Illuminate\Http\Request;
use Kavist\RajaOngkir\Facades\RajaOngkir;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CheckOutController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            # code...
           
            $userId = auth()->user()->id;
            $province = Province::get();
            $provinces = Province::pluck('name', 'province_id');
            $city = City::get();
            $items = DB::table('keranjangs')
        ->join('users', 'users.id', '=', 'keranjangs.user_id')
        ->join('products', 'products.id', '=', 'keranjangs.products_id')
        ->select('products.name as name_produk', 'products.image', 'products.image', 'products.weight', 'users.name', 'keranjangs.*', 'products.price')
        ->where('keranjangs.user_id', '=', $userId)->get();
 
        $count = Keranjang::where('user_id', $userId)->count();
            if (empty($count)) {
                return redirect()->back();
            } else{
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
        ->select('alamats.*', 'cities.name as kota', 'provinces.name as prov')
        ->where('alamats.user_id', $userId)
        ->first();

                $data = [
            'invoice' => 'YSC'.Date('Ymdhi'),
            'keranjangs' => $items,
            'ongkir' => $ongkir,
            'alamat' => $alamat_user
        ];
                return view('shop.checkout', $data);
            }
        } else {
            return redirect('login');
        }
    }


    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
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
