<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="theme-dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @isset($section)
        <title>{{env('APP_NAME')}} :: {{ $section}}</title>
    @endisset
    @empty($section)
        <title>{{env('APP_NAME')}}</title>
    @endempty
    <script src="/js/masonry.pkgd.js"></script>
    @vite(['resources/css/gallery.css', 'resources/js/app.js'])
</head>
<body>
@yield('content')
@include('partials.analytics')
</body>
</html>
