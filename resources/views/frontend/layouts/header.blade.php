<header>
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="header-top-left">

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="social-media-area">
                        <nav>
                            <ul>
                                <li><a href="#" class="active"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="index.html"><img src="{{ asset('assets/frontend/images/logo.png') }}"
                                alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="right-banner">
                        <img src="{{ asset('assets/frontend/images/add/1.png') }}" alt="add image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom-area" id="sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                    <div class="navbar-header">
                        <div class="col-sm-8 col-xs-8 padding-null">
                            <button class="navbar-toggle" type="button" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="col-sm-4 col-xs-4 hidden-desktop text-right search">
                            <a href="#search-mobile" data-toggle="collapse" class="search-icon"><i class="fa fa-search"
                                    aria-hidden="true"></i></a>
                            <div id="search-mobile" class="collapse search-box">
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                        </div>
                    </div>
                    <div class="main-menu navbar-collapse collapse">
                        <nav>
                            <ul>
                                <li>
                                    <a href="/" class="has dropdown-toggle">Home </a>
                                </li>

                                <li><a href="{{ route('about') }}" class="has">About </i></a></li>
                                <li><a href="{{ route('news') }}" class="has">News </i></a></li>
                                <li><a href="{{ route('articles') }}" class="has">Articles </i></a></li>
                                <li><a href="{{ route('events') }}" class="has">Events </i></a></li>
                                 <li><a href="#" class="has dropdown-toggle">Memorials <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('memorials',['anusmarana kurippu'])}}">anusmarana kurippu</a></li>
                                            <li><a href="{{ route('memorials',['jeeva charithram'])}}">jeeva charithram</a></li>
                                        </ul>
                                    </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                {{-- <div class="col-lg-2 col-md-2 col-sm-hidden col-xs-hidden text-right search hidden-mobile">
                    <a href="#search" data-toggle="collapse" class="search-icon"><i class="fa fa-search"
                            aria-hidden="true"></i></a>
                    <div id="search" class="collapse search-box">
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                </div> --}}
                <div id="google_translate_element"></div>

            </div>
        </div>
    </div>
</header>
