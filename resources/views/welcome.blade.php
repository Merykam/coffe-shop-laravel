@extends('layouts.app')

@section('content')
<div class="">
    <div class="backgroud">
        <h2 class="container">Welcome<br>to our<br>coffe shop !</h2>

    </div>
    <div class="menu container" id="menu">
        <h1 class="text-center py-4">Coffe menu</h1>

        <div class="row">

        <div class="card col" style="width: 18rem;">
            <div class="imgg">

            </div>
            <div class="card-body">
                <h3 class="fw-bold">Pizza</h3>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore ipsa corrupti perspiciatis maiores nisi</p>
                <h3 class="fw-bold">7$</h3>
            </div>
        </div>

        
        <div class="card col" style="width: 18rem;">
            <div class="imgg">

            </div>
            <div class="card-body">
            <h3 class="fw-bold">Pizza</h3>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore ipsa corrupti perspiciatis maiores nisi</p>
                <h3 class="fw-bold">7$</h3>
            </div>
        </div>

        
        <div class="card col" style="width: 18rem;">
            <div class="imgg">

            </div>
            <div class="card-body">
                <h3 class="fw-bold">Pizza</h3>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore ipsa corrupti perspiciatis maiores nisi</p>
                <h3 class="fw-bold">7$</h3>
            </div>
        </div>

        </div>

        

      

    </div>
    <!-- Remove the container if you want to extend the Footer to full width. -->
<div class="">
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: black">
    <!-- Grid container -->
    <div class="container">
      <!-- Section: Links -->
      <section class="mt-5">
        <!-- Grid row-->
        <div class="row text-center d-flex justify-content-center pt-5">
          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" class="text-white">About us</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#menu" class="text-white">Our menu</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" class="text-white">Awards</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" class="text-white">Help</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" class="text-white">Contact</a>
            </h6>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="my-5" />

      <!-- Section: Text -->
      <section class="mb-5">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <p>
            <h1><span class="coffe">Coffe</span><span class="shop">Shop</span></h1>
              Our restaurant offre you diverses plats. Sunt
              distinctio earum repellat quaerat voluptatibus placeat nam,
              commodi optio pariatur est quia magnam eum harum corrupti
              dicta, aliquam sequi voluptate quas.
            </p>
          </div>
        </div>
      </section>
      <!-- Section: Text -->

      <!-- Section: Social -->
      <section class="text-center mb-5">
        <a href="" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-github"></i>
        </a>
      </section>
      <!-- Section: Social -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2023 Copyright
      
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</div>
<!-- End of .container -->
   
</div>
@endsection
