<?php
/**
 * Register Custom Post Types and Metaboxes for Hvedu3 Theme.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register CPTs.
 */
function hvedu3_register_post_types() {
    // 1. Courses CPT
    register_post_type( 'hvedu3_course', array(
        'labels'      => array(
            'name'          => __( 'Khóa học', 'hvedu' ),
            'singular_name' => __( 'Khóa học', 'hvedu' ),
            'add_new_item'  => __( 'Thêm khóa học mới', 'hvedu' ),
            'edit_item'     => __( 'Sửa khóa học', 'hvedu' ),
            'all_items'     => __( 'Tất cả khóa học', 'hvedu' ),
        ),
        'public'      => true,
        'has_archive' => true,
        'menu_icon'   => 'dashicons-welcome-learn-more',
        'supports'    => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'show_in_rest'=> true,
    ) );

    // 2. Categories CPT (for top categories list)
    register_post_type( 'hvedu3_category', array(
        'labels'      => array(
            'name'          => __( 'Danh mục', 'hvedu' ),
            'singular_name' => __( 'Danh mục', 'hvedu' ),
            'add_new_item'  => __( 'Thêm danh mục mới', 'hvedu' ),
            'edit_item'     => __( 'Sửa danh mục', 'hvedu' ),
            'all_items'     => __( 'Tất cả danh mục', 'hvedu' ),
        ),
        'public'      => true,
        'has_archive' => false,
        'menu_icon'   => 'dashicons-category',
        'supports'    => array( 'title' ),
        'show_in_rest'=> true,
    ) );

    // 3. FAQs CPT
    register_post_type( 'hvedu3_faq', array(
        'labels'      => array(
            'name'          => __( 'Câu hỏi thường gặp', 'hvedu' ),
            'singular_name' => __( 'Câu hỏi', 'hvedu' ),
            'add_new_item'  => __( 'Thêm câu hỏi mới', 'hvedu' ),
            'edit_item'     => __( 'Sửa câu hỏi', 'hvedu' ),
            'all_items'     => __( 'Tất cả câu hỏi', 'hvedu' ),
        ),
        'public'      => true,
        'has_archive' => false,
        'menu_icon'   => 'dashicons-editor-help',
        'supports'    => array( 'title', 'editor' ),
        'show_in_rest'=> true,
    ) );

    // 4. Testimonials CPT
    register_post_type( 'hvedu3_testimonial', array(
        'labels'      => array(
            'name'          => __( 'Ý kiến học viên', 'hvedu' ),
            'singular_name' => __( 'Ý kiến học viên', 'hvedu' ),
            'add_new_item'  => __( 'Thêm ý kiến mới', 'hvedu' ),
            'edit_item'     => __( 'Sửa ý kiến', 'hvedu' ),
            'all_items'     => __( 'Tất cả ý kiến', 'hvedu' ),
        ),
        'public'      => true,
        'has_archive' => false,
        'menu_icon'   => 'dashicons-testimonial',
        'supports'    => array( 'title', 'editor', 'thumbnail' ),
        'show_in_rest'=> true,
    ) );

    // 5. Contact Submissions CPT (Private / Admin only)
    register_post_type( 'hvedu3_contact', array(
        'labels'      => array(
            'name'               => __( 'Yêu cầu liên hệ', 'hvedu' ),
            'singular_name'      => __( 'Liên hệ', 'hvedu' ),
            'all_items'          => __( 'Danh sách liên hệ', 'hvedu' ),
            'view_item'          => __( 'Xem chi tiết', 'hvedu' ),
            'search_items'       => __( 'Tìm kiếm liên hệ', 'hvedu' ),
            'not_found'          => __( 'Không có yêu cầu liên hệ nào.', 'hvedu' ),
        ),
        'public'             => false,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-email-alt',
        'supports'           => array( 'title' ),
        'capabilities'       => array(
            'create_posts' => 'do_not_allow',
        ),
        'map_meta_cap'       => true,
    ) );
}
add_action( 'init', 'hvedu3_register_post_types' );


/**
 * Add Meta Boxes for Hvedu3 CPTs.
 */
function hvedu3_add_custom_metaboxes() {
    // Course Detail
    add_meta_box(
        'hvedu3_course_details',
        __( 'Thông tin Khóa học', 'hvedu' ),
        'hvedu3_course_metabox_html',
        'hvedu3_course',
        'normal',
        'high'
    );

    // Category Detail
    add_meta_box(
        'hvedu3_category_details',
        __( 'Thông tin Danh mục', 'hvedu' ),
        'hvedu3_category_metabox_html',
        'hvedu3_category',
        'normal',
        'high'
    );

    // Testimonial Detail
    add_meta_box(
        'hvedu3_testimonial_details',
        __( 'Thông tin Học viên', 'hvedu' ),
        'hvedu3_testimonial_metabox_html',
        'hvedu3_testimonial',
        'normal',
        'high'
    );

    // Contact Submission Detail
    add_meta_box(
        'hvedu3_contact_details',
        __( 'Chi tiết Yêu cầu liên hệ', 'hvedu' ),
        'hvedu3_contact_metabox_html',
        'hvedu3_contact',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'hvedu3_add_custom_metaboxes' );

/**
 * Course Metabox HTML.
 */
function hvedu3_course_metabox_html( $post ) {
    wp_nonce_field( 'hvedu3_save_course_meta', 'hvedu3_course_nonce' );
    
    $badge       = get_post_meta( $post->ID, '_course_badge', true );
    $lessons     = get_post_meta( $post->ID, '_course_lessons', true );
    $method      = get_post_meta( $post->ID, '_course_method', true );
    $inst_name   = get_post_meta( $post->ID, '_course_instructor_name', true );
    $inst_role   = get_post_meta( $post->ID, '_course_instructor_role', true );
    $inst_avatar = get_post_meta( $post->ID, '_course_instructor_avatar', true );
    $rating      = get_post_meta( $post->ID, '_course_rating', true );
    $price       = get_post_meta( $post->ID, '_course_price', true );
    ?>
    <table class="form-table">
        <tr>
            <th><label for="hvedu3_course_badge"><?php _e( 'Nhãn khóa học (e.g. WebFlow Design)', 'hvedu' ); ?></label></th>
            <td><input type="text" id="hvedu3_course_badge" name="hvedu3_course_badge" value="<?php echo esc_attr( $badge ); ?>" class="regular-text"></td>
        </tr>
        <tr>
            <th><label for="hvedu3_course_lessons"><?php _e( 'Số bài học (e.g. 12)', 'hvedu' ); ?></label></th>
            <td><input type="text" id="hvedu3_course_lessons" name="hvedu3_course_lessons" value="<?php echo esc_attr( $lessons ); ?>" class="regular-text"></td>
        </tr>
        <tr>
            <th><label for="hvedu3_course_method"><?php _e( 'Hình thức học (e.g. Học qua zoom)', 'hvedu' ); ?></label></th>
            <td><input type="text" id="hvedu3_course_method" name="hvedu3_course_method" value="<?php echo esc_attr( $method ); ?>" class="regular-text"></td>
        </tr>
        <tr>
            <th><label for="hvedu3_course_instructor_name"><?php _e( 'Tên giảng viên (e.g. Trần Văn Tú)', 'hvedu' ); ?></label></th>
            <td><input type="text" id="hvedu3_course_instructor_name" name="hvedu3_course_instructor_name" value="<?php echo esc_attr( $inst_name ); ?>" class="regular-text"></td>
        </tr>
        <tr>
            <th><label for="hvedu3_course_instructor_role"><?php _e( 'Chức vụ giảng viên (e.g. WebFlow Design)', 'hvedu' ); ?></label></th>
            <td><input type="text" id="hvedu3_course_instructor_role" name="hvedu3_course_instructor_role" value="<?php echo esc_attr( $inst_role ); ?>" class="regular-text"></td>
        </tr>
        <tr>
            <th><label for="hvedu3_course_instructor_avatar"><?php _e( 'Ảnh giảng viên (tên file trong assets, e.g. Ellipse 2.webp)', 'hvedu' ); ?></label></th>
            <td><input type="text" id="hvedu3_course_instructor_avatar" name="hvedu3_course_instructor_avatar" value="<?php echo esc_attr( $inst_avatar ); ?>" class="regular-text"></td>
        </tr>
        <tr>
            <th><label for="hvedu3_course_rating"><?php _e( 'Điểm đánh giá (e.g. 4,5)', 'hvedu' ); ?></label></th>
            <td><input type="text" id="hvedu3_course_rating" name="hvedu3_course_rating" value="<?php echo esc_attr( $rating ); ?>" class="regular-text"></td>
        </tr>
        <tr>
            <th><label for="hvedu3_course_price"><?php _e( 'Giá học phí (e.g. $99.00)', 'hvedu' ); ?></label></th>
            <td><input type="text" id="hvedu3_course_price" name="hvedu3_course_price" value="<?php echo esc_attr( $price ); ?>" class="regular-text"></td>
        </tr>
    </table>
    <?php
}

/**
 * Category Metabox HTML.
 */
function hvedu3_category_metabox_html( $post ) {
    wp_nonce_field( 'hvedu3_save_category_meta', 'hvedu3_category_nonce' );
    
    $icon = get_post_meta( $post->ID, '_category_icon', true );
    $link = get_post_meta( $post->ID, '_category_link', true );
    ?>
    <table class="form-table">
        <tr>
            <th><label for="hvedu3_category_icon"><?php _e( 'Tên file Icon (e.g. about-feature-1 1.svg)', 'hvedu' ); ?></label></th>
            <td><input type="text" id="hvedu3_category_icon" name="hvedu3_category_icon" value="<?php echo esc_attr( $icon ); ?>" class="regular-text"></td>
        </tr>
        <tr>
            <th><label for="hvedu3_category_link"><?php _e( 'Đường dẫn liên kết (e.g. #)', 'hvedu' ); ?></label></th>
            <td><input type="text" id="hvedu3_category_link" name="hvedu3_category_link" value="<?php echo esc_attr( $link ); ?>" class="regular-text"></td>
        </tr>
    </table>
    <?php
}

/**
 * Testimonial Metabox HTML.
 */
function hvedu3_testimonial_metabox_html( $post ) {
    wp_nonce_field( 'hvedu3_save_testimonial_meta', 'hvedu3_testimonial_nonce' );
    
    $role = get_post_meta( $post->ID, '_testimonial_role', true );
    ?>
    <table class="form-table">
        <tr>
            <th><label for="hvedu3_testimonial_role"><?php _e( 'Vai trò học viên (e.g. Học viên khoá UI/UX)', 'hvedu' ); ?></label></th>
            <td><input type="text" id="hvedu3_testimonial_role" name="hvedu3_testimonial_role" value="<?php echo esc_attr( $role ); ?>" class="regular-text"></td>
        </tr>
    </table>
    <?php
}

/**
 * Contact Submission Metabox HTML.
 */
function hvedu3_contact_metabox_html( $post ) {
    $phone = get_post_meta( $post->ID, '_contact_phone', true );
    $email = get_post_meta( $post->ID, '_contact_email', true );
    ?>
    <table class="form-table">
        <tr>
            <th><strong><?php _e( 'Số điện thoại:', 'hvedu' ); ?></strong></th>
            <td><?php echo esc_html( $phone ); ?></td>
        </tr>
        <tr>
            <th><strong><?php _e( 'Email:', 'hvedu' ); ?></strong></th>
            <td><?php echo esc_html( $email ); ?></td>
        </tr>
    </table>
    <?php
}

/**
 * Save metabox data.
 */
function hvedu3_save_custom_metabox_data( $post_id ) {
    // 1. Save Course Meta
    if ( isset( $_POST['hvedu3_course_nonce'] ) && wp_verify_nonce( $_POST['hvedu3_course_nonce'], 'hvedu3_save_course_meta' ) ) {
        if ( isset( $_POST['hvedu3_course_badge'] ) ) {
            update_post_meta( $post_id, '_course_badge', sanitize_text_field( $_POST['hvedu3_course_badge'] ) );
        }
        if ( isset( $_POST['hvedu3_course_lessons'] ) ) {
            update_post_meta( $post_id, '_course_lessons', sanitize_text_field( $_POST['hvedu3_course_lessons'] ) );
        }
        if ( isset( $_POST['hvedu3_course_method'] ) ) {
            update_post_meta( $post_id, '_course_method', sanitize_text_field( $_POST['hvedu3_course_method'] ) );
        }
        if ( isset( $_POST['hvedu3_course_instructor_name'] ) ) {
            update_post_meta( $post_id, '_course_instructor_name', sanitize_text_field( $_POST['hvedu3_course_instructor_name'] ) );
        }
        if ( isset( $_POST['hvedu3_course_instructor_role'] ) ) {
            update_post_meta( $post_id, '_course_instructor_role', sanitize_text_field( $_POST['hvedu3_course_instructor_role'] ) );
        }
        if ( isset( $_POST['hvedu3_course_instructor_avatar'] ) ) {
            update_post_meta( $post_id, '_course_instructor_avatar', sanitize_text_field( $_POST['hvedu3_course_instructor_avatar'] ) );
        }
        if ( isset( $_POST['hvedu3_course_rating'] ) ) {
            update_post_meta( $post_id, '_course_rating', sanitize_text_field( $_POST['hvedu3_course_rating'] ) );
        }
        if ( isset( $_POST['hvedu3_course_price'] ) ) {
            update_post_meta( $post_id, '_course_price', sanitize_text_field( $_POST['hvedu3_course_price'] ) );
        }
    }

    // 2. Save Category Meta
    if ( isset( $_POST['hvedu3_category_nonce'] ) && wp_verify_nonce( $_POST['hved3_category_nonce'], 'hvedu3_save_category_meta' ) ) {
        if ( isset( $_POST['hvedu3_category_icon'] ) ) {
            update_post_meta( $post_id, '_category_icon', sanitize_text_field( $_POST['hvedu3_category_icon'] ) );
        }
        if ( isset( $_POST['hvedu3_category_link'] ) ) {
            update_post_meta( $post_id, '_category_link', sanitize_text_field( $_POST['hvedu3_category_link'] ) );
        }
    }

    // 3. Save Testimonial Meta
    if ( isset( $_POST['hvedu3_testimonial_nonce'] ) && wp_verify_nonce( $_POST['hvedu3_testimonial_nonce'], 'hvedu3_save_testimonial_meta' ) ) {
        if ( isset( $_POST['hvedu3_testimonial_role'] ) ) {
            update_post_meta( $post_id, '_testimonial_role', sanitize_text_field( $_POST['hvedu3_testimonial_role'] ) );
        }
    }
}
add_action( 'save_post', 'hvedu3_save_custom_metabox_data' );
