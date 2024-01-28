<?php get_header() ?>
      <div class="archive-content">
        <h1 class="archive-main-title"><?php echo single_cat_title() ?></h1>
        <div class="clear"></div>

          <?php
//          $args=[
//              'post_type'=>'slider',
//              'post_per_page'=>3
//          ];

       if(have_posts()): while (have_posts()) :the_post(); ?>
                  <div class="item">
                      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('archive_thumbnail'); ?></a>
                      <a href="<?php the_permalink(); ?>"><h3 class="archive-title"><?php the_title() ?></h3></a>
                      <a class="readmore" href="<?php the_permalink(); ?>">ادامه مطلب</a>
                  </div>

                  <?php
           endwhile;
           ?>
           <div class="clear"></div>

           <?php
           numeric_posts_nav();
       endif;
          wp_reset_postdata();
          ?>



      </div>

     <?php get_sidebar() ?>
    </div>
    <div class="clear"></div>
<?php get_footer() ?>