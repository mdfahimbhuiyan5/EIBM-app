<nav class="navbar navbar-expand-lg bg-body-tertiary nav-style">
  <!-- <div class="container"> -->
    <!-- </div> -->
    
    <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="{{ url('img/favicon.png') }}" alt="" width="100" >
    </a>
    <!-- <a class="navbar-brand" href="#">{{config('app.name')}}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
      @auth

      @if(auth()->user()->profile && auth()->user()->profile->role == 'admin')
      <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('showMessages')}}">Messages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('logout')}}">Logout</a>
        </li>
    @else
        <div class="d-flex justify-content-between">
          <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('showFeed')}}">Content</a>
          </li>
          @if(auth()->user()->profile && auth()->user()->profile->role == 'student')
          <li class="nav-item">
            <a class="nav-link" href="{{route('onlyUpload')}}">Upload</a>
          </li>
          @endif
          <li class="nav-item">
            <a class="nav-link" href="{{route('reviews')}}">Reviews</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('assignment')}}">Assignment</a>
          </li>        
        </div>
        <div>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-user"></i>
            </a>
            <ul class="dropdown-menu user-info-nav" aria-labelledby="navbarDropdownMenuLink">
              <h6 class="user-name-nav">Hello, {{auth()->user()->name}}</h6>
              <li><a class="nav-link" href="{{route('logout')}}">Logout</a></li>
            </ul>
          </li>
        </div>
        @endif
      
      @else
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('login')}}">Login</a>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>