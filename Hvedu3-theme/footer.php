<footer class="footer">
        <div class="footer-inner">

            <!-- ===== SECTION 1: CTA card ===== -->
            <div class="footer-cta-wrapper">
                <div class="footer-cta-card">
                    <!-- Tiêu đề CTA -->
                    <div class="footer-cta-text">
                        <!-- Dấu gạch trang trí phía dưới chữ -->
                        <div class="footer-cta-underline"></div>
                        <h2 class="footer-cta-title">
                            Để lại thông tin để nhận tư vấn miễn phí!!!
                        </h2>
                        <img class="decor-line" src="<?php echo get_template_directory_uri(); ?>/assets/yeallow-paint.svg" alt="decor line">
                    </div>

                    <!-- Form CTA -->
                    <div class="footer-cta-form">
                        <!-- Input: Số điện thoại -->
                        <div class="footer-cta-input-group">
                            <span class="footer-cta-input-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/phone.svg" alt="Phone icon" width="24" height="24">
                            </span>
                            <input type="tel" class="footer-cta-input" id="footer-phone" placeholder="Số điện thoại"
                                aria-label="Số điện thoại">
                        </div>

                        <!-- Hàng 2: Input email + nút Gửi -->
                        <div class="footer-cta-row">
                            <div class="footer-cta-input-group">
                                <span class="footer-cta-input-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/mail.svg" alt="Email icon" width="24" height="24">
                                </span>
                                <input type="email" class="footer-cta-input" id="footer-email" placeholder="Email"
                                    aria-label="Email">
                            </div>
                        </div>
                    </div>
                    <button type="button" class="footer-cta-btn" id="footer-submit-btn">
                        Gửi
                    </button>
                </div>
            </div>

            <!-- ===== SECTION 2: Thông tin footer ===== -->
            <div class="footer-info-wrapper">

                <!-- Logo -->
                <div class="footer-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/hvedu-logo.svg" alt="HVEducation Logo" class="footer-logo-icon">
                    <div class="footer-logo-text">
                        <span class="footer-logo-title">HVEducation</span>
                        <span class="footer-logo-subtitle">Online learning solution</span>
                    </div>
                </div>

                <!-- Các cột thông tin -->
                <div class="footer-columns">

                    <!-- Cột 1: Hoàng Vũ Education – thông tin liên hệ -->
                    <div class="footer-col footer-col--contact">
                        <h3 class="footer-col-heading">Hoàng Vũ Education</h3>
                        <ul class="footer-contact-list">

                            <!-- Địa chỉ -->
                            <li class="footer-contact-item">
                                <span class="footer-contact-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/location.svg" alt="Location" width="24" height="24">
                                </span>
                                <div class="footer-contact-text">
                                    <strong>Địa chỉ:</strong>
                                    <span>Số 33, Trung Kính, Phường Trung Hòa, Quận Cầu Giấy, TP Hà Nội</span>
                                </div>
                            </li>

                            <!-- Hotline -->
                            <li class="footer-contact-item">
                                <span class="footer-contact-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/telephone.svg" alt="Phone" width="24" height="24">
                                </span>
                                <div class="footer-contact-text">
                                    <strong>Hotline:</strong>
                                    <span>(+84)123456789</span>
                                </div>
                            </li>

                            <!-- Email -->
                            <li class="footer-contact-item">
                                <span class="footer-contact-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/messagesvg.svg" alt="Email" width="24" height="24">
                                </span>
                                <div class="footer-contact-text">
                                    <strong>Email:</strong>
                                    <span>hoangvugroup@gmail.com</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Cột 2: Thông tin (navigation links) -->
                    <div class="footer-col footer-col--nav">
                        <h3 class="footer-col-heading">Thông tin</h3>
                        <ul class="footer-nav-list">
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-nav-link">Trang chủ</a></li>
                            <li><a href="#" class="footer-nav-link">Giới thiệu</a></li>
                            <li><a href="#" class="footer-nav-link">Khoá học</a></li>
                            <li><a href="#" class="footer-nav-link">Tin tức</a></li>
                            <li><a href="#" class="footer-nav-link">Liên hệ</a></li>
                        </ul>
                    </div>

                    <!-- Cột 3: Chính sách -->
                    <div class="footer-col footer-col--policy">
                        <h3 class="footer-col-heading">Chính sách</h3>
                        <ul class="footer-nav-list">
                            <li><a href="#" class="footer-nav-link">Chính sách khoá học</a></li>
                            <li><a href="#" class="footer-nav-link">Chính sách thanh toán</a></li>
                            <li><a href="#" class="footer-nav-link">Chính sách chăm sóc</a></li>
                        </ul>
                    </div>

                </div><!-- /.footer-columns -->
            </div><!-- /.footer-info-wrapper -->

            <!-- ===== SECTION 3: Copyright bar ===== -->
            <div class="footer-bottom">
                <div class="footer-divider"></div>
                <p class="footer-copyright">© 2025 HVG.All Rights Reserved.</p>
            </div>

        </div><!-- /.footer-inner -->
    </footer>

<?php wp_footer(); ?>
<script>
    jQuery(function ($) {
        // Accordion Logic cho Questions Section
        $('.accordion-header').on('click', function () {
            const item = $(this).closest('.accordion-item');
            const isActive = item.hasClass('active');

            // Đóng tất cả các item khác
            $('.accordion-item').removeClass('active');
            $('.accordion-item').find('.accordion-icon img').attr('src', '<?php echo get_template_directory_uri(); ?>/assets/plus.svg');

            // Nếu item hiện tại chưa active thì mở nó
            if (!isActive) {
                item.addClass('active');
                $(this).find('.accordion-icon img').attr('src', '<?php echo get_template_directory_uri(); ?>/assets/minus.svg');
            }
        });
    });
</script>
</body>
</html>