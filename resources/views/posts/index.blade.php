@extends('layouts.app')

@section('title',"Posts")

@section('content')
<div class="container">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-responsive ">
            <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>image</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td><img src="/images/{{$post->image}}" class="img-fluid rounded-top" style="width: 50px; height:50px ;object-fit:cover"></td>
                    <td>
                        <a href="{{route('posts.show',$post->id)}}" class="btn btn-primary">Show</a>
                        <a href="{{route('posts.edit',$post->id)}}" class="btn btn-success">Edit</a>
                        <form action="{{route('posts.destroy',$post->id)}}" method="POST" class="d-inline">
                            @csrf
                            @method("DELETE")
                            <input type="submit"class="btn btn-danger" value="Delete">
                        </form>
                    </td>
                </tr>
                @empty
                    <tr class="text-center">
                        <td colspan="4">
                            There is no data to show
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection