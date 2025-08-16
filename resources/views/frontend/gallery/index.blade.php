@extends('frontend.layouts.app')
@section('content')
    <div class="blog-page-area gellary-area-main gallery-page gellary-area">
        <div class="container">
            <div class="row">
                @foreach ($galleries as $gallery)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div id="news-Carousel" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <!-- Left and right controls -->
                            <div class="next-prev">
                                <a class="left news-control" href="#news-Carousel" data-slide="prev">
                                    <span class="news-arrow-left"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                                </a>
                                <a class="right news-control" href="#news-Carousel" data-slide="next">
                                    <span class="news-arrow-right"><i class="fa fa-angle-right"
                                            aria-hidden="true"></i></span>
                                </a>
                            </div>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <ul>
                                        <li>
                                            <div class="single-gellary">
                                                <div class="image">
                                                    @if(isset($gallery->images[0]))
                                                        <img src="{{ asset($gallery->images[0]) }}" alt="{{ $gallery->title }}">
                                                    @else
                                                        <img src="{{ asset('assets/frontend/images/no-image.jpg') }}" alt="No Image">
                                                    @endif
                                                    <div class="overley">
                                                        <ul>
                                                            <li><a href="{{ route('gallery.show', $gallery->slug) }}"><i class="fa fa-link"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="images/gallery/1.jpg" data-lightbox="example-set"
                                                                    data-title="Image Title"><i class="fa fa-search"
                                                                        aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </li>
                                    </ul>
                                </div>
                                @foreach ( collect($gallery->images)->take(5) as $image )
                                <div class="item">
                                    <ul>
                                        <li>
                                            <div class="single-gellary">
                                                <div class="image">
                                                    <img src="{{ asset($image) }}"
                                                        alt="">
                                                    <div class="overley">
                                                        <ul>
                                                            <li><a href="gallery-single.html"><i class="fa fa-link"
                                                                        aria-hidden="true"></i></a></li>
                                                            <li><a href="images/gallery/3.jpg" data-lightbox="example-set"
                                                                    data-title="Image Title"><i class="fa fa-search"
                                                                        aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                @endforeach

                                <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i> {{ $gallery->created_at->format('M d, Y') }}</span>
                                <h3><a href="{{ route('gallery.show', $gallery->slug) }}">{{ $gallery->title }}</a></h3>
                                <a href="{{ route('gallery.show', $gallery->slug) }}" class="more">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="pagination-area">
                        {{ $galleries->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
