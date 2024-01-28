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

/**
 * add widget fo footer 
 */

function kitkalaRegisterWidget(){
    register_sidebar([
        'name'          => __( 'قوتر کیت کالا یک', 'kitkala' ),
        'id'            => 'footer-1',
		'description'   => __( 'در این بحش قسمت فوتر اول هست.', 'kitkala' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
    ]);
    register_sidebar([
        'name'          => __( 'قوتر کیت کالا 2', 'kitkala' ),
        'id'            => 'footer-2',
		'description'   => __( 'در این بحش قسمت فوتر 2 هست.', 'kitkala' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
    ]);
    register_sidebar([
        'name'          => __( 'قوتر کیت کالا 3', 'kitkala' ),
        'id'            => 'footer-3',
		'description'   => __( 'در این بحش قسمت فوتر 3 هست.', 'kitkala' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
    ]);
    register_sidebar([
        'name'          => __( 'سابدبار میت کالا', 'sidebar_widget' ),
        'id'            => 'sidebar_widget',
        'description'   => __( 'در این بحش قسمت سایدراب مقالات هست', 'kitkala' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
    ]);
}
add_action( 'widgets_init', 'kitkalaRegisterWidget' );


function wpdocs_theme_slug_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'textdomain' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
}

// add register side bar to site

class kitKalaRecentPostRegister extends WP_Widget{

    public function __construct(){
        parent::__construct('kitkala_recent_posts', __('نمایش آخرین مقالات', 'kitkala'));
    }

    public function widget($args, $instance){
        ?>
              <div class="sidebar-related-post">
<span class="last-post-title"><?php echo $instance['recentTitle'] ?></span>

        <?php
        $args=[
            'post_type'=>'post',
            'post_per_page'=>$instance['recentNumber']
        ];

        $the_query=new WP_Query($args);

        if($the_query->have_posts()){
            while($the_query->have_posts()){
                $the_query->the_post();

                ?>
                <div class="item-post">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail_short_image'); ?></a>
                    <a href="<?php the_permalink(); ?>"><h3 class="title-post"><?php the_title() ?></h3></a>
                </div>

                <?php
            }
        }else {
            echo 'اسلایدری یافت نشد';
        }
        wp_reset_postdata();
        ?>
              </div>
 <?php

    }

    public function update($new_instance, $old_instance){
        $instance=$old_instance;
        $instance['recentTitle']=$new_instance['recentTitle'];
        $instance['recentNumber']=$new_instance['recentNumber'];
        return $instance;
    }

    public function form($instance){
        $title=$instance['recentTitle'];
        $number=$instance['recentNumber'];
        ?>
        <lable for="<?php echo $this->get_field_id('recentTitle') ?>" >عنوان</lable>
        <input id="<?php echo $this->get_field_id('recentTitle') ?>" name="<?php echo $this->get_field_name('recentTitle') ?>" type="text" value="<?php echo $title ?>">
        <lable for="<?php echo $this->get_field_id('recentNumber') ?>">تعداد</lable>
        <input id="<?php echo $this->get_field_id('recentNumber') ?>"   name="<?php echo $this->get_field_name('recentNumber') ?>"  type="number" value="<?php echo $number ?>">
<?php
        return '';
    }
}

add_action('widgets_init', 'kitkalaRegisterFunc');

function kitkalaRegisterFunc(){
    register_widget('kitKalaRecentPostRegister');
}

//image resize
    add_image_size('thumbnail_short_image',60,60,true);
add_image_size('thumbnail_image',440,280,true);
add_image_size('archive_thumbnail',190,200,true);

function dynamicTitle(){
    add_theme_support('title-tag');
}

add_action('after_setup_theme','dynamicTitle');


//pagination archive
function numeric_posts_nav() {

    if( is_singular() )
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );

    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="navigation"><ul>' . "\n";

    /** Previous Post Link */
    if ( get_previous_posts_link() )
     //   printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }

    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }

    /** Next Post Link */
    if ( get_next_posts_link() )
       // printf( '<li>%s</li>' . "\n", get_next_posts_link() );

    echo '</ul></div>' . "\n"; }