<!doctype html>
<html dir="rtl" lang="fa-IR">

<head>
    <title>ورود</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('login.css')}}">


</head>

<body>
    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3"><span>ثبت‌نام </span><span>ورود</span></h6>
                        <input class="checkbox" type="checkbox" id="reg-log" class="transition-swipe" name="reg-log"
                            onclick="Redirect();" />
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <main id="swup" class="transition-fade">


                                    <div class="card-front">
                                        <div class="center-wrap">
                                            <div class="section text-center">
                                                @include('partial.edit-password')
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="card-back">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-3 pb-3">ثبت‌نام</h4>
                                            <div class="form-group">
                                                <input type="text" class="form-style" placeholder="نام و نام خانوادگی">
                                                <i class="input-icon uil uil-user"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="tel" class="form-style" placeholder="شماره تماس">
                                                <i class="input-icon uil uil-phone"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="email" class="form-style" placeholder="ایمیل">
                                                <i class="input-icon uil uil-at"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="password" class="form-style" placeholder="رمز عبور">
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>
                                            <a href="#" class="btn mt-4">ثبت‌نام</a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function Redirect() {
            location.href = "{{route('register')}}";
        }
    </script>

</body>

</html>