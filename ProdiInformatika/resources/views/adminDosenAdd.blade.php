@extends('adminMenu')

@section('section')

<div class="container">

    <h1>Tambah Events</h1>
    <form action="/addDosen_proses" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama">

        <br><br>

        <div class="form-group">
            <b>Gambar Dosen</b><br/>
            <input type="file" name="file">
        </div>

        <br>

        <input type="submit" value="Tambah Events" class="btn btn-primary">
    </form>

    <br>
    {{-- menampilkan error validasi --}}
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</div>

@endsection