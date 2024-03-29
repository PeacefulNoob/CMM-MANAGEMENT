      @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
    <aside class="app-sidebar sidebar-scroll ps ps--active-y">
        <div class="main-sidebar-header  active"> 
            <a class="desktop-logo logo-light active" href="/home">
                <img src="/assets/images/logow.png" class="main-logo" alt="logo"></a> 
            
            </div>
        <div class="main-sidemenu active">
            <div class="app-sidebar__user clearfix">
                <div class="dropdown user-pro-body">
                    <div class=""> <img alt="user-img" class="avatar avatar-xl brround" src="/assets/images/cetinje.png"><span class="avatar-status profile-status bg-green"></span> </div>
                    <div class="user-info">
                        <h4 class="font-weight-semibold mt-3 mb-0">   {{ Auth::user()->name }}</h4> <span class="mb-0 text-muted">Hello !</span>
                    </div>
                </div>
            </div>
            <ul class="side-menu">
                <li class="side-item side-item-category">Main</li>
                @can('manage-users')
                
                <li class="slide"> <a class="side-menu__item  " href="{{ route('admin.users.index') }}"><span class="side-menu__label">User Management</span></a> </li>
                @endcan
                <li class="side-item side-item-category ">General</li>
                @can('adman')
                <li class="slide"> <a class="side-menu__item" href="/faqs/create"><span class="side-menu__label">Add Faq</span></a> </li>
            <!--     <li class="slide"> <a class="side-menu__item" href="/repairs/create"><span class="side-menu__label">Add Repair packet</span></a> </li>

                <li class="slide"> <a class="side-menu__item" data-toggle="slide" href="#"><span class="side-menu__label dropdown-toggle">Design</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        <li><a class="slide-item" href="/designs/create">Add Design packet</a></li>
                        <li><a class="slide-item" href="/all_designs">List of all Design packets      </a></li>
                    </ul>
                </li>
                <li class="slide"> <a class="side-menu__item" data-toggle="slide" href="#"><span class="side-menu__label dropdown-toggle">Maintenance</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                    <li><a class="slide-item" href="/maintenances/create">Add Maintenance packet</a></li>
                        <li><a class="slide-item" href="/all_maintenances">List of all Maintenance packets      </a></li>
                    </ul>
                </li> -->
                <li class="slide"> <a class="side-menu__item" data-toggle="slide" href="#"><span class="side-menu__label dropdown-toggle">News</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                    <li><a class="slide-item" href="/news/create">Add News post</a></li>
                        <li><a class="slide-item" href="/news">List of all News  </a></li>
                    </ul>
                </li>
                <li class="slide"> <a class="side-menu__item" data-toggle="slide" href="#"><span class="side-menu__label dropdown-toggle">News RUS</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                    <li><a class="slide-item" href="/news_rus/create">Add News post RUS</a></li>
                        <li><a class="slide-item" href="/news_rus">List of all News  RUS</a></li>
                    </ul>
                </li>
                @endcan

            </ul>
    </div>
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>
    <div class="ps__rail-y" style="top: 0px; height: 937px; right: 0px;">
        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 610px;"></div>
    </div>
</aside>
@endguest