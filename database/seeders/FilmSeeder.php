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
            'deskripsi' => 'Four teenagers are sucked into a magical video game, and the only way they can escape is to work together to finish the game.'
        ]);
         Film::insert([
            'judul' => 'Avatar',
            'deskripsi' => 'A paraplegic Marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home.'
        ]);
         Film::insert([
            'judul' => 'Mortal Kombat',
            'deskripsi' => 'A paraplegic Marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home.'
        ]);
    }
}
