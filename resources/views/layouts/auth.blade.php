<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('images/Commit-Logo.png')}} ">
    <title>COMMIT - @yield('title')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <div class="auth-layout">

        <aside class="auth-aside">
            <header class="auth-head">
                <a href="{{ route('home') }}"><i class="bi bi-arrow-left"></i></a>
                <img src="{{ asset('images/Commit-Logo.png') }}" alt="COMMIT Logo" class="logo">
                <p class="navbar-title">COMMIT</p>
            </header>
            <div class="auth-main">
                <h1>Centralise ta scolarité.</h1>
                <h1 class="secondary">Avance avec méthode.</h1>
                <p>Matières, projets, deadlines et objectifs en un seul endroit.</p>
            </div>

            <div class="auth-footer">
                <div class="auth-commit">
                    <p class="text-light">git commit -m</p>
                    <p>"feat: Submit API REST endpoints on time"</p>
                </div>
            </div>
        </aside>

        <main class="auth-form-side hero-glow">
            @yield('main')
        </main>

    </div>
</body>
</html>
