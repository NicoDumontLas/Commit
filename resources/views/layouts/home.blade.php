<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('images/Commit-Logo.png')}}">
    <title>COMMIT - @yield('title')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="">
    <header>
        <nav class="navbar">
                <a class="navbar-left" href="{{ route('home') }}">
                    <img src="{{ asset('images/Commit-Logo.png') }}" alt="COMMIT Logo" class="logo">
                    <p class="navbar-title">COMMIT</p>
                </a>

                <div class="navbar-center">
                    <ul>
                        <li><a href="#">Fonctionnalités</a></li>
                        <li><a href="#">Comment ça marche</a></li>
                        <li><a href="#">À propos</a></li>
                        <li><a href="#">FAQ</a></li>
                        <button class="btntoggle-darkmode" id="theme-switch"><i class="bi bi-brightness-low-fill"></i></button>
                    </ul>
                </div>

                <div class="navbar-right">
                    <button class="btn-log">Se connecter</button>
                    <button class="btn-sign">Commencer<i class="bi bi-arrow-up-right"></i></button>
                </div>
        </nav>
    </header>

    <main>
        @yield('main')
    </main>

    <footer>
        <p>&copy; 2026 COMMIT. All rights reserved.</p>
    </footer>
</body>
</html>
