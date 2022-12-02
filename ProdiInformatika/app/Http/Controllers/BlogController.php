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
        return view('staffDosen');
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

    
    //admin Menu
    public function addPost(){
        return view('admin/addPostingan');
    }

    public function addPost_proses(Request $request){
        $imageName = $request->file->getClientOriginalName();
        $request->file->move(public_path('asset/img/berita'), $imageName);

        DB::table('news_article')->insert([  
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'isi' => $request->isi,
            'gambar' => $request->file->getClientOriginalName()
        ]);

        return redirect('/');
    }

    public function addEvents(){
        return view('admin/addEvents');
    }

    public function addEvents_proses(Request $request){
        $this->validate($request,[
            'nama' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'deskripsi_singkat' => 'required',
            'jenis' => 'required',
            'lokasi' => 'required',
            'penyelenggara' => 'required',
            'kontak' => 'required',
            'deskripsi' => 'required',
            'penjelasan' => 'required'
        ]);

        DB::table('events')->insert([  
            'nama' => $request->nama,
            'waktu_mulai' => $request->waktu_mulai ,
            'waktu_selesai'=> $request->waktu_selesai,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'jenis'=> $request->jenis,
            'lokasi'=> $request->lokasi,
            'penyelenggara' => $request->penyelenggara,
            'kontak'=> $request->kontak,
            'deskripsi' => $request->deskripsi,
            'penjelasan'=> $request->penjelasan,
        ]);
        
        return redirect('/');
    }
}