<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class adminController extends Controller
{
    //admin Menu

    public function admin()
    {
        return view('adminMenu');
    }

    public function addBerita()
    {
        return view('adminBeritaAdd');
    }

    public function addBerita_proses(Request $request)
    {
        $imageName = $request->file->getClientOriginalName();
        $request->file->move(public_path('asset/img/berita'), $imageName);

        DB::table('news_article')->insert([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'isi' => $request->isi,
            'gambar' => $request->file->getClientOriginalName(),
        ]);

        return redirect('/admin/berita');
    }

    public function addEvents()
    {
        return view('admin/addEvents');
    }

    public function addEvents_proses(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'deskripsi_singkat' => 'required',
            'jenis' => 'required',
            'lokasi' => 'required',
            'penyelenggara' => 'required',
            'kontak' => 'required',
            'deskripsi' => 'required',
            'penjelasan' => 'required',
        ]);

        DB::table('events')->insert([
            'nama' => $request->nama,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_selesai' => $request->waktu_selesai,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'jenis' => $request->jenis,
            'lokasi' => $request->lokasi,
            'penyelenggara' => $request->penyelenggara,
            'kontak' => $request->kontak,
            'deskripsi' => $request->deskripsi,
            'penjelasan' => $request->penjelasan,
        ]);

        return redirect('/');
    }

    public function showEvent()
    {
        $events = DB::table('events')->get();

        return view('adminEvents')->with('events', $events);
    }

    public function editEvent($id)
    {
        $events = DB::table('events')
            ->where('id', $id)
            ->first();

        return view('adminEventsEdit')->with('events', $events);
    }

    public function editEvent_proses(Request $request)
    {
        DB::table('events')
            ->where('id', $request->id)
            ->update([
                'nama' => $request->nama,
                'waktu_mulai' => $request->waktu_mulai,
                'waktu_selesai' => $request->waktu_selesai,
                'deskripsi_singkat' => $request->deskripsi_singkat,
                'jenis' => $request->jenis,
                'lokasi' => $request->lokasi,
                'penyelenggara' => $request->penyelenggara,
                'kontak' => $request->kontak,
                'deskripsi' => $request->deskripsi,
                'penjelasan' => $request->penjelasan,
            ]);

        return redirect('/admin/showEvent');
    }

    public function hapusEvent($id)
    {
        DB::table('events')
            ->where('id', $id)
            ->delete();

        return redirect('/admin/showEvent');
    }

    public function berita()
    {
        $berita = DB::table('news_article')->get();

        return view('adminBerita')->with('berita', $berita);
    }

    public function editBerita($id)
    {
        $berita = DB::table('news_article')
            ->where('id', $id)
            ->first();

        return view('adminBeritaEdit')->with('berita', $berita);
    }

    public function editBerita_proses(Request $request)
    {
        $imageName = $request->file->getClientOriginalName();
        $request->file->move(public_path('asset/img/berita'), $imageName);

        DB::table('news_article')
            ->where('id', $request->id)
            ->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'isi' => $request->isi,
                'gambar' => $request->file->getClientOriginalName(),
            ]);
        return redirect('/admin/berita');
    }

    public function hapusBerita($id)
    {
        DB::table('news_article')
            ->where('id', $id)
            ->delete();

        return redirect('/admin/berita');
    }

    //Dosen

    public function dosen()
    {
        $dosen = DB::table('dosen')->get();

        return view('adminDosen')->with('dosen', $dosen);
    }

    public function addDosen()
    {
        return view('adminDosenAdd');
    }

    public function addDosen_proses(Request $request)
    {
        $imageName = $request->file->getClientOriginalName();
        $request->file->move(public_path('asset/img/Dosen'), $imageName);

        DB::table('dosen')->insert([
            'nama' => $request->nama,
            'gambar' => $request->file->getClientOriginalName(),
        ]);

        return redirect('/admin/dosen');
    }

    public function editDosen($id)
    {
        $dosen = DB::table('dosen')
            ->where('id', $id)
            ->first();

        return view('adminDosenEdit')->with('dosen', $dosen);
    }

    public function editDosen_proses(Request $request)
    {
        $imageName = $request->file->getClientOriginalName();
        $request->file->move(public_path('asset/img/Dosen'), $imageName);

        DB::table('dosen')
            ->where('id', $request->id)
            ->update([
                'nama' => $request->nama,
                'gambar' => $request->file->getClientOriginalName(),
            ]);

        return redirect('/admin/dosen');
    }

    public function hapusDosen($id)
    {
        DB::table('dosen')
            ->where('id', $id)
            ->delete();

        return redirect('/admin/dosen');
    }

    // public function editEvent_proses(Request $request){
    //     DB::table('events')->where('id', $request->id)->update([
    //         'nama' => $request->nama,
    //         'waktu_mulai' => $request->waktu_mulai,
    //         'waktu_selesai' => $request->waktu_selesai,
    //         'deskripsi_singkat' => $request->deskripsi_singkat,
    //         'jenis' => $request->jenis,
    //         'lokasi' => $request->lokasi,
    //         'penyelenggara' => $request->penyelenggara,
    //         'kontak' => $request->kontak,
    //         'deskripsi' => $request->deskripsi,
    //         'penjelasan' => $request->penjelasan,
    //     ]);

    //     return redirect('/admin/showEvent');
    // }

    // public function hapusEvent($id){
    //     DB::table('events')->where('id',$id)->delete();

    //     return redirect('/admin/showEvent');
    // }
}
