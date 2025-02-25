<x-app-layout>
  <!-- Hero Carousel with Improved Indicators and Controls -->
  <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('storage/weyoung_logo.jpg') }}" class="d-block w-100" alt="WeYoung Logo" style="height: 80vh; object-fit: cover;">
       
      </div>
      <div class="carousel-item">
        <img src="{{ asset('storage/weyoung_cover.jpg') }}" class="d-block w-100" alt="WeYoung Cover" style="height: 80vh; object-fit: cover;">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('storage/weyoungcover.jpg') }}" class="d-block w-100" alt="WeYoung Cover" style="height: 80vh; object-fit: cover;">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Featured Categories Section -->
  <section class="py-5 bg-light">
    <div class="container">
    <div class="row align-items-center">
      <h2 class="col display-5 text-center fw-bold mb-5">Our Categories</h2>
      <div class="col-auto">
        <button class="btn btn-primary rounded-pill">
          <i class="bi bi-plus-lg"></i>
        </button>
      </div>
    </div>
      
      <div class="row g-4">
        <div class="col-md-3">
          <div class="card border-0 shadow-sm h-100 transition-transform" style="transition: transform 0.3s;">
            <div class="card-img-top overflow-hidden" style="height: 200px;">
              <img src="{{ asset('storage/product3.png') }}" class="img-fluid w-100 h-100" alt="Sunscreen" style="object-fit: cover; transition: transform 0.5s;">
            </div>
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">WeYoung X Dior</h5>
              <div data-coreui-toggle="rating" data-coreui-value="3"></div>
              <p class="card-text">Protect your skin from harmful UV rays with our premium sunscreens.</p>
              <a href="#" class="btn btn-outline-primary">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card border-0 shadow-sm h-100 transition-transform" style="transition: transform 0.3s;">
            <div class="card-img-top overflow-hidden" style="height: 200px;">
              <img src="{{ asset('storage/product4.png') }}" class="img-fluid w-100 h-100" alt="Cushion" style="object-fit: cover; transition: transform 0.5s;">
            </div>
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">Cushion</h5>
              <p class="card-text">Flawless makeup application with our innovative cushion foundations.</p>
              <a href="#" class="btn btn-outline-primary">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card border-0 shadow-sm h-100 transition-transform" style="transition: transform 0.3s;">
            <div class="card-img-top overflow-hidden" style="height: 200px;">
              <img src="{{ asset('storage/promotion.png') }}" class="img-fluid w-100 h-100" alt="Skin Care" style="object-fit: cover; transition: transform 0.5s;">
            </div>
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">Skin Care</h5>
              <p class="card-text">Complete skincare solutions for a healthy, glowing complexion.</p>
              <a href="#" class="btn btn-outline-primary">Add to cart</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card border-0 shadow-sm h-100 transition-transform" style="transition: transform 0.3s;">
            <div class="card-img-top overflow-hidden" style="height: 200px;">
              <img src="{{ asset('storage/product2.png') }}" class="img-fluid w-100 h-100" alt="Makeup" style="object-fit: cover; transition: transform 0.5s;">
            </div>
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">Makeup</h5>
              <p class="card-text">Express yourself with our wide range of high-quality makeup products.</p>
              <a href="#" class="btn btn-outline-primary">Shop Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Promotions Section with Enhanced Design -->
  <section id="promotions" class="py-5">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold">Current Promotions</h2>
        <p class="lead text-muted">Limited time offers you don't want to miss</p>
      </div>
      <div class="row justify-content-center g-4">
        <div class="col-md-4">
    <div class="card border-0 shadow-lg overflow-hidden h-100">
      <div class="position-relative">
        <!-- Fixed height container -->
        <div style="height: 300px;" class="overflow-hidden">
          <img src="{{ asset('storage/product1.png') }}" class="card-img-top w-100 h-100" alt="Promotion" style="object-fit: cover;">
        </div>
        <div class="position-absolute top-0 start-0 bg-danger text-white py-2 px-3 m-3 rounded-pill">
          <span class="fw-bold">30% OFF</span>
        </div>
      </div>
      <div class="card-body text-center p-4">
        <h4 class="card-title fw-bold mb-3">Summer Collection</h4>
        <p class="card-text mb-4">Get ready for summer with our new collection of sunscreens and moisturizers designed for hot weather protection.</p>
        <a href="#" class="btn btn-primary">Buy Promotion</a>
      </div>
      <div class="card-footer bg-transparent text-center border-0 pb-4">
        <p class="text-muted small">Offer valid until June 30, 2024</p>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card border-0 shadow-lg overflow-hidden h-100">
      <div class="position-relative">
        <!-- Fixed height container -->
        <div style="height: 300px;" class="overflow-hidden">
          <img src="{{ asset('storage/promotion.png') }}" class="card-img-top w-100 h-100" alt="Promotion" style="object-fit: cover;">
        </div>
        <div class="position-absolute top-0 start-0 bg-primary text-white py-2 px-3 m-3 rounded-pill">
          <span class="fw-bold">BUY 1 GET 1</span>
        </div>
      </div>
      <div class="card-body text-center p-4">
        <h4 class="card-title fw-bold mb-3">Premium Makeup Bundle</h4>
        <p class="card-text mb-4">Purchase any premium foundation and get a matching concealer absolutely free. Perfect for creating a flawless look.</p>
        <a href="#" class="btn btn-primary">Buy Promotion</a>
      </div>
      <div class="card-footer bg-transparent text-center border-0 pb-4">
        <p class="text-muted small">While supplies last</p>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card border-0 shadow-lg overflow-hidden h-100">
      <div class="position-relative">
        <!-- Fixed height container -->
        <div style="height: 300px;" class="overflow-hidden">
          <img src="{{ asset('storage/product2.png') }}" class="card-img-top w-100 h-100" alt="Promotion" style="object-fit: cover;">
        </div>
        <div class="position-absolute top-0 start-0 bg-primary text-white py-2 px-3 m-3 rounded-pill">
          <span class="fw-bold">BUY 1 GET 1</span>
        </div>
      </div>
      <div class="card-body text-center p-4">
        <h4 class="card-title fw-bold mb-3">Valentine's Day Set</h4>
        <p class="card-text mb-4">Purchase this perfect valentine's day set as a meaningful gift to your couple.
          Enjoy your special days.
        </p>
        <a href="#" class="btn btn-primary">Buy Promotion</a>
      </div>
      <div class="card-footer bg-transparent text-center border-0 pb-4">
        <p class="text-muted small">While supplies last</p>
      </div>
    </div>
  </div>
</div>
    </div>
  </section>

  <!-- Testimonials Section (New) -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold">What Our Customers Say</h2>
        <p class="lead text-muted">Read testimonials from our satisfied customers</p>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="card border-0 shadow-sm p-4">
                  <div class="text-center mb-4">
                    <div class="text-warning">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                    </div>
                  </div>
                  <div class="card-body text-center">
                    <p class="card-text lead fst-italic mb-4">"I've been using WeYoung's sunscreen for months now, and my skin has never looked better. The protection is amazing, and it doesn't leave any white cast!"</p>
                    <div class="d-flex justify-content-center">
                      <div class="text-center">
                        <h5 class="fw-bold mb-1">Sophia Chen</h5>
                        <p class="text-muted">Loyal Customer</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="card border-0 shadow-sm p-4">
                  <div class="text-center mb-4">
                    <div class="text-warning">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                    </div>
                  </div>
                  <div class="card-body text-center">
                    <p class="card-text lead fst-italic mb-4">"The cushion foundation from WeYoung gives me the perfect coverage I need without feeling heavy. My friends keep asking what I'm using!"</p>
                    <div class="d-flex justify-content-center">
                      <div class="text-center">
                        <h5 class="fw-bold mb-1">Linda Soun</h5>
                        <p class="text-muted">Beauty Enthusiast</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon bg-primary rounded-circle" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon bg-primary rounded-circle" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Enhanced Footer with Better Structure -->
 @include('layouts.footer')

  <!-- Custom CSS for hover effects -->
  <style>
    /* Card hover effects */
    .transition-transform:hover {
      transform: translateY(-5px);
    }
    .card-img-top img:hover {
      transform: scale(1.05);
    }
    /* Link hover effect */
    .hover-link:hover {
      color: #0d6efd !important;
      padding-left: 5px;
      transition: all 0.3s ease;
    }
  </style>
</x-app-layout>