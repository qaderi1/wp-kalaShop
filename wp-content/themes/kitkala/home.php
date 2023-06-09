 <?php get_header(); ?>

 <div class="kitkala-center">
     <div class="left-banner"><a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/left-banner.jpg"
                 alt=""></a></div>
     <div class="home-slider">
         <div class="swiper mySwiper">
             <div class="swiper-wrapper">

                 <?php
          $array_slider = array('post_type' => 'slider', 'posts_per_page' => 3);
          $query = new WP_Query($array_slider);

          if ($query->have_posts()) {
            while ($query->have_posts()) {
              $query->the_post(); ?>

                 <div class="swiper-slide"><a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail() ?> </a></div>

                 <?php
            }
          } else {
            echo '<div class="swiper-slide">پستی برای نمایش وجود ندارد</div>';
          }
          //restore orginal post data
          wp_reset_postdata();
          ?>

             </div>
             <div class="swiper-button-next"></div>
             <div class="swiper-button-prev"></div>
             <div class="swiper-pagination"></div>
         </div>
     </div>
     <div class="clear"></div>
     <div class="banner-container">
         <div class="banner-item">
             <a href="#"> <img src="<?php bloginfo('template_url'); ?>/assets/img/0.jpg" alt=""> </a>
         </div>
         <div class="banner-item">
             <a href="#"> <img src="<?php bloginfo('template_url'); ?>/assets/img/1.jpg" alt=""> </a>
         </div>
         <div class="banner-item">
             <a href="#"> <img src="<?php bloginfo('template_url'); ?>/assets/img/2.jpg" alt=""> </a>
         </div>
         <div class="banner-item">
             <a href="#"> <img src="<?php bloginfo('template_url'); ?>/assets/img/3.jpg" alt=""> </a>
         </div>
     </div>
     <div class="suggest-product">
         <h2 class="kitkala-suggest-title">پیشنهاد کیت کالا</h2>
         <a href="#"> <img class="suggest-product-image" src="<?php bloginfo('template_url'); ?>/assets/img/suggest.png"
                 alt=""> </a>
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
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/lab.jpg" alt="">
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
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/lab.jpg" alt="">
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
                     <img src="<?php bloginfo('template_url'); ?>/assets/img/lab.jpg" alt="">
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
             <span class="feature"> <img src="<?php bloginfo('template_url'); ?>/assets/img/org.png" alt="">ضمانت اصل
                 بودن کالا</span>
             <span class="feature"> <img src="<?php bloginfo('template_url'); ?>/assets/img/price.png" alt="">تخفیف های
                 همیشگی</span>
             <span class="feature"> <img src="<?php bloginfo('template_url'); ?>/assets/img/pay.png" alt="">پرداخت در
                 محل</span>
             <span class="feature"> <img src="<?php bloginfo('template_url'); ?>/assets/img/doll.png" alt="">بهترین قیمت
                 روز</span>
             <span class="feature"> <img src="<?php bloginfo('template_url'); ?>/assets/img/gur.png" alt="">گارانتی
                 بازگشت وجه</span>
             <span class="feature"> <img src="<?php bloginfo('template_url'); ?>/assets/img/loc.png" alt="">ارسال به
                 تمام نقاط کشور</span>
         </div>
     </div>
     <div class="most-sells-product">
         <h4 class="most-sell-title">پرفروش ترین لب تاپ ها</h4>
         <div class="inner-item-product">
             <div class="item-product">
                 <a href="#"> <img src="<?php bloginfo('template_url'); ?>/assets/img/lab.jpg" alt=""> </a>
                 <a href="#">
                     <h3>لب تاپ ایسوس مدل2022 رم 4 گیگ 1 ترابایت</h3>
                 </a>
                 <span>23,392,000 تومان</span>
             </div>
             <div class="item-product">
                 <a href="#"> <img src="<?php bloginfo('template_url'); ?>/assets/img/lab.jpg" alt=""> </a>
                 <a href="#">
                     <h3>لب تاپ ایسوس مدل2022 رم 4 گیگ 1 ترابایت</h3>
                 </a>
                 <span>23,392,000 تومان</span>
             </div>
             <div class="item-product">
                 <a href="#"> <img src="<?php bloginfo('template_url'); ?>/assets/img/lab.jpg" alt=""> </a>
                 <a href="#">
                     <h3>لب تاپ ایسوس مدل2022 رم 4 گیگ 1 ترابایت</h3>
                 </a>
                 <span>23,392,000 تومان</span>
             </div>
             <div class="item-product">
                 <a href="#"> <img src="<?php bloginfo('template_url'); ?>/assets/img/lab.jpg" alt=""> </a>
                 <a href="#">
                     <h3>لب تاپ ایسوس مدل2022 رم 4 گیگ 1 ترابایت</h3>
                 </a>
                 <span>23,392,000 تومان</span>
             </div>
             <div class="item-product">
                 <a href="#"> <img src="<?php bloginfo('template_url'); ?>/assets/img/lab.jpg" alt=""> </a>
                 <a href="#">
                     <h3>لب تاپ ایسوس مدل2022 رم 4 گیگ 1 ترابایت</h3>
                 </a>
                 <span>23,392,000 تومان</span>
             </div>
         </div>
     </div>
     <div class="home-middle-banner">
         <a class="adl-banner" href="#"> <img src="<?php bloginfo('template_url'); ?>/assets/img/adl.jpg" alt=""> </a>
         <a class="adr-banner" href="#"> <img src="<?php bloginfo('template_url'); ?>/assets/img/adr.jpg" alt=""> </a>
     </div>
     <div class="home-article">
         <h4 class="home-art-title">آخرین مقالات سایت</h4>
         <div class="home-box-article">

             <?php
        $array_post = array('post_type' => 'post', 'posts_per_page' => 5);
        $query = new WP_Query($array_post);

        if ($query->have_posts()) {
          while ($query->have_posts()) {
            $query->the_post(); ?>

             <div class="article-item">
                 <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail() ?></a>
                 <a href="<?php the_permalink(); ?>">
                     <h3><?php the_title(); ?></h3>
                 </a>
                 <span class="author"><?php echo get_the_author_posts_link()  ?></span>

                 <span class="publish-date"><?php echo get_the_date('j F , Y')  ?></span>
             </div>



             <?php
          }
        } else {
          echo '<div class="swiper-slide">پستی برای نمایش وجود ندارد</div>';
        }
        //restore orginal post data
        wp_reset_postdata();
        ?>

         </div>
         <h4 class="home-brand-title">برندهای ویژه</h4>
         <div class="home-brands swiper brand-slider">
             <div class="swiper-wrapper">
                 <div class="swiper-slide">
                     <div class="center-item">


                         <?php
              $array_brands = array('post_type' => 'brands', 'posts_per_page' => 8);
              $brands = new WP_Query($array_brands);

              if ($brands->have_posts()) {
                while ($brands->have_posts()) {
                  $brands->the_post(); ?>

                         <div class="brand-item"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                         </div>

                         <?php
                }
              } else {
                echo '<div class="swiper-slide">پستی برای نمایش وجود ندارد</div>';
              }
              //restore orginal post data
              wp_reset_postdata();
              ?>




                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="clear"></div>
 </div>
 <?php get_footer(); ?>