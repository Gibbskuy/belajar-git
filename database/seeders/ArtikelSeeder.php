<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Artikel::insert([
            'judul' => 'Pentingnya Pendidikan Bagi Indonesia',
            'foto' => 'https://dispendik.mojokertokab.go.id/wp-content/uploads/2020/02/nelson-mandela-300x150.jpg',
            'kategori' => 'Pendidikan',
            'konten' => 'Sebenarnya pendidikan itu dapat kita perolah dimana saja dan kapan saja. Oleh karenaitu, kita sebagai manusia hendaknya mau menyadari hal tersebut. Pendidikan sangat berdampak besar bagi pengaruh perkembangan masa depan. Tidak hanya untuk diri sendiri, bahkan dapat pula berpengaruh bagi bangsa dan Negara Repubik Indonesia.Pendidikan itu ada bersifat formal , non formal dan informal. adapun contohnya bersifat formal yaitu : SD, SMP, SMA, Perguruan Tinggi . dan pendidikan non formal Yaitu dengan cara mengikuti kursus atau bimbingan belajar dan lain sebaginya. bagaimanapun cara kita menempuh pendidikan tersebut, asal kita mau serius dalam menjalaninya maka, sangat berdampak besar bagi masa depan diri sendiri maupun orang lain',
            'penulis' => 'Nelson Mandela'
        ]);
        Artikel::insert([
            'judul' => 'Pulau Dodola',
            'foto' => 'https://wonderful.pulaumorotaikab.go.id/gambar/artikel/artikel-ketika-surga-itu-adalah-pulau-dodola-2-l.jpg',
            'kategori' => 'Pulau',
            'konten' => 'Pulau Dodola memang belum terlalu terkenal seperti pulau cantik lainnya. Namun cobalah datang ke sana dan nikmati sendiri keindahan yang tak terelakkan itu. Pulau ini berada di Kabupaten Pulau Morotai, Kepulauan Halmahera, Maluku Utara. Pulau ini menjadi salah satu pulau paling utara di Indonesia.',
            'penulis' => 'Gibran'
        ]);
        Artikel::insert([
            'judul' => 'Pentingnya Menjaga Kesehatan ',
            'foto' => 'https://rsud.acehjayakab.go.id/media/2021.07/Pentingnya_Menjaga_Gaya_Hidup_Sehat.png',
            'kategori' => 'Kesehatan',
            'konten' => 'Gaya hidup sehat merupakan kebutuhan yang tidak dapat disahkan dari kehidupan setiap orang terlebih lagi saat kita berada di masa pandemi Covid-19 seperti sekarang ini',
            'penulis' => 'Isni Fatimah'
        ]);
    }
}
