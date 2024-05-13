<?php

namespace Database\Seeders;

use App\Models\DetailFilm;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DetailFilm::insert([
            'film_id' => 1,
            'code_film' => 'tt7975244',
            'url_imdb' => 'https://www.imdb.com/title/tt7975244/?ref_=fn_al_tt_2'
        ]);
         DetailFilm::insert([
            'film_id' => 2,
            'code_film' => 'tt9018736',
            'url_imdb' => 'https://www.imdb.com/title/tt9018736/?ref_=nv_sr_srsg_0_tt_8_nm_0_q_avatar'
        ]);
        DetailFilm::insert([
            'film_id' => 3,
            'code_film' => 'tt0293429',
            'url_imdb' => 'https://www.imdb.com/title/tt0293429/?ref_=fn_al_tt_1'
        ]);

    }
}
