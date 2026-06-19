<?php
/**
 * HveduEng2 functions and definitions
 *
 * @package HveduEng2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Register Custom Post Types & Meta Boxes - Disabled for static theme
// require get_template_directory() . '/inc/custom-post-types.php';

// Register Theme Customizer Options - Disabled for static theme
// require get_template_directory() . '/inc/customizer.php';

function hvedueng2_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-primary' => esc_html__( 'Primary Menu', 'HveduEng2' ),
		'menu-footer'  => esc_html__( 'Footer Menu', 'HveduEng2' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	) );
}
add_action( 'after_setup_theme', 'hvedueng2_setup' );

/**
 * Enqueue scripts and styles.
 */
function hvedueng2_scripts() {
	// Bootstrap 5 CSS
	wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3' );

	// Theme main stylesheets (always loaded)
	wp_enqueue_style( 'hvedueng2-global', get_template_directory_uri() . '/styles/global.css', array( 'bootstrap' ), '1.0.0' );
	wp_enqueue_style( 'hvedueng2-topbar', get_template_directory_uri() . '/styles/topbar.css', array( 'hvedueng2-global' ), '1.0.0' );
	wp_enqueue_style( 'hvedueng2-navbar', get_template_directory_uri() . '/styles/navbar.css', array( 'hvedueng2-global' ), '1.0.0' );
	wp_enqueue_style( 'hvedueng2-footer', get_template_directory_uri() . '/styles/footer.css', array( 'hvedueng2-global' ), '1.0.0' );

	// Conditional stylesheets based on current page/template or page slug
	if ( is_front_page() || is_home() ) {
		wp_enqueue_style( 'hvedueng2-hero', get_template_directory_uri() . '/styles/hero.css', array( 'hvedueng2-global' ), '1.0.0' );
		wp_enqueue_style( 'hvedueng2-courses', get_template_directory_uri() . '/styles/courses.css', array( 'hvedueng2-global' ), '1.0.0' );
		wp_enqueue_style( 'hvedueng2-reasons', get_template_directory_uri() . '/styles/reasons.css', array( 'hvedueng2-global' ), '1.0.0' );
		wp_enqueue_style( 'hvedueng2-teachers', get_template_directory_uri() . '/styles/teachers.css', array( 'hvedueng2-global' ), '1.0.0' );
		wp_enqueue_style( 'hvedueng2-blog', get_template_directory_uri() . '/styles/blog.css', array( 'hvedueng2-global' ), '1.0.0' );
		wp_enqueue_style( 'hvedueng2-consultation', get_template_directory_uri() . '/styles/consultation.css', array( 'hvedueng2-global' ), '1.0.0' );
		wp_enqueue_style( 'hvedueng2-faq', get_template_directory_uri() . '/styles/faq.css', array( 'hvedueng2-global' ), '1.0.0' );
	}

	if ( is_page_template( 'page-introduce.php' ) || is_page( 'gioi-thieu' ) || is_page( 'introduce' ) ) {
		wp_enqueue_style( 'hvedueng2-breadcrumb', get_template_directory_uri() . '/styles/breadcrumb.css', array( 'hvedueng2-global' ), '1.0.0' );
		wp_enqueue_style( 'hvedueng2-about', get_template_directory_uri() . '/styles/about.css', array( 'hvedueng2-global' ), '1.0.0' );
		wp_enqueue_style( 'hvedueng2-teachers', get_template_directory_uri() . '/styles/teachers.css', array( 'hvedueng2-global' ), '1.0.0' );
		wp_enqueue_style( 'hvedueng2-faq', get_template_directory_uri() . '/styles/faq.css', array( 'hvedueng2-global' ), '1.0.0' );
	}

	if ( is_page_template( 'page-courses.php' ) || is_page( 'khoa-hoc' ) || is_page( 'courses' ) ) {
		wp_enqueue_style( 'hvedueng2-breadcrumb', get_template_directory_uri() . '/styles/breadcrumb.css', array( 'hvedueng2-global' ), '1.0.0' );
		wp_enqueue_style( 'hvedueng2-courses', get_template_directory_uri() . '/styles/courses.css', array( 'hvedueng2-global' ), '1.0.0' );
	}

	if ( is_page_template( 'page-courses-detail.php' ) || is_page( 'chi-tiet-khoa-hoc' ) || is_page( 'courses-detail' ) ) {
		wp_enqueue_style( 'hvedueng2-breadcrumb', get_template_directory_uri() . '/styles/breadcrumb.css', array( 'hvedueng2-global' ), '1.0.0' );
		wp_enqueue_style( 'hvedueng2-courses-detail', get_template_directory_uri() . '/styles/courses-detail.css', array( 'hvedueng2-global' ), '1.0.0' );
	}

	if ( is_page_template( 'page-calendar.php' ) || is_page( 'lich-khai-giang' ) || is_page( 'calendar' ) ) {
		wp_enqueue_style( 'hvedueng2-breadcrumb', get_template_directory_uri() . '/styles/breadcrumb.css', array( 'hvedueng2-global' ), '1.0.0' );
		wp_enqueue_style( 'hvedueng2-calendar', get_template_directory_uri() . '/styles/calendar.css', array( 'hvedueng2-global' ), '1.0.0' );
	}

	if ( is_page_template( 'page-library.php' ) || is_page( 'thu-vien' ) || is_page( 'library' ) ) {
		wp_enqueue_style( 'hvedueng2-breadcrumb', get_template_directory_uri() . '/styles/breadcrumb.css', array( 'hvedueng2-global' ), '1.0.0' );
		wp_enqueue_style( 'hvedueng2-library', get_template_directory_uri() . '/styles/library.css', array( 'hvedueng2-global' ), '1.0.0' );
	}

	// Active theme style.css file
	wp_enqueue_style( 'hvedueng2-style', get_stylesheet_uri(), array(), '1.0.0' );

	// Enqueue jQuery (built-in in WordPress)
	wp_enqueue_script( 'jquery' );

	// Bootstrap Bundle JS (includes Popper)
	wp_enqueue_script( 'bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array( 'jquery' ), '5.3.3', true );

	// Theme custom scripts
	wp_enqueue_script( 'hvedueng2-main', get_template_directory_uri() . '/scripts/main.js', array( 'jquery', 'bootstrap-bundle' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'hvedueng2_scripts' );

/**
 * Filter primary navigation menu list items (li) to add Bootstrap classes
 */
function hvedueng2_menu_item_classes( $classes, $item, $args ) {
	if ( isset( $args->theme_location ) && 'menu-primary' === $args->theme_location ) {
		$classes[] = 'nav-item';
		if ( in_array( 'menu-item-has-children', $classes ) ) {
			$classes[] = 'dropdown';
		}
	}
	return $classes;
}
add_filter( 'nav_menu_css_class', 'hvedueng2_menu_item_classes', 10, 3 );

/**
 * Filter primary navigation menu links (a) to add Bootstrap classes and dropdown attributes
 */
function hvedueng2_menu_link_attributes( $atts, $item, $args ) {
	if ( isset( $args->theme_location ) && 'menu-primary' === $args->theme_location ) {
		// If it's a submenu item (depth > 0)
		if ( isset( $item->menu_item_parent ) && '0' !== $item->menu_item_parent ) {
			$atts['class'] = 'dropdown-item';
		} else {
			$atts['class'] = 'nav-link nav-link-custom';
		}
		
		// Set active class if current page
		if ( in_array( 'current-menu-item', $item->classes ) || in_array( 'current-menu-parent', $item->classes ) ) {
			$atts['class'] .= ' active';
			$atts['aria-current'] = 'page';
		}
		
		// If it has children, add Bootstrap attributes for dropdown toggle
		if ( in_array( 'menu-item-has-children', $item->classes ) ) {
			$atts['class'] .= ' dropdown-toggle';
			$atts['data-bs-toggle'] = 'dropdown';
			$atts['role'] = 'button';
			$atts['aria-expanded'] = 'false';
		}
	}
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'hvedueng2_menu_link_attributes', 10, 3 );

/**
 * Filter submenu list CSS class to match Bootstrap dropdown-menu
 */
function hvedueng2_submenu_classes( $classes, $args, $depth ) {
	if ( isset( $args->theme_location ) && 'menu-primary' === $args->theme_location ) {
		$classes = array( 'dropdown-menu' );
	}
	return $classes;
}
add_filter( 'nav_menu_submenu_css_class', 'hvedueng2_submenu_classes', 10, 3 );

