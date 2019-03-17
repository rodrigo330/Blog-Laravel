@extends('layouts.app')

@section('title','Blog')

@section('content')
@foreach($posts as $post)
<div class="card container-fluid m-3">
    <div>
        <a href="/blog/{{$post->id}}" > <h1 style="display: inline-block">{{$post->titulo}}</h1> </a>
        <small>Criado por: {{$post->autor['name']}}</small>
    </div>
    <div style="display: inline-block">
        @foreach($post->tags as $tag)
            <small>{{$tag['texto']}}</small>
        @endforeach
    </div>
    <p>{{$post->texto}}</p>
</div>
@endforeach
@endsection