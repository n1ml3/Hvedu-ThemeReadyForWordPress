<?php
/**
 * Template Name: Courses Detail Page
 *
 * @package HveduEng2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<!-- Section: Banner Chi tiết khóa học -->
<section class="course-detail-banner">
	<div class="container course-detail-banner-container">
		<h1 class="course-detail-title">Khoá prime(0-2.0)</h1>
		<ul class="course-detail-meta-list">
			<li class="course-detail-meta-item">
				<img class="course-detail-meta-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/time-line.svg" alt="Clock Icon">
				<span>Thời gian khoá học: 1,5 tháng</span>
			</li>
			<li class="course-detail-meta-item">
				<img class="course-detail-meta-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/document.svg" alt="Document Icon">
				<span>Khoá học Ielts từ 0-2.0</span>
			</li>
		</ul>
	</div>
</section>

<!-- Detailed Course info -->
<section class="course-detail-section py-3 py-lg-5">
	<div class="container">
		<div class="row g-4 g-lg-5">
			
			<!-- Left Column (8/12): Course Description & Curriculum -->
			<div class="col-lg-8">
				<div class="course-feature-image-wrapper">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/course-detail-banner.webp" alt="Lớp học Toeic 650+" class="course-feature-image">
				</div>
				
				<h2 class="course-detail-title">Lớp học ILETS 0-2.0</h2>
				
				<!-- Description -->
				<div class="course-detail-block">
					<h3 class="course-block-title">Mô tả</h3>
					<p class="course-block-text">
						Lớp học kỹ năng sống cho trẻ là một chương trình giáo dục thực tiễn giúp trẻ phát triển tư duy độc lập, giao tiếp tự tin, và khả năng xử lý tình huống trong cuộc sống. Thông qua các hoạt động thực hành, trẻ học cách tự chăm sóc bản thân, làm việc nhóm, kiểm soát cảm xúc và ứng xử lịch sự.
					</p>
				</div>
				
				<!-- Objectives -->
				<div class="course-detail-block">
					<h3 class="course-block-title">Mục tiêu lớp học</h3>
					<ul class="course-block-list">
						<li>Giúp trẻ tự tin giao tiếp và thể hiện suy nghĩ của mình.</li>
						<li>Rèn luyện kỹ năng tự lập, biết tự chăm sóc bản thân.</li>
						<li>Phát triển tư duy giải quyết vấn đề và ra quyết định đúng đắn.</li>
						<li>Học cách kiểm soát cảm xúc và ứng xử tích cực.</li>
						<li>Xây dựng tinh thần hợp tác và kỹ năng làm việc nhóm.</li>
					</ul>
				</div>
				
				<!-- Course Content -->
				<div class="course-detail-block">
					<h3 class="course-block-title">Nội dung chương trình</h3>
					<ul class="course-block-list">
						<li>Kỹ năng giao tiếp & ứng xử</li>
						<li>Kỹ năng tự lập & quản lý bản thân</li>
						<li>Kiểm soát cảm xúc & tư duy tích cực</li>
						<li>Tư duy giải quyết vấn đề</li>
					</ul>
				</div>
				
				<!-- Benefits -->
				<div class="course-detail-block">
					<h3 class="course-block-title">Lợi ích sau khóa học</h3>
				</div>
			</div>
			
			<!-- Right Column (4/12): Sidebar Class Info Card -->
			<div class="col-lg-4">
				<div class="course-info-card">
					<h3 class="info-card-title">Thông tin lớp học:</h3>
					
					<div class="info-card-item">
						<span class="info-item-key">Độ tuổi:</span>
						<span class="info-item-value">3-18 tuổi</span>
					</div>
					
					<div class="info-card-item">
						<span class="info-item-key">Thời gian buổi học:</span>
						<span class="info-item-value">2 giờ</span>
					</div>
					
					<div class="info-card-item">
						<span class="info-item-key">Số buổi học:</span>
						<span class="info-item-value">20 buổi</span>
					</div>
					
					<div class="info-card-item">
						<span class="info-item-key">Số học viên:</span>
						<span class="info-item-value">20 người</span>
					</div>
					
					<div class="info-card-item">
						<span class="info-item-key">Chứng chỉ:</span>
						<span class="info-item-value">Có</span>
					</div>
					
					<div class="info-card-item mb-4">
						<span class="info-item-key">Ngôn ngữ</span>
						<span class="info-item-value">Tiếng Việt</span>
					</div>
					
					<button class="btn btn-register">Đăng ký ngay</button>
				</div>
			</div>
			
		</div>
	</div>
</section>

<!-- Consultation Section -->
<?php
$uk_flag = get_theme_mod( 'consultation_flag' );
if ( empty( $uk_flag ) ) {
	$uk_flag = get_template_directory_uri() . '/assets/uk-flag.svg';
}

$student_pointer = get_theme_mod( 'consultation_student' );
if ( empty( $student_pointer ) ) {
	$student_pointer = get_template_directory_uri() . '/assets/pointer.webp';
}
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

<?php
get_footer();
