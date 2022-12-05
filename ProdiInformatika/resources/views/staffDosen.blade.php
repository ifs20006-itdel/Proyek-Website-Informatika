@extends('master')

@section('section')
    <section>
        <div class="serv text-light">
            <ul>
                @foreach ($dosen as $item)
                    <li class="">
                        <div>
                            <div class="d-flex justify-content-center">
                                <img class="gbrDosen " src="{{ asset('asset/img/Dosen/' . $item->gambar) }}"
                                            alt="{{ $item->gambar }}">
                            </div>
                                            
                                            <br><br><p class="text-center ">{{$item->nama}}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
