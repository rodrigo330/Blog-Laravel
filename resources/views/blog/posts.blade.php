@extends('layouts.app')

@section('title','Blog')

@section('content')
@foreach($posts as $post)
<div class="card container-fluid m-3">
    <h1>{{$post->titulo}}</h1>
    <p>{{$post->texto}}</p>
</div>
@endforeach
@endsection