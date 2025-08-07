@extends('frontend.layouts.app')
@section('content')
<!-- Inner Page Header serction start here -->
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
                                <li><a href="{{ url('/') }}">Home <i class="fa fa-compress" aria-hidden="true"></i> </a> News</li>
                            </ul>
                        </div>
                        <div class="header-page-title">
                            <h1>NEWS</h1>
                        </div>
                        <div class="header-page-subtitle">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                <br>alteration in some form, by injected humou</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Page Header serction end here -->
 <!-- Blog Single Start Here -->
    <div class="single-blog-page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="single-image">
                        <img src="{{ $news->main_img ? asset($news->main_img) : asset('assets/frontend/images/single/1.jpg') }}" alt="Blog single photo">
                    </div>
                    <h3><a href="#">{{ $news->main_head }}</a></h3>
                    <p>{!! $news->main_desc !!}</p>
                    <div class="share-section">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 life-style">
                                <span class="date">
                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                    {{ $news->created_at ? $news->created_at->format('M d, Y') : '' }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="like-section">
                        <h3 class="title-bg">YOU MIGHT ALSO LIKE</h3>
                        <div class="row">
                            @foreach($relatedNews as $item)
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="popular-post-img">
                                        <a href="{{ route(' news.show', $item->slug) }}">
                                            <img src="{{ $item->main_img ? asset($item->main_img) : asset('assets/frontend/images/single/2.jpg') }}" alt="Blog single photo">
                                        </a>
                                    </div>
                                    <h3>
                                        <a href="{{ route(' news.show', $item->slug) }}">{{ $item->main_head }}</a>
                                    </h3>
                                    <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> {{ $item->created_at ? $item->created_at->format('M d, Y') : '' }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <!-- Blog Single Sidebar Start Here -->
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
                            <h3 class="title-bg">Recent Post</h3>
                            <ul class="news-post">
                                @foreach($recentNews as $item)
                                <li>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                            <div class="item-post">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-right-none">
                                                        <a href="{{ route(' news.show', $item->slug) }}"><img src="{{ $item->main_img ? asset($item->main_img) : asset('assets/frontend/images/popular/1.jpg') }}" alt="" title="News image" /></a>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <h4><a href="{{ route(' news.show', $item->slug) }}">{{ $item->main_head }}</a></h4>
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
                            <h3 class="title-bg">Trending Post</h3>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <ul>
                                        @foreach($trendingNews as $item)
                                        <li>
                                            <a href="{{ route(' news.show', $item->slug) }}" class="hvr-bounce-to-right team-btn">The team</a><br/>
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> {{ $item->created_at ? $item->created_at->format('M d, Y') : '' }}</span>
                                            <h4><a href="{{ route(' news.show', $item->slug) }}">{{ $item->main_head }}</a></h4>
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
    <!-- Blog Details Page end here -->
@endsection