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
    wp_enqueue_style( 'hvedu-stats', get_template_directory_uri() . '/styles/stats.css', array(), null );
    wp_enqueue_style( 'hvedu-services', get_template_directory_uri() . '/styles/services.css', array(), null );
    wp_enqueue_style( 'hvedu-course', get_template_directory_uri() . '/styles/course.css', array(), null );
    wp_enqueue_style( 'hvedu-documents', get_template_directory_uri() . '/styles/documents.css', array(), null );
    wp_enqueue_style( 'hvedu-expert', get_template_directory_uri() . '/styles/expert.css', array(), null );
    wp_enqueue_style( 'hvedu-testimonials', get_template_directory_uri() . '/styles/testimonials.css', array(), null );
    wp_enqueue_style( 'hvedu-footer', get_template_directory_uri() . '/styles/footer.css', array(), null );
    wp_enqueue_style( 'hvedu-contact', get_template_directory_uri() . '/styles/contact.css', array(), null );
    wp_enqueue_style( 'hvedu-information', get_template_directory_uri() . '/styles/information.css', array(), null );
    wp_enqueue_style( 'hvedu-introduce', get_template_directory_uri() . '/styles/introduce.css', array(), null );
    wp_enqueue_style( 'hvedu-about-hero', get_template_directory_uri() . '/styles/about-hero.css', array(), null );
    wp_enqueue_style( 'hvedu-style', get_stylesheet_uri(), array(), null ); // Load style.css của theme

    // jQuery
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), '3.7.1', true);

    // Bootstrap JS
    wp_enqueue_script( 'bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.3', true );

    // Custom JS
    $theme_version = time(); // Dùng time() để bypass cache trong quá trình dev
    wp_enqueue_script( 'hvedu-navbar-js', get_template_directory_uri() . '/scripts/navbar.js', array('jquery'), $theme_version, true );
    wp_enqueue_script( 'hvedu-course-slider', get_template_directory_uri() . '/scripts/course-slider.js', array('jquery'), $theme_version, true );
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

    // 2. Tự động tạo trang "Giới thiệu" nếu chưa tồn tại
    if ( ! get_option('hvedu_pages_created') ) {
        $page_slug = 'introduce';
        $page_check = get_page_by_path( $page_slug );
        
        if ( ! $page_check ) {
            wp_insert_post( array(
                'post_type'    => 'page',
                'post_title'   => 'Giới thiệu',
                'post_name'    => $page_slug,
                'post_status'  => 'publish',
                'post_author'  => 1,
            ) );
        }
        
        // Đánh dấu đã tạo để không chạy lại lệnh này nữa
        update_option('hvedu_pages_created', true);
    }
}
add_action('init', 'hvedu_auto_setup_pages');

// Thêm class 'nav-item' cho thẻ <li> của menu
function hvedu_add_menu_li_class($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'hvedu_add_menu_li_class', 1, 3);

// Thêm class 'nav-link' cho thẻ <a> của menu
function hvedu_add_menu_a_class($attrs, $item, $args) {
    if(isset($args->add_a_class)) {
        $classes = array($args->add_a_class);
        
        // Nếu mục này là trang hiện tại, thêm class 'active' để hiện indicator
        if (in_array('current-menu-item', $item->classes) || 
            in_array('current_page_item', $item->classes) ||
            in_array('current-menu-ancestor', $item->classes)) {
            $classes[] = 'active';
        }
        
        $attrs['class'] = implode(' ', $classes);
    }
    return $attrs;
}
add_filter('nav_menu_link_attributes', 'hvedu_add_menu_a_class', 1, 3);
