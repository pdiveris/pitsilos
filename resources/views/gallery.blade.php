<!-- resources/views/gallery.blade.php -->

@extends('layouts.pitsilos')

@section('content')
    <section class="section">
        <div class="container">
            <div class="grid">
                @foreach($media as $tile)
                    <div class="cell">
                        <a href="{{ url('slide', [Str::lower($tile->slug)]) }}">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-4by3">
                                        <img
                                            src="{{url("storage/$tile->image")}}"
                                            data-fancybox="gallery"
                                            data-caption="{{ $tile->title }}"
                                            data-download-src="{{url("storage/$tile->image")}}"
                                        >
                                    </figure>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <script>
        Fancybox.bind("[data-fancybox]", {
            Thumbs : {
                showOnStart: false,
            },
            Toolbar: {
                display: {
                    left: ["infobar"],
                    middle: [],
                    right: ["toggleZoom", "slideshow", "fullscreen", "download", "thumbs", "close"],
                },
            },
        });

    </script>
@endsection
