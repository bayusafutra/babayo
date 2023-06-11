<?php

namespace Database\Seeders;

use App\Models\KategoriProgam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriProgamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       KategoriProgam::create([
        'nama'=>'Sosial',
        'slug'=>'sosial',
       ]);
    }
}
