<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>My Inventory</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>MyInventory</h1>
    <nav>
        <a href="{{ route('products.index') }}">Products</a>
        <a href="{{ route('categories.index') }}">Categories</a>
    </nav>
    <hr>
    @yield('content')
</body>
</html>
