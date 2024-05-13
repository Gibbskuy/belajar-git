<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    // kolom(field) mana saja yang boleh di isi
    public $fillable = ['title', 'deskripsi', 'cover_url', 'trailer_url', 'Viewer'];

    // kolom(field) mana yang boleh di perlihatkan
    public $visibe = ['title', 'deskripsi', 'cover_url', 'trailer_url', 'Viewer'];
}
