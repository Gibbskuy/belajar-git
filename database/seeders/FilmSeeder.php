<?php

namespace Database\Seeders;

use App\Models\Film;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Film::insert([
            'judul' => 'Jumanji',
            'deskripsi' => 'lorem impsum.....'
        ]);
         Film::insert([
            'judul' => 'Avatar',
            'deskripsi' => 'lorem impsum.....'
        ]);
         Film::insert([
            'judul' => 'Mortal Kombat',
            'deskripsi' => 'lorem impsum.....'
        ]);
    }
}
