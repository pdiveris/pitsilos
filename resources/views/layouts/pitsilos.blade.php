<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="theme-dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('partials.search_engines_verifiers')
    @include('feed::links')
    @isset($section)
    <title>{{env('APP_NAME')}} :: {{ $section}}</title>
    @endisset
    @empty($section)
    <title>{{env('APP_NAME')}}</title>
    @endempty
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=advent-pro:500,600|carlito:400,700|sofia-sans-semi-condensed:400,700,800"
          rel="stylesheet" />

    <link href="/css/fond.css" rel="stylesheet" />

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
    />
    @vite(['resources/css/gallery.css', 'resources/js/app.js'])
    <script src="/js/imagesloaded.pkgd.min.js"></script>
    <script src="/js/masonry.pkgd.js"></script>
</head>
<body>
@include('partials.header')
<section class="section hero is-fullheight">
    @yield('content')
    @include('partials.footer')
</section>
@include('partials.analytics')
</body>
</html>
