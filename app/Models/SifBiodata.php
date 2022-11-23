<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SifBiodata extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama',
        'tempat',
        'tanggal_lahir',
        'no_telfon',
        'daftar_suara'
    ];

    public function users() {
        return $this->hashOne(User::class);
    }

    // public function addfile() {
    //     return $this->hasMany(SifAddfile::class);
    // }
}
