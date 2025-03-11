<x-app-layout>
    <div class="container my-4">
        <h2 class="mb-3">Shopping Cart</h2>

        @if ($cartItems->isEmpty())
            <div class="alert alert-info">Your cart is empty.</div>
        @else
            <div class="d-block d-md-none">
                @foreach ($cartItems as $item)
                    <div class="card mb-3 shadow-sm">
                        <div class="row g-0">
                            <div class="col-4">
                                <img src="{{ asset('storage/' . $item->product->images->first()->image_path) }}" 
                                     alt="{{ $item->product->name }}" 
                                     class="img-fluid rounded-start h-100 object-fit-cover">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->product->name }}</h5>
                                    <p class="card-text mb-1">${{ number_format($item->product->price, 2) }}</p>
                                    <div class="d-flex align-items-center mb-2">
                                        <form action="{{route('cart.update', $item->id)}}" method="POST" class="d-flex align-items-center">
                                            @csrf
                                            @method('PATCH')
                                            <input type="number" name="quantity" value="{{ $item->quantity }}" min="1" 
                                                  class="form-control form-control-sm me-2" style="width: 60px">
                                            <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                        </form>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="fw-bold mb-0">Total: ${{ number_format($item->product->price * $item->quantity, 2) }}</p>
                                        <form action="{{route('cart.remove', $item->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="table-responsive d-none d-md-block">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Image</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartItems as $item)
                            <tr>
                                <td class="align-middle">
                                    <img src="{{ asset('storage/' . $item->product->images->first()->image_path) }}" 
                                         alt="{{ $item->product->name }}" 
                                         width="70" height="70" class="rounded">
                                </td>
                                <td class="align-middle">{{ $item->product->name }}</td>
                                <td class="align-middle">${{ number_format($item->product->price, 2) }}</td>
                                <td class="align-middle">
                                    <form action="{{route('cart.update', $item->id)}}" method="POST" class="d-flex align-items-center">
                                        @csrf
                                        @method('PATCH')
                                        <input type="number" name="quantity" value="{{ $item->quantity }}" min="1" 
                                               class="form-control form-control-sm me-2" style="width: 70px">
                                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                    </form>
                                </td>
                                <td class="align-middle fw-bold">${{ number_format($item->product->price * $item->quantity, 2) }}</td>
                                <td class="align-middle">
                                    <form action="{{route('cart.remove', $item->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Cart summary -->
            <div class="card mt-3 mb-4 shadow-sm">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <a href="{{ route('product.index') }}" class="btn btn-outline-secondary">
                                <i class="bi bi-arrow-left"></i> Continue Shopping
                            </a>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-md-end">
                                <div class="me-md-3 mb-3 mb-md-0 fw-bold h5">
                                    Total: ${{ number_format($cartItems->sum(function($item) {
                                        return $item->product->price * $item->quantity;
                                    }), 2) }}
                                </div>
                                <a href="" class="btn btn-success">
                                    Proceed to Checkout <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

    
    <!-- Include Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">
</x-app-layout>
