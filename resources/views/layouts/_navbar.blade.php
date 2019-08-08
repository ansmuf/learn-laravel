<nav class="navbar navbar-expand-lg navbar-dark" data-navbar="fixed">
  <div class="container">

    <div class="navbar-left">
      <button class="navbar-toggler" type="button">&#9776;</button>
      <a class="navbar-brand" href="{{ url('/')}}">
        <img class="logo-dark" src="{{ asset('assets/logo/logo2.png')}}" alt="logo" width="200px">
      </a>
    </div>

    <section class="navbar-mobile">
      <nav class="nav nav-navbar ml-auto">
      
        @auth
        Hi {{ Auth::user()->name }}
        <a href="/logout" class="btn btn-sm btn-round btn-danger">Logout</a>
        @endauth
        @guest
        <a class="nav-link active" href="#">Service</a>
        <a class="nav-link" href="#">Case Study</a>
        </nav>
        <div>
        <a class="btn btn-sm btn-round btn-primary ml-lg-4 mr-2" href="{{ url('register')}}">Register</a>
        <a class="btn btn-sm btn-round btn-outline-primary" href="{{ url('login')}}">Sign in</a>
        </div>
        @endguest
    </section>

  </div>
</nav>