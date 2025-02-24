<x-app-layout> 
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="background-color: black"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" style="background-color: black"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" style="background-color: black"></button>
    </div>


  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('storage/weyoung_logo.jpg') }}" class="d-block w-100 img-fluid" alt="..." style="height: 80vh; object-fit: cover;">
      <div class="carousel-caption d-none d-md-block hover-shadow transition-all" style="transition: all .3s ease-in-out">
      <input type="button" value="SHOP NOW" class="btn btn-primary">
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('storage/weyoung_cover.jpg') }}" class="d-block w-100 img-fluid" alt="..." style="height: 80vh; object-fit: cover;">
      <div class="carousel-caption d-none d-md-block hover-shadow transition-all" style="transition: all .3s ease-in-out">
      <input type="button" value="SHOP NOW" class="btn btn-primary">
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('storage/weyoungcover.jpg') }}" class="d-block w-100 img-fluid" alt="..." style="height: 80vh; object-fit: cover;">
      <div class="carousel-caption d-none d-md-block hover-shadow transition-all" style="transition: all .3s ease-in-out">
      <input type="button" value="SHOP NOW" class="btn btn-primary">
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden" >Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
    </div>
</div>
<h1 class="fw-bold justify-content-center text-center mb-4">Promotions</h1>
<div class="container d-flex justify-content-center align-items-center" >
    <div class="row justify-content-center">
        <div class="col-md-4 d-flex justify-content-center">
            <div class="card" >
                <img src="{{ asset('storage/promotion.png') }}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
            <div class="card" >
                <img src="{{ asset('storage/promotion.png') }}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <div>
      <a href="https://www.facebook.com/profile.php?id=61550118309445" class="me-4 text-reset">
      <i class="bi bi-facebook"></i>     
     </a>
      <a href="https://www.instagram.com/weyoung_cambodia/" class="me-4 text-reset">
        <i class="bi bi-instagram"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>WeYoung 
          </h6>
          <p>
            We provide the best service and products to all dear customers.

          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Sunscreen</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Cusion</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
      </div>
    </div>
  </section>
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">WeYoung.com</a>
  </div>
</footer>
</x-app-layout>
