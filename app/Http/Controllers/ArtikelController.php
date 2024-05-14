<?php

namespace App\Http\Controllers;
use App\Models\Artikel;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
     public function getArtikel()
    {
    $artikels = Artikel::all();
    // dd($movies);
    return view ('artikel.artikel', compact('artikels'));
    }

    public function getArtikelById($id)
    {
    $artikels = Artikel::findOrfail($id);
    return view('artikel.show', compact('artikels'));
    }
     public function getArtikelByKategori($kategori)
    {
        // menampilkan data berdasarkan kategori yang di pilih
        $artikels = Artikel::where('kategori', $kategori)->get();
        return view('artikel.kategori', compact('artikels'));
    }

}
