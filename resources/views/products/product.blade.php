<x-app-layout>
    <!-- Header Section -->
    <div class="mb-4 py-4">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <!-- Title -->
                <div class="col-lg-6 mb-lg-0">
                    <h1 class="fw-bold text-dark">Products</h1>
                </div>

                <div class="col-lg-6">
                    <div class="d-flex justify-content-end gap-2">
                        <form class="d-flex me-2">
                            <input class="form-control me-2" type="search" placeholder="Search products..." aria-label="Search">
                            <button class="btn btn-outline-primary" type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </form>

                        @auth
                            @if(auth()->user()->role === "admin")
                                <a class="btn btn-primary shadow-sm" href="{{ route('product.create') }}">Add Product</a>
                            @endif
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Message -->
    @if(session()->has('success'))
        <div class="container">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    <!-- Products Section -->
    <div class="container mb-4">
        <div class="row g-5">
            @foreach($products as $product)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all d-flex flex-column">
                        <div class="position-relative">
                            <!-- Product Image -->
                            <a href="{{ route('product.detail', $product->id) }}">
                                <img src="{{ asset($product->images->isNotEmpty() ? 'storage/' . $product->images->first()->image_path : 'storage/default-image.jpg') }}"
                                     class="card-img-top object-fit-cover"
                                     style="height: 200px"
                                     alt="{{ $product->name }}">
                            </a>

                            <!-- Admin Dropdown Menu -->
                            @auth
                                @if(auth()->user()->role === "admin")
                                    <div class="position-absolute top-0 start-0 p-2">
                                        <div class="dropdown">
                                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ route('product.edit', $product->id) }}">
                                                    <i class="fas fa-edit me-2"></i> Edit</a>
                                                </li>
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
                                @endif
                            @endauth
                        </div>

                        <!-- Card Body -->
                        <div class="card-body d-flex flex-column flex-grow-1">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="h5 fw-bold text-dark mb-0">$ {{ number_format($product->price, 2) }}</span>
                                <button class="btn btn-outline-danger btn-sm rounded-circle p-1 d-flex align-items-center justify-content-center" style="width: 35px; height: 35px;">
                                    <i class="bi bi-suit-heart"></i>
                                </button>
                            </div>
                            <a href="{{ route('product.detail', $product->id) }}" class="text-decoration-none text-dark">
                                <h5 class="card-title fw-bold text-truncate mb-2">{{ $product->name }}</h5>
                            </a>
                            <p class="card-text text-muted flex-grow-1 overflow-hidden" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                {{ Str::limit($product->description, 100) }}
                            </p>
                        </div>                
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @include('layouts.footer')

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
</x-app-layout>
