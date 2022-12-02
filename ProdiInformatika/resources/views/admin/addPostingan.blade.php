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

    <h1>Tambah Berita</h1>

    <form action="/addPost_proses" method="post" enctype="multipart/form-data"  >
        {{ csrf_field() }}

        <label class="form-label"  >Judul Berita</label>
        <input type="text" class="form-control" name="judul">

        <br><br>

        <label class="form-label" >Deskripsi Singkat</label>
        <input type="text" class="form-control" name="deskripsi">

        <br><br>

        <label class="form-label" >Isi Berita</label>
        <input type="textfield" class="form-control" name="isi">

        <br><br>

        <div class="form-group">
            <b>Gambar</b><br />
            <input type="file" name="file">
        </div>

        <br><br>

        <input type="submit" value="Tambah Berita" class="btn btn-primary">
    </form>
</body>

</html>
