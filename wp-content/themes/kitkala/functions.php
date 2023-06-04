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
add_action('after_setup_theme', 'kitkala_header_menu');
