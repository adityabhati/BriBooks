@extends('master')
@section('content')
<section>
    <div class="container py-5 h-80">
      <div class="row d-flex align-items-center justify-content-center h-80 w-60">
        <div class="col-md-8 col-lg-7 col-xl-6">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
            class="img-fluid" alt="Phone image">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            @if(Session::has("fail"))
            <div class="alert alert-danger alert-dismissible fade show">{{Session::get("fail")}}</div>
            @endif

            <div class="mb-5">
                <h3>Log into your account</h3>
            </div>
          <form action="userLogin" method="POST">
            @csrf
            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example13">Email address</label>
              <input type="email" id="form1Example13" class="form-control form-control-lg @error("username") is-invalid @enderror" name="email" value="{{old("email")}}"/>
              <span class="text-danger">@error('email')
                  {{$message}}
              @enderror</span>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example23">Password</label>
              <input type="password" id="form1Example23" class="form-control form-control-lg @error("username") is-invalid @enderror" name="password"/>
              <span class="text-danger">@error('password')
                {{$message}}
            @enderror</span>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
            <div class="d-flex justify-content-around align-items-center mb-4">
              <div class="text-center">
                <p>Not a member? <a href="{{route('register')}}">Register</a></p>
              </div>


            <!-- Submit button -->

          </form>
        </div>
      </div>
    </div>
  </section>
@endsection
