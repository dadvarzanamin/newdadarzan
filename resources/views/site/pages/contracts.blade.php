@extends('site.layouts.base')

@section('title', 'قرارداد ها')

@section('content')
    {{--    Breadcrumb      --}}
    <section class="breadcrumb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb__wrapper">
                        <h2 class="breadcrumb__title">پرامپت ها</h2>
                        <ul class="breadcrumb__list">
                            <li class="breadcrumb__item">
                                <a href="index.html"> خانه</a>
                            </li>
                            <li class="breadcrumb__item">
                                <i class="fa-solid fa-arrow-left"></i>
                            </li>
                            <li class="breadcrumb__item">
                                <span class="breadcrumb__item-text"> پرامپت ها</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--    End Breadcrumb  --}}

    {{--    Prompt          --}}
    <section class="prompts-section py-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex flex-wrap gap-4 align-items-center justify-content-between">
                        <button class=" fs-20 d-flex gap-3 align-items-center filter-btn">
                            <i class="fa-solid fa-sliders"></i>
                            فیلتر
                        </button>
                        <div class="sort-by d-flex gap-3 align-items-center">
                            مرتب سازی بر اساس:
                            <div class="dropdown country__select">
                                <button class="dropdown-toggle country__select_button" type="button"
                                        data-bs-toggle="dropdown">
                                    جدیدترین
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#" data-text="Latest">جدیدترین</a></li>
                                    <li><a class="dropdown-item" href="#" data-text="Oldest">قدیمی ترین</a></li>
                                    <li><a class="dropdown-item" href="#" data-text="Low to High">قدیمی به جدید</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#" data-text="High to Low">جدید به قدیمی</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-gap-4 mt-4">
                <div class="col-xl-3 col-lg-4 filter-content">
                    <div class="d-grid row-gap-4">
                        <!-- Search Filter -->
                        <div class="filter-box">
                            <form action="#">
                                <input type="text" placeholder="جستجو کنید.." aria-label="Search">
                                <button type="submit" aria-label="Search Button">
                                    <i class="fa-solid fa-search"></i>
                                </button>
                            </form>
                        </div>

                        <!-- AI Models Filter -->
                        <div class="filter-box">
                            <h6>مدل های هوش مصنوعی</h6>
                            <div class="filter-check d-grid row-gap-1 mt-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="میدجرنی">
                                    <label class="form-check-label" for="میدجرنی">میدجرنی</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="nightCafe">
                                    <label class="form-check-label" for="nightCafe">نایت کافی</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="dalle">
                                    <label class="form-check-label" for="dalle">دال ای</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="leonardoAi">
                                    <label class="form-check-label" for="leonardoAi">لئوناردو</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="stableDiffusion">
                                    <label class="form-check-label" for="stableDiffusion">انتشار پایدار</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gptgptPrompts">
                                    <label class="form-check-label" for="gptgptPrompts">جی پی تی</label>
                                </div>
                            </div>
                        </div>

                        <!-- Category Filter -->
                        <div class="filter-box">
                            <h6>دسته بندی</h6>
                            <div class="filter-check d-grid row-gap-1 mt-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="cartoons">
                                    <label class="form-check-label" for="cartoons">کارتون ها</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="nft">
                                    <label class="form-check-label" for="nft">NFT</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="buildings">
                                    <label class="form-check-label" for="buildings">ساختمان ها</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="animals">
                                    <label class="form-check-label" for="animals">حیوانات</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="illustrations">
                                    <label class="form-check-label" for="illustrations">تصاویر</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="art">
                                    <label class="form-check-label" for="art">هنر</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="3d">
                                    <label class="form-check-label" for="3d">سه بعدی</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="wildlife">
                                    <label class="form-check-label" for="wildlife">حیات وحش</label>
                                </div>
                            </div>
                        </div>

                        <!-- Price Filter -->
                        <div class="filter-box">
                            <h6>قیمت</h6>
                            <div class="range_container pt-3">
                                <p>بازه قیمتی</p>
                                <div class="sliders_control pt-3">
                                    <input class="fromSlider" type="range" min="0" max="800" value="35">
                                    <input class="toSlider" type="range" min="0" max="800" value="600">
                                </div>
                                <div class="form_control">
                                        <span>
                                            تومان<span class="fromInput">۳۵۰</span> - تومان<span class="toInput">۶۰۰۰</span>
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-9 col-lg-8 main-content">
                    <div class="row row-gap-4">
                        <div class="content-box top-reveal col-xl-4 col-lg-6 col-md-6 ">
                            <div class="explore-item">
                                <div class="explore-item-header d-flex align-items-center justify-content-between">
                                    <div class="explore-title">
                                        <img src="assets/images/user/u1.png" alt="user">
                                        مهسا
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
                                    <div class="featured-price">۲۰۰تومان</div>
                                    <figure class="image-effect">
                                        <img src="assets/images/explore/ex1.jpg" alt="explore images"
                                             class="img-fluid w-100">
                                    </figure>
                                    <div class="heart-content">
                                        <i class="fa-solid fa-heart"></i>
                                        12
                                    </div>
                                    <h5 class="featured-title">
                                        <a href="product-details.html">جنگجوی فانتزی</a>
                                    </h5>
                                </div>
                                <div class="explore-item-footer d-flex align-items-center justify-content-between">
                                    <div class="explore-title">
                                        <div class="img">
                                            <img src="assets/images/com-logo/midjouruey.png" alt="explore">
                                        </div>
                                        میدجرنی
                                    </div>
                                    <div class="view-list">
                                        <i class="fa-regular fa-eye"></i>
                                        341
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-box top-reveal col-xl-4 col-lg-6 col-md-6 ">
                            <div class="explore-item">
                                <div class="explore-item-header d-flex align-items-center justify-content-between">
                                    <div class="explore-title">
                                        <img src="assets/images/user/u2.png" alt="user">
                                        ارسلان
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
                                    <div class="featured-price">۳۰۰تومان</div>
                                    <figure class="image-effect">
                                        <img src="assets/images/explore/ex2.jpg" alt="explore images"
                                             class="img-fluid w-100">
                                    </figure>
                                    <div class="heart-content">
                                        <i class="fa-solid fa-heart"></i>
                                        53
                                    </div>
                                    <h5 class="featured-title">
                                        <a href="product-details.html">پرامپت های ترسناک</a>
                                    </h5>
                                </div>
                                <div class="explore-item-footer d-flex align-items-center justify-content-between">
                                    <div class="explore-title">
                                        <div class="img">
                                            <img src="assets/images/com-logo/chatgpt.png" alt="explore">
                                        </div>
                                        جی پی تی
                                    </div>
                                    <div class="view-list">
                                        <i class="fa-regular fa-eye"></i>
                                        345
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-box top-reveal col-xl-4 col-lg-6 col-md-6 ">
                            <div class="explore-item">
                                <div class="explore-item-header d-flex align-items-center justify-content-between">
                                    <div class="explore-title">
                                        <img src="assets/images/user/u3.png" alt="user">
                                        نسترن
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
                                    <div class="featured-price">۴۰۰تومان</div>
                                    <figure class="image-effect">
                                        <img src="assets/images/explore/ex3.jpg" alt="explore images"
                                             class="img-fluid w-100">
                                    </figure>
                                    <div class="heart-content">
                                        <i class="fa-solid fa-heart"></i>
                                        12
                                    </div>
                                    <h5 class="featured-title">
                                        <a href="product-details.html">پرامپت لوگو</a>
                                    </h5>
                                </div>
                                <div class="explore-item-footer d-flex align-items-center justify-content-between">
                                    <div class="explore-title">
                                        <div class="img">
                                            <img src="assets/images/com-logo/leonardo.png" alt="explore">
                                        </div>
                                        لئوناردو
                                    </div>
                                    <div class="view-list">
                                        <i class="fa-regular fa-eye"></i>
                                        126
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-box top-reveal col-xl-4 col-lg-6 col-md-6 ">
                            <div class="explore-item">
                                <div class="explore-item-header d-flex align-items-center justify-content-between">
                                    <div class="explore-title">
                                        <img src="assets/images/user/u4.png" alt="user">
                                        شیرین
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
                                    <div class="featured-price">۵۰۰تومان</div>
                                    <figure class="image-effect">
                                        <img src="assets/images/explore/ex4.jpg" alt="explore images"
                                             class="img-fluid w-100">
                                    </figure>
                                    <div class="heart-content">
                                        <i class="fa-solid fa-heart"></i>
                                        18
                                    </div>
                                    <h5 class="featured-title">
                                        <a href="product-details.html">پرامپت طرح سه بعدی</a>
                                    </h5>
                                </div>
                                <div class="explore-item-footer d-flex align-items-center justify-content-between">
                                    <div class="explore-title">
                                        <div class="img">
                                            <img src="assets/images/com-logo/nightCafe.png" alt="explore">
                                        </div>
                                        نایت کافی
                                    </div>
                                    <div class="view-list">
                                        <i class="fa-regular fa-eye"></i>
                                        274
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-box top-reveal col-xl-4 col-lg-6 col-md-6 ">
                            <div class="explore-item">
                                <div class="explore-item-header d-flex align-items-center justify-content-between">
                                    <div class="explore-title">
                                        <img src="assets/images/user/u5.png" alt="user">
                                        ایلیا
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
                                    <div class="featured-price">۶۰۰تومان</div>
                                    <figure class="image-effect">
                                        <img src="assets/images/explore/ex5.jpg" alt="explore images"
                                             class="img-fluid w-100">
                                    </figure>
                                    <div class="heart-content">
                                        <i class="fa-solid fa-heart"></i>
                                        34
                                    </div>
                                    <h5 class="featured-title">
                                        <a href="product-details.html">پرامپت اقیانوس</a>
                                    </h5>
                                </div>
                                <div class="explore-item-footer d-flex align-items-center justify-content-between">
                                    <div class="explore-title">
                                        <div class="img">
                                            <img src="assets/images/com-logo/chatgpt.png" alt="explore">
                                        </div>
                                        جی پی تی
                                    </div>
                                    <div class="view-list">
                                        <i class="fa-regular fa-eye"></i>
                                        345
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-box top-reveal col-xl-4 col-lg-6 col-md-6 ">
                            <div class="explore-item">
                                <div class="explore-item-header d-flex align-items-center justify-content-between">
                                    <div class="explore-title">
                                        <img src="assets/images/user/u6.png" alt="user">
                                        ژاله
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
                                    <div class="featured-price">۷۰۰تومان</div>
                                    <figure class="image-effect">
                                        <img src="assets/images/explore/ex6.jpg" alt="explore images"
                                             class="img-fluid w-100">
                                    </figure>
                                    <div class="heart-content">
                                        <i class="fa-solid fa-heart"></i>
                                        54
                                    </div>
                                    <h5 class="featured-title">
                                        <a href="product-details.html">پرامپت جادویی</a>
                                    </h5>
                                </div>
                                <div class="explore-item-footer d-flex align-items-center justify-content-between">
                                    <div class="explore-title">
                                        <div class="img">
                                            <img src="assets/images/com-logo/midjouruey.png" alt="explore">
                                        </div>
                                        میدجرنی
                                    </div>
                                    <div class="view-list">
                                        <i class="fa-regular fa-eye"></i>
                                        456
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-box top-reveal col-xl-4 col-lg-6 col-md-6 ">
                            <div class="explore-item">
                                <div class="explore-item-header d-flex align-items-center justify-content-between">
                                    <div class="explore-title">
                                        <img src="assets/images/user/u7.png" alt="user">
                                        زهرا
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
                                    <div class="featured-price">۸۰۰تومان</div>
                                    <figure class="image-effect">
                                        <img src="assets/images/explore/ex7.jpg" alt="explore images"
                                             class="img-fluid w-100">
                                    </figure>
                                    <div class="heart-content">
                                        <i class="fa-solid fa-heart"></i>
                                        24
                                    </div>
                                    <h5 class="featured-title">
                                        <a href="product-details.html">پرامپت آدم فضایی</a>
                                    </h5>
                                </div>
                                <div class="explore-item-footer d-flex align-items-center justify-content-between">
                                    <div class="explore-title">
                                        <div class="img">
                                            <img src="assets/images/com-logo/nightCafe.png" alt="explore">
                                        </div>
                                        نایت کافی
                                    </div>
                                    <div class="view-list">
                                        <i class="fa-regular fa-eye"></i>
                                        572
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-box top-reveal col-xl-4 col-lg-6 col-md-6 ">
                            <div class="explore-item">
                                <div class="explore-item-header d-flex align-items-center justify-content-between">
                                    <div class="explore-title">
                                        <img src="assets/images/user/u1.png" alt="user">
                                        سمیرا
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
                                    <div class="featured-price">۹۰۰تومان</div>
                                    <figure class="image-effect">
                                        <img src="assets/images/explore/ex8.jpg" alt="explore images"
                                             class="img-fluid w-100">
                                    </figure>
                                    <div class="heart-content">
                                        <i class="fa-solid fa-heart"></i>
                                        43
                                    </div>
                                    <h5 class="featured-title">
                                        <a href="product-details.html">پرامپت طبیعت</a>
                                    </h5>
                                </div>
                                <div class="explore-item-footer d-flex align-items-center justify-content-between">
                                    <div class="explore-title">
                                        <div class="img">
                                            <img src="assets/images/com-logo/leonardo.png" alt="explore">
                                        </div>
                                        لئوناردو
                                    </div>
                                    <div class="view-list">
                                        <i class="fa-regular fa-eye"></i>
                                        735
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-box top-reveal col-xl-4 col-lg-6 col-md-6 ">
                            <div class="explore-item">
                                <div class="explore-item-header d-flex align-items-center justify-content-between">
                                    <div class="explore-title">
                                        <img src="assets/images/user/u6.png" alt="user">
                                        ژاله
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
                                    <div class="featured-price">۷۰۰تومان</div>
                                    <figure class="image-effect">
                                        <img src="assets/images/explore/ex9.jpg" alt="explore images"
                                             class="img-fluid w-100">
                                    </figure>
                                    <div class="heart-content">
                                        <i class="fa-solid fa-heart"></i>
                                        54
                                    </div>
                                    <h5 class="featured-title">
                                        <a href="product-details.html">پرامپت جادویی</a>
                                    </h5>
                                </div>
                                <div class="explore-item-footer d-flex align-items-center justify-content-between">
                                    <div class="explore-title">
                                        <div class="img">
                                            <img src="assets/images/com-logo/midjouruey.png" alt="explore">
                                        </div>
                                        میدجرنی
                                    </div>
                                    <div class="view-list">
                                        <i class="fa-regular fa-eye"></i>
                                        456
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--    End Prompt      --}}

    {{--    Company         --}}
    <div class="company-section section-two-bg py-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="company-slide swiper">
                        <div class="swiper-wrapper slide-transition">
                            <div class="swiper-slide inner-slide-element">
                                <img src="assets/images/company/1.png" alt="Company Image">
                            </div>
                            <div class="swiper-slide inner-slide-element">
                                <img src="assets/images/company/2.png" alt="Company Image">
                            </div>
                            <div class="swiper-slide inner-slide-element">
                                <img src="assets/images/company/3.png" alt="Company Image">
                            </div>
                            <div class="swiper-slide inner-slide-element">
                                <img src="assets/images/company/4.png" alt="Company Image">
                            </div>
                            <div class="swiper-slide inner-slide-element">
                                <img src="assets/images/company/5.png" alt="Company Image">
                            </div>
                            <div class="swiper-slide inner-slide-element">
                                <img src="assets/images/company/1.png" alt="Company Image">
                            </div>
                            <div class="swiper-slide inner-slide-element">
                                <img src="assets/images/company/2.png" alt="Company Image">
                            </div>
                            <div class="swiper-slide inner-slide-element">
                                <img src="assets/images/company/3.png" alt="Company Image">
                            </div>
                            <div class="swiper-slide inner-slide-element">
                                <img src="assets/images/company/4.png" alt="Company Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    End Company     --}}
@endsection
