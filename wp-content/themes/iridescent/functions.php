<?php

function theme_styles() {

    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . 'assets/css/bootstrap.min.css');
    wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'theme_styles');

function theme_js() {

    global $wp_scripts;

    wp_register_script('html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false);
    wp_register_script('respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false);

    $wp_scripts->add_data('html5_shiv', 'conditional', 'lt IE 9');
    $wp_scripts->add_data('respond_js', 'conditional', 'lt IE 9');

    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . 'assets/js/bootstrap.min.js', array('jQuery'), '', true); // false equals if its going to display in the footer or in the header. this case header
    wp_enqueue_script('theme_js', get_template_directory_uri() . 'assets/js/theme.min.js', array('jquery', 'bootstrap_js'), '', true); // in array - what that js file is depended on
}

add_action('wp_enqueue_scripts', 'theme_js');

add_filter('show_admin_bar','__return_false' );

add_theme_support('menus');
add_theme_support('post-thumbnails');

function register_theme_menus() {

    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'footer-menu' => __('Footer Menu')
        )
    );
}
add_action('init', 'register_theme_menus');

function create_widget($name, $id, $description) {

    register_sidebar(array(
        'name' => __($name),
        'id' => $id,
        'description' => __($description),
        'before_widget' => '<div class="widget text-right">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

create_widget('Front Page Center', 'front-center', 'Displays on the center side of the homepage');
create_widget('Front Page Left', 'front-left', 'Displays on the left side of the homepage');

create_widget('Page Sidebar', 'page-sidebar', 'Displays on the side of a page');
create_widget('Blog Sidebar', 'blog-sidebar', 'Displays on the side of a blog');

/* woocommerce
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
    echo '<section id="main">';
}

function my_theme_wrapper_end() {
    echo '</section>';
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
*/

// add tag support to pages
function tags_support_all() {
    register_taxonomy_for_object_type('post_tag', 'page');
}

// ensure all tags are included in queries
function tags_support_query($wp_query) {
    if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');
}

// tag hooks
add_action('init', 'tags_support_all');
add_action('pre_get_posts', 'tags_support_query');














