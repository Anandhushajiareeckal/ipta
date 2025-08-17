@extends('frontend.layouts.app')
@section('content')
    <div class="blog-page-area gallery-page gellary-area">
        <div class="container">
            <h1 class="text-center mb-4">Videos</h1>
            <div class="row">
                @forelse($videos as $video)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb-4">
                        <div class="single-gellary">
                            <div class="image">
                                <iframe width="100%" height="220" src="{{ $video->url }}" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <h3 class="mt-2 text-center">{{ $video->title }}</h3>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p>No videos available.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
