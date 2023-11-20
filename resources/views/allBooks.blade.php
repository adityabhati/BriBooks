@extends('master')
@section('content')
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
<div class="container d-flex justify-content-center booksconatiner flex-wrap">
    @php
        $count = 1;
    @endphp
    @if (count($data)==0)
    <div class="container">
        <h1 class="m-5">No Books Found Please add book to view!</h1>
        <a class="btn btn-dark mx-5" href="{{route("createBook")}}">Add Book</a>
    </div>
    @else
    @foreach ($data as $item)
    <div class="card m-3 w-50  bookCards" >
        <div class="card-body d-flex justify-content-between">
            <div>
                <h3>{{$count}}: {{$item->title}}</h3>
            </div>
            <div>
                <a href="{{route("editBook",["id"=>$item->id])}}" class="btn btn-primary button">Edit</a>
                <a href="{{route("generatePDF",["id"=>$item->id])}}" class="btn btn-primary button">View</a>
            </div>

        </div>
      </div>
      @php
      $count++;
      @endphp
    @endforeach
    @endif

</div>

@endsection
