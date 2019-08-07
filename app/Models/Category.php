<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'deleted',
    ];

    public function realestates(){
        return $this->hasMany("App\Models\Realestate",'categories_id','id');
    }
}
