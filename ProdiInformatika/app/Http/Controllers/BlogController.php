<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    //
    public function home()
    {
        $jumlah = DB::table('jumlah')->get();
        $berita = DB::table('berita_head')->get();
        $beritas = DB::table('berita_heads')->get();

        // mengirim data pegawai ke view index
        return view('home')->with('jumlah', $jumlah)->with('berita', $berita)->with('beritas', $beritas);
    }

    public function profil_lulusan(){
        return view('profil_lulusan');
    }

    public function organisasi(){
        return view('organisasi');
    }

    public function kurikulum(){
        return view('kurikulum');
    }
}
