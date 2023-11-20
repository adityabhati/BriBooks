<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}">Bri-Books</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          @if ((!Session()->has('username') || !Session()->has('userid')))
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Register</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="{{route("createBook")}}">Add Book</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route("allBooks")}}">All Books</a>
          </li>
          @endif

      </div>
        @if (Session()->has('username'))
        <div>
            <a class="btn btn-danger" href="{{route('logout')}}">Logout</a>
        </div>
        @endif


    </div>
  </nav>
