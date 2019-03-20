@extends('layouts.app')

@section('title','Novo Post')

@section('content')


<div class="card  m-5 p-5">
    <form action="/tag" method="POST">
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Nome da Tag</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Coloque o Titulo" name="texto" required>
      </div>
      <button type="submit" class="btn btn-primary">Criar Tag</button>
    </form>
</div>
@endsection