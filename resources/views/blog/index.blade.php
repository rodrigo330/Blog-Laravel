@extends('blog.layout')

@section('title','Blog')

@section('content')
@foreach($posts as $post)
<div style="margin: 5%">
    <h1>{{$post->titulo}}</h1>
    <p>{{$post->texto}}</p>
</div>
@endforeach
@endsection