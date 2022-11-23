<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SifSuara extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'suara'
    ];

    public function users() {
        return $this->hashOne(User::class);
    }
}
