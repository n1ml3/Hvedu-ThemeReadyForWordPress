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
    wp_enqueue_style( 'hvedu-course', get_template_directory_uri() . '/styles/courses.css', array(), $theme_version );
    wp_enqueue_style( 'hvedu-testimonials', get_template_directory_uri() . '/styles/testimonials.css', array(), $theme_version );
    wp_enqueue_style( 'hvedu-footer', get_template_directory_uri() . '/styles/footer.css', array(), $theme_version );
    wp_enqueue_style( 'hvedu-categories', get_template_directory_uri() . '/styles/categories.css', array(), $theme_version );
    wp_enqueue_style( 'hvedu-cta', get_template_directory_uri() . '/styles/cta.css', array(), $theme_version );
    wp_enqueue_style( 'hvedu-blog', get_template_directory_uri() . '/styles/blog.css', array(), $theme_version );
    wp_enqueue_style( 'hvedu-questions', get_template_directory_uri() . '/styles/questions.css', array(), $theme_version );
    wp_enqueue_style( 'hvedu-style', get_stylesheet_uri(), array(), $theme_version ); // Load style.css của theme

    // jQuery
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), '3.7.1', true);

    // Bootstrap JS
    wp_enqueue_script( 'bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.3', true );

    // Custom JS
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

// Include Hvedu3 Theme Helpers - Disabled for static theme
// require get_template_directory() . '/inc/post-types.php';
// require get_template_directory() . '/inc/customizer.php';
// require get_template_directory() . '/inc/contact-handler.php';

/**
 * Automatically populate dummy data for CPTs if they are empty for Theme 3.
 * Disabled for static theme.
 */
/*
function hvedu3_populate_dummy_data() {
    if ( get_option( 'hvedu3_dummy_data_populated' ) ) {
        return;
    }

    // 1. Categories Dummy Data
    $cats_exist = get_posts( array( 'post_type' => 'hvedu3_category', 'posts_per_page' => 1 ) );
    if ( empty( $cats_exist ) ) {
        $categories = array(
            array( 'title' => 'UI/UX Design Service', 'icon' => 'about-feature-1 1.svg', 'link' => '#' ),
            array( 'title' => 'Digital Marketing', 'icon' => 'feature-3 1.svg', 'link' => '#' ),
            array( 'title' => 'Software Developer', 'icon' => 'feature-5 1.svg', 'link' => '#' ),
            array( 'title' => 'Product Management', 'icon' => 'feature-3 1.svg', 'link' => '#' ),
            array( 'title' => 'Data Analysis', 'icon' => 'feature-3 1.svg', 'link' => '#' ),
        );

        foreach ( $categories as $cat ) {
            $post_id = wp_insert_post( array(
                'post_type'   => 'hvedu3_category',
                'post_title'  => $cat['title'],
                'post_status' => 'publish',
            ) );

            if ( $post_id ) {
                update_post_meta( $post_id, '_category_icon', $cat['icon'] );
                update_post_meta( $post_id, '_category_link', $cat['link'] );
            }
        }
    }

    // 2. Courses Dummy Data
    $courses_exist = get_posts( array( 'post_type' => 'hvedu3_course', 'posts_per_page' => 1 ) );
    if ( empty( $courses_exist ) ) {
        for ( $i = 1; $i <= 4; $i++ ) {
            $titles = array(
                1 => 'Khoá học WebFlow cho người bắt đầu',
                2 => 'Lập trình React Native nâng cao từ số 0',
                3 => 'Thiết kế đồ họa chuyên nghiệp với Figma',
                4 => 'Marketing Online thực chiến tăng doanh số'
            );
            $badges = array(
                1 => 'WebFlow Design',
                2 => 'Mobile Dev',
                3 => 'UI/UX Design',
                4 => 'Digital Marketing'
            );
            
            $post_id = wp_insert_post( array(
                'post_type'    => 'hvedu3_course',
                'post_title'   => $titles[$i],
                'post_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctux nec ullamcorper mattis.',
                'post_status'  => 'publish',
            ) );

            if ( $post_id ) {
                update_post_meta( $post_id, '_course_badge', $badges[$i] );
                update_post_meta( $post_id, '_course_lessons', '12' );
                update_post_meta( $post_id, '_course_method', 'Học qua zoom' );
                update_post_meta( $post_id, '_course_instructor_name', 'Trần Văn Tú' );
                update_post_meta( $post_id, '_course_instructor_role', 'WebFlow Design' );
                update_post_meta( $post_id, '_course_instructor_avatar', 'Ellipse 2.webp' );
                update_post_meta( $post_id, '_course_rating', '4.5' );
                update_post_meta( $post_id, '_course_price', '$99.00' );
            }
        }
    }

    // 3. FAQs Dummy Data
    $faqs_exist = get_posts( array( 'post_type' => 'hvedu3_faq', 'posts_per_page' => 1 ) );
    if ( empty( $faqs_exist ) ) {
        $faqs = array(
            array(
                'q' => 'Độ tuổi nào có thể tham gia chương trình học tại trung tâm?',
                'a' => 'Trung tâm có chương trình dạy từ 3- mọi độ tuổi với các chương trình được thiết kế phù hợp theo từng giai đoạn phát triển, giúp trẻ tiếp thu kiến thức và kỹ năng một cách tự nhiên nhất.'
            ),
            array(
                'q' => 'Chương trình đào tạo HVG?',
                'a' => 'Thông tin chi tiết về chương trình đào tạo sẽ được cập nhật sớm nhất.'
            ),
            array(
                'q' => 'Các quyền lợi khi học các khoá học tại HVG?',
                'a' => 'Thông tin chi tiết về quyền lợi học viên sẽ được cập nhật sớm nhất.'
            ),
            array(
                'q' => 'Đăng ký như thế nào?',
                'a' => 'Bạn có thể đăng ký trực tuyến qua website hoặc liên hệ hotline để được hướng dẫn.'
            )
        );

        foreach ( $faqs as $faq ) {
            wp_insert_post( array(
                'post_type'    => 'hvedu3_faq',
                'post_title'   => $faq['q'],
                'post_content' => $faq['a'],
                'post_status'  => 'publish',
            ) );
        }
    }

    // 4. Testimonials Dummy Data
    $testimonials_exist = get_posts( array( 'post_type' => 'hvedu3_testimonial', 'posts_per_page' => 1 ) );
    if ( empty( $testimonials_exist ) ) {
        for ( $i = 1; $i <= 3; $i++ ) {
            $post_id = wp_insert_post( array(
                'post_type'    => 'hvedu3_testimonial',
                'post_title'   => 'Trần Đức Anh',
                'post_content' => '“Sau 3 tháng học Giáo dục sớm tại trung tâm, con tôi đã có sự tiến bộ rõ rệt. Bé chủ động khám phá, học chữ và số một cách tự nhiên. Giáo trình rất khoa học và thú vị. Nhờ đó, mình đạt điểm cao hơn hẳn so với trước đây!"',
                'post_status'  => 'publish',
            ) );

            if ( $post_id ) {
                update_post_meta( $post_id, '_testimonial_role', 'Học viên khoá UI/UX' );
            }
        }
    }

    update_option( 'hvedu3_dummy_data_populated', 1 );
}
add_action( 'init', 'hvedu3_populate_dummy_data', 99 );
*/

