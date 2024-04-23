<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function logina(){
        return view("login");
    }
    // public function cekloginA(Request $request){
    //     $cek = new Admin();
    //     $cek = $cek->where('Username', $request->input('Username'))->where('Password', $request->input('Password'));
    //     if ($cek->exists()) {
    //         session([
    //             'admin'=> $cek->first()
    //         ]);
    //         return redirect('dashboard');
    //         // (return response()->json(session('datapetugas')->id_petugas))
    //     }
    // }  
}
