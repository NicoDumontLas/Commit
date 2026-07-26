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
    <header>
        <h1>This is The header</h1>
    </header>

    <main>
        @yield('main')
    </main>

    <footer>
        <p>&copy; 2026 COMMIT. All rights reserved.</p>
    </footer>
</body>
</html>
