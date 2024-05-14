<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

     public $fillable = ['judul', 'foto', 'kategori', 'konten', 'penulis'];

    // kolom(field) mana yang boleh di perlihatkan
    public $visibe = ['judul', 'foto', 'kategori', 'konten', 'penulis'];
}
