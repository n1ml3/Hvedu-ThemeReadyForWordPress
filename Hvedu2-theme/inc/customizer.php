<?php
/**
 * Register Theme Customizer settings.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function hvedu_customize_register( $wp_customize ) {

    // Define a Panel for Hvedu Theme Options
    $wp_customize->add_panel( 'hvedu_theme_options', array(
        'title'       => __( 'Tùy chỉnh HVedu Theme', 'hvedu' ),
        'description' => __( 'Quản lý toàn bộ nội dung của trang chủ, trang giới thiệu và thông tin liên hệ.', 'hvedu' ),
        'priority'    => 30,
    ) );

    // ==========================================
    // SECTION: HERO SECTION
    // ==========================================
    $wp_customize->add_section( 'hvedu_hero_section', array(
        'title'    => __( '1. Trang chủ - Hero Section', 'hvedu' ),
        'panel'    => 'hvedu_theme_options',
        'priority' => 10,
    ) );

    // Tagline
    $wp_customize->add_setting( 'hero_tagline', array(
        'default'           => __( 'Đầu tư cho tương lai của bạn', 'hvedu' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'hero_tagline', array(
        'label'   => __( 'Tagline', 'hvedu' ),
        'section' => 'hvedu_hero_section',
        'type'    => 'text',
    ) );

    // Title
    $wp_customize->add_setting( 'hero_title', array(
        'default'           => "Thực chiến - Toàn diện Training & Coaching \n for Business Development",
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'hero_title', array(
        'label'   => __( 'Tiêu đề (Chấp nhận thẻ HTML br hoặc \n)', 'hvedu' ),
        'section' => 'hvedu_hero_section',
        'type'    => 'textarea',
    ) );

    // Description
    $wp_customize->add_setting( 'hero_desc', array(
        'default'           => __( 'Thành Công trong kinh doanh không chỉ đến từ nhiệt huyết và giỏi nghề. Thành Công phải được đánh đổi bằng sự Đầu tư, Kiến thức, Kiên trì, Kỷ luật cao và kể cả Thất bại. Chúng tôi CAM KẾT mang lại Kết quả cao gấp 10 lần sự Đầu tư của Công ty bạn.', 'hvedu' ),
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'hero_desc', array(
        'label'   => __( 'Mô tả', 'hvedu' ),
        'section' => 'hvedu_hero_section',
        'type'    => 'textarea',
    ) );

    // Button Text
    $wp_customize->add_setting( 'hero_btn_text', array(
        'default'           => __( 'Khám phá ngay', 'hvedu' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'hero_btn_text', array(
        'label'   => __( 'Chữ trên nút', 'hvedu' ),
        'section' => 'hvedu_hero_section',
        'type'    => 'text',
    ) );

    // Button Link
    $wp_customize->add_setting( 'hero_btn_link', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'hero_btn_link', array(
        'label'   => __( 'Đường dẫn nút', 'hvedu' ),
        'section' => 'hvedu_hero_section',
        'type'    => 'text',
    ) );

    // Hero Image
    $wp_customize->add_setting( 'hero_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hero_image', array(
        'label'    => __( 'Ảnh chân dung bên phải (human.webp)', 'hvedu' ),
        'section'  => 'hvedu_hero_section',
        'settings' => 'hero_image',
    ) ) );


    // ==========================================
    // SECTION: STATS SECTION
    // ==========================================
    $wp_customize->add_section( 'hvedu_stats_section', array(
        'title'    => __( '2. Chỉ số thống kê (Stats)', 'hvedu' ),
        'panel'    => 'hvedu_theme_options',
        'priority' => 20,
    ) );

    for ( $i = 1; $i <= 4; $i++ ) {
        // Stat number
        $default_num = '';
        $default_lbl = '';
        if ( $i == 1 ) { $default_num = '100+'; $default_lbl = 'Giảng viên chuyên nghiệp'; }
        if ( $i == 2 ) { $default_num = '1.2k'; $default_lbl = 'Khoá học nhiều lĩnh vực'; }
        if ( $i == 3 ) { $default_num = '96%';  $default_lbl = 'Đánh giá hài lòng'; }
        if ( $i == 4 ) { $default_num = '10.5k'; $default_lbl = 'Cộng đồng học viên'; }

        $wp_customize->add_setting( "stat{$i}_num", array(
            'default'           => $default_num,
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( "stat{$i}_num", array(
            'label'   => sprintf( __( 'Số liệu %d', 'hvedu' ), $i ),
            'section' => 'hvedu_stats_section',
            'type'    => 'text',
        ) );

        $wp_customize->add_setting( "stat{$i}_lbl", array(
            'default'           => $default_lbl,
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( "stat{$i}_lbl", array(
            'label'   => sprintf( __( 'Nhãn mô tả %d', 'hvedu' ), $i ),
            'section' => 'hvedu_stats_section',
            'type'    => 'text',
        ) );
    }


    // ==========================================
    // SECTION: EXPERT SECTION
    // ==========================================
    $wp_customize->add_section( 'hvedu_expert_section', array(
        'title'    => __( '3. Chuyên gia nổi bật', 'hvedu' ),
        'panel'    => 'hvedu_theme_options',
        'priority' => 30,
    ) );

    // Tagline
    $wp_customize->add_setting( 'expert_tagline', array(
        'default'           => __( 'Kinh nghiệm nhiều năm', 'hvedu' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'expert_tagline', array(
        'label'   => __( 'Tagline', 'hvedu' ),
        'section' => 'hvedu_expert_section',
        'type'    => 'text',
    ) );

    // Title
    $wp_customize->add_setting( 'expert_title', array(
        'default'           => __( 'Chuyên gia Đào tạo của HVG', 'hvedu' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'expert_title', array(
        'label'   => __( 'Tiêu đề chuyên gia', 'hvedu' ),
        'section' => 'hvedu_expert_section',
        'type'    => 'text',
    ) );

    // Description
    $wp_customize->add_setting( 'expert_desc', array(
        'default'           => __( 'Với kinh nghiệm Thực chiến và đa dạng được tích lũy qua quá trình Xây dựng, Vận hành Doanh nghiệp, Coaching... Các Nhà huấn luyện tại HVG tự tin là những Coach, Business Coach đồng hành xuất sắc và mang lại Giá trị cao hơn khoản đầu tư của Công ty Khách hàng.', 'hvedu' ),
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'expert_desc', array(
        'label'   => __( 'Mô tả chuyên gia', 'hvedu' ),
        'section' => 'hvedu_expert_section',
        'type'    => 'textarea',
    ) );

    // Button Text
    $wp_customize->add_setting( 'expert_btn_text', array(
        'default'           => __( 'Khám phá ngay', 'hvedu' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'expert_btn_text', array(
        'label'   => __( 'Chữ trên nút', 'hvedu' ),
        'section' => 'hvedu_expert_section',
        'type'    => 'text',
    ) );

    // Button Link
    $wp_customize->add_setting( 'expert_btn_link', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'expert_btn_link', array(
        'label'   => __( 'Đường dẫn nút', 'hvedu' ),
        'section' => 'hvedu_expert_section',
        'type'    => 'text',
    ) );

    // Expert Image
    $wp_customize->add_setting( 'expert_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'expert_image', array(
        'label'    => __( 'Ảnh chuyên gia bên phải (person2.webp)', 'hvedu' ),
        'section'  => 'hvedu_expert_section',
        'settings' => 'expert_image',
    ) ) );


    // ==========================================
    // SECTION: ABOUT PAGE SPECIFICS
    // ==========================================
    $wp_customize->add_section( 'hvedu_about_section', array(
        'title'    => __( '4. Trang giới thiệu (Introduce Page)', 'hvedu' ),
        'panel'    => 'hvedu_theme_options',
        'priority' => 40,
    ) );

    // About Hero Tagline
    $wp_customize->add_setting( 'about_hero_tagline', array(
        'default'           => 'HVEducation',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'about_hero_tagline', array(
        'label'   => __( 'Hero Tagline', 'hvedu' ),
        'section' => 'hvedu_about_section',
        'type'    => 'text',
    ) );

    // About Hero Title
    $wp_customize->add_setting( 'about_hero_title', array(
        'default'           => __( 'Về Chúng Tôi', 'hvedu' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'about_hero_title', array(
        'label'   => __( 'Hero Title', 'hvedu' ),
        'section' => 'hvedu_about_section',
        'type'    => 'text',
    ) );

    // About Hero Description
    $wp_customize->add_setting( 'about_hero_desc', array(
        'default'           => __( 'Công ty Cổ phần Đào tạo & Huấn luyện Phát triển Doanh nghiệp HVG. Chúng tôi hướng tới Thành công cho Khách hàng, cho các học viên và cho chính công ty chúng tôi – đó chính là mối quan hệ WIN – WIN. Các Cổ đông sáng lập đã thành lập nên HVG với tầm nhìn là “Kiến tạo Cộng đồng doanh nghiệp Thịn vượng thông qua việc Phát triển tư duy và Hệ thống hoàn hảo.', 'hvedu' ),
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'about_hero_desc', array(
        'label'   => __( 'Mô tả giới thiệu', 'hvedu' ),
        'section' => 'hvedu_about_section',
        'type'    => 'textarea',
    ) );

    // About Hero Highlight Text
    $wp_customize->add_setting( 'about_hero_highlight', array(
        'default'           => 'Greaten your Big Business by Great System and Yourself',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'about_hero_highlight', array(
        'label'   => __( 'Câu châm ngôn làm nổi bật', 'hvedu' ),
        'section' => 'hvedu_about_section',
        'type'    => 'text',
    ) );

    // About Hero Image 1
    $wp_customize->add_setting( 'about_hero_img1', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'about_hero_img1', array(
        'label'    => __( 'Ảnh chính bên trái 1 (2148854913.webp)', 'hvedu' ),
        'section'  => 'hvedu_about_section',
        'settings' => 'about_hero_img1',
    ) ) );

    // About Hero Image 2
    $wp_customize->add_setting( 'about_hero_img2', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'about_hero_img2', array(
        'label'    => __( 'Ảnh phụ bên trái 2 (84837.webp)', 'hvedu' ),
        'section'  => 'hvedu_about_section',
        'settings' => 'about_hero_img2',
    ) ) );

    // About Hero Partner Rate
    $wp_customize->add_setting( 'about_hero_partner_rate', array(
        'default'           => '96%',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'about_hero_partner_rate', array(
        'label'   => __( 'Số phần trăm đối tác hài lòng', 'hvedu' ),
        'section' => 'hvedu_about_section',
        'type'    => 'text',
    ) );

    // About Hero Partner Label
    $wp_customize->add_setting( 'about_hero_partner_lbl', array(
        'default'           => __( 'Đối tác hài lòng', 'hvedu' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'about_hero_partner_lbl', array(
        'label'   => __( 'Mô tả phần trăm', 'hvedu' ),
        'section' => 'hvedu_about_section',
        'type'    => 'text',
    ) );

    // Vision Title
    $wp_customize->add_setting( 'about_vision_title', array(
        'default'           => __( 'Tầm nhìn', 'hvedu' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'about_vision_title', array(
        'label'   => __( 'Tiêu đề Tầm nhìn', 'hvedu' ),
        'section' => 'hvedu_about_section',
        'type'    => 'text',
    ) );

    // Vision Text
    $wp_customize->add_setting( 'about_vision_text', array(
        'default'           => __( 'Kiến tạo cộng đồng doanh nghiệp thịnh vượng thông qua việc phát triển tư duy thực chiến và hệ thống vận hành hoàn hảo nhất.', 'hvedu' ),
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'about_vision_text', array(
        'label'   => __( 'Nội dung Tầm nhìn', 'hvedu' ),
        'section' => 'hvedu_about_section',
        'type'    => 'textarea',
    ) );

    // Mission Title
    $wp_customize->add_setting( 'about_mission_title', array(
        'default'           => __( 'Sứ mệnh', 'hvedu' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'about_mission_title', array(
        'label'   => __( 'Tiêu đề Sứ mệnh', 'hvedu' ),
        'section' => 'hvedu_about_section',
        'type'    => 'text',
    ) );

    // Mission Text
    $wp_customize->add_setting( 'about_mission_text', array(
        'default'           => __( 'Đồng hành cùng hàng nghìn nhà quản trị Việt Nam, cung cấp giải pháp coaching thực tế mang tính thực dụng cao, giúp doanh nghiệp phát triển bền vững.', 'hvedu' ),
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'about_mission_text', array(
        'label'   => __( 'Nội dung Sứ mệnh', 'hvedu' ),
        'section' => 'hvedu_about_section',
        'type'    => 'textarea',
    ) );


    // ==========================================
    // SECTION: CONTACT INFO
    // ==========================================
    $wp_customize->add_section( 'hvedu_contact_section', array(
        'title'    => __( '5. Thông tin liên hệ & Mạng xã hội', 'hvedu' ),
        'panel'    => 'hvedu_theme_options',
        'priority' => 50,
    ) );

    // Address
    $wp_customize->add_setting( 'contact_address', array(
        'default'           => __( '33 Trung Kính, Cầu Giấy, Hà Nội', 'hvedu' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'contact_address', array(
        'label'   => __( 'Địa chỉ văn phòng', 'hvedu' ),
        'section' => 'hvedu_contact_section',
        'type'    => 'text',
    ) );

    // Hotline
    $wp_customize->add_setting( 'contact_phone', array(
        'default'           => 'Mobile: (+84)96311800',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'contact_phone', array(
        'label'   => __( 'Số Hotline liên hệ', 'hvedu' ),
        'section' => 'hvedu_contact_section',
        'type'    => 'text',
    ) );

    // Email
    $wp_customize->add_setting( 'contact_email', array(
        'default'           => 'demo1@gmail.com',
        'sanitize_callback' => 'sanitize_email',
    ) );
    $wp_customize->add_control( 'contact_email', array(
        'label'   => __( 'Địa chỉ Email', 'hvedu' ),
        'section' => 'hvedu_contact_section',
        'type'    => 'text',
    ) );

    // Zalo Hotline
    $wp_customize->add_setting( 'contact_zalo', array(
        'default'           => '012354789',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'contact_zalo', array(
        'label'   => __( 'Số điện thoại Zalo (nhận chat)', 'hvedu' ),
        'section' => 'hvedu_contact_section',
        'type'    => 'text',
    ) );
}
add_action( 'customize_register', 'hvedu_customize_register' );
