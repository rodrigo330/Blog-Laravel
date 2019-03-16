@extends('layouts.app')

@section('title','Novo Post')

@section('content')


<div class="container-fluid">
    <form action="/blog" method="POST">
        @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Titulo do Post</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Coloque o Titulo" name="titulo" required>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Conteudo do Post</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="texto" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Postar no Blog</button>
    </form>
</div>
@endsection