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
        $berita = DB::table('news_article')->get();
        $events = DB::table('events')->paginate(3);

        // mengirim data pegawai ke view index
        return view('home')->with('jumlah', $jumlah)->with('berita', $berita)->with('events', $events);
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

    public function sejarah(){
        return view('sejarah');
    }

    public function profilLulusan(){
        return view('profil_lulusan');
    }

    public function staffDosen(){
        $dosen = DB::table('dosen')->get();

        return view('staffDosen')->with('dosen', $dosen);
    }

    public function visiMisi(){
        return view('visiMisi');
    }

    public function tampil_event($id){
        $event = DB::table('events')->where('id',$id)->first();
        return view('tampil_event', ['event' => $event]);
        // return view('tampil_event', ['event' => $id]);
    }

    public function tampil_berita($id){
        $news = DB::table('news_article')->where('id',$id)->first();
        return view('tampil_berita', ['berita' => $news]);
        // return view('tampil_event', ['event' => $id]);
    }

    
}