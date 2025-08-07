@extends('frontend.layouts.app')
@section('content')
 <!-- Inner Page Header Serction Start Here -->
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
                                <li><a href="{{ asset('') }}">Home <i class="fa fa-compress" aria-hidden="true"></i> </a> About</li>
                            </ul>
                        </div>
                        <div class="header-page-title">
                            <h1>{{$data->banner_head}}</h1>
                        </div>
                        <div class="header-page-subtitle">
                            <p>{{$data->banner_description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Page Header serction end here -->

    <!-- Home About Start Here -->
    <div class="home-about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="title2">{{$data->main_head}} </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <p>{{$data->main_description}}</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <p><img src="{{ asset('storage/' . $data->main_image) }}" alt="News24 office"></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Home About End Here -->
    <!-- home page core services start here -->
    <div class="about-featured">
        <div class="container">
            <div class="row">
                <div class="home-page-core-activities-area">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                        <span class="border-img"><img class="normal" src="{{ asset('storage/' . $data->image_2) }}" alt="about"></span>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <div class="home-activities-area">
                            <h2 class="title2">{{$data->head_2}}</h2>
                            <div class="single-activities">
                                <div class="media">
                                    <div class="pull-left">
                                        <a href="#">
                                           <i class="fa fa-snowflake-o" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#">{{$data->sub_head_1}}</a></h4>
                                        <p>{{$data->sub_desc_1}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-activities">
                                <div class="media">
                                    <div class="pull-left">
                                        <a href="#">
                                            <i class="fa fa-globe" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#">{{$data->sub_head_2}} </a></h4>
                                        <p>{{$data->sub_desc_2}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-activities">
                                <div class="media">
                                    <div class="pull-left">
                                        <a href="#">
                                           <i class="fa fa-database" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#">{{$data->sub_head_3}}</a></h4>
                                        <p>{{$data->sub_desc_3}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home page core services end here -->
    <!-- Counter Up Section Start Here-->
    <div class="project-activation-area">
        <div class="container">
            <div class="row">
                <div class="ab-count">
                    <!-- ABOUT-COUNTER-LIST START -->
                    <div class="col-lg-3 col-md-3 col-sm-3  wow fadeInUp" data-wow-duration=".3s" data-wow-delay="300ms" style="visibility: visible; animation-duration: .3s; animation-delay: .5s; animation-name: fadeInUp;">
                        <div class="about-counter-list">
                            <p class="icons"><i class="fa fa-line-chart" aria-hidden="true"></i></p>
                            <h1 class="about-counter">{{$data->rank_value_1}}</h1>
                            <p>{{$data->rank_text_1}}</p>
                        </div>
                    </div>
                    <!-- ABOUT-COUNTER-LIST END -->
                    <!-- ABOUT-COUNTER-LIST START -->
                    <div class="col-lg-3 col-md-3 col-sm-3  wow fadeInUp" data-wow-duration=".7s" data-wow-delay="300ms" style="visibility: visible; animation-duration: .7s; animation-delay: .7s; animation-name: fadeInUp;">
                        <div class="about-counter-list">
                            <p class="icons"><i class="fa fa-users" aria-hidden="true"></i></p>
                            <h1 class="about-counter">{{$data->rank_value_2}}</h1>
                            <p>{{$data->rank_text_2}}</p>
                        </div>
                    </div>
                    <!-- ABOUT-COUNTER-LIST END -->
                    <!-- ABOUT-COUNTER-LIST START -->
                    <div class="col-lg-3 col-md-3 col-sm-3  wow fadeInUp" data-wow-duration=".9s" data-wow-delay="300ms" style="visibility: visible; animation-duration: .9s; animation-delay: .9s; animation-name: fadeInUp;">
                        <div class="about-counter-list">
                            <p class="icons"><i class="fa fa-bookmark" aria-hidden="true"></i></p>
                            <h1 class="about-counter">{{$data->rank_value_3}}</h1>
                            <p>Cert{{$data->rank_text_3}}ification</p>
                        </div>
                    </div>
                    <!-- ABOUT-COUNTER-LIST END -->
                    <!-- ABOUT-COUNTER-LIST START -->
                    <div class="col-lg-3 col-md-3 col-sm-3  wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1.2s; animation-delay: 1.2s; animation-name: fadeInUp;">
                        <div class="about-counter-list">
                            <p class="icons"><i class="fa fa-hand-peace-o" aria-hidden="true"></i></p>
                            <h1 class="about-counter">{{$data->rank_value_4}}</h1>
                            <p>{{$data->rank_text_4}} </p>
                        </div>
                    </div>
                    <!-- ABOUT-COUNTER-LIST END -->
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Down Section End Here-->
    <!-- Home Page team start  here -->
    {{-- <div class="about-page-team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="title2">Our Team</h2>
                </div>
            </div>
            <div id="total-team" class="row owl-carousel">
                <div class="item">
                    <div class="text-center">
                    <div class="single-team">
                        <div class="image">
                            <a href="{{ asset('author-single.html') }}"><img src="{{ asset('assets/frontend/images/team/1.png') }}" alt="Team"></a>
                        </div>
                        <div class="team-details">
                            <h3><a href="{{ asset('author-single.html') }}">John Doe</a></h3>
                            <p>CEO & Editor</p>
                            <div class="social-media-icons">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="item">
                    <div class="text-center">
                        <div class="single-team">
                            <div class="image">
                                <a href="{{ asset('author-single.html') }}"><img src="{{ asset('assets/frontend/images/team/2.png') }}" alt="Team"></a>
                            </div>
                            <div class="team-details">
                                <h3><a href="{{ asset('author-single.html') }}">John Doe</a></h3>
                                <p>Founder & Editor</p>
                                <div class="social-media-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">    
                    <div class="text-center">
                        <div class="single-team">
                            <div class="image">
                                <a href="{{ asset('author-single.html') }}"><img src="{{ asset('assets/frontend/images/team/3.png') }}" alt="Team"></a>
                            </div>
                            <div class="team-details">
                                <h3><a href="{{ asset('author-single.html') }}">John Doe</a></h3>
                                <p>Senior Reporter</p>
                                <div class="social-media-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">    
                    <div class="text-center">
                        <div class="single-team">
                            <div class="image">
                                <a href="{{ asset('author-single.html') }}"><img src="{{ asset('assets/frontend/images/team/4.png') }}" alt="Team"></a>
                            </div>
                            <div class="team-details">
                                <h3><a href="{{ asset('author-single.html') }}">Nafisa Simran Caly</a></h3>
                                <p>News Writter</p>
                                <div class="social-media-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">    
                    <div class="text-center">
                        <div class="single-team">
                            <div class="image">
                                <a href="{{ asset('author-single.html') }}"><img src="{{ asset('assets/frontend/images/team/3.png') }}" alt="Team"></a>
                            </div>
                            <div class="team-details">
                                <h3><a href="{{ asset('author-single.html') }}">John Doe</a></h3>
                                <p>Senior Reporter</p>
                                <div class="social-media-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">    
                    <div class="text-center">
                        <div class="single-team">
                            <div class="image">
                                <a href="{{ asset('author-single.html') }}"><img src="{{ asset('assets/frontend/images/team/1.png') }}" alt="Team"></a>
                            </div>
                            <div class="team-details">
                                <h3><a href="{{ asset('author-single.html') }}">John Doe</a></h3>
                                <p>CEO & Editor</p>
                                <div class="social-media-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">    
                    <div class="text-center">
                        <div class="single-team">
                            <div class="image">
                                <a href="{{ asset('author-single.html') }}"><img src="{{ asset('assets/frontend/images/team/6.png') }}" alt="Team"></a>
                            </div>
                            <div class="team-details">
                                <h3><a href="{{ asset('author-single.html') }}">Nafisa Simran Caly</a></h3>
                                <p>News Writter</p>
                                <div class="social-media-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div> --}}
    <!-- Home Page team end  here --    