@extends('layouts.app')

@section('title','Mostar Post')

@section('content')

<div class="card container-fluid m-3">
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
</div>

@endsection