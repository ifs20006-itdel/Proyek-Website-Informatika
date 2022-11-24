@extends('master')

@section('section')
    <section>
        
        <h1 class=" me-4 text-end">
            <label class="text-primary">Program Studi</label>
            <label class="text-white">Sarjana</label><br>
            <label class="text-white ">Informatika</label>
        </h1>
        <h1 class="text-light text-center"><strong>Program Studi <font style="color:rgba(0, 121, 194, 1);">Informatika</font></strong></h1>
        <p class="text-light container text-center" style="
	">Informatika merupakan salah satu core technology dalam
            sistem teknologi yang dikenal sebagai Teknologi Informasi dan Komunikasi (Information and Communication
            Technology), karena melalui pemfungsian Informatika-lah diperoleh produk-produk perangkat
            lunak (software products) yang memungkinkan terwujudnya sifat intelligent dari Teknologi Informasi dan
            Komunikasi. Teknologi Informasi dan Komunikasi merupakan strategic enabling technology dalam menopang upaya
            pencerdasan kehidupan bangsa</p>
        <div>
            <div class="row text-light">
                
                <div class="col-sm-8    ">
                    
                    <div class="p-2" style="background-color: rgba(156, 173, 206, 0.47) ;">
                        <h1 class=""><strong>EVENTS</strong></h1>
                        <div class="m-2">
                            <div class="d-flex">
                                <div id="tanggal" class="d-flex justify-content-center">
                                    <p class="text-center w-100 p-2 m-2" style="background-color: rgb(0, 121, 194);">07 <br>OCT</p>
                                </div>
                                <div>
                                    <h2>Garuda Academic of Excellence (ACE)</h2>
                                <p>Pola dan susunan mata kuliah yang harus ditempuh oleh peserta didik.</p>
                                </div>
                            </div>
                            <hr class="w-75">
                        </div>
                        
                        <div class="m-2">
                            <div class="d-flex">
                                <div id="tanggal" class="d-flex justify-content-center">
                                    <p class="text-center w-100 p-2 m-2" style="background-color: rgb(0, 121, 194);">07 <br>OCT</p>
                                </div>
                                <div>
                                    <h2>Garuda Academic of Excellence (ACE)</h2>
                                <p>Pola dan susunan mata kuliah yang harus ditempuh oleh peserta didik.</p>
                                </div>
                            </div>
                            <hr class="w-75">
                        </div>
                        <div class="m-2">
                            <div class="d-flex">
                                <div id="tanggal" class="d-flex justify-content-center">
                                    <p class="text-center w-100 p-2 m-2" style="background-color: rgb(0, 121, 194);">07 <br>OCT</p>
                                </div>
                                <div>
                                    <h2>Garuda Academic of Excellence (ACE)</h2>
                                <p>Pola dan susunan mata kuliah yang harus ditempuh oleh peserta didik.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <h1>|  Link Terkait</h1>
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
            <div id="carouselExampleControls" class="text-dark carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="cards-wrapper d-flex justify-content-center" >
                            <div class="card w-25">
                                <div class="image-wrapper"><img src="{{ $beritas[0]->gambar }}" alt="$beritas[0]->gambar"></div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $beritas[0]->gambar }}</h5>
                                    <p class="card-text">{{ $beritas[0]->deskripsi }}</p>
                                </div>
                            </div>
                            <div class="card w-25">
                                <div class="image-wrapper"><img src="{{ asset('asset/img/Berita/b1.png') }}" alt="..."></div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $berita[0]->judul }}</h5>
                                    <p class="card-text">{{ $berita[0]->deskripsi }}</p>
                                </div>
                            </div>
                            <div class="card w-25">
                                <div class="image-wrapper"><img src="{{ asset('asset/img/Berita/b1.png') }}" alt="..."></div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $berita[0]->judul }}</h5>
                                    <p class="card-text">{{ $berita[0]->deskripsi }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper" style="display: flex;">
                            <div class="card">
                                <div class="image-wrapper"><img src="..." alt="..."></div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="image-wrapper"><img src="..." alt="..."></div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="image-wrapper"><img src="..." alt="..."></div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class=" carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <h1 class="ri-arrow-left-s-line" style="font-size: 500%"></h1>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <h1 class="ri-arrow-right-s-line" style="font-size: 500%"></h1>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-primary">Show All</button>
            </div>
        </div>

        <div class="d-flex justify-content-around text-light text-center mb-2 ">
            @foreach ($jumlah as $p)
                <div class="lingkar">
                    <div class="ele">
                        <p>Mahasiswa Aktif</p>
                        <p>{{ $p->Mahasiswa }}</p>
                    </div>
                </div>
                <div class="lingkar">
                    <div class="ele">
                        <p>Staff dan Dosen</p>
                    <p>{{ $p->StaffDosen }}</p>
                    </div>
                </div>
                <div class="lingkar">
                    <div class="ele">
                        <p>Publikasi</p>
                    <p>{{ $p->Publikasi }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
@endsection
