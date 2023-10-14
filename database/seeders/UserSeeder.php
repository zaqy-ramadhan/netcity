<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'Rangga',
            'email'=>'Rangga@gmail.com',
            'password'=>bcrypt('12345'),
            'role'=>'0',
            'no_telp'=>'087795'

        ]);

    }
}
