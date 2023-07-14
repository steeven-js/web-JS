<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- displays site properly based on user's device -->

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('newbie/newbie-8/assets/images/favicon-32x32.png') }}">
    <title>3-column preview card component</title>
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('newbie/newbie-8/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('newbie/newbie-8/css/flexbox.css') }}">
    <link rel="stylesheet" href="{{ asset('newbie/newbie-8/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/arrow-links.css') }}">

<body>

    <x-arrow-links :previous-newbie="$previousNewbie" :next-newbie="$nextNewbie" />

    <ul class="containerBlocoLista">
        <li class="listaSedans">
            <img class="icones" src="{{ asset('newbie/newbie-8/assets/images/icon-sedans.png') }}">
            <h1 class="titulos">Sedans</h1>
            <p>Choose a sedan for its affordability and excellent fuel economy. Ideal for cruising in the city
                or on your next road trip.</p>
            <input type="submit" value="Learn more" class="saibaMaisSedans">
        </li>
        <li class="listaSuvs">
            <img class="icones" src="{{ asset('newbie/newbie-8/assets/images/icon-suvs.png') }}">
            <h2 class="titulos">SUVs</h2>
            <p>Take an SUV for its spacious interior, power, and versatility. Perfect for your next family vacation
                and off-road adventures.</p>
            <input type="submit" value="Learn more" class="saibaMaisSuvs">
        </li>
        <li class="listaLuxury">
            <img class="icones" src="{{ asset('newbie/newbie-8/assets/images/icon-luxury.png') }}">
            <h3 class="titulos">Luxury<h3>
                    <p>Cruise in the best car brands without the bloated prices. Enjoy the enhanced comfort of a luxury
                        rental and arrive in style.</p>
                    <input type="submit" value="Learn more" class="saibaMaisLuxury">
        </li>
    </ul>
    {{-- <div class="attribution">
        Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>.
        Coded by <a href="#">Steeven Jacques</a>.
    </div> --}}
</body>

</html>
