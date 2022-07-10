<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="navbar ">
        @include('partials.navbar')
    </div>
    <div class="container card__content">
        @yield('content')
    </div>
    {{-- <div class="back__btn">
        @yield('back')
    </div> --}}

    <footer class="footer">
        <span class="footer__copy">
            &#169;Miyuna. All rights reserved
        </span>
    </footer>
</body>
</html>