<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['titulo','texto','owner_id'];
    
    public function autor() {
        return $this->belongsTo(User::class,'owner_id','id');
    }
}
