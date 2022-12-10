<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'role' => 'admin',
            'password'=> bcrypt('12345678'),
        ]);

        User::create([
            'name'=>'User',
            'email'=>'user@gmail.com',
            'password'=> bcrypt('12345678'),
        ]);
    }
}
