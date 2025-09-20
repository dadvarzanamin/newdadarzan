@extends('site.layouts.base')

@section('title', 'کارگاه آموزشی')

@section('content')
    <!-- ===========================
        =====>> breadcrumb <<======= -->
    <section class="breadcrumb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb__wrapper">
                        <h2 class="breadcrumb__title">جزئیات محصول</h2>
                        <ul class="breadcrumb__list">
                            <li class="breadcrumb__item">
                                <a href="index.html"> خانه</a>
                            </li>
                            <li class="breadcrumb__item">
                                <i class="fa-solid fa-arrow-left"></i>
                            </li>
                            <li class="breadcrumb__item">
                                <span class="breadcrumb__item-text"> جزئیات محصول</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End breadcrumb <<=====
    =============================== -->
    <!-- ===========================
    =====>> Product Details <<======= -->
    <section class="product-details-section py-120">
        <div class="container">
            <div class="row row-gap-5 justify-content-between">
                <div class="col-lg-6">
                    <div class="product-image">
                        <div class="swiper details-list">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assets/images/product/prod1.jpg" alt="product">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/product/prod2.jpg" alt="product">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/product/prod3.jpg" alt="product">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/product/prod4.jpg" alt="product">
                                </div>
                            </div>
                        </div>
                        <div class="swiper details-main">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assets/images/product/prod1.jpg" alt="product">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/product/prod2.jpg" alt="product">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/product/prod3.jpg" alt="product">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/product/prod4.jpg" alt="product">
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="product-details-content">
                        <div class="d-flex flex-wrap gap-4 justify-content-between align-items-center">
                            <h2>پرامپت طرح سه بعدی</h2>
                            <button class="fs-25 text-white"><i class="fa-regular fa-heart"></i></button>
                        </div>
                        <p class="fs-14 pt-1 pb-4"><span>⛵ میدجرنی</span></p>
                        <div class="d-flex flex-wrap gap-4 pb-2 justify-content-between align-items-center">
                            <div class="d-flex gap-4">
                                <a class="detaisl-meta" href="javascript:void(0)">
                                    <i class="fa-solid fa-eye"></i>
                                    <span>300</span>
                                </a>
                                <a class="detaisl-meta" href="javascript:void(0)">
                                    <i class="fa-solid fa-basket-shopping"></i>
                                    <span>154</span>
                                </a>
                                <a class="detaisl-meta" href="javascript:void(0)">
                                    <i class="fa-solid fa-share-nodes"></i>
                                    <span>اشتراک گذاری</span>
                                </a>
                            </div>
                            <div class="d-flex gap-4">
                                <a class="detaisl-meta" href="javascript:void(0)">
                                    <i class="fa-solid fa-ellipsis"></i>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex flex-wrap gap-4 justify-content-between align-items-center">
                            <div class="creator-profile">
                                <h6 class="pb-3">سازنده</h6>
                                <div class="d-flex gap-2 align-items-center">
                                    <img src="assets/images/team/1.jpg" alt="creator user" class="creator-img">
                                    <span class="text-white fs-16 fw-semibold">مهسا</span>
                                </div>
                            </div>
                            <div class="rating ms-2">
                                <h6 class="text-end pb-3">نمره</h6>
                                <div class="text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span class="ms-1">
                                            4.5
                                        </span>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-det pt-5">
                            <h6 class="pb-2">قیمت گذاری ها</h6>
                            <h4>۱۰۰۰تومان</h4>
                        </div>
                        <div class="product-content">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-details-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-details" type="button" role="tab"
                                            aria-controls="pills-details" aria-selected="true">
                                        جزئیات
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-description-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-description" type="button" role="tab"
                                            aria-controls="pills-description" aria-selected="false">
                                        توضیحات
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-reviews-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-reviews" type="button" role="tab"
                                            aria-controls="pills-reviews" aria-selected="false">
                                        دیدگاه ها
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-details" role="tabpanel"
                                     aria-labelledby="pills-details-tab" tabindex="0">
                                    <h6 class="mb-2">دسته بندی</h6>
                                    <p>تصاویر</p>
                                </div>
                                <div class="tab-pane fade" id="pills-description" role="tabpanel"
                                     aria-labelledby="pills-description-tab" tabindex="0">
                                    <p>با استفاده از هر ایده‌ای که در ذهن دارید، طرح‌های مفهومی منحصر به فرد برای برنامه ایجاد می‌کند!

                                        این راهنما شامل ایده‌های زیادی برای ایجاد طرح‌های مفهومی منحصر به فرد برای برنامه خواهد بود!

                                        با نسخه ۵.۲ ساخته شده است

                                        برای عکس‌های پروفایل، کتاب داستان، چاپ هنری، هدایا، هنرهای مفهومی و برای

                                        خوشگذرانی عالی است</p>
                                </div>
                                <div class="tab-pane fade" id="pills-reviews" role="tabpanel"
                                     aria-labelledby="pills-reviews-tab" tabindex="0">
                                    <div class="rating d-flex gap-4 ms-2">
                                        <h6 class="pb-2">ثبت نمره :</h6>
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span class="ms-1">
                                                    4.5
                                                </span>
                                        </div>
                                    </div>
                                    <textarea name="message" rows="5" placeholder="پیام خود را بنویسید.."></textarea>
                                </div>
                            </div>
                            <div class="product-details-footer d-flex flex-wrap gap-4 mt-4 ">
                                <a href="#" class="btn btn--base">خرید</a>
                                <a href="#" class="btn btn--border">اضافه کردن به سبد خرید</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Product Details <<=====
    =========================== -->
    <!-- ===========================
    =====>> Best Selling <<======= -->
    <section class="section-two-bg py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 position-relative">
                    <div class="best-selling-slide swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="explore-item">
                                    <div
                                        class="explore-item-header d-flex align-items-center justify-content-between">
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
                                            <img src="assets/images/explore/ex9.jpg" alt="explore images"
                                                 class="img-fluid w-100">
                                        </figure>
                                        <div class="heart-content">
                                            <i class="fa-solid fa-heart"></i>
                                            12
                                        </div>
                                        <h5 class="featured-title">
                                            <a href="product-details.html">پرامپت انیمه</a>
                                        </h5>
                                    </div>
                                    <div
                                        class="explore-item-footer d-flex align-items-center justify-content-between">
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
                            <div class="swiper-slide">
                                <div class="explore-item">
                                    <div
                                        class="explore-item-header d-flex align-items-center justify-content-between">
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
                                        <div class="featured-price">۲۰۰تومان</div>
                                        <figure class="image-effect">
                                            <img src="assets/images/explore/ex10.jpg" alt="explore images"
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
                                    <div
                                        class="explore-item-footer d-flex align-items-center justify-content-between">
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
                            <div class="swiper-slide">
                                <div class="explore-item">
                                    <div
                                        class="explore-item-header d-flex align-items-center justify-content-between">
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
                                        <div class="featured-price">۸۰۰تومان</div>
                                        <figure class="image-effect">
                                            <img src="assets/images/explore/ex11.jpg" alt="explore images"
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
                                    <div
                                        class="explore-item-footer d-flex align-items-center justify-content-between">
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
                            <div class="swiper-slide">
                                <div class="explore-item">
                                    <div
                                        class="explore-item-header d-flex align-items-center justify-content-between">
                                        <div class="explore-title">
                                            <img src="assets/images/user/u1.png" alt="user">
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
                                        <div class="featured-price">۲۰۰تومان</div>
                                        <figure class="image-effect">
                                            <img src="assets/images/explore/ex12.jpg" alt="explore images"
                                                 class="img-fluid w-100">
                                        </figure>
                                        <div class="heart-content">
                                            <i class="fa-solid fa-heart"></i>
                                            12
                                        </div>
                                        <h5 class="featured-title">
                                            <a href="product-details.html">پرامپت طرح سه بعدی</a>
                                        </h5>
                                    </div>
                                    <div
                                        class="explore-item-footer d-flex align-items-center justify-content-between">
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
                            <div class="swiper-slide">
                                <div class="explore-item">
                                    <div
                                        class="explore-item-header d-flex align-items-center justify-content-between">
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
                                    <div
                                        class="explore-item-footer d-flex align-items-center justify-content-between">
                                        <div class="explore-title">
                                            <div class="img">
                                                <img src="assets/images/com-logo/chatgpt.png" alt="explore">
                                            </div>
                                            میدجرنی
                                        </div>
                                        <div class="view-list">
                                            <i class="fa-regular fa-eye"></i>
                                            345
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
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
                        </div>
                    </div>
                    <div class="testimonial-btn">
                        <div class="swiper--prev btn btn--border">
                            <i class="fa-solid fa-angle-right"></i>
                        </div>
                        <div class="swiper--next btn btn--border">
                            <i class="fa-solid fa-angle-left"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Best Selling <<=====
    =========================== -->
    <!-- ===========================
    =====>> Company <<======= -->
    <section class="company-section py-100">
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
    </section>
    <!-- =====>> End Company <<=====
    =========================== -->
@endsection
