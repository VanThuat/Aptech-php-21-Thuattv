<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function Image(){
        return $this->hasOne('App\Image');
    }
}
