@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col" style="width: 10rem;">
                <div class="card">
                    <img src="{{ $artikels->foto }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><b>{{ $artikels->judul }}</b></p>
                        <p>Kategori : <a href="{{ url('artikel/kategori/'. $artikels->kategori) }}">{{ $artikels->kategori }}</a></p>
                        <p>{{ $artikels->konten }}</p>
                        <p>Penulis : {{ $artikels->penulis }}</p>
                    </div>
                </div>
            </div>
        </div>
        <a type="button" class="btn btn-outline-secondary mt-5" href="{{ url('/artikel') }}">kembali ke halaman artikel</a>
    </div>
@endsection
