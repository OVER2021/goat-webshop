<h1>Product wijzigen</h1> <form action="{{ route('products.update', $product) }}" method="POST">
@csrf
@method('PUT')

<div>
    <label for="name">Naam</label>
    <input type="text" id="name" name="name" value="{{ $product->name }}">
</div>

<br>

<div>
    <label for="price">Prijs</label>
    <input type="number" id="price" name="price" value="{{ $product->price }}" step="0.01">
</div>

<br>

<div>
    <label for="description">Beschrijving</label>
    <textarea id="description" name="description">{{ $product->description }}</textarea>
</div>

<br>

<div>
    <label for="image">Afbeelding</label>
    <input type="text" id="image" name="image" value="{{ $product->image }}">
</div>

<br>

<button type="submit">
    Product wijzigen
</button>

</form> <br> <a href="{{ route('products.index') }}"> Terug naar producten </a>