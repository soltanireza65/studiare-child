<?php /* Template Name: Landing Template */?>

<!doctype html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" زی نو تریدر، سامانه هوشمند معاملات برخط بازار سرمایه">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/landing-assets/styles.css">
    <style>
        @font-face {
            font-family: iransans;
            font-style: normal;
            font-weight: 700;
            src: url("<?php bloginfo('stylesheet_directory') ?>/landing-assets/fonts/iransans/eot/IRANSansWeb_Bold.eot");
            src: url("<?php bloginfo('stylesheet_directory') ?>/landing-assets/fonts/iransans/eot/IRANSansWeb_Bold.eot@") format("embedded-opentype"),
                url("<?php bloginfo('stylesheet_directory') ?>/landing-assets/fonts/iransans/woff2/IRANSansWeb_Bold.woff2") format("woff2"),
                url("<?php bloginfo('stylesheet_directory') ?>/landing-assets/fonts/iransans/woff/IRANSansWeb_Bold.woff") format("woff"),
                url("<?php bloginfo('stylesheet_directory') ?>/landing-assets/fonts/iransans/ttf/IRANSansWeb_Bold.ttf") format("truetype");
        }

        @font-face {
            font-family: iransans;
            font-style: normal;
            font-weight: 500;
            src: url("<?php bloginfo('stylesheet_directory') ?>/landing-assets/fonts/iransans/eot/IRANSansWeb_Medium.eot");
            src: url("<?php bloginfo('stylesheet_directory') ?>/landing-assets/fonts/iransans/eot/IRANSansWeb_Medium.eot@") format("embedded-opentype"),
                url("<?php bloginfo('stylesheet_directory') ?>/landing-assets/fonts/iransans/woff2/IRANSansWeb_Medium.woff2") format("woff2"),
                url("<?php bloginfo('stylesheet_directory') ?>/landing-assets/fonts/iransans/woff/IRANSansWeb_Medium.woff") format("woff"),
                url("<?php bloginfo('stylesheet_directory') ?>/landing-assets/fonts/iransans/ttf/IRANSansWeb_Medium.ttf") format("truetype");
        }

        @font-face {
            font-family: iransans;
            font-style: normal;
            font-weight: 300;
            src: url("<?php bloginfo('stylesheet_directory') ?>/landing-assets/fonts/iransans/eot/IRANSansWeb_Light.eot");
            src: url("<?php bloginfo('stylesheet_directory') ?>/landing-assets/fonts/iransans/eot/IRANSansWeb_Light.eot@") format("embedded-opentype"),
                url("<?php bloginfo('stylesheet_directory') ?>/landing-assets/fonts/iransans/woff2/IRANSansWeb_Light.woff2") format("woff2"),
                url("<?php bloginfo('stylesheet_directory') ?>/landing-assets/fonts/iransans/woff/IRANSansWeb_Light.woff") format("woff"),
                url("<?php bloginfo('stylesheet_directory') ?>/landing-assets/fonts/iransans/ttf/IRANSansWeb_Light.ttf") format("truetype");
        }

        @font-face {
            font-family: iransans;
            font-style: normal;
            font-weight: 200;
            src: url("<?php bloginfo('stylesheet_directory') ?>/landing-assets/fonts/iransans/eot/IRANSansWeb_UltraLight.eot");
            src: url("<?php bloginfo('stylesheet_directory') ?>/landing-assets/fonts/iransans/eot/IRANSansWeb_UltraLight.eot@") format("embedded-opentype"),
                url("<?php bloginfo('stylesheet_directory') ?>/landing-assets/fonts/iransans/woff2/IRANSansWeb_UltraLight.woff2") format("woff2"),
                url("<?php bloginfo('stylesheet_directory') ?>/landing-assets/fonts/iransans/woff/IRANSansWeb_UltraLight.woff") format("woff"),
                url("<?php bloginfo('stylesheet_directory') ?>/landing-assets/fonts/iransans/ttf/IRANSansWeb_UltraLight.ttf") format("truetype");
        }

        @font-face {
            font-family: iransans;
            font-style: normal;
            font-weight: 400;
            src: url("<?php bloginfo('stylesheet_directory') ?>/landing-assets/fonts/iransans/eot/IRANSansWeb.eot");
            src: url("<?php bloginfo('stylesheet_directory') ?>/landing-assets/fonts/iransans/eot/IRANSansWeb.eot@") format("embedded-opentype"),
                url("<?php bloginfo('stylesheet_directory') ?>/landing-assets/fonts/iransans/woff2/IRANSansWeb.woff2") format("woff2"),
                url("<?php bloginfo('stylesheet_directory') ?>/landing-assets/fonts/iransans/woff/IRANSansWeb.woff") format("woff"),
                url("<?php bloginfo('stylesheet_directory') ?>/landing-assets/fonts/iransans/ttf/IRANSansWeb.ttf") format("truetype");
        }

        @font-face {
            font-family: "trading-platform-icon";
            src: url("<?php bloginfo('stylesheet_directory') ?>/landing-assets/fonts/icon_fonts/trading-platform-icon.eot?slw0p0");
            src: url("<?php bloginfo('stylesheet_directory') ?>/landing-assets/fonts/icon_fonts/trading-platform-icon.eot?slw0p0#iefix") format("embedded-opentype"),
                url("<?php bloginfo('stylesheet_directory') ?>/landing-assets/fonts/icon_fonts/trading-platform-icon.ttf?slw0p0") format("truetype"),
                url("<?php bloginfo('stylesheet_directory') ?>/landing-assets/fonts/icon_fonts/trading-platform-icon.woff?slw0p0") format("woff"),
                /* url('/fonts/trading-platform-icon.svg?slw0p0#trading-platform-icon') format('svg'); */
                url("<?php bloginfo('stylesheet_directory') ?>/landing-assets/fonts/icon_fonts/trading-platform-icon.svg?slw0p0#trading-platform-icon") format("svg");
            font-weight: normal;
            font-style: normal;
            font-display: block;
        }


        .container-with-background {
            background-image: url("<?php bloginfo('stylesheet_directory') ?>/landing-assets/images/bg.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
            height: 100vh;
        }

        .container-with-background_2 {
            background-image: url("<?php bloginfo('stylesheet_directory') ?>/landing-assets/images/bg_2.png");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
            height: 100vh;
        }

        @media (max-width: 768px) {
            .container-with-background {
                /* background-image: none; */
                height: 50vh;
            }

            .container-with-background_2 {
                /* background-image: none; */
                height: 55vh;
            }

        }
    </style>
    <title>​Xino trading platform</title>
</head>

<body>

    <!-- header start -->
    <div class="w-100 py-2" style="z-index: 1;   background: linear-gradient(201deg,rgba(0,0,0,1) 5%,rgb(0,9,30) 47%);">
        <div class="container horizontal-align">
            <div class=" d-flex justify-content-center">
                <div class="py-2 d-flex align-items-center gap-2">
                    <h6 class="fs-5 fw-normal m-0">​Xino trading platform</h6>
                    <img src="<?php bloginfo('stylesheet_directory') ?>/landing-assets/images/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- header end -->

    <!-- Hero start -->
    <div class="section hero container-with-background container-fluid">
        <div class="container-with-background container-fluid ">
            <div class="container-with-background_2">
                <div class=" container d-flex flex-column align-items-center text-center">
                    <div class="mb-3">
                        <h3 class="fw-bold title">زی نــــو تریـــدر</h3>
                        <h5> سامانه هوشمند معاملات برخط بازار سرمایه</h5>
                        <p class="p_size">زی نو تریدر تجربه نو و لذت بخش از سرمایه گذاری را در بازارهای مالی فراهم کرده
                            است . </p>
                    </div>
                    <img src="<?php bloginfo('stylesheet_directory') ?>/landing-assets/images/hero.png" class="d-block w-100 mb-3 " alt="">

                </div>

                <div class=" mt-3 d-flex justify-content-center gap-2">
                    <a href="https://customer.armanbroker.ir/register/10493874124029" class="btn button px-5">شروع
                        معامله</a>
                    <!-- <a href="https://academy.xana.biz/" class="btn button_outline px-4"> اطلاعات بیشتر</a> -->

                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Hero End -->


    <div class="section carousel d-flex flex-column align-items-center justify-content-center my-5">
        <div class="container ">
            <div id="carouselControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php bloginfo('stylesheet_directory') ?>/landing-assets/images/carousel/1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php bloginfo('stylesheet_directory') ?>/landing-assets/images/carousel/2.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <div class="section d-flex flex-column align-items-center justify-content-around my-5"
        style="margin-left: 20px; margin-right: 20px;">
        <h3 class="fw-bold title mt-5">ویژگی های برجسته زیــنو تریدر​​​​​​​</h3>
        <div class="container mt-5 ">
            <div class="row g-4 ">
                <div class="col-sm-12 col-md-6 col-lg-4 ">
                    <div class="card d-flex flex-column align-items-center text-center py-3 card_high">
                        <div class="glyph fs1">
                            <div class="clearfix bshadow0 pbs icon-home">
                                <i class="icon-esay-use"></i>
                            </div>
                        </div>
                        <p class="card-title">​​​استفاده آسان</p>
                        <div class="card-body">
                            <p class="card-text p_size">زینو تریدر علاوه بر نسخه دسکتاب در گوشی های هوشمند Android و IOS
                                به راحتی و بدون نیاز به APP Store ها قابلیت استفاده دارد.</p>
                        </div>
                        <div class="line "></div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 ">
                    <div class="card d-flex flex-column align-items-center text-center py-3 card_high">
                        <div class="glyph fs1">
                            <div class="clearfix bshadow0 pbs icon-home">
                                <i class="icon-filter"></i>
                            </div>
                        </div>
                        <p class="card-title">فیترهای هوشمند</p>
                        <div class="card-body">
                            <p class="card-text p_size">​​​​​​با استفاده از فیلترهای هوشمند و تحلیل خودکار روند لحظه ای
                                بازار سهام را با سرعت بیشتری  رصد و شناسایی کنید . بیش از 50 فیلتر در زینو تریدر توسط
                                ربات های هوشمند به روز می شود. ​​​​​​​​​​​​​​​</p>
                        </div>
                        <div class="line "></div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 ">
                    <div class="card d-flex flex-column align-items-center text-center py-3 card_high">
                        <div class="glyph fs1">
                            <div class="clearfix bshadow0 pbs icon-home">
                                <i class="icon-order"></i>
                            </div>
                        </div>
                        <p class="card-title">مدیریت پیشرفته سفارشات </p>
                        <div class="card-body">
                            <p class="card-text p_size">انواع ابزارهای پیشرفته برای مدیریت سفارشات مانند ارسال پی در پی
                                ، ارسال گروهی ، ویرایش گروهی ، حذف گروهی.استفاده از کلید های میانبر ،تجمیع
                                سفارشات و..​​​​​​​</p>
                        </div>
                        <div class="line "></div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 ">
                    <div class="card d-flex flex-column align-items-center text-center py-3 card_high">
                        <div class="glyph fs1">
                            <div class="clearfix bshadow0 pbs icon-home">
                                <i class="icon-speed"></i>
                            </div>
                        </div>
                        <p class="card-title"> سرعت </p>
                        <div class="card-body">
                            <p class="card-text p_size">زینو تریدر با تاکید بر طراحی مدرن نرم افزاری و سرور های اختصاصی
                                و قدرتمند، سرعت و امنیت بیشتری را مدیریت پنل معاملاتی فراهم ساخته است .​​​​​​​</p>
                        </div>
                        <div class="line "></div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 ">
                    <div class="card d-flex flex-column align-items-center text-center py-3 card_high">
                        <div class="glyph fs1">
                            <div class="clearfix bshadow0 pbs icon-home">
                                <i class="icon-team"></i>
                            </div>
                        </div>
                        <p class="card-title"> تیم حرفه ای </p>
                        <div class="card-body">
                            <p class="card-text p_size">با اقدامات امنیتی قوی کنترل ها و پایش های لحظه ای ، با آرامش و
                                اطمینان خاطر معامله کنید . در هر لحظه  با استفاده از ابزارهای مدرن ، سلامت و صحت کارکرد
                                سامانه توسط تیم حرفه ایی و چابک مانیتور گردد​​​​​​​​​​​​​​​​​​​​​</p>
                        </div>
                        <div class="line "></div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 ">
                    <div class="card d-flex flex-column align-items-center text-center py-3 card_high">
                        <div class="glyph fs1">
                            <div class="clearfix bshadow0 pbs icon-home">
                                <i class="icon-portfoy"></i>
                            </div>
                        </div>
                        <p class="card-title"> مدیریت پیشرفته پرتفوی</p>
                        <div class="card-body">
                            <p class="card-text p_size">در زینو تریدر سود و زیان خود را به شکل لحظه ایی در کنار تاریخچه
                                پرتفوی مدیریت کنید . در این سامانه هر تغییر به شکل کامل ثبت می گردد تا بتوانید روند
                                سرمایه گذاری خود را مدیریت کنید و با اشتراک گذاری آن از حرفه ایی ها مشاوره بگیرید
                                . ​​​​​​​</p>
                        </div>
                        <div class="line "></div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="section hero d-flex flex-column align-items-center justify-content-around gap-2 my-5">
        <div class="container">
            <h3 class="fw-bold title text-center mb-5 ">​​​​​​زی نو تریدر با رابط کاربری هوشمند و سریع سرعت تصمیم گیری
                شما را افزایش
                می
                دهد</h3>
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-sm-12 col-md-5 col-lg-5">
                        <div class="d-flex flex-column g-3">
                            <div class="list-item p-3 my-2 p_size">تحلیل کلی روند معاملاتی سهم​​​​​​​</div>
                            <div class="list-item p-3 my-2 p_size">نمایش P/E و بررسی آن نسبت به P/E گروه​​​​​​​</div>
                            <div class="list-item p-3 my-2 p_size">نمایش YTM لحظه ایی و YTM مظنه خرید و فروش اوراق
                                بدهی​​​​​​​
                            </div>
                            <div class="list-item p-3 my-2 p_size">نمودار روند خرید و فروش حقیقی و حقوقی​​​​​​​</div>
                            <div class="list-item p-3 my-2 p_size">نمودار سهامدارن عمده شرکت​​​​​​​</div>
                            <div class="list-item p-3 my-2 p_size">یاد داشت گذاری چند گانه برروی سهم​​​​​​​</div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7 col-lg-7">
                        <img src="<?php bloginfo('stylesheet_directory') ?>/landing-assets/images/details.png" class="d-block w-100" alt="">
                    </div>
                    <div class="col-sm-12 col-md-7 col-lg-7">
                        <img src="<?php bloginfo('stylesheet_directory') ?>/landing-assets/images/chart.png" class="d-block w-100" alt="">
                    </div>
                    <div class="col-sm-12 col-md-5 col-lg-5">
                        <div class="d-flex flex-column g-3">
                            <div class="list-item p-3 my-2 p_size">نمودار لحظه ای صف و عمق بازار</div>
                            <div class="list-item p-3 my-2 p_size">مدیریت همزمان پرتفوی و سفارشات در صفحه اصلی</div>
                            <div class="list-item p-3 my-2 p_size">ارسال سفارش به شکل پاپ آپ و چند تایی</div>
                            <div class="list-item p-3 my-2 p_size">نمودار رنج معاملاتی روز</div>
                            <div class="list-item p-3 my-2 p_size">حذف و ویرایش گروهی سفارشات</div>
                            <div class="list-item p-3 my-2 p_size">تحلیل کلی روند معاملاتی سهم​​​​​​​</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section hero my-5 ">
        <div class="container-with-background_2 container-fluid">
            <div class="container d-flex flex-column align-items-center justify-content-center">
                <h3 class="fw-bold text-center my-5 title">نسخه موبایل زی نو تریدر فراتر از یک ابزار معاملاتی ساده ،
                    سریع ، با تمام امکانات
                    نسخه
                    دسکتاپ
                </h3>
                <img src="<?php bloginfo('stylesheet_directory') ?>/landing-assets/images/mobile.png" style="max-width:75%;" alt="">
                <div class=" mt-3 d-flex justify-content-center gap-2 mb-4">
                    <a href="https://customer.armanbroker.ir/register/10493874124029" class="btn button px-4">شروع
                        معامله</a>
                    <a href="https://academy.xana.biz/xanis-trade-guide/landing/" class="btn button_outline px-5">
                        اطلاعات بیشتر</a>

                </div>
            </div>
        </div>
    </div>
    <div class="section hero my-5">
        <div class="container  d-flex flex-column align-items-center justify-content-center">

            <video class="video_size" muted controls rounded rounded-video>
                <source
                    src="https://xana-academy.arvanvod.ir/5jRWAr4Zpb/pG8XBmx3yg/origin_W2SYz1OuOtO1vLxeOtqWiOyDda9ldNY5tOaW59Qt.mp4"
                    type="video/mp4" />
            </video>


        </div>
    </div>

    <div style="border-top: 1px solid rgba(255, 255, 255, 0.1);">
        <footer class="container my-5">
            <div class="row">
                <div class="col-md-6 text-md-right">
                    <img class="logo" src="<?php bloginfo('stylesheet_directory') ?>/landing-assets/images/logo.png" alt="xaniis" class="logo">
                    <span style="font-size: 20px ; margin-right: 8px;" class="company-name">زانیس</span>
                </div>
                <div class="col-md-6 text-md-left mt-4 mt-md-0">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="#" class="nav-link px-2 text-muted d-flex align-items-center gap-2"> <i
                                    class="icon-mail footer_icon"></i> ​Info@xaniis.com​​​​</i></a>
                        </div>
                        <div class="col-sm-6">
                            <a href="#" class="nav-link px-2 text-muted d-flex align-items-center gap-2"> <i
                                    class="icon-website footer_icon"></i> ​​www.xaniis.com</i></a>
                        </div>
                        <div class="col-sm-6">
                            <a href="#" class="nav-link px-2 text-muted d-flex align-items-center gap-2"> <i
                                    class="icon-phone footer_icon"></i> 021‌‌-91079605</i></a>
                        </div>
                        <div class="col-sm-6">
                            <a href="#" class="nav-link px-2 text-muted d-flex align-items-center gap-2"><i
                                    class="icon-location footer_icon"></i>تهران ، بلوار آفریقا، کوچه
                                سپرپلاک ۱۷</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>