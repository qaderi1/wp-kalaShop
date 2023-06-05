<?php
//تعریف تابع برای منو 
function kitkala_header_menu()
{
    //heaedr-menu => مکان قرار گیری (اسم منو )
    //description => اسم منو
    register_nav_menu('header-menu', __('هدر بالایی'));
}

//add_action =>قلاب کردن تابع
//اضافه کردن تابع تعریف شده به ورد پرس
//init زمان وارد شدن به مدیرت سایت 
//after_setup_theme زمان نصب قالب
add_action('init', 'kitkala_header_menu');


add_theme_support('post-thumbnails');

//add sliders post type

function kitkala_slider_post_type()
{
    register_post_type('slider', [
        'labels' => [
            'name' => __('اسلایدر ها'),
            'singular_name' => __('اسلایدر'),
            'add_new' => __('افزودن اسلایدر'),
            'add_new_item' => __('افزودن اسلایدر'),
            // 'description' => __('ایلادر بالای صفحه'),
        ],
        'public' => true,
        'has_archive' => false,
        'supports' => ['title', 'editor', 'thumbnail', 'link'],
    ]);
}

add_action('init', 'kitkala_slider_post_type');

//add brands post type

function kitkala_brands_post_type()
{
    register_post_type('brands', [
        'labels' => [
            'name' => __('برند ها'),
            'singular_name' => __('برند'),
            'add_new' => __('افزودن برند'),
            'add_new_item' => __('افزودن برند'),
            // 'description' => __('ایلادر بالای صفحه'),
        ],
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-tickets',
        'supports' => ['title', 'editor', 'thumbnail', 'link'],
    ]);
}

add_action('init', 'kitkala_brands_post_type');
