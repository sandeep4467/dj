<?php

/* Set Featured Image for pages */
add_theme_support('post-thumbnails', array('post', 'page'));

/* Featured Image URL */

function featured_img_url($mdw_featured_img_size, $id = null)
{
    if ($id != null) {
        $mdw_image_id = get_post_thumbnail_id($id);
    } else {
        $mdw_image_id = get_post_thumbnail_id();
    }
    $mdw_image_url = wp_get_attachment_image_src($mdw_image_id, $mdw_featured_img_size);
    $mdw_image_url = $mdw_image_url[0];
    return $mdw_image_url;
}

/* Custom Menus */
register_nav_menus(array(
    'primary' => __('Primary Navigation', 'header-nav'),
     'practice-areas' => __('Practice Areas', 'practice-areas'),
    'secondary' => __('Secodary Navigation', 'footer-nav'),
    'locations' => __('Locations', 'loc-nav'),
    'bottom-links' => __('Bottom Links', 'bottom-nav'),
));
/* Adding link-item for bootstrap4 menu */

function add_classes_on_li($classes)
{
    $classes[] = 'nav-item';
    return $classes;
}

add_filter('nav_menu_css_class', 'add_classes_on_li', 1, 3);

add_filter('nav_menu_link_attributes', function ($atts) {
    $atts['class'] = "nav-link";
    return $atts;
}, 100, 1);


/* Wrap Div on Post image in Editor */

add_filter('image_send_to_editor', 'wp_image_wrap_init', 10, 8);

function wp_image_wrap_init($html, $id, $caption, $title, $align, $url, $size, $alt)
{
    if ($align == none):
    return '<div id="wp-image-wrap-' . $id . '" class="wp-image-wrap overlay">' . $html . '</div>'; else:
    return $html;
    endif;
}

//* Enable shortcodes in text widgets
add_filter('widget_text', 'do_shortcode');



/* Upload Folder URL */

function upload_url($file)
{
    $url = bloginfo('url') . '/wp-content/uploads/' . $file;
    return $url;
}

//*Custome Thumbnail size*//

add_image_size('blogthumb_size', 760, 450, true);

/* Custom post type archieve */

function my_custom_post_type_archive_where($where, $args)
{
    $post_type = isset($args['post_type']) ? $args['post_type'] : 'post';
    $where = "WHERE post_type = '$post_type' AND post_status = 'publish'";
    return $where;
}

add_filter('getarchives_where', 'my_custom_post_type_archive_where', 10, 2);




/** use to add the logo through Customize option * */
define('theme_dir', get_template_directory_uri());

function theme_logo_customizer($wp_customize) {
    $wp_customize->add_section('theme_logo_section', array(
        'title' => __('Logo', 'theme'),
        'priority' => 30,
        'description' => 'Upload a logo to replace the default site name and description in the header',
    ));
    $wp_customize->add_setting('theme_logo');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'theme_logo', array(
        'label' => __('Logo', 'theme'),
        'section' => 'theme_logo_section',
        'settings' => 'theme_logo',
    )));
}

add_action('customize_register', 'theme_logo_customizer');

/**
 * Use to  show theme logo
 */
function theme_logo() {
    ?>
    <div class="logo">
        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" title="<?php bloginfo('name') ?>">
            <img class="img-responsive"  src="<?php echo esc_url(get_theme_mod('theme_logo')); ?>" alt="<?php bloginfo('name') ?>" /></a>

    </div>
    <?php
}



/* Widgets */
if (function_exists('register_sidebar')) {
    register_sidebar(array(
    'name' => __('Main Sidebar', 'textdomain'),
    'id' => 'sidebar-1',
    'description' => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
    'before_widget' => '<div id="%1$s" class="sidebar-widget fullwidth widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widgettitle">',
    'after_title' => '</h3>',
    ));
     register_sidebar(array(
    'name' => __('Header Contact', 'textdomain'),
    'id' => 'header-contact',
    'description' => __(''),
    'class' => '',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="consultation">',
    'after_title' => '</div>'
    ));
     register_sidebar(array(
        'name' => 'Footer Widget First',
        'id' => 'footer-widget-first',
        'description' => '',
        'class' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="h3">',
        'after_title' => '</div>'
    ));
    register_sidebar(array(
        'name' => 'Footer Widget Second',
        'id' => 'footer_widget_second',
        'description' => '',
        'class' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="h3">',
        'after_title' => '</div>'
    ));
    register_sidebar(array(
        'name' => 'Footer Widget Third',
        'id' => 'footer-widget-third',
        'description' => '',
        'class' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="h3">',
        'after_title' => '</div>'
    ));
    register_sidebar(array(
        'name' => 'footer copyright',
        'id' => 'footer_copyright',
        'description' => '',
        'class' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '',
        'after_title' => ''
    ));
     register_sidebar(array(
        'name' => 'Contact Form',
        'id' => 'contact-form',
        'description' => '',
        'class' => '',
        'before_widget' => '<div id="%1$s" class="widget side-contact %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="widget-title">',
        'after_title' => '</div>'
    ));
      register_sidebar(array(
        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'description' => '',
        'class' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="widget-title">',
        'after_title' => '</div>'
    ));
      register_sidebar(array(
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'description' => '',
        'class' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="widget-title">',
        'after_title' => '</div>'
    ));
}



//IF POST TYPE BLOG or POST

function is_blog() {
    return (is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type();
}




//REMOVING THE TEXT '[.....] FROM EXCERPT
function new_excerpt_more($more)
{
    return ' <a href="' . get_permalink() . '">Continue Reading..</a>';
}

add_filter('excerpt_more', 'new_excerpt_more');

function excerpt($limit)
{
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt) >= $limit) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt) . '...';
    } else {
        $excerpt = implode(" ", $excerpt);
    }
    $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);
    return $excerpt;
}

function content($limit)
{
    $content = explode(' ', get_the_content(), $limit);
    if (count($content) >= $limit) {
        array_pop($content);
        $content = implode(" ", $content) . '...';
    } else {
        $content = implode(" ", $content);
    }
    $content = preg_replace('/\[.+\]/', '', $content);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    return $content;
}

// Blog excerpt word limit
function custom_echo($x, $length)
{
    if (strlen($x) <= $length) {
        echo $x;
    } else {
        $y = substr($x, 0, $length) . '...';
        echo $y;
    }
}

//Get First Image
function catch_that_image()
{
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches[1][0];


    if (empty($first_img)) {
        $first_img = "";
    }
    return $first_img;
}

if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(290, 170);
}


// Option Page

if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

//  Custom Pagination

function custom_pagination($numpages = '', $pagerange = '', $paged = '')
{
    global $post;

    if (empty($pagerange)) {
        $pagerange = 2;
    }
    global $paged;
    if (empty($paged)) {
        $paged = 1;
    }
    if ($numpages == '') {
        global $wp_query;
        $numpages = $wp_query->max_num_pages;
        if (!$numpages) {
            $numpages = 1;
        }
    }
    $pagination_args = array(
    'base' => get_pagenum_link(1) . '%_%',
    'format' => 'page/%#%',
    'total' => $numpages,
    'current' => $paged,
    'show_all' => false,
    'end_size' => 1,
    'mid_size' => 1,
    'prev_next' => true,
    'prev_text' => __('&#x2039;'),
    'next_text' => __('&#x203A;'),
    'type' => 'plain',
    'add_args' => false,
    'add_fragment' => ''
    );

    $paginate_links = paginate_links($pagination_args);

    if ($paginate_links) {
        echo "<nav class='custom-pagination'>";
        //    echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
        echo $paginate_links;
        echo "</nav>";
    }
}


/**
 * Use to  Create A custom Post Type
 */
function create_posttype() {
    
    register_post_type('testimonial',
            // CPT Options
            array(
        'labels' => array(
            'name' => __('testimonial'),
            'singular_name' => __('testimonial')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'testimonial'),
        'supports' => array('title', 'editor', 'thumbnail'),
            )
    );
   
    
}

// Hooking up our function to theme setup
add_action('init', 'create_posttype');

//
// Load the theme stylesheets
function theme_styles()
{
    // Load all of the styles that need to appear on all pages
     wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:300,400,600,700|Prata|Roboto:300,400,700');
    wp_enqueue_style('main2', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css');
    wp_enqueue_style('main3', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('main4', get_template_directory_uri() . '/css/owl.carousel.min.css');
    wp_enqueue_style('OWL-THEME', get_template_directory_uri() . '/css/owl.carousel.min.css');
    wp_enqueue_style('fancybox', get_template_directory_uri() . '/css/owl.theme.default.css');
    wp_enqueue_style('main5', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('main6', get_template_directory_uri() . '/css/responsive.css');
}

add_action('wp_enqueue_scripts', 'theme_styles');

// Load the theme jQuery Scripts
function my_theme_scripts()
{
    wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery-3.2.1.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('my-script0', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('jq-js', get_template_directory_uri() . '/js/html5lightbox.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('fancy-js', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'my_theme_scripts');


//Badvalue error Handling
remove_action('wp_head', 'rest_output_link_wp_head');
//
;


add_filter('script_loader_tag', 'clean_script_tag');
function clean_script_tag($input)
{
    $input = str_replace("type='text/javascript' ", '', $input);
    return str_replace("'", '"', $input);
}


/*
 * Parent Child Functionality
 */

function wpb_list_child_pages() {
    global $post;
    $currentPage = get_the_id();
    $children = get_pages('child_of=' . $currentPage);
    if (count($children) != 0) {
        $customtitle = get_field('custom_widget_title', $page->ID);
        ?>
        <div class="child-parent widget widget_nav_menu">
            <div class="widget-title childpracticeicon"><?php
                if ($customtitle) {
                    echo $customtitle;
                } else {
                    echo get_the_title($currentPage);
                }
                ?></div>
            <div class="widget-content">
                <ul class="menu">
                    <?php
                    $pageArgs = array(
                        'sort_order' => 'asc',
                        'sort_column' => 'post_title',
                        'hierarchical' => 1,
                        'child_of' => 0,
                        'parent' => $currentPage,
                        'post_type' => 'page',
                        'post_status' => 'publish'
                    );
                    $pages = get_pages($pageArgs);
                    foreach ($pages as $page_list) {

                        $option = $page_list->post_title;
                        $title2 = get_field('menu_title', $page_list->ID);
                        if ($page_list->id == $currentPage) {
                            $activeClass = "current-menu-item";
                        } else {
                            $activeClass = null;
                        }
                        ?>
                        <li class="<?php echo $activeClass ?>">
                            <a href="<?php echo get_page_link($page_list->ID); ?>"><?php
                                if ($title2) {
                                    echo $title2;
                                } else {
                                    echo $option;
                                }
                                ?></a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <script>
            jQuery(document).ready(function ($) {
                $("#custom_html-6").hide();
                $("#nav_menu-4").hide();
            });
        </script>
        <?php
    } else {
        $parentId2 = wp_get_post_parent_id($currentPage);
        if ($parentId2 > 0) {
            $customtitlep = get_field('custom_widget_title', $parentId2);
            ?>

            <div class="child-parent widget widget_nav_menu">
                <div class="widget-title childpracticeicon"><?php
                    if ($customtitlep) {
                        echo $customtitlep;
                    } else {
                        echo get_the_title($parentId2);
                    }
                    ?></div>
                <div class="widget-content">
                    <ul class="menu">
                        <?php
                        $pageArgs = array(
                            'sort_order' => 'asc',
                            'sort_column' => 'post_title',
                            'hierarchical' => 1,
                            'child_of' => 0,
                            'parent' => $parentId2,
                            'offset' => 0,
                            'post_type' => 'page',
                            'post_status' => 'publish'
                        );
                        $pages = get_pages($pageArgs);
                        foreach ($pages as $page_list) {
                            if ($page_list->ID == $currentPage) {
                                $activeClass = "current-menu-item";
                            } else {
                                $activeClass = null;
                            }

                            $page_title = $page_list->post_title;
                            $menuTitle = get_field('menu_title', $page_list->ID);
                            ?>
                            <li class="<?php echo $activeClass; ?>">
                                <a href="<?php echo get_page_link($page_list->ID); ?>"><?php
                                    if ($menuTitle) {
                                        echo $menuTitle;
                                    } else {
                                        echo $page_title;
                                    }
                                    ?></a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <script>
                jQuery(document).ready(function ($) {
                    $("#custom_html-6").hide();
                    $("#nav_menu-4").hide();
                });
            </script>
        <?php }
        ?>

        <?php
    }
    ?>

    <?php
}

add_shortcode('wpb_childpages', 'wpb_list_child_pages');

//filter for print the shortcode
add_filter('widget_text', 'do_shortcode');
//add shortcode file