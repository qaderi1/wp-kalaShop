
<?php get_header( ) ?>
<?php get_sidebar( ) ?>
      <section class="pages-content">
        <div class="thumbnail-image"><?php the_post_thumbnail('thumbnail_image'); ?></div>
        <div class="specification-post">
          <span class="category-post" ><?php the_category(); ?></span>
          <h1 class="post-title"><?php the_title() ?></h1>
          <p class="short-decs"><?php echo  wp_trim_words(get_the_excerpt(),10,'...'); ?></p>
          <div class="meta-info">
            <span class="comment"><?php echo get_comments_number() ?></span>
            <span class="publish-date"><?php echo get_the_date() ?></span>
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><span class="author-name"><?php the_author() ?></span></a>
          </div>
        </div>
        <div class="clear"></div>
        <div class="inner-content">
 <?php the_content(); ?>
        </div>
          <div class="page-contents kitkala-comments">
              <?php comments_template(); ?>
          </div>
      </section>

    </div>
    <div class="clear"></div>
<?php get_footer( ) ?>