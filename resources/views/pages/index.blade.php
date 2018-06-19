@extends('layouts.app')
@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="first-slide" src="/storage/Images/DefaultImages/slideOne.jpg" alt="First picture">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Welcome to Carshow</h1>
            <p>A place for car enthusiasts to share their beautiful rides.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
          <img class="third-slide" src="/storage/Images/DefaultImages/slideTwo.jpg" alt="Third picture">
          <div class="container">
            <div class="carousel-caption text-right">
              <h1>Endless ammount of cars to glare upon</h1>
              <p>Thanks to our community, we have a large library of photos to take a look at.</p>
              <p><a class="btn btn-lg btn-primary" href="/gallery" role="button">Browse gallery</a></p>
            </div>
          </div>
      </div>
      <div class="carousel-item">
        <img class="second-slide" src="/storage/Images/DefaultImages/slideThree.jpg" alt="Second picture">
        <div class="container">
          <div class="carousel-caption">
            <h1>Who are we?</h1>
            <p>Check out <i>About Us</i> page to learn more.</p>
            <p><a class="btn btn-lg btn-primary" href="/about" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
@endsection