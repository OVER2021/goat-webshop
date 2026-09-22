<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Winkelwagen</title>

    @vite([
        'resources/css/app.css',
        'resources/css/cart.css'
    ])
</head>

<body>

<main class="winkelwagen-pagina">

    <section class="winkelwagen-links">

        <div class="bonnetje">

            <p class="bon-klein">DE BAKKERIJ</p>

            <h1>WINKELWAGEN</h1>

            <div class="bon-lijn"></div>

            @if(count($cart) > 0)

                @foreach($cart as $item)

                    <div class="bon-product">
                        <span>{{ $item['quantity'] }}x</span>

                        <span>{{ $item['name'] }}</span>

                        <span>
                            € {{ number_format(
                                $item['price'] * $item['quantity'],
                                2,
                                ',',
                                '.'
                            ) }}
                        </span>
                    </div>

                @endforeach

                <div class="bon-ruimte"></div>

                <div class="bon-lijn"></div>

                <div class="bon-totaal">
                    <span>TOTAAL</span>

                    <span>
                        € {{ number_format($totaal, 2, ',', '.') }}
                    </span>
                </div>

                <a
                    href="{{ route('products.index') }}"
                    class="winkel-verder"
                >
                    VERDER WINKELEN
                </a>

            @else

                <div class="lege-winkelwagen">

                    <p>JE WINKELWAGEN IS LEEG</p>

                    <a
                        href="{{ route('products.index') }}"
                        class="winkel-verder"
                    >
                        BEKIJK PRODUCTEN
                    </a>

                </div>

            @endif

            <p class="bon-footer">
                BEDANKT VOOR UW BESTELLING
            </p>

        </div>

    </section>

    <section class="winkelwagen-rechts">

        <div class="achtergrond"></div>

        <img
            src="{{ asset('img/test/graan/imgform/geitpng.png') }}"
            alt="Geit"
            class="geit"
        >

        <img
            src="{{ asset('img/test/graan/imgform/geitenpoot.png') }}"
            alt=""
            class="poot poot-links"
        >

        <img
            src="{{ asset('img/test/graan/imgform/geitenpoot.png') }}"
            alt=""
            class="poot poot-rechts"
        >

        <img
            src="{{ asset('img/test/graan/imgform/garde.png') }}"
            alt="Garde"
            class="garde"
        >

        <img
            src="{{ asset('img/test/graan/imgform/beslagkom.png') }}"
            alt="Beslagkom"
            class="beslagkom"
        >

    </section>

</main>

</body>
</html>