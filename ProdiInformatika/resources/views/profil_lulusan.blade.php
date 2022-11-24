@extends('master')

@section('section')
    <div class="row">
        <div class="col">
        </div>
        <div class="col">
            <div class="d-flex justify-content-end mb-5">
                <h1 class="text-light" style="font-size: 4em;margin-right: 2em;">
                    <b>
                         Profil Lulusan <br>
                        Program Studi Informatika
                    </b>
                </h1>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center">
        <img src="{{ asset('asset/img/profil_lulusan.png') }}" alt="logo Del" class="w-75">
    </div>

    <div class="container text-light m-5">
        <p style="font-size:1em;"><b>
                Terdapat 10 profil lulusan PSSTI yang dapat dikelompokkan ke dalam tiga kelompok. Kelompok pertama adalah
                Software Engineer mencakup profil lulusan: Mobile Application Developer, Web Developer (front-end, back-end,
                service), Full-Stack Developer, User Interface Designer, User Experience Designer, Software Analyst,
                Database
                Engineer, Software Quality Assurance dan Software Tester. Kelompok kedua adalah Cybersecurity Practitioner,
                dan
                kelompok ketiga adalah AI (Artificial Intelligent) Engineer.
            </b>
        </p>
    </div>
@endsection
