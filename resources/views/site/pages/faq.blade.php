@extends('site.layouts.base')

@section('title', 'سوالات متداول')

@section('content')
    <!-- ===========================
        =====>> breadcrumb <<======= -->
    <section class="breadcrumb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb__wrapper">
                        <h2 class="breadcrumb__title"> سوالات متداول</h2>
                        <ul class="breadcrumb__list">
                            <li class="breadcrumb__item">
                                <a href="index.html"> خانه</a>
                            </li>
                            <li class="breadcrumb__item">
                                <i class="fa-solid fa-arrow-left"></i>
                            </li>
                            <li class="breadcrumb__item">
                                <span class="breadcrumb__item-text"> سوالات متداول</span>
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
    =====>> Faq <<======= -->
    <section class="faq-section section-one-bg py-120 ">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 col-xl-5">
                    <div class="section-title">
                        <span class="sub-title right-reveal">سوالات متداول</span>
                        <h2 class="right-reveal">تولید محتوای بسیار سریع‌تر با هوش مصنوعی</h2>
                        <p class="right-reveal">تولید محتوای سریع‌تر و بسیار کارآمد با هوش مصنوعی به شما این امکان را می‌دهد که با بهره‌گیری از هوش مصنوعی پیشرفته، فرآیند خلاقیت خود را ساده‌تر کنید و در کسری از زمان، محتوای باکیفیت تولید کنید.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordion top-reveal" id="accordionWorking">
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
                                    <p>ماموریت ما این است که با بهره‌گیری از قدرت هوش مصنوعی برای تولید تصاویر خیره‌کننده و با کیفیت بالا، انقلابی در نحوه خلق تصاویر بصری ایجاد کنیم. چه یک هنرمند، طراح یا متخصص کسب و کار باشید.</p>
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
                                    <p>ماموریت ما این است که با بهره‌گیری از قدرت هوش مصنوعی برای تولید تصاویر خیره‌کننده و با کیفیت بالا، انقلابی در نحوه خلق تصاویر بصری ایجاد کنیم. چه یک هنرمند، طراح یا متخصص کسب و کار باشید.</p>
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
                                    <p>ماموریت ما این است که با بهره‌گیری از قدرت هوش مصنوعی برای تولید تصاویر خیره‌کننده و با کیفیت بالا، انقلابی در نحوه خلق تصاویر بصری ایجاد کنیم. چه یک هنرمند، طراح یا متخصص کسب و کار باشید.</p>
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
                                    <p>ماموریت ما این است که با بهره‌گیری از قدرت هوش مصنوعی برای تولید تصاویر خیره‌کننده و با کیفیت بالا، انقلابی در نحوه خلق تصاویر بصری ایجاد کنیم. چه یک هنرمند، طراح یا متخصص کسب و کار باشید.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Faq <<=====
    =========================== -->
    <!-- ===========================
    =====>> Text-slide <<======= -->
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
                        <img src="assets/images/shape/star.svg" alt="icon">
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-text">
                        AI IMAGE GENERATE
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-text">
                        <img src="assets/images/shape/star.svg" alt="icon">
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-text">
                        AI IMAGE GENERATE
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-text">
                        <img src="assets/images/shape/star.svg" alt="icon">
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-text">
                        AI IMAGE GENERATE
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-text">
                        <img src="assets/images/shape/star.svg" alt="icon">
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-text">
                        <img src="assets/images/shape/star.svg" alt="icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =====>> End Text-slide <<=====
    =========================== -->
    <!-- ===========================
    =====>> Testimonials <<======= -->
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
                                        <p>"من از کیفیت تصاویر تولید شده توسط هوش مصنوعی شگفت‌زده شدم! این پلتفرم فوق‌العاده شهودی است و در عرض چند دقیقه، تصاویری خیره‌کننده و کاملاً مطابق با دیدگاه من داشت. به عنوان کسی که مهارت‌های طراحی محدودی دارد، از حرفه‌ای به نظر رسیدن تصاویر شگفت‌زده شدم. این ابزار ساعت‌ها در کار من صرفه‌جویی کرده است و نمی‌توانم اداره کسب و کارم را بدون آن تصور کنم."</p>

                                        <div class="user">
                                            <div class="img">
                                                <img src="assets/images/testimonial/1.jpg" alt="user">
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
                                        <p>"من از کیفیت تصاویر تولید شده توسط هوش مصنوعی شگفت‌زده شدم! این پلتفرم فوق‌العاده شهودی است و در عرض چند دقیقه، تصاویری خیره‌کننده و کاملاً مطابق با دیدگاه من داشت. به عنوان کسی که مهارت‌های طراحی محدودی دارد، از حرفه‌ای به نظر رسیدن تصاویر شگفت‌زده شدم. این ابزار ساعت‌ها در کار من صرفه‌جویی کرده است و نمی‌توانم اداره کسب و کارم را بدون آن تصور کنم."</p>

                                        <div class="user">
                                            <div class="img">
                                                <img src="assets/images/testimonial/2.jpg" alt="user">
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
                                        <p>"من از کیفیت تصاویر تولید شده توسط هوش مصنوعی شگفت‌زده شدم! این پلتفرم فوق‌العاده شهودی است و در عرض چند دقیقه، تصاویری خیره‌کننده و کاملاً مطابق با دیدگاه من داشت. به عنوان کسی که مهارت‌های طراحی محدودی دارد، از حرفه‌ای به نظر رسیدن تصاویر شگفت‌زده شدم. این ابزار ساعت‌ها در کار من صرفه‌جویی کرده است و نمی‌توانم اداره کسب و کارم را بدون آن تصور کنم."</p>

                                        <div class="user">
                                            <div class="img">
                                                <img src="assets/images/testimonial/1.jpg" alt="user">
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
                                        <p>"من از کیفیت تصاویر تولید شده توسط هوش مصنوعی شگفت‌زده شدم! این پلتفرم فوق‌العاده شهودی است و در عرض چند دقیقه، تصاویری خیره‌کننده و کاملاً مطابق با دیدگاه من داشت. به عنوان کسی که مهارت‌های طراحی محدودی دارد، از حرفه‌ای به نظر رسیدن تصاویر شگفت‌زده شدم. این ابزار ساعت‌ها در کار من صرفه‌جویی کرده است و نمی‌توانم اداره کسب و کارم را بدون آن تصور کنم."</p>

                                        <div class="user">
                                            <div class="img">
                                                <img src="assets/images/testimonial/2.jpg" alt="user">
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
    <!-- =====>> End Testimonials <<=====
    =========================== -->
@endsection
