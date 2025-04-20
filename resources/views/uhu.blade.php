@php use App\Models\SettingCached; @endphp
@extends('layouts.minimal')
@section('content')

    @foreach($media as $tile)
        <div class="gallery">
            <div class="gallery__item">
                <img
                    title="{{$tile->title}}"
                    alt="{{$tile->description}} - {!! SettingCached::get('seo_site_title') ?? '' !!}"
                    src="{{url("storage/$tile->image")}}"
                    data-fancybox="gallery"
                    data-caption="{{ $tile->title }}"
                    data-download-src="{{url("storage/$tile->image")}}"
                >
            </div>
        </div>
    @endforeach
    <script>
        Fancybox.bind("[data-fancyboxa]", {
            Thumbs: {
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
        uhu(5,10);
    </script>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .slider {
            display: grid;
            place-items: center;
            grid-auto-flow: row;
            padding: 1rem;
        }
        .sizerange,
        .heightrange {
            display: flex;
            justify-items: center;
            align-items: center;
            padding: 1rem;
        }
        .sizerange input,
        .heightrange input {
            border: none;
            outline: none;
            appearance: none;
            background-color: black;
            height: 1px;
        }
        .update {
            border: none;
            outline: none;
            padding: 1em;
        }

        .gallery {
            max-width: 100vw;
            /* grid-gap: 1rem 0; */
            /* border-right: 1rem solid white; */
        }
        .gallery__item {
            /* border-right: 1em solid white; */
        }
        .gallery__item img:hover {
            cursor: pointer;
            opacity: 0.5;
            transition: all 0.2s ease-in-out;
        }
    </style>
@endsection
