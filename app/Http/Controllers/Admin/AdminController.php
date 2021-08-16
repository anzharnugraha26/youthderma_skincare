<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function index()
    {
        $pendapatan = DB::table('orders')
        ->select(DB::raw('SUM(subtotal) as penghasilan'))
        ->where('status_order_id',5)
        ->first();
        $order_baru =  DB::table('orders')
        ->join('status_order','status_order.id','=','orders.status_order_id')
        ->join('users','users.id','=','orders.user_id')
        ->select('orders.*','status_order.name','users.name as nama_pemesan')
        
        ->get();
        return view('admin.index' , compact('pendapatan','order_baru'));
    }


    public function user()
    {
        return view('admin.user.index');
    }

    public function control()
    {
        return view('admin.control.index');
    }

    public function create()
    {
        return view('admin.control.create');
    }



    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users' ,
            'role' => 'required'
        ]);


        $user = User::create([
            'email' => $request->email,
            'password' => bcrypt($request->password) ,
            'role' => $request->role,
            'name' => $request->name
        ]);
        $user->markEmailAsVerified();
        // dd($user);
        return redirect('admin/control-admin')->with('simpan', "hhh");
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
