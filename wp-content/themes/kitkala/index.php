<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset=" <?php bloginfo('charset'); ?>">
    <title><?php bloginfo('title'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/swiper-bundle.min.css">
    <script src="<?php bloginfo('template_url'); ?>/assets/js/swiper-bundle.min.js" type="text/javascript"></script>
    <?php wp_head() ?>
</head>

<body>
    <header>
        <a class="btnsearch" href="#"></a>
        <a class="kitkala-basket" href="#"></a>
        <a class="registerbtn" href="#">ورود/ ثبت نام</a>
        <a class="logo" href="#"><img src="assets/img/logo.png" alt=""></a>
        <nav class="main-menu">
            <ul>
                <li> <a href="#">صفحه اصلی</a> </li>
                <li> <a href="#">فروشگاه</a>
                    <ul>
                        <li><a href="#">محصولات الکترونیکی</a></li>
                        <li><a href="#">محصولات دیجیتالی</a>
                            <ul>
                                <li><a href="#">محصولات الکترونیکی</a></li>
                                <li><a href="#">محصولات دیجیتالی</a></li>
                                <li><a href="#">انواع موبایل های جدید</a>
                                    <ul>
                                        <li><a href="#">محصولات الکترونیکی</a></li>
                                        <li><a href="#">محصولات دیجیتالی</a></li>
                                        <li><a href="#">انواع موبایل های جدید</a></li>
                                        <li><a href="#">پربازدیدترین محصولات</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">پربازدیدترین محصولات</a></li>
                            </ul>
                        </li>
                        <li><a href="#">انواع موبایل های جدید</a></li>
                        <li><a href="#">پربازدیدترین محصولات</a></li>
                    </ul>
                </li>
                <li> <a href="#">وبلاگ</a> </li>
                <li> <a href="#">تخفیف ها</a> </li>
                <li> <a href="#">آموزش ها</a> </li>
                <li> <a href="#">درباره ما</a> </li>
            </ul>
        </nav>
    </header>
    <div class="kitkala-center">
        <div class="left-banner"><a href="#"><img src="assets/img/left-banner.jpg" alt=""></a></div>
        <div class="home-slider">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="assets/img/slide.png" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/slide.png" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/slide.png" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/slide.png" alt=""></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="banner-container">
            <div class="banner-item">
                <a href="#"> <img src="assets/img/0.jpg" alt=""> </a>
            </div>
            <div class="banner-item">
                <a href="#"> <img src="assets/img/1.jpg" alt=""> </a>
            </div>
            <div class="banner-item">
                <a href="#"> <img src="assets/img/2.jpg" alt=""> </a>
            </div>
            <div class="banner-item">
                <a href="#"> <img src="assets/img/3.jpg" alt=""> </a>
            </div>
        </div>
        <div class="suggest-product">
            <h2 class="kitkala-suggest-title">پیشنهاد کیت کالا</h2>
            <a href="#"> <img class="suggest-product-image" src="assets/img/suggest.png" alt=""> </a>
            <a href="#">
                <h3 class="title-product">لب تاپ ایسر مدل 2022 مخصوص کاربران گیمر</h3>
            </a>
            <span class="sug-product-price">36,549,000 تومان</span>
            <a href="#"> <span class="add-to-cart">افزودن به سبد خرید</span> </a>
        </div>
        <div class="discount-box swiper discount-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="discount-column">
                        <span class="sale-percent">20%</span>
                        <img src="assets/img/lab.jpg" alt="">
                    </div>
                    <div class="discount-column content">
                        <div class="product-prices">
                            <span class="regular-price">4,200,000 تومان</span>
                            <span class="sale-price">4,050,000 تومان</span>
                        </div>
                        <h2 class="product-title">لب تاپ 15 اینچی لنوو مدل 2022</h2>
                        <p class="sort-desc">
                            پردازنده Ryzen 5 5600H <br>
                            حافظه رم DDR4 با ظرفیت 16 گیگابایت <br>
                            هارددیسک با ظرفیت 1 ترابایت <br>
                            پردازنده گرافیکی با حافظه 4 گیگابایت <br>
                        </p>
                    </div>
                    <div class="discount-column sugeest-time">
                        <div class="text-suggest-time">
                            <span class="wonderful-suggest">پیشنهاد شگفت انگیز</span>
                            <span class="until-time">فرصتی باقی مانده</span>
                        </div>
                        <div class="countdown">
                            <div class="day">
                                <span class="no">02</span>
                                <span class="txt">روز</span>
                            </div>
                            <div class="hour">
                                <span class="no">20</span>
                                <span class="txt">ساعت</span>
                            </div>
                            <div class="minute">
                                <span class="no">14</span>
                                <span class="txt">دقیقه</span>
                            </div>
                            <div class="second">
                                <span class="no">23</span>
                                <span class="txt">ثانیه</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="discount-column">
                        <span class="sale-percent">20%</span>
                        <img src="assets/img/lab.jpg" alt="">
                    </div>
                    <div class="discount-column content">
                        <div class="product-prices">
                            <span class="regular-price">4,200,000 تومان</span>
                            <span class="sale-price">4,050,000 تومان</span>
                        </div>
                        <h2 class="product-title">لب تاپ 15 اینچی لنوو مدل 2022</h2>
                        <p class="sort-desc">
                            پردازنده Ryzen 5 5600H <br>
                            حافظه رم DDR4 با ظرفیت 16 گیگابایت <br>
                            هارددیسک با ظرفیت 1 ترابایت <br>
                            پردازنده گرافیکی با حافظه 4 گیگابایت <br>
                        </p>
                    </div>
                    <div class="discount-column sugeest-time">
                        <div class="text-suggest-time">
                            <span class="wonderful-suggest">پیشنهاد شگفت انگیز</span>
                            <span class="until-time">فرصتی باقی مانده</span>
                        </div>
                        <div class="countdown">
                            <div class="day">
                                <span class="no">02</span>
                                <span class="txt">روز</span>
                            </div>
                            <div class="hour">
                                <span class="no">20</span>
                                <span class="txt">ساعت</span>
                            </div>
                            <div class="minute">
                                <span class="no">14</span>
                                <span class="txt">دقیقه</span>
                            </div>
                            <div class="second">
                                <span class="no">23</span>
                                <span class="txt">ثانیه</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="discount-column">
                        <span class="sale-percent">20%</span>
                        <img src="assets/img/lab.jpg" alt="">
                    </div>
                    <div class="discount-column content">
                        <div class="product-prices">
                            <span class="regular-price">4,200,000 تومان</span>
                            <span class="sale-price">4,050,000 تومان</span>
                        </div>
                        <h2 class="product-title">لب تاپ 15 اینچی لنوو مدل 2022</h2>
                        <p class="sort-desc">
                            پردازنده Ryzen 5 5600H <br>
                            حافظه رم DDR4 با ظرفیت 16 گیگابایت <br>
                            هارددیسک با ظرفیت 1 ترابایت <br>
                            پردازنده گرافیکی با حافظه 4 گیگابایت <br>
                        </p>
                    </div>
                    <div class="discount-column sugeest-time">
                        <div class="text-suggest-time">
                            <span class="wonderful-suggest">پیشنهاد شگفت انگیز</span>
                            <span class="until-time">فرصتی باقی مانده</span>
                        </div>
                        <div class="countdown">
                            <div class="day">
                                <span class="no">02</span>
                                <span class="txt">روز</span>
                            </div>
                            <div class="hour">
                                <span class="no">20</span>
                                <span class="txt">ساعت</span>
                            </div>
                            <div class="minute">
                                <span class="no">14</span>
                                <span class="txt">دقیقه</span>
                            </div>
                            <div class="second">
                                <span class="no">23</span>
                                <span class="txt">ثانیه</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="discount-column">
                        <span class="sale-percent">20%</span>
                        <img src="assets/img/lab.jpg" alt="">
                    </div>
                    <div class="discount-column content">
                        <div class="product-prices">
                            <span class="regular-price">4,200,000 تومان</span>
                            <span class="sale-price">4,050,000 تومان</span>
                        </div>
                        <h2 class="product-title">لب تاپ 15 اینچی لنوو مدل 2022</h2>
                        <p class="sort-desc">
                            پردازنده Ryzen 5 5600H <br>
                            حافظه رم DDR4 با ظرفیت 16 گیگابایت <br>
                            هارددیسک با ظرفیت 1 ترابایت <br>
                            پردازنده گرافیکی با حافظه 4 گیگابایت <br>
                        </p>
                    </div>
                    <div class="discount-column sugeest-time">
                        <div class="text-suggest-time">
                            <span class="wonderful-suggest">پیشنهاد شگفت انگیز</span>
                            <span class="until-time">فرصتی باقی مانده</span>
                        </div>
                        <div class="countdown">
                            <div class="day">
                                <span class="no">02</span>
                                <span class="txt">روز</span>
                            </div>
                            <div class="hour">
                                <span class="no">20</span>
                                <span class="txt">ساعت</span>
                            </div>
                            <div class="minute">
                                <span class="no">14</span>
                                <span class="txt">دقیقه</span>
                            </div>
                            <div class="second">
                                <span class="no">23</span>
                                <span class="txt">ثانیه</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="kitkala-feature">
            <div class="">
                <span class="feature"> <img src="assets/img/org.png" alt="">ضمانت اصل بودن کالا</span>
                <span class="feature"> <img src="assets/img/price.png" alt="">تخفیف های همیشگی</span>
                <span class="feature"> <img src="assets/img/pay.png" alt="">پرداخت در محل</span>
                <span class="feature"> <img src="assets/img/doll.png" alt="">بهترین قیمت روز</span>
                <span class="feature"> <img src="assets/img/gur.png" alt="">گارانتی بازگشت وجه</span>
                <span class="feature"> <img src="assets/img/loc.png" alt="">ارسال به تمام نقاط کشور</span>
            </div>
        </div>
        <div class="most-sells-product">
            <h4 class="most-sell-title">پرفروش ترین لب تاپ ها</h4>
            <div class="inner-item-product">
                <div class="item-product">
                    <a href="#"> <img src="assets/img/lab.jpg" alt=""> </a>
                    <a href="#">
                        <h3>لب تاپ ایسوس مدل2022 رم 4 گیگ 1 ترابایت</h3>
                    </a>
                    <span>23,392,000 تومان</span>
                </div>
                <div class="item-product">
                    <a href="#"> <img src="assets/img/lab.jpg" alt=""> </a>
                    <a href="#">
                        <h3>لب تاپ ایسوس مدل2022 رم 4 گیگ 1 ترابایت</h3>
                    </a>
                    <span>23,392,000 تومان</span>
                </div>
                <div class="item-product">
                    <a href="#"> <img src="assets/img/lab.jpg" alt=""> </a>
                    <a href="#">
                        <h3>لب تاپ ایسوس مدل2022 رم 4 گیگ 1 ترابایت</h3>
                    </a>
                    <span>23,392,000 تومان</span>
                </div>
                <div class="item-product">
                    <a href="#"> <img src="assets/img/lab.jpg" alt=""> </a>
                    <a href="#">
                        <h3>لب تاپ ایسوس مدل2022 رم 4 گیگ 1 ترابایت</h3>
                    </a>
                    <span>23,392,000 تومان</span>
                </div>
                <div class="item-product">
                    <a href="#"> <img src="assets/img/lab.jpg" alt=""> </a>
                    <a href="#">
                        <h3>لب تاپ ایسوس مدل2022 رم 4 گیگ 1 ترابایت</h3>
                    </a>
                    <span>23,392,000 تومان</span>
                </div>
            </div>
        </div>
        <div class="home-middle-banner">
            <a class="adl-banner" href="#"> <img src="assets/img/adl.jpg" alt=""> </a>
            <a class="adr-banner" href="#"> <img src="assets/img/adr.jpg" alt=""> </a>
        </div>
        <div class="home-article">
            <h4 class="home-art-title">آخرین مقالات سایت</h4>
            <div class="home-box-article">
                <div class="article-item">
                    <a href="#"> <img src="assets/img/thum.jpg" alt=""> </a>
                    <a href="#">
                        <h3>10 اپلیکیشن برتر برای متحرک کردنعکس در اندروید و آیفون</h3>
                    </a>
                    <a href="#" class="author">اسحاق شفایی</a>
                    <span class="publish-date">8 آبان 1400</span>
                </div>
                <div class="article-item">
                    <a href="#"> <img src="assets/img/thum.jpg" alt=""> </a>
                    <a href="#">
                        <h3>10 اپلیکیشن برتر برای متحرک کردنعکس در اندروید و آیفون</h3>
                    </a>
                    <a href="#" class="author">اسحاق شفایی</a>
                    <span class="publish-date">8 آبان 1400</span>
                </div>
                <div class="article-item">
                    <a href="#"> <img src="assets/img/thum.jpg" alt=""> </a>
                    <a href="#">
                        <h3>10 اپلیکیشن برتر برای متحرک کردنعکس در اندروید و آیفون</h3>
                    </a>
                    <a href="#" class="author">اسحاق شفایی</a>
                    <span class="publish-date">8 آبان 1400</span>
                </div>
                <div class="article-item">
                    <a href="#"> <img src="assets/img/thum.jpg" alt=""> </a>
                    <a href="#">
                        <h3>10 اپلیکیشن برتر برای متحرک کردنعکس در اندروید و آیفون</h3>
                    </a>
                    <a href="#" class="author">اسحاق شفایی</a>
                    <span class="publish-date">8 آبان 1400</span>
                </div>
                <div class="article-item">
                    <a href="#"> <img src="assets/img/thum.jpg" alt=""> </a>
                    <a href="#">
                        <h3>10 اپلیکیشن برتر برای متحرک کردنعکس در اندروید و آیفون</h3>
                    </a>
                    <a href="#" class="author">اسحاق شفایی</a>
                    <span class="publish-date">8 آبان 1400</span>
                </div>
            </div>
            <h4 class="home-brand-title">برندهای ویژه</h4>
            <div class="home-brands swiper brand-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="center-item">
                            <div class="brand-item"><a href="#"><img src="assets/img/hp.png" alt=""></a></div>
                            <div class="brand-item"><a href="#"><img src="assets/img/asus.png" alt=""></a></div>
                            <div class="brand-item"><a href="#"><img src="assets/img/lenovo.png" alt=""></a></div>
                            <div class="brand-item"><a href="#"><img src="assets/img/acer.png" alt=""></a></div>
                            <div class="brand-item"><a href="#"><img src="assets/img/dell.png" alt=""></a></div>
                            <div class="brand-item"><a href="#"><img src="assets/img/apple.png" alt=""></a></div>
                            <div class="brand-item"><a href="#"><img src="assets/img/lg.png" alt=""></a></div>
                            <div class="brand-item"><a href="#"><img src="assets/img/sony.png" alt=""></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <footer>
        <div class="kitkala-center">
            <div class="feature-footer">
                <img src="assets/img/features.png" alt="">
            </div>
            <div class="footer-column">
                <h4 class="footer-column-title">راه های ارتباطی</h4>
                <p>
                    شماره تماس: 02154743046 <br>
                    ایمیل : info@kitwp.com <br>
                    آدرس : تهران، زعفرانیه ساختمان اداری لاله <br>
                    زمان پاسخگویی : 8 صبح تا 8 عصر <br>
                </p>
            </div>
            <div class="footer-column">
                <h4 class="footer-column-title">دسترسی سریع</h4>
                <ul>
                    <li><a href="#">درباره ما</a></li>
                    <li><a href="#">یگیری سفارش</a></li>
                    <li><a href="#">روش های پرداخت</a></li>
                    <li><a href="#">سوالان متداول</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4 class="footer-column-title">مجوزها</h4>
                <a href="#"><img src="assets/img/namad.png" alt=""> </a>
            </div>
            <div class="copyright-text">
                <p>استفاده از مطالب فروشگاه اینترنتی کیت کالا برای مقاصد غیر تجاری و با ذکر منبع بلا مانع است.</p>
            </div>
        </div>
    </footer>
    <?php wp_footer() ?>
    <script>
    var swiper = new Swiper(".brand-slider", {
        loop: true,
    });
    </script>
    <script>
    var swiper = new Swiper(".mySwiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        loop: true,
        autoHeight: true,
        autoplay: {
            delay: 2000,
        },
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
        },
    });
    </script>
    <script>
    var menu = ['10%', '20%', '30%', '40%'];
    var swiper = new Swiper(".discount-slider", {
        direction: "vertical",
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            renderBullet: function(index, className) {
                return '<span class="' + className + '">' + (menu[index]) + '</span>';
            },
        },
        loop: true,
    });
    </script>
</body>

</html>