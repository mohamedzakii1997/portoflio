<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $timestamps = false;

    public function category(){
        return $this->hasOne('App\Category','id','category_id');
    }
}
