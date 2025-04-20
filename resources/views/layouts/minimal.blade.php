<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="theme-dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{env('APP_NAME')}}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=advent-pro:500,600|carlito:400,700|sofia-sans-semi-condensed:400,700,800"
          rel="stylesheet" />

    <link href="/css/fond.css" rel="stylesheet" />
    @include('partials.search_engines_verifiers')

    @vite(['resources/css/gallery.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/uhugrid/plug.min.js" defer></script>
</head>
<body>
    @yield('content')
    @include('partials.analytics')
</body>
</html>
