<?php $__env->startSection('content'); ?>

<div class="bg-image shadow-2-strong py-2 my-5 container-fluid ">
    <div class=" row mask min-vh-200 my-2 img-fluid" style="')">
      <img src="./storage/public/images/sondor-tour1.jpeg">
      <div class=" min-vh-100 d-flex align-items-center justify-content-center text-center h-100 py-5">
        <div class="text-light">
          <h1 class="mb-3">Dermot Kennedy</h1>
          <h5 class="mb-4">Sondor Tour</h5>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <div class="container-fluid"> 
    <div class="container-x py-3 justify-content-md-start align-items-start">
      <div class="row my-3">
        <div class="container justify-content-md-start">
          <div class="col-md-4">
            <h5>St Annes Park<h5>
          </div>
        </div>
      </div>
      <div class="container-x">
        <div class="col-md-6 align-items-start">
          <div>
            <p>Shows near <u>St Annes Park</u> ,Dublin</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row my-3 justify-content-md-start">
      <div class="container d-inline-flex flex-row">
        <div class="col-md-4 ">
          <div class="">
              <p class="fw-bold"><?php echo e($event->date); ?></p>
              <p class="text-dark"><?php echo e($event->time); ?></p>
          </div>
        </div>
        <div class="col-md-4 ">
          <div class="align-items-start ">
            <p class="fw-bold"><?php echo e($event->event_types[0]->event_name); ?></p>
            <p class="text-dark"><?php echo e($event->event_types[0]->location); ?></p>
          </div>
        </div>
        <div class="col-md-4 py-2 ">
          <div class="align-items-start flex-row ">
            <a href="<?php echo e(route('admin.events.index', $event)); ?>" class="btn btn-primary my-2" role="button">Buy Tickets</a>
            <form action="<?php echo e(route('admin.events.destroy', $event)); ?>" method="post">
              <?php echo method_field('delete'); ?>
              <?php echo csrf_field(); ?>
              <button type="submit" class="btn btn-danger ml-4" onclick="return confirm('Are you sure you want to delete?')">Delete Event </button>
          </div>
        </div>
        <div class="col-md-4 ">
          <div class=" ">
            
          </div>
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

        <ul class="list-unstyled  texmb-0 text-light">
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

      <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/events/show.blade.php ENDPATH**/ ?>