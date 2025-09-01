@extends('frontend.layouts.app')
@section('content')
    <!-- Inner Page Header serction start here -->
    <div class="inner-page-header">
        <div class="banner">
            <img src="{{ asset('assets/frontend/images/banner/3.jpg')}}" alt="Banner">
        </div>
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-page-locator">
                            <ul>
                                <li><a href="{{ url('/') }}">Home <i class="fa fa-compress" aria-hidden="true"></i> </a> Blog
                                    Post</li>
                            </ul>
                        </div>
                        <div class="header-page-title">
                            <h1>Blog</h1>
                        </div>
                        <div class="header-page-subtitle">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered
                                <br>alteration in some form, by injected humou
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Page Header serction end here -->

    <!-- Blog Page Start Here -->
    <div class="blog-page-area">
        <div class="container">
            <div class="row">
                @forelse($news as $item)
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <ul>
                            <li>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="blog-image">
                                        <a href="{{ route('news.show', $item->slug) }}">
                                            {{-- <i class="fa fa-link" aria-hidden="true"></i> --}}
                                            <img src="{{ $item->main_img ? asset($item->main_img) : asset('assets/frontend/images/blog/default.jpg') }}" alt="Blog photo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <span class="date">
                                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                        {{ $item->created_at ? $item->created_at->format('M d, Y') : '' }}
                                    </span>
                                    <h3>
                                        <a href="{{ route('news.show', $item->slug) }}">{{ $item->main_head }}</a>
                                    </h3>
                                    {{-- <span class="admin">
                                        <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Admin</a>
                                    </span>
                                    <span class="like">
                                        <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 0 </a>
                                    </span> --}}
                                    <p>{{ \Illuminate\Support\Str::limit(strip_tags($item->main_desc), 100) }}</p>
                                    <a href="{{ route('news.show', $item->slug) }}" class="more">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                @empty
                    <div class="col-12">
                        <p class="text-center">No news found.</p>
                    </div>
                @endforelse
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="pagination-area">
                        {{ $news->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Page End Here -->
@endsection
