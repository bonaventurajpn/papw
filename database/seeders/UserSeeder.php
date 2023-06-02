<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Bona',
            'email' => 'bona@gmail.com',
            'password' => bcrypt('bonabona'),
            'email_verified_at' => now()
        ])->assignRole('admin');

        User::create([
            'name' => 'Rey',
            'email' => 'rey@gmail.com',
            'password' => bcrypt('pwreyrey'),
            'email_verified_at' => now()
        ])->assignRole('petugas');

        User::create([
            'name' => 'Tika',
            'email' => 'tika@gmail.com',
            'password' => bcrypt('tikatika'),
            'email_verified_at' => now()
        ])->assignRole('peminjam');

    }
}
