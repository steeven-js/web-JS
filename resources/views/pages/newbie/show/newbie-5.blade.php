<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NFT preview card component</title>
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('newbie/newbie-5/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/arrow-links.css') }}">
</head>

<body>

    <x-arrow-links :previous-newbie="$previousNewbie" :next-newbie="$nextNewbie" />

    <div class="container">
        <div class="wrapper">
            <div class="img-top">
                <img src="https://digitshack.com/codepen/mentor10/image-equilibrium.jpg" alt="">
                <div class="img-overlay">
                    <img src="https://digitshack.com/codepen/mentor10/icon-view.svg" alt="">
                </div>
            </div>
            <div class="box-text">
                <a href="#">Equilibrium #3429</a>
                <p>Our Equilibrium collection promotes balance and calm.</p>
                <div class="flex">
                    <div class="eth">
                        <img src="https://digitshack.com/codepen/mentor10/icon-ethereum.svg" alt="">
                        <p>0.041 ETH</p>
                    </div>
                    <div class="days">
                        <img src="https://digitshack.com/codepen/mentor10/icon-clock.svg" alt="">
                        <p>3 days left</p>
                    </div>
                </div>
                <hr>
                <div class="author">
                    <img src="https://digitshack.com/codepen/mentor10/image-avatar.png" alt="">
                    <p>Creation of <a href="#" class="name">Jules Wyvern</a></p>
                </div>
            </div>
        </div>
    </div>
    {{-- <a href="https://youtu.be/l6sxh57ifSQ" target="_blank" class="link">Watch on youtube <i
            class="fab fa-youtube"></i></a> --}}
</body>

</html>
