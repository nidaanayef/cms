<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $fillable = [
        'tag','photo_categories_id','file','published','deleted',
    ];

      //relationship between photo and article many to many
      public function realestates(){

        return $this->belongsToMany('App\Models\Realestate','realestates_photos', 'realestates_id', 'photos_id');

    }

     //relationship between photo and photocategory one to many
     public function photocategory(){

        return $this->belongsTo('App\Models\PhotoCategory','photo_categories_id');

    }
}
