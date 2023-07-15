<!DOCTYPE html>
<html lang="en">

<head>
    <title>تسجيل دخول</title>
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





        <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4"
            style="background-image: url('https://www13.0zz0.com/2023/06/08/19/522775104.png')">
            <div class="container">
                <div class="row align-items-end justify-content-center text-center">
                    <div class="col-lg-7 image">
                        <div class="d-flex m-auto col-4">
                            <img class="icon_login img-fluid m-auto w-75 h-75"
                                src="https://www13.0zz0.com/2023/06/08/19/522775104.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="container">

                <div class="row justify-content-center p-4">
                    <div class="col-md-5">
                        <form method="POST" action="{{ route('student.login.post') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 form-group text-right">
                                    <label for="username">اسم المستخدم</label>
                                    <input type="text" id="username" name="mobile"
                                        class="form-control form-control-lg">
                                </div>
                                <div class="col-md-12 form-group text-right">
                                    <label for="pword">كلمة المرور</label>
                                    <input type="password" id="pword" name="password"
                                        class="form-control form-control-lg">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-12 text-center">
                                    <input type="submit" value="تسجيل دخول"
                                        class="w-100 bg-info w-50 btn btn-primary btn-lg px-5">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>



            </div>
        </div>

    </div>
    <!-- .site-wrap -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#51be78" />
        </svg></div>

    <script src="{{ asset('website/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('website/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('website/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('website/js/popper.min.js') }}"></script>
    <script src="{{ asset('website/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('website/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('website/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('website/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('website/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('website/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('website/js/aos.js') }}"></script>
    <script src="{{ asset('website/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('website/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('website/js/jquery.mb.YTPlayer.min.js') }}"></script>




    <script src="{{ asset('website/js/main.js') }}"></script>

</body>

</html>
