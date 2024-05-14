@extends('layout.layout')
@section('content')
    <center>
        <h2><b><i>Artikel</i></b></h2>
    </center>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($artikels as $item)
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ $item->foto }}" class="card-img-top" alt="..." width="100%" height="230px">

                            <div class="card-body">
                                <p class="card-text"><b>{{ $item->judul }}</b></p>
                                {{-- <p><a href="">{{ $item->kategori }}</a></p> --}}
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ url('artikel/'. $item->id) }}" class="btn btn-sm btn-outline-secondary">Baca Artikel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
