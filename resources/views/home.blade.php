<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMMIT - Home</title>
</head>
<body>
    <h1>Home</h1>
    <a href="{{ route('registerpage') }}">Create an account</a>

    <br><br>
    <br><br>

    <form action=" {{ route('formsubmitted') }} " method="post">
        @csrf <!-- CSRF token for security -->
        <label for="name">Full name:</label>
        <input type="text" name="name" id="name" placeholder="Enter your name" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="Enter your email" required>
        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
