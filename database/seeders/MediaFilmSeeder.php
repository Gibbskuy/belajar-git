<?php

namespace Database\Seeders;

use App\Models\MediaFilm;
use Illuminate\Database\Seeder;

class MediaFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'Windah Manusia Bolong',
            'url_media' => 'https://www.youtube.com/embed/DleTa0nrqbc?si=uXULDd0oMozEpw5a" title="YouTube video player',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'Windah Main Game Landry Night',
            'url_media' => 'https://www.youtube.com/embed/DleTa0nrqbc?si=uXULDd0oMozEpw5a" title="YouTube video player',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'Windah',
            'url_media' => 'https://www.youtube.com/embed/DleTa0nrqbc?si=uXULDd0oMozEpw5a" title="YouTube video player',

        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 0,
            'media_title' => 'Windah',
            'url_media' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZPdmCI9ovVA5gT4P1fJlf_W7_rdAseHenUA&s',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 0,
            'media_title' => 'Windah Main Game Backroom',
            'url_media' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-3XMcex18kzrLTPPNwLD_eQq5x2ZklXCSMg&s',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'MiawAug Main Game Warnet Life',
            'url_media' => 'https://www.youtube.com/embed/wjje-e2seJg?si=2CHxlmFIH4EfRFk3" title="YouTube video player',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'MiawAug',
            'url_media' => 'https://www.youtube.com/embed/wjje-e2seJg?si=2CHxlmFIH4EfRFk3" title="YouTube video player',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'MiawAug Main Game Absolute Fear',
            'url_media' => 'https://www.youtube.com/embed/wjje-e2seJg?si=2CHxlmFIH4EfRFk3" title="YouTube video player',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 0,
            'media_title' => 'MiawAug Main Game Granny',
            'url_media' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFXstDt1LcLMdmUZZnhhSPwvGls4hfJuaWBA&s',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 0,
            'media_title' => 'MiawAug',
            'url_media' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMb-HmgpuoDOuh1clybezIm1tySaBCoHqm0g&s',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'Lufhi Halimawan Creator Warning',
            'url_media' => 'https://www.youtube.com/embed/MxkHeBT9pKw?si=t4QJvjTpeGlwtSst" title="YouTube video player',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'Lufhi Halimawan Creator Warning',
            'url_media' => 'https://www.youtube.com/embed/MxkHeBT9pKw?si=t4QJvjTpeGlwtSst" title="YouTube video player',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'Lufhi Halimawan Creator Warning',
            'url_media' => 'https://www.youtube.com/embed/MxkHeBT9pKw?si=t4QJvjTpeGlwtSst" title="YouTube video player',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 0,
            'media_title' => 'Lufhi Halimawan Creator Warning',
            'url_media' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYtRZirJfmIhfsna18PKFg49YPIjAknk4-gQ&s',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 0,
            'media_title' => 'Lufhi Halimawan Creator Warning',
            'url_media' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmC3rG65xNAwqz0kWjMCZeJ1xTpcQOmj7g9w&s',
        ]);

    }
}
