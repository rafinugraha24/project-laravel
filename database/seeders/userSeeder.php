<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::Create([
        'nama'      => 'admin',
        'email'     => 'admin@gmail.com',
        'password'  => '12345678',
        'role'      => 'admin'
        ]);
    }
}
