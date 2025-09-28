<footer class="footer-area section-two-bg">
    <div class="footer-widget">
        <div class="container">
            <div class="row row-gap-5 justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="footer-widget__item text-center text-lg-end">
                        <a href="{{ route('/') }}" class="d-block">
                            <img src="{{ asset('site/assets/images/logo/logodadvarzan.png') }}" style="max-width: 60px" alt="logo">
                        </a>
                        <br>
                        <p>موسسه حقوقی دادورزان امین</p>
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
                            <h4>خدمات موکلین</h4>
{{--                            <ul class="useful-list">--}}
{{--                                @if($servicelawyers != null)--}}
{{--                                    @foreach($servicelawyers as $servicelawyer)--}}
{{--                                        <li>--}}
{{--                                            <a href="{{url('خدمات/'.$servicelawyer->slug)}}">{{$servicelawyer->title}}</a>--}}
{{--                                        </li>--}}
{{--                                    @endforeach--}}
{{--                                @endif--}}

{{--                            </ul>--}}
                        </div>

                        <div class="footer-widget__item">
                            <h4>خدمات وکلا</h4>
                            <ul class="useful-list">
                                <li><a href="#">انواع خدمات قرادادی</a></li>
                                <li><a href="#">انواع خدمات کیفری</a></li>
                                <li><a href="#">انواع خدمات حقوقی</a></li>
                                <li><a href="#">انواع خدمات شرکت ها</a></li>
                                <li><a href="#">انواع خدمات مالیاتی</a></li>
                                <li><a href="#">انواع خدمات ملکی</a></li>
                                <li><a href="#">انواع خدمات بیمه ای</a></li>
                            </ul>
                        </div>

                        <div class="footer-widget__item">
                            <h4>بروز بمانید</h4>
                            <p>به خبرنامه ما بپیوندید ...</p>
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
                            تمامی حقوق محفوظ است. طراحی شده توسط <a href="{{ route('/') }}">تیم توسعه دادروزان امین</a>
                        </p>
                        <ul class="nav gap-4 row-gap-2">
                            <li><a href="{{ route('/') }}">پشتیبانی</a></li>
                            <li><a href="{{ route('/') }}">حریم خصوصی</a></li>
                            <li><a href="{{ route('/') }}">شرایط خدمات</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
