@extends('master')

@section('section')
    <section>



        {{-- <h1 class=" ms-4 text-start">
            <label class="text-primary"><b>Program Studi</b></label>
            <label class="text-white"><b>Sarjana</b></label><br>
            <label class="text-white "><b>Informatika</b></label>
        </h1> --}}
        <h1 class="text-light text-center"><strong>Program Studi <font style="color:rgba(0, 121, 194, 1);">Informatika
                </font></strong></h1>
        <p class="text-light container text-center mb-5">Informatika merupakan salah satu core technology dalam
            sistem teknologi yang dikenal sebagai Teknologi Informasi dan Komunikasi (Information and Communication
            Technology), karena melalui pemfungsian Informatika-lah diperoleh produk-produk perangkat
            lunak (software products) yang memungkinkan terwujudnya sifat intelligent dari Teknologi Informasi dan
            Komunikasi. Teknologi Informasi dan Komunikasi merupakan strategic enabling technology dalam menopang upaya
            pencerdasan kehidupan bangsa</p>
        <div>
            <div class="row text-light ">

                <div class="col-sm-8">

                    <div class="p-2 container" style="background-color: rgba(156, 173, 206, 0.47) ;">
                        <h1 class=""><strong>EVENTS</strong></h1>
                        @foreach ($events as $event)
                            <div class="m-2">
                                <div class="d-flex">
                                    <div id="tanggal" class="d-flex justify-content-center">
                                        <p class="text-center w-100 p-2 m-2" style="background-color: rgb(0, 121, 194);">{{$event->waktu_mulai}}
                                        </p>
                                    </div>
                                    <div>
                                        <h2>{{$event->nama}}</h2>
                                        <p>{{$event->deskripsi_singkat}}</p>
                                    </div>
                                    <div class="align-self-center ms-auto" style="margin-right:10em">
                                        <a href="/event/{{$event->id}}" name="keBerita" class="d-flex">
                                        <label class="align-self-center" for="keBerita"><label>
                                        <h1 style="font-size:5em"><i class="ri-arrow-right-s-line" style="border-style: solid; border-radius:50%"></i></h1>
                                    </a>
                                    </div>
                                </div>
                                <hr class="w-75">
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-sm-4">
                    <h1>| Link Terkait</h1>
                    <ul>
                        <li style="color:rgba(150, 208, 255, 1)"><a href="">Institut Teknologi Del</a></li>
                        <li style="color:rgba(150, 208, 255, 1)"><a href="">HIMASTI</a></li>
                        <li style="color:rgba(150, 208, 255, 1)"><a href="">Pengumuman Mahasiswa Baru</a></li>
                        <li style="color:rgba(150, 208, 255, 1)"><a href="">Kalender Kegiatan</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="text-light p-5" id="berita">
            <h1>Updates and Newsroom</h1>
            <hr>
            <div class=" d-flex text-dark">
                <p class=" d-flex align-items-center"><i class="beff ri-arrow-left-s-line"></i></p>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper ">
                        @foreach ($berita as $item)
                            <div class="swiper-slide">
                                <div class="bg-light" style="border-radius:10px">
                                    <div class="image-wrapper"><img src="{{ asset('asset/img/Berita/' . $item->gambar) }}"
                                            alt="{{ $item->gambar }}" style="border-radius:9px 9px 0px 0;">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->judul }}</h5>
                                        <p class="card-text">{{ $item->deskripsi }}</p>
                                        <a href="/berita/{{$item->id}}"><button type="button" class="btn btn-primary">Selengkapnya</button></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination martop"></div>
                </div>
                <p class=" d-flex align-items-center"><i class=" afft ri-arrow-right-s-line"></i></p>
            </div>

            <br>
            <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-primary">Show All</button>
            </div>
        </div>

        <br><br>
        <di class="d-flex justify-content-around text-light text-center mb-2 ">
            @foreach ($jumlah as $p)
                <div class="lingkar">
                    <div class="ele">
                        <i class="ri-user-fill"></i>
                        <p><b>Mahasiswa Aktif</b></p>
                        <h2><b>{{ $p->Mahasiswa }}</b></h2>
                    </div>
                </div>
                <div class="lingkar">
                    <div class="ele">
                        <i class="ri-group-fill"></i>
                        <h4><b>Alumni</b></h4>
                        <h2><b>{{ $p->StaffDosen }}</b></h2>
                    </div>
                </div>
                <div class="lingkar">
                    <div class="ele">
                        <b>
                            <i class="ri-pages-line"></i>
                            <p><b>Dosen & Staff</b></p>
                            <h2><b>{{ $p->Publikasi }}</b></h2>
                        </b>
                    </div>
                </div>
            @endforeach
            </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
@endsection
