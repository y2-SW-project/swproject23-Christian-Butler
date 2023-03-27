@extends('layouts.app')

@section('content')
<div class="container-fluid bg-primary text-light py-2 ">
    <div class="container-xl">
        <div class="row justify-md-content-center d-flex py-5 text-light">
            <div class="col-md-6 my-5 py-4">
                <h1 class="fw-bold text-capitlize px-5 lh1 text-light">All Your Favorite Events in One Place</h1>
            </div>
            <div class="col-md-6">
                <img src="storage/images/Frame.svg" class="img-fluid" alt="woman using a dj machine" />
            </div>
        </div>
    </div>  
</div>
<div class="container-xxl py-2">
  <a href="{{ route('events.create') }}" class="btn-link btn-lg mb-2 text-decoration-none"><h4>Add a Event<h4></a>
  
  
  
  <h4>Music Events</h4>
  <div class="my-3 row justify-content-md-center px-2">
      @foreach ($events->slice(0,3) as $event)
      <div class="col-md-4 py-2 my-3">
        <div class="card">
          <img
            src="storage/images/Dermot Kennedy.png"
            class="card-img-top img-fluid"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">{{$event->artist->first_name}}</h5>
            <p class="card-text">
              {{$event->date}} -> {{$event->start_time}}
            </p>
          </div>
          <div class="align-items-end py-2 ps-2">
           {{-- <a href="{{ route('product.blade.php') }}" class="btn btn-primary">Buy Tickets</a> --}}
           <a href="{{ route('events.show', $event) }}" class="btn-link btn-lg my-3 py-2 text-decoration-none bg-primary"><h5>Buy Tickets<h4></a>
           <a href="{{ route('events.edit', $event) }}" class="btn-link btn-lg my-3 py-2 text-decoration-none"><h5>Edit an Event<h4></a>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <div class="my-3 row justify-content-md-center px-2">
      @foreach ($events->slice(0,3) as $event)
      <div class="col-md-4 py-2 my-3">
        <div class="card">
          <img
            src="storage/images/Dermot Kennedy.png"
            class="card-img-top img-fluid"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">{{$event->artist->first_name}}
            </h5>
            <p class="card-text">
              {{$event->date}} -> {{$event->start_time}}
            </p>
          </div>
          <div class="align-items-end py-2 ps-2">
           <a class="btn btn-primary" href='Buy Tickets'>{{__('Buy Tickets')}}</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>


  <div class="container-fluid text-light color-contrast-light bg-primary py-2">
    <div class="container-lg ">
      <div class="row justify-content-md-center ">
        <div class="col-md-7 text-center ">
          <h6 class="text-capitalize fw-bold py-2">
          Testimony
          </h6>
          <img src="storage/images/adele-profile-pic.jpeg" alt="Picture of adele" class="img-fluid rounded-circle py-2">
          <p class="text-md-center fs-2 fw-semibold py-5 display-5">
            "Innovative solutions, ease of use and straightforward
            ticketing and event mangement. I recommend it highly"
          </p>
          <p class="fw-semibold text-uppercase text-light py-5">
            Adele /
            <span class="fw-light">Grammy Award Winning Singer Songwriter</span>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="container-xxl py-2">
    <h4 class="my-2">Sport Events</h4>
    <div class="my-3 row justify-content-md-center">
      @foreach($events->slice(0,3) as $event)
      <div class="col-md-4 py-2 my-3">
        <div class="card">
          <img
            src="storage/images/hurling (1).png"
            class="card-img-top img-fluid"
            alt="..."
          />
          <div class="card-body">
            @foreach ($event->event_types as $event_type)
            <h4 class="card-title">{{$event_type->event_name}}</h4>
            @endforeach
            {{-- <h4 class="card-title">{{$event->event_types->event_name}}</h4> --}}
            @foreach ($event->event_types as $event_type)
            <p class="card-text">
              {{$event_type->location}}
            </p>
            @endforeach
          </div>
          <div class="align-items-end py-2 ps-2">
            <a href="product.html" class="btn btn-primary" role="button">Buy Tickets</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 py-2 my-3">
        <div class="card">
          <img
            src="storage/images/hurling (1).png"
            class="card-img-top img-fluid"
            alt="..."
          />
          <div class="card-body">
            @foreach ($event->event_types as $event_type)
            <h4 class="card-title">{{$event_type->event_name}}</h4>
            @endforeach
            {{-- <h4 class="card-title">{{$event->event_types->event_name}}</h4> --}}
            @foreach ($event->event_types as $event_type)
            <p class="card-text">
              {{$event_type->location}}
            </p>
            @endforeach
          </div>
          <div class="align-items-end py-2 ps-2">
            <a href="product.html" class="btn btn-primary" role="button">Buy Tickets</a>
          </div>
          
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <div class="container-fluid py-2 border-1 border-top bg-primary">
    <div class="container-lg my-5">
          <div class="row d-flex justify-content-center">
            <div class="col-auto">
              <p class="pt-2 text-light"><strong>Sign up for our newsletter</strong></p>
            </div>
            <div class="col-md-5 col-12">
              <form class="d-flex ms-auto" role="search">
                <input class="form-control me-2" type="search" placeholder="Email Address" aria-label="Search">
                <button class="btn btn-outline-secondary" type="submit">Subscribe</button>
              </form>
          </div>
        </div>
      </div>
      <div class="row text-center justify-content-md-center">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-light">
          <h5 class="text-capitalize">Company</h5>
  
          <ul class="list-unstyled mb-0 text-light">
            <li class="py-2">
              <a href="#!" class="text-light text-decoration-none">About us</a>
            </li>
            <li class="py-2">
              <a href="#!" class="text-light text-decoration-none">Terms and Conditions</a>
            </li>
            <li class="py-2">
              <a href="#!" class="text-light text-decoration-none">Careers</a>
            </li>
            <li class="py-2">
              <a href="#!" class="text-light text-decoration-none">Contact Us</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-light">
          <h5 class="text-capitalize">Help</h5>
  
          <ul class="list-unstyled mb-0 text-light">
            <li class="py-2">
              <a href="#!" class="text-light text-decoration-none">FAQ</a>
            </li>
            <li class="py-2">
              <a href="#!" class="text-light text-decoration-none">Your Profile</a>
            </li>
            <li class="py-2">
              <a href="#!" class="text-light text-decoration-none">Refunds</a>
            </li>
            <li class="py-2">
              <a href="#!" class="text-light text-decoration-none">Ticket Help</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-light">
          <h5 class="text-capitalize">Partner With Us</h5>
  
          <ul class="list-unstyled  mb-0 text-light">
            <li class="py-2">
              <a href="#!" class="text-light  text-decoration-none ">Ticket your Events</a>
            </li>
            <li class="py-2">
              <a href="#!" class="text-light text-decoration-none">Affiliates</a>
            </li>
            <li class="py-2">
              <a href="#!" class="text-light text-decoration-none">Corporate Events</a>
            </li>
            <li class="py-2">
              <a href="#!" class="text-light text-decoration-none ">Gift Cards</a>
            </li>
          </ul>

        </div>
@endsection
