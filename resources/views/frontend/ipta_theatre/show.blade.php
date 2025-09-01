@extends('frontend.layouts.app')
@section('content')
<div class="inner-page-header">
    <div class="banner">
        <img src="{{ asset('assets/frontend/images/banner/3.jpg') }}" alt="Banner">
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
                        <h1>IPTA THEATRE</h1>
                    </div>
                    <div class="header-page-subtitle">
                        <p>{{ $iptaTheatre->banner_desc }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="single-blog-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="single-image">
                    <img src="{{ $iptaTheatre->main_img ? asset($iptaTheatre->main_img) : asset('assets/frontend/images/single/1.jpg') }}" alt="IPTA Theatre photo">
                </div>
                <h3><a href="#">{{ $iptaTheatre->main_head }}</a></h3>
                <p>{!! $iptaTheatre->main_desc !!}</p>
                <div class="share-section">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 life-style">
                            <span class="author">
                                <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Admin </a>
                            </span>
                            <span class="date">
                                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                {{ $iptaTheatre->created_at ? $iptaTheatre->created_at->format('M d, Y') : '' }}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="like-section">
                    <h3 class="title-bg">YOU MIGHT ALSO LIKE</h3>
                    <div class="row">
                        @foreach($relatedIptaTheatres as $item)
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="popular-post-img">
                                    <a href="{{ route('ipta-theatre.show', $item->slug) }}">
                                        <img src="{{ $item->main_img ? asset($item->main_img) : asset('assets/frontend/images/single/2.jpg') }}" alt="IPTA Theatre photo">
                                    </a>
                                </div>
                                <h4><a href="{{ route('ipta-theatre.show', $item->slug) }}">{{ $item->main_head }}</a></h4>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <!-- Sidebar Start Here -->
                <div class="sidebar-area">
                    <div class="like-box-area">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> <span class="like-page">like our facebook page <br/>210,956 likes</span> <span class="like"><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> <span class="like-page">Follow us on twitter<br/>2109 followers</span> <span class="like">
                            <i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                            <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i> <span class="like-page">Subscribe to our rss <br/>210,956 likes</span> <span class="like"><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                        </ul>
                    </div>
                    <div class="recent-post-area hot-news">
                        <h3 class="title-bg">Recent IPTA Theatres</h3>
                        <ul class="news-post">
                            @foreach($recentIptaTheatres as $item)
                            <li>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                        <div class="item-post">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-right-none">
                                                    <a href="{{ route('ipta-theatre.show', $item->slug) }}"><img src="{{ $item->main_img ? asset($item->main_img) : asset('assets/frontend/images/popular/1.jpg') }}" alt="" title="IPTA Theatre image" /></a>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <h4><a href="{{ route('ipta-theatre.show', $item->slug) }}">{{ $item->main_head }}</a></h4>
                                                    <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> {{ $item->created_at ? $item->created_at->format('M d, Y') : '' }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="trending-post-area">
                        <h3 class="title-bg">Trending IPTA Theatres</h3>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <ul>
                                    @foreach($trendingIptaTheatres as $item)
                                    <li>
                                        <a href="{{ route('ipta-theatre.show', $item->slug) }}" class="hvr-bounce-to-right team-btn">The team</a><br/>
                                        <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> {{ $item->created_at ? $item->created_at->format('M d, Y') : '' }}</span>
                                        <h4><a href="{{ route('ipta-theatre.show', $item->slug) }}">{{ $item->main_head }}</a></h4>
                                        <p>{{ \Illuminate\Support\Str::limit(strip_tags($item->main_desc), 80) }}</p>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="add">
                        <img src="{{ asset('assets/frontend/images/add/4.jpg') }}" alt="Add">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
