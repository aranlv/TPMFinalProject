<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'group-name'=>'AdminAccount',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('Admin123!'),
            'is_admin'=>true
        ]);
    }
}
