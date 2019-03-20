@extends('layouts.app')

@section('title','Blog')

@section('content')
@foreach($posts as $post)
<div class="card  m-5 p-5">
    <a href="/blog/{{$post->id}}/edit"><h1>{{$post->titulo}}</h1></a>
    <div style="display: inline-block">
        @foreach($post->tags as $tag)
            <small>{{$tag['texto']}}</small>
        @endforeach
    </div>
    <p>{{$post->texto}}</p>
</div>
@endforeach
@endsection