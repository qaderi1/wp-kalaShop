<?php

//عریف سایز عکس مناسب
add_image_size('recent-posts', 60, 60, true);

add_image_size('archive', 190, 200, true);



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


//add widget for footer
function kitkala_register_widgets_init()
{
    register_sidebar(array(
        'name' => __('فوتر کیت کالا', 'kitkala'),
        'id' => 'footer-1',
        'description' => __('در این بخش ابزارک های فوتر سایت قرار میگیرد', 'kitkala'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        // 'before_title'  => '<h3 class="widget-title">',
        // 'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name' => __('فوتر کیت کالا2', 'kitkala'),
        'id' => 'footer-2',
        'description' => __('در این بخش ابزارک های فوتر سایت قرار میگیرد', 'kitkala'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        // 'before_title'  => '<h3 class="widget-title">',
        // 'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name' => __('فوتر کیت کالا3', 'kitkala'),
        'id' => 'footer-3',
        'description' => __('در این بخش ابزارک های فوتر سایت قرار میگیرد', 'kitkala'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        // 'before_title'  => '<h3 class="widget-title">',
        // 'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name' => __('سایدبار کیت کالا', 'kitkala'),
        'id' => 'sidebar_widget',
        'description' => __('در این بخش ابزارک های سایدبار قرار میگیرد', 'kitkala'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        // 'before_title'  => '<h3 class="widget-title">',
        // 'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'kitkala_register_widgets_init');

class kitkalaRecentPostRegisterWidget extends WP_Widget
{
    function __construct()
    {
        parent::__construct(false, __('نمایش آخرین پست های کیت کالا', 'kitkala'));
    }

    function widget($arg, $instance)
    { ?>

<div class="sidebar-related-post">
    <span class="last-post-title"><?php echo $instance['recenttitle'] ?></span>
    <?php
            $arg = ['post_type' => 'post', 'posts_per_page' => $instance['recentnumber']];
            //query
            $the_query = new WP_Query($arg);
            //theloop
            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post(); ?>
    <div class="item-post">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('recent-post'); ?></a>
        <a href="<?php the_permalink(); ?>">
            <h3 class="title-post"><?php the_title(); ?></h3>
        </a>
    </div>

    <?php

                }
            } else {
                echo '<div class="item-post">';
            }
            wp_reset_postdata();
            ?>

</div>

<?php

    }

    function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['recenttitle'] = $new_instance['recenttitle'];
        $instance['recentnumber'] = $new_instance['recentnumber'];
        return $instance;
    }

    public function form($instance)
    {
        $title = $instance['recenttitle'];
        $number = $instance['recentnumber'];
        $fileTitleld = $this->get_field_id('recenttitle');
        $fileTitleName = $this->get_field_name('recenttitle');
        $fileNumberld = $this->get_field_id('recentnumber');
        $fileNumberName = $this->get_field_name('recentnumber');
    ?>
<labla for=''>عنوان پست</labla>
<input type="text" id="<?php echo $fileTitleld; ?>" name="<?php echo $fileTitleName; ?>" value="<?php echo $title; ?>">
<input type="number" id="<?php echo $fileNumberld; ?>" name="<?php echo $fileNumberName; ?>"
    value="<?php echo $number; ?>">

<?php

    }
}


add_action('widgets_init', 'kitkalaregisterfunc');

function kitkalaregisterfunc()
{
    register_widget('kitkalaRecentPostRegisterWidget');
}

//dynamic title
function dynamic_title()
{
    add_theme_support('title-tag');
}
add_action('init', 'dynamic_title');


//paginate archives
function wpbeginner_numeric_posts_nav()
{

    if (is_singular())
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if ($wp_query->max_num_pages <= 1)
        return;

    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max   = intval($wp_query->max_num_pages);

    /** Add current page to the array */
    if ($paged >= 1)
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if (($paged + 2) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="navigation"><ul>' . "\n";



    /** Link to first page, plus ellipses if necessary */
    if (!in_array(1, $links)) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');

        if (!in_array(2, $links))
            echo '<li>…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort($links);
    foreach ((array) $links as $link) {
        $class = $paged == $link ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
    }

    /** Link to last page, plus ellipses if necessary */
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links))
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
    }


    echo '</ul></div>' . "\n";
}


//support for wooCemmerce
function kitKalaWooCommerceSupport()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'kitKalaWooCommerceSupport');

//Change price location in Woocommerce Single Product Layout
function channgePriceLocation()
{
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
    add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 25);
}
add_action('after_setup_theme', 'channgePriceLocation');