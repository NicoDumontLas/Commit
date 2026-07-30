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
                        <li><a href="#fonctionalites">Fonctionnalités</a></li>
                        <li><a href="#howto">Comment ça marche</a></li>
                        <!--
                        TODO rajouter les navlinks plutard
                        <li><a href="#">À propos</a></li>
                        <li><a href="#">FAQ</a></li>

                        -->
                        <!--TODO -FIN BOUTON POUR DAYLIGHT MODE <button class="btntoggle-darkmode" id="theme-switch"><i class="bi bi-brightness-low-fill"></i></button> -->
                    </ul>
                </div>

                <div class="navbar-right">
                    <a href="{{ route('login') }}" class="btn-log">Se connecter</a>
                    <a href="{{ route('register') }}" class="btn-sign">Commencer<i class="bi bi-arrow-up-right"></i></a>
                </div>
        </nav>
    </header>

    <main class="hero-glow">
        @yield('main')
    </main>

    <footer>
        <div class="footer">
            <div class="footer-left">
                <img src="{{ asset('images/Commit-Logo.png') }}" alt="COMMIT Logo" class="logosmall">
                <p>COMMIT</p>
            </div>
            <div class="footer-center">
                <p>&copy;2026 Tout droits réservés.</p>
            </div>
            <div class="footer-right">
                <p>Conçu pour les étudiants</p>
            </div>
        </div>
    </footer>
</body>
</html>
