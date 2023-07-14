<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- displays site properly based on user's device -->
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('newbie/newbie-2/assets/images/favicon-32x32.png') }}">
    <title>Product preview card component</title>
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,700&family=Montserrat:wght@500;600&display=swap"
        rel="stylesheet">
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('newbie/newbie-2/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/arrow-links.css') }}">

<body>

    <x-arrow-links :previous-newbie="$previousNewbie" :next-newbie="$nextNewbie" />

    <main>
        <article class="product">
            <picture class="product__img">
                <source srcset="{{ asset('newbie/newbie-2/assets/images/image-product-desktop.jpg') }}"
                    media="(min-width: 600px)">
                <img src="{{ asset('newbie/newbie-2/assets/images/image-product-mobile.jpg') }}"
                    alt="Gabrielle Essense perfume bottle laying flat on a table with green leaves above and below it">
            </picture>

            <div class="product__content">
                <p class="product__category">Perfume</p>

                <h1 class="product__title">Gabrielle Essence Eau De Parfum</h1>

                <p>A floral, solar and voluptuous interpretation composed by Olivier Polge,
                    Perfumer-Creator for the House of CHANEL.</p>

                <div class="flex-group">
                    <p class="product__price">
                        <span class="visually-hidden">Current price:</span>
                        $149.99
                    </p>
                    <p class="product__original-price">
                        <span class="visually-hidden">Original price:</span>
                        <s>$169.99</s>
                    </p>
                </div>

                <button class="button" data-icon="shopping-cart">Add to Cart</button>
            </div>

        </article>
    </main>
</body>

</html>
