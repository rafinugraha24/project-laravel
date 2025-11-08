<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterAlamatSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('master_alamat')->insert([
            [
                'provinsi' => 'DKI Jakarta',
                'kota' => 'Jakarta Pusat',
                'kecamatan' => 'Menteng',
                'kode_pos' => '10310',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'provinsi' => 'Jawa Barat',
                'kota' => 'Bandung',
                'kecamatan' => 'Coblong',
                'kode_pos' => '40131',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'provinsi' => 'Jawa Tengah',
                'kota' => 'Semarang',
                'kecamatan' => 'Banyumanik',
                'kode_pos' => '50263',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'provinsi' => 'Jawa Timur',
                'kota' => 'Surabaya',
                'kecamatan' => 'Tegalsari',
<<<<<<< HEAD
                'kode_pos' => '60363',
=======
                'kode_pos' => '60262',
>>>>>>> 85533f302d4f807168946b8718457cbd6832715a
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'provinsi' => 'Bali',
                'kota' => 'Denpasar',
<<<<<<< HEAD
                'kecamatan' => 'Denpasar',
=======
                'kecamatan' => 'Denpasar Selatan',
>>>>>>> 85533f302d4f807168946b8718457cbd6832715a
                'kode_pos' => '80228',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}