@extends('blog.layout')

@section('title','Mostar Post')

@section('content')
<h2>
    {{$blog->titulo}}
</h2>
<p>
    {{$blog->texto}}
</p>

@endsection