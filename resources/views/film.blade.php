{{-- @php
    $film = \App\Models\Film::all();
    $singlefilm = \App\Models\Film::find(2);
    $detailfilm = \App\Models\Film::all();
    $mediafilm = \App\Models\MediaFilm::all();
@endphp

<h1 style="color: rgba(43, 186, 226, 0.379)">Daftar Film</h1>
@foreach ($film as $data)
    <h2>ID Film : {{ $data-> id}}</h2>
    <h2>Judul Film  : {{ $data-> judul}}</h2>
    <a href="{{ url('film/'.$data-> id) }}">Click Disini</a>
@endforeach     --}}
    {{-- <h3>Media Film</h3>
        @foreach ($orangtua-> MediaFilm as $item)
            <p>Media Title : {{$item-> media_title}}</p>
            <p>URL Media : {{$item-> url_media}}</p>
            <hr>
        @endforeach
    <hr> --}}
@extends('layout.layout')
@section('content')
@php
    $film = \App\Models\Film::all();
@endphp

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($film as $item)
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                    fill="#eceeef" dy=".3em">{{$item->judul}}</text>
                            </svg>

                            <div class="card-body">
                                <p class="card-text">{{$item->deskripsi}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ url('film/'.$item-> id) }}" class="btn btn-sm btn-outline-secondary">View</a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
@endsection

    {{-- <h1 style="color: blueviolet">Single Film</h1>
    <h2>ID Film : {{ $singlefilm-> id}}</h2>
    <h2>Judul Film  : {{ $singlefilm-> judul}}</h2>
    <p>Deskripsi Film  : {{ $singlefilm-> deskripsi}}</p>

    <p>Detail Film</p>
    <p>Code Film : {{$singlefilm-> DetailFilm-> code_film}}</p>
    <p>URL IMDB : {{$singlefilm-> DetailFilm-> url_imdb}}</p>
<hr> --}}

{{-- <h1 style="color: blueviolet">Daftar Film</h1>
@foreach ($detailfilm as $orangtua)
    <h2>ID Film : {{ $orangtua-> id}}</h2>
    <h2>Code Film : {{$orangtua-> DetailFilm-> code_film}}</h2>
    <p>URL IMDB : {{$orangtua-> DetailFilm-> url_imdb}}</p>

    <p>Judul Film  : {{ $orangtua-> judul}}</p>
    <p>Deskripsi Film  : {{ $orangtua-> deskripsi}}</p>
    <hr>
@endforeach --}}

