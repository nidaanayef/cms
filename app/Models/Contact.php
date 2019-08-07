<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'realestate_contacts';
    protected $fillable = [
        'name', 'email','mobile','deleted', 'realestate_id'
    ];

    public function realestates(){
        return $this->hasMany("App\Models\Realestate",'realestate_id','id');
    }
}
