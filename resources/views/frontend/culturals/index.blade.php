@extends('frontend.layouts.app')
@section('content')
    <!-- Inner Page Header section start here -->
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
                                <li><a href="{{ url('/') }}">Home <i class="fa fa-compress" aria-hidden="true"></i> </a> Culturals</li>
                            </ul>
                        </div>
                        <div class="header-page-title">
                            <h1>Culturals</h1>
                        </div>
                        <div class="header-page-subtitle">
                            <p>Browse our latest cultural events and updates.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Page Header section end here -->

    <!-- Culturals Page Start Here -->
    <div class="blog-page-area">
        <div class="container">
            <div class="row">
                @forelse($culturals as $item)
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <ul>
                            <li>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="blog-image">
                                        <a href="{{ route('culturals.show', $item->slug) }}">
                                            <i class="fa fa-link" aria-hidden="true"></i>
                                            <img src="{{ $item->main_img ? asset($item->main_img) : asset('assets/frontend/images/blog/default.jpg') }}" alt="Cultural photo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <span class="date">
                                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                        {{ $item->created_at ? $item->created_at->format('M d, Y') : '' }}
                                    </span>
                                    <h3>
                                        <a href="{{ route('culturals.show', $item->slug) }}">{{ $item->main_head }}</a>
                                    </h3>
                                    <span class="admin">
                                        <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Admin</a>
                                    </span>
                                    <span class="like">
                                        <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 0 </a>
                                    </span>
                                    <p>{{ \Illuminate\Support\Str::limit(strip_tags($item->main_desc), 100) }}</p>
                                    <a href="{{ route('culturals.show', $item->slug) }}" class="more">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                @empty
                    <div class="col-12">
                        <p class="text-center">No culturals found.</p>
                    </div>
                @endforelse
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="pagination-area">
                        {{ $culturals->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Culturals Page End Here -->
@endsection
