<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Albums extends Model
{
    use HasFactory;

    public function singers(){
        return $this->belongsTo(Singer::class);
    }

    public function gender(){
        return $this->hasMany(Gender::class);
    }
}
