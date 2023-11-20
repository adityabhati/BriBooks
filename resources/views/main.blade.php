@extends('master')
@section('content')
<div class="main">
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
    <div class="container ">
        <div class="d-flex flex-column justify-content-center align-items-center vh-100 text-white">
            @if (Session()->has('username'))
            <h1 id="mainh1" >Hi {{Session()->get("username")}}</h1>
            @endif
            <h1 id="mainh1" >Welcome to Bri-books</h1>
            @if (Session()->has('username'))
            <p id="mainp" class=" mt-3">Transform Your Experience: Dive into a World of Personalized PDF Books.Please add books to publish to start your book publishing journey.</p>
            @else
            <p id="mainp" class=" mt-3">Transform Your Experience: Dive into a World of Personalized PDF Books. Please login or Register to start your book publishing journey.</p>
            @endif

            @if (Session()->has('username'))
            <a class="btn btn-dark p-2 fs-4" href="{{route("createBook")}}">Publish your book</a>
            <a class="btn btn-dark p-2 fs-4 mt-3" href="{{route("allBooks")}}">See All Books</a>
            @else
            <a class="btn btn-dark p-2 fs-4" href="{{route("register")}}">Start Your Journey</a>
            @endif

            {{-- <a href="{{route('generatePDF')}}">pdf</a> --}}

        </div>
    </div>
</div>
@endsection
