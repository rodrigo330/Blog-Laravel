<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    //
    public function posts() {
        return $this->belongsToMany(tag::class,'post_tag','tag_id','post_id');
    }
}
