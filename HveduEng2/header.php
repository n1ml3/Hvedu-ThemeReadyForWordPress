<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <main>
 *
 * @package HveduEng2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" type="image/svg+xml" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo.svg">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
	<!-- Topbar Area -->
	<div class="topbar-wrapper d-flex align-items-center justify-content-end px-4 py-2 text-white">
		<div class="topbar-content d-flex align-items-center gap-3">
			
			<!-- Hotline -->
			<div class="topbar-item d-flex align-items-center gap-2 text-nowrap">
				<span class="topbar-icon-placeholder" aria-hidden="true">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/hotline.svg" alt="Hotline">
				</span>
				<p class="topbar-text mb-0">
					<span class="topbar-label">Hotline: </span>
					<span class="topbar-value">0123456789</span>
				</p>
			</div>
			
			<div class="topbar-divider"></div>
			
			<!-- Email -->
			<div class="topbar-item d-flex align-items-center gap-2 text-nowrap">
				<span class="topbar-icon-placeholder" aria-hidden="true">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/gmail.svg" alt="Email">
				</span>
				<p class="topbar-text mb-0">
					<span class="topbar-label">Email: </span>
					<span class="topbar-value">hoangvu123@gmail.com</span>
				</p>
			</div>
			
			<div class="topbar-divider"></div>
			
			<!-- Website -->
			<div class="topbar-item d-flex align-items-center gap-2 text-nowrap">
				<span class="topbar-icon-placeholder" aria-hidden="true">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/earth.svg" alt="Website">
				</span>
				<p class="topbar-text mb-0">
					<span class="topbar-label">website: </span>
					<span class="topbar-value">hvg.edu.vn</span>
				</p>
			</div>
			
		</div>
	</div>

	<!-- Navbar Area -->
	<nav class="navbar navbar-expand-lg bg-white py-3 navbar-custom">
		<div class="container-fluid px-4 px-lg-5">

			<!-- Logo -->
			<a class="navbar-brand d-flex align-items-center gap-2" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<div class="logo-placeholder-img d-flex align-items-center justify-content-center">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo.svg" alt="HVG Education Logo">
				</div>
				<div class="logo-placeholder-text d-flex flex-column justify-content-center">
					<span class="logo-title">HVEducation</span>
					<span class="logo-subtitle text-muted">Online learning solution</span>
				</div>
			</a>

			<!-- Hamburger Button for Mobile -->
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
				aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Navigation Links -->
			<div class="collapse navbar-collapse justify-content-end" id="navbarContent">
				<?php
				if ( has_nav_menu( 'menu-primary' ) ) {
					wp_nav_menu( array(
						'theme_location' => 'menu-primary',
						'container'      => false,
						'menu_class'     => 'navbar-nav align-items-center gap-2 gap-lg-4 mt-3 mt-lg-0',
						'fallback_cb'    => '__return_false',
						'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'          => 2,
					) );
				} else {
					// Hardcoded fallback menu pointing to WP home URLs
					?>
					<ul class="navbar-nav align-items-center gap-2 gap-lg-4 mt-3 mt-lg-0">
						<li class="nav-item">
							<a class="nav-link nav-link-custom <?php echo ( is_front_page() && ! is_paged() ) ? 'active' : ''; ?>" <?php echo ( is_front_page() && ! is_paged() ) ? 'aria-current="page"' : ''; ?> href="<?php echo esc_url( home_url( '/' ) ); ?>">Trang chủ</a>
						</li>
						<li class="nav-item">
							<a class="nav-link nav-link-custom <?php echo is_page_template( 'page-introduce.php' ) ? 'active' : ''; ?>" <?php echo is_page_template( 'page-introduce.php' ) ? 'aria-current="page"' : ''; ?> href="<?php echo esc_url( home_url( '/gioi-thieu' ) ); ?>">Giới thiệu</a>
						</li>
						<li class="nav-item">
							<a class="nav-link nav-link-custom <?php echo is_page_template( 'page-courses.php' ) ? 'active' : ''; ?>" <?php echo is_page_template( 'page-courses.php' ) ? 'aria-current="page"' : ''; ?> href="<?php echo esc_url( home_url( '/khoa-hoc' ) ); ?>">Khoá học</a>
						</li>
						<li class="nav-item">
							<a class="nav-link nav-link-custom <?php echo is_page_template( 'page-calendar.php' ) ? 'active' : ''; ?>" <?php echo is_page_template( 'page-calendar.php' ) ? 'aria-current="page"' : ''; ?> href="<?php echo esc_url( home_url( '/lich-khai-giang' ) ); ?>">Lịch khai giảng</a>
						</li>
						<li class="nav-item">
							<a class="nav-link nav-link-custom <?php echo is_page_template( 'page-library.php' ) ? 'active' : ''; ?>" <?php echo is_page_template( 'page-library.php' ) ? 'aria-current="page"' : ''; ?> href="<?php echo esc_url( home_url( '/thu-vien' ) ); ?>">Thư viện</a>
						</li>
						<li class="nav-item">
							<a class="nav-link nav-link-custom" href="<?php echo esc_url( home_url( '/lien-he' ) ); ?>">Liên hệ</a>
						</li>
					</ul>
					<?php
				}
				?>
			</div>

		</div>
	</nav>
</header>
