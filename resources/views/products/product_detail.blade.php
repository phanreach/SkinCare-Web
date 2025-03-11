<x-app-layout>
  <div class="container my-5">
    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert">
        <div class="d-flex align-items-center">
          <i class="bi bi-check-circle-fill fs-4 me-2"></i>
          <strong>{{ session('success') }}</strong>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class="row g-5">
      <div class="col-lg-6">
        <div class="position-relative mb-4">
          <div id="productCarousel" class="carousel slide shadow rounded-4 overflow-hidden" data-bs-ride="carousel">
            <div class="carousel-inner">
              @foreach($product->images as $key => $image)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                  <img 
                    src="{{ asset('storage/' . $image->image_path) }}" 
                    class="d-block w-100" 
                    alt="{{ $product->name }}"
                    style="height: 500px; object-fit: contain; background-color: #f8f9fa;"
                  >
                </div>
              @endforeach
            </div>
            
            <div class="carousel-indicators position-static bg-light py-2 mt-2 rounded">
              @foreach($product->images as $key => $image)
                <button 
                  type="button" 
                  data-bs-target="#productCarousel" 
                  data-bs-slide-to="{{ $key }}" 
                  class="{{ $key == 0 ? 'active' : '' }}"
                  style="width: 10px; height: 10px; border-radius: 50%;"
                  aria-label="Slide {{ $key + 1 }}">
                </button>
              @endforeach
            </div>
            
            <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon bg-dark bg-opacity-25 rounded-circle p-3" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon bg-dark bg-opacity-25 rounded-circle p-3" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

          <div class="d-flex flex-wrap gap-2 mt-3 justify-content-center">
            @foreach($product->images as $key => $image)
              <img 
                src="{{ asset('storage/' . $image->image_path) }}" 
                class="img-thumbnail thumbnail-image cursor-pointer rounded-3 border {{ $key == 0 ? 'border-primary' : '' }}"
                style="width: 70px; height: 70px; object-fit: cover; cursor: pointer;" 
                alt="Thumbnail"
                data-bs-target="#productCarousel"
                data-bs-slide-to="{{ $key }}"
              >
            @endforeach
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card border-0 shadow-sm rounded-4">
          <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-start mb-3">
              <h1 class="h2 fw-bold mb-0">{{ $product->name }}</h1>
              <span class="badge bg-success rounded-pill px-3 py-2">In Stock</span>
            </div>
            
            <div class="d-flex align-items-baseline mb-4">
              <span class="h3 text-dark fw-bold me-3">${{ number_format($product->price, 2) }}</span>
              @if(isset($product->original_price) && $product->original_price > $product->price)
                <span class="text-decoration-line-through text-muted">${{ number_format($product->original_price, 2) }}</span>
                <span class="ms-2 badge bg-danger">{{ round((($product->original_price - $product->price) / $product->original_price) * 100) }}% OFF</span>
              @endif
            </div>
            
            <hr class="my-4">
            <div class="mb-4">
              <h6 class="fw-bold mb-3">Select Quantity</h6>
              <div class="d-flex align-items-center" style="max-width: 180px;">
                <button class="btn btn-outline-dark px-3 fw-bold" type="button" id="minus-btn">−</button>
                <input 
                  type="number" 
                  class="form-control text-center border-dark mx-2 fw-bold" 
                  value="1" 
                  min="1" 
                  max="10" 
                  id="quantity-input"
                  style="height: 45px;"
                >
                <button class="btn btn-outline-dark px-3 fw-bold" type="button" id="plus-btn">+</button>
              </div>
            </div>
            
            <div class="mb-4">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="quantity" id="cart-quantity" value="1" min="1" max="10">
                    <button type="submit" class="btn btn-dark btn-lg w-100 py-3 fw-bold d-flex align-items-center justify-content-center">
                      <i class="bi bi-bag-plus fs-5 me-2"></i> Add to Cart
                    </button>
                  </form>
                </div>
                <div class="col-auto">
                  <button class="btn btn-outline-dark btn-lg rounded-circle" style="width: 55px; height: 55px;">
                    <i class="bi bi-heart fs-5"></i>
                  </button>
                </div>
              </div>
            </div>
            
            <div class="row text-center border-top pt-4 mt-2">
              <div class="col-md-4 mb-3 mb-md-0">
                <div class="d-flex flex-column align-items-center">
                  <div class="bg-light rounded-circle p-3 mb-2" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                    <i class="bi bi-truck fs-4"></i>
                  </div>
                  <h6 class="fw-bold mb-1">Fast Delivery</h6>
                  <p class="small text-muted mb-0">1-2 working days</p>
                </div>
              </div>
              <div class="col-md-4 mb-3 mb-md-0">
                <div class="d-flex flex-column align-items-center">
                  <div class="bg-light rounded-circle p-3 mb-2" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                    <i class="bi bi-credit-card fs-4"></i>
                  </div>
                  <h6 class="fw-bold mb-1">Secure Payment</h6>
                  <p class="small text-muted mb-0">Multiple options</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="d-flex flex-column align-items-center">
                  <div class="bg-light rounded-circle p-3 mb-2" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                    <i class="bi bi-arrow-counterclockwise fs-4"></i>
                  </div>
                  <h6 class="fw-bold mb-1">Easy Returns</h6>
                  <p class="small text-muted mb-0">30 day guarantee</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="accordion mt-4 shadow-sm rounded-4 overflow-hidden" id="productAccordion">
          <div class="accordion-item border-0">
            <h2 class="accordion-header">
              <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#productDescription">
                Product Description
              </button>
            </h2>
            <div id="productDescription" class="accordion-collapse collapse show">
              <div class="accordion-body">
                <div class="product-description">
                  {{ $product->description }}
                </div>
              </div>
            </div>
          </div>
          
          <div class="accordion-item border-0 border-top">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#productSpecs">
                Specifications
              </button>
            </h2>
            <div id="productSpecs" class="accordion-collapse collapse">
              <div class="accordion-body">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between px-0">
                    <span class="text-muted">Brand</span>
                    <span class="fw-medium">{{ $product->brand ?? 'Brand Name' }}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between px-0">
                    <span class="text-muted">Category</span>
                    <span class="fw-medium">{{ $product->category->name ?? 'Category' }}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between px-0">
                    <span class="text-muted">SKU</span>
                    <span class="fw-medium">{{ $product->sku ?? 'SKU123456' }}</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="accordion-item border-0 border-top">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#productDelivery">
                Shipping & Returns
              </button>
            </h2>
            <div id="productDelivery" class="accordion-collapse collapse">
              <div class="accordion-body">
                <p>Fast delivery within 1-2 business days. We offer a 30-day money-back guarantee for all our products.</p>
                <p>For any inquiries, please contact our customer support at <strong>(+855) 10 203 405</strong>.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const minusBtn = document.getElementById('minus-btn');
      const plusBtn = document.getElementById('plus-btn');
      const quantityInput = document.getElementById('quantity-input');
      const cartQuantity = document.getElementById('cart-quantity');

      function updateCartQuantity() {
        cartQuantity.value = quantityInput.value;
      }

      minusBtn.addEventListener('click', () => {
        let currentValue = parseInt(quantityInput.value);
        if (currentValue > 1) {
          quantityInput.value = currentValue - 1;
          updateCartQuantity();
        }
      });

      plusBtn.addEventListener('click', () => {
        let currentValue = parseInt(quantityInput.value);
        if (currentValue < 10) {
          quantityInput.value = currentValue + 1;
          updateCartQuantity();
        }
      });

      quantityInput.addEventListener('change', updateCartQuantity);
      
      document.querySelectorAll('.thumbnail-image').forEach((thumb, index) => {
        thumb.addEventListener('click', () => {
          document.querySelectorAll('.thumbnail-image').forEach(t => {
            t.classList.remove('border-primary');
          });
          thumb.classList.add('border-primary');
          
          const carousel = new bootstrap.Carousel(document.getElementById('productCarousel'));
          carousel.to(index);
        });
      });
      
      const productCarousel = document.getElementById('productCarousel');
      productCarousel.addEventListener('slid.bs.carousel', (event) => {
        const index = event.to;
        document.querySelectorAll('.thumbnail-image').forEach((thumb, i) => {
          if (i === index) {
            thumb.classList.add('border-primary');
          } else {
            thumb.classList.remove('border-primary');
          }
        });
      });
    });
  </script>
</x-app-layout>