<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR-code-component</title>

    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('newbie/newbie-4/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/arrow-links.css') }}">
</head>

<body>

    <x-arrow-links :previous-newbie="$previousNewbie" :next-newbie="$nextNewbie" />

    <div class="container">
        <div class="card">
            <img src="https://digitshack.com/codepen/mentor11/image-qr-code.png" alt="">
            <div class="text">
                <h2>Improve your front-end skills by building projects</h2>
                <p>Scan the QR code to visit Frontend Mentor and take your coding skills to the next level</p>
            </div>
        </div>
    </div>

    {{-- <a href="https://youtu.be/5BBYPntB-GY" target="_blank" class="link">Watch on youtube <i
        class="fab fa-youtube"></i></a> --}}

</body>

</html>
