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
	<section class="courses-grid-section">
		<div class="container">
			<div class="courses-cards-grid">
				
				<!-- Khóa học 1 -->
				<div class="course-item-card">
					<div class="course-item-card-banner banner-blue">
						<img class="course-item-card-banner-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/blue-banner.svg" alt="Khóa học Prime Banner">
					</div>
					<div class="course-item-card-body">
						<h3 class="course-item-card-title">Khoá Prime( 0-2.0)</h3>
						<div class="course-item-card-meta">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/time-line.svg" alt="Time">
							<span>1.5 tháng</span>
						</div>
						<p class="course-item-card-desc">
							Khóa học IELTS Prime dành cho người mất gốc, khóa học giúp bạn tiếp cận tiếng Anh dễ dàng hơn với các chủ điểm từ vựng, ngữ pháp cơ bản, biết cách phát âm nguyên âm, phụ âm, trọng âm, âm đuôi và nối âm.
						</p>
						<div class="course-item-card-footer">
							<a href="<?php echo esc_url( home_url( '/chi-tiet-khoa-hoc' ) ); ?>" class="course-item-card-tag">Mất gốc</a>
							<span class="course-item-card-lessons">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/document.svg" alt="Doc">
								<span>6 lesson</span>
							</span>
						</div>
					</div>
				</div>

				<!-- Khóa học 2 -->
				<div class="course-item-card">
					<div class="course-item-card-banner banner-orange">
						<img class="course-item-card-banner-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/yellow-banner.svg" alt="Khóa học Prime Banner">
					</div>
					<div class="course-item-card-body">
						<h3 class="course-item-card-title">Khoá Prime( 0-2.0)</h3>
						<div class="course-item-card-meta">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/time-line.svg" alt="Time">
							<span>1.5 tháng</span>
						</div>
						<p class="course-item-card-desc">
							Khóa học IELTS Prime dành cho người mất gốc, khóa học giúp bạn tiếp cận tiếng Anh dễ dàng hơn với các chủ điểm từ vựng, ngữ pháp cơ bản, biết cách phát âm nguyên âm, phụ âm, trọng âm, âm đuôi và nối âm.
						</p>
						<div class="course-item-card-footer">
							<a href="<?php echo esc_url( home_url( '/chi-tiet-khoa-hoc' ) ); ?>" class="course-item-card-tag">Mất gốc</a>
							<span class="course-item-card-lessons">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/document.svg" alt="Doc">
								<span>6 lesson</span>
							</span>
						</div>
					</div>
				</div>

				<!-- Khóa học 3 -->
				<div class="course-item-card">
					<div class="course-item-card-banner banner-blue">
						<img class="course-item-card-banner-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/blue-banner.svg" alt="Khóa học Prime Banner">
					</div>
					<div class="course-item-card-body">
						<h3 class="course-item-card-title">Khoá Prime( 0-2.0)</h3>
						<div class="course-item-card-meta">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/time-line.svg" alt="Time">
							<span>1.5 tháng</span>
						</div>
						<p class="course-item-card-desc">
							Khóa học IELTS Prime dành cho người mất gốc, khóa học giúp bạn tiếp cận tiếng Anh dễ dàng hơn với các chủ điểm từ vựng, ngữ pháp cơ bản, biết cách phát âm nguyên âm, phụ âm, trọng âm, âm đuôi và nối âm.
						</p>
						<div class="course-item-card-footer">
							<a href="<?php echo esc_url( home_url( '/chi-tiet-khoa-hoc' ) ); ?>" class="course-item-card-tag">Mất gốc</a>
							<span class="course-item-card-lessons">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/document.svg" alt="Doc">
								<span>6 lesson</span>
							</span>
						</div>
					</div>
				</div>

				<!-- Khóa học 4 -->
				<div class="course-item-card">
					<div class="course-item-card-banner banner-orange">
						<img class="course-item-card-banner-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/yellow-banner.svg" alt="Khóa học Prime Banner">
					</div>
					<div class="course-item-card-body">
						<h3 class="course-item-card-title">Khoá Prime( 0-2.0)</h3>
						<div class="course-item-card-meta">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/time-line.svg" alt="Time">
							<span>1.5 tháng</span>
						</div>
						<p class="course-item-card-desc">
							Khóa học IELTS Prime dành cho người mất gốc, khóa học giúp bạn tiếp cận tiếng Anh dễ dàng hơn với các chủ điểm từ vựng, ngữ pháp cơ bản, biết cách phát âm nguyên âm, phụ âm, trọng âm, âm đuôi và nối âm.
						</p>
						<div class="course-item-card-footer">
							<a href="<?php echo esc_url( home_url( '/chi-tiet-khoa-hoc' ) ); ?>" class="course-item-card-tag">Mất gốc</a>
							<span class="course-item-card-lessons">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/document.svg" alt="Doc">
								<span>6 lesson</span>
							</span>
						</div>
					</div>
				</div>

				<!-- Khóa học 5 -->
				<div class="course-item-card">
					<div class="course-item-card-banner banner-blue">
						<img class="course-item-card-banner-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/blue-banner.svg" alt="Khóa học Prime Banner">
					</div>
					<div class="course-item-card-body">
						<h3 class="course-item-card-title">Khoá Prime( 0-2.0)</h3>
						<div class="course-item-card-meta">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/time-line.svg" alt="Time">
							<span>1.5 tháng</span>
						</div>
						<p class="course-item-card-desc">
							Khóa học IELTS Prime dành cho người mất gốc, khóa học giúp bạn tiếp cận tiếng Anh dễ dàng hơn với các chủ điểm từ vựng, ngữ pháp cơ bản, biết cách phát âm nguyên âm, phụ âm, trọng âm, âm đuôi và nối âm.
						</p>
						<div class="course-item-card-footer">
							<a href="<?php echo esc_url( home_url( '/chi-tiet-khoa-hoc' ) ); ?>" class="course-item-card-tag">Mất gốc</a>
							<span class="course-item-card-lessons">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/document.svg" alt="Doc">
								<span>6 lesson</span>
							</span>
						</div>
					</div>
				</div>

				<!-- Khóa học 6 -->
				<div class="course-item-card">
					<div class="course-item-card-banner banner-orange">
						<img class="course-item-card-banner-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/yellow-banner.svg" alt="Khóa học Prime Banner">
					</div>
					<div class="course-item-card-body">
						<h3 class="course-item-card-title">Khoá Prime( 0-2.0)</h3>
						<div class="course-item-card-meta">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/time-line.svg" alt="Time">
							<span>1.5 tháng</span>
						</div>
						<p class="course-item-card-desc">
							Khóa học IELTS Prime dành cho người mất gốc, khóa học giúp bạn tiếp cận tiếng Anh dễ dàng hơn với các chủ điểm từ vựng, ngữ pháp cơ bản, biết cách phát âm nguyên âm, phụ âm, trọng âm, âm đuôi và nối âm.
						</p>
						<div class="course-item-card-footer">
							<a href="<?php echo esc_url( home_url( '/chi-tiet-khoa-hoc' ) ); ?>" class="course-item-card-tag">Mất gốc</a>
							<span class="course-item-card-lessons">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/document.svg" alt="Doc">
								<span>6 lesson</span>
							</span>
						</div>
					</div>
				</div>

				<!-- Khóa học 7 -->
				<div class="course-item-card">
					<div class="course-item-card-banner banner-blue">
						<img class="course-item-card-banner-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/blue-banner.svg" alt="Khóa học Prime Banner">
					</div>
					<div class="course-item-card-body">
						<h3 class="course-item-card-title">Khoá Prime( 0-2.0)</h3>
						<div class="course-item-card-meta">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/time-line.svg" alt="Time">
							<span>1.5 tháng</span>
						</div>
						<p class="course-item-card-desc">
							Khóa học IELTS Prime dành cho người mất gốc, khóa học giúp bạn tiếp cận tiếng Anh dễ dàng hơn với các chủ điểm từ vựng, ngữ pháp cơ bản, biết cách phát âm nguyên âm, phụ âm, trọng âm, âm đuôi và nối âm.
						</p>
						<div class="course-item-card-footer">
							<a href="<?php echo esc_url( home_url( '/chi-tiet-khoa-hoc' ) ); ?>" class="course-item-card-tag">Mất gốc</a>
							<span class="course-item-card-lessons">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/document.svg" alt="Doc">
								<span>6 lesson</span>
							</span>
						</div>
					</div>
				</div>

				<!-- Khóa học 8 -->
				<div class="course-item-card">
					<div class="course-item-card-banner banner-orange">
						<img class="course-item-card-banner-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/yellow-banner.svg" alt="Khóa học Prime Banner">
					</div>
					<div class="course-item-card-body">
						<h3 class="course-item-card-title">Khoá Prime( 0-2.0)</h3>
						<div class="course-item-card-meta">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/time-line.svg" alt="Time">
							<span>1.5 tháng</span>
						</div>
						<p class="course-item-card-desc">
							Khóa học IELTS Prime dành cho người mất gốc, khóa học giúp bạn tiếp cận tiếng Anh dễ dàng hơn với các chủ điểm từ vựng, ngữ pháp cơ bản, biết cách phát âm nguyên âm, phụ âm, trọng âm, âm đuôi và nối âm.
						</p>
						<div class="course-item-card-footer">
							<a href="<?php echo esc_url( home_url( '/chi-tiet-khoa-hoc' ) ); ?>" class="course-item-card-tag">Mất gốc</a>
							<span class="course-item-card-lessons">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/document.svg" alt="Doc">
								<span>6 lesson</span>
							</span>
						</div>
					</div>
				</div>

				<!-- Khóa học 9 -->
				<div class="course-item-card">
					<div class="course-item-card-banner banner-blue">
						<img class="course-item-card-banner-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/blue-banner.svg" alt="Khóa học Prime Banner">
					</div>
					<div class="course-item-card-body">
						<h3 class="course-item-card-title">Khoá Prime( 0-2.0)</h3>
						<div class="course-item-card-meta">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/time-line.svg" alt="Time">
							<span>1.5 tháng</span>
						</div>
						<p class="course-item-card-desc">
							Khóa học IELTS Prime dành cho người mất gốc, khóa học giúp bạn tiếp cận tiếng Anh dễ dàng hơn với các chủ điểm từ vựng, ngữ pháp cơ bản, biết cách phát âm nguyên âm, phụ âm, trọng âm, âm đuôi và nối âm.
						</p>
						<div class="course-item-card-footer">
							<a href="<?php echo esc_url( home_url( '/chi-tiet-khoa-hoc' ) ); ?>" class="course-item-card-tag">Mất gốc</a>
							<span class="course-item-card-lessons">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/document.svg" alt="Doc">
								<span>6 lesson</span>
							</span>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- Consultation Section -->
	<section class="consultation-section" id="consultation-section">
		<div class="consultation-uk-flag">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/uk-flag.svg" alt="UK Flag Decor">
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
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/pointer.webp" alt="Student pointing to form" class="consultation-student-img">
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
