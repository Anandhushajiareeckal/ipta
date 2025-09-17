@extends('frontend.layouts.app')
@section('content')
    <div class="blog-page-area gallery-page gellary-area">
        <div class="container">
            <h1 class="text-center">{{ $chithralokam->title }}</h1>
            <div class="row">
                @forelse ((array) $chithralokam->images as $image)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-gellary">
                            <div class="image">
                                <img src="{{ asset($image) }}" alt="">
                                <div class="overley">
                                    <ul>
                                        <li><a href="{{ asset($image) }}" data-lightbox="example-set"
                                                ><i class="fa fa-search" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p>No images available for this chithralokam.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection