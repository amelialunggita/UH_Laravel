<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peminjaman;

class PeminjamanController extends Controller
{
    //
    public function index(){
        
        $peminjaman=Peminjaman::all();
        $data=['peminjaman'=>$peminjaman];
        return $data;
    }

    public function create(Request $request){
        $peminjaman=new Peminjaman();
        $peminjaman->id_mobil=$request->id_mobil;
        $peminjaman->nama_peminjam=$request->nama_peminjam;
        $peminjaman->jumlah_hari=$request->jumlah_hari;
        $peminjaman->total=$request->total;

        $peminjaman->save();

        return "Data Tersimpan";
    }
}
