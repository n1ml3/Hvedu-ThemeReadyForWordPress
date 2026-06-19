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
    $theme_version = time(); // Dùng time() để bypass cache trong quá trình dev

    // Bootstrap CSS
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3' );

    // Custom CSS
    wp_enqueue_style( 'hvedu-global', get_template_directory_uri() . '/styles/global.css', array(), $theme_version );
    wp_enqueue_style( 'hvedu-navbar', get_template_directory_uri() . '/styles/navbar.css', array(), $theme_version );
    wp_enqueue_style( 'hvedu-hero', get_template_directory_uri() . '/styles/hero.css', array(), $theme_version );
    wp_enqueue_style( 'hvedu-stats', get_template_directory_uri() . '/styles/stats.css', array(), $theme_version );
    wp_enqueue_style( 'hvedu-services', get_template_directory_uri() . '/styles/services.css', array(), $theme_version );
    wp_enqueue_style( 'hvedu-course', get_template_directory_uri() . '/styles/course.css', array(), $theme_version );
    wp_enqueue_style( 'hvedu-documents', get_template_directory_uri() . '/styles/documents.css', array(), $theme_version );
    wp_enqueue_style( 'hvedu-expert', get_template_directory_uri() . '/styles/expert.css', array(), $theme_version );
    wp_enqueue_style( 'hvedu-testimonials', get_template_directory_uri() . '/styles/testimonials.css', array(), $theme_version );
    wp_enqueue_style( 'hvedu-footer', get_template_directory_uri() . '/styles/footer.css', array(), $theme_version );
    wp_enqueue_style( 'hvedu-contact', get_template_directory_uri() . '/styles/contact.css', array(), $theme_version );
    wp_enqueue_style( 'hvedu-information', get_template_directory_uri() . '/styles/information.css', array(), $theme_version );
    wp_enqueue_style( 'hvedu-introduce', get_template_directory_uri() . '/styles/introduce.css', array(), $theme_version );
    wp_enqueue_style( 'hvedu-about-hero', get_template_directory_uri() . '/styles/about-hero.css', array(), $theme_version );
    wp_enqueue_style( 'hvedu-style', get_stylesheet_uri(), array(), $theme_version ); // Load style.css của theme

    // jQuery
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), '3.7.1', true);

    // Bootstrap JS
    wp_enqueue_script( 'bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.3', true );

    // Custom JS
    wp_enqueue_script( 'hvedu-navbar-js', get_template_directory_uri() . '/scripts/navbar.js', array('jquery'), $theme_version, true );
    wp_enqueue_script( 'hvedu-course-slider', get_template_directory_uri() . '/scripts/course-slider.js', array('jquery'), $theme_version, true );
}
add_action( 'wp_enqueue_scripts', 'hvedu_theme_scripts' );

// Tự động cấu hình permalink để tránh lỗi 404
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

// Include Hvedu Theme Helpers - Disabled for static theme
// require get_template_directory() . '/inc/post-types.php';
// require get_template_directory() . '/inc/customizer.php';
// require get_template_directory() . '/inc/contact-handler.php';

/**
 * Automatically populate dummy data for CPTs if they are empty, ensuring the theme displays nicely out of the box.
 * Disabled for static theme.
 */
/*
function hvedu_populate_dummy_data() {
    if ( get_option( 'hvedu_dummy_data_populated' ) ) {
        return;
    }

    // 1. Services Dummy Data
    $services_exist = get_posts( array( 'post_type' => 'hvedu_service', 'posts_per_page' => 1 ) );
    if ( empty( $services_exist ) ) {
        $services = array(
            array( 'title' => 'Chiến lược kinh doanh', 'desc' => 'Lorem ipsum dolor amet ex consectetur adipiscing elit sed eiusmod' ),
            array( 'title' => 'Quản lý dự án', 'desc' => 'Lorem ipsum dolor amet ex consectetur adipiscing elit sed eiusmod' ),
            array( 'title' => 'Quản trị nhân lực', 'desc' => 'Lorem ipsum dolor amet ex consectetur adipiscing elit sed eiusmod' ),
            array( 'title' => 'Tư vấn Chuyển đổi số', 'desc' => 'Lorem ipsum dolor amet ex consectetur adipiscing elit sed eiusmod' ),
            array( 'title' => 'Huấn luyện Lãnh đạo', 'desc' => 'Lorem ipsum dolor amet ex consectetur adipiscing elit sed eiusmod' ),
            array( 'title' => 'Quản trị Tài chính', 'desc' => 'Lorem ipsum dolor amet ex consectetur adipiscing elit sed eiusmod' ),
        );

        foreach ( $services as $service ) {
            wp_insert_post( array(
                'post_type'    => 'hvedu_service',
                'post_title'   => $service['title'],
                'post_content' => $service['desc'],
                'post_status'  => 'publish',
            ) );
        }
    }

    // 2. Courses Dummy Data
    $courses_exist = get_posts( array( 'post_type' => 'hvedu_course', 'posts_per_page' => 1 ) );
    if ( empty( $courses_exist ) ) {
        for ( $i = 1; $i <= 6; $i++ ) {
            $titles = array(
                1 => 'Khóa huấn luyện "Lập Kế hoạch Kinh doanh Thực chiến hàng năm"',
                2 => 'Khóa học "Xây dựng Hệ thống Vận hành Doanh nghiệp Tự động"',
                3 => 'Chương trình "Coaching Tăng trưởng Doanh thu Đột phá 10x"',
                4 => 'Khóa đào tạo "Quản trị Nhân sự dành cho Quản lý Cấp trung"',
                5 => 'Khóa học "Chiến lược Marketing Thực chiến Kỷ nguyên Số"',
                6 => 'Khóa huấn luyện "Tối ưu hóa Chi phí và Quản trị Tài chính"'
            );
            $title = $titles[$i];
            
            $post_id = wp_insert_post( array(
                'post_type'    => 'hvedu_course',
                'post_title'   => $title,
                'post_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.',
                'post_status'  => 'publish',
            ) );

            if ( $post_id ) {
                update_post_meta( $post_id, '_course_old_price', '3.390.000 đ' );
                update_post_meta( $post_id, '_course_price', '2.000.000đ' );
                update_post_meta( $post_id, '_course_lessons', '12' );
                update_post_meta( $post_id, '_course_method', 'Học qua zoom' );
            }
        }
    }

    // 3. Documents Dummy Data
    $docs_exist = get_posts( array( 'post_type' => 'hvedu_document', 'posts_per_page' => 1 ) );
    if ( empty( $docs_exist ) ) {
        $docs = array(
            'Tài liệu hệ thống BSC',
            'Cẩm nang Vận hành Doanh nghiệp',
            'Bộ biểu mẫu Quản trị Nhân sự'
        );

        foreach ( $docs as $doc ) {
            $post_id = wp_insert_post( array(
                'post_type'    => 'hvedu_document',
                'post_title'   => $doc,
                'post_content' => 'Lorem ipsum dolor amet ex consecturs adipiscing elit sed eiusmod',
                'post_status'  => 'publish',
            ) );

            if ( $post_id ) {
                update_post_meta( $post_id, '_document_price', 'Giá: 200.000đ' );
            }
        }
    }

    // 4. Testimonials Dummy Data
    $testimonials_exist = get_posts( array( 'post_type' => 'hvedu_testimonial', 'posts_per_page' => 1 ) );
    if ( empty( $testimonials_exist ) ) {
        $testimonials = array(
            array(
                'name'    => 'Trần Minh Hiếu',
                'content' => 'Chương trình Huấn luyện chuyên sâu và đồng hành do HVG tổ chức cho công ty chúng tôi vô cùng sát thực và hữu ích. Các Giám Đốc, quản lý và bản thân tôi đã nhận được rất nhiều kiến thức, giá trị thực tiễn và phân tích chuyên sâu.',
                'role'    => 'Giám đốc công ty FPA',
                'rating'  => 5,
                'logo'    => 'logo-02 1.svg',
            ),
            array(
                'name'    => 'Nguyễn Minh Chíe',
                'content' => 'Chương trình Huấn luyện chuyên sâu và đồng hành do HVG tổ chức cho công ty chúng tôi vô cùng sát thực và hữu ích. Các Giám Đốc, quản lý và bản thân tôi đã nhận được rất nhiều kiến thức, giá trị thực tiễn và phân tích chuyên sâu.',
                'role'    => 'Giám đốc công ty E-learning',
                'rating'  => 5,
                'logo'    => 'logo-01 1.svg',
            )
        );

        foreach ( $testimonials as $item ) {
            $post_id = wp_insert_post( array(
                'post_type'    => 'hvedu_testimonial',
                'post_title'   => $item['name'],
                'post_content' => $item['content'],
                'post_status'  => 'publish',
            ) );

            if ( $post_id ) {
                update_post_meta( $post_id, '_testimonial_role', $item['role'] );
                update_post_meta( $post_id, '_testimonial_rating', $item['rating'] );
                update_post_meta( $post_id, '_testimonial_logo', $item['logo'] );
            }
        }
    }

    update_option( 'hvedu_dummy_data_populated', 1 );
}
add_action( 'init', 'hvedu_populate_dummy_data', 99 );
*/

