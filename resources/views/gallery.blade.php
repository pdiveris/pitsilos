<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="theme-dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{env('APP_NAME')}}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <link rel="stylesheet" href="/css/lightgallery.css">
    <link rel="stylesheet" href="/js/lightgallery.js">
    @vite(['resources/css/gallery.css', 'resources/js/app.js'])

    <script>
        function themeSwitch() {
            let root = document.getElementsByTagName( 'html' )[0];
            if (root.getAttribute('class') === 'theme-dark') {
                root.setAttribute('class', 'theme-light');
            } else {
                root.setAttribute('class', 'theme-dark');
            }
        }
    </script>
</head>
<body>
<section class="section" >
    <div class="container" >
        <h1 class="title">
            Nikos Pitsilos
        </h1>
        <p class="subtitle">
            Wilkommen
        </p>
        <p>
            <button class="button is-primary" onclick="themeSwitch()">
                Switch Mode
            </button>
            {{--
                                <button class="button is-link">Button</button>
                                <button class="button is-info">Button</button>
                                <button class="button is-success">Button</button>
                                <button class="button is-warning">Button</button>
                                <button class="button is-danger">Button</button>
            --}}
        </p>
    </div>
</section>
<section>
    <div id="pako">
        <a href="/storage/23.jpg">
            <img src="/storage/23.jpg" width="400px;">
        </a>
        <a href="/storage/23.jpg">
            <img src="/storage/23.jpg" width="400px;">
        </a>
        ...
    </div>
</section>
{{--
        <section class="section">
            <div id="lightgallery1">
                <div class="container">
                    <div class="grid">
                            @foreach($media as $tile)
                            <div class="cell">
                                <a href="{{ url('slide', [Str::lower($tile->slug)]) }}">
                                    <div class="card">
                                        <div class="card-image">
                                            <figure class="image is-4by3">
                                                <img src="{{url("storage/$tile->image")}}">
                                            </figure>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                </div>
            </div>
        </section>
--}}
</body>
<script>
    alert('asas');
    lightGallery(document.getElementById('pako'));
</script>
</html>
