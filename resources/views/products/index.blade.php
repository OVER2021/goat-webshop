<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producten</title>
    @vite(['resources/css/app.css'])
</head>

<body>

    <header class="hero">

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
        <img src="{{ asset('img/test/graan/graanFlipped.png') }}" class="grain g10" alt="">
        <img src="{{ asset('img/test/graan/graan.png') }}" class="grain g13" alt="">
        <img src="{{ asset('img/test/graan/graanFlipped.png') }}" class="grain g14" alt="">
        <img src="{{ asset('img/test/graan/graan.png') }}" class="grain g15" alt="">

    </header>

    <main class="products">

        <h1>Producten</h1>


        @guest

            <a href="{{ route('login') }}">
                Inloggen
            </a>

            <a href="{{ route('register') }}">
                Registreren
            </a>

        @endguest


        @auth

            <p>
                Ingelogd als {{ auth()->user()->name }}
            </p>

            <a href="{{ route('cart.index') }}">
                Winkelmandje
            </a>

            <a href="{{ route('products.create') }}">
                Product toevoegen
            </a>

            <form action="{{ route('logout') }}" method="POST">
                @csrf

                <button type="submit">
                    Uitloggen
                </button>
            </form>

        @endauth


        <hr>


        @foreach ($products as $product)

            <article class="product">

                <h2>
                    {{ $product->name }}
                </h2>

                <p>
                    Prijs: € {{ $product->price }}
                </p>

                <p>
                    {{ $product->description }}
                </p>


                <a href="{{ route('products.show', $product) }}">
                    Bekijken
                </a>


                @auth

                    <a href="{{ route('products.edit', $product) }}">
                        Bewerken
                    </a>


                    <form action="{{ route('cart.add', $product) }}" method="POST">
                        @csrf

                        <button type="submit">
                            In winkelmandje
                        </button>
                    </form>


                    <form action="{{ route('products.destroy', $product) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit">
                            Verwijderen
                        </button>
                    </form>

                @endauth

            </article>

            <hr>

        @endforeach

    </main>

</body>

</html>