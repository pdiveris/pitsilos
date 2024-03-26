<!-- resources/views/slide.blade.php -->

@extends('layouts.pitsilos')

@section('content')
        <section class="section">
                <div class="columns">
                    <div class="column is-one-fifth"></div>
                    <div class="column">
                        <a href="{{ url('gallery', [Str::lower($slide->name)]) }}">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-4by3">
                                        <img src="{{url("storage/$slide->image") }}">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="content">
                                        <h1>{{ $slide->name }}</h1>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="column is-one-fifth"></div>
                </div>
        </section>
@endsection
