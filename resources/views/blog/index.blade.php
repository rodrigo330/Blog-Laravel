@extends('layouts.app')

@section('title','Blog')

@section('content')
@foreach($posts as $post)
<div class="card container-fluid m-3">
    <div>
        <h1 style="display: inline-block">{{$post->titulo}}</h1>
        <small>Criado por: {{$post->autor['name']}}</small>
    </div>
    <p>{{$post->texto}}</p>
</div>
@endforeach
@endsection