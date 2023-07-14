<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- displays site properly based on user's device -->

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('newbie/newbie-3/assets/images/favicon-32x32.png') }}" />

    <title>Interactive rating component</title>

    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('newbie/newbie-3/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/arrow-links.css') }}">
</head>

<body>
    <x-arrow-links :previous-newbie="$previousNewbie" :next-newbie="$nextNewbie" />

    {{-- <p class="disclaimer">
        This demo is a bit different from the one we build in the YouTube video.
        However the functionality is still the same and you should be able to
        follow along.
    </p> --}}
    <!-- Rating state start -->
    <div class="container">
        <img src="{{ asset('newbie/newbie-3/assets/images/icon-star.svg') }}" alt="" />
        <h1>How did we do?</h1>

        <p>
            Please let us know how we did with your support request. All feedback is
            appreciated to help us improve our offering!
        </p>

        <ul>
            <li><button class="btn">1</button></li>
            <li><button class="btn">2</button></li>
            <li><button class="btn">3</button></li>
            <li><button class="btn">4</button></li>
            <li><button class="btn">5</button></li>
        </ul>

        <button class="btn-submit" id="submit-rating">Submit</button>
    </div>
    <!-- Rating state end -->

    <!-- Thank you state start -->
    <div class="thank-you hidden">
        <img src="./images/illustration-thank-you.svg" alt="" />
        <p class="gray">
            You selected
            <span id="rating" style="display: inline-block; margin: 0 0.3rem">1</span>
            out of 5
        </p>

        <h2>Thank you!</h2>

        <p>
            We appreciate you taking the time to give a rating. If you ever need
            more support, don’t hesitate to get in touch!
        </p>

        <button class="btn-submit" id="rate-again">Rate Again</button>
    </div>
    <!-- Thank you state end -->

    {{-- <div class="attribution">
        Challenge by
        <a href="https://www.frontendmentor.io?ref=challenge" target="_blank" rel="noreferrer">Frontend Mentor</a>.
        Coded by
        <a href="https://web.jsprod.fr" target="_blank" rel="noreferrer">Steeven Jacques</a>.
    </div> --}}

    <script src="index.js"></script>
</body>

</html>