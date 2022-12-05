@extends('adminMenu')

@section('section')
    <br>
    <a href="/admin/addDosen"><button type="button" class="btn btn-success">Tambah Dosen</button></a>
    <br><br>


    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nama</th>
                <th scope="col">Gambar</th>
                <th scope="col">operasi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dosen as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->nama }}</td>
                    <td><img src="{{ asset('asset/img/Dosen/' . $item->gambar) }}" alt="{{ $item->gambar }}" height="50em"></td>
                    <td class="d-flex">
                        <a href="/admin/editDosen/{{ $item->id }}"><button type="button"
                                class="btn btn-primary mx-1">Edit</button></a>

                        <a href="/admin/hapusDosen/{{ $item->id }}"><button type="button"
                                class="btn btn-danger mx-1">Hapus</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="/staffDosen"><button type="button" class="btn btn-success mx-1">Lihat
        Artikel Asli</button></a>
@endsection
