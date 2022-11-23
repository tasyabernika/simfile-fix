<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'name' => 'tasya',
            'email' => 'tasyabernika@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'bernika',
            'email' => 'bernika@gmail.com',
            'password' => bcrypt('password')
        ]);

    }
}
