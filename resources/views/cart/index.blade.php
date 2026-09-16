<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Winkelmandje</title>

    @vite(['resources/css/app.css'])
</head>

<body>

    <main class="pagina">

        <section class="links">

            <div class="bonnetje">

                <p class="bon-klein">
                    GOAT WEBSHOP
                </p>

                <h1>WINKELMANDJE</h1>

                <div class="bon-lijn"></div>

                <div class="bon-info">

                    <span>KLANT</span>
                    <span>{{ auth()->user()->name }}</span>

                    <span>DATUM</span>
                    <span>{{ date('d-m-Y') }}</span>

                    <span>STATUS</span>
                    <span>NOG NIET BESTELD</span>

                </div>

                <div class="bon-lijn"></div>


                @if (count($cart) == 0)

                    <p>
                        Uw winkelmandje is leeg
                    </p>

                @else

                    @php
                        $total = 0;
                    @endphp


                    @foreach ($cart as $id => $item)

                        <div class="bon-product">

                            <span>
                                {{ $item['quantity'] }}x
                            </span>

                            <span>
                                {{ $item['name'] }}
                            </span>

                            <span>
                                € {{ number_format($item['price'] * $item['quantity'], 2, ',', '.') }}
                            </span>

                        </div>


                        <form action="{{ route('cart.remove', $id) }}" method="POST">

                            @csrf
                            @method('DELETE')

                            <button type="submit">
                                Verwijderen
                            </button>

                        </form>


                        @php
                            $total += $item['price'] * $item['quantity'];
                        @endphp

                    @endforeach


                    <div class="bon-ruimte"></div>

                    <div class="bon-lijn"></div>


                    <div class="bon-totaal">

                        <span>TOTAAL</span>

                        <span>
                            € {{ number_format($total, 2, ',', '.') }}
                        </span>

                    </div>

                @endif


                <p class="bon-footer">
                    BEDANKT VOOR UW BESTELLING
                </p>


                <a href="{{ route('products.index') }}">
                    Verder winkelen
                </a>

            </div>

        </section>


        <section class="rechts">

            <div class="achtergrond"></div>


            <img
                src="{{ asset('imgform/geitpng.png') }}"
                alt="Geit"
                class="geit"
            >


            <img
                src="{{ asset('imgform/geitenpoot.png') }}"
                alt=""
                class="poot poot-links"
            >


            <img
                src="{{ asset('imgform/geitenpoot.png') }}"
                alt=""
                class="poot poot-rechts"
            >


            <img
                src="{{ asset('imgform/garde.png') }}"
                alt="Garde"
                class="garde"
            >


            <img
                src="{{ asset('imgform/beslagkom.png') }}"
                alt="Beslagkom"
                class="beslagkom"
            >

        </section>

    </main>

</body>

</html>