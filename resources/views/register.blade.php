<!doctype html>
<html dir="rtl" lang="fa-IR">

<head>
    <title>ثبت نام</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="signup.css">


</head>

<body>
    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3"><span>ثبت‌نام </span><span>ورود</span></h6>
                        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" onclick="Redirect();" />
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <!-- <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">ورود</h4>
                                            <div class="form-group">
                                                <input type="email" class="form-style" placeholder="ایمیل">
                                                <i class="input-icon uil uil-at"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="password" class="form-style" placeholder="رمز عبور">
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>
                                            <a href="#" class="btn mt-4">ورود</a>
                                            <p class="mb-0 mt-4 text-center"><a href="#" class="link">فراموشی رمز
                                                    عبور؟</a></p>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="card-back">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            
                                            @include('partial.register')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function Redirect() {
            location.href = "{{route('login')}}";
        }

    </script>
</body>

</html>