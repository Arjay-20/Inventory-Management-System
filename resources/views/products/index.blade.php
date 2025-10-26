@extends('layout')

@section('content')
    <h2>Products</h2>
    <a href="{{ route('products.create') }}" class="btn">Add Product</a>

    <ul>
        @foreach($products as $product)
            <li>
                {{ $product->product_name }} ({{ $product->price }})
                - Category: {{ $product->category?->category_name ?? 'None' }}
                <a href="{{ route('products.edit', $product) }}">Edit</a>
                <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
