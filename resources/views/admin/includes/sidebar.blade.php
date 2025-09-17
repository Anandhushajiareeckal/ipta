<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu" style="background-color:#060332 !important">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="/" class="waves-effect">
                        <i class="bx bxs-dashboard"></i>
                        <span key="t-dashboards">Dashboard</span>
                    </a>
                </li>

                <!-- <li class="menu-title" key="t-apps">Pages</li> -->



                {{-- About --}}
                <li>
                    <a href="{{ route('admin.about.edit') }}" class=" waves-effect">
                        <i class="bx bx-list-check"></i>
                        <span key="t-ecommerce">About</span>
                    </a>
                </li>
                {{-- blog --}}
                <li>
                    <a href="{{ route('admin.blog.index') }}" class=" waves-effect">
                        <i class="bx bx-news"></i>
                        <span key="t-ecommerce">Blog</span>
                    </a>
                </li>
                {{-- News --}}
                <li>
                    <a href="{{ route('admin.news.index') }}" class=" waves-effect">
                        <i class="bx bx-news"></i>
                        <span key="t-ecommerce">News</span>
                    </a>
                </li>
                {{-- Articles --}}
                <li>
                    <a href="{{ route('admin.articles.index') }}" class=" waves-effect">
                        <i class="bx bx-book"></i>
                        <span key="t-ecommerce">Articles</span>
                    </a>
                </li>

                {{-- Events --}}
                <li>
                    <a href="{{ route('admin.events.index') }}" class=" waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span key="t-ecommerce">Events</span>
                    </a>
                </li>
                {{-- Culturals --}}
                <li>
                    <a href="{{ route('admin.culturals.index') }}" class=" waves-effect">
                        <i class='bx  bx-globe'  ></i> 
                        <span key="t-ecommerce">Culturals</span>
                    </a>
                </li>
                {{-- memorials--}}
                <li>
                    <a href="{{ route('admin.memorials.index') }}" class=" waves-effect">
                        <i class='bx  bx-directions'  ></i> 
                        <span key="t-ecommerce">Memorials</span>
                    </a>
                </li>
                {{-- Gallery --}}
                <li>
                    <a href="{{ route('admin.gallery.index') }}" class=" waves-effect">
                        <i class="bx bx-image"></i>
                        <span key="t-ecommerce">Gallery</span>
                    </a>
                </li>
                {{-- Chithralokam --}}
                <li>
                    <a href="{{ route('admin.chithralokam.index') }}" class=" waves-effect">
                        <i class="bx bx-camera"></i>
                        <span key="t-ecommerce">Chithralokam</span>
                    </a>
                </li>
                {{-- Videos --}}
                <li>
                    <a href="{{ route('admin.videos.index') }}" class=" waves-effect">
                        <i class="bx bx-video"></i>
                        <span key="t-ecommerce">Videos</span>
                    </a>
                </li>

                {{-- Literature --}}
                <li>
                    <a href="{{ route('admin.literature.index') }}" class="waves-effect">
                        <i class="fa fa-book"></i>
                        <span key="t-ecommerce">Literature</span>
                    </a>
                </li>
                
                {{-- Little --}}
                <li>
                    <a href="{{ route('admin.little.index') }}" class=" waves-effect">
                        <i class="bx bx-list-check"></i>
                        <span key="t-ecommerce">Little</span>
                    </a>
                </li>

                {{-- Jana Sangeetham --}}
                <li>
                    <a href="{{ route('admin.jana-sangeetham.index') }}" class="waves-effect">
                        <i class="bx bx-music"></i>
                        <span key="t-ecommerce">Jana Sangeetham</span> 
                    </a>
                </li>
                
                {{-- IPTA Theatre --}}
                <li>
                    <a href="{{ route('admin.ipta-theatre.index') }}" class="waves-effect">
                        <i class="bx bx-tv"></i>
                        <span key="t-ecommerce">IPTA Theatre</span>
                    </a>
                </li>

                {{-- Enquiry --}}
                <li>
                    <a href="{{ route('admin.enquiry.index') }}" class=" waves-effect">
                        <i class="bx bx-envelope"></i>
                        <span key="t-ecommerce">Enquiry</span>
                    </a>
                </li>

                {{-- Contact --}}
                <li>
                    <a href="{{ route('admin.contact.index') }}" class=" waves-effect">
                        <i class="bx bx-phone"></i>
                        <span key="t-ecommerce">Contact</span>
                    </a>
                </li> 
                {{-- Settings --}}
                <li>
                    <a href="{{ route('admin.settings.edit') }}" class=" waves-effect">
                        <i class="bx bx-cog"></i>
                        <span key="t-ecommerce">Settings</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
