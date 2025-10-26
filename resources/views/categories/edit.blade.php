@extends('layout')

@section('content')
<h1>Edit Category</h1>
<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="category_name" value="{{ $category->category_name }}" required><br>
    <textarea name="description">{{ $category->description }}</textarea><br>
    <button type="submit">Update</button>
</form>
@endsection