<?php

namespace Database\Seeders;

use App\Models\Penerbit;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PenerbitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penerbit = ['LIPI', 'UB PRESS', 'PERPUSNAS'];

        foreach ($penerbit as $key => $value) {
            Penerbit::create([
                'nama' => $value,
                'slug' => Str::slug($value)
            ]);
        }

      
    }
}
