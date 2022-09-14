<?php

namespace Database\Seeders;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        'name'=>'peter parker',
        'email'=>'peter@db.com',
        'password'=>Hash::make('12345')
       ]);
    }
}
