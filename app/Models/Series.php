<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'seasonsQty', 'episodes'];

    public function episodes()
    {
        return $this->hasMany(Episodes::class);
    }

    public function seasons()
    {
        return $this->hasMany(Seasons::class);
    }
}
