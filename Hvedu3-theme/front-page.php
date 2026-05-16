<?php get_header(); ?>
<main>
    <!-- Hero Section -->
        <section class="hero-section">
            <div class="container-xxl px-4">
                <div class="row align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/decor-circle.svg" alt="decor-circle" class="decor-circle">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/decor-cross.svg" alt="decor-cross" class="decor-cross">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/decor-wave.svg" alt="decor-wave" class="decor-wave">
                    <!-- Left Content -->
                    <div class="col-lg-6">
                        <div class="welcome-badge">
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/phone.svg" alt="">
                            </div>
                            <span>Welcome to HVG Education</span>
                        </div>

                        <h1 class="hero-title">Bắt đầu tìm kiếm cơ hội trong tương lai ngay hôm nay</h1>

                        <p class="hero-subtitle">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                            ullamcorper mattis.
                        </p>

                        <div class="hero-search">
                            <input type="text" placeholder="Bạn muốn học gì trong hôm nay?">
                            <button class="btn-search">
                                Tìm kiếm ngay
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>

                        <div class="hero-stats">
                            <div class="stat-item">
                                <div class="stat-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/teaching.svg" alt="">
                                </div>
                                <div class="stat-info">
                                    <span class="count">9.5K+</span>
                                    <span class="label">Total active students taking<br>gifted courses</span>
                                </div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/cert.svg" alt="">
                                </div>
                                <div class="stat-info">
                                    <span class="count">15.5K+</span>
                                    <span class="label">Total active students taking<br>gifted courses</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Content -->
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="hero-image-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/hero-bg 1.webp" alt="Hero Student" class="hero-main-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/hero-bg 2.svg" alt="Hero Student" class="hero-bg-img">
                            <div class="floating-card">
                                <div class="card-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/student-group.svg" alt="">
                                </div>
                                <div>
                                    <span class="count">1000+</span>
                                    <span class="label">Khoá học</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== Khoá học nổi bật ===== -->
        <section class="courses-section">
            <!-- Hình trang trí góc phải — user tự thêm ảnh sau -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/feature-shape-3.png" alt="" class="courses-decor" aria-hidden="true">

            <div class="container-xxl px-4">

                <!-- Header: tiêu đề + nút Xem tất cả -->
                <div class="courses-header">
                    <h2 class="courses-title">Khoá học nổi bật</h2>
                    <a href="#" class="btn-view-all" id="courses-view-all-btn">
                        Xem tất cả
                        <!-- Mũi tên xoay 90deg theo Figma -->
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow-right.svg" alt="">
                    </a>
                </div>

                <!-- Lưới 2x2 card khoá học -->
                <div class="courses-grid">

                    <!-- Card 1 -->
                    <article class="course-card">
                        <div class="course-thumbnail">
                            <!-- Người dùng thêm ảnh thumbnail sau -->
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Rectangle 3.webp" alt="Khoá học WebFlow">
                        </div>
                        <div class="course-body">
                            <span class="course-badge">WebFlow Design</span>
                            <h3 class="course-name">Khoá học WebFlow cho người bắt đầu</h3>
                            <div class="course-meta">
                                <span class="course-meta-tag">
                                    <!-- Icon play — user thêm sau -->
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/play-button.svg" alt="">
                                    12 bài học
                                </span>
                                <span class="course-meta-tag">
                                    <!-- Icon camera — user thêm sau -->
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/camera.svg" alt="">
                                    Học qua zoom
                                </span>
                            </div>
                            <div class="course-instructor">
                                <!-- Avatar giảng viên — user thêm sau -->
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/Ellipse 2.webp" alt="Trần Văn Tú" class="course-instructor-avatar">
                                <div class="course-instructor-info">
                                    <span class="course-instructor-name">Trần Văn Tú</span>
                                    <span class="course-instructor-role">WebFlow Design</span>
                                </div>
                                <!-- Đánh giá sao -->
                                <div class="course-rating">
                                    <!-- Icons sao — user thêm sau -->
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="★">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="★">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="★">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="★">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/star-hollow.svg" alt="½">
                                    <span class="course-rating-score">4,5</span>
                                </div>
                            </div>
                            <hr class="course-divider">
                            <div class="course-footer">
                                <span class="course-price">$99.00</span>
                                <a href="#" class="btn-course-detail">Xem chi tiết</a>
                            </div>
                        </div>
                    </article>

                    <!-- Card 2 -->
                    <article class="course-card">
                        <div class="course-thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Rectangle 3.webp" alt="Khoá học WebFlow">
                        </div>
                        <div class="course-body">
                            <span class="course-badge">WebFlow Design</span>
                            <h3 class="course-name">Khoá học WebFlow cho người bắt đầu</h3>
                            <div class="course-meta">
                                <span class="course-meta-tag">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/play-button.svg" alt="">
                                    12 bài học
                                </span>
                                <span class="course-meta-tag">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/camera.svg" alt="">
                                    Học qua zoom
                                </span>
                            </div>
                            <div class="course-instructor">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/Ellipse 2.webp" alt="Trần Văn Tú" class="course-instructor-avatar">
                                <div class="course-instructor-info">
                                    <span class="course-instructor-name">Trần Văn Tú</span>
                                    <span class="course-instructor-role">WebFlow Design</span>
                                </div>
                                <div class="course-rating">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="★">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="★">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="★">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="★">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/star-hollow.svg" alt="½">
                                    <span class="course-rating-score">4,5</span>
                                </div>
                            </div>
                            <hr class="course-divider">
                            <div class="course-footer">
                                <span class="course-price">$99.00</span>
                                <a href="#" class="btn-course-detail">Xem chi tiết</a>
                            </div>
                        </div>
                    </article>

                    <!-- Card 3 -->
                    <article class="course-card">
                        <div class="course-thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Rectangle 3.webp" alt="Khoá học WebFlow">
                        </div>
                        <div class="course-body">
                            <span class="course-badge">WebFlow Design</span>
                            <h3 class="course-name">Khoá học WebFlow cho người bắt đầu</h3>
                            <div class="course-meta">
                                <span class="course-meta-tag">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/play-button.svg" alt="">
                                    12 bài học
                                </span>
                                <span class="course-meta-tag">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/camera.svg" alt="">
                                    Học qua zoom
                                </span>
                            </div>
                            <div class="course-instructor">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/Ellipse 2.webp" alt="Trần Văn Tú" class="course-instructor-avatar">
                                <div class="course-instructor-info">
                                    <span class="course-instructor-name">Trần Văn Tú</span>
                                    <span class="course-instructor-role">WebFlow Design</span>
                                </div>
                                <div class="course-rating">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="★">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="★">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="★">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="★">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/star-hollow.svg" alt="½">
                                    <span class="course-rating-score">4,5</span>
                                </div>
                            </div>
                            <hr class="course-divider">
                            <div class="course-footer">
                                <span class="course-price">$99.00</span>
                                <a href="#" class="btn-course-detail">Xem chi tiết</a>
                            </div>
                        </div>
                    </article>

                    <!-- Card 4 -->
                    <article class="course-card">
                        <div class="course-thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Rectangle 3.webp" alt="Khoá học WebFlow">
                        </div>
                        <div class="course-body">
                            <span class="course-badge">WebFlow Design</span>
                            <h3 class="course-name">Khoá học WebFlow cho người bắt đầu</h3>
                            <div class="course-meta">
                                <span class="course-meta-tag">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/play-button.svg" alt="">
                                    12 bài học
                                </span>
                                <span class="course-meta-tag">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/camera.svg" alt="">
                                    Học qua zoom
                                </span>
                            </div>
                            <div class="course-instructor">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/Ellipse 2.webp" alt="Trần Văn Tú" class="course-instructor-avatar">
                                <div class="course-instructor-info">
                                    <span class="course-instructor-name">Trần Văn Tú</span>
                                    <span class="course-instructor-role">WebFlow Design</span>
                                </div>
                                <div class="course-rating">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="★">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="★">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="★">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="★">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/star-hollow.svg" alt="½">
                                    <span class="course-rating-score">4,5</span>
                                </div>
                            </div>
                            <hr class="course-divider">
                            <div class="course-footer">
                                <span class="course-price">$99.00</span>
                                <a href="#" class="btn-course-detail">Xem chi tiết</a>
                            </div>
                        </div>
                    </article>

                </div><!-- /.courses-grid -->
            </div><!-- /.container-xxl -->
        </section>

        <!-- ===== Khám phá các danh mục hàng đầu ===== -->
        <section class="categories-section">
            <div class="container-xxl px-4">

                <div class="categories-wrapper">
                    <!-- Header: Nút Xem tất cả -->
                    <div class="categories-header">
                        <a href="#" class="btn-view-all">
                            Xem tất cả
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/solar_arrow-up-linear.svg" alt="">
                        </a>
                    </div>

                    <!-- Lưới 5 cột -->
                    <div class="categories-grid">

                        <!-- Card 1 -->
                        <a href="#" class="category-card">
                            <div class="category-icon-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/about-feature-1 1.svg" alt="" class="icon-main">
                            </div>
                            <h3 class="category-title">UI/UX<br>Design Service</h3>
                            <div class="category-arrow-btn">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/solar_arrow-up-linear.svg" alt="" class="arrow-icon">
                            </div>
                        </a>

                        <!-- Card 2 -->
                        <a href="#" class="category-card">
                            <div class="category-icon-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/feature-3 1.svg" alt="" class="icon-main">
                            </div>
                            <h3 class="category-title">Digital<br>Marketing</h3>
                            <div class="category-arrow-btn">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/solar_arrow-up-linear.svg" alt="" class="arrow-icon">
                            </div>
                        </a>

                        <!-- Card 3 -->
                        <a href="#" class="category-card">
                            <div class="category-icon-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/feature-5 1.svg" alt="" class="icon-main">
                            </div>
                            <h3 class="category-title">Software<br>Developer</h3>
                            <div class="category-arrow-btn">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/solar_arrow-up-linear.svg" alt="" class="arrow-icon">
                            </div>
                        </a>

                        <!-- Card 4 -->
                        <a href="#" class="category-card">
                            <div class="category-icon-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/feature-3 1.svg" alt="" class="icon-main">
                            </div>
                            <h3 class="category-title">Digital<br>Marketing</h3>
                            <div class="category-arrow-btn">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/solar_arrow-up-linear.svg" alt="" class="arrow-icon">
                            </div>
                        </a>

                        <!-- Card 5 -->
                        <a href="#" class="category-card">
                            <div class="category-icon-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/feature-3 1.svg" alt="" class="icon-main">
                            </div>
                            <h3 class="category-title">Digital<br>Marketing</h3>
                            <div class="category-arrow-btn">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/solar_arrow-up-linear.svg" alt="" class="arrow-icon">
                            </div>
                        </a>

                    </div> <!-- /.categories-grid -->
                </div> <!-- /.categories-wrapper -->

                <!-- Welcome Badge (theo thiết kế ở dưới cùng) -->
                <div style="text-align: center;">
                    <div class="welcome-badge" style="border: 1px solid #e9ecef; background: #fff; margin-bottom: 0;">
                        <div class="icon" style="background: #E1FBFF;">
                            <!-- Icon sấm sét (lightning) — user có thể thay thế icon svg -->
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/rivet-icons_lightning.svg" alt="">
                        </div>
                        <span>Welcome to HVG Education</span>
                    </div>
                </div>

            </div> <!-- /.container-xxl -->
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="cta-background"></div>

            <div class="container-xxl px-4 cta-container">
                <div class="cta-content">
                    <h2 class="cta-title">Ưu đãi 50% cho học viên và giảng viên đầu tiên đăng ký</h2>
                    <p class="cta-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper
                        mattis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                        ullamcorper mattisLorem
                    </p>
                    <div class="cta-actions">
                        <a href="#" class="btn-cta btn-solid">
                            Đăng ký học ngay
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow-right.svg" alt="" class="btn-icon">
                        </a>
                        <a href="#" class="btn-cta btn-outline">
                            Trở thành giảng viên
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow-right-green.svg" alt="" class="btn-icon">
                        </a>
                    </div>
                </div>
            </div>

            <!-- Thành phần trang trí - User sẽ thêm ảnh sau -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/dot_decor.svg" alt="" class="cta-decor-dots">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/cta-shape-2 1.svg" alt="" class="cta-shape">
        </section>


        <!-- Questions Section -->
        <section class="questions-section">
            <div class="container-xxl px-4">
                <div class="row align-items-center">
                    <!-- Left content: Image Collage -->
                    <div class="col-lg-6">
                        <div class="questions-collage">
                            <!-- Background Images - User sẽ thêm ảnh thực tế sau -->
                            <div class="collage-item img-large">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/hinh2.webp" alt="">
                            </div>
                            <div class="collage-item img-small-top">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/hinh3.webp" alt="">
                            </div>
                            <div class="collage-item img-small-bottom">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/hinh1.webp" alt="">
                            </div>

                            <!-- Instructor Floating Card -->
                            <div class="instructor-card">
                                <h3 class="card-title">Instructor</h3>
                                <div class="card-body">
                                    <div class="avatar-group">
                                        <div class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/assets/Ellipse 2.webp" alt=""></div>
                                        <div class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/assets/ball2.webp" alt=""></div>
                                        <div class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/assets/ball3.webp" alt=""></div>
                                        <div class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/assets/ball4.webp" alt=""></div>
                                        <div class="avatar-plus">+</div>
                                    </div>
                                    <div class="instructor-stats">
                                        <span class="count">100+</span>
                                        <span class="label">Instructor</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right content: Questions Accordion -->
                    <div class="col-lg-6">
                        <div class="questions-header">
                            <h2 class="section-title">Những câu hỏi thường gặp ?</h2>
                        </div>
                        <div class="questions-accordion">
                            <!-- Câu hỏi 1 (Active) -->
                            <div class="accordion-item active">
                                <div class="accordion-header">
                                    <h3 class="question-text">Độ tuổi nào có thể tham gia chương trình học tại trung
                                        tâm?</h3>
                                    <div class="accordion-icon">
                                        <div class="icon-bg"></div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/minus.svg" alt="-" class="minus-icon">
                                    </div>
                                </div>
                                <div class="accordion-content">
                                    <p class="answer-text">Trung tâm có chương trình dạy từ 3- mọi độ tuổi với các
                                        chương trình được thiết kế phù hợp theo từng giai đoạn phát triển, giúp trẻ tiếp
                                        thu kiến thức và kỹ năng một cách tự nhiên nhất.</p>
                                </div>
                            </div>

                            <!-- Câu hỏi 2 -->
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3 class="question-text">Chương trình đào tạo HVG?</h3>
                                    <div class="accordion-icon">
                                        <div class="icon-bg"></div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/plus.svg" alt="+" class="plus-icon">
                                    </div>
                                </div>
                                <div class="accordion-content">
                                    <p class="answer-text">Thông tin chi tiết về chương trình đào tạo sẽ được cập nhật
                                        sớm nhất.</p>
                                </div>
                            </div>

                            <!-- Câu hỏi 3 -->
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3 class="question-text">Các quyền lợi khi học các khoá học tại HVG?</h3>
                                    <div class="accordion-icon">
                                        <div class="icon-bg"></div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/plus.svg" alt="+" class="plus-icon">
                                    </div>
                                </div>
                                <div class="accordion-content">
                                    <p class="answer-text">Thông tin chi tiết về quyền lợi học viên sẽ được cập nhật sớm
                                        nhất.</p>
                                </div>
                            </div>

                            <!-- Câu hỏi 4 -->
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3 class="question-text">Đăng ký như thế nào?</h3>
                                    <div class="accordion-icon">
                                        <div class="icon-bg"></div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/plus.svg" alt="+" class="plus-icon">
                                    </div>
                                </div>
                                <div class="accordion-content">
                                    <p class="answer-text">Bạn có thể đăng ký trực tuyến qua website hoặc liên hệ
                                        hotline để được hướng dẫn.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="testimonials-section">
            <div class="container-xxl px-4 testimonials-container">
                <!-- Decorative Elements -->
                <div class="testimonials-decor decor-x">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/cross-white.svg" alt="" style="width: 100%">
                </div>
                <div class="testimonials-decor decor-dots">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/dot-decor.svg" alt="" style="width: 100%; opacity: 0.5;">
                </div>

                <div class="testimonials-badge-wrapper">
                    <div class="testimonials-badge">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/rivet-icons_lightning.svg" alt="" class="badge-icon">
                        <p class="badge-text">Welcome to HVG Education</p>
                    </div>
                </div>

                <h2 class="testimonials-title">Học viên nói gì về các khoá học tại HVG</h2>

                <div class="testimonials-grid">
                    <!-- Testimonial 1 -->
                    <div class="testimonial-card">
                        <p class="testimonial-quote">
                            “Sau 3 tháng học Giáo dục sớm tại trung tâm, con tôi đã có sự tiến bộ rõ rệt. Bé chủ động
                            khám phá, học chữ và số một cách tự nhiên. Giáo trình rất khoa học và thú vị. Nhờ đó, mình
                            đạt điểm cao hơn hẳn so với trước đây!"
                        </p>
                        <div class="testimonial-author">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Ellipse 12.webp" alt="Trần Đức Anh" class="author-avatar">
                            <div class="author-info">
                                <h4 class="author-name">Trần Đức Anh</h4>
                                <span class="author-role">Học viên khoá UI/UX</span>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="testimonial-card">
                        <p class="testimonial-quote">
                            “Sau 3 tháng học Giáo dục sớm tại trung tâm, con tôi đã có sự tiến bộ rõ rệt. Bé chủ động
                            khám phá, học chữ và số một cách tự nhiên. Giáo trình rất khoa học và thú vị. Nhờ đó, mình
                            đạt điểm cao hơn hẳn so với trước đây!"
                        </p>
                        <div class="testimonial-author">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Ellipse 12.webp" alt="Trần Đức Anh" class="author-avatar">
                            <div class="author-info">
                                <h4 class="author-name">Trần Đức Anh</h4>
                                <span class="author-role">Học viên khoá UI/UX</span>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="testimonial-card">
                        <p class="testimonial-quote">
                            “Sau 3 tháng học Giáo dục sớm tại trung tâm, con tôi đã có sự tiến bộ rõ rệt. Bé chủ động
                            khám phá, học chữ và số một cách tự nhiên. Giáo trình rất khoa học và thú vị. Nhờ đó, mình
                            đạt điểm cao hơn hẳn so với trước đây!"
                        </p>
                        <div class="testimonial-author">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Ellipse 12.webp" alt="Trần Đức Anh" class="author-avatar">
                            <div class="author-info">
                                <h4 class="author-name">Trần Đức Anh</h4>
                                <span class="author-role">Học viên khoá UI/UX</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Blog & Kiến thức bổ ích Section -->
        <section class="blog-section">
            <div class="container-xxl px-4">
                <h2 class="blog-title">Blog & kiến thức bổ ích</h2>

                <div class="blog-grid">
                    <!-- Blog Card 1 -->
                    <article class="blog-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/boich-banner.webp" alt="Blog Image" class="blog-image">
                        <div class="blog-content">
                            <h3 class="blog-card-title">7 Món Ăn Healthy Dễ Làm Cho Người Bận Rộn</h3>
                            <p class="blog-excerpt">
                                Không cần chuẩn bị phức tạp hay mất hàng giờ trong bếp, bạn vẫn có thể nạp năng lượng
                                sạch, lành mạnh...
                            </p>
                            <div class="blog-footer">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/lets-icons_date-fill.svg" alt="" class="blog-date-icon">
                                <span class="blog-date">27/03/2025</span>
                            </div>
                        </div>
                    </article>

                    <!-- Blog Card 2 -->
                    <article class="blog-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/boich-banner.webp" alt="Blog Image" class="blog-image">
                        <div class="blog-content">
                            <h3 class="blog-card-title">7 Món Ăn Healthy Dễ Làm Cho Người Bận Rộn</h3>
                            <p class="blog-excerpt">
                                Không cần chuẩn bị phức tạp hay mất hàng giờ trong bếp, bạn vẫn có thể nạp năng lượng
                                sạch, lành mạnh...
                            </p>
                            <div class="blog-footer">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/lets-icons_date-fill.svg" alt="" class="blog-date-icon">
                                <span class="blog-date">27/03/2025</span>
                            </div>
                        </div>
                    </article>

                    <!-- Blog Card 3 -->
                    <article class="blog-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/boich-banner.webp" alt="Blog Image" class="blog-image">
                        <div class="blog-content">
                            <h3 class="blog-card-title">7 Món Ăn Healthy Dễ Làm Cho Người Bận Rộn</h3>
                            <p class="blog-excerpt">
                                Không cần chuẩn bị phức tạp hay mất hàng giờ trong bếp, bạn vẫn có thể nạp năng lượng
                                sạch, lành mạnh...
                            </p>
                            <div class="blog-footer">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/lets-icons_date-fill.svg" alt="" class="blog-date-icon">
                                <span class="blog-date">27/03/2025</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
</main>
<?php get_footer(); ?>