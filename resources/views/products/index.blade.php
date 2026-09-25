<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producten</title>
    @vite(['resources/css/app.css'])
</head>
<body>
@if (session('status'))
    <div class="login-success">
        {{ session('status') }}
    </div>
@endif

@auth
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Uitloggen ({{ Auth::user()->name }})</button>
    </form>
@else
    <a href="{{ route('login') }}">Inloggen</a>
    <a href="{{ route('register') }}">Registreren</a>
@endauth

<!-- <header class="hero">

    <img
    src="{{ asset('img/test/logowebshop.png') }}"
    alt="Logo"
    class="logo"
>

<img
    src="{{ asset('img/test/test4.png') }}"
    alt="Geit"
    class="goat goat-main"
>

<img
    src="{{ asset('img/test/test3.png') }}"
    alt="Geit"
    class="goat goat-left"
>

<img
    src="{{ asset('img/test/test22.png') }}"
    alt="Geit"
    class="goat goat-center"
>

    <img src="{{ asset('img/test/graan/graan.png') }}" class="grain g1" alt="">
    <img src="{{ asset('img/test/graan/graanFlipped.png') }}" class="grain g2" alt="">
    <img src="{{ asset('img/test/graan/graan.png') }}" class="grain g3" alt="">
    <img src="{{ asset('img/test/graan/graanFlipped.png') }}" class="grain g4" alt="">
    <img src="{{ asset('img/test/graan/graan.png') }}" class="grain g5" alt="">
    <img src="{{ asset('img/test/graan/graanFlipped.png') }}" class="grain g6" alt="">
    <img src="{{ asset('img/test/graan/graan.png') }}" class="grain g7" alt="">
    <img src="{{ asset('img/test/graan/graanFlipped.png') }}" class="grain g8" alt="">
    <img src="{{ asset('img/test/graan/graan.png') }}" class="grain g9" alt="">
    <img src="{{ asset('img/test/graan/graanFlipped.png') }}" class="grain g10" alt="">
    <img src="{{ asset('img/test/graan/graan.png') }}" class="grain g11" alt="">
    <img src="{{ asset('img/test/graan/graanFlipped.png') }}" class="grain g12" alt="">
    <img src="{{ asset('img/test/graan/graan.png') }}" class="grain g13" alt="">
    <img src="{{ asset('img/test/graan/graanFlipped.png') }}" class="grain g14" alt="">
    <img src="{{ asset('img/test/graan/graan.png') }}" class="grain g15" alt="">
    <img src="{{ asset('img/test/graan/graanFlipped.png') }}" class="grain g16" alt="">
    <img src="{{ asset('img/test/graan/graan.png') }}" class="grain g17" alt="">
    <img src="{{ asset('img/test/graan/graanFlipped.png') }}" class="grain g18" alt="">
    <img src="{{ asset('img/test/graan/graan.png') }}" class="grain g19" alt="">
    <img src="{{ asset('img/test/graan/graanFlipped.png') }}" class="grain g20" alt="">
    <img src="{{ asset('img/test/graan/graanFlipped.png') }}" class="grain g22" alt="">
    <img src="{{ asset('img/test/graan/graan.png') }}" class="grain g23" alt="">
    <img src="{{ asset('img/test/graan/graanFlipped.png') }}" class="grain g24" alt="">
    <img src="{{ asset('img/test/graan/graan.png') }}" class="grain g25" alt="">
    <img src="{{ asset('img/test/graan/graanFlipped.png') }}" class="grain g26" alt="">
    <img src="{{ asset('img/test/graan/graan.png') }}" class="grain g27" alt="">
    <img src="{{ asset('img/test/graan/graanFlipped.png') }}" class="grain g28" alt="">
    <img src="{{ asset('img/test/graan/graan.png') }}" class="grain g29" alt="">
    <img src="{{ asset('img/test/graan/graanFlipped.png') }}" class="grain g30" alt="">

</header> -->

<main class="products">

    <h1>Producten</h1>

    <a href="{{ route('products.create') }}">
        Product toevoegen
    </a>

    <hr>

    @foreach ($products as $product)

        <article class="product">

            <h2>{{ $product->name }}</h2>

            <p>
                Prijs: € {{ $product->price }}
            </p>

            <p>
                {{ $product->description }}
            </p>

            <a href="{{ route('products.show', $product) }}">
                Bekijken
            </a>

            <a href="{{ route('products.edit', $product) }}">
                Bewerken
            </a>

            <form
                action="{{ route('products.destroy', $product) }}"
                method="POST"
            >
                @csrf
                @method('DELETE')

                <button type="submit">
                    Verwijderen
                </button>
            </form>

        </article>

        <hr>

    @endforeach

</main>

</body>
</html>