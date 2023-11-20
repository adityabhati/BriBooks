@extends('master')
@section('content')
<div class="container mt-5 w-50">
    @if (Session::has("success"))
                    <div class="alert alert-success alert-dismissible fade show">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    @if (Session::has("fail"))
                    <div class="alert alert-danger alert-dismissible fade show">
                        {{ Session::get('fail') }}
                    </div>
                    @endif
    <h2>Add a New Book</h2>
    <form action="saveBook" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mt-3">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
            <span class="text-danger">@error('title')
                {{$message}}
            @enderror</span>
        </div>
        <div class="form-group mt-3">
            <label for="author">Author</label>
            <input type="text" class="form-control" id="author" name="author" value="{{old("author")}}">
            <span class="text-danger">@error('author')
                {{$message}}
            @enderror</span>
        </div>
        <div class="form-group mt-3">
            <label for="content">Write a short description about your book.</label>
            <textarea class="form-control" id="content" name="shortdescription" rows="5">{{old('shortdescription')}}</textarea>
            <span class="text-danger">@error('shortdescription')
                {{$message}}
            @enderror</span>
        </div>
        <div class="form-group mt-3">
            <label for="content">Write Your story</label>
            <textarea class="form-control" id="content" name="content" rows="15">{{old('content')}}</textarea>
            <span class="text-danger">@error('content')
                {{$message}}
            @enderror</span>
        </div>
        <button type="submit" class="btn btn-primary mt-5">Add Book</button>
    </form>
</div>
@endsection
