<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('newbie/newbie-7/assets/images/favicon-32x32.png') }}" />
    <link rel="stylesheet" href="style.css" />
    <title>Stats preview card component</title>
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('newbie/newbie-7/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/arrow-links.css') }}">

<body>

    <x-arrow-links :previous-newbie="$previousNewbie" :next-newbie="$nextNewbie" />

    <main>
        <section>
            <h1>Get <span>insights</span> that help your business grow.</h1>
            <div class="content">
                <p class="lead">
                    Discover the benefits of data analytics and make better decisions
                    regarding revenue, customer experience, and overall efficiency.
                </p>
                <ul>
                    <li>
                        <h2>10k+</h2>
                        <p>companies</p>
                    </li>
                    <li>
                        <h2>314</h2>
                        <p>templates</p>
                    </li>
                    <li>
                        <h2>12M+</h2>
                        <p>queries</p>
                    </li>
                </ul>
            </div>
        </section>
        <div class="bg-img">
            <div class="overlay">
                <div class="overlay-2"></div>
            </div>
        </div>
    </main>
    {{-- <footer class="attribution">
        <p>
            Challenge by
            <a href="https://www.frontendmentor.io/challenges/stats-preview-card-component-8JqbgoU62">Frontend
                Mentor</a>.
        </p>
        <p>
            Coded by
            <a href="https://web.jsprod.fr">Steeven Jacques</a>.
        </p>
    </footer> --}}
</body>

</html>
