<?php
  use App\Http\Controllers\ProductController;
  $total=0;
  if(Session::has('user')){
    $total=ProductController::cartItem();
  }
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="navbar-brand" href="/">E-Comm</a>
        </li>

        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="/myorders">Orders</a></li>
        </ul>

      </ul>

      <form action="/search" class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" name="query" class="form-control search-box" placeholder="Search" aria-label="Search">
        </div>
        <button class="btn btn-default" type="submit">Search</button>
      </form>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="/cartlist">cart({{$total}})</a></li>
          @if(Session::has('user'))
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
            <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/logout">Logout</a></li>
              </ul>
          </li>
          @else
          <li><a href="/login">Login</a></li>
          <li><a href="/register">Register</a></li>
          @endif
      </ul>

    </div>
  </div>
</nav>