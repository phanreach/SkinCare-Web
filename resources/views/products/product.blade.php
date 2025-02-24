<x-app-layout>
    <!-- Header Section -->
    <div class="container-fluid bg-light py-4 mb-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="display-5 fw-bold mb-0 text-dark">Products</h1>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="{{route('product.create')}}" class="btn btn-primary btn-lg">
                        <i class="fas fa-plus-circle me-2"></i>Add Product
                    </a>
                </div>
            </div>
        </div>
    </div>

    @if(session()->has('success'))
        <div class="container">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i>{{session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    <!-- Products Grid -->
    <div class="container mb-4">
        <div class="row g-5">
            @foreach($products as $product)
            <div class="col-sm-6 col-md-4 col-lg-3">
    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
        <div class="position-relative">
            <!-- Product Image -->
            <img src="{{ asset('storage/' . $product->picture) }}" 
                 class="card-img-top object-fit-cover"
                 style="height: 200px"
                 alt="{{$product->name}}">

            <!-- Price Badge -->
            <div class="position-absolute top-0 end-0 p-2">
                <span class="badge bg-primary fs-5">${{$product->price}}</span>
            </div>

            <!-- Three-dot Dropdown Menu -->
            <div class="position-absolute top-0 start-0 p-2">
                <div class="dropdown">
                    <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('product.edit', $product->id) }}">
                            <i class="fas fa-edit me-2"></i> Edit</a></li>
                        <li>
                            <form action="{{ route('product.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="dropdown-item text-danger">
                                    <i class="fas fa-trash-alt me-2"></i> Delete
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Card Body -->
        <div class="card-body">
            <h5 class="card-title fw-bold text-truncate">{{$product->name}}</h5>
            <p class="card-text text-muted">
                {{Str::limit($product->description, 100)}}
            </p>
        </div>

        <!-- Order Button -->
        <div class="card-footer bg-white border-0 pt-0">
            <button class="btn btn-primary w-100 btn-lg hover-lift">
                <i class="fas fa-shopping-cart me-2"></i>Order Now
            </button>
        </div>
    </div>
</div>

            @endforeach
        </div>
    </div>

    <style>
        .hover-shadow:hover {
            transform: translateY(-5px);
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
        }
        .transition-all {
            transition: all .3s ease-in-out;
        }
        .hover-lift:hover {
            transform: translateY(-2px);
        }
    </style>
    @include('layouts.footer')
</x-app-layout>