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
                        <?php 
                        $img1 = get_theme_mod( 'about_hero_img1' );
                        if ( empty( $img1 ) ) {
                            $img1 = get_template_directory_uri() . '/assets/2148854913.webp';
                        }
                        ?>
                        <img src="<?php echo esc_url( $img1 ); ?>" alt="Về HVG" class="img-fluid rounded-4">
                    </div>
                    <div class="about-img-wrap-2">
                        <?php 
                        $img2 = get_theme_mod( 'about_hero_img2' );
                        if ( empty( $img2 ) ) {
                            $img2 = get_template_directory_uri() . '/assets/84837.webp';
                        }
                        ?>
                        <img src="<?php echo esc_url( $img2 ); ?>" alt="Hợp tác cùng HVG" class="img-fluid rounded-4">
                        <div class="about-stats-box">
                            <p class="stats-box-number"><?php echo esc_html( get_theme_mod( 'about_hero_partner_rate', '96%' ) ); ?></p>
                            <p class="stats-box-text"><?php echo esc_html( get_theme_mod( 'about_hero_partner_lbl', 'Đối tác hài lòng' ) ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="about-hero-content">
                    <p class="about-tagline"><?php echo esc_html( get_theme_mod( 'about_hero_tagline', 'HVEducation' ) ); ?></p>
                    <h1 class="about-title"><?php echo esc_html( get_theme_mod( 'about_hero_title', 'Về Chúng Tôi' ) ); ?></h1>
                    <div class="about-divider"></div>
                    <p class="about-description">
                        <?php echo nl2br( esc_html( get_theme_mod( 'about_hero_desc', 'Công ty Cổ phần Đào tạo & Huấn luyện Phát triển Doanh nghiệp HVG. Chúng tôi hướng tới Thành công cho Khách hàng, cho các học viên và cho chính công ty chúng tôi – đó chính là mối quan hệ WIN – WIN. Các Cổ đông sáng lập đã thành lập nên HVG với tầm nhìn là “Kiến tạo Cộng đồng doanh nghiệp Thịnh vượng thông qua việc Phát triển tư duy và Hệ thống hoàn hảo.' ) ) ); ?>
                        <br><br>
                        <?php 
                        $highlight = get_theme_mod( 'about_hero_highlight', 'Greaten your Big Business by Great System and Yourself' );
                        if ( $highlight ) :
                        ?>
                            <span class="about-description-highlight">
                                <?php echo esc_html( $highlight ); ?>
                            </span>
                        <?php endif; ?>
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
                <h3 class="vision-title"><?php echo esc_html( get_theme_mod( 'about_vision_title', 'Tầm nhìn' ) ); ?></h3>
                <p class="vision-text">
                    <?php echo esc_html( get_theme_mod( 'about_vision_text', 'Kiến tạo cộng đồng doanh nghiệp thịnh vượng thông qua việc phát triển tư duy thực chiến và hệ thống vận hành hoàn hảo nhất.' ) ); ?>
                </p>
            </div>
            <div class="vision-card">
                <div class="vision-icon-placeholder">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Target.svg" alt="Sứ mệnh">
                </div>
                <h3 class="vision-title"><?php echo esc_html( get_theme_mod( 'about_mission_title', 'Sứ mệnh' ) ); ?></h3>
                <p class="vision-text">
                    <?php echo esc_html( get_theme_mod( 'about_mission_text', 'Đồng hành cùng hàng nghìn nhà quản trị Việt Nam, cung cấp giải pháp coaching thực tế mang tính thực dụng cao, giúp doanh nghiệp phát triển bền vững.' ) ); ?>
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
                    Khám phá ngay
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
