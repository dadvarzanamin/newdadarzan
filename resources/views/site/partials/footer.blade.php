<footer class="footer-area section-two-bg">
    <div class="footer-widget">
        <div class="container">
            <div class="row row-gap-5 justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="footer-widget__item text-center text-lg-end">
                        <a href="{{ route('home') }}" class="d-block">
                            <img src="{{ asset('assets/images/logo/logo.svg') }}" alt="logo">
                        </a>
                        <br>
                        <p>پیکس‌گیکس پلتفرم مبتنی بر هوش مصنوعی ...</p>
                        <br>
                        <div class="footer-email">
                            <a href="#"><span class="__cf_email__">[email&#160;protected]</span></a>
                        </div>
                        <div class="footer-phone">
                            <h4><a href="tel:09010010011">۰۹۰۱۰۰۱۰۰۱۱</a></h4>
                        </div>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.x.com/?lang=en" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="footer-widget__content ps-xl-5">
                        <div class="footer-widget__item">
                            <h4>شرکت</h4>
                            <ul class="useful-list">
                                <li><a href="{{ route('about') }}">درباره ما</a></li>
                                <li><a href="{{ route('services') }}">خدمات</a></li>
                                <li><a href="{{ route('contact') }}">پشتیبانی</a></li>
                                <li><a href="{{ route('login') }}">ورود</a></li>
                                <li><a href="{{ route('register') }}">ثبت نام</a></li>
                            </ul>
                        </div>

                        <div class="footer-widget__item">
                            <h4>لینک های سریع</h4>
                            <ul class="useful-list">
                                <li><a href="{{ route('generator') }}">تولید</a></li>
                                <li><a href="{{ route('team') }}">تیم ما</a></li>
                                <li><a href="{{ route('pricing') }}">قیمت گذاری ها</a></li>
                                <li><a href="{{ route('blog.grid') }}">مقالات</a></li>
                                <li><a href="{{ route('contact') }}">تماس با ما</a></li>
                            </ul>
                        </div>

                        <div class="footer-widget__item">
                            <h4>آپدیت بمانید</h4>
                            <p>به خبرنامه Pixgix بپیوندید ...</p>
                            <div class="footer-widget__form">
                                <form action="#" method="post">
                                    @csrf
                                    <input type="email" name="email" placeholder="ایمیل خود را وارد کنید">
                                    <button type="submit" class="btn btn--base">ما را دنبال کنید</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="copy-right">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copy-right__content">
                        <p class="copy-right__text">
                            تمامی حقوق محفوظ است. طراحی شده توسط <a href="{{ route('home') }}">iarsalan</a>
                        </p>
                        <ul class="nav gap-4 row-gap-2">
                            <li><a href="{{ route('contact') }}">پشتیبانی</a></li>
                            <li><a href="{{ route('privacy') }}">حریم خصوصی</a></li>
                            <li><a href="{{ route('terms') }}">شرایط خدمات</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
