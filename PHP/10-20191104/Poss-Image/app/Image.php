<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function Post(){
        return $this->belongsto('App\Post');
    }
}
