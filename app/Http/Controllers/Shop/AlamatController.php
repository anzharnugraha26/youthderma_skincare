<?php

namespace App\Http\Controllers\Shop;

use App\Alamat;
use App\City;
use App\Http\Controllers\Controller;
use App\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AlamatController extends Controller
{
    public function index()
    {
        //ambil session id user
        $id_user = Auth::user()->id;
        //ambil data alamat
        $data['province'] = Province::all();
        $cekAlamat =  DB::table('alamats')
                        ->where('user_id', $id_user)
                        ->count();
        //cek jika user sudah mengatur alamat maka jalankan ini
        if ($cekAlamat >0) {
            $data['alamats'] = DB::table('alamat')
                ->join('cities', 'cities.city_id', '=', 'alamat.cities_id')
                ->join('provinces', 'provinces.province_id', '=', 'cities.province_id')
                ->select('provinces.title as prov', 'cities.title as kota', 'alamat.*')
                ->where('alamat.user_id', $id_user)
                ->get();
            return view('shop.alamat.alamatada', $data);
        } else {
            //jika belum maka tampilkan form untuk mengatur alamat
            return view('shop.alamat.alamat', $data);
        }
    }

    public function getCities($id)
    {
        $city = City::where('province_id', $id)->get();
        return response()->json($city);
    }
  
    public function saveAlamat(Request $request)
    {
        Alamat::create([
            'cities_id' => $request->cities_id,
            'detail'    => $request->detail,
            'user_id'   => Auth::user()->id,
            'phone' => $request->phone
        ]);
        return redirect('/carts');   
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
        $alamat = DB::table('alamats')
        ->join('cities','cities.city_id','=','alamats.cities_id')
        ->join('provinces','provinces.province_id','=','cities.province_id')
        ->select('provinces.name as prov', 'provinces.province_id' , 'provinces.name' ,'cities.name as kota', 'cities.city_id' , 'alamats.*')
        ->where('alamats.user_id',$id)
        ->first();
        return view('shop.alamat.edit-alamat', compact('alamat'));
    }


    public function update(Request $request, $id)
    {
        Alamat::find($id)->update($request->all());
        return redirect()->back();
    }

    public function destroy($id)
    {
        //
    }
}
