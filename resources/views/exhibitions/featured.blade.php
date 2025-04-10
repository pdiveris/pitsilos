<!-- resources/views/page.blade.php -->

@extends('layouts.pitsilos')

@section('content')
    <style>
    </style>
    <section class="section">
        <div class="columns">
            <div class="column is-one-fifth"></div>
            <div class="column">
                <h1 class="title carlito_fat has-text-grey is-size-5-mobile">
                    {{ $page->title }}
                </h1>
                <p class="is-size-5-desktop carlito">
                    @markdown($page->content)
                </p>
            </div>
            <div class="column is-one-fifth"></div>
        </div>
    </section>
@endsection
