@extends('layout')

@section('content')
<h1>Edit Product</h1>
<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="product_name" value="{{ $product->product_name }}" required><br>
    <input type="number" step="0.01" name="price" value="{{ $product->price }}" required><br>
    <input type="number" name="stock" value="{{ $product->stock }}" required><br>
    <select name="category_id" required>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>
                {{ $category->category_name }}
            </option>
        @endforeach
    </select><br>
    <button type="submit">Update</button>
</form>
@endsection