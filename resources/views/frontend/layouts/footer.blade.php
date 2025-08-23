 @php
    $contact = App\Models\Contact::first();
    $articles = App\Models\Article::latest()->take(2)->get();
    $gallery = App\Models\Gallery::latest()->first();
 @endphp
<footer>
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <!-- Footer About Section Start Here -->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-footer footer-one">
                            <h3>About</h3>
                            <div class="footer-logo"><img src="{{ asset($settings->logo)}}" alt="footer-logo"></div>
                            <p>{{$settings->description}}</p>
                            <p>We're social, connect with us:</p>
                            <div class="footer-social-media-area">
                                <nav>
                                    <ul>
                                        <li><a href="{{ json_decode($contact->social_media)->facebook ?? '#' }}"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="{{ json_decode($contact->social_media)->instagram ?? '#' }}"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="{{ json_decode($contact->social_media)->whatsapp ?? '#' }}"><i class="fa fa-whatsapp"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- Footer About Section End Here -->

                    <!-- Footer Popular Post Section Start Here -->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-footer footer-two">
                            <h3>Latest articles</h3>
                            <nav>
                                <ul>
                                    @foreach ($articles as $article)
                                        <li>
                                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-4">
                                                <a href="blog-single.html"><img src="{{ asset($article->main_img)}}" alt="post photo"></a>
                                            </div>
                                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-8">
                                                <p><a href="blog-single.html">{{$article->main_head}}</a></p>
                                                <span><i class="fa fa-calendar-check-o" aria-hidden="true"> </i>  {{ $article->created_at ? $article->created_at->format('M d, Y') : '' }}</span>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Footer Popular Post Section End Here -->

                    <!-- Footer From Flickr Section Start Here -->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-footer footer-three">
                            <h3>From Flickr</h3>
                            <ul>
                                @foreach (array_slice($gallery->images, 0, 12) as $images )
                                     <li>
                                        <a href="{{ route('gallery') }}"><img src="{{ asset($images)}}" alt="flicker photo" width="100" height="100"></a>
                                    </li>
                                @endforeach
                               
                            </ul>
                        </div>
                    </div>
                    <!-- Footer From Flickr Section End Here -->
                </div>
            </div>
        </div>
        <!-- Footer Copyright Area Start Here -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-bottom">
                            <p> &copy; Copyrights 2025. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Copyright Area End Here -->
    </footer>