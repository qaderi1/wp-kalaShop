<?php

/*
Template Name:تمام عرض
*/

get_header();
?>

<!-- صفحه برگه ها -->
<!-- تمئلت تمام صفحه  -->


<section class="pages-content w-full">
    <h1 class="page-title"><?php the_title(); ?></h1>
    <p class="content-pa">
        <?php the_content(); ?>
    </p>
</section>

</div>
<div class="clear"></div>
<?php get_footer(); ?>