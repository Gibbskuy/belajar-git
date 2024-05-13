<?php

namespace Database\Seeders;

use App\Models\Sekolah;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sekolah::insert(
            [
                'nama' => 'SMK ASSALAAM',
                'alamat' => 'Jl.Cibaduyut',
                'email' => 'smkassalaam@gmail.com',
                'tlp' => '0897654321',
                'status' => 'Aktif'
            ]
);
         Sekolah::insert(
    [
        'nama' => 'SMK MARHAS',
        'alamat' => 'Jl.jadeg',
        'email' => 'smkmarhas@gmail.com',
        'tlp' => '0897654322',
        'status' => 'Aktif',
    ]
);
        Sekolah::insert(
    [
        'nama' => 'SMK 3 BALEENDAH',
        'alamat' => 'Jl.Cibaduyut',
        'email' => 'smk3baleendah@gmail.com',
        'tlp' => '0897654323',
        'status' => 'Aktif',
    ]
);
        Sekolah::insert(
    [
        'nama' => 'SMK ANGKASA',
        'alamat' => 'Jl.Cilampeni',
        'email' => 'smkangkasa@gmail.com',
        'tlp' => '0897654324',
        'status' => 'Aktif',
    ]
);
        Sekolah::insert(
    [
        'nama' => 'SMK KAPE',
        'alamat' => 'Jl.Sulaiman',
        'email' => 'smkkape@gmail.com',
        'tlp' => '0897654325',
        'status' => 'Aktif',
    ]
);
        Sekolah::insert(
    [
        'nama' => 'SMA ASSALAAM',
        'alamat' => 'Jl.Cibaduyut',
        'email' => 'smaassalaam@gmail.com',
        'tlp' => '0897654326',
        'status' => 'Aktif',
    ]
);
        Sekolah::insert(
    [
        'nama' => 'SMK 4 BANDUNG',
        'alamat' => 'Jl.Buah Batu',
        'email' => 'smk4bandung@gmail.com',
        'tlp' => '0897654327',
        'status' => 'Aktif',
    ]
);
        Sekolah::insert(
    [
        'nama' => 'SMK 2 ANGKASA',
        'alamat' => 'Jl.Lanud',
        'email' => 'smk2angkasa@gmail.com',
        'tlp' => '0897654328',
        'status' => 'Aktif'
    ]
);
        Sekolah::insert(
    [
        'nama' => 'SMA 1 MARGAHYU',
        'alamat' => 'Jl.Lanud',
        'email' => 'sma1margahayu@gmail.com',
        'tlp' => '0897654329',
        'status' => 'Aktif',
    ]
);
        Sekolah::insert(
    [
        'nama' => 'SMK 1 PASUNDAN',
        'alamat' => 'Jl.Balong Gede',
        'email' => 'smkpasundan@gmail.com',
        'tlp' => '0897654320',
        'status' => 'Aktif',
    ]
);

    }
}
