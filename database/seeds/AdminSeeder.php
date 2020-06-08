<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('admins')->insert([
            'username' => Str::random(4),
            'nickname' => Str::random(4),
            'email' => Str::random(6).'@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}
