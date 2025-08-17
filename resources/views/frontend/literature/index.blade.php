@extends('frontend.layouts.app')
@section('title', 'Literature')
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
                                <li><a href="{{ url('/') }}">Home <i class="fa fa-compress" aria-hidden="true"></i> </a> Literature</li>
                            </ul>
                        </div>
                        <div class="header-page-title">
                            <h1>Literature</h1>
                        </div>
                        <div class="header-page-subtitle">
                            <p>Browse our latest literature: poems, stories, and book reviews.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Page Header section end here -->

    <!-- Literature Page Start Here -->
    <div class="blog-page-area">
        <div class="container">
            <div class="row">
                @forelse($literatures as $item)
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <ul>
                            <li>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="blog-image">
                                        <a href="{{ route('literature.show', [$item->type, $item->slug]) }}">
                                            <i class="fa fa-link" aria-hidden="true"></i>
                                            <img src="{{ $item->images && count($item->images) ? asset($item->images[0]) : asset('assets/frontend/images/blog/default.jpg') }}" alt="Literature photo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <span class="date">
                                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                        {{ $item->created_at ? $item->created_at->format('M d, Y') : '' }}
                                    </span>
                                    <h3>
                                        <a href="{{ route('literature.show', [$item->type, $item->slug]) }}">{{ $item->title }}</a>
                                    </h3>
                                    <span class="badge bg-info">{{ $item->type }}</span>
                                    <p>{{ \Illuminate\Support\Str::limit(strip_tags($item->description), 100) }}</p>
                                    <a href="{{ route('literature.show', [$item->type, $item->slug ]) }}" class="more">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-info">No literature found.</div>
                    </div>
                @endforelse
            </div>
            <div class="d-flex justify-content">
                {{ $literatures->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
@endsection
