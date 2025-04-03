@extends('layouts.test')
@section('content')
<div class="container">
    <div class="grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": 200 }'>
        @foreach($media as $tile)
            <div class="grid-item">
                <img
                    style="max-width: 200px;"
                    src="{{url("storage/$tile->image")}}"
                    data-fancybox="gallery"
                    data-caption="{{ $tile->title }}"
                    data-download-src="{{url("storage/$tile->image")}}"
                >
            </div>
        @endforeach
    </div>
</div>
@endsection
