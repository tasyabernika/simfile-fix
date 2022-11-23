<?php

namespace Database\Seeders;

use App\Models\SifAddfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SifAddfile::create([
            'user_id' => 1,
            'judul_file' => 'foto.png'
        ]);
    }
}
