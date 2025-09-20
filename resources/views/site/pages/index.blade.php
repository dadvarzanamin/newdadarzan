@extends('site.layouts.base')

@section('title', 'موسسه حقوقی دادورزان امین')

@push('page_styles')
    <style>
        .team-slider {
            direction: rtl;
        }

        .team-item {
            height: 100%;
        }

        .team-section .swiper-pagination-bullet {
            opacity: .6
        }

        .team-section .swiper-pagination-bullet-active {
            opacity: 1
        }

        .team-section .swiper-button-prev,
        .team-section .swiper-button-next {
            width: 44px;
            height: 44px;
            border-radius: 999px;
            background: rgba(0, 0, 0, .08);
            backdrop-filter: blur(4px);
            color: hsl(var(--base));
        }

        .team-section .swiper-button-prev:after,
        .team-section .swiper-button-next:after {
            font-size: 16px
        }

        .workshop-slider {
            direction: rtl;
        }

        /*.workshop-slider .swiper-slide {*/
        /*    height: auto;*/
        /*}*/

        /*.workshop-slider .swiper-slide {*/
        /*    width: unset !important;*/
        /*    box-sizing: border-box;*/
        /*}*/


        .workshop-slider .swiper-slide > * {
            margin-left: 0;
            margin-right: 0;
        }

        .workshop-slider .swiper-button-prev,
        .workshop-slider .swiper-button-next {
            width: 44px;
            height: 44px;
            border-radius: 999px;
            background: rgba(0, 0, 0, .08);
            backdrop-filter: blur(4px);
            color: hsl(var(--base));
        }

        .workshop-slider .swiper-button-prev:after,
        .workshop-slider .swiper-button-next:after {
            font-size: 16px
        }
    </style>
@endpush

@section('content')
    {{--banner section--}}
    <section class="banner-section ">
        <div class="container">
            <div class="row row-gap-5">
                <div class="col-lg-6 align-self-center">
                    <div class="banner-section__content">
                        <h1 class="right-reveal"> موسسه حقوقی <span>دادورزان امین</span></h1>
                        <p class="right-reveal">
                            شرکت حقوقی با وکلای حرفه‌ای و مجرب، حقوق مهاجرتی و مشاوره مالیاتی و مشاوره حقوقی دادگستری و
                            کلیه امور وکالتی
                        </p>
                        <div
                            class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start gap-4 right-reveal">
                            <a href="login.html" class="btn btn--base">
                                شروع کنید
                                <i class="flaticon-right-arrow"></i>
                            </a>
                            <div class="community-content">
                                <div class="img">
                                    <figure class="image-effect">
                                        <img src="{{asset('site/assets/images/community/1.png')}}"
                                             alt="community images">
                                    </figure>
                                    <figure class="image-effect">
                                        <img src="{{asset('site/assets/images/community/2.png')}}"
                                             alt="community images">
                                    </figure>
                                    <div class="numbers">
                                        +۹M
                                    </div>
                                </div>
                                <div class="text">
                                    به <span>جمع مشریان ما</span> بپیوندید
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="position-relative ms-xl-5">
                        <div class="shape-2"></div>
                        <div class="banner-section__img">
                            <figure class="image-effect right-reveal">
                                <img src="{{asset('site/assets/images/banner/b1-new.jpg')}}" alt="banner images"
                                     class="img-fluid w-100">
                            </figure>
                            <figure class="image-effect left-reveal">
                                <img src="{{asset('site/assets/images/banner/b2-new.jpg')}}" alt="banner images"
                                     class="img-fluid w-100">
                            </figure>
                            <figure class="image-effect top-reveal">
                                <img src="{{asset('site/assets/images/banner/b3-new.png')}}" alt="banner images"
                                     class="img-fluid w-100">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--workshop section--}}
    <section>
        <div class="container section-two-bg py-120">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <span class="sub-title top-reveal">کارگاه</span>
                        <h2 class="top-reveal">کارگاه های آموزشی ما</h2>
                    </div>
                </div>
            </div>

            <div class="row row-gap-4 mt-60">
                <div class="col-lg-12">
                    <div class="workshop-slider swiper">
                        <div class="swiper-wrapper">
                            @foreach($workshops as $workshop)
                                <div class="swiper-slide">
                                    <div class="explore-item">
                                        <div
                                            class="explore-item-header d-flex align-items-center justify-content-between">
                                            <div class="explore-title">
                                                <img src="{{ asset('storage/'.$workshop->image) }}"
                                                     alt="user"> {{ $workshop->teacher }}
                                            </div>
                                            <div class="star-list">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>

                                        <div class="explore-img">
                                            <div class="featured-price">{{ $workshop->price }} تومان</div>
                                            <figure class="image-effect">
                                                <img src="{{ asset('storage/'.$workshop->image) }}"
                                                     alt="explore images"
                                                     class="img-fluid w-100" loading="lazy">
                                            </figure>
                                            <div class="heart-content"><i class="fa-solid fa-heart"></i> 12</div>
                                            <h5 class="featured-title"><a
                                                    href="{{ url('دپارتمان-اموزش-و-پژوهش/دوره-های-آموزشی/' . $workshop->slug) }}">{{$workshop->title}}</a>
                                            </h5>
                                        </div>

                                        <div
                                            class="explore-item-footer d-flex align-items-center justify-content-between">
                                            <div class="explore-title">
                                                <div class="img">
                                                    <img src="{{ asset('storage/'.$workshop->image) }}"
                                                         alt="explore"></div>
                                                دوره آموزشی
                                            </div>
                                            <div class="view-list"><i class="fa-solid fa-cart-plus"></i> 341</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev" aria-label="قبلی"></div>
                        <div class="swiper-button-next" aria-label="بعدی"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section section-two-bg py-120">
        <div class="container">
            <div class="row row-gap-4">
                <div class="col-lg-6 align-self-center">
                    <div class="about-section__img" dir="ltr">
                        <div class="image-one">
                            <figure class="image-effect right-reveal">
                                <img src="{{asset('site/assets/images/about/1.jpg')}}" alt="about images"
                                     class="img-fluid w-100">
                            </figure>
                        </div>
                        <div class="image-two d-grid">
                            <figure class="image-effect bottom-reveal">
                                <img src="{{asset('site/assets/images/about/2.jpg')}}" alt="about images"
                                     class="img-fluid w-100">
                            </figure>
                            <figure class="image-effect top-reveal">
                                <img src="{{asset('site/assets/images/about/3.jpg')}}" alt="about images"
                                     class="img-fluid w-100">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-section__content">
                        <div class="section-title">
                            <span class="sub-title right-reveal">درباره ما</span>
                            <h2 class="right-reveal">
                                ارائه دهنده خدمات جامع حقوقی به سبکی نوین
                            </h2>
                            <p class="right-reveal">
                                تفاوتی ندارد یک کسب و کار کوچک داشته باشید یا یک هلدینگ بین المللی، در برابر چالش‌های
                                حقوقی همواره نیاز به یک مشاور حقوقی با تجربه و قراردادهای منسجم خواهید داشت. موسسه حقوقی
                                دادورزان امین، این امکان را برای شما به ارمغان آورده است تا تمام امور حقوقی و ثبتی خود
                                را بدون دغدغه و به صورت یکپارچه به تیم متخصص و باتجربه‌ای بسپارید که سال‌ها در این حوزه
                                فعالیت داشته و به انواع مسائل و قوانین کسب و کار تسلط بالایی دارند
                            </p>
                            <a href="about.html" class="btn btn--base right-reveal">
                                بیشتر بخوانید
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="feature-section py-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <span class="sub-title top-reveal">خدمات برای موکلین</span>
                        <h2 class="top-reveal">برخی از خدمات مجموعه ما برای موکلین
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center row-gap-4 mt-60">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="feature-section__item top-reveal">
                        <div class="icon">
                            <i class="flaticon-photo-editing"></i>
                        </div>
                        <div class="text">
                            <h5>نظریه شورای حقوقی</h5>
                            <p>بر اساس ایده‌های خود، تصاویر منحصر به فرد ایجاد کنید. ماموریت ما این است که این روش را
                                متحول کنیم.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="feature-section__item top-reveal">
                        <div class="icon">
                            <i class="flaticon-image-edit"></i>
                        </div>
                        <div class="text">
                            <h5>ایرانیان خارج از کشور</h5>
                            <p>بر اساس ایده‌های خود، تصاویر منحصر به فرد ایجاد کنید. ماموریت ما این است که این روش را
                                متحول کنیم.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="feature-section__item top-reveal">
                        <div class="icon">
                            <i class="flaticon-camera"></i>
                        </div>
                        <div class="text">
                            <h5>تنظیم قرارداد</h5>
                            <p>بر اساس ایده‌های خود، تصاویر منحصر به فرد ایجاد کنید. ماموریت ما این است که این روش را
                                متحول کنیم.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="feature-section__item top-reveal">
                        <div class="icon">
                            <i class="flaticon-replace"></i>
                        </div>
                        <div class="text">
                            <h5>تنظیم اوراق قضایی</h5>
                            <p>بر اساس ایده‌های خود، تصاویر منحصر به فرد ایجاد کنید. ماموریت ما این است که این روش را
                                متحول کنیم.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center row-gap-4 mt-60">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="feature-section__item top-reveal">
                        <div class="icon">
                            <i class="flaticon-photo-editing"></i>
                        </div>
                        <div class="text">
                            <h5>مشاوره</h5>
                            <p>بر اساس ایده‌های خود، تصاویر منحصر به فرد ایجاد کنید. ماموریت ما این است که این روش را
                                متحول کنیم.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="feature-section__item top-reveal">
                        <div class="icon">
                            <i class="flaticon-image-edit"></i>
                        </div>
                        <div class="text">
                            <h5>داوری</h5>
                            <p>بر اساس ایده‌های خود، تصاویر منحصر به فرد ایجاد کنید. ماموریت ما این است که این روش را
                                متحول کنیم.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="feature-section__item top-reveal">
                        <div class="icon">
                            <i class="flaticon-camera"></i>
                        </div>
                        <div class="text">
                            <h5>ثبت شرکت</h5>
                            <p>بر اساس ایده‌های خود، تصاویر منحصر به فرد ایجاد کنید. ماموریت ما این است که این روش را
                                متحول کنیم.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="feature-section__item top-reveal">
                        <div class="icon">
                            <i class="flaticon-replace"></i>
                        </div>
                        <div class="text">
                            <h5>قبول دعاوی</h5>
                            <p>بر اساس ایده‌های خود، تصاویر منحصر به فرد ایجاد کنید. ماموریت ما این است که این روش را
                                متحول کنیم.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-120">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <span class="sub-title top-reveal">خدمات برای وکلا</span>
                        <h2 class="top-reveal">برخی از خدمات مجموعه ما برای وکلای عزیز
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center row-gap-4 mt-60">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="feature-section__item top-reveal">
                        <div class="icon">
                            <i class="flaticon-photo-editing"></i>
                        </div>
                        <div class="text">
                            <h5>نظریه شورای حقوقی</h5>
                            <p>بر اساس ایده‌های خود، تصاویر منحصر به فرد ایجاد کنید. ماموریت ما این است که این روش را
                                متحول کنیم.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="feature-section__item top-reveal">
                        <div class="icon">
                            <i class="flaticon-image-edit"></i>
                        </div>
                        <div class="text">
                            <h5>توکیل</h5>
                            <p>بر اساس ایده‌های خود، تصاویر منحصر به فرد ایجاد کنید. ماموریت ما این است که این روش را
                                متحول کنیم.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="feature-section__item top-reveal">
                        <div class="icon">
                            <i class="flaticon-camera"></i>
                        </div>
                        <div class="text">
                            <h5>استعلامات</h5>
                            <p>بر اساس ایده‌های خود، تصاویر منحصر به فرد ایجاد کنید. ماموریت ما این است که این روش را
                                متحول کنیم.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="feature-section__item top-reveal">
                        <div class="icon">
                            <i class="flaticon-replace"></i>
                        </div>
                        <div class="text">
                            <h5>مشاوره تخصصی</h5>
                            <p>بر اساس ایده‌های خود، تصاویر منحصر به فرد ایجاد کنید. ماموریت ما این است که این روش را
                                متحول کنیم.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="generate-image-section section-two-bg py-120">
        <div class="container">
            <div class="row row-gap-5 justify-content-between">
                <div class="col-lg-6 col-xl-5 align-self-center">
                    <div class="section-title">
                        <span class="sub-title right-reveal">ایجاد تصویر </span>
                        <h2 class="right-reveal">از هوش مصنوعی روی عکس‌هایتان استفاده کنید تا ظاهری جدید ایجاد کنید</h2>
                        <p class="right-reveal">ماموریت ما این است که با بهره‌گیری از قدرت هوش مصنوعی برای تولید تصاویر
                            خیره‌کننده و با کیفیت بالا، انقلابی در نحوه خلق تصاویر بصری ایجاد کنیم. چه یک هنرمند، طراح
                            یا متخصص کسب و کار باشید.</p>
                        <a href="generator.html" class="btn btn--base right-reveal">
                            عکس جدید بسازید
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5 align-self-center">
                    <div class="generate-image-section__img">
                        <div class="generate-image">
                            <figure class="image-effect right-reveal">
                                <img src="{{asset('site/assets/images/about/g1.jpg')}}" alt="about images"
                                     class="img-fluid w-100">
                            </figure>
                            <figure class="image-effect left-reveal">
                                <img src="{{asset('site/assets/images/about/g2.jpg')}}" alt="about images"
                                     class="img-fluid w-100">
                            </figure>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" id="round-shape" width="295" height="295"
                             viewBox="0 0 295 295" fill="none">
                            <path
                                d="M63.6301 132.13C63.1459 131.745 62.7316 131.267 62.4163 130.713C61.5887 129.258 61.5576 127.481 62.3342 125.998L79.7856 92.6621C81.0456 90.2546 84.019 89.3249 86.4265 90.5848C88.8348 91.845 89.764 94.8185 88.5034 97.226L74.6023 123.78L104.53 125.401C107.243 125.548 109.324 127.867 109.177 130.58C109.03 133.293 106.711 135.374 103.998 135.227L66.4273 133.192C65.3918 133.137 64.4179 132.757 63.6301 132.13Z"
                                fill="url(#paint0_linear_59_421)"/>
                            <path
                                d="M67.4367 131.644C67.258 131.501 67.0876 131.346 66.9261 131.175C65.0554 129.204 65.137 126.09 67.108 124.219C83.3042 108.85 104.529 100.707 126.874 101.293C149.219 101.878 169.987 111.12 185.359 127.318C197.297 139.899 204.929 155.599 207.43 172.72C209.874 189.455 207.28 206.308 199.928 221.457C198.742 223.901 195.798 224.922 193.353 223.735C190.908 222.55 189.888 219.605 191.075 217.16C197.563 203.793 199.851 188.918 197.692 174.143C195.487 159.041 188.753 145.192 178.221 134.091C164.66 119.802 146.333 111.646 126.616 111.13C106.9 110.613 88.1717 117.797 73.8822 131.357C72.0813 133.066 69.3258 133.146 67.4367 131.644Z"
                                fill="url(#paint1_linear_59_421)"/>
                            <defs>
                                <linearGradient id="paint0_linear_59_421" x1="109.683" y1="138.254" x2="69.0893"
                                                y2="105.967" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#FFE451"/>
                                    <stop offset="1" stop-color="#ADFF35"/>
                                </linearGradient>
                                <linearGradient id="paint1_linear_59_421" x1="228.628" y1="209.252" x2="88.2325"
                                                y2="97.5829" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#FFE451"/>
                                    <stop offset="1" stop-color="#ADFF35"/>
                                </linearGradient>
                            </defs>
                        </svg>

                        <label class="upload-image" for="upload-image">
                            <i class="flaticon-generative-image"></i>
                            تصویر را آپلود کنید
                            <input type="file" id="upload-image" class="upload-image-input d-none">
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="portfolio-section section-one-bg py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                            <span class="sub-title top-reveal">
                                نمونه کارهای ما
                            </span>
                        <h2 class="top-reveal">آثار هنری تولید شده توسط هوش مصنوعی توسط مشتریان راضی</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-60">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center">
                        <div class="portfolio-nav">
                            <button class="active" data-filter="*">خلاقانه</button>
                            <button data-filter=".ad">هدایت هنری</button>
                            <button data-filter=".nr">طبیعت ها</button>
                            <button data-filter=".il">تصویرسازی</button>
                            <span class="nav-indicator"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 p-0">
                    <div class="card-grid" id="container">
                        <div class="card-grid-item nr il">
                            <a class="portfolio-item" href="{{asset('site/assets/images/portfolio/1.jpg')}}"
                               title="The Cleaner by Pixgix">
                                <figure class="image-effect">
                                    <img src="{{asset('site/assets/images/portfolio/1.jpg')}}" alt="portfolio images"
                                         class="img-fluid w-100">
                                </figure>
                            </a>
                        </div>
                        <div class="card-grid-item ad il">
                            <a class="portfolio-item" href="{{asset('site/assets/images/portfolio/2.jpg')}}"
                               title="The Cleaner by Pixgix">
                                <figure class="image-effect">
                                    <img src="{{asset('site/assets/images/portfolio/2.jpg')}}" alt="portfolio images"
                                         class="img-fluid w-100">
                                </figure>
                            </a>
                        </div>
                        <div class="card-grid-item nr">
                            <a class="portfolio-item" href="{{asset('site/assets/images/portfolio/3.jpg')}}"
                               title="The Cleaner by Pixgix">
                                <figure class="image-effect">
                                    <img src="{{asset('site/assets/images/portfolio/3.jpg')}}" alt="portfolio images"
                                         class="img-fluid w-100">
                                </figure>
                            </a>
                        </div>
                        <div class="card-grid-item ad">
                            <a class="portfolio-item" href="{{asset('site/assets/images/portfolio/48.jpg')}}"
                               title="The Cleaner by Pixgix">
                                <figure class="image-effect">
                                    <img src="{{asset('site/assets/images/portfolio/4.jpg')}}" alt="portfolio images"
                                         class="img-fluid w-100">
                                </figure>
                            </a>
                        </div>
                        <div class="card-grid-item nr ad">
                            <a class="portfolio-item" href="{{asset('site/assets/images/portfolio/5.jpg')}}"
                               title="The Cleaner by Pixgix">
                                <figure class="image-effect">
                                    <img src="{{asset('site/assets/images/portfolio/5.jpg')}}" alt="portfolio images"
                                         class="img-fluid w-100">
                                </figure>
                            </a>
                        </div>
                        <div class="card-grid-item ad">
                            <a class="portfolio-item" href="{{asset('site/assets/images/portfolio/6.jpg')}}"
                               title="The Cleaner by Pixgix">
                                <figure class="image-effect">
                                    <img src="{{asset('site/assets/images/portfolio/6.jpg')}}" alt="portfolio images"
                                         class="img-fluid w-100">
                                </figure>
                            </a>
                        </div>
                        <div class="card-grid-item il nr">
                            <a class="portfolio-item" href="{{asset('site/assets/images/portfolio/7.jpg')}}"
                               title="The Cleaner by Pixgix">
                                <figure class="image-effect">
                                    <img src="{{asset('site/assets/images/portfolio/7.jpg')}}" alt="portfolio images"
                                         class="img-fluid w-100">
                                </figure>
                            </a>
                        </div>
                        <div class="card-grid-item il">
                            <a class="portfolio-item" href="{{asset('site/assets/images/portfolio/8.jpg')}}"
                               title="The Cleaner by Pixgix">
                                <figure class="image-effect">
                                    <img src="{{asset('site/assets/images/portfolio/8.jpg')}}" alt="portfolio images"
                                         class="img-fluid w-100">
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-two-bg py-60 @@services-text-slide">
        <div class="text-slide swiper">
            <div class="swiper-wrapper slide-transition">
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-text">
                        AI IMAGE GENERATE
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-text">
                        <img src="{{asset('site/assets/images/shape/star.svg')}}" alt="icon">
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-text">
                        AI IMAGE GENERATE
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-text">
                        <img src="{{asset('site/assets/images/shape/star.svg')}}" alt="icon">
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-text">
                        AI IMAGE GENERATE
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-text">
                        <img src="{{asset('site/assets/images/shape/star.svg')}}" alt="icon">
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-text">
                        AI IMAGE GENERATE
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-text">
                        <img src="{{asset('site/assets/images/shape/star.svg')}}" alt="icon">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="working-process-section section-one-bg py-120">
        <div class="container">
            <div class="row row-gap-5">
                <div class="col-xl-6">
                    <div class="section-title">
                        <span class="sub-title right-reveal">فرآیند کار</span>
                        <h2 class="right-reveal">تولید محتوای بسیار سریع‌تر با هوش مصنوعی</h2>
                    </div>
                    <div class="accordion mt-60 ms-xl-5 top-reveal" id="accordionWorking">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    تولید محتوای هوش مصنوعی چقدر طول می‌کشد؟
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                 data-bs-parent="#accordionWorking">
                                <div class="accordion-body">
                                    <p>ماموریت ما این است که با بهره‌گیری از قدرت هوش مصنوعی برای تولید تصاویر
                                        خیره‌کننده و با کیفیت بالا، انقلابی در نحوه خلق تصاویر بصری ایجاد کنیم. چه یک
                                        هنرمند، طراح یا متخصص کسب و کار باشید.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    آیا می‌توانم برای تصاویر تولید شده توسط هوش مصنوعی، استایل‌های خاصی درخواست کنم؟
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionWorking">
                                <div class="accordion-body">
                                    <p>ماموریت ما این است که با بهره‌گیری از قدرت هوش مصنوعی برای تولید تصاویر
                                        خیره‌کننده و با کیفیت بالا، انقلابی در نحوه خلق تصاویر بصری ایجاد کنیم. چه یک
                                        هنرمند، طراح یا متخصص کسب و کار باشید.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    چه فرمت‌هایی برای دانلود فایل‌ها ارائه می‌دهید؟
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionWorking">
                                <div class="accordion-body">
                                    <p>ماموریت ما این است که با بهره‌گیری از قدرت هوش مصنوعی برای تولید تصاویر
                                        خیره‌کننده و با کیفیت بالا، انقلابی در نحوه خلق تصاویر بصری ایجاد کنیم. چه یک
                                        هنرمند، طراح یا متخصص کسب و کار باشید.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                    آیا محتوای تولید شده توسط هوش مصنوعی قابل تنظیم است؟
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionWorking">
                                <div class="accordion-body">
                                    <p>ماموریت ما این است که با بهره‌گیری از قدرت هوش مصنوعی برای تولید تصاویر
                                        خیره‌کننده و با کیفیت بالا، انقلابی در نحوه خلق تصاویر بصری ایجاد کنیم. چه یک
                                        هنرمند، طراح یا متخصص کسب و کار باشید.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="working-process-section__content" dir="ltr">
                        <div class="process-item bottom-reveal">
                            <div>
                                <div class="icon">
                                    <i class="flaticon-rating-stars"></i>
                                </div>
                                <div class="number">
                                    <span class="odometer" data-odometer-final="75">40</span>K+
                                </div>
                                <p>مشتریان راضی</p>
                            </div>
                        </div>
                        <div class="process-item bottom-reveal">
                            <div>
                                <div class="icon">
                                    <i class="flaticon-image-gallery"></i>
                                </div>
                                <div class="number">
                                    <span class="odometer" data-odometer-final="29">10</span>M
                                </div>
                                <p>ایجاد تصویر</p>
                            </div>
                        </div>
                        <div class="process-item top-reveal">
                            <div>
                                <div class="icon">
                                    <i class="flaticon-camera"></i>
                                </div>
                                <div class="number">
                                    <span class="odometer" data-odometer-final="9">2</span>/10
                                </div>
                                <p>رتبه بندی مشتریان</p>
                            </div>
                        </div>
                        <div class="process-item top-reveal">
                            <div>
                                <div class="icon">
                                    <i class="flaticon-workflow"></i>
                                </div>
                                <div class="number">
                                    <span class="odometer" data-odometer-final="12">9</span>k+
                                </div>
                                <p>پروژه درحال اجرا</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--    <section class="pricing-section section-two-bg py-120">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-12">--}}
    {{--                    <div class="section-title text-center">--}}
    {{--                        <span class="sub-title top-reveal">قیمت گذاری ها</span>--}}
    {{--                        <h2 class="top-reveal">طرح قیمت گذاری ایده آل را انتخاب کنید</h2>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="row row-gap-4 mt-60 justify-content-center">--}}
    {{--                <div class="col-lg-4 col-md-6 top-reveal">--}}
    {{--                    <div class="pricing-section__item">--}}
    {{--                        <div class="header">--}}
    {{--                            <span>پلن معمولی</span>--}}
    {{--                            <h2>رایگان</h2>--}}
    {{--                        </div>--}}
    {{--                        <ul class="pricing-list">--}}
    {{--                            <li>تولید ۵۰ تصویر توسط هوش مصنوعی در ماه</li>--}}
    {{--                            <li>وضوح استاندارد (1080p)</li>--}}
    {{--                            <li>گزینه های سفارشی سازی اولیه</li>--}}
    {{--                            <li>حقوق استفاده تجاری</li>--}}
    {{--                            <li>پشتیبانی ایمیل</li>--}}
    {{--                        </ul>--}}
    {{--                        <a href="login.html" class="btn btn--border">خریداری کنید</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-4 col-md-6 top-reveal">--}}
    {{--                    <div class="pricing-section__item">--}}
    {{--                        <div class="header">--}}
    {{--                            <span>پلن حرفه ای</span>--}}
    {{--                            <h2>۵۹۰تومان<sub>/ماهیانه</sub></h2>--}}
    {{--                        </div>--}}
    {{--                        <ul class="pricing-list">--}}
    {{--                            <li>تولید ۲۰۰ تصویر توسط هوش مصنوعی در ماه</li>--}}
    {{--                            <li>وضوح بالا (4K)</li>--}}
    {{--                            <li>گزینه های سفارشی سازی پیشرفته</li>--}}
    {{--                            <li>حقوق استفاده تجاری</li>--}}
    {{--                            <li>پشتیبانی اولویت دار</li>--}}
    {{--                        </ul>--}}
    {{--                        <a href="login.html" class="btn btn--border">خریداری کنید</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-4 col-md-6 top-reveal">--}}
    {{--                    <div class="pricing-section__item">--}}
    {{--                        <div class="header">--}}
    {{--                            <span>پلن سازمانی</span>--}}
    {{--                            <h2>۹۹۰تومان<sub>/ماهیانه</sub></h2>--}}
    {{--                        </div>--}}
    {{--                        <ul class="pricing-list">--}}
    {{--                            <li>تولید تصویر نامحدود توسط هوش مصنوعی</li>--}}
    {{--                            <li>وضوح تصویر اولترا اچ‌دی (8K)</li>--}}
    {{--                            <li>آموزش مدل AI سفارشی</li>--}}
    {{--                            <li>مدیر حساب اختصاصی</li>--}}
    {{--                            <li>دسترسی و ادغام API</li>--}}
    {{--                        </ul>--}}
    {{--                        <a href="login.html" class="btn btn--border">خریداری کنید</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

    <section class="testimonials-section section-one-bg py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="sub-title top-reveal">دیدگاه مشتریان</span>
                        <h2 class="top-reveal">مشتریان ما درباره Pixgix می‌گویند</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-60">
                <div class="col-lg-12">
                    <div class="testimonials-slider swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonials-slider__item">
                                    <div class="question">
                                        <i class="flaticon-quote"></i>
                                    </div>
                                    <div class="body-text">
                                        <p>"من از کیفیت تصاویر تولید شده توسط هوش مصنوعی شگفت‌زده شدم! این پلتفرم
                                            فوق‌العاده شهودی است و در عرض چند دقیقه، تصاویری خیره‌کننده و کاملاً مطابق
                                            با دیدگاه من داشت. به عنوان کسی که مهارت‌های طراحی محدودی دارد، از حرفه‌ای
                                            به نظر رسیدن تصاویر شگفت‌زده شدم. این ابزار ساعت‌ها در کار من صرفه‌جویی کرده
                                            است و نمی‌توانم اداره کسب و کارم را بدون آن تصور کنم."</p>

                                        <div class="user">
                                            <div class="img">
                                                <img src="{{asset('site/assets/images/testimonial/1.jpg')}}" alt="user">
                                            </div>
                                            <div class="text">
                                                <h4>امیرارسلان رهنما</h4>
                                                <p>بازاریاب دیجیتال</p>
                                                <ul>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonials-slider__item">
                                    <div class="question">
                                        <i class="flaticon-quote"></i>
                                    </div>
                                    <div class="body-text">
                                        <p>"من از کیفیت تصاویر تولید شده توسط هوش مصنوعی شگفت‌زده شدم! این پلتفرم
                                            فوق‌العاده شهودی است و در عرض چند دقیقه، تصاویری خیره‌کننده و کاملاً مطابق
                                            با دیدگاه من داشت. به عنوان کسی که مهارت‌های طراحی محدودی دارد، از حرفه‌ای
                                            به نظر رسیدن تصاویر شگفت‌زده شدم. این ابزار ساعت‌ها در کار من صرفه‌جویی کرده
                                            است و نمی‌توانم اداره کسب و کارم را بدون آن تصور کنم."</p>

                                        <div class="user">
                                            <div class="img">
                                                <img src="{{asset('site/assets/images/testimonial/2.jpg')}}" alt="user">
                                            </div>
                                            <div class="text">
                                                <h4>ایلیا میرزایی</h4>
                                                <p>گرافیست</p>
                                                <ul>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonials-slider__item">
                                    <div class="question">
                                        <i class="flaticon-quote"></i>
                                    </div>
                                    <div class="body-text">
                                        <p>"من از کیفیت تصاویر تولید شده توسط هوش مصنوعی شگفت‌زده شدم! این پلتفرم
                                            فوق‌العاده شهودی است و در عرض چند دقیقه، تصاویری خیره‌کننده و کاملاً مطابق
                                            با دیدگاه من داشت. به عنوان کسی که مهارت‌های طراحی محدودی دارد، از حرفه‌ای
                                            به نظر رسیدن تصاویر شگفت‌زده شدم. این ابزار ساعت‌ها در کار من صرفه‌جویی کرده
                                            است و نمی‌توانم اداره کسب و کارم را بدون آن تصور کنم."</p>

                                        <div class="user">
                                            <div class="img">
                                                <img src="{{asset('site/assets/images/testimonial/1.jpg')}}" alt="user">
                                            </div>
                                            <div class="text">
                                                <h4>امیرارسلان رهنما</h4>
                                                <p>بازاریاب دیجیتال</p>
                                                <ul>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonials-slider__item">
                                    <div class="question">
                                        <i class="flaticon-quote"></i>
                                    </div>
                                    <div class="body-text">
                                        <p>"من از کیفیت تصاویر تولید شده توسط هوش مصنوعی شگفت‌زده شدم! این پلتفرم
                                            فوق‌العاده شهودی است و در عرض چند دقیقه، تصاویری خیره‌کننده و کاملاً مطابق
                                            با دیدگاه من داشت. به عنوان کسی که مهارت‌های طراحی محدودی دارد، از حرفه‌ای
                                            به نظر رسیدن تصاویر شگفت‌زده شدم. این ابزار ساعت‌ها در کار من صرفه‌جویی کرده
                                            است و نمی‌توانم اداره کسب و کارم را بدون آن تصور کنم."</p>

                                        <div class="user">
                                            <div class="img">
                                                <img src="{{asset('site/assets/images/testimonial/2.jpg')}}" alt="user">
                                            </div>
                                            <div class="text">
                                                <h4>ایلیا میرزایی</h4>
                                                <p>گرافیست</p>
                                                <ul>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="call-to-action-section section-base-bg py-120">
        <div class="container">
            <div class="row row-gap-5 justify-content-between">
                <div class="col-lg-6 col-xl-5 align-self-center">
                    <div class="section-title">
                        <span class="sub-title right-reveal">اکنون به ما بپیوندید</span>
                        <h2 class="right-reveal">پتانسیل خلاقانه خود را با هوش مصنوعی آزاد کنید</h2>
                        <p class="right-reveal">ماموریت ما این است که با بهره‌گیری از قدرت هوش مصنوعی برای تولید تصاویر
                            خیره‌کننده و با کیفیت بالا، انقلابی در نحوه خلق تصاویر ایجاد کنیم.</p>
                        <a href="login.html" class="btn btn--black right-reveal">
                            رایگان ثبت نام کنید
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="call-to-action-section__img" dir="ltr">
                        <figure class="image-effect right-reveal">
                            <img src="{{asset('site/assets/images/call-to-action/1.jpg')}}" alt="action images"
                                 class="img-fluid w-100">
                        </figure>
                        <figure class="image-effect left-reveal">
                            <img src="{{asset('site/assets/images/call-to-action/2.jpg')}}" alt="action images"
                                 class="img-fluid w-100">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-section section-one-bg py-120">
        <div class="container">
            <div class="row row-gap-4 justify-content-center">
                <div class="col-md-8 align-self-end">
                    <div class="section-title">
                        <span class="sub-title right-reveal">مقالات اخیر</span>
                        <h2 class="right-reveal">آخرین اخبار و مقالات حقوقی</h2>
                    </div>
                </div>
                <div class="col-md-4 align-self-end">
                    <div class="text-start pb-2">
                        <a href="blog-grid.html" class="btn btn--base left-reveal">
                            مشاهده مقالات
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mt-60">
                <div class="col-lg-12">
                    <div class="blog-slider swiper">
                        <div class="swiper-wrapper">
                            @foreach($emploees as $emploee)
                                <div class="swiper-slide">
                                    <div class="blog-grid-item">
                                        <div class="blog-date">
                                            <div class="bar-icon"></div>
                                            ۲۱ تیر ۱۴۰۴
                                        </div>
                                        <a href="blog-details.html">
                                            <figure class="image-effect">
                                                <img src="{{ asset($emploee->image) }}" alt="blog images"
                                                     class="img-fluid w-100">
                                            </figure>
                                        </a>
                                        <div class="post-type">
                                            مدرن
                                            <div class="bar-icon2"></div>
                                        </div>
                                        <div class="blog-content">
                                            <h4>
                                                <a href="blog-details.html">۵ روند برتر تولید تصویر هوش مصنوعی که باید
                                                    در
                                                    سال ۲۰۲۵ به آنها توجه کرد</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="company-section section-two-bg py-100">
        <div class="container">
            <div class="row mb-60">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="sub-title top-reveal">موکلین</span>
                        <h2 class="top-reveal">برخی از موکلین ما</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="company-slide swiper">
                        <div class="swiper-wrapper slide-transition">
                            @foreach($customers as $customer)
                                <div class="swiper-slide inner-slide-element">
                                    <img src="{{$customer->image}}" alt="{{$customer->name}}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team-section section-one-bg py-120">
        <div class="container">
            <div class="row row-gap-4 justify-content-between align-items-end">
                <div class="col-md-8 align-self-end">
                    <div class="section-title">
                        <span class="sub-title right-reveal">تیم ما</span>
                        <h2 class="right-reveal">اعضای کلیدی</h2>
                    </div>
                </div>
                <div class="col-md-4 align-self-end">
                    <div class="text-start pb-2">
                        <a href="/team" class="btn btn--base left-reveal">
                            مشاهده همه
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row mt-60">
                <div class="col-lg-12">
                    <div class="team-slider swiper">
                        <div class="swiper-wrapper">
                            @foreach($emploees as $emploee)
                                <div class="swiper-slide">
                                    <div class="team-item">
                                        <figure class="image-effect">
                                            <img src="{{ asset($emploee->image) }}" alt="{{ $emploee->fullname }}"
                                                 class="img-fluid w-100" loading="lazy">
                                        </figure>
                                        <ul class="social">
                                            <li><a href="https://www.facebook.com/" target="_blank"><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="https://www.instagram.com/" target="_blank"><i
                                                        class="fab fa-instagram"></i></a></li>
                                            <li><a href="https://www.pinterest.com/" target="_blank"><i
                                                        class="fa-brands fa-pinterest-p"></i></a></li>
                                        </ul>
                                        <div class="name-details">
                                            <h4>
                                                <a href="{{ url('تیم-ما/رزومه/'.$emploee->slug) }}">{{ $emploee->fullname }}</a>
                                            </h4>
                                            <p>{{ $emploee->side }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev" aria-label="قبلی"></div>
                        <div class="swiper-button-next" aria-label="بعدی"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('page_scripts')
    {{--    <script>--}}
    {{--        document.addEventListener('DOMContentLoaded', function () {--}}
    {{--            const el = document.querySelector('.team-slider');--}}
    {{--            if (!el) return;--}}

    {{--            const teamSwiper = new Swiper(el, {--}}
    {{--                speed: 500,--}}
    {{--                spaceBetween: 20,--}}
    {{--                loop: true,--}}
    {{--                grabCursor: true,--}}
    {{--                rtlTranslate: true,--}}

    {{--                // 🔧 مهم برای وقتی اسلایدر داخل تب/اکاردئون/بخش مخفی است--}}
    {{--                observer: true,--}}
    {{--                observeParents: true,--}}
    {{--                observeSlideChildren: true,--}}
    {{--                // وقتی تعداد اسلایدها کم است، از خراب شدن چیدمان جلوگیری می‌کند--}}
    {{--                watchOverflow: true,--}}

    {{--                pagination: {--}}
    {{--                    el: '.team-section .swiper-pagination',--}}
    {{--                    clickable: true--}}
    {{--                },--}}
    {{--                navigation: {--}}
    {{--                    nextEl: '.team-section .swiper-button-next',--}}
    {{--                    prevEl: '.team-section .swiper-button-prev',--}}
    {{--                },--}}
    {{--                keyboard: {enabled: true},--}}

    {{--                // اتوپلی رو فعلاً خاموش می‌گذاریم تا برای دیباگ "وایسته"--}}
    {{--                autoplay: {delay: 3500, disableOnInteraction: false},--}}

    {{--                slidesPerView: 1,--}}
    {{--                breakpoints: {--}}
    {{--                    576: {slidesPerView: 2, spaceBetween: 20},--}}
    {{--                    992: {slidesPerView: 3, spaceBetween: 24},--}}
    {{--                    1200: {slidesPerView: 4, spaceBetween: 28}--}}
    {{--                }--}}
    {{--            });--}}

    {{--            // اگر این سکشن داخل تب/آف‌کانواس/مدال باز می‌شود، حتماً آپدیت بزن:--}}
    {{--            // مثال با بوت‌استرپ تب:--}}
    {{--            document.querySelectorAll('[data-bs-toggle="tab"]').forEach(t =>--}}
    {{--                t.addEventListener('shown.bs.tab', () => teamSwiper.update())--}}
    {{--            );--}}

    {{--            // دیباگ کنسول--}}
    {{--            window.teamSwiper = teamSwiper;--}}
    {{--            // console tips:--}}
    {{--            // teamSwiper.update(); teamSwiper.slideNext();--}}
    {{--        });--}}
    {{--    </script>--}}

    {{--    <script>--}}
    {{--        document.addEventListener('DOMContentLoaded', function () {--}}
    {{--            const slider = document.querySelector('.workshop-slider');--}}
    {{--            if (!slider) return;--}}

    {{--            const swiper = new Swiper(slider, {--}}
    {{--                speed: 500,--}}
    {{--                spaceBetween: 20,--}}
    {{--                grabCursor: true,--}}

    {{--                // ❌ بدون لوپ، بدون ری‌وایند--}}
    {{--                loop: false,--}}
    {{--                rewind: false,--}}
    {{--                watchOverflow: true,--}}

    {{--                // اگر داخل تب/آکاردئون است--}}
    {{--                observer: true,--}}
    {{--                observeParents: true,--}}
    {{--                observeSlideChildren: true,--}}
    {{--                updateOnWindowResize: true,--}}

    {{--                // اگر قبلاً autoplay داشتی، پاک کن:--}}
    {{--                // autoplay: undefined,--}}

    {{--                pagination: {--}}
    {{--                    el: slider.querySelector('.swiper-pagination'),--}}
    {{--                    clickable: true--}}
    {{--                },--}}
    {{--                navigation: {--}}
    {{--                    nextEl: slider.querySelector('.swiper-button-next'),--}}
    {{--                    prevEl: slider.querySelector('.swiper-button-prev')--}}
    {{--                },--}}
    {{--                keyboard: {enabled: true},--}}

    {{--                slidesPerView: 3,--}}
    {{--                slidesPerGroup: 1,--}}
    {{--                breakpoints: {--}}
    {{--                    576: {slidesPerView: 2, spaceBetween: 20, slidesPerGroup: 1},--}}
    {{--                    992: {slidesPerView: 3, spaceBetween: 24, slidesPerGroup: 1},--}}
    {{--                    1200: {slidesPerView: 3, spaceBetween: 28, slidesPerGroup: 1}--}}
    {{--                }--}}
    {{--            });--}}

    {{--            window.workshopSwiper = swiper;--}}
    {{--        });--}}
    {{--    </script>--}}
@endpush
