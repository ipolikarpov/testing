<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;

    public function athletes()
    {
        return $this->hasMany(Athlete::class, 'realcoaches_id', 'id');

    }
}

