<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name', 'deleted',
    ];

    public function realestates(){
        return $this->hasMany("App\Models\Realestate",'cities_id','id');
    }
}
