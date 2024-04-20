<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// route basic
Route::get('/about', function () {
    return '<h1>Halo</h1>'
        . 'Selamat Datang di Webb Saya <br>'
        . 'Laravel, Memang keren.';
    });

    Route::get('/halaman2', function () {
        return view('animals');
    });

    Route::get('/halaman3', function () {
    return view('fruits');
    });

    Route::get('/About', function () {
        $nama = "Muhammad Maulana Gibran"; 
        $jk = "Laki-laki";
        $pt = "SMK";
        $pekerjaan = "Siswa";
    return view('biodata', compact('nama','jk','pt','pekerjaan'));
    });

    Route::get('/sample/{nama}/{kelas}', function (Request $request, $nama, $kelas) {
        $nama2 = $nama;
        $kelas2 = $kelas;
    return view('sample', compact('nama2', 'kelas2'));
});



