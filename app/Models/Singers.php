<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Singers extends Model
{
    use HasFactory;
    
    protected $fillable = ['name'];

    public function albums(){
        return $this->hashMany(Albums::class);
    }

    public function gender(){
        return $this->hasMany(Gender::class);
    }
}
