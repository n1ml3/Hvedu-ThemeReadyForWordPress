<?php
/**
 * Template Name: Courses Page
 *
 * @package HveduEng2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<!-- Breadcrumb Header Banner -->
<section class="breadcrumb-banner">
	<div class="container">
		<h1 class="breadcrumb-title">Khóa học</h1>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb-list">
				<li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumb-link">Trang chủ</a></li>
				<li class="breadcrumb-separator">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/arrow-right-filled.svg" alt="arrow right">
				</li>
				<li class="breadcrumb-item active" aria-current="page">Khóa học</li>
			</ol>
		</nav>
	</div>
</section>

<main>
	<!-- Section: Danh sách khóa học -->
	<?php
	$courses_list = array();
	$courses_titles = array(
		1 => 'Khoá Prime( 0-2.0)',
		2 => 'Khoá IELTS Foundation (2.0-3.5)',
		3 => 'Khoá IELTS Intermediate (3.5-5.0)',
		4 => 'Khoá IELTS Upper-Intermediate (5.0-6.0)',
		5 => 'Khoá IELTS Intensive (6.0-7.0)',
		6 => 'Khoá IELTS Advanced (7.0+)'
	);
	for ( $i = 1; $i <= 6; $i++ ) {
		$courses_list[] = array(
			'title'    => $courses_titles[$i],
			'desc'     => 'Khóa học IELTS dành cho học viên muốn nâng cao trình độ, giúp bạn tiếp cận tiếng Anh dễ dàng hơn với các chủ điểm từ vựng, ngữ pháp cơ bản, biết cách phát âm nguyên âm, phụ âm, trọng âm, âm đuôi và nối âm.',
			'duration' => '1.5 tháng',
			'lessons'  => '6 lesson',
			'label'    => 'Mất gốc',
		);
	}
	?>
	<section class="courses-grid-section">
		<div class="container">
			<div class="courses-cards-grid">
				<?php foreach ( $courses_list as $index => $course ) : 
					$is_even = ($index % 2 === 0);
					$banner_class = $is_even ? 'banner-blue' : 'banner-orange';
					$banner_img = $is_even ? 'blue-banner.svg' : 'yellow-banner.svg';
					?>
					<!-- Khóa học Card -->
					<div class="course-item-card">
						<div class="course-item-card-banner <?php echo esc_attr( $banner_class ); ?>">
							<img class="course-item-card-banner-img" src="<?php echo esc_url( get_template_directory_uri() . '/assets/' . $banner_img ); ?>" alt="<?php echo esc_attr( $course['title'] ); ?> Banner" loading="lazy">
						</div>
						<div class="course-item-card-body">
							<h3 class="course-item-card-title"><?php echo esc_html( $course['title'] ); ?></h3>
							<div class="course-item-card-meta">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/time-line.svg" alt="Time" loading="lazy">
								<span><?php echo esc_html( $course['duration'] ); ?></span>
							</div>
							<p class="course-item-card-desc"><?php echo esc_html( $course['desc'] ); ?></p>
							<div class="course-item-card-footer">
								<a href="<?php echo esc_url( home_url( '/chi-tiet-khoa-hoc' ) ); ?>" class="course-item-card-tag"><?php echo esc_html( $course['label'] ); ?></a>
								<span class="course-item-card-lessons">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/document.svg" alt="Doc" loading="lazy">
									<span><?php echo esc_html( $course['lessons'] ); ?></span>
								</span>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- Consultation Section -->
	<?php
	$uk_flag = get_template_directory_uri() . '/assets/uk-flag.svg';
	$student_pointer = get_template_directory_uri() . '/assets/pointer.webp';
	?>
	<section class="consultation-section" id="consultation-section">
		<div class="consultation-uk-flag">
			<img src="<?php echo esc_url( $uk_flag ); ?>" alt="UK Flag Decor" width="117" height="67" loading="lazy">
		</div>

		<div class="consultation-decor-circle"></div>

		<div class="consultation-container">
			<div class="consultation-content">
				<h2 class="consultation-title">Tư vấn lộ trình học tại <span class="consultation-title-highlight">HVG Education</span></h2>

				<form class="consultation-form-card" action="#" method="POST">
					<div class="consultation-form-group">
						<input type="text" class="consultation-form-input" placeholder="Họ và tên" required>
					</div>

					<div class="consultation-form-group">
						<input type="tel" class="consultation-form-input" placeholder="Số điện thoại" required>
					</div>

					<div class="consultation-form-group">
						<input type="email" class="consultation-form-input" placeholder="Email" required>
					</div>

					<div class="consultation-form-group">
						<select class="consultation-form-select" required>
							<option value="" disabled selected hidden>Bạn đang là</option>
							<option value="student">Học sinh / Sinh viên</option>
							<option value="worker">Người đi làm</option>
							<option value="other">Khác</option>
						</select>
					</div>

					<div class="consultation-form-group">
						<select class="consultation-form-select" required>
							<option value="" disabled selected hidden>Cơ sở gần bạn nhất</option>
							<option value="hn">Hà Nội</option>
							<option value="hcm">TP. Hồ Chí Minh</option>
							<option value="dn">Đà Nẵng</option>
						</select>
					</div>

					<button type="submit" class="btn-consultation-submit">Nhận tư vấn ngay</button>
				</form>
			</div>

			<div class="consultation-visual">
				<img src="<?php echo esc_url( $student_pointer ); ?>" alt="Student pointing to form" class="consultation-student-img" width="471" height="539" loading="lazy">
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
