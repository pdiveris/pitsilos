<!-- resources/views/home.blade.php -->

@extends('layouts.pitsilos')

@section('content')
    <section class="section">
        <div class="container">
            <div class="grid">
            @foreach($galleries as $gallery)
                <div class="cell">
                    <a href="{{ url('gallery', [Str::lower($gallery->name)]) }}">
                        <div class="cards">
                            <div class="card-image" >
                                <figure style="text-align: center" >
                                    <img src="{{url("storage/$gallery->image") }}"
                                         style="max-height: 420px;"
                                    >
                                    <div class="content sofia_fat has-text-grey is-size-5-mobile">
                                        <h2 class="is-size-5-mobile has-text-grey">{{ $gallery->name }}</h2>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            </div>
        </div>
    </section>
@endsection
