<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Product</title>
</head>
<body>
  <h1>Edit Product</h1>

  <div>
    @if($errors->any())
      <ul>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    @endif
  </div>

  <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf 
    @method('PUT')

    <div>
      <label for="picture">Product Photo</label>
      <input type="file" name="picture">
      <img src="{{ asset('storage/' . $product->picture) }}" alt="Product Image" width="100">
    </div>

    <div>
      <label for="name">Name</label>
      <input type="text" name="name" placeholder="Product Name" value="{{ $product->name }}">
    </div>

    <div>
      <label for="price">Price</label>
      <input type="number" name="price" step="0.01" placeholder="Price" value="{{ $product->price }}">
    </div>

    <div>
      <label for="description">Description</label>
      <textarea name="description" placeholder="Product Description">{{ $product->description }}</textarea>
    </div>

    <div>
      <input type="submit" value="Update Product">
    </div>
  </form>
</body>
</html>
