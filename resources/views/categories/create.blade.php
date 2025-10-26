@extends('layout')

@section('content')
<h1>Add Category</h1>
<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <input type="text" name="category_name" placeholder="Category Name" required><br>
    <textarea name="description" placeholder="Description"></textarea><br>
    <button type="submit">Save</button>
</form>
@endsection