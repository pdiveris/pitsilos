<!-- resources/views/home.blade.php -->

@extends('layouts.pitsilos')

@section('content')
    <section class="section">
        <div class="container">

            <div class="grid">
            @foreach($galleries as $gallery)
                <div class="cell">
                    <a href="{{ url('gallery', [Str::lower($gallery->name)]) }}">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="{{url("storage/$gallery->image") }}">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="content neso">
                                    <h2>{{ $gallery->name }}</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            </div>
        </div>
    </section>
@endsection
