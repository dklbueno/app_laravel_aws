<!DOCTYPE html>
<html>
<head>
    <title>Produtos</title>
</head>
<body>

<h1>Produtos</h1>

<a href="{{ route('products.create') }}">
    Novo Produto
</a>

<hr>

@foreach($products as $product)

    <h3>{{ $product->name }}</h3>

    <p>{{ $product->description }}</p>

    <img
        src="{{ Storage::disk('s3')->url($product->image) }}"
        width="200"
    >

    <hr>

@endforeach

</body>
</html>