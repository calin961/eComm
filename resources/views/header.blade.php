<?php
  use App\Http\Controllers\ProductController;
  $total=ProductController::cartItem();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Brand</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        
        </li>
        <li class="nav-item">
          <a class="nav-link href="#">Orders</a>
        </li>

      </ul>

      <form action="/search" class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" name="query" class="form-control search-box" placeholder="Search" aria-label="Search">
        </div>
        <button class="btn btn-default" type="submit">Search</button>
      </form>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">cart({{$total}})</a></li>
      </ul>

    </div>
  </div>
</nav>