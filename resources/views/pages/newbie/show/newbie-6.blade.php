<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('newbie/newbie-2/assets/images/favicon-32x32.png') }}">
    <link rel="stylesheet" href="styles.css">

    <title>Order summary card</title>

    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('newbie/newbie-6/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/arrow-links.css') }}">

<body>

    <x-arrow-links :previous-newbie="$previousNewbie" :next-newbie="$nextNewbie" />

    <main>

        <article class="card">
            <div class="card__img-holder">
                <img src="{{ asset('newbie/newbie-6/assets/images/illustration-hero.svg') }}" alt="Illustration of a person listening to music.">
            </div>
            <div class="card__body">
                <h1 class="title">Order Summary</h1>
                <p class="text">You can now listen to millions of songs, audiobooks, and podcasts on any device
                    anywhere you
                    like!</p>
                <div class="plan-box">
                    <div class="plan-box-left">
                        <img src="{{ asset('newbie/newbie-2/assets/images/icon-music.svg') }}" alt="" aria-hidden="true">
                        <div class="plan-details">
                            <h2>Annual Plan</h2>
                            <p>$59.99/year</p>
                        </div>
                    </div>
                    <div class="plan-box-right">
                        <a href="#">Change</a>
                    </div>
                </div>
            </div>
            <div class="button-holder">
                <button class="btn payment-btn">Proceed to Payment</button>
                <button class="btn cancel-btn">Cancel Order</button>
            </div>
        </article>
    </main>

</body>

</html>
