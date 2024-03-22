<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="theme-light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{env('APP_NAME')}}</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/gallery.css', 'resources/js/app.js'])

        <script>
            function themeSwitch() {
                let root = document.getElementsByTagName( 'html' )[0];

                root.setAttribute( 'class', 'theme-dark' );
            }
        </script>
    </head>
    <body>
        <section class="section" >
            <div class="container" >
                <h1 class="title">
                    Hello World
                </h1>
                <p class="subtitle">
                    My first website with <strong>Bulma</strong>!
                </p>
                <p>
                    <button class="button is-primary" onclick="themeSwitch()">
                        Switch Mode
                    </button>
                    <button class="button is-link">Button</button>
                    <button class="button is-info">Button</button>
                    <button class="button is-success">Button</button>
                    <button class="button is-warning">Button</button>
                    <button class="button is-danger">Button</button>
                </p>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <!-- After -->
                <div class="grid">
                    <div class="cell">
                        <article class="box">
                            <p class="title">Hello World</p>
                            <p class="subtitle">What is up?</p>
                        </article>
                    </div>
                    <div class="cell">
                        <article class="box">
                            <p class="title">Foo</p>
                            <p class="subtitle">Bar</p>
                        </article>
                    </div>
                    <div class="cell">
                        <article class="box">
                            <p class="title">Foo</p>
                            <p class="subtitle">Bar</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
