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
                    Nikos Pitsilos
                </h1>
                <p class="subtitle">
                    Wilkommen
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
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img
                                        src="/images/placeholders/41425416240_3fa796ccca_c.jpg"
                                        alt="Placeholder image"
                                    />
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="content">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec
                                    iaculis mauris.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cell">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img
                                        src="/images/placeholders/koko.png"
                                        alt="Placeholder image"
                                    />
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="content">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec
                                    iaculis mauris.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cell">
                        <div class="card">
                            <div class="card-content">
                                <p class="title">
                                    “There are two hard things in computer science: cache invalidation, naming
                                    things, and off-by-one errors.”
                                </p>
                                <p class="subtitle">Jeff Atwood</p>
                            </div>
                            <footer class="card-footer">
                                <p class="card-footer-item">
                                  <span>
                                    View on <a href="https://twitter.com/codinghorror/status/506010907021828096">Twitter</a>
                                  </span>
                                </p>
                                <p class="card-footer-item">
                                    <span> Share on <a href="#">Facebook</a> </span>
                                </p>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
