<!-- resources/views/products/create.blade.php -->
<form method="POST" action="{{ route('products.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Product Name" required>
    <textarea name="description" placeholder="Product Description"></textarea>
    <input type="number" name="price" placeholder="Product Price" required>
    <button type="submit">Create Product</button>
</form>
