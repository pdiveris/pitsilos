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
            // Your custom options
        });
    </script>
@endsection
