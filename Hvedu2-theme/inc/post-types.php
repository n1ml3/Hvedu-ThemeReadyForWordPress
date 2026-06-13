<?php
/**
 * Register Custom Post Types and Metaboxes for Hvedu Theme.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register CPTs.
 */
function hvedu_register_post_types() {
    // Services CPT
    register_post_type( 'hvedu_service', array(
        'labels'      => array(
            'name'          => __( 'Dịch vụ', 'hvedu' ),
            'singular_name' => __( 'Dịch vụ', 'hvedu' ),
            'add_new_item'  => __( 'Thêm dịch vụ mới', 'hvedu' ),
            'edit_item'     => __( 'Sửa dịch vụ', 'hvedu' ),
            'all_items'     => __( 'Tất cả dịch vụ', 'hvedu' ),
        ),
        'public'      => true,
        'has_archive' => true,
        'menu_icon'   => 'dashicons-grid-view',
        'supports'    => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'show_in_rest'=> true,
    ) );

    // Courses CPT
    register_post_type( 'hvedu_course', array(
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

    // Documents CPT
    register_post_type( 'hvedu_document', array(
        'labels'      => array(
            'name'          => __( 'Tài liệu', 'hvedu' ),
            'singular_name' => __( 'Tài liệu', 'hvedu' ),
            'add_new_item'  => __( 'Thêm tài liệu mới', 'hvedu' ),
            'edit_item'     => __( 'Sửa tài liệu', 'hvedu' ),
            'all_items'     => __( 'Tất cả tài liệu', 'hvedu' ),
        ),
        'public'      => true,
        'has_archive' => true,
        'menu_icon'   => 'dashicons-document',
        'supports'    => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'show_in_rest'=> true,
    ) );

    // Testimonials CPT
    register_post_type( 'hvedu_testimonial', array(
        'labels'      => array(
            'name'          => __( 'Ý kiến khách hàng', 'hvedu' ),
            'singular_name' => __( 'Ý kiến khách hàng', 'hvedu' ),
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

    // Contact Submissions CPT (Private / Admin only)
    register_post_type( 'hvedu_contact', array(
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
        'supports'           => array( 'title', 'editor' ),
        'capabilities'       => array(
            'create_posts' => 'do_not_allow', // Disable manual creation by users
        ),
        'map_meta_cap'       => true,
    ) );
}
add_action( 'init', 'hvedu_register_post_types' );


/**
 * Add Meta Boxes for CPTs.
 */
function hvedu_add_custom_metaboxes() {
    // Course Meta Box
    add_meta_box(
        'hvedu_course_details',
        __( 'Thông tin Khóa học', 'hvedu' ),
        'hvedu_course_metabox_html',
        'hvedu_course',
        'normal',
        'high'
    );

    // Document Meta Box
    add_meta_box(
        'hvedu_document_details',
        __( 'Thông tin Tài liệu', 'hvedu' ),
        'hvedu_document_metabox_html',
        'hvedu_document',
        'normal',
        'high'
    );

    // Testimonial Meta Box
    add_meta_box(
        'hvedu_testimonial_details',
        __( 'Thông tin Ý kiến khách hàng', 'hvedu' ),
        'hvedu_testimonial_metabox_html',
        'hvedu_testimonial',
        'normal',
        'high'
    );

    // Contact Submission Meta Box
    add_meta_box(
        'hvedu_contact_details',
        __( 'Chi tiết Yêu cầu liên hệ', 'hvedu' ),
        'hvedu_contact_metabox_html',
        'hvedu_contact',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'hvedu_add_custom_metaboxes' );

/**
 * Course Metabox HTML.
 */
function hvedu_course_metabox_html( $post ) {
    wp_nonce_field( 'hvedu_save_course_meta', 'hvedu_course_nonce' );
    
    $old_price = get_post_meta( $post->ID, '_course_old_price', true );
    $price     = get_post_meta( $post->ID, '_course_price', true );
    $lessons   = get_post_meta( $post->ID, '_course_lessons', true );
    $method    = get_post_meta( $post->ID, '_course_method', true );
    ?>
    <table class="form-table">
        <tr>
            <th><label for="hvedu_course_old_price"><?php _e( 'Giá cũ (nếu có, e.g. 3.390.000 đ)', 'hvedu' ); ?></label></th>
            <td><input type="text" id="hvedu_course_old_price" name="hvedu_course_old_price" value="<?php echo esc_attr( $old_price ); ?>" class="regular-text"></td>
        </tr>
        <tr>
            <th><label for="hvedu_course_price"><?php _e( 'Giá mới (e.g. 2.000.000đ hoặc Free)', 'hvedu' ); ?></label></th>
            <td><input type="text" id="hvedu_course_price" name="hvedu_course_price" value="<?php echo esc_attr( $price ); ?>" class="regular-text"></td>
        </tr>
        <tr>
            <th><label for="hvedu_course_lessons"><?php _e( 'Số bài học (e.g. 12)', 'hvedu' ); ?></label></th>
            <td><input type="text" id="hvedu_course_lessons" name="hvedu_course_lessons" value="<?php echo esc_attr( $lessons ); ?>" class="regular-text"></td>
        </tr>
        <tr>
            <th><label for="hvedu_course_method"><?php _e( 'Hình thức học (e.g. Học qua zoom)', 'hvedu' ); ?></label></th>
            <td><input type="text" id="hvedu_course_method" name="hvedu_course_method" value="<?php echo esc_attr( $method ); ?>" class="regular-text"></td>
        </tr>
    </table>
    <?php
}

/**
 * Document Metabox HTML.
 */
function hvedu_document_metabox_html( $post ) {
    wp_nonce_field( 'hvedu_save_document_meta', 'hvedu_document_nonce' );
    
    $price = get_post_meta( $post->ID, '_document_price', true );
    ?>
    <table class="form-table">
        <tr>
            <th><label for="hvedu_document_price"><?php _e( 'Giá tài liệu (e.g. Giá: 200.000đ)', 'hvedu' ); ?></label></th>
            <td><input type="text" id="hvedu_document_price" name="hvedu_document_price" value="<?php echo esc_attr( $price ); ?>" class="regular-text"></td>
        </tr>
    </table>
    <?php
}

/**
 * Testimonial Metabox HTML.
 */
function hvedu_testimonial_metabox_html( $post ) {
    wp_nonce_field( 'hvedu_save_testimonial_meta', 'hvedu_testimonial_nonce' );
    
    $role   = get_post_meta( $post->ID, '_testimonial_role', true );
    $rating = get_post_meta( $post->ID, '_testimonial_rating', true );
    $logo   = get_post_meta( $post->ID, '_testimonial_logo', true );
    
    if ( ! $rating ) $rating = 5;
    ?>
    <table class="form-table">
        <tr>
            <th><label for="hvedu_testimonial_role"><?php _e( 'Chức danh / Công ty (e.g. Giám đốc công ty FPA)', 'hvedu' ); ?></label></th>
            <td><input type="text" id="hvedu_testimonial_role" name="hvedu_testimonial_role" value="<?php echo esc_attr( $role ); ?>" class="regular-text"></td>
        </tr>
        <tr>
            <th><label for="hvedu_testimonial_rating"><?php _e( 'Đánh giá (Số sao từ 1 đến 5)', 'hvedu' ); ?></label></th>
            <td>
                <select id="hvedu_testimonial_rating" name="hvedu_testimonial_rating">
                    <?php for ( $i = 1; $i <= 5; $i++ ) : ?>
                        <option value="<?php echo $i; ?>" <?php selected( $rating, $i ); ?>><?php echo $i; ?> sao</option>
                    <?php endfor; ?>
                </select>
            </td>
        </tr>
        <tr>
            <th><label for="hvedu_testimonial_logo"><?php _e( 'Đường dẫn Logo công ty (hoặc tên file trong assets, e.g. logo-02 1.svg)', 'hvedu' ); ?></label></th>
            <td>
                <input type="text" id="hvedu_testimonial_logo" name="hvedu_testimonial_logo" value="<?php echo esc_attr( $logo ); ?>" class="regular-text">
                <p class="description"><?php _e( 'Nhập tên file svg/png của logo công ty. VD: logo-02 1.svg', 'hvedu' ); ?></p>
            </td>
        </tr>
    </table>
    <?php
}

/**
 * Contact Submission Metabox HTML.
 */
function hvedu_contact_metabox_html( $post ) {
    $name    = get_post_meta( $post->ID, '_contact_name', true );
    $phone   = get_post_meta( $post->ID, '_contact_phone', true );
    $service = get_post_meta( $post->ID, '_contact_service', true );
    $message = get_post_meta( $post->ID, '_contact_message', true );
    ?>
    <table class="form-table">
        <tr>
            <th><strong><?php _e( 'Họ tên:', 'hvedu' ); ?></strong></th>
            <td><?php echo esc_html( $name ); ?></td>
        </tr>
        <tr>
            <th><strong><?php _e( 'Số điện thoại:', 'hvedu' ); ?></strong></th>
            <td><?php echo esc_html( $phone ); ?></td>
        </tr>
        <tr>
            <th><strong><?php _e( 'Dịch vụ quan tâm:', 'hvedu' ); ?></strong></th>
            <td><?php echo esc_html( $service ); ?></td>
        </tr>
        <tr>
            <th><strong><?php _e( 'Nội dung yêu cầu:', 'hvedu' ); ?></strong></th>
            <td><?php echo nl2br( esc_html( $message ) ); ?></td>
        </tr>
    </table>
    <?php
}

/**
 * Save metabox data.
 */
function hvedu_save_custom_metabox_data( $post_id ) {
    // 1. Save Course Meta
    if ( isset( $_POST['hvedu_course_nonce'] ) && wp_verify_nonce( $_POST['hvedu_course_nonce'], 'hvedu_save_course_meta' ) ) {
        if ( isset( $_POST['hvedu_course_old_price'] ) ) {
            update_post_meta( $post_id, '_course_old_price', sanitize_text_field( $_POST['hvedu_course_old_price'] ) );
        }
        if ( isset( $_POST['hvedu_course_price'] ) ) {
            update_post_meta( $post_id, '_course_price', sanitize_text_field( $_POST['hvedu_course_price'] ) );
        }
        if ( isset( $_POST['hvedu_course_lessons'] ) ) {
            update_post_meta( $post_id, '_course_lessons', sanitize_text_field( $_POST['hvedu_course_lessons'] ) );
        }
        if ( isset( $_POST['hvedu_course_method'] ) ) {
            update_post_meta( $post_id, '_course_method', sanitize_text_field( $_POST['hvedu_course_method'] ) );
        }
    }

    // 2. Save Document Meta
    if ( isset( $_POST['hvedu_document_nonce'] ) && wp_verify_nonce( $_POST['hvedu_document_nonce'], 'hvedu_save_document_meta' ) ) {
        if ( isset( $_POST['hvedu_document_price'] ) ) {
            update_post_meta( $post_id, '_document_price', sanitize_text_field( $_POST['hvedu_document_price'] ) );
        }
    }

    // 3. Save Testimonial Meta
    if ( isset( $_POST['hvedu_testimonial_nonce'] ) && wp_verify_nonce( $_POST['hvedu_testimonial_nonce'], 'hvedu_save_testimonial_meta' ) ) {
        if ( isset( $_POST['hvedu_testimonial_role'] ) ) {
            update_post_meta( $post_id, '_testimonial_role', sanitize_text_field( $_POST['hvedu_testimonial_role'] ) );
        }
        if ( isset( $_POST['hvedu_testimonial_rating'] ) ) {
            update_post_meta( $post_id, '_testimonial_rating', absint( $_POST['hvedu_testimonial_rating'] ) );
        }
        if ( isset( $_POST['hvedu_testimonial_logo'] ) ) {
            update_post_meta( $post_id, '_testimonial_logo', sanitize_text_field( $_POST['hvedu_testimonial_logo'] ) );
        }
    }
}
add_action( 'save_post', 'hvedu_save_custom_metabox_data' );
