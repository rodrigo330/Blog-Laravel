<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class blogController extends Controller
{
    public function index() {
        
        $posts = Post::all();
        return view('blog.index', compact('posts'));
    }
    
    public function create() {
        return view('blog.create');
    }
    
    public function store() {
        Post::create(request(['titulo','texto']));
        return redirect('blog');
    }
    
    public function Show(Post $blog) {
        return view('blog.show', compact('blog'));
    }
    
    public function edit(Post $blog) {
        return view('blog.edit',compact('blog'));
    }
    
    public function update(Post $blog) {
        $blog->update(request(['titulo','texto']));
        return redirect('/blog');
    }
    
    public function destroy(Post $blog) {
        $blog->delete();
        return redirect('/blog');
    }
}
