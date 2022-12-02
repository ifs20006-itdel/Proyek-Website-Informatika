<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <title>Menambah Postingan</title>

</head>

<body class="container">

    <h1>Tambah Events</h1>

    

    <form action="/addEvents_proses" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <label class="form-label">Judul Event</label>
        <input type="text" class="form-control" name="nama">

        <br><br>

        <label class="form-label">Waktu Mulai</label>
        <input type="datetime-local" class="form-control" name="waktu_mulai">

        <br><br>

        <label class="form-label">Waktu Selesai</label>
        <input type="datetime-local" class="form-control" name="waktu_selesai">

        <br><br>

        <label class="form-label">Deskripsi Singkat</label>
        <input type="text" class="form-control" name="deskripsi_singkat">

        <br><br>

        <label class="form-label">Jenis</label>
        <input type="text" class="form-control" name="jenis">

        <br><br>

        <label class="form-label">Lokasi</label>
        <input type="text" class="form-control" name="lokasi">

        <br><br>

        <label class="form-label">Penyelenggara</label>
        <input type="text" class="form-control" name="penyelenggara">

        <br><br>

        <label class="form-label">Kontak</label>
        <input type="text" class="form-control" name="kontak">

        <br><br>

        <label class="form-label">Deskripsi</label>
        <input type="text" class="form-control" name="deskripsi">

        <br><br>

        <label class="form-label">Penjelasan</label>
        <input type="text" class="form-control" name="penjelasan">

        <br><br>

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
</body>

</html>
