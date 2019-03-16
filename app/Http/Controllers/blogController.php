<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class blogController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except(['index','show']);
    }
    
    public function index() {
        
        $posts = Post::all()->reverse();
        //dd($posts[0]->autor->name);
        return view('blog.index', compact('posts'));
    }
    
    public function create() {
        return view('blog.create');
    }
    
    public function store() {
        $request = request();
        $validatedData = $request->validate([
        'titulo' => 'required|min:3',
        'texto' => 'required|min:3',
        ]);
        
        $validatedData['owner_id'] = auth()->id();
        Post::create($validatedData);
        
        
        return redirect('/blog');
    }
    
    public function Show(Post $blog) {
        return view('blog.show', compact('blog'));
    }
    
    public function edit(Post $blog) {
        abort_unless(\Gate::allows('view',$blog), 403);
        return view('blog.edit',compact('blog'));
    }
    
    public function update(Post $blog) {
        abort_unless(\Gate::allows('view',$blog), 403);
        $blog->update(request(['titulo','texto']));
        return redirect('/blog');
    }
    
    public function destroy(Post $blog) {
        abort_unless(\Gate::allows('view',$blog), 403);
        $blog->delete();
        return redirect('/blog');
    }
    
    public function posts() {
        
        $posts = Post::where('owner_id', auth()->id())->get();
        return view('blog.posts', compact('posts'));
    }
}
