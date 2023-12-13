<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<header>
    <!-- Contenu de l'en-tête ici -->
    <h1>
    <p><a href="{{ url('/') }}">Home page</a></p>
    <p><a href="{{ url('/movie') }}">Movies List</a></p>
    </h1>
</header>

<div class="content">
    @yield('content')
</div>


</body>
</html>
