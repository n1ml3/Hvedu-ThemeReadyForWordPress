<?php
/**
 * Register Custom Post Types and Meta Boxes for HveduEng2 Theme
 *
 * @package HveduEng2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Register CPTs: Courses, Reasons, Teachers, FAQs
 */
function hvedueng2_register_post_types() {
	// 1. Courses CPT (hvedu_course)
	register_post_type( 'hvedu_course', array(
		'labels'      => array(
			'name'          => __( 'Khóa học', 'HveduEng2' ),
			'singular_name' => __( 'Khóa học', 'HveduEng2' ),
			'add_new'       => __( 'Thêm khóa học mới', 'HveduEng2' ),
			'add_new_item'  => __( 'Thêm khóa học mới', 'HveduEng2' ),
			'edit_item'     => __( 'Sửa khóa học', 'HveduEng2' ),
			'new_item'      => __( 'Khóa học mới', 'HveduEng2' ),
			'view_item'     => __( 'Xem khóa học', 'HveduEng2' ),
			'all_items'     => __( 'Tất cả khóa học', 'HveduEng2' ),
		),
		'public'      => true,
		'has_archive' => true,
		'supports'    => array( 'title', 'editor', 'thumbnail' ),
		'menu_icon'   => 'dashicons-welcome-learn-more',
		'show_in_rest' => true,
	) );

	// 2. Reasons CPT (hvedu_reason)
	register_post_type( 'hvedu_reason', array(
		'labels'      => array(
			'name'          => __( 'Lý do chọn', 'HveduEng2' ),
			'singular_name' => __( 'Lý do chọn', 'HveduEng2' ),
			'add_new'       => __( 'Thêm lý do mới', 'HveduEng2' ),
			'add_new_item'  => __( 'Thêm lý do mới', 'HveduEng2' ),
			'edit_item'     => __( 'Sửa lý do', 'HveduEng2' ),
			'new_item'      => __( 'Lý do mới', 'HveduEng2' ),
			'all_items'     => __( 'Tất cả lý do', 'HveduEng2' ),
		),
		'public'      => true,
		'has_archive' => false,
		'supports'    => array( 'title', 'editor', 'thumbnail' ),
		'menu_icon'   => 'dashicons-awards',
		'show_in_rest' => true,
	) );

	// 3. Teachers CPT (hvedu_teacher)
	register_post_type( 'hvedu_teacher', array(
		'labels'      => array(
			'name'          => __( 'Giảng viên', 'HveduEng2' ),
			'singular_name' => __( 'Giảng viên', 'HveduEng2' ),
			'add_new'       => __( 'Thêm giảng viên mới', 'HveduEng2' ),
			'add_new_item'  => __( 'Thêm giảng viên mới', 'HveduEng2' ),
			'edit_item'     => __( 'Sửa giảng viên', 'HveduEng2' ),
			'new_item'      => __( 'Giảng viên mới', 'HveduEng2' ),
			'all_items'     => __( 'Tất cả giảng viên', 'HveduEng2' ),
		),
		'public'      => true,
		'has_archive' => false,
		'supports'    => array( 'title', 'thumbnail' ),
		'menu_icon'   => 'dashicons-businessman',
		'show_in_rest' => true,
	) );

	// 4. FAQs CPT (hvedu_faq)
	register_post_type( 'hvedu_faq', array(
		'labels'      => array(
			'name'          => __( 'Câu hỏi FAQ', 'HveduEng2' ),
			'singular_name' => __( 'Câu hỏi FAQ', 'HveduEng2' ),
			'add_new'       => __( 'Thêm câu hỏi mới', 'HveduEng2' ),
			'add_new_item'  => __( 'Thêm câu hỏi mới', 'HveduEng2' ),
			'edit_item'     => __( 'Sửa câu hỏi', 'HveduEng2' ),
			'new_item'      => __( 'Câu hỏi mới', 'HveduEng2' ),
			'all_items'     => __( 'Tất cả câu hỏi', 'HveduEng2' ),
		),
		'public'      => true,
		'has_archive' => false,
		'supports'    => array( 'title', 'editor' ),
		'menu_icon'   => 'dashicons-editor-help',
		'show_in_rest' => true,
	) );
}
add_action( 'init', 'hvedueng2_register_post_types' );


/**
 * Register Meta Boxes for Courses and Teachers
 */
function hvedueng2_add_meta_boxes() {
	// Course Details metabox
	add_meta_box(
		'hvedu_course_details',
		__( 'Thông tin chi tiết khóa học', 'HveduEng2' ),
		'hvedueng2_render_course_metabox',
		'hvedu_course',
		'normal',
		'high'
	);

	// Teacher Details metabox
	add_meta_box(
		'hvedu_teacher_details',
		__( 'Thông tin chi tiết giảng viên', 'HveduEng2' ),
		'hvedueng2_render_teacher_metabox',
		'hvedu_teacher',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes', 'hvedueng2_add_meta_boxes' );

/**
 * Render Course Meta Box
 */
function hvedueng2_render_course_metabox( $post ) {
	wp_nonce_field( 'hvedueng2_course_meta_nonce', 'hvedueng2_course_meta_nonce_field' );

	$entry = get_post_meta( $post->ID, '_course_entry', true );
	$exit = get_post_meta( $post->ID, '_course_exit', true );
	$mode = get_post_meta( $post->ID, '_course_mode', true );
	
	$feat1 = get_post_meta( $post->ID, '_course_feat1', true );
	$feat2 = get_post_meta( $post->ID, '_course_feat2', true );
	$feat3 = get_post_meta( $post->ID, '_course_feat3', true );

	$teacher_name = get_post_meta( $post->ID, '_course_teacher_name', true );
	$teacher_score = get_post_meta( $post->ID, '_course_teacher_score', true );

	$duration = get_post_meta( $post->ID, '_course_duration', true );
	$lessons = get_post_meta( $post->ID, '_course_lessons', true );
	$label = get_post_meta( $post->ID, '_course_label', true );
	?>
	<div class="hvedu-metabox-wrapper" style="padding: 10px 0;">
		<p>
			<label for="course_entry" style="display:inline-block; width:150px; font-weight:bold;"><?php _e( 'Đầu vào:', 'HveduEng2' ); ?></label>
			<input type="text" id="course_entry" name="course_entry" value="<?php echo esc_attr( $entry ); ?>" class="regular-text" placeholder="Ví dụ: Đầu vào: 0">
		</p>
		<p>
			<label for="course_exit" style="display:inline-block; width:150px; font-weight:bold;"><?php _e( 'Đầu ra:', 'HveduEng2' ); ?></label>
			<input type="text" id="course_exit" name="course_exit" value="<?php echo esc_attr( $exit ); ?>" class="regular-text" placeholder="Ví dụ: Đầu ra: 8.0+">
		</p>
		<p>
			<label for="course_mode" style="display:inline-block; width:150px; font-weight:bold;"><?php _e( 'Hình thức học:', 'HveduEng2' ); ?></label>
			<input type="text" id="course_mode" name="course_mode" value="<?php echo esc_attr( $mode ); ?>" class="regular-text" placeholder="Ví dụ: Online / Offline">
		</p>
		<p>
			<label for="course_duration" style="display:inline-block; width:150px; font-weight:bold;"><?php _e( 'Thời lượng:', 'HveduEng2' ); ?></label>
			<input type="text" id="course_duration" name="course_duration" value="<?php echo esc_attr( $duration ); ?>" class="regular-text" placeholder="Ví dụ: 1.5 tháng">
		</p>
		<p>
			<label for="course_lessons" style="display:inline-block; width:150px; font-weight:bold;"><?php _e( 'Số buổi học:', 'HveduEng2' ); ?></label>
			<input type="text" id="course_lessons" name="course_lessons" value="<?php echo esc_attr( $lessons ); ?>" class="regular-text" placeholder="Ví dụ: 6 lesson">
		</p>
		<p>
			<label for="course_label" style="display:inline-block; width:150px; font-weight:bold;"><?php _e( 'Nhãn / Tag:', 'HveduEng2' ); ?></label>
			<input type="text" id="course_label" name="course_label" value="<?php echo esc_attr( $label ); ?>" class="regular-text" placeholder="Ví dụ: Mất gốc">
		</p>
		<hr>
		<p><strong><?php _e( '3 Đặc điểm nổi bật (Hiển thị ở trang chủ):', 'HveduEng2' ); ?></strong></p>
		<p>
			<label for="course_feat1" style="display:inline-block; width:150px;"><?php _e( 'Đặc điểm 1:', 'HveduEng2' ); ?></label>
			<input type="text" id="course_feat1" name="course_feat1" value="<?php echo esc_attr( $feat1 ); ?>" style="width: 70%;" placeholder="Ví dụ: Đội ngũ giáo viên top đầu chuẩn sư phạm">
		</p>
		<p>
			<label for="course_feat2" style="display:inline-block; width:150px;"><?php _e( 'Đặc điểm 2:', 'HveduEng2' ); ?></label>
			<input type="text" id="course_feat2" name="course_feat2" value="<?php echo esc_attr( $feat2 ); ?>" style="width: 70%;" placeholder="Ví dụ: Giáo trình được biên soạn đặc quyền">
		</p>
		<p>
			<label for="course_feat3" style="display:inline-block; width:150px;"><?php _e( 'Đặc điểm 3:', 'HveduEng2' ); ?></label>
			<input type="text" id="course_feat3" name="course_feat3" value="<?php echo esc_attr( $feat3 ); ?>" style="width: 70%;" placeholder="Ví dụ: Giáo trình được biên soạn đặc quyền">
		</p>
		<hr>
		<p><strong><?php _e( 'Thông tin giáo viên đại diện (Hiển thị ở Banner phải):', 'HveduEng2' ); ?></strong></p>
		<p>
			<label for="course_teacher_name" style="display:inline-block; width:150px;"><?php _e( 'Tên giáo viên:', 'HveduEng2' ); ?></label>
			<input type="text" id="course_teacher_name" name="course_teacher_name" value="<?php echo esc_attr( $teacher_name ); ?>" class="regular-text" placeholder="Ví dụ: Ms. Trinh My Hanh">
		</p>
		<p>
			<label for="course_teacher_score" style="display:inline-block; width:150px;"><?php _e( 'Điểm overall:', 'HveduEng2' ); ?></label>
			<input type="text" id="course_teacher_score" name="course_teacher_score" value="<?php echo esc_attr( $teacher_score ); ?>" class="regular-text" placeholder="Ví dụ: 8.5">
		</p>
	</div>
	<?php
}

/**
 * Render Teacher Meta Box
 */
function hvedueng2_render_teacher_metabox( $post ) {
	wp_nonce_field( 'hvedueng2_teacher_meta_nonce', 'hvedueng2_teacher_meta_nonce_field' );

	$role = get_post_meta( $post->ID, '_teacher_role', true );
	$meta1 = get_post_meta( $post->ID, '_teacher_meta1', true );
	$meta2 = get_post_meta( $post->ID, '_teacher_meta2', true );
	$meta3 = get_post_meta( $post->ID, '_teacher_meta3', true );
	?>
	<div class="hvedu-metabox-wrapper" style="padding: 10px 0;">
		<p>
			<label for="teacher_role" style="display:inline-block; width:150px; font-weight:bold;"><?php _e( 'Vai trò:', 'HveduEng2' ); ?></label>
			<input type="text" id="teacher_role" name="teacher_role" value="<?php echo esc_attr( $role ); ?>" class="regular-text" placeholder="Ví dụ: Giảng viên">
		</p>
		<p><strong><?php _e( '3 Đặc điểm tiêu biểu của giảng viên:', 'HveduEng2' ); ?></strong></p>
		<p>
			<label for="teacher_meta1" style="display:inline-block; width:150px;"><?php _e( 'Tiêu chí 1:', 'HveduEng2' ); ?></label>
			<input type="text" id="teacher_meta1" name="teacher_meta1" value="<?php echo esc_attr( $meta1 ); ?>" style="width: 70%;" placeholder="Ví dụ: Overall : 8.5 Ielts">
		</p>
		<p>
			<label for="teacher_meta2" style="display:inline-block; width:150px;"><?php _e( 'Tiêu chí 2:', 'HveduEng2' ); ?></label>
			<input type="text" id="teacher_meta2" name="teacher_meta2" value="<?php echo esc_attr( $meta2 ); ?>" style="width: 70%;" placeholder="Ví dụ: Tốt nghiệp loại giỏi ĐH Sư phạm">
		</p>
		<p>
			<label for="teacher_meta3" style="display:inline-block; width:150px;"><?php _e( 'Tiêu chí 3:', 'HveduEng2' ); ?></label>
			<input type="text" id="teacher_meta3" name="teacher_meta3" value="<?php echo esc_attr( $meta3 ); ?>" style="width: 70%;" placeholder="Ví dụ: Kinh nghiệm 7 năm giảng dạy">
		</p>
	</div>
	<?php
}

/**
 * Save Meta Box values
 */
function hvedueng2_save_meta_boxes( $post_id ) {
	// 1. Save Course Meta Box
	if ( isset( $_POST['hvedueng2_course_meta_nonce_field'] ) && wp_verify_nonce( $_POST['hvedueng2_course_meta_nonce_field'], 'hvedueng2_course_meta_nonce' ) ) {
		$fields = array(
			'course_entry'         => '_course_entry',
			'course_exit'          => '_course_exit',
			'course_mode'          => '_course_mode',
			'course_duration'      => '_course_duration',
			'course_lessons'       => '_course_lessons',
			'course_label'         => '_course_label',
			'course_feat1'         => '_course_feat1',
			'course_feat2'         => '_course_feat2',
			'course_feat3'         => '_course_feat3',
			'course_teacher_name'  => '_course_teacher_name',
			'course_teacher_score' => '_course_teacher_score',
		);

		foreach ( $fields as $post_key => $meta_key ) {
			if ( isset( $_POST[ $post_key ] ) ) {
				update_post_meta( $post_id, $meta_key, sanitize_text_field( $_POST[ $post_key ] ) );
			}
		}
	}

	// 2. Save Teacher Meta Box
	if ( isset( $_POST['hvedueng2_teacher_meta_nonce_field'] ) && wp_verify_nonce( $_POST['hvedueng2_teacher_meta_nonce_field'], 'hvedueng2_teacher_meta_nonce' ) ) {
		$fields = array(
			'teacher_role'  => '_teacher_role',
			'teacher_meta1' => '_teacher_meta1',
			'teacher_meta2' => '_teacher_meta2',
			'teacher_meta3' => '_teacher_meta3',
		);

		foreach ( $fields as $post_key => $meta_key ) {
			if ( isset( $_POST[ $post_key ] ) ) {
				update_post_meta( $post_id, $meta_key, sanitize_text_field( $_POST[ $post_key ] ) );
			}
		}
	}
}
add_action( 'save_post', 'hvedueng2_save_meta_boxes' );
