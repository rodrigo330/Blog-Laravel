@extends('blog.layout')

@section('title','Novo Post')

@section('content')
<form action="/blog" method="POST">
    @csrf
    <h2>
        Criar um novo Post
    </h2>
    
    <div>
        <input type="text" name="titulo" placeholder="Titulo do Post" required>
    </div>
    
    <div>
        <textarea name="texto" placeholder="Conteudo do Post" required></textarea>
        
    </div>
    
    <div>
        <button type="submit">Postar no Blog</button>
    </div>
    
</form>
@endsection