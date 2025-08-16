@extends('frontend.layouts.app')
@section('content')
    <div class="blog-page-area gellary-area-main gallery-page gellary-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div id="news-Carousel" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <!-- Left and right controls -->
                        <div class="next-prev">
                            <a class="left news-control" href="#news-Carousel" data-slide="prev">
                                <span class="news-arrow-left"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                            </a>
                            <a class="right news-control" href="#news-Carousel" data-slide="next">
                                <span class="news-arrow-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                            </a>
                        </div>
                        <div class="carousel-inner">
                            <div class="item active">
                                <ul>
                                    <li>
                                        <div class="single-gellary">
                                            <div class="image">
                                                <img src="{{ asset('assets/frontend/images/gallery/1.jpg') }}"
                                                    alt="">
                                                <div class="overley">
                                                    <ul>
                                                        <li><a href="gallery-single.html"><i class="fa fa-link"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li><a href="images/gallery/1.jpg" data-lightbox="example-set"
                                                                data-title="Image Title"><i class="fa fa-search"
                                                                    aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i> Sep
                                            13, 2017</span>
                                        <h3><a href="gallery-single.html">Lorem ipsum dolor sit amet.</a></h3>
                                        <p>Ethical sustainable chillwave. Gentrify semiotics cold pressed, narwhal hashtag
                                            cardigan artisan swag raw denim wolf tilde.</p>
                                        <a href="gallery-single.html" class="more">Read More <i
                                                class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul>
                                    <li>
                                        <div class="single-gellary">
                                            <div class="image">
                                                <img src="{{ asset('assets/frontend/images/gallery/3.jpg') }}"
                                                    alt="">
                                                <div class="overley">
                                                    <ul>
                                                        <li><a href="gallery-single.html"><i class="fa fa-link"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li><a href="images/gallery/3.jpg" data-lightbox="example-set"
                                                                data-title="Image Title"><i class="fa fa-search"
                                                                    aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i> Sep
                                            13, 2017</span>
                                        <h3><a href="gallery-single.html">Lorem ipsum dolor sit amet.</a></h3>
                                        <p>Ethical sustainable chillwave. Gentrify semiotics cold pressed, narwhal hashtag
                                            cardigan artisan swag raw denim wolf tilde.</p>
                                        <a href="gallery-single.html" class="more">Read More <i
                                                class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul>
                                    <li>
                                        <div class="single-gellary">
                                            <div class="image">
                                                <img src="{{ asset('assets/frontend/images/gallery/9.jpg') }}"
                                                    alt="">
                                                <div class="overley">
                                                    <ul>
                                                        <li><a href="gallery-single.html"><i class="fa fa-link"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li><a href="images/gallery/9.jpg" data-lightbox="example-set"
                                                                data-title="Image Title"><i class="fa fa-search"
                                                                    aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i> Sep
                                            13, 2017</span>
                                        <h3><a href="gallery-single.html">Lorem ipsum dolor sit amet.</a></h3>
                                        <p>Ethical sustainable chillwave. Gentrify semiotics cold pressed, narwhal hashtag
                                            cardigan artisan swag raw denim wolf tilde.</p>
                                        <a href="gallery-single.html" class="more">Read More <i
                                                class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div id="news-Carouse2" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <!-- Left and right controls -->
                        <div class="next-prev">
                            <a class="left news-control" href="#news-Carouse2" data-slide="prev">
                                <span class="news-arrow-left"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                            </a>
                            <a class="right news-control" href="#news-Carouse2" data-slide="next">
                                <span class="news-arrow-right"><i class="fa fa-angle-right"
                                        aria-hidden="true"></i></span>
                            </a>
                        </div>
                        <div class="carousel-inner">
                            <div class="item active">
                                <ul>
                                    <li>
                                        <div class="single-gellary">
                                            <div class="image">
                                                <img src="{{ asset('assets/frontend/images/gallery/2.jpg') }}"
                                                    alt="">
                                                <div class="overley">
                                                    <ul>
                                                        <li><a href="gallery-single.html"><i class="fa fa-link"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li><a href="images/gallery/2.jpg" data-lightbox="example-set"
                                                                data-title="Image Title"><i class="fa fa-search"
                                                                    aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i>
                                            Sep 13, 2017</span>
                                        <h3><a href="gallery-single.html">Lorem ipsum dolor sit amet.</a></h3>
                                        <p>Lorem ipsum dolor sit amet, elit. In at porttitor augue. Mauris top odio eu
                                            turpis rutrum.</p>
                                        <a href="gallery-single.html" class="more">Read More <i
                                                class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul>
                                    <li>
                                        <div class="single-gellary">
                                            <div class="image">
                                                <img src="{{ asset('assets/frontend/images/gallery/4.jpg') }}"
                                                    alt="">
                                                <div class="overley">
                                                    <ul>
                                                        <li><a href="gallery-single.html"><i class="fa fa-link"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li><a href="images/gallery/4.jpg" data-lightbox="example-set"
                                                                data-title="Image Title"><i class="fa fa-search"
                                                                    aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i>
                                            Sep 13, 2017</span>
                                        <h3><a href="gallery-single.html">Lorem ipsum dolor sit amet.</a></h3>
                                        <p>Lorem ipsum dolor sit amet, elit. In at porttitor augue. Mauris top odio eu
                                            turpis rutrum.</p>
                                        <a href="gallery-single.html" class="more">Read More <i
                                                class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul>
                                    <li>
                                        <div class="single-gellary">
                                            <div class="image">
                                                <img src="{{ asset('assets/frontend/images/gallery/6.jpg') }}"
                                                    alt="">
                                                <div class="overley">
                                                    <ul>
                                                        <li><a href="gallery-single.html"><i class="fa fa-link"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li><a href="images/gallery/6.jpg" data-lightbox="example-set"
                                                                data-title="Image Title"><i class="fa fa-search"
                                                                    aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i>
                                            Sep 13, 2017</span>
                                        <h3><a href="gallery-single.html">Lorem ipsum dolor sit amet.</a></h3>
                                        <p>Lorem ipsum dolor sit amet, elit. In at porttitor augue. Mauris top odio eu
                                            turpis rutrum.</p>
                                        <a href="gallery-single.html" class="more">Read More <i
                                                class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div id="news-Carouse3" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <!-- Left and right controls -->
                        <div class="next-prev">
                            <a class="left news-control" href="#news-Carouse3" data-slide="prev">
                                <span class="news-arrow-left"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                            </a>
                            <a class="right news-control" href="#news-Carouse3" data-slide="next">
                                <span class="news-arrow-right"><i class="fa fa-angle-right"
                                        aria-hidden="true"></i></span>
                            </a>
                        </div>
                        <div class="carousel-inner">
                            <div class="item active">
                                <ul>
                                    <li>
                                        <div class="single-gellary">
                                            <div class="image">
                                                <img src="images/gallery/3.jpg" alt="">
                                                <div class="overley">
                                                    <ul>
                                                        <li><a href="gallery-single.html"><i class="fa fa-link"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li><a href="images/gallery/3.jpg" data-lightbox="example-set"
                                                                data-title="Image Title"><i class="fa fa-search"
                                                                    aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i>
                                            Sep 13, 2017</span>
                                        <h3><a href="gallery-single.html">Lorem ipsum dolor sit amet.</a></h3>
                                        <p>Ethical sustainable chillwave. Gentrify semiotics cold pressed, narwhal hashtag
                                            cardigan artisan swag raw denim wolf tilde.</p>
                                        <a href="gallery-single.html" class="more">Read More <i
                                                class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul>
                                    <li>
                                        <div class="single-gellary">
                                            <div class="image">
                                                <img src="images/gallery/1.jpg" alt="">
                                                <div class="overley">
                                                    <ul>
                                                        <li><a href="gallery-single.html"><i class="fa fa-link"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li><a href="images/gallery/1.jpg" data-lightbox="example-set"
                                                                data-title="Image Title"><i class="fa fa-search"
                                                                    aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i>
                                            Sep 13, 2017</span>
                                        <h3><a href="gallery-single.html">Lorem ipsum dolor sit amet.</a></h3>
                                        <p>Ethical sustainable chillwave. Gentrify semiotics cold pressed, narwhal hashtag
                                            cardigan artisan swag raw denim wolf tilde.</p>
                                        <a href="gallery-single.html" class="more">Read More <i
                                                class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul>
                                    <li>
                                        <div class="single-gellary">
                                            <div class="image">
                                                <img src="images/gallery/9.jpg" alt="">
                                                <div class="overley">
                                                    <ul>
                                                        <li><a href="gallery-single.html"><i class="fa fa-link"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li><a href="images/gallery/9.jpg" data-lightbox="example-set"
                                                                data-title="Image Title"><i class="fa fa-search"
                                                                    aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i>
                                            Sep 13, 2017</span>
                                        <h3><a href="gallery-single.html">Lorem ipsum dolor sit amet.</a></h3>
                                        <p>Ethical sustainable chillwave. Gentrify semiotics cold pressed, narwhal hashtag
                                            cardigan artisan swag raw denim wolf tilde.</p>
                                        <a href="gallery-single.html" class="more">Read More <i
                                                class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <ul>
                        <li>
                            <div class="single-gellary">
                                <div class="image">
                                    <img src="images/gallery/4.jpg" alt="">
                                    <div class="overley">
                                        <ul>
                                            <li><a href="gallery-single.html"><i class="fa fa-link"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="images/gallery/4.jpg" data-lightbox="example-set"
                                                    data-title="Image Title"><i class="fa fa-search"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i> Sep 13,
                                2017</span>
                            <h3><a href="gallery-single.html">Cutlery</a></h3>
                            <p>Intelligentsia chambray tousled, kitsch Godard. Listi cle flannel tousled roof party. Tofu
                                ethical cray dis tillery. Freegan cardigan authentic keffiyeh.</p>
                            <a href="gallery-single.html" class="more">Read More <i class="fa fa-angle-double-right"
                                    aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin-top">
                    <ul>
                        <li>
                            <div class="single-gellary">
                                <div class="image">
                                    <img src="{{ asset('assets/frontend/images/gallery/5.jpg') }}" alt="">
                                    <div class="overley">
                                        <ul>
                                            <li><a href="gallery-single.html"><i class="fa fa-link"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="images/gallery/5.jpg" data-lightbox="example-set"
                                                    data-title="Image Title"><i class="fa fa-search"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i> Sep 13,
                                2017</span>
                            <h3><a href="gallery-single.html"> Lorem ipsum dolor sit amet.</a></h3>
                            <p>Intelligentsia chambray tousled, kitsch Godard. Listi cle flannel tousled roof party.</p>
                            <a href="gallery-single.html" class="more">Read More <i class="fa fa-angle-double-right"
                                    aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <ul>
                        <li>
                            <div class="single-gellary">
                                <div class="image">
                                    <img src="images/gallery/6.jpg" alt="">
                                    <div class="overley">
                                        <ul>
                                            <li><a href="gallery-single.html"><i class="fa fa-link"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="images/gallery/6.jpg" data-lightbox="example-set"
                                                    data-title="Image Title"><i class="fa fa-search"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i> Sep 13,
                                2017</span>
                            <h3><a href="gallery-single.html"> Lorem ipsum dolor sit amet.</a></h3>
                            <p>Intelligentsia chambray tousled, kitsch Godard. Listi cle flannel tousled roof party. Tofu
                                ethical cray dis tillery. Freegan cardigan authentic keffiyeh.</p>
                            <a href="gallery-single.html" class="more">Read More <i class="fa fa-angle-double-right"
                                    aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div id="news-Carouse7" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <!-- Left and right controls -->
                        <div class="next-prev">
                            <a class="left news-control" href="#news-Carouse7" data-slide="prev">
                                <span class="news-arrow-left"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                            </a>
                            <a class="right news-control" href="#news-Carouse7" data-slide="next">
                                <span class="news-arrow-right"><i class="fa fa-angle-right"
                                        aria-hidden="true"></i></span>
                            </a>
                        </div>
                        <div class="carousel-inner">
                            <div class="item active">
                                <ul>
                                    <li>
                                        <div class="single-gellary">
                                            <div class="image">
                                                <img src="{{ asset('assets/frontend/images/gallery/7.jpg') }}"
                                                    alt="">
                                                <div class="overley">
                                                    <ul>
                                                        <li><a href="gallery-single.html"><i class="fa fa-link"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li><a href="images/gallery/7.jpg" data-lightbox="example-set"
                                                                data-title="Image Title"><i class="fa fa-search"
                                                                    aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i>
                                            Sep 13, 2017</span>
                                        <h3><a href="gallery-single.html">Lorem ipsum dolor sit amet.</a></h3>
                                        <p>Lorem ipsum dolor sit amet, elit. In at porttitor augue. Mauris top odio eu
                                            turpis rutrum.</p>
                                        <a href="gallery-single.html" class="more">Read More <i
                                                class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul>
                                    <li>
                                        <div class="single-gellary">
                                            <div class="image">
                                                <img src="images/gallery/9.jpg" alt="">
                                                <div class="overley">
                                                    <ul>
                                                        <li><a href="gallery-single.html"><i class="fa fa-link"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li><a href="images/gallery/9.jpg" data-lightbox="example-set"
                                                                data-title="Image Title"><i class="fa fa-search"
                                                                    aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i>
                                            Sep 13, 2017</span>
                                        <h3><a href="gallery-single.html">Lorem ipsum dolor sit amet.</a></h3>
                                        <p>Lorem ipsum dolor sit amet, elit. In at porttitor augue. Mauris top odio eu
                                            turpis rutrum.</p>
                                        <a href="gallery-single.html" class="more">Read More <i
                                                class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul>
                                    <li>
                                        <div class="single-gellary">
                                            <div class="image">
                                                <img src="images/gallery/7.jpg" alt="">
                                                <div class="overley">
                                                    <ul>
                                                        <li><a href="gallery-single.html"><i class="fa fa-link"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li><a href="images/gallery/7.jpg" data-lightbox="example-set"
                                                                data-title="Image Title"><i class="fa fa-search"
                                                                    aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i>
                                            Sep 13, 2017</span>
                                        <h3><a href="gallery-single.html">Lorem ipsum dolor sit amet.</a></h3>
                                        <p>Lorem ipsum dolor sit amet, elit. In at porttitor augue. Mauris top odio eu
                                            turpis rutrum.</p>
                                        <a href="gallery-single.html" class="more">Read More <i
                                                class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin-top2">
                    <div class="carousel-inner">
                        <div class="item active">
                            <ul>
                                <li>
                                    <div class="single-gellary">
                                        <div class="image">
                                            <img src="{{ asset('assets/frontend/images/gallery/8.jpg') }}" alt="">
                                            <div class="overley">
                                                <ul>
                                                    <li><a href="gallery-single.html"><i class="fa fa-link"
                                                                aria-hidden="true"></i></a></li>
                                                    <li><a href="images/gallery/8.jpg" data-lightbox="example-set"
                                                            data-title="Image Title"><i class="fa fa-search"
                                                                aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i> Sep
                                        13, 2017</span>
                                    <h3><a href="gallery-single.html">Lorem ipsum dolor sit amet.</a></h3>
                                    <p>Intelligentsia chambray tousled, kitsch Godard. Listi cle flannel tousled roof party.
                                        Tofu ethical cray dis tillery. Freegan cardigan authentic keffiyeh.</p>
                                    <a href="gallery-single.html" class="more">Read More <i
                                            class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div id="news-Carouse9" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <!-- Left and right controls -->
                        <div class="next-prev">
                            <a class="left news-control" href="#news-Carouse9" data-slide="prev">
                                <span class="news-arrow-left"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                            </a>
                            <a class="right news-control" href="#news-Carouse9" data-slide="next">
                                <span class="news-arrow-right"><i class="fa fa-angle-right"
                                        aria-hidden="true"></i></span>
                            </a>
                        </div>
                        <div class="carousel-inner">
                            <div class="item active">
                                <ul>
                                    <li>
                                        <div class="single-gellary">
                                            <div class="image">
                                                <img src="images/gallery/9.jpg" alt="">
                                                <div class="overley">
                                                    <ul>
                                                        <li><a href="gallery-single.html"><i class="fa fa-link"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li><a href="images/gallery/9.jpg" data-lightbox="example-set"
                                                                data-title="Image Title"><i class="fa fa-search"
                                                                    aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i>
                                            Sep 13, 2017</span>
                                        <h3><a href="gallery-single.html">Lorem ipsum dolor sit amet.</a></h3>
                                        <p>Lorem ipsum dolor sit amet, elit. In at porttitor augue. Mauris top odio eu
                                            turpis rutrum.</p>
                                        <a href="gallery-single.html" class="more">Read More <i
                                                class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul>
                                    <li>
                                        <div class="single-gellary">
                                            <div class="image">
                                                <img src="images/gallery/3.jpg" alt="">
                                                <div class="overley">
                                                    <ul>
                                                        <li><a href="gallery-single.html"><i class="fa fa-link"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li><a href="images/gallery/3.jpg" data-lightbox="example-set"
                                                                data-title="Image Title"><i class="fa fa-search"
                                                                    aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i>
                                            Sep 13, 2017</span>
                                        <h3><a href="gallery-single.html">Lorem ipsum dolor sit amet.</a></h3>
                                        <p>Lorem ipsum dolor sit amet, elit. In at porttitor augue. Mauris top odio eu
                                            turpis rutrum.</p>
                                        <a href="gallery-single.html" class="more">Read More <i
                                                class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul>
                                    <li>
                                        <div class="single-gellary">
                                            <div class="image">
                                                <img src="images/gallery/9.jpg" alt="">
                                                <div class="overley">
                                                    <ul>
                                                        <li><a href="gallery-single.html"><i class="fa fa-link"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li><a href="images/gallery/9.jpg" data-lightbox="example-set"
                                                                data-title="Image Title"><i class="fa fa-search"
                                                                    aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i>
                                            Sep 13, 2017</span>
                                        <h3><a href="gallery-single.html">Lorem ipsum dolor sit amet.</a></h3>
                                        <p>Lorem ipsum dolor sit amet, elit. In at porttitor augue. Mauris top odio eu
                                            turpis rutrum.</p>
                                        <a href="gallery-single.html" class="more">Read More <i
                                                class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="pagination-area">
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">. . .</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
