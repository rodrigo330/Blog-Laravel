<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['titulo','texto','owner_id'];
    
    public function autor() {
        return $this->belongsTo(User::class,'owner_id','id');
    }
    
    public function tags() {
        return $this->belongsToMany(tag::class,'post_tag','post_id','tag_id');
    }
    
    public function addTag($tagid) {
        $p = Post::find($this->id);
        $p->tags()->attach($tagid);
    }
}
