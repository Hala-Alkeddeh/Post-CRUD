@extends('layouts.app')

@section('title',"Edit $post->id")

@section('content')
<div class="container">
    <form method="POST" action="{{route('posts.update',$post->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h1>Edit your post:</h1>
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" name="title" id="title" class="form-control" value="{{$post->title}}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea type="text" name="description" id="description" class="form-control" required>{{$post->description}}</textarea>
        </div>
        <div class="mb-3">
            <img class="rounded-top" id="imageEdit" src="/images/{{$post->image}}" alt="{{$post->title}}">
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <input class="btn btn-primary" type="submit" class="form-submit" value="Send" required>
    </form>
</div>
@endsection