<h1>Product toevoegen</h1> <form action="{{ route('products.store') }}" method="POST"> @csrf
<div>
    <label for="name">Naam</label>
    <input type="text" id="name" name="name">
</div>

<br>

<div>
    <label for="price">Prijs</label>
    <input type="number" id="price" name="price" step="0.01">
</div>

<br>

<div>
    <label for="description">Beschrijving</label>
    <textarea id="description" name="description"></textarea>
</div>

<br>

<div>
    <label for="image">Afbeelding</label>
    <input type="text" id="image" name="image">
</div>

<br>

<button type="submit">Product toevoegen</button>

</form> <br> <a href="{{ route('products.index') }}"> Terug naar producten </a>