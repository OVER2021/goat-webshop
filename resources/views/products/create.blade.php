<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product toevoegen</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css'])
</head>
<body>

<div class="product-form-wrap">
    <div class="product-form-card">

        <h1 class="product-form-title">Product toevoegen</h1>

        @if ($errors->any())
            <ul class="product-form-errors">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div>
                <label for="name">Naam</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required>
            </div>

            <div>
                <label for="price">Prijs</label>
                <input id="price" type="number" step="0.01" name="price" value="{{ old('price') }}" required>
            </div>

            <div>
                <label for="description">Beschrijving</label>
                <textarea id="description" name="description">{{ old('description') }}</textarea>
            </div>

            <div>
                <label for="image">Afbeelding (tijdelijk niet beschikbaar)</label>
                <input id="image" type="text" name="image" value="{{ old('image') }}">
            </div>

            <div>
                <button type="submit">Opslaan</button>
                <a href="{{ route('products.index') }}" class="product-form-cancel">Annuleren</a>
            </div>
        </form>

    </div>
</div>

</body>
</html>