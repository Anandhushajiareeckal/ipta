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
                    <a href="{{route('admin.about.edit')}}" class=" waves-effect">
                        <i class="bx bx-list-check"></i>
                        <span key="t-ecommerce">About</span>
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
                
            </ul>
        </div>
    </div>
</div>
