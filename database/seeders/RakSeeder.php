<?php

namespace Database\Seeders;

use App\Models\Rak;
use Illuminate\Database\Seeder;

class RakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rak::create([
            'rak' => 1,
            'baris' => $i,
            'kategori_id' => 2,
            'slug' => 1 .'-'. 1
        ]);

        Rak::create([
            'rak' => 1,
            'baris' => 2,
            'kategori_id' => 2,
            'slug' => 1 .'-'. 2
        ]);

        Rak::create([
            'rak' => 1,
            'baris' => 3,
            'kategori_id' => 1,
            'slug' => 1 .'-'. 3
        ]);

        Rak::create([
            'rak' => 1,
            'baris' => 1,
            'kategori_id' => 1,
            'slug' => 1 .'-'. 4
        ]);

        Rak::create([
            'rak' => 1,
            'baris' => 1,
            'kategori_id' => 1,
            'slug' => 1 .'-'. 5
        ]);
    }
}
