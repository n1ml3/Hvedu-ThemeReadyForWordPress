<?php
/**
 * The template for displaying the front page for Theme 3.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HVedu3
 */

get_header(); ?>

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
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.
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
                                <span class="label">
                                    Total active students taking<br>gifted courses
                                </span>
                            </div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/cert.svg" alt="">
                            </div>
                            <div class="stat-info">
                                <span class="count">15.5K+</span>
                                <span class="label">
                                    Total active students taking<br>gifted courses
                                </span>
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
    <section class="courses-section" id="courses">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/feature-shape-3.png" alt="" class="courses-decor" aria-hidden="true">

        <div class="container-xxl px-4">
            <!-- Header: tiêu đề + nút Xem tất cả -->
            <div class="courses-header">
                <h2 class="courses-title">Khoá học nổi bật</h2>
                <a href="#" class="btn-view-all" id="courses-view-all-btn">
                    Xem tất cả
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow-right.svg" alt="">
                </a>
            </div>

            <!-- Lưới card khoá học -->
            <div class="courses-grid">
                <?php
                $courses_data = array(
                    array(
                        'title' => 'Khoá học WebFlow cho người bắt đầu',
                        'badge' => 'WebFlow Design',
                        'lessons' => '12',
                        'method' => 'Học qua zoom',
                        'inst_name' => 'Trần Văn Tú',
                        'inst_role' => 'WebFlow Design',
                        'rating' => '4.5',
                        'price' => '$99.00'
                    ),
                    array(
                        'title' => 'Lập trình React Native nâng cao từ số 0',
                        'badge' => 'Mobile Dev',
                        'lessons' => '12',
                        'method' => 'Học qua zoom',
                        'inst_name' => 'Trần Văn Tú',
                        'inst_role' => 'WebFlow Design',
                        'rating' => '4.5',
                        'price' => '$99.00'
                    ),
                    array(
                        'title' => 'Thiết kế đồ họa chuyên nghiệp với Figma',
                        'badge' => 'UI/UX Design',
                        'lessons' => '12',
                        'method' => 'Học qua zoom',
                        'inst_name' => 'Trần Văn Tú',
                        'inst_role' => 'WebFlow Design',
                        'rating' => '4.5',
                        'price' => '$99.00'
                    ),
                    array(
                        'title' => 'Marketing Online thực chiến tăng doanh số',
                        'badge' => 'Digital Marketing',
                        'lessons' => '12',
                        'method' => 'Học qua zoom',
                        'inst_name' => 'Trần Văn Tú',
                        'inst_role' => 'WebFlow Design',
                        'rating' => '4.5',
                        'price' => '$99.00'
                    ),
                );
                foreach ( $courses_data as $course ) :
                ?>
                    <article class="course-card">
                        <div class="course-thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Rectangle 3.webp" alt="<?php echo esc_attr( $course['title'] ); ?>">
                        </div>
                        <div class="course-body">
                            <span class="course-badge"><?php echo esc_html( $course['badge'] ); ?></span>
                            <a href="#" class="text-decoration-none text-dark">
                                <h3 class="course-name"><?php echo esc_html( $course['title'] ); ?></h3>
                            </a>
                            <div class="course-meta">
                                <span class="course-meta-tag">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/play-button.svg" alt="">
                                    <?php echo esc_html( $course['lessons'] ); ?> bài học
                                </span>
                                <span class="course-meta-tag">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/camera.svg" alt="">
                                    <?php echo esc_html( $course['method'] ); ?>
                                </span>
                            </div>
                            <div class="course-instructor">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/Ellipse 2.webp" alt="<?php echo esc_attr( $course['inst_name'] ); ?>" class="course-instructor-avatar">
                                <div class="course-instructor-info">
                                    <span class="course-instructor-name"><?php echo esc_html( $course['inst_name'] ); ?></span>
                                    <span class="course-instructor-role"><?php echo esc_html( $course['inst_role'] ); ?></span>
                                </div>
                                
                                <div class="course-rating">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="★">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="★">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="★">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/star.svg" alt="★">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/star-hollow.svg" alt="☆">
                                    <span class="course-rating-score"><?php echo esc_html( $course['rating'] ); ?></span>
                                </div>
                            </div>
                            <hr class="course-divider">
                            <div class="course-footer">
                                <span class="course-price"><?php echo esc_html( $course['price'] ); ?></span>
                                <a href="#" class="btn-course-detail">Xem chi tiết</a>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ===== Khám phá các danh mục hàng đầu ===== -->
    <section class="categories-section" id="categories">
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
                    <?php 
                    $categories_data = array(
                        array( 'title' => 'UI/UX Design Service', 'icon' => 'about-feature-1 1.svg' ),
                        array( 'title' => 'Digital Marketing', 'icon' => 'feature-3 1.svg' ),
                        array( 'title' => 'Software Developer', 'icon' => 'feature-5 1.svg' ),
                        array( 'title' => 'Product Management', 'icon' => 'feature-3 1.svg' ),
                        array( 'title' => 'Data Analysis', 'icon' => 'feature-3 1.svg' ),
                    );

                    foreach ( $categories_data as $cat ) :
                    ?>
                        <a href="#" class="category-card">
                            <div class="category-icon-wrapper">
                                <img src="<?php echo get_template_directory_uri() . '/assets/' . $cat['icon']; ?>" alt="" class="icon-main">
                            </div>
                            <h3 class="category-title"><?php echo nl2br( esc_html( $cat['title'] ) ); ?></h3>
                            <div class="category-arrow-btn">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/solar_arrow-up-linear.svg" alt="" class="arrow-icon">
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Welcome Badge -->
            <div style="text-align: center;">
                <div class="welcome-badge" style="border: 1px solid #e9ecef; background: #fff; margin-bottom: 0;">
                    <div class="icon" style="background: #E1FBFF;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/rivet-icons_lightning.svg" alt="">
                    </div>
                    <span>Welcome to HVG Education</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="cta-background"></div>

        <div class="container-xxl px-4 cta-container">
            <div class="cta-content">
                <h2 class="cta-title">Ưu đãi 50% cho học viên và giảng viên đầu tiên đăng ký</h2>
                <p class="cta-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis Lorem ipsum dolor sit amet, consectetur adipiscing elit.
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

        <img src="<?php echo get_template_directory_uri(); ?>/assets/dot_decor.svg" alt="" class="cta-decor-dots">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/cta-shape-2 1.svg" alt="" class="cta-shape">
    </section>

    <!-- Questions Section -->
    <section class="questions-section" id="questions">
        <div class="container-xxl px-4">
            <div class="row align-items-center">
                <!-- Left content: Image Collage -->
                <div class="col-lg-6">
                    <div class="questions-collage">
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
                        <?php
                        $faqs_data = array(
                            array(
                                'q' => 'Độ tuổi nào có thể tham gia chương trình học tại trung tâm?',
                                'a' => 'Trung tâm có chương trình dạy từ 3- mọi độ tuổi với các chương trình được thiết kế phù hợp theo từng giai đoạn phát triển, giúp trẻ tiếp thu kiến thức và kỹ năng một cách tự nhiên nhất.'
                            ),
                            array(
                                'q' => 'Chương trình đào tạo HVG?',
                                'a' => 'Thông tin chi tiết về chương trình đào tạo sẽ được cập nhật sớm nhất.'
                            ),
                            array(
                                'q' => 'Các quyền lợi khi học các khoá học tại HVG?',
                                'a' => 'Thông tin chi tiết về quyền lợi học viên sẽ được cập nhật sớm nhất.'
                            ),
                            array(
                                'q' => 'Đăng ký như thế nào?',
                                'a' => 'Bạn có thể đăng ký trực tuyến qua website hoặc liên hệ hotline để được hướng dẫn.'
                            )
                        );
                        foreach ( $faqs_data as $idx => $faq ) :
                            $is_active = ( $idx === 0 );
                        ?>
                            <div class="accordion-item <?php echo $is_active ? 'active' : ''; ?>">
                                <div class="accordion-header">
                                    <h3 class="question-text"><?php echo esc_html( $faq['q'] ); ?></h3>
                                    <div class="accordion-icon">
                                        <div class="icon-bg"></div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/<?php echo $is_active ? 'minus.svg' : 'plus.svg'; ?>" alt="<?php echo $is_active ? '-' : '+'; ?>" class="<?php echo $is_active ? 'minus-icon' : 'plus-icon'; ?>">
                                    </div>
                                </div>
                                <div class="accordion-content">
                                    <div class="answer-text"><?php echo esc_html( $faq['a'] ); ?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section" id="testimonials">
        <div class="container-xxl px-4 testimonials-container">
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
                <div class="testimonial-card">
                    <p class="testimonial-quote">
                        “Sau 3 tháng học Giáo dục sớm tại trung tâm, con tôi đã có sự tiến bộ rõ rệt. Bé chủ động khám phá, học chữ và số một cách tự nhiên. Giáo trình rất khoa học và thú vị. Nhờ đó, mình đạt điểm cao hơn hẳn so với trước đây!"
                    </p>
                    <div class="testimonial-author">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/Ellipse 12.webp" alt="Avatar" class="author-avatar">
                        <div class="author-info">
                            <h4 class="author-name">Trần Đức Anh</h4>
                            <span class="author-role">Học viên khoá UI/UX</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <p class="testimonial-quote">
                        “Sau 3 tháng học Giáo dục sớm tại trung tâm, con tôi đã có sự tiến bộ rõ rệt. Bé chủ động khám phá, học chữ và số một cách tự nhiên. Giáo trình rất khoa học và thú vị. Nhờ đó, mình đạt điểm cao hơn hẳn so với trước đây!"
                    </p>
                    <div class="testimonial-author">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/Ellipse 12.webp" alt="Avatar" class="author-avatar">
                        <div class="author-info">
                            <h4 class="author-name">Trần Đức Anh</h4>
                            <span class="author-role">Học viên khoá UI/UX</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <p class="testimonial-quote">
                        “Sau 3 tháng học Giáo dục sớm tại trung tâm, con tôi đã có sự tiến bộ rõ rệt. Bé chủ động khám phá, học chữ và số một cách tự nhiên. Giáo trình rất khoa học và thú vị. Nhờ đó, mình đạt điểm cao hơn hẳn so với trước đây!"
                    </p>
                    <div class="testimonial-author">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/Ellipse 12.webp" alt="Avatar" class="author-avatar">
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
    <section class="blog-section" id="blog">
        <div class="container-xxl px-4">
            <h2 class="blog-title">Blog & kiến thức bổ ích</h2>

            <div class="blog-grid">
                <?php for ( $i = 1; $i <= 3; $i++ ) : ?>
                    <article class="blog-card d-flex flex-column">
                        <a href="#" class="d-block overflow-hidden" style="height: 220px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/boich-banner.webp" alt="Blog Title" class="blog-image w-100 h-100 object-fit-cover">
                        </a>
                        <div class="blog-content d-flex flex-column flex-grow-1">
                            <a href="#" class="text-decoration-none">
                                <h3 class="blog-card-title text-dark">Hướng dẫn cách viết IELTS Writing task 1 Line Graph chi tiết</h3>
                            </a>
                            <div class="blog-excerpt text-muted mt-3 mb-4">
                                Matching Headings (nối tiêu đề) là dạng bài thường xuyên xuất hiện nhất trong đề thi IELTS Reading....
                            </div>
                            <div class="blog-footer pt-3 mt-auto" style="border-top: 1px solid #eee;">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/lets-icons_date-fill.svg" alt="" class="blog-date-icon">
                                <span class="blog-date">27/03/2025</span>
                            </div>
                        </div>
                    </article>
                <?php endfor; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>