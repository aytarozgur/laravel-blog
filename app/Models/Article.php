<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Article extends Model
{
    function getCategory(){
      return $this->hasOne('App\Models\Category','id','category_id');
    }
}
