
<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>طراحی سایت-خرید سایت-قیمت طراحی سایت</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style-first.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style-second.css') }}">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- link file css -->
    <link rel="stylesheet" href="{{ asset('style2.css') }}">

</head>

<body>
    <main>
        @if(request()->query('verified')==1)

<script>alert('ثبت نام شما با موفقیت انجام شد')</script>
@endif


        <header id="header">


            <nav>
                <div class="container">


                    <div class="links">
                        <ul>

                            <li>

                                <a href="#header" class="active">صفحه اصلی</a>
                            </li>

                            @auth
                            <li>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button class="exit-btn"><i class="fa-solid fa-arrow-right-from-bracket"></i> خروج </button>
                                </form>
                            </li>
                            
                            @else
                            
                            <li>

                                <a href="{{ route('login') }}">ثبت نام/ورود</a>

                            </li>
                            @endauth

                            <li>
                                <a href="#services">خدمات</a>
                            </li>
                            <!-- <li>
                    <a href="#portfolio">Portfolio</a>
                  </li> -->
                            <li>
                                <a href="#about">درباره ما</a>
                            </li>
                            <li>
                                <a href="#testimonials">نظرات</a>
                            </li>
                            <li>
                                <a href="#contact">تماس باما</a>
                            </li>
                            <li>
                                <a href="#hireme">شروع کنیم</a>
                            </li>
                        </ul>

                    </div>
                    <div class="logo">
                        <img src="./img-1/logo.png" alt="" />
                    </div>
                    <div class="hamburger-menu">
                        <div class="bar"></div>
                    </div>
                </div>
            </nav>
        </header>



        <div class="mother1">

            <section class="home1">



                <div class="home-img1"><img src="img-1/bnnnerr.png" class="image-home1" alt=""></div>
                <div class="home-content1" style="line-height: 1.9;">
                    <h1>با یک <span>وبسایت</span> <br>
                        کسب و کار خود را با دنیای بی مرز اینترنت <br>
                        به اشتراک بگذارید!</h1>
                    <p style="font-size: 1.25vw;" class="title-one">بهترین تجربه آنلاین را برای شما فراهم می‌کنیم.</p>
                </div>

            </section>
        </div>

        <!-- Swiper -->
        <div class="sliderone">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="img/slider/7.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/slider/2.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/slider/3.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/slider/4.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/slider/5.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/slider/6.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/slider/1.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/slider/8.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/slider/9.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/slider/car rent.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/slider/delivery.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/slider/Desktop - 1.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/slider/Exirpro.png" alt="">
                    </div>

                    <!-- 15 div -->
                </div>

            </div>
        </div>

        <section class="services section" id="services">
            <div class="container">
                <div class="section-header">
                    <h3 class="title" data-title="تیم APEX">خدمات ما</h3>
                    <p class="text" style="text-align: justify;">
                        ما در تیم Apex، به ارائه خدمات با کیفیت و رضایت مشتریانمان اهمیت می‌دهیم. برای همین، در تمامی
                        مراحل
                        پروژه،
                        از زمان طراحی تا اجرا، با مشتریانمان در ارتباط بوده و دیدگاه‌هایشان را در نظر گرفته و در
                        پروژه‌ها‌یشان
                        لحاظ
                        می‌کنیم.


                    </p>
                </div>

                <div class="cards">
                    <div class="card-wrap">
                        <img src="./img/shapes/points3.png" class="points points1 points-sq" alt="" />
                        <div class="card" data-card="UI/UX">
                            <div class="card-content z-index">
                                <img src="./img/design-icon.png" class="icon" alt="" />
                                <h3 class="title-sm">طراحی رابط کاربری سایت</h3>
                                <p class="text" style="text-align: center;">
                                    یک رابط کاربری مناسب، باعث بهبود تجربه کاربری، افزایش رضایت کاربران و در نهایت، رشد
                                    کسب و کار
                                    شما می‌شود.

                                </p>
                                <a href="#" class="btn small">بیشتر...</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-wrap">
                        <div class="card" data-card="Code">
                            <div class="card-content z-index">
                                <img src="./img/code-icon.png" class="icon" alt="" />
                                <h3 class="title-sm">کدنویسی وبسایت</h3>
                                <p class="text" style="text-align: center;">
                                    ما به دقت به تغییرات و نیازهای بازار و صنعت توجه می‌کنیم و سایت‌هایی با طراحی جذاب،
                                    کاربرپسند و
                                    سازگار
                                    با دستگاه‌های مختلف فراهم می‌کنیم.
                                </p>
                                <a href="#" class="btn small">بیشتر...</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-wrap">
                        <img src="./img/shapes/points3.png" class="points points2 points-sq" alt="" />
                        <div class="card" data-card="Web App">
                            <div class="card-content z-index">
                                <img src="./img/app-icon.png" class="icon" alt="" />
                                <h3 class="title-sm">وب اپلیکیشن</h3>
                                <p class="text" style="text-align: center;">با توجه به افزایش استفاده از دستگاه‌های
                                    هوشمند و
                                    اینترنت،
                                    وب
                                    اپلیکیشن‌ها به یکی از
                                    روش‌های مهم توسعه نرم‌افزار تبدیل شده‌اند که شرکت‌ها و کسب‌وکارها هر روز از آن
                                    استفاده بیشتری
                                    می‌کنند.
                                </p>
                                <a href="#" class="btn small">بیشتر...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="about section" id="about">
            <div class="container">
                <div class="section-header">
                    <h3 class="title" data-title="ما کی هستیم؟">درباره ما</h3>
                </div>

                <div class="section-body grid-2">
                    <div class="column-1">
                        <h3 class="title-sm">سلام!</h3>
                        <p class="text last">
                            در تیم Apex، توسعه‌دهندگان فرانت‌اند ما به طور کامل با زبان‌های HTML، CSS و JavaScript آشنا
                            هستند و
                            قادرند
                            تا طراحی و توسعه وب‌سایت‌هایی با استفاده از فریمورک‌های مختلفی مانند React، Vue.js و Angular
                            انجام
                            دهند.
                            علاوه براین، توسعه‌دهندگان بک‌اند ما نیز با زبان‌های برنامه‌نویسی مانند PHP، Python و
                            Node.js آشنا
                            هستند
                            و
                            می‌توانند به کمک این زبان‌ها، بک‌اند سایت‌های پویا و پیشرفته‌ای را ایجاد کنند.
                        </p>
                        <div class="skills">
                            <div class="skill html">
                                <h3 class="skill-title">Front-End</h3>
                                <div class="skill-bar">
                                    <div class="skill-progress" data-progress="100%"></div>
                                </div>
                            </div>
                            <div class="skill css">
                                <h3 class="skill-title">Back-End</h3>
                                <div class="skill-bar">
                                    <div class="skill-progress" data-progress="100%"></div>
                                </div>
                            </div>

                        </div>
                        <!-- <a href="#" class="btn">Read more</a> -->
                    </div>

                    <div class="column-2 image">
                        <img src="./img/shapes/points4.png" class="points" alt="" />
                        <img src="./img/IMG_20230602_224409_233-Recovered copy 2.png" class="z-index"
                            alt="" />
                    </div>
                </div>
            </div>
        </section>

        <section class="records">
            <div class="overlay overlay-sm">
                <img src="./img/shapes/square.png" alt="" class="shape square1" />
                <img src="./img/shapes/square.png" alt="" class="shape square2" />
                <img src="./img/shapes/circle.png" alt="" class="shape circle" />
                <img src="./img/shapes/half-circle.png" alt="" class="shape half-circle" />
                <img src="./img/shapes/wave.png" alt="" class="shape wave wave1" />
                <img src="./img/shapes/wave.png" alt="" class="shape wave wave2" />
                <img src="./img/shapes/x.png" alt="" class="shape xshape" />
                <img src="./img/shapes/triangle.png" alt="" class="shape triangle" />
            </div>

            <div class="container">
                <div class="wrap">
                    <div class="record-circle">
                        <h2 class="number" data-num="27">0</h2>
                        <h4 class="sub-title">پروژه</h4>
                    </div>
                </div>

                <div class="wrap">
                    <div class="record-circle active">
                        <h2 class="number" data-num="100">0</h2>
                        <h4 class="sub-title">%</h4>
                        <h4 class="sub-title">رضایت مشتری</h4>
                    </div>
                </div>

                <div class="wrap">
                    <div class="record-circle">
                        <h4 class="sub-title">ساعت کاری</h4>
                        <h2 class="number" data-num="24">0</h2>
                        <h4 class="sub-title">ساعته</h4>
                    </div>
                </div>

                <div class="wrap">
                    <div class="record-circle">
                        <h2 class="number" data-num="8">0</h2>
                        <h4 class="sub-title">هم تیمی</h4>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact" id="contact">
            <div class="container">
                <div class="contact-box">
                    <div class="contact-info">
                        <h3 class="title">با ما در تماس باشید</h3>
                        <p class="text" style="text-align: justify; width: 90%;">
                            ما همواره آماده به مکالمه با شما هستیم.<br> شما می‌توانید با تکمیل فرم تماس موجود، پیام خود
                            را به ما
                            ارسال
                            کنید. همچنین، می‌توانید از طریق ایمیل و شماره تلفن‌های موجود در سایت، با ما در ارتباط باشید.
                        </p>
                        <div class="information-wrap">

                            <div class="information">
                                <div class="contact-icon">
                                    <i class="fa-regular fa-envelope"></i>
                                </div>
                                <p class="info-text"><a href="mailto:onapex.web@gmail.com">onapex.web@gmail.com</a>
                                </p>
                            </div>

                            <div class="information">
                                <div class="contact-icon">
                                    <i class="fa-brands fa-instagram"></i>
                                </div>
                                <p class="info-text"><a
                                        href="https://instagram.com/onapex.web?igshid=MzRlODBiNWFlZA==">onapex.web</a>
                                </p>
                            </div>

                            <div class="information">
                                <div class="contact-icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <p class="info-text"><a href="tel:09938037166">98-993-803-7166+</a></p>
                            </div>
                            <div class="information">
                                <div class="contact-icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>

                                <p class="info-text"><a href="tel:09307867799">98-930-786-7799+</a></p>
                            </div>
                        </div>
                    </div>
                    @guest
                    <img src="img/contct2.png" alt="contactus" width="40%" height="auto"
                        style="display: inline;"> <a href="{{route('login')}}" class="btn small"
                        style="width: 40%; text-align: center; font-size: 17px;">ثبت‌نام /
                        ورود</a>
                        @endguest


                        @auth
                        @if(session('success'))
                        <script> alert("{{session('success')}}") </script>
                        @endif
                        <form action="{{route('send-email')}}" method="post">
                            @csrf
                    <div class="contact-form" id="contactform" >
                        <div class="row">
                            <input type="text" name="name" id="name" value="{{Auth::user()->name}}" class="contact-input" placeholder="نام و نام خانوادگی" />
                            {{-- <input type="text" name="family" id="familyName" class="contact-input"
                                placeholder="نام خانوادگی" /> --}}
                                @error('name')
                                <script>alert('{{ $message }}')</script>
                                @enderror
                        </div>

                        <div class="row">
                            <input type="text" name="phone" value="{{Auth::user()->phone}}"  id="number" class="contact-input" placeholder="شماره تماس" />
                            @error('phone')
                                <script>alert('{{ $message }}')</script>
                                @enderror
                            <input type="email" name="email" value="{{Auth::user()->email}}" id="email" class="contact-input" placeholder="ایمیل" />
                            @error('email')
                                <script>alert('{{ $message }}')</script>
                                @enderror
                        </div>

                        <div class="row">
                            <textarea name="text"   id="message" class="contact-input textarea" placeholder="پیام..."></textarea>
                            @error('text')
                                <script>alert('{{ $message }}')</script>
                                @enderror
                        </div>
                        <button type="submit" id="btnn" class="btn small">ارسال</button>
                    </div>
                </form>
                    @endauth
                </div>
            </div>
        </section>

        <section class="hireme two" id="hireme">
            <div class="container">
                <h3 class="title" style="font-weight: 500;">با ما، صاحب یک وبسایت حرفه‌ای شوید</h3>
                <p class="text" style="text-align: center;">
                    وبسایت شما نشانگر اعتبار، قابلیت اطمینان و پیشرفت است، بیایید با وبسایت خود، به مشتریان خود نشان
                    دهید که
                    بهترین هستید.

                </p>
                <a href="#contact" class="btn small">تماس باما</a>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="grid-4 two">
                <div class="grid-4-col footer-about">
                    <h3 class="title-sm">درباره ما</h3>
                    <p class="text" style="text-align: justify;">
                        ما یک تیم حرفه‌ای از توسعه‌دهندگان فرانت‌اند و بک‌اند هستیم که برای شرکت‌ها و کسب و کارهای
                        اینترنتی،
                        وب‌سایت‌هایی بسیار جذاب، کاربرپسند و قابل اعتماد ایجاد می‌کنیم. تجربه و تخصص فنی و عمیق ما در
                        بخش‌های مختلف
                        توسعه‌وب و برنامه‌نویسی ما را قادر می‌سازد تا بهترین خدمات وبسایت را به مشتریانمان ارائه دهیم.
                    </p>
                </div>

                <div class="grid-4-col footer-links">
                    <h3 class="title-sm">پیوندها</h3>
                    <ul>
                        <li>
                            <a href="#services">خدمات</a>
                        </li>

                        <li>
                            <a href="#about">درباره ما</a>
                        </li>

                        <li>
                            <a href="#contact">تماس باما</a>
                        </li>
                    </ul>
                </div>


                <div class="grid-3-col footer-newstletter">
                    <h3 class="title-sm">تماس باما</h3>
                    <p class="text">
                    <div class="information">
                        <div class="contact-icon">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <p class="info-text"><a style="color: white;"
                                href="mailto:onapex.web@gmail.com">onapex.web@gmail.com</a>
                        </p>
                    </div>

                    <div class="information">
                        <div class="contact-icon">
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                        <p class="info-text"><a style="color: white;"
                                href="https://instagram.com/onapex.web?igshid=MzRlODBiNWFlZA==">onapex.web</a>
                        </p>
                    </div>

                    <div class="information">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <p class="info-text"><a style="color: white;" href="tel:09938037166">98-993-803-7166+</a></p>
                    </div>
                    <div class="information">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>

                        <p class="info-text"><a style="color: white;" href="tel:09307867799">98-930-786-7799+</a></p>
                    </div>
                </div>
            </div>
            </p>
            <div class="footer-input-wrap" style="display: none;">
                <input type="email" class="footer-input" placeholder="Email" />
                <a href="#" class="input-arrow">
                    <i class="fas fa-angle-right"></i>
                </a>
            </div>
        </div>
        </div>

        <div class="bottom-footer">

            <div class="back-btn-wrap">
                <a href="#" class="back-btn">
                    <i class="fas fa-chevron-up"></i>
                </a>
            </div>
        </div>
        </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./js/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./js/app.js"></script>
    <script src="https://kit.fontawesome.com/03320ecfdf.js" crossorigin="anonymous"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 15,
                stretch: 0,
                depth: 300,
                modifier: 1,
                slideShadows: true,
            },
            loop: true,
        });
    </script>

    <script src="https://smtpjs.com/v3/smtp.js"></script>

<script src="https://kit.fontawesome.com/03320ecfdf.js" crossorigin="anonymous"></script>
</body>

</html>
