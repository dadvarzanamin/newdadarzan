<nav class="navbar navbar-expand-lg navbar-main">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('site/assets/images/logo/logo.svg') }}" alt="logo" class="logo-img">
        </a>

        <div class="right-nav">
            <a href="{{ route('cart') }}" class="card___btn">
                {{-- SVG همون قبلی --}}
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
                    <li class="nav-item dropdown has-megamenu">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">خانه</a>
                        <ul class="dropdown-menu fade-down">
                            <li><a class="dropdown-item" href="{{ route('home') }}">خانه یک</a></li>
                            <li><a class="dropdown-item" href="{{ route('home.two') }}">خانه دو</a></li>
                            <li><a class="dropdown-item" href="{{ route('home.three') }}">خانه سه</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}"><span>درباره ما</span></a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">فروشگاه ها</a>
                        <ul class="dropdown-menu fade-down">
                            <li><a class="dropdown-item" href="{{ route('prompts') }}">پرامپت ها</a></li>
                            <li><a class="dropdown-item" href="{{ route('product.details') }}">جزئیات محصول</a></li>
                            <li><a class="dropdown-item" href="{{ route('cart') }}">سبد خرید</a></li>
                            <li><a class="dropdown-item" href="{{ route('checkout') }}">فرم پرداخت</a></li>
                            <li><a class="dropdown-item" href="{{ route('seller') }}">فروشندگان</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">صفحات</a>
                        <ul class="dropdown-menu fade-down">
                            <li><a class="dropdown-item" href="{{ route('generator') }}">تولیدکننده عکس</a></li>
                            <li><a class="dropdown-item" href="{{ route('services') }}">خدمات ما</a></li>
                            <li><a class="dropdown-item" href="{{ route('pricing') }}">قیمت گذاری ها</a></li>
                            <li><a class="dropdown-item" href="{{ route('collection') }}">کالکشن ها</a></li>
                            <li><a class="dropdown-item" href="{{ route('team') }}">تیم ما</a></li>
                            <li><a class="dropdown-item" href="{{ route('profile') }}">پروفایل</a></li>
                            <li><a class="dropdown-item" href="{{ route('faq') }}">سوالات متداول</a></li>
                            <li><a class="dropdown-item" href="{{ route('404') }}">404</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">مقالات</a>
                        <ul class="dropdown-menu fade-down">
                            <li><a class="dropdown-item" href="{{ route('blog.grid') }}">گرید مقالات</a></li>
                            <li><a class="dropdown-item" href="{{ route('blog.right') }}">سایدبار مقالات</a></li>
                            <li><a class="dropdown-item" href="{{ route('blog.standard') }}">مقالات استاندارد</a></li>
                            <li><a class="dropdown-item" href="{{ route('blog.details') }}">جزئیات مقالات</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}"><span>تماس با ما</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
