<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- displays site properly based on user's device -->

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('newbie/newbie-9/assets/images/favicon-32x32.png') }}">

    <title>Profile card component</title>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('newbie/newbie-9/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/arrow-links.css') }}">

<body>

    <x-arrow-links :previous-newbie="$previousNewbie" :next-newbie="$nextNewbie" />

    <div class="card">
        <div class="card-header">
            <img src="{{ asset('newbie/newbie-9/assets/images/bg-pattern-card.svg') }}" alt="">
        </div>
        <div class="card-content">
            <img src="{{ asset('newbie/newbie-9/assets/images/image-victor.jpg') }}" alt="">
            <p>Victor Crest<span> 26</span></p>
            <p>London</p>
        </div>
        <div class="card-footer">
            <div class="footer-item">
                <p class="status">80K</p>
                <small class="item-name">Followers</small>
            </div>
            <div class="footer-item">
                <p class="status">803K</p>
                <small class="item-name">Likes</small>
            </div>
            <div class="footer-item">
                <p class="status">1.4K</p>
                <p class="item-name">Photos</p>
            </div>
        </div>
    </div>

    {{-- <div class="attribution">
        Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>.
        Coded by <a href="https://github.com/murerkinn" target="_blank">Steeven Jacques</a>.
    </div> --}}
</body>

</html>
