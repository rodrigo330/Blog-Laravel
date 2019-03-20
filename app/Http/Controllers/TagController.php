<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\tag;
use App\Post;

class TagController extends Controller
{
    public function create() {
        return view('tag.create');
    }
    
    public function store() {
        $request = request();
        $validatedData = $request->validate([
        'texto' => 'required|min:1',
        ]);
        tag::create($validatedData);
        
        
        return redirect('/blog');
    }
    
    public function addTag(Post $blog) {
        $blog->addTag($_POST['tag']);
        return redirect('/blog/'.$blog->id);
    }
}
