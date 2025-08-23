@extends('frontend.layouts.app')
@section('content')
<!-- Inner Page Header serction start here -->
    <div class="inner-page-header">
        <div class="banner">
            <img src="{{ asset($contact->banner_img)}}" alt="Banner">
        </div>
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-page-locator">
                            <ul>
                                <li><a href="index.html">Home <i class="fa fa-compress" aria-hidden="true"></i> </a> Single Post</li>
                            </ul>
                        </div>
                        <div class="header-page-title">
                            <h1>Contact Us</h1>
                        </div>
                        <div class="header-page-subtitle">
                            <p>{{ $contact->banner_desc}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Page Header serction end here -->
 
   <!-- Contact Us Page Start Here -->
    <div class="single-blog-page-area contact-page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="google-map">
                        <iframe src="{{ $contact->map_url}}" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div> 
                    <div class="location-area">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <h3>Location</h3>
                        <p>{{$contact->description}}</p>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                        <ul>
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> 2165 The Maids North East Ohio <span>Aurora Road, Bedford-6543</span></li>
                            <li><i class="fa fa-mobile" aria-hidden="true"></i> Phone: <a href="tel:+3301-341-0476"> +3301-341-0476</a></li>
                            <li><i class="fa fa-fax" aria-hidden="true"></i> Fax:<a href="fax:+3450-875-3313"> +3450-875-3313</a></li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:info@gmail.com">info@gmail.com</a></li>
                        </ul>
                        </div>
                    </div> 
                    </div>                 
                    <div class="leave-comments-area">
                        <h3>Contact Us</h3>
                        <div id="form-messages"></div>
                        <form id="contact-form" method="post" action="{{ route('enquiry.store') }}">
                        @csrf
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="fname" id="fname" class="form-control" required placeholder="First Name*">
                                        </div>
                                    </div>                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="lname" id="lname" class="form-control" required placeholder="Last Name*">
                                        </div>
                                    </div>
                                </div> 
                                <div class="row">   
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required placeholder="Email*">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" id="phone" class="form-control" required placeholder="Phone*">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">    
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea cols="40" id="message" name="message" rows="10" class="textarea form-control" placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <button class="btn-send" type="submit">Send Message </button>
                                        </div>
                                    </div>
                                </div>    
                            </fieldset>
                        </form>
                    </div>                                 
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="sidebar-area">
                        <div class="like-box-area">
                            <ul>
                                <li><a href="{{ json_decode($contact->social_media)->facebook ?? '#' }}" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i> <span class="like-page">like our facebook page </span> <span class="like"><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="{{ json_decode($contact->social_media)->instagram ?? '#' }}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> <span class="like-page">Follow us on Instagram</span> <span class="like">
                                <i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="{{ json_decode($contact->social_media)->whatsapp ?? '#' }}" target="blank"><i class="fa fa-whatsapp" aria-hidden="true"></i> <span class="like-page">Subscribe to our rss </span> <span class="like"><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                            </ul>
                        </div>
                        <div class="recent-post-area hot-news">
                            <h3 class="title-bg">Recent Post</h3>
                            <ul class="news-post">
                                @foreach($news as $news)
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                                <div class="item-post">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-right-none">
                                                            <a href="blog-single.html"><img src="{{ asset($news->main_img)}}" alt="" title="News image" /></a>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <h4><a href="{{route('news.show', $news->slug)}}"> {{ $news->main_head }} </a></h4>
                                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>{{ $news->created_at ? $news->created_at->format('M d, Y') : '' }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        {{-- <div class="add">
                            <img src="images/add/4.jpg" alt="Add">
                        </div> --}}
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <!-- Blog Details Page end here -->
@endsection