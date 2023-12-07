<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episodes extends Model
{
    use HasFactory;

    protected $fillable = ['numberOfEpisodes'];

    public function seasons()
    {
        return $this->belongsTo(Seasons::class);
    }
}
