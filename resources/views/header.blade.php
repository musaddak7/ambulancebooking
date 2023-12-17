<?php
 use App\Http\Controllers\HospitalController;
 $total=0;
 if(Session::has('user')){
  $total=HospitalController::hbookinglist();
 }

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <a class="navbar-brand" href="/welcome">A-booking System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     
      <li class="nav-item">
        <a class="nav-link" href="cab_available">Ambulances</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="hospitallist">Hospital</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="about">About Us<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contact">Contact<span class="sr-only">(current)</span></a>
      </li>
      <form class="form-inline my-2 my-lg-0" action="/searchcat" type='get'>
      <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search Ambulance" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
   
    </ul>
  </div>
  <div class="" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
          <a class="nav-link" href="userlogin">Ambulancebooking<span class="">(1)</span></a>
      </li>
        <li class="nav-item active">
          <a class="nav-link" href="userlogin">Hospitalbooking<span class="">({{$total}})</span></a>
      </li>

      @if(Session::has('user'))
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="">{{Session::get('user')['username']}}</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/logout">Logout</a></li>
        </ul>
      </li>
      @else
      <li class="nav-item active"><a class="nav-link" href="/userlogin">Login</a></li>

      @endif
</ul>
</div>
</nav>