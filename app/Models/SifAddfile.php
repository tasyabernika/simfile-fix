<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SifAddfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_file',
        'foto'
    ];

    public function users() {
        return $this->hashMany(User::class);
    }

    // public function biodatas() {
    //     return $this->belongsTo(SifBiodata::class);
    // }
}
