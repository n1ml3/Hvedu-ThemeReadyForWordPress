<?php
/**
 * The template for displaying the front page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HVedu
 */

get_header(); ?>

<main>

    <!-- Hero Section -->
    <section class="hero">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/mask-shape 1.svg" alt="" class="hero-bg-shape">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/human.webp" alt="Chuyên gia HVEducation" class="hero-person">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/dot-shape1.svg" alt="decor" class="hero-dot1">

        <div class="hero-content">
            <p class="hero-tagline">Đầu tư cho tương lai của bạn</p>
            <h1 class="hero-title">
                Thực chiến - Toàn diện Training & Coaching <br>
                for <span>Business Development</span>
            </h1>
            <p class="hero-description">
                Thành Công trong kinh doanh không chỉ đến từ nhiệt huyết và giỏi nghề. Thành Công phải được đánh đổi bằng sự Đầu tư, Kiến thức, Kiên trì, Kỷ luật cao và kể cả Thất bại. Chúng tôi CAM KẾT mang lại Kết quả cao gấp 10 lần sự Đầu tư của Công ty bạn.
            </p>
            <a href="#" class="hero-btn">
                Khám phá ngay
                <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow-right-white.svg" alt="">
            </a>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="stats-bg-overlay"></div>
        <div class="container-xxl position-relative" style="z-index: 1;">
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
    <section class="services_course" id="courses">
        <div class="container-xxl">

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
            <img src="<?php echo get_template_directory_uri(); ?>/assets/Ellipse2.svg" alt="" class="ellipse2">
            <div class="ellipse4"></div>
            
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

            <img src="<?php echo get_template_directory_uri(); ?>/assets/Rectangle3.svg" alt="" class="rectangle3">

            <!-- Nút CTA -->
            <div class="services-cta">
                <a href="<?php echo esc_url( home_url('/introduce') ); ?>" class="services-btn">
                    Khám phá ngay
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow-right.svg" alt="">
                </a>
            </div>

            <!-- Tiêu đề course section -->
            <div class="course-header">
                <p class="services-tagline">Kho tàng kiến thức</p>
                <h2 class="services-title">Khoá học phổ biến</h2>
            </div>

            <!-- Slider khoá học -->
            <div class="course-slider">
                <div class="course-list">
                    <?php
                    $courses_static = array(
                        'Khóa huấn luyện "Lập Kế hoạch Kinh doanh Thực chiến hàng năm"',
                        'Khóa học "Xây dựng Hệ thống Vận hành Doanh nghiệp Tự động"',
                        'Chương trình "Coaching Tăng trưởng Doanh thu Đột phá 10x"',
                        'Khóa đào tạo "Quản trị Nhân sự dành cho Quản lý Cấp trung"',
                        'Khóa học "Chiến lược Marketing Thực chiến Kỷ nguyên Số"',
                        'Khóa huấn luyện "Tối ưu hóa Chi phí và Quản trị Tài chính"'
                    );
                    foreach ( $courses_static as $c_title ) :
                    ?>
                        <div class="course-card">
                            <div class="course-thumb">
                                <div class="course-thumb-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/19151.webp" alt="<?php echo esc_attr( $c_title ); ?>">
                                </div>
                                <div class="course-price-badge">
                                    <span class="course-price-old">3.390.000 đ</span>
                                    <span class="course-price-new">2.000.000đ</span>
                                </div>
                            </div>
                            <div class="course-body">
                                <div class="course-meta">
                                    <span class="course-meta-item">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/play.svg" alt="play">
                                        12 bài học
                                    </span>
                                    <span class="course-meta-item">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/camera.svg" alt="camera">
                                        Học qua zoom
                                    </span>
                                </div>
                                <a href="#" class="text-decoration-none text-dark">
                                    <h3 class="course-name"><?php echo esc_html( $c_title ); ?></h3>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Nút CTA khoá học -->
            <div class="course-cta">
                <a href="#" class="course-btn">
                    Xem thêm
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow-right.svg" alt="">
                </a>
            </div>

        </div>
    </section>

    <!-- Documents Section -->
    <section class="documents" id="documents">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/document-bg.png" alt="" class="documents-bg-shape">
        <div class="container-xxl">
            
            <div class="documents-header">
                <p class="documents-tagline">Chất lượng và tận tâm</p>
                <h2 class="documents-title">Tài liệu của chúng tôi</h2>
            </div>

            <div class="documents-grid">
                <div class="document-card">
                    <div class="document-thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/document-thumb.webp" alt="Tài liệu hệ thống BSC">
                    </div>
                    <h3 class="document-name">Tài liệu hệ thống BSC</h3>
                    <div class="document-text">Lorem ipsum dolor amet ex consecturs adipiscing elit sed eiusmod</div>
                    <p class="document-price">Giá: 200.000đ</p>
                </div>
                <div class="document-card">
                    <div class="document-thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/document-thumb.webp" alt="Cẩm nang Vận hành Doanh nghiệp">
                    </div>
                    <h3 class="document-name">Cẩm nang Vận hành Doanh nghiệp</h3>
                    <div class="document-text">Lorem ipsum dolor amet ex consecturs adipiscing elit sed eiusmod</div>
                    <p class="document-price">Giá: 200.000đ</p>
                </div>
                <div class="document-card">
                    <div class="document-thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/document-thumb.webp" alt="Bộ biểu mẫu Quản trị Nhân sự">
                    </div>
                    <h3 class="document-name">Bộ biểu mẫu Quản trị Nhân sự</h3>
                    <div class="document-text">Lorem ipsum dolor amet ex consecturs adipiscing elit sed eiusmod</div>
                    <p class="document-price">Giá: 200.000đ</p>
                </div>
            </div>

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

    <!-- Information Section (Blog News) -->
    <section class="info-section">
        <div class="info-decor">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/checkeredshape.svg" alt="decor">
        </div>
        
        <div class="container-xxl px-4">
            <div class="info-header">
                <p class="info-tagline">Thông tin hữu ích</p>
                <h2 class="info-title">Tin tức và Kiến thức kinh doanh</h2>
            </div>

            <div class="info-grid">
                <div class="info-card">
                    <a href="#" class="info-card-img text-decoration-none d-block overflow-hidden" style="height: 200px;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/peoplegroup.webp" alt="Tin tức mặc định" style="width:100%; height:100%; object-fit:cover;">
                    </a>
                    <div class="info-card-body d-flex flex-column flex-grow-1">
                        <a href="#" class="text-decoration-none text-dark">
                            <h3 class="info-card-title">Hướng dẫn cách viết IELTS Writing task 1 Line Graph chi tiết</h3>
                        </a>
                        
                        <div class="info-card-meta mb-3">
                            <span class="info-meta-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/stash_data-date-solid.svg" alt="Date"> 
                                27/03/2025
                            </span>
                            <span class="info-meta-divider">|</span>
                            <span class="info-meta-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/solar_user-outline.svg" alt="Author"> 
                                HVedu
                            </span>
                        </div>

                        <div class="info-card-desc text-muted mt-auto">
                            Matching Headings (nối tiêu đề) là dạng bài thường xuyên xuất hiện nhất trong đề thi IELTS Reading....
                        </div>
                    </div>
                </div>
                <div class="info-card">
                    <a href="#" class="info-card-img text-decoration-none d-block overflow-hidden" style="height: 200px;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/peoplegroup.webp" alt="Tin tức mặc định" style="width:100%; height:100%; object-fit:cover;">
                    </a>
                    <div class="info-card-body d-flex flex-column flex-grow-1">
                        <a href="#" class="text-decoration-none text-dark">
                            <h3 class="info-card-title">Hướng dẫn cách viết IELTS Writing task 1 Line Graph chi tiết</h3>
                        </a>
                        
                        <div class="info-card-meta mb-3">
                            <span class="info-meta-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/stash_data-date-solid.svg" alt="Date"> 
                                27/03/2025
                            </span>
                            <span class="info-meta-divider">|</span>
                            <span class="info-meta-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/solar_user-outline.svg" alt="Author"> 
                                HVedu
                            </span>
                        </div>

                        <div class="info-card-desc text-muted mt-auto">
                            Matching Headings (nối tiêu đề) là dạng bài thường xuyên xuất hiện nhất trong đề thi IELTS Reading....
                        </div>
                    </div>
                </div>
                <div class="info-card">
                    <a href="#" class="info-card-img text-decoration-none d-block overflow-hidden" style="height: 200px;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/peoplegroup.webp" alt="Tin tức mặc định" style="width:100%; height:100%; object-fit:cover;">
                    </a>
                    <div class="info-card-body d-flex flex-column flex-grow-1">
                        <a href="#" class="text-decoration-none text-dark">
                            <h3 class="info-card-title">Hướng dẫn cách viết IELTS Writing task 1 Line Graph chi tiết</h3>
                        </a>
                        
                        <div class="info-card-meta mb-3">
                            <span class="info-meta-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/stash_data-date-solid.svg" alt="Date"> 
                                27/03/2025
                            </span>
                            <span class="info-meta-divider">|</span>
                            <span class="info-meta-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/solar_user-outline.svg" alt="Author"> 
                                HVedu
                            </span>
                        </div>

                        <div class="info-card-desc text-muted mt-auto">
                            Matching Headings (nối tiêu đề) là dạng bài thường xuyên xuất hiện nhất trong đề thi IELTS Reading....
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<!-- Contact Section -->
<section class="contact-section" id="contact">
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
