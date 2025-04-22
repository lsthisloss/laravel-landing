<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <meta name="description" content="@yield('meta-description', 'Default Description')">
    <meta name="keywords" content="@yield('meta-keywords', 'Default Keywords')">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet"> <!-- Подключение шрифта -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        @include('partials.header')
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
    </footer>
</body>
</html>
