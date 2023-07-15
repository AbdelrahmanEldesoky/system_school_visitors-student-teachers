<!DOCTYPE html>
<html lang="en">

<head>
    @yield('title')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('website.layouts.head')
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        {{-- start subheader --}}

        <div class="py-2 bg-light">
            <div class="container">
                <div class="row align-items-center">
                    {{-- Auth::guard('student')->user() --}}
                    @if(Auth::guard('student')->check() )
                        <a href="{{ route('student.logout') }}" class=" text_blue small mr-3"><span class="icon-sign-out mr-2"></span> تسجيل الخروج </a>
                        @elseif ( Auth::guard('parent')->check())
                        <a href="{{ route('parent.logout') }}" class=" text_blue small mr-3"><span class="icon-sign-out mr-2"></span> تسجيل الخروج </a>

                        @else
                        <a href="{{ route('student.login.get') }}" class=" text_blue small mr-3"><span class="icon-sign-in mr-2"></span> تسجيل الدخول </a>
                    @endif
                    <div class="col-lg-9 d-none d-lg-block text-right">
                        <a href="{{ route('Questions') }}" class=" text_blue  mr-3 app_font"><span
                                class="icon-question-circle-o mr-2 h4"></span> الاسئلة الشائعة</a>
                        <a href="#" class=" text_blue small mr-3"><span class="icon-phone2 mr-2"></span> +966 17
                            324 1088 </a>
                        <a href="#" class=" text_blue small mr-3"><span class="icon-envelope-o mr-2"></span>
                            info@mydomain.com</a>

                    </div>
                    {{-- @yield('login') --}}

                </div>
            </div>
        </div>

        {{-- end subheader --}}


        {{-- start header --}}

        @yield('header')
           <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

            <div class="container">
                <div class="row">
                    <div class="col-4 col-lg-1">

                        <div class="text-left ">
                            <div class="social-wrap d-flex">
                                <a class="rounded-circle" href="#"><span class="icon-twitter"></span></a>


                                <a href="#"
                                    class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle  text-black"><span
                                        class="icon-menu h3"></span></a>

                                {{-- <img class="icon_h img-fluid" src="https://www13.0zz0.com/2023/06/08/19/522775104.png"
                    alt="Image"> --}}

                            </div>
                        </div>
                    </div>
                      <div class="col-4 col-lg-1 Properties">
                    <div class="content">
                                    <div class="visible">
                                        <ul>
                                            <li class="title_header"> نحن&nbsp;اصدقاء</li>
                                            <li class="title_header"> عائلة&nbsp;واحدة</li>
                                            <li class="title_header"> فرد&nbsp;واحد </li>
                                        </ul>
                                    </div>
                                </div>
                                                    </div>

                 <div class="col-lg-7 col-1" style="position: absolute;left: 40%;">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li>
                                @if(Auth::guard('student')->check())
                                    <a href="{{ route('student.index') }}" class="nav-link text-left app_font h5">الطالب</a>
                                @endif

                                @if(Auth::guard('parent')->check())
                                    <a href="{{ route('parent.index') }}" class="nav-link text-left app_font h5">ولي الامر</a>
                                 @endif
                                </li>
                                <li>
                                    <a href="{{ route('Activities') }}"
                                        class="nav-link text-left app_font h5">الأنشطة</a>
                                </li>
                                <li>
                                    <a href="{{ route('News') }}" class="nav-link text-left app_font h5">الأخبار</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}" class="nav-link text-left app_font h5">معلومات عن
                                        المدرسة</a>
                                </li>
                                @if(!Auth::guard('student')->check())
                                <li class="has-children">
                                    <p nmouseover="addHoverClass(this)" onmouseout="removeHoverClass(this)" class="nav-link text-left app_font h5 text-dark">  التوظيف <i class="fa-solid fa-caret-down"></i>
                                        </p>
                                    <ul class="dropdown">
                                        <li><a class="nav-link text-left app_font h5" href="{{ route('new_application') }}">ارسال طلب جديد </a></li>
                                        <li><a class="nav-link text-left app_font h5" href="{{ route('old_application') }}">متابعة طلب قديم </a></li>
                                    </ul>
                                    @endif
                                </li>

                                <li>
                                    <a href="{{ route('index') }}" class="nav-link text-left app_font h5">الصفحة
                                        الرئيسية</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        {{-- end header --}}
        <div class="hero-slide owl-carousel site-blocks-cover">
            <div class="intro-section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                            <h3 class="title_header_two text-light text-center m-auto">مدرسة رواد جازان الأهليه بنين</h3>
                            <p class="title_header_two text-light m-auto">
                                المرحلة الأبتدائية - المرحلة المتوسطة - المرحلة الثانوية
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-section"
                style="background-image: url('https://images.akhbarelyom.com/images/images/large/20210515144903381.jpg');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                            <h3 class="m-auto title_header_two text-light">
                                انشطة متنوعة لكافة الطلاب
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        @yield('content')
        <script src="{{ asset('website/my_script/new.js') }}"></script>

        {{-- start footer --}}

     <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-12">
                        <div class="wow slideInUp" data-wow-delay="0.6s">

                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15292.615866934617!2d42.9759527!3d16.6190402!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1607bc4d2c332ac3%3A0x7d539a4b0ee97faa!2z2YXYr9ix2LPYqSDYsdmI2KfYryDYrNin2LLYp9mGINin2YTYo9mH2YTZitipINmE2YTYqNmG2YrZhiDYqNi12KfZhdi32Kk!5e0!3m2!1sar!2seg!4v1689202490430!5m2!1sar!2seg"  height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>
                    </div>
                    <div class="col-lg-2 col-12 text-center">
                        <h3 class="footer-heading"><span>روابط تهمك</span></h3>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('index') }}">الصفحة الرئيسية</a></li>
                            <li><a href="{{ route('about') }}">معلومات عن المدرسة</a></li>
                            <li><a href="{{ route('News') }}">الاخبار</a></li>
                            <li><a href="{{ route('Activities') }}">الأنشطة</a></li>
                            <li><a href="https://schools.madrasati.sa/">مدرستي</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-5 col-12 p-lg-2 p-2">
                        <form>
                            <div class="row ">
                                <div class="col-6">
                                    <input type="text" name="name" class="form-control text-right" placeholder="اكتب اسمك">
                                </div>
                                <div class="col-6">
                                    <input type="text" name="phone" class="form-control text-right" placeholder="اكتب رقم تليفونك">
                                </div>
                                <div class="col-12 p-2">
                                    <textarea class="form-control  text-right" placeholder="اكتب اقتراحك &amp; سوالك" id="suggestion" rows="3"></textarea>
                                </div>
                                <div class="col-4 m-auto">
                                    <button type="submit" class="btn btn-success">ارسال طلبك</button>

                                </div>
                            </div>

                        </form>
                    </div>

                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="copyright">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>2023 All rights reserved | This Web is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://www.facebook.com/abdu.mascherino" target="_blank">AbdelRahman El-Desoky</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- end footer --}}

        <!-- loader -->
        <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
                <circle class="path-bg" cx="24" cy="24" r="22" fill="none"
                    stroke-width="4" stroke="#eeeeee" />
                <circle class="path" cx="24" cy="24" r="22" fill="none"
                    stroke-width="4" stroke-miterlimit="10" stroke="#51be78" />
            </svg></div>

        @include('website.layouts.script')


</body>

</html>
