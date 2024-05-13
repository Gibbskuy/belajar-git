<?php

namespace Database\Seeders;

use App\Models\Siswa;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{

    public function run()
    {
        Siswa::insert(
            [
                'nama' => 'Agib',
                'kelas' => 'XI RPL 2',
                'jenis_kelamin' => 0,
                'alamat' => 'Jl.Cilisung'
            ]
        );
        Siswa::insert(
            [
                'nama' => 'Agib',
                'kelas' => 'XI RPL 2',
                'jenis_kelamin' => 0,
                'alamat' => 'Jl.Cilisung'
            ]
        );
        Siswa::insert(
            [
                'nama' => 'Agib',
                'kelas' => 'XI RPL 2',
                'jenis_kelamin' => 0,
                'alamat' => 'Jl.Cilisung'
            ]
        );
        Siswa::insert(
    [
        'nama' => 'Agib',
        'kelas' => 'XI RPL 2',
        'jenis_kelamin' => 0,
        'alamat' => 'Jl.Cilisung',
    ]
);

    }
}
