<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seasons extends Model
{
    use HasFactory;

    protected $fillable = ['numberOfSeasons'];

    public function episodes()
    {
        return $this->hasMany(Episodes::class);
    }

    public function series()
    {
        return $this->belongsTo(Series::class);
    }
}
