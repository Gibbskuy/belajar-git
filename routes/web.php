<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\GenreController;
// import controller
use App\Http\Controllers\PenulisController;
use App\Models\Film;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;



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
    return view('biodata', compact('nama', 'jk', 'pt', 'pekerjaan'));
});

Route::get('/sample/{nama}/{kelas}', function (Request $request, $nama, $kelas) {
    $nama2 = $nama;
    $kelas2 = $kelas;
    return view('sample', compact('nama2', 'kelas2'));
});

Route::get('siswa', function () {
    return view('siswa');
});
Route::get('sekolah', function () {
    return view('siswa');

});
Route::get('album', function () {
    return view('albummusik');

});
Route::get('film', function () {
    return view('film');

});
Route::get('film/{id}', function (int $id) {
    $film = Film::find($id);
    return view('detail-film', ['film' => Film::findOrfail($id)]);

});

//route with controller
Route::get('perkenalan', [App\Http\Controllers\Mycontroller::class, 'introduce']);
Route::get('hewan', [App\Http\Controllers\Mycontroller::class, 'animals']);

Route::get('movie', [App\Http\Controllers\MovieController::class, 'getMovie']);

Route::get('movie/{id}', [App\Http\Controllers\MovieController::class, 'getMovieById']);

Route::get('artikel', [App\Http\Controllers\ArtikelController::class, 'getArtikel']);
Route::get('artikel/{id}', [App\Http\Controllers\ArtikelController::class, 'getArtikelById']);
Route::get('artikel/kategori/{kategori}', [App\Http\Controllers\ArtikelController::class, 'getArtikelByKategori']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('penulis', PenulisController::class);
    Route::resource('genre', GenreController::class);
    Route::resource('buku', BukuController::class);
});

// route guest(tamu / pengunjung)

Route::get('/',[FrontController::class,'buku']);
Route::get('buku/{id}',[FrontController::class,'detail_buku']);
