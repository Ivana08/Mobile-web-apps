<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Teacher',
            'email' => 'teacher@sdu.dk',
            'password' => Hash::make('password'),
            'role' => '1',
        ]);
        DB::table('users')->insert([
            'name' => 'Student One',
            'email' => 'student1@sdu.dk',
            'password' => Hash::make('password'),
            'role' => '0',
        ]);
        DB::table('users')->insert([
            'name' => 'Student Two',
            'email' => 'student2@sdu.dk',
            'password' => Hash::make('password'),
            'role' => '0',
        ]);
        DB::table('users')->insert([
            'name' => 'Student Three',
            'email' => 'student3@sdu.dk',
            'password' => Hash::make('password'),
            'role' => '0',
        ]);
        DB::table('users')->insert([
            'name' => 'Student Four',
            'email' => 'student4@sdu.dk',
            'password' => Hash::make('password'),
            'role' => '0',
        ]);
    }
}
