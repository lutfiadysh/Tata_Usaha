<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Rayon;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Rayon::create([
        //     'nama_rayon' => 'Sukasari 2',
        //     'pembimbing' => 'Miss rachmi',
        // ]);

        User::create([
            'rayon_id' => '1',
            'rombel' => 'admin',
            'name' => 'admin',
            'nis' => 1,
            'role' => 'operator',
            'email' => 'admin@gmail.com',
            'tahun_pelajaran' => '2019 - 2020',
            'password' => \Hash::make('admin123'),
        ]);
    }
}
