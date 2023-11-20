@extends('master')
@section('content')
<div class="container mt-5 w-50">

    <h2>Update Book</h2>
    <form action="{{route('updateBook',['id'=>$data->id])}}" method="POST">
        @csrf
        <div class="form-group mt-5">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$data->title}}">
            <span class="text-danger">@error('title')
                {{$message}}
            @enderror</span>
        </div>
        <div class="form-group mt-5">
            <label for="author">Author</label>
            <input type="text" class="form-control" id="author" name="author" value="{{$data->author}}">
            <span class="text-danger">@error('author')
                {{$message}}
            @enderror</span>
        </div>
        <div class="form-group mt-5">
            <label for="content">shortdescription</label>
            <textarea class="form-control" id="content" name="shortdescription" rows="5">{{$data->shortdescription}}</textarea>
            <span class="text-danger">@error('shortdescription')
                {{$message}}
            @enderror</span>
        </div>
        <div class="form-group mt-5">
            <label for="content">Book Content</label>
            <textarea class="form-control" id="content" name="content" rows="15">{{$data->content}}</textarea>
            <span class="text-danger">@error('content')
                {{$message}}
            @enderror</span>
        </div>
        <button type="submit" class="btn btn-primary mt-5">Update Book</button>
    </form>
</div>

@endsection
