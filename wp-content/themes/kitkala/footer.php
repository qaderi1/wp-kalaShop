<footer>
    <div class="kitkala-center">
        <div class="feature-footer">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/features.png" alt="">
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
            <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/namad.png" alt=""> </a>
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