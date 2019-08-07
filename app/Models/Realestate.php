<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Realestate extends Model
{
    //
    protected $fillable = [
        'title','paths','beds','date', 'living_room', 'kitchens', 'area','address','price','details','users_id', 'cities_id','categories_id',
        'types_id','photos_id','published','in_home','deleted',
    ];
    
    public function city(){

        return $this->belongsTo('App\Models\City','cities_id');

    }

    public function user(){

        return $this->belongsTo('App\User','users_id');

    }
 
    public function category(){

        return $this->belongsTo('App\Models\Category','categories_id');

    }
  
    public function type(){

        return $this->belongsTo('App\Models\Type','types_id');

    }

    
    public function photos(){

        return $this->belongsTo('App\Models\Photo','photos_id','id');

    }
    public function contacts(){

        return $this->belongsTo('App\Models\Contact','realestate_id','id');

    }
}