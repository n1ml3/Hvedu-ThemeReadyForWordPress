<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="HVedu - Nền tảng đào tạo Training & Coaching toàn diện cho doanh nghiệp">
    <link rel="icon" type="image/svg" href="<?php echo get_template_directory_uri(); ?>/assets/logo.svg">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-lg">
    <div class="container-xxl px-4">

        <!-- Logo -->
        <a class="navbar-brand nav-logo" href="<?php echo home_url('/'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="HVedu Logo" class="logo-icon">
            <div class="logo-text">
                <span class="logo-title">HVEducation</span>
                <span class="logo-subtitle">Online learning solution</span>
            </div>
        </a>

        <!-- Hamburger button — hiện trên mobile/tablet -->
        <button class="navbar-toggler border-0" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMain"
                aria-controls="navbarMain"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu có thể collapse -->
        <div class="collapse navbar-collapse" id="navbarMain">
            <!-- Nav links — căn giữa -->
            <?php
            if ( has_nav_menu( 'primary' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'navbar-nav mx-auto gap-lg-4',
                    'fallback_cb'    => '__return_false',
                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'add_li_class'   => 'nav-item',
                    'add_a_class'    => 'nav-link',
                    'depth'          => 2,
                ) );
            } else {
                ?>
                <ul class="navbar-nav mx-auto gap-lg-4">
                    <li class="nav-item">
                        <a class="nav-link <?php echo is_front_page() ? 'active' : ''; ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo is_page_template( 'page-templates/page-introduce.php' ) ? 'active' : ''; ?>" href="<?php echo esc_url( home_url( '/introduce' ) ); ?>">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo esc_url( home_url( '/#courses' ) ); ?>">Khóa học</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo esc_url( home_url( '/#documents' ) ); ?>">Tài liệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Liên hệ</a>
                    </li>
                </ul>
                <?php
            }
            ?>

            <!-- Actions bên phải -->
            <div class="nav-actions d-flex align-items-center mt-3 mt-lg-0">
                <div class="icons-group">
                    <div class="icon-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/Search.svg" alt="Search">
                    </div>
                    <div class="divider"></div>
                    <div class="icon-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/Cart.svg" alt="Cart">
                        <span class="cart-badge">2</span>
                    </div>
                </div>
                <button class="btn-login">Đăng nhập</button>
            </div>
        </div>

    </div>
</nav>
