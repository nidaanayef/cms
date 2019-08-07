<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        'name', 'deleted',
    ];

    public function realestates(){
        return $this->hasMany("App\Models\Realestate",'types_id','id');
    }
}
