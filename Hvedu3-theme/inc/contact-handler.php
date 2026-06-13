<?php
/**
 * Handle Contact Form submissions via WordPress AJAX for Theme 3.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Handle the AJAX request.
 */
function hvedu3_ajax_submit_contact() {
    // 1. Verify nonce
    if ( ! isset( $_POST['nonce'] ) || ! wp_verify_nonce( $_POST['nonce'], 'hvedu3_contact_ajax_nonce' ) ) {
        wp_send_json_error( array(
            'message' => __( 'Yêu cầu không hợp lệ. Vui lòng tải lại trang.', 'hvedu' )
        ) );
    }

    // 2. Validate inputs
    $phone = isset( $_POST['phone'] ) ? sanitize_text_field( $_POST['phone'] ) : '';
    $email = isset( $_POST['email'] ) ? sanitize_email( $_POST['email'] ) : '';

    if ( empty( $phone ) ) {
        wp_send_json_error( array(
            'message' => __( 'Vui lòng nhập số điện thoại.', 'hvedu' )
        ) );
    }

    // 3. Create the contact submission post (CPT: hvedu3_contact)
    $post_title = sprintf( __( 'Yêu cầu tư vấn (T3): %s', 'hvedu' ), $phone );
    $post_content = "Số điện thoại: {$phone}\nEmail: {$email}";

    // Temporary bypass to allow manual creation of submission posts programmatically
    add_filter( 'map_meta_cap', 'hvedu3_allow_programmatic_contact_creation', 10, 4 );

    $post_id = wp_insert_post( array(
        'post_type'    => 'hvedu3_contact',
        'post_title'   => $post_title,
        'post_content' => $post_content,
        'post_status'  => 'publish',
    ) );

    remove_filter( 'map_meta_cap', 'hvedu3_allow_programmatic_contact_creation', 10 );

    if ( is_wp_error( $post_id ) || ! $post_id ) {
        wp_send_json_error( array(
            'message' => __( 'Đã xảy ra lỗi hệ thống. Vui lòng thử lại sau.', 'hvedu' )
        ) );
    }

    // Save meta fields
    update_post_meta( $post_id, '_contact_phone', $phone );
    update_post_meta( $post_id, '_contact_email', $email );

    // 4. Send Email Notification to Admin
    $admin_email = get_option( 'admin_email' );
    $subject     = __( '[HVedu3] Yêu cầu tư vấn miễn phí mới', 'hvedu' );
    $headers     = array( 'Content-Type: text/html; charset=UTF-8' );
    
    $email_body = "<h3>" . __( 'Có một yêu cầu tư vấn mới từ website (Theme 3):', 'hvedu' ) . "</h3>";
    $email_body .= "<p><strong>" . __( 'Số điện thoại:', 'hvedu' ) . "</strong> " . esc_html( $phone ) . "</p>";
    if ( $email ) {
        $email_body .= "<p><strong>" . __( 'Email:', 'hvedu' ) . "</strong> " . esc_html( $email ) . "</p>";
    }
    $email_body .= "<hr><p>" . sprintf( __( 'Xem chi tiết trong trang quản trị: %s', 'hvedu' ), admin_url( 'post.php?post=' . $post_id . '&action=edit' ) ) . "</p>";

    wp_mail( $admin_email, $subject, $email_body, $headers );

    // 5. Respond success
    wp_send_json_success( array(
        'message' => __( 'Cảm ơn bạn! Yêu cầu của bạn đã được gửi thành công. Chúng tôi sẽ liên hệ sớm nhất.', 'hvedu' )
    ) );
}
add_action( 'wp_ajax_hvedu3_submit_contact', 'hvedu3_ajax_submit_contact' );
add_action( 'wp_ajax_nopriv_hvedu3_submit_contact', 'hvedu3_ajax_submit_contact' );

/**
 * Filter mapping meta capabilities.
 */
function hvedu3_allow_programmatic_contact_creation( $caps, $cap, $user_id, $args ) {
    if ( 'edit_post' === $cap || 'create_posts' === $cap ) {
        return array( 'read' );
    }
    return $caps;
}

/**
 * Enqueue Contact AJAX Form Client Scripts.
 */
function hvedu3_contact_form_ajax_scripts() {
    wp_add_inline_script( 'jquery', '
        jQuery(document).ready(function($) {
            $("#footer-submit-btn").on("click", function(e) {
                e.preventDefault();
                
                var $btn = $(this);
                var phone = $("#footer-phone").val();
                var email = $("#footer-email").val();
                
                if (!phone) {
                    alert("Vui lòng điền số điện thoại!");
                    return;
                }
                
                var originalBtnText = $btn.text();
                $btn.attr("disabled", true).text("Đang gửi...");
                
                var formData = {
                    action: "hvedu3_submit_contact",
                    nonce: hvedu3_contact_vars.nonce,
                    phone: phone,
                    email: email
                };
                
                $.post(hvedu3_contact_vars.ajax_url, formData)
                    .done(function(response) {
                        if (response.success) {
                            alert(response.data.message);
                            $("#footer-phone").val("");
                            $("#footer-email").val("");
                        } else {
                            alert(response.data.message || "Đã xảy ra lỗi.");
                        }
                    })
                    .fail(function() {
                        alert("Không thể kết nối đến máy chủ. Vui lòng thử lại sau.");
                    })
                    .always(function() {
                        $btn.removeAttr("disabled").text(originalBtnText);
                    });
            });
        });
    ' );

    wp_localize_script( 'jquery', 'hvedu3_contact_vars', array(
        'ajax_url' => admin_url( 'admin-ajax.php' ),
        'nonce'    => wp_create_nonce( 'hvedu3_contact_ajax_nonce' ),
    ) );
}
add_action( 'wp_enqueue_scripts', 'hvedu3_contact_form_ajax_scripts', 100 );
