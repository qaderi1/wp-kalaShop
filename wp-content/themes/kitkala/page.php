<?php get_header(); ?>
<div class="kitkala-center">
    <div class="breadcrumb"><?php
                          if (function_exists('yoast_breadcrumb')) {
                            yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                          }
                          ?>
    </div>
    <section class="pages-content">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <p class="content-pa">
            <?php the_content(); ?>
        </p>
    </section>
    <?php get_sidebar(); ?>
</div>
<div class="clear"></div>
<?php get_footer(); ?>