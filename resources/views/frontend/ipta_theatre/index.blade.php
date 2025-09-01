@extends('frontend.layouts.app')
@section('content')
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
                            <li><a href="{{ url('/') }}">Home <i class="fa fa-compress" aria-hidden="true"></i> </a> IPTA Theatre</li>
                        </ul>
                    </div>
                    <div class="header-page-title">
                        <h1>IPTA Theatre</h1>
                    </div>
                    <div class="header-page-subtitle">
                        <p>Browse our latest IPTA Theatre posts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog-page-area">
    <div class="container">
        <div class="row">
            @forelse($iptaTheatres as $item)
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <ul>
                        <li>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="blog-image">
                                    <a href="{{ route('ipta-theatre.show', $item->slug) }}">
                                        <img src="{{ $item->main_img ? asset($item->main_img) : asset('assets/frontend/images/blog/default.jpg') }}" alt="IPTA Theatre photo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <span class="date">
                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                    {{ $item->created_at ? $item->created_at->format('M d, Y') : '' }}
                                </span>
                                <h3>
                                    <a href="{{ route('ipta-theatre.show', $item->slug) }}">{{ $item->main_head }}</a>
                                </h3>
                                <p>{{ \Illuminate\Support\Str::limit(strip_tags($item->main_desc), 100) }}</p>
                                <a href="{{ route('ipta-theatre.show', $item->slug) }}" class="more">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info">No IPTA Theatre found.</div>
                </div>
            @endforelse
        </div>
        <div class="d-flex justify-content">
            {{ $iptaTheatres->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
@endsection
