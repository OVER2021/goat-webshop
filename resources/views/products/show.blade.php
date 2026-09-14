<h1>{{ $product->name }}</h1> <p> <strong>Prijs:</strong> € {{ $product->price }} </p> <p> <strong>Beschrijving:</strong> {{ $product->description }} </p>

@if ($product->image)
<img src="{{ $product->image }}" alt="{{ $product->name }}" width="300">
@endif

<a href="{{ route('products.index') }}"> Terug naar producten </a>