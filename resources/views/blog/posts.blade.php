@extends('layouts.app')

@section('title','Blog')

@section('content')
@foreach($posts as $post)
<div class="card  m-5 p-5">
    <a href="/blog/{{$post->id}}/edit"><h1>{{$post->titulo}}</h1></a>
    <p>{{$post->texto}}</p>
</div>
@endforeach
@endsection