@extends('layouts.app')

@section('title','Editar Post')

@section('content')
<div class="container-fluid">
    <form action="/blog/{{ $blog->id }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Titulo do Post</label>
            <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $blog->titulo }}" name="titulo" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Conteudo do Post</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="texto" required>{{ $blog->texto }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Editar Post</button>

    </form>

    <form action="/blog/{{ $blog->id }}" method="POST">
        @method('DELETE')
        @csrf

        <button type="button" class="btn btn-secondary btn-lg btn-block">Deletar Post</button>
    </form>
</div>
@endsection