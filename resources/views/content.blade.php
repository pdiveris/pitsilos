<!-- resources/views/page.blade.php -->

@extends('layouts.pitsilos')

@section('content')
    <section class="section">
        <div class="columns">
            <div class="column is-one-fifth"></div>
            <div class="column verdana">
                <h1 class="title alef has-text-grey is-size-5-mobile">{{ $page->title }}</h1>
                <p class="is-size-5-desktop alef">
                    @markdown($page->content)
                </p>
            </div>
            <div class="column is-one-fifth"></div>
        </div>
    </section>
@endsection
