<header>

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
                                    <div class="logo-area">
                        <a href="index.html"><img src="{{ asset($settings->logo) }}"
                                alt="logo"></a>
                    </div>
                                </li>
                                <li>
                                    <a href="/" class="has dropdown-toggle">Home </a>
                                </li>

                                <li><a href="{{ route('about') }}" class="has">About </i></a></li>
                                <li><a href="{{ route('blog') }}" class="has">Blog </i></a></li>
                                <li><a href="{{ route('news') }}" class="has">News </i></a></li>
                                <li><a href="{{ route('events') }}" class="has">Events </i></a></li>
                                <li><a href="{{ route('culturals') }}" class="has">Culturals </i></a></li>
                                <li><a href="#" class="has dropdown-toggle">Memorials <i
                                            class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('memorials', ['anusmarana kurippu']) }}">anusmarana
                                                kurippu</a></li>
                                        <li><a href="{{ route('memorials', ['jeeva charithram']) }}">jeeva charithram</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#" class="has dropdown-toggle">Gallery <i
                                            class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('gallery') }}">Images</a></li>
                                        <li><a href="{{ route('videos') }}">Videos</a>
                                        </li>
                                    </ul>
                                </li>
                                {{-- <li><a href="{{ route('gallery') }}"> Gallery </i></a></li>
                                <li><a href="{{ route('videos') }}"> Videos </i></a></li> --}}
                                <li><a href="#" class="has dropdown-toggle">Litrature<i
                                            class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('literature', ['poem']) }}">Poem</a></li>
                                        <li><a href="{{ route('literature', ['story']) }}">Story</a></li>
                                        <li><a href="{{ route('articles') }}" class="has">Articles </i></a></li>
                                        <li><a href="{{ route('literature', ['book review']) }}">Book review</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="has dropdown-toggle">Elements <i
                                            class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('little') }}"> Little </i></a></li>
                                        <li><a href="{{ route('jana-sangeetham') }}"> Jana Sangeetham </i></a></li>
                                        <li><a href="{{ route('ipta-theatre') }}">IPTA Theatre</i></a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('contact') }}"> Contact </i></a></li>
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
