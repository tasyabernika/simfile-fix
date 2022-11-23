<?php

namespace Database\Seeders;

use App\Models\SifBiodata;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BiodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SifBiodata::create([
            'user_id' => 1,
            'addfile_id' => 1,
            'nama' => 'tasya',
            'tempat' => 'Seoul',
            'tanggal_lahir' => '2005-4-25',
            'no_telfon' => '085771341912',
            'daftar_suara' => 'mezzo'
        ]);
    }
}
