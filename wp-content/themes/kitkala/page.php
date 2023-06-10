<?php get_header(); ?>

<!-- صفحه برگه ها -->

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