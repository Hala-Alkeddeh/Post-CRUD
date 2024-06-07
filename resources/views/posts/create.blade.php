@extends('layouts.app')

@section('title',"Create Post")

@section('content')
    <form method="POST" action="{{route('posts.store')}}" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <h1>Create your post:</h1>
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea type="text" name="description" id="description" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image:</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <input class="btn btn-primary" type="submit" class="form-submit" value="Send" required>
    </form>
@endsection