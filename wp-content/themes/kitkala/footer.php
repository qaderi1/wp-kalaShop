<footer>
      <div class="kitkala-center">
        <div class="feature-footer">
          <img src="<?php bloginfo('template_url' ) ?>/assets/img/features.png" alt="">
        </div>
        <div class="footer-column">
          <?php if(is_active_sidebar( 'footer-1' )){
            dynamic_sidebar( 'footer-1' );
          } ?>
        </div>
        <div class="footer-column">
          <?php if(is_active_sidebar( 'footer-2' )){
            dynamic_sidebar( 'footer-2' );
          } ?>
        </div>
        <div class="footer-column">
          <?php if(is_active_sidebar( 'footer-3' )){
            dynamic_sidebar( 'footer-3' );
          } ?>
        </div>
        <!-- <div class="footer-column">
          <h4 class="footer-column-title">مجوزها</h4>
          <a href="#"><img src="assets/img/namad.png" alt=""> </a>
        </div> -->
        <div class="copyright-text"><p>استفاده از مطالب فروشگاه اینترنتی کیت کالا برای مقاصد غیر تجاری و با ذکر منبع بلا مانع است.</p></div>
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
var menu = ['10%', '20%', '30%','40%'];
  var swiper = new Swiper(".discount-slider", {
    direction: "vertical",
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (menu[index]) + '</span>';
        },
    },
    loop: true,
  });
</script>
  </body>
</html>
