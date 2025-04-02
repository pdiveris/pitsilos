<!-- resources/views/gallery.blade.php -->

@extends('layouts.pitsilos')

@section('content')
        <div class="container">
            <div class="grid">
                @foreach($media as $tile)
                    <div class="cell">
                        <a href="{{ url('slide', [Str::lower($tile->slug)]) }}">
                            <div class="cardsaa">
                                <div class="card-image">
                                    <figure style="text-align: center">
                                        <img
                                            style="max-height: 172px;"
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
    <script>
        Fancybox.bind("[data-fancybox]", {
            Thumbs : {
                showOnStart: false,
            },
            Toolbar: {
                items: {
                    facebook: {
                        tpl: `<button class="f-button"><svg><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg></button>`,
                        click: () => {
                            window.open(
                                `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(
                                    window.location.href
                                )}&t=${encodeURIComponent(document.title)}`,
                                "",
                                "left=0,top=0,width=600,height=300,menubar=no,toolbar=no,resizable=yes,scrollbars=yes"
                            );
                        },
                    },
                },
                display: {
                    left: ["infobar"],
                    middle: [],
                    right: ["toggleZoom", "slideshow", "fullscreen", "download", "facebook", "close"],
                },
            },
        });
    </script>
@endsection
