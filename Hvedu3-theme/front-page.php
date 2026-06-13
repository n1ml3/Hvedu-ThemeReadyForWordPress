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
                        <span><?php echo esc_html( get_theme_mod( 'hero_tagline', 'Welcome to HVG Education' ) ); ?></span>
                    </div>

                    <h1 class="hero-title"><?php echo esc_html( get_theme_mod( 'hero_title', 'Bắt đầu tìm kiếm cơ hội trong tương lai ngay hôm nay' ) ); ?></h1>

                    <p class="hero-subtitle">
                        <?php echo esc_html( get_theme_mod( 'hero_subtitle', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.' ) ); ?>
                    </p>

                    <div class="hero-search">
                        <input type="text" placeholder="<?php echo esc_attr( get_theme_mod( 'hero_search_placeholder', 'Bạn muốn học gì trong hôm nay?' ) ); ?>">
                        <button class="btn-search">
                            <?php echo esc_html( get_theme_mod( 'hero_search_btn', 'Tìm kiếm ngay' ) ); ?>
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
                                <span class="count"><?php echo esc_html( get_theme_mod( 'hero_stat1_count', '9.5K+' ) ); ?></span>
                                <span class="label">
                                    <?php echo wp_kses( get_theme_mod( 'hero_stat1_lbl', 'Total active students taking<br>gifted courses' ), array( 'br' => array() ) ); ?>
                                </span>
                            </div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/cert.svg" alt="">
                            </div>
                            <div class="stat-info">
                                <span class="count"><?php echo esc_html( get_theme_mod( 'hero_stat2_count', '15.5K+' ) ); ?></span>
                                <span class="label">
                                    <?php echo wp_kses( get_theme_mod( 'hero_stat2_lbl', 'Total active students taking<br>gifted courses' ), array( 'br' => array() ) ); ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Content -->
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="hero-image-wrapper">
                        <?php 
                        $hero_main_img = get_theme_mod( 'hero_main_img' );
                        if ( empty( $hero_main_img ) ) {
                            $hero_main_img = get_template_directory_uri() . '/assets/hero-bg 1.webp';
                        }
                        $hero_bg_img = get_theme_mod( 'hero_bg_img' );
                        if ( empty( $hero_bg_img ) ) {
                            $hero_bg_img = get_template_directory_uri() . '/assets/hero-bg 2.svg';
                        }
                        ?>
                        <img src="<?php echo esc_url( $hero_main_img ); ?>" alt="Hero Student" class="hero-main-img">
                        <img src="<?php echo esc_url( $hero_bg_img ); ?>" alt="Hero Student" class="hero-bg-img">
                        <div class="floating-card">
                            <div class="card-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/student-group.svg" alt="">
                            </div>
                            <div>
                                <span class="count"><?php echo esc_html( get_theme_mod( 'hero_float_count', '1000+' ) ); ?></span>
                                <span class="label"><?php echo esc_html( get_theme_mod( 'hero_float_lbl', 'Khoá học' ) ); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== Khoá học nổi bật ===== -->
    <section class="courses-section">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/feature-shape-3.png" alt="" class="courses-decor" aria-hidden="true">

        <div class="container-xxl px-4">
            <!-- Header: tiêu đề + nút Xem tất cả -->
            <div class="courses-header">
                <h2 class="courses-title">Khoá học nổi bật</h2>
                <a href="<?php echo esc_url( home_url('/courses') ); ?>" class="btn-view-all" id="courses-view-all-btn">
                    Xem tất cả
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow-right.svg" alt="">
                </a>
            </div>

            <!-- Lưới card khoá học -->
            <div class="courses-grid">
                <?php 
                $courses_query = new WP_Query( array(
                    'post_type'      => 'hvedu3_course',
                    'posts_per_page' => 4,
                    'post_status'    => 'publish',
                ) );

                if ( $courses_query->have_posts() ) :
                    while ( $courses_query->have_posts() ) : $courses_query->the_post();
                        $badge       = get_post_meta( get_the_ID(), '_course_badge', true );
                        $lessons     = get_post_meta( get_the_ID(), '_course_lessons', true );
                        $method      = get_post_meta( get_the_ID(), '_course_method', true );
                        $inst_name   = get_post_meta( get_the_ID(), '_course_instructor_name', true );
                        $inst_role   = get_post_meta( get_the_ID(), '_course_instructor_role', true );
                        $inst_avatar = get_post_meta( get_the_ID(), '_course_instructor_avatar', true );
                        $rating      = get_post_meta( get_the_ID(), '_course_rating', true );
                        $price       = get_post_meta( get_the_ID(), '_course_price', true );
                ?>
                        <article class="course-card">
                            <div class="course-thumbnail">
                                <?php 
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail( 'medium_large', array( 'alt' => get_the_title() ) );
                                } else {
                                    echo '<img src="' . get_template_directory_uri() . '/assets/Rectangle 3.webp" alt="' . esc_attr( get_the_title() ) . '">';
                                }
                                ?>
                            </div>
                            <div class="course-body">
                                <?php if ( $badge ) : ?>
                                    <span class="course-badge"><?php echo esc_html( $badge ); ?></span>
                                <?php endif; ?>
                                <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark">
                                    <h3 class="course-name"><?php the_title(); ?></h3>
                                </a>
                                <div class="course-meta">
                                    <span class="course-meta-tag">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/play-button.svg" alt="">
                                        <?php echo esc_html( $lessons ? $lessons : '12' ); ?> bài học
                                    </span>
                                    <span class="course-meta-tag">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/camera.svg" alt="">
                                        <?php echo esc_html( $method ? $method : 'Học qua zoom' ); ?>
                                    </span>
                                </div>
                                <div class="course-instructor">
                                    <?php 
                                    $avatar_url = ( $inst_avatar && filter_var( $inst_avatar, FILTER_VALIDATE_URL ) ) ? $inst_avatar : ( $inst_avatar ? get_template_directory_uri() . '/assets/' . $inst_avatar : get_template_directory_uri() . '/assets/Ellipse 2.webp' );
                                    ?>
                                    <img src="<?php echo esc_url( $avatar_url ); ?>" alt="<?php echo esc_attr( $inst_name ); ?>" class="course-instructor-avatar">
                                    <div class="course-instructor-info">
                                        <span class="course-instructor-name"><?php echo esc_html( $inst_name ?: 'Trần Văn Tú' ); ?></span>
                                        <span class="course-instructor-role"><?php echo esc_html( $inst_role ?: 'WebFlow Design' ); ?></span>
                                    </div>
                                    
                                    <?php if ( $rating ) : ?>
                                        <div class="course-rating">
                                            <?php 
                                            $stars = round( floatval( str_replace(',', '.', $rating) ) );
                                            for ( $s = 0; $s < 5; $s++ ) {
                                                if ( $s < $stars ) {
                                                    echo '<img src="' . get_template_directory_uri() . '/assets/star.svg" alt="★">';
                                                } else {
                                                    echo '<img src="' . get_template_directory_uri() . '/assets/star-hollow.svg" alt="☆">';
                                                }
                                            }
                                            ?>
                                            <span class="course-rating-score"><?php echo esc_html( $rating ); ?></span>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <hr class="course-divider">
                                <div class="course-footer">
                                    <span class="course-price"><?php echo esc_html( $price ?: '$99.00' ); ?></span>
                                    <a href="<?php the_permalink(); ?>" class="btn-course-detail">Xem chi tiết</a>
                                </div>
                            </div>
                        </article>
                <?php 
                    endwhile;
                    wp_reset_postdata();
                else :
                ?>
                    <p class="w-100 text-center py-5">Hiện chưa có khóa học nào.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- ===== Khám phá các danh mục hàng đầu ===== -->
    <section class="categories-section">
        <div class="container-xxl px-4">
            <div class="categories-wrapper">
                <!-- Header: Nút Xem tất cả -->
                <div class="categories-header">
                    <a href="<?php echo esc_url( home_url('/categories') ); ?>" class="btn-view-all">
                        Xem tất cả
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/solar_arrow-up-linear.svg" alt="">
                    </a>
                </div>

                <!-- Lưới 5 cột -->
                <div class="categories-grid">
                    <?php 
                    $cats_query = new WP_Query( array(
                        'post_type'      => 'hvedu3_category',
                        'posts_per_page' => 5,
                        'post_status'    => 'publish',
                    ) );

                    if ( $cats_query->have_posts() ) :
                        while ( $cats_query->have_posts() ) : $cats_query->the_post();
                            $icon = get_post_meta( get_the_ID(), '_category_icon', true );
                            $link = get_post_meta( get_the_ID(), '_category_link', true );
                            $icon_url = ( $icon && filter_var( $icon, FILTER_VALIDATE_URL ) ) ? $icon : ( $icon ? get_template_directory_uri() . '/assets/' . $icon : get_template_directory_uri() . '/assets/about-feature-1 1.svg' );
                    ?>
                            <a href="<?php echo esc_url( $link ?: '#' ); ?>" class="category-card">
                                <div class="category-icon-wrapper">
                                    <img src="<?php echo esc_url( $icon_url ); ?>" alt="" class="icon-main">
                                </div>
                                <h3 class="category-title"><?php echo nl2br( esc_html( get_the_title() ) ); ?></h3>
                                <div class="category-arrow-btn">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/solar_arrow-up-linear.svg" alt="" class="arrow-icon">
                                </div>
                            </a>
                    <?php 
                        endwhile;
                        wp_reset_postdata();
                    else :
                    ?>
                        <p class="w-100 text-center py-5">Hiện chưa có danh mục nào.</p>
                    <?php endif; ?>
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
                <h2 class="cta-title"><?php echo esc_html( get_theme_mod( 'cta_title', 'Ưu đãi 50% cho học viên và giảng viên đầu tiên đăng ký' ) ); ?></h2>
                <p class="cta-description">
                    <?php echo esc_html( get_theme_mod( 'cta_desc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis Lorem ipsum dolor sit amet, consectetur adipiscing elit.' ) ); ?>
                </p>
                <div class="cta-actions">
                    <?php 
                    $btn1_text = get_theme_mod( 'cta_btn1_text', 'Đăng ký học ngay' );
                    $btn1_link = get_theme_mod( 'cta_btn1_link', '#' );
                    $btn2_text = get_theme_mod( 'cta_btn2_text', 'Trở thành giảng viên' );
                    $btn2_link = get_theme_mod( 'cta_btn2_link', '#' );
                    ?>
                    <a href="<?php echo esc_url( $btn1_link ); ?>" class="btn-cta btn-solid">
                        <?php echo esc_html( $btn1_text ); ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow-right.svg" alt="" class="btn-icon">
                    </a>
                    <a href="<?php echo esc_url( $btn2_link ); ?>" class="btn-cta btn-outline">
                        <?php echo esc_html( $btn2_text ); ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow-right-green.svg" alt="" class="btn-icon">
                    </a>
                </div>
            </div>
        </div>

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
                        <?php 
                        $faq_img_large = get_theme_mod( 'faq_img_large' );
                        if ( empty( $faq_img_large ) ) {
                            $faq_img_large = get_template_directory_uri() . '/assets/hinh2.webp';
                        }
                        $faq_img_small_top = get_theme_mod( 'faq_img_small_top' );
                        if ( empty( $faq_img_small_top ) ) {
                            $faq_img_small_top = get_template_directory_uri() . '/assets/hinh3.webp';
                        }
                        $faq_img_small_bottom = get_theme_mod( 'faq_img_small_bottom' );
                        if ( empty( $faq_img_small_bottom ) ) {
                            $faq_img_small_bottom = get_template_directory_uri() . '/assets/hinh1.webp';
                        }
                        ?>
                        <div class="collage-item img-large">
                            <img src="<?php echo esc_url( $faq_img_large ); ?>" alt="">
                        </div>
                        <div class="collage-item img-small-top">
                            <img src="<?php echo esc_url( $faq_img_small_top ); ?>" alt="">
                        </div>
                        <div class="collage-item img-small-bottom">
                            <img src="<?php echo esc_url( $faq_img_small_bottom ); ?>" alt="">
                        </div>

                        <!-- Instructor Floating Card -->
                        <div class="instructor-card">
                            <h3 class="card-title"><?php echo esc_html( get_theme_mod( 'faq_float_title', 'Instructor' ) ); ?></h3>
                            <div class="card-body">
                                <div class="avatar-group">
                                    <div class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/assets/Ellipse 2.webp" alt=""></div>
                                    <div class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/assets/ball2.webp" alt=""></div>
                                    <div class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/assets/ball3.webp" alt=""></div>
                                    <div class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/assets/ball4.webp" alt=""></div>
                                    <div class="avatar-plus">+</div>
                                </div>
                                <div class="instructor-stats">
                                    <span class="count"><?php echo esc_html( get_theme_mod( 'faq_float_count', '100+' ) ); ?></span>
                                    <span class="label"><?php echo esc_html( get_theme_mod( 'faq_float_lbl', 'Instructor' ) ); ?></span>
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
                        $faqs_query = new WP_Query( array(
                            'post_type'      => 'hvedu3_faq',
                            'posts_per_page' => -1,
                            'post_status'    => 'publish',
                        ) );

                        if ( $faqs_query->have_posts() ) :
                            $faq_idx = 0;
                            while ( $faqs_query->have_posts() ) : $faqs_query->the_post();
                                $is_active = ( $faq_idx === 0 );
                        ?>
                                <div class="accordion-item <?php echo $is_active ? 'active' : ''; ?>">
                                    <div class="accordion-header">
                                        <h3 class="question-text"><?php the_title(); ?></h3>
                                        <div class="accordion-icon">
                                            <div class="icon-bg"></div>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/<?php echo $is_active ? 'minus.svg' : 'plus.svg'; ?>" alt="<?php echo $is_active ? '-' : '+'; ?>" class="<?php echo $is_active ? 'minus-icon' : 'plus-icon'; ?>">
                                        </div>
                                    </div>
                                    <div class="accordion-content">
                                        <div class="answer-text"><?php the_content(); ?></div>
                                    </div>
                                </div>
                        <?php 
                            $faq_idx++;
                            endwhile;
                            wp_reset_postdata();
                        else :
                        ?>
                            <p class="w-100 py-3">Không có câu hỏi nào.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
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
                <?php 
                $testimonials_query = new WP_Query( array(
                    'post_type'      => 'hvedu3_testimonial',
                    'posts_per_page' => 3,
                    'post_status'    => 'publish',
                ) );

                if ( $testimonials_query->have_posts() ) :
                    while ( $testimonials_query->have_posts() ) : $testimonials_query->the_post();
                        $role = get_post_meta( get_the_ID(), '_testimonial_role', true );
                ?>
                        <div class="testimonial-card">
                            <p class="testimonial-quote">
                                <?php echo esc_html( get_the_content() ); ?>
                            </p>
                            <div class="testimonial-author">
                                <?php 
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail( 'thumbnail', array( 'class' => 'author-avatar', 'alt' => get_the_title() ) );
                                } else {
                                    echo '<img src="' . get_template_directory_uri() . '/assets/Ellipse 12.webp" alt="Avatar" class="author-avatar">';
                                }
                                ?>
                                <div class="author-info">
                                    <h4 class="author-name"><?php the_title(); ?></h4>
                                    <span class="author-role"><?php echo esc_html( $role ? $role : 'Học viên khoá UI/UX' ); ?></span>
                                </div>
                            </div>
                        </div>
                <?php 
                    endwhile;
                    wp_reset_postdata();
                else :
                ?>
                    <p class="w-100 text-center py-5 text-white">Chưa có đánh giá nào.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Blog & Kiến thức bổ ích Section -->
    <section class="blog-section">
        <div class="container-xxl px-4">
            <h2 class="blog-title">Blog & kiến thức bổ ích</h2>

            <div class="blog-grid">
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
                    <article class="blog-card d-flex flex-column">
                        <a href="<?php the_permalink(); ?>" class="d-block overflow-hidden" style="height: 220px;">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail('medium_large', array('alt' => get_the_title(), 'class' => 'blog-image w-100 h-100 object-fit-cover')); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/boich-banner.webp" alt="<?php the_title_attribute(); ?>" class="blog-image w-100 h-100 object-fit-cover">
                            <?php endif; ?>
                        </a>
                        <div class="blog-content d-flex flex-column flex-grow-1">
                            <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                                <h3 class="blog-card-title text-dark"><?php the_title(); ?></h3>
                            </a>
                            <div class="blog-excerpt text-muted mt-3 mb-4">
                                <?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?>
                            </div>
                            <div class="blog-footer pt-3 mt-auto" style="border-top: 1px solid #eee;">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/lets-icons_date-fill.svg" alt="" class="blog-date-icon">
                                <span class="blog-date"><?php echo get_the_date('d/m/Y'); ?></span>
                            </div>
                        </div>
                    </article>
                <?php 
                    endwhile; 
                    wp_reset_postdata();
                else : 
                ?>
                    <p class="text-center w-100 py-5">Hiện chưa có bài viết nào.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>