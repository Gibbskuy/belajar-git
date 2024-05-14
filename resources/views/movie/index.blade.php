@extends('layout.layout')
@section('content')
<div class="album py-5 bg-light">
    <div class="container mt-4">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{$movie->cover_url}}" class="card-img-top" alt="..." width="100%">
                        <div class="card-body">
                          <p class="card-text">
                            <a href="movie/{{$movie->id}}">{{$movie->title}}</a>
                        </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
