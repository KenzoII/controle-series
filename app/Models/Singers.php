<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Singers extends Model
{
    use HasFactory;
    
    protected $fillable = ['name'];

    public function albums(){
        return $this->hasMany(Albums::class);
    }

    public function gender(){
        return $this->hasMany(Gender::class);
    }

    protected static function booted(){
        self::addGlobalScope('ordered', function(Builder $builder){
            $builder->orderBy('name','asc');
        });
    }
}
