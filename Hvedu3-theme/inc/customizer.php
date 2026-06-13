<?php
/**
 * Register Theme Customizer settings for Hvedu3.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function hvedu3_customize_register( $wp_customize ) {

    // Define a Panel for Hvedu3 Theme Options
    $wp_customize->add_panel( 'hvedu3_theme_options', array(
        'title'       => __( 'Tùy chỉnh HVedu3 Theme', 'hvedu' ),
        'description' => __( 'Quản lý toàn bộ nội dung của trang chủ và thông tin liên hệ cho Theme 3.', 'hvedu' ),
        'priority'    => 30,
    ) );

    // ==========================================
    // SECTION: HERO SECTION
    // ==========================================
    $wp_customize->add_section( 'hvedu3_hero_section', array(
        'title'    => __( '1. Trang chủ - Hero Section', 'hvedu' ),
        'panel'    => 'hvedu3_theme_options',
        'priority' => 10,
    ) );

    // Tagline Badge
    $wp_customize->add_setting( 'hero_tagline', array(
        'default'           => 'Welcome to HVG Education',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'hero_tagline', array(
        'label'   => __( 'Tagline (Welcome to...)', 'hvedu' ),
        'section' => 'hvedu3_hero_section',
        'type'    => 'text',
    ) );

    // Title
    $wp_customize->add_setting( 'hero_title', array(
        'default'           => 'Bắt đầu tìm kiếm cơ hội trong tương lai ngay hôm nay',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'hero_title', array(
        'label'   => __( 'Tiêu đề chính', 'hvedu' ),
        'section' => 'hvedu3_hero_section',
        'type'    => 'textarea',
    ) );

    // Subtitle
    $wp_customize->add_setting( 'hero_subtitle', array(
        'default'           => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'hero_subtitle', array(
        'label'   => __( 'Tiêu đề phụ', 'hvedu' ),
        'section' => 'hvedu3_hero_section',
        'type'    => 'textarea',
    ) );

    // Search Placeholder
    $wp_customize->add_setting( 'hero_search_placeholder', array(
        'default'           => 'Bạn muốn học gì trong hôm nay?',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'hero_search_placeholder', array(
        'label'   => __( 'Gợi ý ô tìm kiếm', 'hvedu' ),
        'section' => 'hvedu3_hero_section',
        'type'    => 'text',
    ) );

    // Search Button Text
    $wp_customize->add_setting( 'hero_search_btn', array(
        'default'           => 'Tìm kiếm ngay',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'hero_search_btn', array(
        'label'   => __( 'Chữ trên nút tìm kiếm', 'hvedu' ),
        'section' => 'hvedu3_hero_section',
        'type'    => 'text',
    ) );

    // Stat 1 Count
    $wp_customize->add_setting( 'hero_stat1_count', array(
        'default'           => '9.5K+',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'hero_stat1_count', array(
        'label'   => __( 'Thống kê 1 - Số lượng', 'hvedu' ),
        'section' => 'hvedu3_hero_section',
        'type'    => 'text',
    ) );

    // Stat 1 Label
    $wp_customize->add_setting( 'hero_stat1_lbl', array(
        'default'           => 'Total active students taking<br>gifted courses',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'hero_stat1_lbl', array(
        'label'   => __( 'Thống kê 1 - Nhãn', 'hvedu' ),
        'section' => 'hvedu3_hero_section',
        'type'    => 'text',
    ) );

    // Stat 2 Count
    $wp_customize->add_setting( 'hero_stat2_count', array(
        'default'           => '15.5K+',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'hero_stat2_count', array(
        'label'   => __( 'Thống kê 2 - Số lượng', 'hvedu' ),
        'section' => 'hvedu3_hero_section',
        'type'    => 'text',
    ) );

    // Stat 2 Label
    $wp_customize->add_setting( 'hero_stat2_lbl', array(
        'default'           => 'Total active students taking<br>gifted courses',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'hero_stat2_lbl', array(
        'label'   => __( 'Thống kê 2 - Nhãn', 'hvedu' ),
        'section' => 'hvedu3_hero_section',
        'type'    => 'text',
    ) );

    // Hero Main Image
    $wp_customize->add_setting( 'hero_main_img', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hero_main_img', array(
        'label'    => __( 'Ảnh chính bên phải (hero-bg 1.webp)', 'hvedu' ),
        'section'  => 'hvedu3_hero_section',
        'settings' => 'hero_main_img',
    ) ) );

    // Hero Background Image
    $wp_customize->add_setting( 'hero_bg_img', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hero_bg_img', array(
        'label'    => __( 'Ảnh nền bên phải (hero-bg 2.svg)', 'hvedu' ),
        'section'  => 'hvedu3_hero_section',
        'settings' => 'hero_bg_img',
    ) ) );

    // Floating Count
    $wp_customize->add_setting( 'hero_float_count', array(
        'default'           => '1000+',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'hero_float_count', array(
        'label'   => __( 'Thẻ trôi nổi - Số lượng', 'hvedu' ),
        'section' => 'hvedu3_hero_section',
        'type'    => 'text',
    ) );

    // Floating Label
    $wp_customize->add_setting( 'hero_float_lbl', array(
        'default'           => 'Khoá học',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'hero_float_lbl', array(
        'label'   => __( 'Thẻ trôi nổi - Nhãn', 'hvedu' ),
        'section' => 'hvedu3_hero_section',
        'type'    => 'text',
    ) );


    // ==========================================
    // SECTION: QUESTIONS / COLLAGE SECTION
    // ==========================================
    $wp_customize->add_section( 'hvedu3_faq_section', array(
        'title'    => __( '2. Trang chủ - Câu hỏi & Collage', 'hvedu' ),
        'panel'    => 'hvedu3_theme_options',
        'priority' => 20,
    ) );

    // Collage Image Large
    $wp_customize->add_setting( 'faq_img_large', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'faq_img_large', array(
        'label'    => __( 'Ảnh lớn (hinh2.webp)', 'hvedu' ),
        'section'  => 'hvedu3_faq_section',
        'settings' => 'faq_img_large',
    ) ) );

    // Collage Image Small Top
    $wp_customize->add_setting( 'faq_img_small_top', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'faq_img_small_top', array(
        'label'    => __( 'Ảnh nhỏ trên (hinh3.webp)', 'hvedu' ),
        'section'  => 'hvedu3_faq_section',
        'settings' => 'faq_img_small_top',
    ) ) );

    // Collage Image Small Bottom
    $wp_customize->add_setting( 'faq_img_small_bottom', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'faq_img_small_bottom', array(
        'label'    => __( 'Ảnh nhỏ dưới (hinh1.webp)', 'hvedu' ),
        'section'  => 'hvedu3_faq_section',
        'settings' => 'faq_img_small_bottom',
    ) ) );

    // Floating Instructor Title
    $wp_customize->add_setting( 'faq_float_title', array(
        'default'           => 'Instructor',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'faq_float_title', array(
        'label'   => __( 'Thẻ giảng viên - Tiêu đề', 'hvedu' ),
        'section' => 'hvedu3_faq_section',
        'type'    => 'text',
    ) );

    // Floating Instructor Count
    $wp_customize->add_setting( 'faq_float_count', array(
        'default'           => '100+',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'faq_float_count', array(
        'label'   => __( 'Thẻ giảng viên - Số lượng', 'hvedu' ),
        'section' => 'hvedu3_faq_section',
        'type'    => 'text',
    ) );

    // Floating Instructor Label
    $wp_customize->add_setting( 'faq_float_lbl', array(
        'default'           => 'Instructor',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'faq_float_lbl', array(
        'label'   => __( 'Thẻ giảng viên - Nhãn', 'hvedu' ),
        'section' => 'hvedu3_faq_section',
        'type'    => 'text',
    ) );


    // ==========================================
    // SECTION: CTA SECTION
    // ==========================================
    $wp_customize->add_section( 'hvedu3_cta_section', array(
        'title'    => __( '3. Trang chủ - CTA Banner', 'hvedu' ),
        'panel'    => 'hvedu3_theme_options',
        'priority' => 30,
    ) );

    // CTA Title
    $wp_customize->add_setting( 'cta_title', array(
        'default'           => 'Ưu đãi 50% cho học viên và giảng viên đầu tiên đăng ký',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'cta_title', array(
        'label'   => __( 'Tiêu đề CTA', 'hvedu' ),
        'section' => 'hvedu3_cta_section',
        'type'    => 'textarea',
    ) );

    // CTA Description
    $wp_customize->add_setting( 'cta_desc', array(
        'default'           => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'cta_desc', array(
        'label'   => __( 'Mô tả CTA', 'hvedu' ),
        'section' => 'hvedu3_cta_section',
        'type'    => 'textarea',
    ) );

    // CTA Button 1 Text
    $wp_customize->add_setting( 'cta_btn1_text', array(
        'default'           => 'Đăng ký học ngay',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'cta_btn1_text', array(
        'label'   => __( 'Chữ trên Nút 1 (solid)', 'hvedu' ),
        'section' => 'hvedu3_cta_section',
        'type'    => 'text',
    ) );

    // CTA Button 1 Link
    $wp_customize->add_setting( 'cta_btn1_link', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'cta_btn1_link', array(
        'label'   => __( 'Liên kết Nút 1', 'hvedu' ),
        'section' => 'hvedu3_cta_section',
        'type'    => 'text',
    ) );

    // CTA Button 2 Text
    $wp_customize->add_setting( 'cta_btn2_text', array(
        'default'           => 'Trở thành giảng viên',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'cta_btn2_text', array(
        'label'   => __( 'Chữ trên Nút 2 (outline)', 'hvedu' ),
        'section' => 'hvedu3_cta_section',
        'type'    => 'text',
    ) );

    // CTA Button 2 Link
    $wp_customize->add_setting( 'cta_btn2_link', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'cta_btn2_link', array(
        'label'   => __( 'Liên kết Nút 2', 'hvedu' ),
        'section' => 'hvedu3_cta_section',
        'type'    => 'text',
    ) );


    // ==========================================
    // SECTION: CONTACT INFO
    // ==========================================
    $wp_customize->add_section( 'hvedu3_contact_section', array(
        'title'    => __( '4. Thông tin liên hệ (Footer)', 'hvedu' ),
        'panel'    => 'hvedu3_theme_options',
        'priority' => 40,
    ) );

    // Address
    $wp_customize->add_setting( 'contact_address', array(
        'default'           => 'Số 33, Trung Kính, Phường Trung Hòa, Quận Cầu Giấy, TP Hà Nội',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'contact_address', array(
        'label'   => __( 'Địa chỉ', 'hvedu' ),
        'section' => 'hvedu3_contact_section',
        'type'    => 'text',
    ) );

    // Phone
    $wp_customize->add_setting( 'contact_phone', array(
        'default'           => '(+84)123456789',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'contact_phone', array(
        'label'   => __( 'Số điện thoại', 'hvedu' ),
        'section' => 'hvedu3_contact_section',
        'type'    => 'text',
    ) );

    // Email
    $wp_customize->add_setting( 'contact_email', array(
        'default'           => 'hoangvugroup@gmail.com',
        'sanitize_callback' => 'sanitize_email',
    ) );
    $wp_customize->add_control( 'contact_email', array(
        'label'   => __( 'Địa chỉ Email', 'hvedu' ),
        'section' => 'hvedu3_contact_section',
        'type'    => 'text',
    ) );
}
add_action( 'customize_register', 'hvedu3_customize_register' );
