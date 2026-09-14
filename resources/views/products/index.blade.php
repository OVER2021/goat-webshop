<h1>Producten</h1> <a href="{{ route('products.create') }}"> Product toevoegen </a> <hr>

@foreach ($products as $product)

<h2>{{ $product->name }}</h2>

<p>Prijs: € {{ $product->price }}</p>

<p>{{ $product->description }}</p>

<a href="{{ route('products.show', $product) }}">
    Bekijken
</a>

<a href="{{ route('products.edit', $product) }}">
    Bewerken
</a>

<form action="{{ route('products.destroy', $product) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit">Verwijderen</button>
</form>

<hr>


@endforeach