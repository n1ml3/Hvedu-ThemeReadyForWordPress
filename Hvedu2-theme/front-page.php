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
        <?php 
        $hero_image = get_theme_mod( 'hero_image' );
        if ( empty( $hero_image ) ) {
            $hero_image = get_template_directory_uri() . '/assets/human.webp';
        }
        ?>
        <img src="<?php echo esc_url( $hero_image ); ?>" alt="Chuyên gia HVEducation" class="hero-person">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/dot-shape1.svg" alt="decor" class="hero-dot1">

        <div class="hero-content">
            <p class="hero-tagline"><?php echo esc_html( get_theme_mod( 'hero_tagline', 'Đầu tư cho tương lai của bạn' ) ); ?></p>
            <h1 class="hero-title">
                <?php 
                echo wp_kses( 
                    nl2br( get_theme_mod( 'hero_title', "Thực chiến - Toàn diện Training & Coaching <br>\n for <span>Business Development</span>" ) ), 
                    array( 'br' => array(), 'span' => array() ) 
                ); 
                ?>
            </h1>
            <p class="hero-description">
                <?php echo esc_html( get_theme_mod( 'hero_desc', 'Thành Công trong kinh doanh không chỉ đến từ nhiệt huyết và giỏi nghề. Thành Công phải được đánh đổi bằng sự Đầu tư, Kiến thức, Kiên trì, Kỷ luật cao và kể cả Thất bại. Chúng tôi CAM KẾT mang lại Kết quả cao gấp 10 lần sự Đầu tư của Công ty bạn.' ) ); ?>
            </p>
            <?php 
            $hero_btn_text = get_theme_mod( 'hero_btn_text', 'Khám phá ngay' );
            $hero_btn_link = get_theme_mod( 'hero_btn_link', '#' );
            ?>
            <a href="<?php echo esc_url( $hero_btn_link ); ?>" class="hero-btn">
                <?php echo esc_html( $hero_btn_text ); ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow-right-white.svg" alt="">
            </a>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="stats-bg-overlay"></div>
        <div class="container-xxl position-relative" style="z-index: 1;">
            <div class="d-flex flex-wrap align-items-center justify-content-around row-gap-4">

                <?php 
                $default_labels = array(
                    1 => '<strong>Giảng viên</strong> chuyên nghiệp',
                    2 => '<strong>Khoá học</strong> nhiều lĩnh vực',
                    3 => '<strong>Đánh giá</strong> hài lòng',
                    4 => '<strong>Cộng đồng</strong> học viên'
                );
                $default_numbers = array(
                    1 => '100+',
                    2 => '1.2k',
                    3 => '96%',
                    4 => '10.5k'
                );

                for ( $i = 1; $i <= 4; $i++ ) :
                    $stat_num = get_theme_mod( "stat{$i}_num", $default_numbers[$i] );
                    $stat_lbl = get_theme_mod( "stat{$i}_lbl", $default_labels[$i] );
                    
                    if ( $i > 1 ) {
                        echo '<div class="stat-divider d-none d-lg-block"></div>';
                    }
                ?>
                    <div class="stat-item text-center">
                        <p class="stat-number"><?php echo esc_html( $stat_num ); ?></p>
                        <p class="stat-label">
                            <?php echo wp_kses( $stat_lbl, array( 'strong' => array(), 'b' => array() ) ); ?>
                        </p>
                    </div>
                <?php endfor; ?>

            </div>
        </div>
    </section>

    <!-- Service Section -->
    <section class="services_course">
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
                <?php 
                $services_query = new WP_Query( array(
                    'post_type'      => 'hvedu_service',
                    'posts_per_page' => 6,
                    'post_status'    => 'publish',
                ) );

                if ( $services_query->have_posts() ) :
                    $loop_idx = 0;
                    while ( $services_query->have_posts() ) : $services_query->the_post();
                ?>
                        <div class="service-card">
                            <div class="service-icon-wrapper">
                                <?php 
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail( 'thumbnail', array( 'class' => 'service-icon' ) );
                                } else {
                                    $icons = array( 'head.svg', 'hand.svg', 'group.svg' );
                                    $icon = $icons[ $loop_idx % 3 ];
                                    echo '<img src="' . get_template_directory_uri() . '/assets/' . $icon . '" class="service-icon" alt="' . esc_attr( get_the_title() ) . '">';
                                }
                                ?>
                            </div>
                            <div class="service-info">
                                <h3 class="service-name"><?php the_title(); ?></h3>
                                <div class="service-text"><?php the_excerpt(); ?></div>
                            </div>
                        </div>
                <?php 
                    $loop_idx++;
                    endwhile;
                    wp_reset_postdata();
                else :
                ?>
                    <p class="w-100 text-center py-5">Hiện chưa có dịch vụ nào.</p>
                <?php endif; ?>
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
                    $courses_query = new WP_Query( array(
                        'post_type'      => 'hvedu_course',
                        'posts_per_page' => 12,
                        'post_status'    => 'publish',
                    ) );

                    if ( $courses_query->have_posts() ) :
                        while ( $courses_query->have_posts() ) : $courses_query->the_post();
                            $old_price = get_post_meta( get_the_ID(), '_course_old_price', true );
                            $price = get_post_meta( get_the_ID(), '_course_price', true );
                            $lessons = get_post_meta( get_the_ID(), '_course_lessons', true );
                            $method = get_post_meta( get_the_ID(), '_course_method', true );
                    ?>
                            <div class="course-card">
                                <div class="course-thumb">
                                    <div class="course-thumb-img">
                                        <?php 
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'medium_large', array( 'alt' => get_the_title() ) );
                                        } else {
                                            echo '<img src="' . get_template_directory_uri() . '/assets/19151.webp" alt="' . esc_attr( get_the_title() ) . '">';
                                        }
                                        ?>
                                    </div>
                                    <?php if ( $old_price || $price ) : ?>
                                        <div class="course-price-badge">
                                            <?php if ( $old_price ) : ?><span class="course-price-old"><?php echo esc_html( $old_price ); ?></span><?php endif; ?>
                                            <?php if ( $price ) : ?><span class="course-price-new"><?php echo esc_html( $price ); ?></span><?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="course-body">
                                    <div class="course-meta">
                                        <span class="course-meta-item">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/play.svg" alt="play">
                                            <?php echo esc_html( $lessons ? $lessons : '12' ); ?> bài học
                                        </span>
                                        <span class="course-meta-item">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/camera.svg" alt="camera">
                                            <?php echo esc_html( $method ? $method : 'Học qua zoom' ); ?>
                                        </span>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark">
                                        <h3 class="course-name"><?php the_title(); ?></h3>
                                    </a>
                                </div>
                            </div>
                    <?php 
                        endwhile;
                        wp_reset_postdata();
                    else :
                    ?>
                        <p class="w-100 text-center py-5">Hiện chưa có khóa học nào.</p>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Nút CTA khoá học -->
            <div class="course-cta">
                <a href="<?php echo esc_url( home_url('/courses') ); ?>" class="course-btn">
                    Xem thêm
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow-right.svg" alt="">
                </a>
            </div>

        </div>
    </section>

    <!-- Documents Section -->
    <section class="documents">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/document-bg.png" alt="" class="documents-bg-shape">
        <div class="container-xxl">
            
            <div class="documents-header">
                <p class="documents-tagline">Chất lượng và tận tâm</p>
                <h2 class="documents-title">Tài liệu của chúng tôi</h2>
            </div>

            <div class="documents-grid">
                <?php 
                $docs_query = new WP_Query( array(
                    'post_type'      => 'hvedu_document',
                    'posts_per_page' => 3,
                    'post_status'    => 'publish',
                ) );

                if ( $docs_query->have_posts() ) :
                    while ( $docs_query->have_posts() ) : $docs_query->the_post();
                        $doc_price = get_post_meta( get_the_ID(), '_document_price', true );
                ?>
                        <div class="document-card">
                            <div class="document-thumb">
                                <?php 
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail( 'medium', array( 'alt' => get_the_title() ) );
                                } else {
                                    echo '<img src="' . get_template_directory_uri() . '/assets/document-thumb.webp" alt="' . esc_attr( get_the_title() ) . '">';
                                }
                                ?>
                            </div>
                            <h3 class="document-name"><?php the_title(); ?></h3>
                            <div class="document-text"><?php the_excerpt(); ?></div>
                            <?php if ( $doc_price ) : ?>
                                <p class="document-price"><?php echo esc_html( $doc_price ); ?></p>
                            <?php endif; ?>
                        </div>
                <?php 
                    endwhile;
                    wp_reset_postdata();
                else :
                ?>
                    <p class="w-100 text-center py-5">Hiện chưa có tài liệu nào.</p>
                <?php endif; ?>
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
                    <p class="expert-tagline"><?php echo esc_html( get_theme_mod( 'expert_tagline', 'Kinh nghiệm nhiều năm' ) ); ?></p>
                    <h2 class="expert-title"><?php echo esc_html( get_theme_mod( 'expert_title', 'Chuyên gia Đào tạo của HVG' ) ); ?></h2>
                    <p class="expert-desc">
                        <?php echo esc_html( get_theme_mod( 'expert_desc', 'Với kinh nghiệm Thực chiến và đa dạng được tích lũy qua quá trình Xây dựng, Vận hành Doanh nghiệp, Coaching... Các Nhà huấn luyện tại HVG tự tin là những Coach, Business Coach đồng hành xuất sắc và mang lại Giá trị cao hơn khoản đầu tư của Công ty Khách hàng.' ) ); ?>
                    </p>
                    <?php 
                    $expert_btn_text = get_theme_mod( 'expert_btn_text', 'Khám phá ngay' );
                    $expert_btn_link = get_theme_mod( 'expert_btn_link', '#' );
                    ?>
                    <a href="<?php echo esc_url( $expert_btn_link ); ?>" class="expert-btn">
                        <?php echo esc_html( $expert_btn_text ); ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow-right.svg" alt="arrow">
                    </a>
                </div>
                
                <!-- Image Content -->
                <div class="expert-image-section">
                    <div class="expert-image-wrapper">
                        <?php 
                        $expert_image = get_theme_mod( 'expert_image' );
                        if ( empty( $expert_image ) ) {
                            $expert_image = get_template_directory_uri() . '/assets/person2.webp';
                        }
                        ?>
                        <img src="<?php echo esc_url( $expert_image ); ?>" alt="Chuyên gia HVG" class="expert-image">
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
                    <?php 
                    $testimonials_query = new WP_Query( array(
                        'post_type'      => 'hvedu_testimonial',
                        'posts_per_page' => 10,
                        'post_status'    => 'publish',
                    ) );

                    if ( $testimonials_query->have_posts() ) :
                        $loop_idx = 0;
                        while ( $testimonials_query->have_posts() ) : $testimonials_query->the_post();
                            $role = get_post_meta( get_the_ID(), '_testimonial_role', true );
                            $rating = (int) get_post_meta( get_the_ID(), '_testimonial_rating', true );
                            $logo = get_post_meta( get_the_ID(), '_testimonial_logo', true );
                            
                            if ( ! $rating ) $rating = 5;
                    ?>
                            <div class="testimonial-item">
                                <div class="testimonial-card">
                                    <?php 
                                    if ( $logo ) {
                                        $logo_url = ( filter_var( $logo, FILTER_VALIDATE_URL ) ) ? $logo : get_template_directory_uri() . '/assets/' . $logo;
                                        echo '<img src="' . esc_url( $logo_url ) . '" alt="Logo" class="testimonial-logo">';
                                    }
                                    ?>
                                    <div class="testimonial-text">
                                        <?php the_content(); ?>
                                    </div>
                                    <div class="testimonial-stars">
                                        <?php 
                                        for ( $s = 0; $s < $rating; $s++ ) {
                                            echo '<img src="' . get_template_directory_uri() . '/assets/star.svg" alt="Star">';
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="testimonial-solar_user-outline">
                                    <?php 
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail( 'thumbnail', array( 'class' => 'testimonial-avatar', 'alt' => get_the_title() ) );
                                    } else {
                                        $avatar_num = ( $loop_idx % 2 == 0 ) ? '1' : '2';
                                        echo '<img src="' . get_template_directory_uri() . '/assets/ball' . $avatar_num . '.webp" alt="Avatar" class="testimonial-avatar">';
                                    }
                                    ?>
                                    <div class="testimonial-solar_user-outline-info">
                                        <h4 class="testimonial-name"><?php the_title(); ?></h4>
                                        <?php if ( $role ) : ?>
                                            <p class="testimonial-role"><?php echo esc_html( $role ); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                    <?php 
                        $loop_idx++;
                        endwhile;
                        wp_reset_postdata();
                    else :
                    ?>
                        <p class="w-100 text-center py-5">Hiện chưa có đánh giá nào.</p>
                    <?php endif; ?>
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
                <?php
                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 3,
                    'post_status'    => 'publish',
                );
                $latest_posts = new WP_Query( $args );

                if ( $latest_posts->have_posts() ) :
                    while ( $latest_posts->have_posts() ) : $latest_posts->the_post(); 
                ?>
                        <div class="info-card">
                            <a href="<?php the_permalink(); ?>" class="info-card-img text-decoration-none d-block overflow-hidden" style="height: 200px;">
                                <?php 
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('medium', array('alt' => get_the_title(), 'style' => 'width:100%; height:100%; object-fit:cover;'));
                                } else {
                                    echo '<img src="' . get_template_directory_uri() . '/assets/peoplegroup.webp" alt="Tin tức mặc định" style="width:100%; height:100%; object-fit:cover;">';
                                }
                                ?>
                            </a>
                            <div class="info-card-body d-flex flex-column flex-grow-1">
                                <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark">
                                    <h3 class="info-card-title"><?php the_title(); ?></h3>
                                </a>
                                
                                <div class="info-card-meta mb-3">
                                    <span class="info-meta-item">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/stash_data-date-solid.svg" alt="Date"> 
                                        <?php echo get_the_date('d/m/Y'); ?>
                                    </span>
                                    <span class="info-meta-divider">|</span>
                                    <span class="info-meta-item">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/solar_user-outline.svg" alt="Author"> 
                                        <?php the_author(); ?>
                                    </span>
                                </div>

                                <div class="info-card-desc text-muted mt-auto">
                                    <?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?>
                                </div>
                            </div>
                        </div>
                <?php 
                    endwhile; 
                    wp_reset_postdata();
                else : 
                ?>
                    <p class="w-100 text-center py-5">Hiện chưa có bài viết nào.</p>
                <?php 
                endif; 
                ?>
            </div>
        </div>
    </section>

</main>

<!-- Contact Section -->
<section class="contact-section">
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
                        <span><strong>Địa chỉ:</strong> <?php echo esc_html( get_theme_mod( 'contact_address', '33 Trung Kính, Cầu Giấy, Hà Nội' ) ); ?></span>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/phone.svg" alt="Hotline">
                        </div>
                        <span><strong>Hotline:</strong> <?php echo esc_html( get_theme_mod( 'contact_phone', 'Mobile: (+84)96311800' ) ); ?></span>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/mail.svg" alt="Email">
                        </div>
                        <span><strong>Email:</strong> <?php echo esc_html( get_theme_mod( 'contact_email', 'demo1@gmail.com' ) ); ?></span>
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
                        <?php 
                        $services_query = new WP_Query( array(
                            'post_type'      => 'hvedu_service',
                            'posts_per_page' => -1,
                            'post_status'    => 'publish',
                        ) );
                        if ( $services_query->have_posts() ) :
                            while ( $services_query->have_posts() ) : $services_query->the_post();
                                echo '<option value="' . esc_attr( get_the_title() ) . '">' . esc_html( get_the_title() ) . '</option>';
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </select>
                    
                    <textarea class="contact-textarea" placeholder="Nếu có yêu cầu cụ thể, quý khách hãy nêu rõ"></textarea>
                    
                    <div class="contact-form-actions">
                        <button type="submit" class="contact-btn contact-btn-primary">
                            Hãy tư vấn cho tôi
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/smallarrow.svg" alt="arrow" style="margin-left: 8px;">
                        </button>
                        <span class="contact-or">(HOẶC)</span>
                        <?php 
                        $zalo = get_theme_mod( 'contact_zalo', '012354789' );
                        ?>
                        <a href="https://zalo.me/<?php echo esc_attr( preg_replace('/\D/', '', $zalo) ); ?>" target="_blank" class="contact-btn contact-btn-outline text-decoration-none d-flex align-items-center justify-content-center">
                            ZALO - <?php echo esc_html( $zalo ); ?>
                        </a>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>
