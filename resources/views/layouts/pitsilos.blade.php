@php use App\Models\SettingCached; @endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="theme-dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('partials.search_engines_verifiers')
    @include('feed::links')
    @isset($section)
    <title>{{env('APP_NAME')}} Photography :: {{ $section}}</title>
    @endisset
    @empty($section)
    <title>{{env('APP_NAME')}} Photography</title>
    @endempty

    <meta name='description' content='{!! SettingCached::get('seo_meta_description') ?? '' !!}'>
    <meta name='keywords' content='{!! SettingCached::get('seo_meta_keywords') ?? '' !!}'>
    <link rel="canonical" href="{{ Request::url() }}" />

    <meta property="og:description" content="{!! SettingCached::get('seo_meta_description') ?? '' !!}" />
    <meta property="og:image" content="{{ asset('site_snap.png') }}" />
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:site_name" content="{{env('APP_NAME')}}" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary_large_image" />

    @isset($section)
        <meta property="og:title" content="{{env('APP_NAME')}} Photography :: {{ $section}}" />
        <meta name="twitter:title" content="{{env('APP_NAME')}} Photography :: {{ $section}}" />
    @endisset
    @empty($section)
        <meta property="og:title" content="{{env('APP_NAME')}} Photography" />
        <meta name="twitter:title" content="{{env('APP_NAME')}} Photography" />
    @endempty

    <meta name="twitter:site" content="@{{env('TWITTER_USERNAME')}}" />
    <meta name="twitter:creator" content="@{{env('TWITTER_USERNAME')}}" />
    <meta name="twitter:description" content="{!! SettingCached::get('seo_meta_description') ?? '' !!}" />

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
