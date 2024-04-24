<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\kasir;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //login
    public function logina(){
        return view("login");
    }
    public function dash(){
        return view("dashboard");
    }
    //buku
    public function databuku(){
        $ambil = new buku();
        return view ('databuku',['bukus'=>$ambil->paginate(6)]);
    }
    public function tbbukus(Request $request){
         $c = new buku();
        // $cek = $request->validate([        
        //     'Judul' => 'required'        
        // ]);        
        $c->create($request->all());
        return back()->with('Pesan','Data Berhasil Ditambahkan');
    }
    public function editbuku($id){
         $buku = new buku();
          return view('editbuku',['editbuku'=>$buku->find($id)]);
    }
    public function editbukus(Request $request,$id){
        $validasi = $request->validate([
            'judul' => 'required'
        ]);
        $buku = new buku();
        $buku = $buku->find($id)->update($request->all());;
        return redirect('buku')->with('pesan','Update Data Berhasil');;
     }
    public function hapusbuku($id_buku){
        $buku = new buku();
        $buku = $buku->find($id_buku);
        $buku->delete();
        return back();
    }
    //pasok
    public function datapasok(){
        return view("datapasok");
    }
    
    //kasir
    public function datakasir(){
        return view("datakasir");
    }
    public function tambahkasir(){
        return view("tambahkasir");
    }
    public function tbkasir(Request $request){
        $c = new kasir();
        $c->create($request->all());
        return redirect('datakasir')->with('Pesan','Data Berhasil Ditambahkan');
    
    }
    public function editkasir($id){
        $kasir = new kasir();
        return view('Editadmin',['editadmin'=>$kasir->find($id)]);
    }
    public function editadmina(Request $request,$id){
        //   $validasi = $request->validate([
        //     'NamaKategori' => 'required'
        // ]);
        $kasir = new kasir();
        $kasir = $kasir->find($id)->update($request->all());
        return redirect('dataadmin')->with('pesan','Update Data Berhasil');
     }
     public function hapusadmin($id_kasir){
        $kasir = new kasir();
        $kasir = $kasir->find($id_kasir);
        $kasir->delete(); return back(); }


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
