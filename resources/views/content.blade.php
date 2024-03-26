<!-- resources/views/page.blade.php -->

@extends('layouts.pitsilos')

@section('content')
        <section class="section">
                <div class="columns">
                    <div class="column is-one-fifth"></div>
                    <div class="column">
                        <h1 class="title">{{ $page->title }}</h1>
                        <p class="is-size-5-desktop">
                            @markdown($page->content)
                        </p>
                    </div>
                    <div class="column is-one-fifth"></div>
                </div>
        </section>
@endsection
