@php
    $siswa = \App\Models\Siswa::find(4);
    $siswa2 = \App\Models\Siswa::where('id',1)->orderBy('id','desc')->get();
    $siswa3 = \App\Models\Siswa::where('kelas','XI RPL 2')->orderBy('id','desc')->first();
    
    // where ('kelas', 'XI RPL 2') 
    // ->orderBy('id','desc')
     // ->where('nama','SMK ASSALAAM')
    // ->where('email','smkassalaam')
    // ->gruopBy('id')
    // ->get();

    // $sekolah = \App\Models\Sekolah::where ('status', 'Aktif') 
    // ->orderBy('id','desc')->get();
    // ->where('nama','SMK ASSALAAM')
    // ->where('email','smkassalaam')
    // ->gruopBy('id')
    

@endphp

    <h2>First</h2>
    <h2>Tanpa Foreach</h2>
    <h1>ID : {{$siswa3->id ?? 'kosong'}}</h1>
    <h1>Nama : {{$siswa3->nama ?? 'kosong'}} </h1>
    <h1>Kelas : {{$siswa3->kelas ?? 'kosong'}} </h1>
    <h1>Jenis Kelamin : {{$siswa3->jenis_kelamin ?? 'kosong'}} </h1>
    <hr>

    <h2>Tanpa Foreach</h2>
    <h1>ID : {{$siswa->id ?? 'kosong'}}</h1>
    <h1>Nama : {{$siswa->nama ?? 'kosong'}} </h1>
    <h1>Kelas : {{$siswa->kelas ?? 'kosong'}} </h1>
    <h1>Jenis Kelamin : {{$siswa->jenis_kelamin ?? 'kosong'}} </h1>
    <hr>

@foreach ($siswa2  as $data)
    <h1>ID : {{$data->id}}</h1>
    <h1>Nama : {{$data->nama}} </h1>
    <h1>Kelas : {{$data->kelas}} </h1>
    <h1>Jenis Kelamin : {{$data->jenis_kelamin}} </h1>
    <hr>
@endforeach

{{-- @foreach ($sekolah  as $data1)
    <h1>ID : {{$data1->id}}</h1>
    <h1>Nama : {{$data1->nama}} </h1>
    <h1>Alamat : {{$data1->alamat}} </h1>
    <h1>email : {{$data1->email}} </h1>
    <h1>Telepon : {{$data1->tlp}} </h1>
    <h1>Status : {{$data1->status}} </h1>
    <hr>
@endforeach --}}