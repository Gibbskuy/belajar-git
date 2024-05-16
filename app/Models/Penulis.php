<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    use HasFactory;

    public $fillable = ['nama_penulis', 'bio'];
    public $visible = ['nama_penulis', 'bio'];
    public $timestamps = true;

    // membuat relasi one to Many ke Model Buku
    public function buku()
    {
        // data Model Penulis bisa memiliki banyak data
        // dari Model Buku melalui fk 'id_penulis'
        // model Genre memiliki banyak data dari model buku
        // melalui table 'pivot' genre_buku yang dimiliki
        // oleh id_genre dan id_buku
        return $this->BelongsToMany(Buku::class, 'genre_buku','id_genre','id_buku');
    }
}
