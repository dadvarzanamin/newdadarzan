<nav class="navbar navbar-expand-lg navbar-main">
    <div class="container">
        <a class="navbar-brand" href="{{ route('/') }}">
            <img src="{{ asset('site/assets/images/logo/logo.svg') }}" alt="logo" class="logo-img">
        </a>
        <div class="right-nav">
            <a href="#" class="card___btn">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" ...> ... </svg>
                <div class="card-number">3</div>
            </a>
            @guest
                <a href="{{ route('login') }}" class="btn btn--border">ورود</a>
                <a href="{{ route('register') }}" class="btn btn--base">ثبت نام</a>
            @else
                <a href="{{ route('profile') }}" class="btn btn--border">پروفایل</a>
            @endguest

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" ...> ... </svg>
            </button>
        </div>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                    <img src="{{ asset('site/assets/images/logo/logo.svg') }}" alt="logo" class="logo-img">
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="d-flex d-lg-none gap-4 pt-3 justify-content-center">
                <a href="{{ route('login') }}" class="btn btn--border">ورود</a>
                <a href="{{ route('register') }}" class="btn btn--base">ثبت نام</a>
            </div>
            <div class="offcanvas-body align-items-center">
                <ul class="navbar-nav justify-content-center flex-grow-1">
                    @foreach($menus as $menu)
                        @if($menu->submenu == 1)
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">{{$menu->title}}</a>
                                <ul class="dropdown-menu fade-down">
                                    @foreach($submenus as $submenu)
                                        @if($submenu->menu_id == $menu->id)
                                            <li><a class="dropdown-item" href="{{ url($submenu->slug) }}">{{$submenu->title}}</a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                        @elseif($menu->submenu == 0)
                            <li class="nav-item"><a class="nav-link" href="{{ route('/') }}"><span>{{$menu->title}}</span></a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</nav>
