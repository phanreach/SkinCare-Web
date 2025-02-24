<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Product</title>
</head>
<body>
  <h1>Create Product</h1>
 
  <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
    @csrf 
    @method('post')
    <div>
      <label for="picture">Product Photo</label>
      <input type="file" name="picture" required>
    </div>

    <div>
      <label for="name">Name</label>
      <input type="text" name="name" placeholder="Product Name" required>
    </div>

    <div>
      <label for="price">Price</label>
      <input type="number" name="price" placeholder="Price" required>
    </div>

    <div>
      <label for="description">Description</label>
      <textarea name="description" placeholder="Product Description"></textarea>
    </div>

    <div>
      <input type="submit" value="Create Product">
    </div>
  </form>
</body>
</html>
