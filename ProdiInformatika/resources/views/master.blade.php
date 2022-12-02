<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <style>
        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .martop {
            margin-top: 20px;
            background-color: rgba(255, 0, 0, 0.109);
            background-size: contain;
        }

        .beff {
            margin: 20px;
            background-color: aliceblue;
        }

        .afft {
            margin: 20px;
        }

        * {
            font-family: 'Nunito';
        }

        .ele {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .lingkar {
            border-radius: 50%;
            height: 10em;
            width: 10em;
            position: relative;
            border: 7px solid rgba(0, 121, 194, 1);
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .trigger:hover+.keTrig {
            visibility: visible;
        }

        .keTrig {
            padding: 3%;
            background-color: rgba(90, 94, 123, 0.95);
            list-style: none;
            color: white;
            position: absolute;
            visibility: hidden;
        }

        .cards-wrapper {
            display: flex;
        }

        .card {
            margin: 0.5em;
            width: calc(100%/3);
        }

        .image-wrapper {
            height: 10vw;
            margin: 0 auto;
            /* display: flex;
                justify-content: center;
                align-items: center; */
        }

        .image-wrapper img {
            max-width: 100%;
            max-height: 100%;
        }

        /* .biru:hover{
                color: blue
            } */

        .mainmenubtn {

            cursor: pointer;
        }

        .mainmenubtn:hover {
            background-color: grey;
        }

        .dropdown-child {
            display: none;
            position: absolute;
            background-color: rgba(90, 94, 123, 0.67);
            padding-block-end: 20px;
            border-radius: 3%;
        }

        .dropdown-child a {
            color: white;
            padding: 20px;
            text-decoration: none;
            display: block;
            border-radius: 3%;
        }

        .dropdown-child a:hover {
            background-color: rgba(90, 94, 123, 1);
            border-radius: 3%;
        }


        .dropdown:hover .dropdown-child {
            display: block;
        }
    </style>

    <title>Informatika IT Del</title>
</head>

<body style="background-color: rgba(25, 36, 111, 1);margin: 0; padding: 0;">
    <header>
        <div class="d-flex justify-content-between text-light" style="background-color: rgba(25, 36, 111, 1);">
            <div class="ms-4 mt-4 mb-4">
                <img src="{{ asset('asset/img/logo_del.png') }}" alt="logo del disini" width="75em" style="border-radius: 10%;">
            </div>
            <div>
                <div class=" align-middle" style="display: flex;">
                    <p class="p-2 mx-4"><a href="/">Beranda</a></p>

                    <div class="dropdown">
                        <p class="mainmenubtn mt-1 mx-4">Tentang Kita<i class="ri-arrow-down-s-fill"></i></p>
                        <div class="dropdown-child float">
                            <a href="/visiMisi">Visi Misi </a>  
                            <a href="/sejarah">Sejarah</a>
                            <a href="/staffDosen">Staff & Dosen </a>
                        </div>
                    </div>

                    <p class="p-2 mx-4">Kurikulum</p>

                    <div class="dropdown">
                        <p class="mainmenubtn mt-1 mx-4">Akademik<i class="ri-arrow-down-s-fill"></i></p>
                        <div class="dropdown-child float">
                            <a href=”http://wwww.yourdonain.com/page1.html”>Organisasi</a>
                            <a href="/profil-lulusan">Profil Lulusan</a>
                            <a href=”http://wwww.yourdonain.com/page3.html”>Capaian</a>
                            <a href=”http://wwww.yourdonain.com/page4.html”>Galeri</a>
                        </div>
                    </div>

                    <p class="p-2 mx-4">Beasiswa</p>

                    <div class="p-2">
                        <button type="button" class="btn btn-primary">Contact Us</button>
                    </div>
                </div>
                <div class="d-flex pe-5 p-1 justify-content-end">
                    <input type="text" value="Pencarian..." style="border-radius: 10px;">
                </div>
            </div>
        </div>
    </header>


    @yield('section')

    <br>
    <br>

    <div class="bawah ">
        <div class=" pt-3 container-fluid text-light " name="footer "
            style="background-color: rgba(0, 121, 194, 0.7);margin: 0; padding: 0; ">
            <img src="{{ asset('asset/img/logo_del.png') }}" alt="logo Del" class="m-2" height="100em"><br>
            <div class="row p-3">
                <div class="col-sm ">
                    <label for=" ">Institut Teknologi Del</label><br>
                    <label for=" ">Jl. Sisingamangaraja, Sitoluama, Laguboti, Toba Samosir Sumatera Utara -
                        Indonesia
                        22381</label>
                    <br><br><br>
                    <label for=" ">+62822988XXXXX</label><br>
                    <label for=" "><i>Informatika@del.ac.id</i></label>
                </div>
                <div class="col-sm ">
                    <p>Enter your email address to subscribe to this blog and receive notifications of new posts by
                        email.</p>
                    <p>Email Address</p>
                    <hr style="size: 10; width: 80%; ">

                    <div class="containter d-flex justify-content-end ">
                        <button type="button " class="mt-3 btn btn-primary ">Submit</button>
                    </div>

                    <br><br>
                    <div class="d-flex justify-content-end me-3" style="color:black; font-size:3em">
                        <i class="ri-facebook-circle-fill mx-2"></i>
                        <i class="ri-mail-line mx-2"></i>
                        <i class="ri-youtube-fill mx-2"></i>
                        <i class="ri-twitter-fill mx-2"></i>
                        <i class="ri-instagram-fill mx-2"></i>
                    </div>
                </div>
            </div>
        </div>
        <p class="m-0 p-0 bg-dark text-light ">© 2022 Program Studi S1 INFORMATIKA - IT Del</p>
    </div>

     <!-- Swiper JS -->
     <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

     <!-- Initialize Swiper -->
     <script>
         var swiper = new Swiper(".mySwiper", {
             slidesPerView: 3,
             spaceBetween: 30,
             slidesPerGroup: 3,
             loop: true,
             loopFillGroupWithBlank: true,
             pagination: {
                 el: ".swiper-pagination",
                 clickable: true,
             },
             navigation: {
                 nextEl: ".afft",
                 prevEl: ".beff",
             },
         });
     </script>
</body>

</html>
