<?php
/*
Template Name: Introduce Page
*/
get_header(); ?>

<!-- Intro Page -->
<!-- Hero Section -->
<section class="about-hero">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <!-- Image composition -->
                <div class="about-hero-images">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/MS425 1.svg" alt="Về HVG" class="about-decor">
                    <div class="about-img-wrap-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/2148854913.webp" alt="Về HVG" class="img-fluid rounded-4">
                    </div>
                    <div class="about-img-wrap-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/84837.webp" alt="Hợp tác cùng HVG" class="img-fluid rounded-4">
                        <div class="about-stats-box">
                            <p class="stats-box-number">96%</p>
                            <p class="stats-box-text">Đối tác hài lòng</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="about-hero-content">
                    <p class="about-tagline">HVEducation</p>
                    <h1 class="about-title">Về Chúng Tôi</h1>
                    <div class="about-divider"></div>
                    <p class="about-description">
                        Công ty Cổ phần Đào tạo & Huấn luyện Phát triển Doanh nghiệp HVG. Chúng tôi hướng tới Thành công cho Khách hàng, cho các học viên và cho chính công ty chúng tôi – đó chính là mối quan hệ WIN – WIN. Các Cổ đông sáng lập đã thành lập nên HVG với tầm nhìn là “Kiến tạo Cộng đồng doanh nghiệp Thịnh vượng thông qua việc Phát triển tư duy và Hệ thống hoàn hảo.
                        <br><br>
                        <span class="about-description-highlight">
                            Greaten your Big Business by Great System and Yourself
                        </span>
                    </p>
                    <a href="#about-contact-section" class="hero-btn about-btn">
                        Đăng ký tư vấn
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow-right.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats">
    <div class="stats-bg-overlay"></div>
    <div class="container-xxl px-4 position-relative" style="z-index: 1;">
        <div class="d-flex flex-wrap align-items-center justify-content-around row-gap-4">

            <div class="stat-item text-center">
                <p class="stat-number">100+</p>
                <p class="stat-label">
                    <strong>Giảng viên</strong> chuyên nghiệp
                </p>
            </div>
            <div class="stat-divider d-none d-lg-block"></div>
            <div class="stat-item text-center">
                <p class="stat-number">1.2k</p>
                <p class="stat-label">
                    <strong>Khoá học</strong> nhiều lĩnh vực
                </p>
            </div>
            <div class="stat-divider d-none d-lg-block"></div>
            <div class="stat-item text-center">
                <p class="stat-number">96%</p>
                <p class="stat-label">
                    <strong>Đánh giá</strong> hài lòng
                </p>
            </div>
            <div class="stat-divider d-none d-lg-block"></div>
            <div class="stat-item text-center">
                <p class="stat-number">10.5k</p>
                <p class="stat-label">
                    <strong>Cộng đồng</strong> học viên
                </p>
            </div>

        </div>
    </div>
</section>

<!-- Service Section -->
<section class="services_course">
    <div class="container-xxl px-4">

        <div class="services-header">
            <p class="services-tagline">Hướng tới tương lai</p>
            <h2 class="services-title">Tầm nhìn và Sứ mệnh</h2>
        </div>

        <div class="vision-mission-grid mb-5">
            <div class="vision-card">
                <div class="vision-icon-placeholder">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/online-marketing 1.svg" alt="Tầm nhìn">
                </div>
                <h3 class="vision-title">Tầm nhìn</h3>
                <p class="vision-text">
                    Kiến tạo cộng đồng doanh nghiệp thịnh vượng thông qua việc phát triển tư duy thực chiến và hệ thống vận hành hoàn hảo nhất.
                </p>
            </div>
            <div class="vision-card">
                <div class="vision-icon-placeholder">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Target.svg" alt="Sứ mệnh">
                </div>
                <h3 class="vision-title">Sứ mệnh</h3>
                <p class="vision-text">
                    Đồng hành cùng hàng nghìn nhà quản trị Việt Nam, cung cấp giải pháp coaching thực tế mang tính thực dụng cao, giúp doanh nghiệp phát triển bền vững.
                </p>
            </div>
        </div>

        <!-- Tiêu đề services section -->
        <div class="services-header">
            <p class="services-tagline">Chất lượng và tận tâm</p>
            <h2 class="services-title">Dịch vụ của chúng tôi</h2>
            <p class="services-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporincididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrue
            </p>
        </div>

        <img src="<?php echo get_template_directory_uri(); ?>/assets/checkeredshape.svg" alt="" class="checkeredshape">
        <div class="ellipse5"></div>

        <!-- Lưới dịch vụ -->
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/head.svg" class="service-icon" alt="Chiến lược kinh doanh">
                </div>
                <div class="service-info">
                    <h3 class="service-name">Chiến lược kinh doanh</h3>
                    <div class="service-text">Lorem ipsum dolor amet ex consectetur adipiscing elit sed eiusmod</div>
                </div>
            </div>
            <div class="service-card">
                <div class="service-icon-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/hand.svg" class="service-icon" alt="Quản lý dự án">
                </div>
                <div class="service-info">
                    <h3 class="service-name">Quản lý dự án</h3>
                    <div class="service-text">Lorem ipsum dolor amet ex consectetur adipiscing elit sed eiusmod</div>
                </div>
            </div>
            <div class="service-card">
                <div class="service-icon-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/group.svg" class="service-icon" alt="Quản trị nhân lực">
                </div>
                <div class="service-info">
                    <h3 class="service-name">Quản trị nhân lực</h3>
                    <div class="service-text">Lorem ipsum dolor amet ex consectetur adipiscing elit sed eiusmod</div>
                </div>
            </div>
            <div class="service-card">
                <div class="service-icon-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/head.svg" class="service-icon" alt="Tư vấn Chuyển đổi số">
                </div>
                <div class="service-info">
                    <h3 class="service-name">Tư vấn Chuyển đổi số</h3>
                    <div class="service-text">Lorem ipsum dolor amet ex consectetur adipiscing elit sed eiusmod</div>
                </div>
            </div>
            <div class="service-card">
                <div class="service-icon-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/hand.svg" class="service-icon" alt="Huấn luyện Lãnh đạo">
                </div>
                <div class="service-info">
                    <h3 class="service-name">Huấn luyện Lãnh đạo</h3>
                    <div class="service-text">Lorem ipsum dolor amet ex consectetur adipiscing elit sed eiusmod</div>
                </div>
            </div>
            <div class="service-card">
                <div class="service-icon-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/group.svg" class="service-icon" alt="Quản trị Tài chính">
                </div>
                <div class="service-info">
                    <h3 class="service-name">Quản trị Tài chính</h3>
                    <div class="service-text">Lorem ipsum dolor amet ex consectetur adipiscing elit sed eiusmod</div>
                </div>
            </div>
        </div>

        <img src="<?php echo get_template_directory_uri(); ?>/assets/checkeredshape.svg" alt="" class="checkeredshape-2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/Rectangle3.svg" alt="" class="rectangle3">

        <!-- Nút CTA -->
        <div class="services-cta">
            <a href="#about-contact-section" class="services-btn">
                Khám phá ngay
                <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow-right.svg" alt="">
            </a>
        </div>
</section>

<!-- Expert Section -->
<section class="expert">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/decor.svg" alt="" class="expert-decor">

    <div class="container-xxl px-4">
        <div class="expert-container">
            <!-- Text Content -->
            <div class="expert-content">
                <p class="expert-tagline">Kinh nghiệm nhiều năm</p>
                <h2 class="expert-title">Chuyên gia Đào tạo của HVG</h2>
                <p class="expert-desc">
                    Với kinh nghiệm Thực chiến và đa dạng được tích lũy qua quá trình Xây dựng, Vận hành Doanh nghiệp, Coaching... Các Nhà huấn luyện tại HVG tự tin là những Coach, Business Coach đồng hành xuất sắc và mang lại Giá trị cao hơn khoản đầu tư của Công ty Khách hàng.
                </p>
                <a href="#" class="expert-btn">
                    Khám phá ngay
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow-right.svg" alt="arrow">
                </a>
            </div>

            <!-- Image Content -->
            <div class="expert-image-section">
                <div class="expert-image-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/person2.webp" alt="Chuyên gia HVG" class="expert-image">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/Groupline.svg" alt="" class="testimonials-decor">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/Groupdot.svg" alt="" class="testimonials-decor2">

    <div class="container-xxl px-4">
        <div class="testimonials-container">

            <!-- Left Content -->
            <div class="testimonials-content">
                <p class="testimonials-tagline">Khách hàng thân thiết</p>
                <h2 class="testimonials-title">Khách hàng nói gì về chúng tôi</h2>
                <p class="testimonials-desc">
                    Lorem ipsum dolor amet ex consecturs adipiscing elit sed eiusmod
                </p>

                <!-- Navigation Arrows -->
                <div class="testimonials-nav">
                    <button class="testimonials-nav-btn" aria-label="Previous">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/leftarrow.svg" alt="arrow">
                    </button>
                    <button class="testimonials-nav-btn" aria-label="Next">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/rightarrow.svg" alt="arrow">
                    </button>
                </div>
            </div>

            <!-- Right Cards -->
            <div class="testimonials-cards">
                <div class="testimonial-item">
                    <div class="testimonial-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/logo-02 1.svg" alt="Logo" class="testimonial-logo">
                        <div class="testimonial-text">
                            Chương trình Huấn luyện chuyên sâu và đồng hành do HVG tổ chức cho công ty chúng tôi vô cùng sát thực và hữu ích. Các Giám Đốc, quản lý và bản thân tôi đã nhận được rất nhiều kiến thức, giá trị thực tiễn và phân tích chuyên sâu.
                        </div>
                        <div class="testimonial-stars">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="Star">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="Star">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="Star">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="Star">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="Star">
                        </div>
                    </div>
                    <div class="testimonial-solar_user-outline">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/ball1.webp" alt="Avatar" class="testimonial-avatar">
                        <div class="testimonial-solar_user-outline-info">
                            <h4 class="testimonial-name">Trần Minh Hiếu</h4>
                            <p class="testimonial-role">Giám đốc công ty FPA</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/logo-01 1.svg" alt="Logo" class="testimonial-logo">
                        <div class="testimonial-text">
                            Chương trình Huấn luyện chuyên sâu và đồng hành do HVG tổ chức cho công ty chúng tôi vô cùng sát thực và hữu ích. Các Giám Đốc, quản lý và bản thân tôi đã nhận được rất nhiều kiến thức, giá trị thực tiễn và phân tích chuyên sâu.
                        </div>
                        <div class="testimonial-stars">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="Star">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="Star">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="Star">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="Star">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="Star">
                        </div>
                    </div>
                    <div class="testimonial-solar_user-outline">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/ball2.webp" alt="Avatar" class="testimonial-avatar">
                        <div class="testimonial-solar_user-outline-info">
                            <h4 class="testimonial-name">Nguyễn Minh Chíe</h4>
                            <p class="testimonial-role">Giám đốc công ty E-learning</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section" id="about-contact-section">
    <div class="container-xxl px-4">
        <div class="contact-container">

            <!-- Left Column -->
            <div class="contact-left">
                <div class="contact-header">
                    <div class="contact-header-border"></div>
                    <div class="contact-header-text">
                        <p class="contact-subtitle">Hỗ Trợ Nhanh Chóng & Chuyên Nghiệp</p>
                        <h2 class="contact-title">Liên hệ tư vấn với HVG</h2>
                    </div>
                </div>
                <p class="contact-desc">
                    Để nhận tư vấn sản phẩm và liên hệ hợp tác, quý khách vui lòng điền thông tin vào form!
                </p>

                <div class="contact-divider"></div>

                <div class="contact-info">
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/location.svg" alt="Địa chỉ">
                        </div>
                        <span><strong>Địa chỉ:</strong> 33 Trung Kính, Cầu Giấy, Hà Nội</span>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/phone.svg" alt="Hotline">
                        </div>
                        <span><strong>Hotline:</strong> Mobile: (+84)96311800</span>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/mail.svg" alt="Email">
                        </div>
                        <span><strong>Email:</strong> demo1@gmail.com</span>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="contact-right">
                <form class="contact-form">
                    <div class="contact-form-row">
                        <input type="text" class="contact-input" placeholder="Tên của bạn" required>
                        <input type="tel" class="contact-input" placeholder="Số điện thoại" required>
                    </div>
                    
                    <select class="contact-select" required>
                        <option value="" disabled selected>Chọn dịch vụ bạn quan tâm</option>
                        <option value="Chiến lược kinh doanh">Chiến lược kinh doanh</option>
                        <option value="Quản lý dự án">Quản lý dự án</option>
                        <option value="Quản trị nhân lực">Quản trị nhân lực</option>
                        <option value="Tư vấn Chuyển đổi số">Tư vấn Chuyển đổi số</option>
                        <option value="Huấn luyện Lãnh đạo">Huấn luyện Lãnh đạo</option>
                        <option value="Quản trị Tài chính">Quản trị Tài chính</option>
                    </select>
                    
                    <textarea class="contact-textarea" placeholder="Nếu có yêu cầu cụ thể, quý khách hãy nêu rõ"></textarea>

                    <div class="contact-form-actions">
                        <button type="submit" class="contact-btn contact-btn-primary">
                            Hãy tư vấn cho tôi
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/smallarrow.svg" alt="arrow" style="margin-left: 8px;">
                        </button>
                        <span class="contact-or">(HOẶC)</span>
                        <a href="https://zalo.me/012354789" target="_blank" class="contact-btn contact-btn-outline text-decoration-none d-flex align-items-center justify-content-center">
                            ZALO - 012354789
                        </a>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>
