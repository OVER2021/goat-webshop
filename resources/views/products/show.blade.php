<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }}</title>
    @vite(['resources/css/app.css'])
</head>
<body>

<main class="products">

    <h1>{{ $product->name }}</h1>

    <p>Prijs: € {{ $product->price }}</p>

    <p>{{ $product->description }}</p>

    @if ($product->image)
        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" style="max-width: 300px;">
    @endif

    <hr>

    <a href="{{ route('products.edit', $product) }}">Bewerken</a>

    <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit">Verwijderen</button>
    </form>

    <a href="{{ route('products.index') }}">Terug naar overzicht</a>

</main>

</body>
</html>