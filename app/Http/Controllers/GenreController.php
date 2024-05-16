<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $genre = Genre::orderBy('id', 'desc')->get();
        return view('genre.index', compact('genre'));
    }

    public function create()
    {
        return view('genre.create');
    }

    public function store(Request $request)
    {
        // membuat validasi data
        $validated = $request->validate([
            'nama_genre' => 'required|max:255',
        ]);

        $genre = new Genre();
        $genre->nama_genre = $request->nama_genre;
        $genre->save();

        return redirect()->route('genre.index')
            ->with('success', 'data berhasil ditambahkan');
    }

    public function show($id)
    {
        $genre = Genre::findOrFail($id);
        return view('genre.show', compact('genre'));
    }

    public function edit($id)
    {
        $genre = Genre::findOrFail($id);
        return view('genre.edit', compact('genre'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_genre' => 'required|max:255',
        ]);

        $genre = Genre::findOrFail($id);
        $genre->nama_genre = $request->nama_genre;
        $genre->bio = $request->bio;
        $genre->save();

        return redirect()->route('genre.index')
            ->with('success', 'data berhasil di ubah');
    }

    public function destroy($id)
    {
        $genre = Genre::findOrFail($id);
        $genre->delete();

        return redirect()->route('genre.index')
            ->with('success', 'data berhasil di hapus');
    }
}
