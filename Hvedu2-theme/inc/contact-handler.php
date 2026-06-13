<?php
/**
 * Handle Contact Form submissions via WordPress AJAX.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Handle the AJAX request.
 */
function hvedu_ajax_submit_contact() {
    // 1. Verify nonce
    if ( ! isset( $_POST['nonce'] ) || ! wp_verify_nonce( $_POST['nonce'], 'hvedu_contact_ajax_nonce' ) ) {
        wp_send_json_error( array(
            'message' => __( 'Yêu cầu không hợp lệ. Vui lòng tải lại trang.', 'hvedu' )
        ) );
    }

    // 2. Validate inputs
    $name    = isset( $_POST['name'] ) ? sanitize_text_field( $_POST['name'] ) : '';
    $phone   = isset( $_POST['phone'] ) ? sanitize_text_field( $_POST['phone'] ) : '';
    $service = isset( $_POST['service'] ) ? sanitize_text_field( $_POST['service'] ) : '';
    $message = isset( $_POST['message'] ) ? sanitize_textarea_field( $_POST['message'] ) : '';

    if ( empty( $name ) || empty( $phone ) ) {
        wp_send_json_error( array(
            'message' => __( 'Vui lòng nhập tên và số điện thoại.', 'hvedu' )
        ) );
    }

    // 3. Create the contact submission post (CPT: hvedu_contact)
    $post_title = sprintf( __( 'Yêu cầu tư vấn: %s (%s)', 'hvedu' ), $name, $phone );
    
    // Construct body text for default wordpress interface
    $post_content = "Họ tên: {$name}\n";
    $post_content .= "Số điện thoại: {$phone}\n";
    $post_content .= "Dịch vụ quan tâm: {$service}\n";
    $post_content .= "Yêu cầu chi tiết:\n{$message}";

    // Temporary bypass to allow manual creation of submission posts programmatically
    // even though we disabled CPT manual creation for admin UI
    add_filter( 'map_meta_cap', 'hvedu_allow_programmatic_contact_creation', 10, 4 );
    
    $post_id = wp_insert_post( array(
        'post_type'    => 'hvedu_contact',
        'post_title'   => $post_title,
        'post_content' => $post_content,
        'post_status'  => 'publish',
    ) );

    remove_filter( 'map_meta_cap', 'hvedu_allow_programmatic_contact_creation', 10 );

    if ( is_wp_error( $post_id ) || ! $post_id ) {
        wp_send_json_error( array(
            'message' => __( 'Đã xảy ra lỗi hệ thống. Vui lòng thử lại sau.', 'hvedu' )
        ) );
    }

    // Save meta fields
    update_post_meta( $post_id, '_contact_name', $name );
    update_post_meta( $post_id, '_contact_phone', $phone );
    update_post_meta( $post_id, '_contact_service', $service );
    update_post_meta( $post_id, '_contact_message', $message );

    // 4. Send Email Notification to Admin
    $admin_email = get_option( 'admin_email' );
    $subject     = __( '[HVedu] Yêu cầu liên hệ tư vấn mới', 'hvedu' );
    $headers     = array( 'Content-Type: text/html; charset=UTF-8' );
    
    $email_body = "<h3>" . __( 'Có một yêu cầu liên hệ tư vấn mới từ website:', 'hvedu' ) . "</h3>";
    $email_body .= "<p><strong>" . __( 'Họ và tên:', 'hvedu' ) . "</strong> " . esc_html( $name ) . "</p>";
    $email_body .= "<p><strong>" . __( 'Số điện thoại:', 'hvedu' ) . "</strong> " . esc_html( $phone ) . "</p>";
    $email_body .= "<p><strong>" . __( 'Dịch vụ quan tâm:', 'hvedu' ) . "</strong> " . esc_html( $service ) . "</p>";
    $email_body .= "<p><strong>" . __( 'Nội dung:', 'hvedu' ) . "</strong><br>" . nl2br( esc_html( $message ) ) . "</p>";
    $email_body .= "<hr><p>" . sprintf( __( 'Xem chi tiết trong trang quản trị: %s', 'hvedu' ), admin_url( 'post.php?post=' . $post_id . '&action=edit' ) ) . "</p>";

    wp_mail( $admin_email, $subject, $email_body, $headers );

    // 5. Respond success
    wp_send_json_success( array(
        'message' => __( 'Cảm ơn bạn! Yêu cầu tư vấn của bạn đã được gửi thành công. Chúng tôi sẽ liên hệ trong thời gian sớm nhất.', 'hvedu' )
    ) );
}
add_action( 'wp_ajax_hvedu_submit_contact', 'hvedu_ajax_submit_contact' );
add_action( 'wp_ajax_nopriv_hvedu_submit_contact', 'hvedu_ajax_submit_contact' );

/**
 * Filter mapping meta capabilities to allow inserting contact submissions via code.
 */
function hvedu_allow_programmatic_contact_creation( $caps, $cap, $user_id, $args ) {
    if ( 'edit_post' === $cap || 'create_posts' === $cap ) {
        return array( 'read' ); // Temporarily map it to basic read permission so inserter runs fine
    }
    return $caps;
}

/**
 * Enqueue Contact AJAX Form Client Scripts.
 */
function hvedu_contact_form_ajax_scripts() {
    // Check if we are on the homepage or introduce page
    if ( is_front_page() || is_page_template( 'page-introduce.php' ) || is_page( 'introduce' ) ) {
        // Enqueue jQuery first (loaded in functions.php)
        wp_add_inline_script( 'jquery', '
            jQuery(document).ready(function($) {
                $(".contact-form").on("submit", function(e) {
                    e.preventDefault();
                    
                    var $form = $(this);
                    var $submitBtn = $form.find(".contact-btn-primary");
                    var originalBtnText = $submitBtn.html();
                    
                    // Client-side validations
                    var name = $form.find("input[placeholder*=\'Tên\']").val();
                    var phone = $form.find("input[placeholder*=\'điện thoại\']").val();
                    var service = $form.find(".contact-select").val() || "";
                    var message = $form.find(".contact-textarea").val();
                    
                    if (!name || !phone) {
                        alert("Vui lòng điền đầy đủ Họ tên và Số điện thoại!");
                        return;
                    }
                    
                    // Show loading state
                    $submitBtn.attr("disabled", true).html("Đang gửi... <span class=\'spinner-border spinner-border-sm ms-2\' role=\'status\' aria-hidden=\'true\'></span>");
                    
                    var formData = {
                        action: "hvedu_submit_contact",
                        nonce: hvedu_contact_vars.nonce,
                        name: name,
                        phone: phone,
                        service: service,
                        message: message
                    };
                    
                    $.post(hvedu_contact_vars.ajax_url, formData)
                        .done(function(response) {
                            if (response.success) {
                                alert(response.data.message);
                                $form[0].reset();
                            } else {
                                alert(response.data.message || "Đã xảy ra lỗi.");
                            }
                        })
                        .fail(function() {
                            alert("Không thể kết nối đến máy chủ. Vui lòng thử lại sau.");
                        })
                        .always(function() {
                            $submitBtn.removeAttr("disabled").html(originalBtnText);
                        });
                });
            });
        ' );

        // Pass AJAX URL and Nonce to script
        wp_localize_script( 'jquery', 'hvedu_contact_vars', array(
            'ajax_url' => admin_url( 'admin-ajax.php' ),
            'nonce'    => wp_create_nonce( 'hvedu_contact_ajax_nonce' ),
        ) );
    }
}
add_action( 'wp_enqueue_scripts', 'hvedu_contact_form_ajax_scripts', 100 );
