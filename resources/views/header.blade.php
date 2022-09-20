<?php

use App\Http\Controllers\ProductController;
$total=0;
if (Session::has('user')) 
    {
 $total= ProductController::cart_item();
}
?>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <form class="d-flex" role="search" action="/search">
            <input class="form-control me-2" type="search" name='name' placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>

        </ul>
 
      </div>

   
    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item">
        <a class="nav-link" href="">cart({{$total}})</a> 
      </li>
      @if (Session::has('user'))        
      
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{Session::get('user')['name']}}
          
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/logout">Logout</a></li>
         
        </ul>
     </li>
      @else
      
      <li><a class="nav-link" href="/login">Login</a></li>
      
      @endif
     </ul>
    </div>
  </nav>

 
