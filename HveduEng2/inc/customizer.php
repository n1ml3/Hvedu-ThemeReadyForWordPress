<?php
/**
 * Theme Customizer Settings for HveduEng2
 *
 * @package HveduEng2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function hvedueng2_customize_register( $wp_customize ) {
	// Add Panel: Theme Options
	$wp_customize->add_panel( 'hvedueng2_options_panel', array(
		'title'       => __( 'Tùy biến HveduEng2', 'HveduEng2' ),
		'description' => __( 'Tùy chỉnh nội dung tĩnh trên trang chủ', 'HveduEng2' ),
		'priority'    => 30,
	) );

	// ==========================================
	// 1. SECTION: HERO SETTINGS
	// ==========================================
	$wp_customize->add_section( 'hvedueng2_hero_section', array(
		'title'    => __( 'Hero Banner (Đầu trang)', 'HveduEng2' ),
		'panel'    => 'hvedueng2_options_panel',
		'priority' => 10,
	) );

	// Title
	$wp_customize->add_setting( 'hero_title', array(
		'default'           => 'Chinh Phục IELTS - Đạt Điểm Cao',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'hero_title', array(
		'label'    => __( 'Tiêu đề chính', 'HveduEng2' ),
		'section'  => 'hvedueng2_hero_section',
		'type'     => 'text',
	) );

	// Subtitle
	$wp_customize->add_setting( 'hero_subtitle', array(
		'default'           => 'Ngay Lần Thi Đầu Tiên!',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'hero_subtitle', array(
		'label'    => __( 'Phụ đề', 'HveduEng2' ),
		'section'  => 'hvedueng2_hero_section',
		'type'     => 'text',
	) );

	// Features
	for ( $i = 1; $i <= 3; $i++ ) {
		$default_features = array(
			1 => 'Lộ trình học cá nhân hóa theo trình độ',
			2 => 'Giảng viên chuyên sâu, many years experience',
			3 => 'Cam kết đầu ra, hỗ trợ đến khi đạt mục tiêu',
		);
		$wp_customize->add_setting( "hero_feature_{$i}", array(
			'default'           => $default_features[$i],
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_control( "hero_feature_{$i}", array(
			'label'    => sprintf( __( 'Đặc điểm %d', 'HveduEng2' ), $i ),
			'section'  => 'hvedueng2_hero_section',
			'type'     => 'text',
		) );
	}

	// Hero Background Image
	$wp_customize->add_setting( 'hero_bg_image', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hero_bg_image', array(
		'label'    => __( 'Ảnh nền Hero', 'HveduEng2' ),
		'section'  => 'hvedueng2_hero_section',
	) ) );

	// ==========================================
	// 2. SECTION: STATS BAR SETTINGS
	// ==========================================
	$wp_customize->add_section( 'hvedueng2_stats_section', array(
		'title'    => __( 'Thống kê (Stats Bar)', 'HveduEng2' ),
		'panel'    => 'hvedueng2_options_panel',
		'priority' => 20,
	) );

	$default_stats = array(
		1 => array( 'num' => '30+', 'desc' => 'Nhân sự là chuyên gia trong lĩnh vực giáo dục và đào tạo' ),
		2 => array( 'num' => '+1000', 'desc' => 'Học viên tiếp cận với chương trình học tiên tiến' ),
		3 => array( 'num' => '11+', 'desc' => 'Năm nghiên cứu và hoạt động trong lĩnh vực giáo dục' ),
		4 => array( 'num' => '90%', 'desc' => 'Học viên đạt được mục tiêu mong muốn' ),
	);

	for ( $i = 1; $i <= 4; $i++ ) {
		// Stat Number
		$wp_customize->add_setting( "stat_number_{$i}", array(
			'default'           => $default_stats[$i]['num'],
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_control( "stat_number_{$i}", array(
			'label'    => sprintf( __( 'Cột %d: Số liệu', 'HveduEng2' ), $i ),
			'section'  => 'hvedueng2_stats_section',
			'type'     => 'text',
		) );

		// Stat Description
		$wp_customize->add_setting( "stat_desc_{$i}", array(
			'default'           => $default_stats[$i]['desc'],
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_control( "stat_desc_{$i}", array(
			'label'    => sprintf( __( 'Cột %d: Mô tả', 'HveduEng2' ), $i ),
			'section'  => 'hvedueng2_stats_section',
			'type'     => 'textarea',
		) );
	}

	// ==========================================
	// 3. SECTION: VISUAL ASSETS SETTINGS
	// ==========================================
	$wp_customize->add_section( 'hvedueng2_visuals_section', array(
		'title'    => __( 'Hình ảnh minh họa khác', 'HveduEng2' ),
		'panel'    => 'hvedueng2_options_panel',
		'priority' => 30,
	) );

	// FAQ Visual Image
	$wp_customize->add_setting( 'faq_visual_image', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'faq_visual_image', array(
		'label'    => __( 'Ảnh minh họa FAQ (Lớp học)', 'HveduEng2' ),
		'section'  => 'hvedueng2_visuals_section',
	) ) );

	// Consultation British Flag
	$wp_customize->add_setting( 'consultation_flag', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'consultation_flag', array(
		'label'    => __( 'Ảnh cờ Anh (Tư vấn)', 'HveduEng2' ),
		'section'  => 'hvedueng2_visuals_section',
	) ) );

	// Consultation Student Pointer
	$wp_customize->add_setting( 'consultation_student', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'consultation_student', array(
		'label'    => __( 'Ảnh học viên chỉ tay (Tư vấn)', 'HveduEng2' ),
		'section'  => 'hvedueng2_visuals_section',
	) ) );
}
add_action( 'customize_register', 'hvedueng2_customize_register' );
