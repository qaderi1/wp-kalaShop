<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset=" <?php bloginfo('charset'); ?>">

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
        <a class="logo" href="<?php bloginfo('url'); ?>"><img
                src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt=""></a>
        <nav class="main-menu">
            <?php

            wp_nav_menu([
                'theme_location' => 'header-menu',
                'menu_class' => 'nav-item',
                'menu_id' => '',
                'container' => "",
            ]);

            ?>
        </nav>
    </header>

    <?php if(!is_home()){ ?>
    <div class="kitkala-center">
        <div class="breadcrumb"><?php
                          if (function_exists('yoast_breadcrumb')) {
                            yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                          }
                          ?>
        </div>
        <?php } ?>