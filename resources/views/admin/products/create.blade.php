@section('content')
{{-- This is for creating a new produc --}}
    <div class="container">
        <form method="POST" action="{{ route('products.store') }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3 h-4">
                <label for="Description" class="form-label">Product Desciption</label>
                <input type="text" class="form-control" id="description" name="description">
                <textarea class="form-control h-20" id="description" name="description"> </textarea>
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-control" id="category" name="category" required>
                    @foreach($categories as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select>
            </div>            
            

            <button type="submit" class="btn btn-primary">Create New Product</button>
        </form>
    </div>
@endsection

{{-- add a product description 
add a unit price for each product 
add stock 
    this is prolly enough for basic form --}}