@extends('layouts.app')

@section('title',"post $post->id")

@section('content')
    <div class="container d-flex flex-column align-items-center gap-3">
        <h1>{{$post->title}}</h1>
        <img class="rounded-top" id="imagePost" src="/images/{{$post->image}}" alt="{{$post->title}}">
        <p>{{$post->description}}</p>
        <a href="/" class="btn btn-primary">Back</a>
    </div>
@endsection
