<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/assets/css/swiper-bundle.min.css">
    <script src="<?php bloginfo( 'template_url' ); ?>/assets/js/swiper-bundle.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/assets/js/swiper-bundle.min.js" type="text/javascript"></script>
    <?php wp_head() ?>
  </head>
  <body>
    <header>
      <a class="btnsearch" href="#"></a>
      <a class="kitkala-basket" href="#"></a>
      <a class="registerbtn" href="#">ورود/ ثبت نام</a>
      <a class="logo" href="#"><img src="assets/img/logo.png" alt=""></a>
      <nav class="main-menu">
      <?php wp_nav_menu(array(
        'theme_location'=>'header-menu',
        'container'=>''
      
      ) ) ?>
      
      </nav>
    </header>