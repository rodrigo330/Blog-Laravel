@extends('layouts.app')

@section('title','Mostar Post')

@section('content')

<div class="card container-fluid m-5 p-5">
    <div>
        <h1 style="display: inline-block">{{$blog->titulo}}</h1>
        <small>Criado por: {{$blog->autor['name']}}</small>
    </div>
    <div style="display: inline-block">
        @foreach($blog->tags as $tag)
            <small>{{$tag['texto']}}</small>
        @endforeach
    </div>
    <p>{{$blog->texto}}</p>
    
    <form method="POST" action="/blog/{{$blog->id}}/tag">
        @csrf
        @method('Post')
        <select name="tag">
        @foreach($alltags as $tag)
            <!--<a href="/blog/{{$blog->id}}/tag" >{{$tag['texto']}}</a> -->
            <option value="{{$tag->id}}">{{$tag['texto']}}</option>
        @endforeach
        </select>
        
        <button type="submit" class="btn btn-primary">Adicionar Tag</button>
    </form>
</div>

@endsection