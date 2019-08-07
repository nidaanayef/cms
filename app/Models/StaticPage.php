<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StaticPage extends Model
{
    protected $table = "static_pages";
    //
    protected $fillable = [
        'title','details','image','deleted','active'
    ];
}