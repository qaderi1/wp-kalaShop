<?php

function kitkala_header_menu(){
    register_nav_menu('header-menu', __('هدر بالایی'));
}
add_action('init', 'kitkala_header_menu');

add_theme_support('post-thumbnails');

function kitkalaSliderPosttype(){

    register_post_type('slider',[
        'labels'  => [
            'name' => __('اسلایدرها'),
            'singular_name' => __('اسلایدر'),
            'add_new'               => __('افزودن اسلایدر'),
            'add_new_item'          => __('افزودن اسلایدر'),
        ],
        'public'=>true,
        'has_archive'=>false,
        'supports'  => ['title', 'editor', 'thumbnail', 'link'],

    ]);
}

add_filter( 'init','kitkalaSliderPosttype');

// brands

function kitkalaBrandsPosttype(){
    register_post_type('brands',[
        'labels'  => [
            'name' => __('برندها'),
            'singular_name' => __('برند'),
            'add_new'               => __('افزودن برند'),
            'add_new_item'          => __('افزودن برند'),
        ],
        'public'=>true,
        'menu-icon'=>'dashicons-tickets',
        'has_archive'=>false,
        'supports'  => ['title', 'editor', 'thumbnail', 'link'],
    ]);
}

add_action('init', 'kitkalaBrandsPosttype');