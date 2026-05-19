<?php
function hvedu_theme_setup() {
    // Thêm hỗ trợ RSS feed
    add_theme_support( 'automatic-feed-links' );

    // WordPress tự động quản lý thẻ title
    add_theme_support( 'title-tag' );

    // Hỗ trợ ảnh đại diện cho bài viết
    add_theme_support( 'post-thumbnails' );

    // Đăng ký Menu
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'hvedu' ),
    ) );
}
add_action( 'after_setup_theme', 'hvedu_theme_setup' );

function hvedu_theme_scripts() {

    // Bootstrap CSS
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3' );

    // Custom CSS
    wp_enqueue_style( 'hvedu-global', get_template_directory_uri() . '/styles/global.css', array(), null );
    wp_enqueue_style( 'hvedu-navbar', get_template_directory_uri() . '/styles/navbar.css', array(), null );
    wp_enqueue_style( 'hvedu-hero', get_template_directory_uri() . '/styles/hero.css', array(), null );
    wp_enqueue_style( 'hvedu-course', get_template_directory_uri() . '/styles/courses.css', array(), null );
    wp_enqueue_style( 'hvedu-testimonials', get_template_directory_uri() . '/styles/testimonials.css', array(), null );
    wp_enqueue_style( 'hvedu-footer', get_template_directory_uri() . '/styles/footer.css', array(), null );
    wp_enqueue_style( 'hvedu-categories', get_template_directory_uri() . '/styles/categories.css', array(), null );
    wp_enqueue_style( 'hvedu-cta', get_template_directory_uri() . '/styles/cta.css', array(), null );
    wp_enqueue_style( 'hvedu-blog', get_template_directory_uri() . '/styles/blog.css', array(), null );
    wp_enqueue_style( 'hvedu-questions', get_template_directory_uri() . '/styles/questions.css', array(), null );
    wp_enqueue_style( 'hvedu-style', get_stylesheet_uri(), array(), null ); // Load style.css của theme

    // jQuery
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), '3.7.1', true);

    // Bootstrap JS
    wp_enqueue_script( 'bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.3', true );

    // Custom JS
    $theme_version = time(); // Dùng time() để bypass cache trong quá trình dev
    wp_enqueue_script( 'hvedu-navbar-js', get_template_directory_uri() . '/scripts/navbar.js', array('jquery'), $theme_version, true );
}
add_action( 'wp_enqueue_scripts', 'hvedu_theme_scripts' );

// Tự động tạo trang Giới thiệu và thiết lập permalink để tránh lỗi 404
function hvedu_auto_setup_pages() {
    // 1. Cấu hình Permalink về dạng Post name (nếu chưa được cấu hình)
    global $wp_rewrite;
    if ( ! get_option('permalink_structure') ) {
        $wp_rewrite->set_permalink_structure('/%postname%/');
        update_option('rewrite_rules', FALSE);
        $wp_rewrite->flush_rules(true);
    }

}
add_action('init', 'hvedu_auto_setup_pages');

// Thêm class cho thẻ <li> của menu
function hvedu_add_menu_li_class($classes, $item, $args, $depth = 0) {
    // Thêm class 'nav-item' cho các item ở cấp cao nhất
    if(isset($args->add_li_class) && $depth === 0) {
        $classes[] = $args->add_li_class;
    }

    // Nếu item này có menu con, thêm class 'dropdown' của Bootstrap
    if (in_array('menu-item-has-children', $classes)) {
        $classes[] = 'dropdown';
    }

    return $classes;
}
add_filter('nav_menu_css_class', 'hvedu_add_menu_li_class', 10, 4);

// Thêm class và thuộc tính cho thẻ <a> của menu
function hvedu_add_menu_a_class($attrs, $item, $args, $depth = 0) {
    $classes = array();

    // Thêm class tùy thuộc vào cấp độ menu
    if ($depth === 0) {
        $classes[] = isset($args->add_a_class) ? $args->add_a_class : 'nav-link';
    } else {
        $classes[] = 'dropdown-item';
    }
    
    // Nếu mục này là trang hiện tại, thêm class 'active'
    if (in_array('current-menu-item', $item->classes) || 
        in_array('current_page_item', $item->classes) ||
        in_array('current-menu-ancestor', $item->classes)) {
        $classes[] = 'active';
    }

    // Nếu có menu con, thiết lập thuộc tính dropdown cho thẻ a
    if (in_array('menu-item-has-children', $item->classes)) {
        $classes[] = 'dropdown-toggle';
        $attrs['data-bs-toggle'] = 'dropdown';
        $attrs['aria-expanded'] = 'false';
        $attrs['role'] = 'button';
    }

    $attrs['class'] = implode(' ', $classes);
    return $attrs;
}
add_filter('nav_menu_link_attributes', 'hvedu_add_menu_a_class', 10, 4);

// Thêm class 'dropdown-menu' cho thẻ <ul> của submenu
function hvedu_add_submenu_class($classes, $args, $depth) {
    $classes[] = 'dropdown-menu';
    return $classes;
}
add_filter('nav_menu_submenu_css_class', 'hvedu_add_submenu_class', 10, 3);
