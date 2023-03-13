@extends('layouts.app')

@section('content')
<div class="container-fluid bg-primary text-light py-3 ">
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
    <h4>Music Events</h4>
    <div class="my-3 row justify-content-md-center px-2">
      <div class="col-md-4 py-2 my-3">
        <div class="card">
          <img
            src="storage/images/Dermot Kennedy.png"
            class="card-img-top img-fluid"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">Dermot Kennedy</h5>
            <p class="card-text">
              3Arena <span class="text-dark">July 16 12:30</span>
            </p>
          </div>
          <div class="align-items-end py-2 ps-2">
            <a href="product.html" class="btn btn-primary" role="button">Buy Tickets</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 py-2 my-3">
        <div class="card">
          <img
            src="storage/images/Adele.png"
            class="card-img-top img-fluid"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">Adele</h5>
            <p class="card-text">
              Croke Park <span class="text-dark"> April 16 18:30</span>
            </p>
          </div>
          <div class="align-items-end py-2 ps-2">
            <a href="product.html" class="btn btn-primary" role="button">Buy Tickets</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 py-2 my-3">
        <div class="card">
          <img
            src="storage/images/Kings of Leon.png"
            class="card-img-top img-fluid"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">Kings of Leon</h5>
            <p class="card-text">
              Electric Picnic <span class="text-dark">September 9 19:00</span>
            </p>
          </div>
          <div class="align-items-end py-2 ps-2">
            <a href="product.html" class="btn btn-primary" role="button">Buy Tickets</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-xxl py-2">
    <h4>Rugby Events</h4>
    <div class="my-3 row justify-content-md-center px-2">
      <div class="col-md-4 py-2 my-3">
        <div class="card">
          <img
            src="storage/images/Rugby-2.png"
            class="card-img-top img-fluid"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">Leinster vs Munster</h5>
            <p class="card-text">
              Thomond Park <span class="text-dark">July 16 16:30</span>
            </p>
          </div>
          <div class="align-items-end py-2 ps-2">
            <a href="product.html" class="btn btn-primary" role="button">Buy Tickets</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 py-2 my-3">
        <div class="card">
          <img
            src="storage/images/Rugby-2.png"
            class="card-img-top img-fluid"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">Ulster vs Munster</h5>
            <p class="card-text">
              Kingspan Stadium <span class="text-dark"> April 16 18:30</span>
            </p>
          </div>
          <div class="align-items-end py-2 ps-2">
            <a href="product.html" class="btn btn-primary" role="button">Buy Tickets</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 py-2 my-3">
        <div class="card">
          <img
            src="storage/images/Rugby-2.png"
            class="card-img-top img-fluid"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">Osprey vs Bath</h5>
            <p class="card-text">
              Premier <span class="text-dark">September 9 19:00</span>
            </p>
          </div>
          <div class="align-items-end py-2 ps-2">
            <a href="product.html" class="btn btn-primary" role="button">Buy Tickets</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid text-light color-contrast-light bg-primary-light py-2">
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
    <h4 class="my-3">Football Events</h4>
    <div class="my-3 row justify-content-md-center px-2">
      <div class="col-md-4 py-2 my-3">
        <div class="card">
          <img
            src="storage/images/premier league.png"
            class="card-img-top img-fluid"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">Manchester City vs Stoke City</h5>
            <p class="card-text">
              Ethiad Stadium <span class="text-dark">July 16 16:30</span>
            </p>
          </div>
          <div class="align-items-end py-2 ps-2">
            <a href="product.html" class="btn btn-primary" role="button">Buy Tickets</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 py-2 my-3">
        <div class="card">
          <img
            src="storage/images/premier league.png"
            class="card-img-top img-fluid"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">Chelsea vs Fulham FC</h5>
            <p class="card-text">
              Stamford Stadium<span class="text-dark"> April 16 18:30</span>
            </p>
          </div>
          <div class="align-items-end py-2 ps-2">
            <a href="product.html" class="btn btn-primary" role="button">Buy Tickets</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 py-2 my-3">
        <div class="card">
          <img
            src="storage/images/premier league.png"
            class="card-img-top img-fluid"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">Tottenham Spurs vs Leeds United</h5>
            <p class="card-text">
              Premier Stadium <span class="text-dark">September 9 19:00</span>
            </p>
          </div>
          <div class="align-items-end py-2 ps-2">
            <a href="product.html" class="btn btn-primary" role="button">Buy Tickets</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid text-light bg-primary-light py-2 my-2">
    <div class="container-lg d-flex py-2">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div>
            <h2 class="text-capitlize fw-semibold py-2">Share your favorite events with your friends </h2>
            <h5 class="">Find your favorite events, venues and artists all in the one place with ease and share them with the ones you love</h5>
          </div>
        </div>
        <div class="col-md-6 py-2 my-2">
          <img src="storage/images/person-learning-online.png" alt="person sitting at desk with a computer" class="img-fluid">
        </div>
        </div>
      </div>
    </div>

  <div class="container-xxl py-2">
    <h4 class="my-2">GAA Events</h4>
    <div class="my-3 row justify-content-md-center">
      <div class="col-md-4 py-2 my-3">
        <div class="card">
          <img
            src="storage/images/hurling (1).png"
            class="card-img-top img-fluid"
            alt="..."
          />
          <div class="card-body">
            <h4 class="card-title">Kerry vs Limerick</h4>
            <p class="card-text">
              This is a longer card with supporting text below as a natural
              lead-in to additional content. This content is a little bit
              longer.
            </p>
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
            <h4 class="card-title">Kerry vs Limerick</h4>
            <p class="card-text">
              This is a longer card with supporting text below as a natural
              lead-in to additional content. This content is a little bit
              longer.
            </p>
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
            <h4 class="card-title">Kerry vs Limerick</h4>
            <p class="card-text">
              This is a longer card with supporting text below as a natural
              lead-in to additional content. This content is a little bit
              longer.
            </p>
          </div>
          <div class="align-items-end py-2 ps-2">
            <a href="product.html" class="btn btn-primary" role="button">Buy Tickets</a>
          </div>
        </div>
      </div>
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
