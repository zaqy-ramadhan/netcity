<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('kategoris')->insert([
            'nama_kategori'=>'Visual Arts and Design'
         ]);
         DB::table('kategoris')->insert([
            'nama_kategori'=>'Media and Entertaiment'
         ]);
         DB::table('kategoris')->insert([
            'nama_kategori'=>'Design Communication'
         ]);
         DB::table('kategoris')->insert([
            'nama_kategori'=>'Fashion and Apparel'
         ]);
    }
}
