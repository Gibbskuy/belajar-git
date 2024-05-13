@php
    $album = \App\Models\AlbumMusik ::all();
    $album2 = \App\Models\AlbumMusik::where('id',1)->orderBy('id','desc')->get();
    $album3 = \App\Models\AlbumMusik::where('tahun','2022')->orderBy('id','asc')->get();
    $album4 = \App\Models\AlbumMusik ::find(10);
    $album5 = \App\Models\AlbumMusik ::first();

@endphp

<h1 style="color: green">Menampilkan ALL</h1>
@foreach ($album as $data)
    
    <h3>Lagu ke : {{$data->id}}</h3>
    <p>Judul : {{$data->judul}} </p>
    <p>Tahun : {{$data->tahun}} </p>
    <p>Cover : {{$data->cover_album}} </p>
    <hr>
@endforeach

<hr>

<h1 style="color: red">Menampilkan Where oderBy</h1>
@foreach ($album3 as $item)
    <h3>Lagu ke : {{$item->id }}</h3>
    <p>Judul : {{$item->judul }} </p>
    <p>Tahun : {{$item->tahun }} </p>
    <p>Cover : {{$item->cover_album }} </p>
    <hr>
@endforeach

<hr>

    <h1 style="color: blue">Menampilkan Find</h1>
    <h4>Tanpa Foreach</h4>
    <h3>Lagu ke : {{$album4->id ?? 'kosong'}}</h3>
    <p>Judul : {{$album4->judul ?? 'kosong'}} </p>
    <p>Tahun : {{$album4->tahun ?? 'kosong'}} </p>
    <p>Cover : {{$album4->cover_album ?? 'kosong'}} </p>
    <hr>

<hr>

    <h1 style="color: blue">Menampilkan First</h1>
    <h4>Tanpa Foreach</h4>
    <h3>Lagu ke : {{$album5->id ?? 'kosong'}}</h3>
    <p>Judul : {{$album5->judul ?? 'kosong'}} </p>
    <p>Tahun : {{$album5->tahun ?? 'kosong'}} </p>
    <p>Cover : {{$album5->cover_album ?? 'kosong'}} </p>
    <hr>

