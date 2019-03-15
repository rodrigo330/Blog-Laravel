@extends('blog.layout')

@section('title','Editar Post')

@section('content')
<form action="/blog/{{ $blog->id }}" method="POST">
    @method('PATCH')
    @csrf
    <h2>
        Criar um novo Post
    </h2>
    
    <div>
        <input type="text" name="titulo" placeholder="{{ $blog->titulo }}" value="{{ $blog->titulo }}">
    </div>
    
    <div>
        <textarea name="texto">{{ $blog->texto }}</textarea>
        
    </div>
    
    <div>
        <button type="submit">Postar no Blog</button>
    </div>
    
</form>

<form action="/blog/{{ $blog->id }}" method="POST">
    @method('DELETE')
    @csrf
    
    <div>
        <button type="submit">Deletar Post</button>
    </div>
</form>
@endsection