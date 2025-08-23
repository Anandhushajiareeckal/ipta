@extends('frontend.layouts.app')
@section('content')
    <!--Header area end here-->
    <!-- Slider Section Start Here -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0">
                <div class="wrapper">
                    <!-- News Slider -->
                    <div class="ticker marg-botm">
                        <div class="ticker-wrap">
                            <!-- News Slider Title -->
                            <div class="ticker-head up-case backg-colr col-md-2">Breaking News <i
                                    class="fa fa-angle-double-right" aria-hidden="true"></i></div>
                            <div class="tickers col-md-10">
                                <div id="top-news-slider" class="owl-carousel ">
                                    @foreach ($breakingNews as $news)
                                        <div class="item">
                                            <a href="{{ route('news.show', $news->slug) }}">
                                                <img src="{{ $news->main_img ? asset($news->main_img) : asset('assets/frontend/images/breaking/1.jpg') }}"
                                                    alt="news image">
                                                <span>{{ \Illuminate\Support\Str::limit($news->main_head, 30) }}</span>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End News Slider -->
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 padding-0">
                <div class="slider-area">
                    <div class="bend niceties preview-2">
                        <div id="ensign-nivoslider" class="slides">
                            @foreach ($latestBlogs as $blog)
                                <img src="{{ $blog->main_img }}" alt=""
                                    title="#slider-direction-{{ $blog->id }}" />
                            @endforeach
                        </div>
                        <!-- direction 2 -->
                        @foreach ($latestBlogs as $blog)
                            <div id="slider-direction-{{ $blog->id }}" class="slider-direction">
                                <div class="slider-content t-cn s-tb slider-{{ $blog->id }}">
                                    <div class="title-container s-tb-c">
                                        <div class="slider-botton">
                                            <ul>
                                                <li>
                                                    {{-- <a class="cat-link" href="category.html">Business</a> --}}
                                                    <span class="date">
                                                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                        {{ $blog->created_at ? $blog->created_at->format('M d, Y') : '' }}
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <h1 class="title1">
                                            <a href="{{ route('blog.show', $blog->slug) }}">
                                                <span>{{ Str::before($blog->main_head, ' ') }}</span><br>
                                                {{ Str::words(Str::after($blog->main_head, ' '), 6, '...') }}
                                            </a>
                                        </h1>

                                        <div class="title2">
                                            {{ Str::words(strip_tags($blog->main_desc), 10, '...') }} </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Slider Area End Here-->
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-left-none">
                <div class="slider-right">
                    <ul>
                        @foreach ($latestArticles as $latestArticle)
                            <li>
                                <div class="right-content">
                                    <span class="category"><a class="cat-link"
                                            href="{{ route('articles', $latestArticle->slug) }}">Articles</a></span>
                                    <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true">
                                        </i>{{ $latestArticle->created_at ? $latestArticle->created_at->format('M d, Y') : '' }}</span>
                                    <h3><a
                                            href="blog-single.html">{{ Str::words(strip_tags($latestArticle->main_head), 10, '...') }}</a>
                                    </h3>
                                </div>
                                <div class="right-image"><a href="blog-single.html"><img
                                            src="{{ $latestArticle->main_img ? asset($latestArticle->main_img) : asset('assets/frontend/images/popular/1.jpg') }}"
                                            alt="Article image"></a></div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Section end Here -->
    <!-- All News Section Start Here -->
    <div class="all-news-area">
        <div class="container">
            <!-- latest news Start Here -->
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 tab-home">
                    <ul class="nav nav-tabs">
                        <li class="title-bg">Latest News</li>
                        {{-- <li class="active"><a data-toggle="tab" href="#tab1">Highest Rated</a></li>
                        <li><a data-toggle="tab" href="#tab2">Week</a></li>
                        <li><a data-toggle="tab" href="#tab3">Hot Articals</a></li>
                        <li><a data-toggle="tab" href="#tab4">Previous</a></li> --}}
                    </ul>
                    <div class="tab-content">
                        <div id="tab1" class="tab-pane fade in active">
                            <div class="tab-top-content">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 paddimg-right-none">
                                        <a href="blog-single.html"><img src="{{ $firstLatestNews->main_img }}"
                                                alt="sidebar image"></a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 last-col">
                                        <h3><a href="#">{{ $firstLatestNews->main_head }}</a>
                                        </h3>
                                        <p>{!! Str::limit(strip_tags($firstLatestNews->main_desc), 100, '...') !!}</p>
                                        <a href="{{ route('news.show', $firstLatestNews->slug) }}"
                                            class="read-more hvr-bounce-to-right">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-bottom-content">
                                <div class="row">
                                    @foreach ($otherLatestNews as $news )
                                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="blog-single.html"><img src="{{$news->main_img}}" alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true">
                                                </i>{{ $news->created_at ? $news->created_at->format('M d, Y') : '' }}</span>
                                            <h4><a href="blog-single.html">{!! Str::limit(strip_tags($news->main_desc),20, '...') !!}</a></h4>
                                        </div>
                                    </div>  
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Trending news  here-->
                    <div class="trending-news separator-large">
                        <div class="row">
                            <div class="view-area">
                                <div class="col-sm-8">
                                    <h3 class="title-bg">Trending News</h3>
                                </div>
                                <div class="col-sm-4 text-right">
                                    <a href="{{ route('news')}}">View More <i class="fa fa-angle-double-right"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="list-col">
                                    <a href="blog-single.html"> <img
                                            src="{{ $firstTrendingNews->main_img }}" alt=""
                                            title="Trending image" /></a>
                                    <div class="dsc">
                                        <span class="date"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                            {{ $firstTrendingNews->created_at ? $firstTrendingNews->created_at->format('M d, Y') : '' }}</span> <span class="comment"><a href="#"><i
                                                    class="fa fa-comment-o" aria-hidden="true"></i> 50</a></span>
                                        <h3><a href="blog-single.html">{{$firstTrendingNews->main_head}}</a></h3>
                                        <p>{!! Str::limit(strip_tags($firstTrendingNews->main_desc),20, '...') !!}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <ul class="news-post">
                                    @foreach ($otherTrendingNews as $news)
                                        <li>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                                    <div class="item-post">
                                                        <div class="row">
                                                            <div
                                                                class="col-lg-4 col-md-4 col-sm-3 col-xs-3 paddimg-right-none">
                                                                <a href="blog-single.html"> <img
                                                                        src="{{ $news->main_img }}"
                                                                        alt="" title="Trending image"></a>
                                                            </div>
                                                            <div class="col-lg-8 col-md-8 col-sm-9 col-xs-9">
                                                                <h4><a href="blog-single.html">{!! Str::limit(strip_tags($news->main_head),20, '...') !!}</a></h4>
                                                                <span class="date"><i class="fa fa-calendar-check-o"
                                                                        aria-hidden="true"></i> {{ $news->created_at ? $news->created_at->format('M d, Y') : '' }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Start what’s hot now -->
                    <div class="hot-news">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="view-area">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <h3 class="title-bg">What’s hot now</h3>
                                        </div>
                                        <div class="col-sm-4 text-right">
                                            <a href="#">View More <i class="fa fa-angle-double-right"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured">
                                    <div class="blog-img">
                                        <a href="blog-single.html"><img
                                                src="{{ $firstHotNews->main_img }}" alt=""
                                                title="News image" /></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="category-sports.html" class="cat-link">Sports</a><span class="date"><i
                                                class="fa fa-calendar-check-o" aria-hidden="true"></i>{{ $firstHotNews->created_at ? $firstHotNews->created_at->format('M d, Y') : '' }}</span>
                                        <h4><a href="#">{{$firstHotNews->main_head}}</a></h4>
                                    </div>
                                </div>
                                <ul class="news-post news-feature-mb">
                                    @foreach ($otherHotNews as $news) 
                                          <li>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-4">
                                                <a href="blog-single.html"><img
                                                        src="{{ $news->main_img }}" alt=""
                                                        alt="News image" /></a>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-8 content">
                                                <h4><a href="#">{{$news->main_head}}</a></h4>
                                                 <span
                                                    class="date"><i class="fa fa-calendar-check-o"
                                                        aria-hidden="true"></i>{{ $news->created_at ? $news->created_at->format('M d, Y') : '' }}</span>
                                                <p>{!! Str::limit(strip_tags($news->main_desc),300, '...') !!}</p>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End what’s hot now -->
                </div>
                <!--Sidebar Start Here -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-left-none sidebar-latest">
                    <!--Like Box Start Here -->
                    <div class="like-box">
                        <ul>
                            <li>
                                <a href="{{ json_decode($contact->social_media)->facebook ?? '#' }}"><i class="fa fa-facebook" aria-hidden="true"></i> </a>
                            </li>
                            <li>
                                <a href="{{ json_decode($contact->social_media)->instagram ?? '#' }}"><i class="fa fa-instagram" aria-hidden="true"></i> </a>
                            </li>
                            <li class="last">
                                <a href="{{ json_decode($contact->social_media)->whatsapp ?? '#' }}"><i class="fa fa-whatsapp" aria-hidden="true"></i> </a>
                            </li>
                        </ul>
                    </div>
                    <!--Like Box End Here -->

                    <!--Add Start Here -->
                    {{-- <div class="add-section">
                        <img src="images/add/2.jpg" alt="add image">
                    </div> --}}
                    <!--Add Box End Here -->

                    <!--Newsletter Start Here -->
                    <div class="newsletter-info">
                        <form>
                            <fieldset>
                                <div class="form-group">
                                    <h4>Have a Question?</h4>
                                    <div class="newsletter">
                                        {{-- <input class="form-control" placeholder="Email address..." type="text"> --}}
                                        <a href="{{ route('contact')}}"><button class="btn-send" type="submit">Get in Touch</button></a><br>
                                        <p>We’re here to help. Ask us anything!</p>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>

                    <!--Newsletter End Here -->

                    <!--popular Post Start Here -->
                    <div class="sidebar popular">
                        <h3 class="title-bg">Events</h3>
                        <ul>
                            <li>
                                <a href="category.html" class="category-btn hvr-bounce-to-right">Events</a>
                                <div class="post-image"><img src="{{ $firstEvent->main_img }}"
                                        alt="News image"></div>
                                <div class="content">
                                    <h4>
                                        <a href="#">{{$firstEvent->main_head}}</a>
                                    </h4>
                                    <span class="date">
                                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i> {{ $firstEvent->created_at ? $firstEvent->created_at->format('M d, Y') : '' }}
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>


                    <div class="hot-news popular-related">
                        <ul class="news-post">
                            @foreach ($otherEvents as $event )
                                <li>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                        <div class="item-post">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-3 paddimg-right-none">
                                                    <img src="{{ $event->main_img }}"
                                                        alt="" title="News image">
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-9">
                                                    <h4><a href="#">{{$event->main_head}}</a></h4>
                                                    <span class="date"><i class="fa fa-calendar-check-o"
                                                            aria-hidden="true"></i> {{ $event->created_at ? $event->created_at->format('M d, Y') : '' }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--popular Post End Here -->

                    <!--Recent comments Start Here -->
                    {{-- <div class="recent-comments separator-large">
                        <div id="comments-Carousel" class="carousel carousel-comments slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <!-- Left and right controls -->
                            <div class="next-prev-top">
                                <div class="row">
                                    <div class="col-sm-9 col-xs-9">
                                        <div class="view-area">
                                            <h3 class="title-bg">Recent Comments</h3>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-3 next-prev">
                                        <a class="left news-control" href="#comments-Carousel" data-slide="prev">
                                            <span class="news-arrow-left"><i class="fa fa-angle-left"
                                                    aria-hidden="true"></i></span>
                                        </a>
                                        <a class="right news-control" href="#comments-Carousel" data-slide="next">
                                            <span class="news-arrow-right"><i class="fa fa-angle-right"
                                                    aria-hidden="true"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="dsc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipe isicing elit, sed do they eiusmod
                                            tempor incidin dunt ut labore et dolore</p>
                                        <span>- Thesera Minton</span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="dsc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipe isicing elit, sed do they eiusmod
                                            tempor incidin dunt ut labore et dolore</p>
                                        <span>- Jon Min</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!--Recent comments Start Here -->
                    <!--Add Start Here -->
                    {{-- <div class="add-section add-section2">
                        <img src="{{ asset('assets/frontend/images/add/3.jpg') }}" alt="add image">
                    </div> --}}
                    <!--Add Box End Here -->
                </div>
            </div>
        </div>
    </div>
    <!-- Fetuered videos Start Here -->
    <div class="fetuered-videos">
        <div class="container">
            <div class="row">
                <div class="view-area">
                    <div class="col-sm-12">
                        <h3 class="title-bg"> Videos</h3>
                    </div>
                </div>
            </div>
            @foreach ($videos as $video)
            @php
                // Extract video id from embed URL
                preg_match('/embed\/([^\?]+)/', $video->url, $matches);
                $videoId = $matches[1] ?? null;
                $watchUrl = "https://www.youtube.com/watch?v=" . $videoId;
                $embedUrl = "https://www.youtube.com/embed/" . $videoId;
            @endphp
                <div id="featured-videos-section" class="owl-carousel">
                    <div class="item">
                        <div class="single-videos">
                            <div class="images">
                                <a href="#"><img src="https://img.youtube.com/vi/{{ $videoId }}/hqdefault.jpg"
                                        alt=""></a>
                                <div class="overley">
                                    <div class="videos-icon">
                                        <a class="popup-videos" href="{{ $watchUrl }}"><img
                                                src="{{ asset('assets/frontend/images/fetuered/video-icon.png') }}"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="videos-text">
                                <h3><a href="#">{{$video->title}}</a></h3>
                                <span class="date"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i>{{ $video->created_at ? $video->created_at->format('M d, Y') : '' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <!-- Fetuered videos End Here -->

    <!-- Hot News Start Here -->
    <div class="hot-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div id="news-Carousel" class="carousel carousel-news slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <!-- Left and right controls -->
                                <div class="next-prev-top">
                                    <div class="row">
                                        <div class="col-sm-9 col-xs-9">
                                            <div class="view-area">
                                                <h3 class="title-bg">Poems</h3>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 next-prev col-xs-3">
                                            <a class="left news-control" href="#news-Carousel" data-slide="prev">
                                                <span class="news-arrow-left"><i class="fa fa-angle-left"
                                                        aria-hidden="true"></i></span>
                                            </a>
                                            <a class="right news-control" href="#news-Carousel" data-slide="next">
                                                <span class="news-arrow-right"><i class="fa fa-angle-right"
                                                        aria-hidden="true"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-inner">
                                    @foreach ( $poems as $poem )                                        
                                        <div class="item active">
                                            <a href="#"><img
                                                    src="{{ $poem->main_img ? asset($poem->main_img) : asset('assets/frontend/images/news-slider-image/1.jpg') }}"
                                                    alt="" title="#slider-direction-1" /></a>
                                            <div class="dsc">
                                                <span class="date">
                                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                    {{ $poem->created_at ? $poem->created_at->format('M d, Y') : '' }}  
                                                </span>
                                                <h4><a href="blog-single.html"> {{$poem->title}}</a></h4>
                                                <p>
                                                    {!! Str::limit(strip_tags($poem->description), 100, '...') !!}
                                                </p>
                                            </div>
                                        </div> 
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div id="news-Carousel2" class="carousel carousel-news slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <!-- Left and right controls -->
                                <div class="next-prev-top">
                                    <div class="row">
                                        <div class="col-sm-9 col-xs-9">
                                            <div class="view-area">
                                                <h3 class="title-bg">Stories</h3>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 col-xs-3 next-prev">
                                            <a class="left news-control" href="#news-Carousel2" data-slide="prev">
                                                <span class="news-arrow-left"><i class="fa fa-angle-left"
                                                        aria-hidden="true"></i></span>
                                            </a>
                                            <a class="right news-control" href="#news-Carousel2" data-slide="next">
                                                <span class="news-arrow-right"><i class="fa fa-angle-right"
                                                        aria-hidden="true"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-inner">
                                    @foreach ($stories as $story )
                                        <div class="item active">
                                        <a href="#"><img
                                                src="{{ $story->main_img ? asset($story->main_img) : asset('assets/frontend/images/news-slider-image/2.jpg') }}"
                                                alt="" title="#slider-direction-1" /></a>
                                        <div class="dsc">
                                            <span class="date">
                                                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                {{ $story->created_at ? $story->created_at->format('M d, Y') : '' }}
                                            </span>
                                            <span class="comment">
                                                <a href="#"> <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                                </a>
                                            </span>
                                            <h4><a href="blog-single.html">{{ $story->title }}</a></h4>
                                            <p>{!! Str::limit(strip_tags($story->description), 100, '...') !!}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-left-none">
                    <h3 class="title-bg featured-title">Pages</h3>
                    <div class="sidebar">
                        <div class="categories-home separator-large3">
                            {{-- <h3 class="title-bg">Categories</h3> --}}
                            <ul>
                                <li><a href="{{route('blog')}}"> <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        Blog <span>{{$counts['blogs']}}</span></a></li>
                                        
                                <li><a href="{{route('news')}}"><i class="fa fa-angle-right" aria-hidden="true"></i>
                                        News <span>{{$counts['news']}}</span></a></li>

                                <li><a href="{{route('articles')}}"><i class="fa fa-angle-right" aria-hidden="true"></i>
                                        Articles <span>{{$counts['articles']}}</span></a></li>

                                <li><a href="{{route('events')}}"><i class="fa fa-angle-right" aria-hidden="true"></i>
                                        Events <span>{{$counts['events']}}</span></a></li>

                                <li><a href="{{route('memorials', ['anusmarana kurippu'])}}"><i class="fa fa-angle-right" aria-hidden="true"></i>
                                        Anusmarana Kurippu <span>{{$counts['anusmaranaaa']}}</span></a></li>

                                <li><a href="{{route('memorials', ['jeeva charithram'])}}"><i class="fa fa-angle-right" aria-hidden="true"></i>
                                        Jeeve Charithram <span>{{$counts['jeevacharithrams']}}</span></a></li>

                                <li><a href="{{route('literature', ['poem'])}}"><i class="fa fa-angle-right" aria-hidden="true"></i>
                                        Poem <span>{{$counts['poem']}}</span></a></li>

                                <li><a href="{{route('literature', ['story'])}}"><i class="fa fa-angle-right" aria-hidden="true"></i>
                                        Story <span>{{$counts['story']}}</span></a></li>

                                <li><a href="{{route('literature', ['book review'])}}"><i class="fa fa-angle-right" aria-hidden="true"></i>
                                        Book Review <span>{{$counts['bookreview']}}</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- All News Section end Here -->
    <!-- Footer Area Section Start Here -->
    {{-- <div class="add-section separator-large2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <img src="images/footer-top.png" alt="footer">
                </div>
            </div>
        </div>
    </div> --}}
@endsection
