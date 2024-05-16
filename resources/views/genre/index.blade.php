@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session('success'))
            <div class="alert alert-success fade show" role="alert">
                {{ session('success') }}
            </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <a href="{{route('genre.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-reponsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama Genre</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no = 1; @endphp
                            @foreach ($genre as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->nama_genre}}</td>
                                <td>
                                    <form action="{{route('genre.destroy',$item->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{route('genre.edit',$item->id)}}" class="btn btn-outline-success">
                                            Edit
                                        </a>
                                        <a href="{{route('genre.show',$item->id)}}" class="btn btn-outline-warning">
                                            Show
                                        </a>

                                        <button class="btn btn-outline-danger" type="submit"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
