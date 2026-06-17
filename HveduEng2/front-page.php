<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HveduEng2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<main>
	<!-- Hero Section -->
	<section class="hero-section" id="hero-section">
		<div class="hero-background">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/hero-banner.webp" alt="Hero Banner Background" class="hero-bg-image" width="1440" height="764" fetchpriority="high">
			<div class="hero-gradient-overlay"></div>
		</div>

		<div class="container hero-container">
			<div class="hero-content">
				<div class="hero-headline-box">
					<h1 class="hero-headline">Chinh Phục IELTS - Đạt Điểm Cao</h1>
				</div>

				<p class="hero-subheadline">Ngay Lần Thi Đầu Tiên!</p>

				<ul class="hero-features">
					<li class="hero-feature-item">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/tick.svg" alt="" class="hero-check-icon" width="30" height="30">
						<span>Lộ trình học cá nhân hóa theo trình độ</span>
					</li>
					<li class="hero-feature-item">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/tick.svg" alt="" class="hero-check-icon" width="30" height="30">
						<span>Giảng viên chuyên sâu, many years experience</span>
					</li>
					<li class="hero-feature-item">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/tick.svg" alt="" class="hero-check-icon" width="30" height="30">
						<span>Cam kết đầu ra, hỗ trợ đến khi đạt mục tiêu</span>
					</li>
				</ul>

				<div class="hero-cta-group">
					<a href="#consultation-section" class="btn-hero-outline">Đăng ký tư vấn</a>
					<a href="<?php echo esc_url( home_url( '/khoa-hoc' ) ); ?>" class="btn-hero-filled">Lộ trình học Ielts</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Stats Bar -->
	<section class="stats-section" id="stats-section">
		<div class="container">
			<div class="stats-bar">
				<div class="stat-item">
					<span class="stat-number">30+</span>
					<p class="stat-desc">Nhân sự là chuyên gia trong lĩnh vực giáo dục và đào tạo</p>
				</div>
				<div class="stat-divider"></div>
				<div class="stat-item">
					<span class="stat-number">+1000</span>
					<p class="stat-desc">Học viên tiếp cận với chương trình học tiên tiến</p>
				</div>
				<div class="stat-divider"></div>
				<div class="stat-item">
					<span class="stat-number">11+</span>
					<p class="stat-desc">Năm nghiên cứu và hoạt động trong lĩnh vực giáo dục</p>
				</div>
				<div class="stat-divider"></div>
				<div class="stat-item">
					<span class="stat-number">90%</span>
					<p class="stat-desc">Học viên đạt được mục tiêu mong muốn</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Courses Section -->
	<section class="courses-section" id="courses-section">
		<div class="course-card">
			<div class="course-card-inner">
				
				<!-- LEFT COLUMN: Course info -->
				<div class="course-info">
					<p class="course-label">Chương trình học</p>
					<h2 class="course-title">Luyện thi IELTS</h2>

					<div class="course-level-group">
						<div class="course-level-item">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/enter.svg" alt="" class="course-level-icon" width="30" height="30" loading="lazy">
							<span class="course-level-text">Đầu vào: 0</span>
						</div>
						<div class="course-level-item">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/exit.svg" alt="" class="course-level-icon" width="30" height="30" loading="lazy">
							<span class="course-level-text">Đầu ra: 8.0+</span>
						</div>
					</div>

					<div class="course-divider"></div>

					<div class="course-features">
						<div class="course-feature-item">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/teacher.svg" alt="" class="course-feature-icon" width="45" height="45" loading="lazy">
							<p class="course-feature-text">Đội ngũ giáo viên top đầu chuẩn sư phạm</p>
						</div>
						<div class="course-feature-item">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/magistrate.svg" alt="" class="course-feature-icon" width="45" height="45" loading="lazy">
							<p class="course-feature-text">Giáo trình được biên soạn đặc quyền</p>
						</div>
						<div class="course-feature-item">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/student.svg" alt="" class="course-feature-icon" width="45" height="45" loading="lazy">
							<p class="course-feature-text">Giáo trình được biên soạn đặc quyền</p>
						</div>
					</div>

					<div class="course-cta-group">
						<a href="#consultation-section" class="btn-course-outline">Đăng ký tư vấn</a>
						<a href="<?php echo esc_url( home_url( '/khoa-hoc' ) ); ?>" class="btn-course-filled">Chi tiết khoá học</a>
					</div>
				</div>

				<!-- RIGHT COLUMN: Image & Badge -->
				<div class="course-visual">
					<div class="course-visual-circle"></div>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/course-teacher.webp" alt="Giáo viên IELTS" class="course-teacher-img" width="667" height="1000" loading="lazy">
					<div class="course-score-badge">
						<span class="course-score-number">8.5</span>
						<span class="course-score-label">overall</span>
					</div>
					<p class="course-teacher-name">Ms. Trinh My Hanh</p>
				</div>

			</div>

			<!-- Course Program Selector Bar -->
			<div class="course-programs-bar">
				<ul class="course-programs-list">
					<li class="course-program-item active">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/puzzle.svg" alt="" class="course-program-icon" width="48" height="48" loading="lazy">
						<div class="course-program-info">
							<span class="course-program-name">Luyện thi Ielts</span>
							<span class="course-program-mode">Online/ Ofline</span>
						</div>
					</li>

					<li class="course-program-divider" aria-hidden="true"></li>

					<li class="course-program-item">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/puzzle-white.svg" alt="" class="course-program-icon" width="48" height="48" loading="lazy">
						<div class="course-program-info">
							<span class="course-program-name">Luyện thi Ielts</span>
							<span class="course-program-mode">Online/ Ofline</span>
						</div>
					</li>

					<li class="course-program-divider" aria-hidden="true"></li>

					<li class="course-program-item">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/puzzle-white.svg" alt="" class="course-program-icon" width="48" height="48" loading="lazy">
						<div class="course-program-info">
							<span class="course-program-name">Luyện thi Ielts</span>
							<span class="course-program-mode">Online/ Ofline</span>
						</div>
					</li>

					<li class="course-program-divider" aria-hidden="true"></li>

					<li class="course-program-item">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/puzzle-white.svg" alt="" class="course-program-icon" width="48" height="48" loading="lazy">
						<div class="course-program-info">
							<span class="course-program-name">Luyện thi Ielts</span>
							<span class="course-program-mode">Online/ Ofline</span>
						</div>
					</li>
				</ul>
			</div>

		</div>
	</section>

	<!-- Reasons Section -->
	<section class="reasons-section container" id="reasons-section">
		<div class="reasons-bg-decor">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/reasons-bg.svg" alt="Background Decoration" class="reasons-bg-img" width="1767" height="1010" loading="lazy">
		</div>

		<div class="reasons-container">
			<div class="reasons-header">
				<h2 class="reasons-title">6 lý do nên chọn <span class="reasons-title-highlight">HVG Education</span></h2>
				<p class="reasons-subtitle">Những ưu điểm của hệ thống giáo dục hàng đầu giúp bạn chinh phục kỳ thi IELTS một cách dễ dàng!</p>
			</div>

			<div class="reasons-grid">
				<!-- COLUMN 1: Reasons 1 & 4 -->
				<div class="reasons-col">
					<!-- Reason 1 -->
					<div class="reason-card">
						<div class="reason-card-icon-wrap">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/medal.svg" alt="Icon Cam Kết" class="reason-card-icon" width="65" height="65" loading="lazy">
						</div>
						<h3 class="reason-card-title">Cam kết hỗ trợ học viên</h3>
						<p class="reason-card-desc">Học viên được đồng hành và hỗ trợ liên tục cho đến khi đạt được mục tiêu đề ra.</p>
					</div>

					<!-- Reason 4 -->
					<div class="reason-card">
						<div class="reason-card-icon-wrap">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/medal.svg" alt="Icon Cam Kết" class="reason-card-icon" width="65" height="65" loading="lazy">
						</div>
						<h3 class="reason-card-title">Cam kết hỗ trợ học viên</h3>
						<p class="reason-card-desc">Học viên được đồng hành và hỗ trợ liên tục cho đến khi đạt được mục tiêu đề ra.</p>
					</div>
				</div>

				<!-- COLUMN 2: Reasons 2 & 5 (Staggered) -->
				<div class="reasons-col reasons-col-staggered">
					<!-- Reason 2 -->
					<div class="reason-card">
						<div class="reason-card-icon-wrap">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/medal.svg" alt="Icon Cam Kết" class="reason-card-icon" width="65" height="65" loading="lazy">
						</div>
						<h3 class="reason-card-title">Cam kết hỗ trợ học viên</h3>
						<p class="reason-card-desc">Học viên được đồng hành và hỗ trợ liên tục cho đến khi đạt được mục tiêu đề ra.</p>
					</div>

					<!-- Reason 5 -->
					<div class="reason-card">
						<div class="reason-card-icon-wrap">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/medal.svg" alt="Icon Cam Kết" class="reason-card-icon" width="65" height="65" loading="lazy">
						</div>
						<h3 class="reason-card-title">Cam kết hỗ trợ học viên</h3>
						<p class="reason-card-desc">Học viên được đồng hành và hỗ trợ liên tục cho đến khi đạt được mục tiêu đề ra.</p>
					</div>
				</div>

				<!-- COLUMN 3: Reasons 3 & 6 -->
				<div class="reasons-col">
					<!-- Reason 3 -->
					<div class="reason-card">
						<div class="reason-card-icon-wrap">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/medal.svg" alt="Icon Cam Kết" class="reason-card-icon" width="65" height="65" loading="lazy">
						</div>
						<h3 class="reason-card-title">Cam kết hỗ trợ học viên</h3>
						<p class="reason-card-desc">Học viên được đồng hành và hỗ trợ liên tục cho đến khi đạt được mục tiêu đề ra.</p>
					</div>

					<!-- Reason 6 -->
					<div class="reason-card">
						<div class="reason-card-icon-wrap">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/medal.svg" alt="Icon Cam Kết" class="reason-card-icon" width="65" height="65" loading="lazy">
						</div>
						<h3 class="reason-card-title">Cam kết hỗ trợ học viên</h3>
						<p class="reason-card-desc">Học viên được đồng hành và hỗ trợ liên tục cho đến khi đạt được mục tiêu đề ra.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Teachers Section -->
	<section class="teachers-section" id="teachers-section">
		<div class="teachers-container">
			<div class="teachers-header">
				<h2 class="teachers-title"><span class="teachers-title-highlight">Đội ngũ giảng viên</span> của chúng tôi</h2>
				<p class="teachers-subtitle">Những người truyền cảm hứng tại HVG</p>
			</div>

			<div class="teachers-grid">
				<!-- Teacher 1 -->
				<div class="teacher-card">
					<div class="teacher-avatar-wrap">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/teacher.webp" alt="Giảng viên Phạm Phương Dung" class="teacher-avatar" width="279" height="292" loading="lazy">
					</div>
					<h3 class="teacher-role">Giảng viên</h3>
					<h4 class="teacher-name">Phạm Phương Dung</h4>
					<div class="teacher-details">
						<p class="teacher-detail-item">Overall : 8.5 Ielts</p>
						<p class="teacher-detail-item">Tốt nghiệp loại giỏi ĐH Sư phạm</p>
						<p class="teacher-detail-item">Kinh nghiệm 7 năm giảng dạy</p>
					</div>
					<a href="#" class="btn-teacher-more">
						Tìm hiểu thêm
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/arrow-right.svg" alt="" width="14" height="14" loading="lazy">
					</a>
				</div>

				<!-- Teacher 2 -->
				<div class="teacher-card">
					<div class="teacher-avatar-wrap">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/teacher.webp" alt="Giảng viên Phạm Phương Dung" class="teacher-avatar" width="279" height="292" loading="lazy">
					</div>
					<h3 class="teacher-role">Giảng viên</h3>
					<h4 class="teacher-name">Phạm Phương Dung</h4>
					<div class="teacher-details">
						<p class="teacher-detail-item">Overall : 8.5 Ielts</p>
						<p class="teacher-detail-item">Tốt nghiệp loại giỏi ĐH Sư phạm</p>
						<p class="teacher-detail-item">Kinh nghiệm 7 năm giảng dạy</p>
					</div>
					<a href="#" class="btn-teacher-more">
						Tìm hiểu thêm
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/arrow-right.svg" alt="" width="14" height="14" loading="lazy">
					</a>
				</div>

				<!-- Teacher 3 -->
				<div class="teacher-card">
					<div class="teacher-avatar-wrap">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/teacher.webp" alt="Giảng viên Phạm Phương Dung" class="teacher-avatar" width="279" height="292" loading="lazy">
					</div>
					<h3 class="teacher-role">Giảng viên</h3>
					<h4 class="teacher-name">Phạm Phương Dung</h4>
					<div class="teacher-details">
						<p class="teacher-detail-item">Overall : 8.5 Ielts</p>
						<p class="teacher-detail-item">Tốt nghiệp loại giỏi ĐH Sư phạm</p>
						<p class="teacher-detail-item">Kinh nghiệm 7 năm giảng dạy</p>
					</div>
					<a href="#" class="btn-teacher-more">
						Tìm hiểu thêm
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/arrow-right.svg" alt="" width="14" height="14" loading="lazy">
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Knowledge / Blog Section -->
	<section class="knowledge-section" id="knowledge-section">
		<div class="knowledge-container">
			<div class="knowledge-header">
				<h2 class="knowledge-title"><span class="knowledge-title-highlight">Kiến thức</span> luyện thi IELTS</h2>
				<p class="knowledge-subtitle">Tổng hợp kiến thức luyện thi IELTS hay nhất được biên soạn bởi đội ngũ giáo viên tại HGV</p>
			</div>

			<div class="knowledge-grid">
				<?php
				$blog_args = array(
					'post_type'      => 'post',
					'posts_per_page' => 3,
					'post_status'    => 'publish',
				);
				$blog_query = new WP_Query( $blog_args );
				if ( $blog_query->have_posts() ) :
					while ( $blog_query->have_posts() ) : $blog_query->the_post();
						?>
						<div class="knowledge-card">
							<div class="knowledge-card-cover">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'medium_large', array( 'class' => 'knowledge-card-img', 'alt' => get_the_title() ) ); ?>
								<?php else : ?>
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/blog-banner.webp" alt="<?php the_title_attribute(); ?>" class="knowledge-card-img" width="346" height="214" loading="lazy">
								<?php endif; ?>
							</div>
							<div class="knowledge-card-body">
								<h3 class="knowledge-card-title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>
								<p class="knowledge-card-desc"><?php echo wp_trim_words( get_the_excerpt(), 18, '...' ); ?></p>
								<div class="knowledge-card-footer">
									<div class="knowledge-card-date-icon">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/calendar.svg" alt="Calendar Icon" width="18" height="18" loading="lazy">
									</div>
									<span class="knowledge-card-date-text"><?php echo get_the_date( 'd/m/Y' ); ?></span>
								</div>
							</div>
						</div>
						<?php
					endwhile;
					wp_reset_postdata();
				else :
					// Fallback to static cards if no WordPress posts are available
					?>
					<!-- Fallback Card 1 -->
					<div class="knowledge-card">
						<div class="knowledge-card-cover">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/blog-banner.webp" alt="Hướng dẫn cách viết IELTS Writing task 1 Line Graph chi tiết" class="knowledge-card-img" width="346" height="214" loading="lazy">
						</div>
						<div class="knowledge-card-body">
							<h3 class="knowledge-card-title">
								<a href="#">Hướng dẫn cách viết IELTS Writing task 1 Line Graph chi tiết</a>
							</h3>
							<p class="knowledge-card-desc">Matching Headings (nối tiêu đề) là dạng bài thường xuyên xuất hiện nhất trong đề thi IELTS Reading....</p>
							<div class="knowledge-card-footer">
								<div class="knowledge-card-date-icon">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/calendar.svg" alt="Calendar Icon" width="18" height="18" loading="lazy">
								</div>
								<span class="knowledge-card-date-text">27/03/2025</span>
							</div>
						</div>
					</div>

					<!-- Fallback Card 2 -->
					<div class="knowledge-card">
						<div class="knowledge-card-cover">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/blog-banner.webp" alt="Hướng dẫn cách viết IELTS Writing task 1 Line Graph chi tiết" class="knowledge-card-img" width="346" height="214" loading="lazy">
						</div>
						<div class="knowledge-card-body">
							<h3 class="knowledge-card-title">
								<a href="#">Hướng dẫn cách viết IELTS Writing task 1 Line Graph chi tiết</a>
							</h3>
							<p class="knowledge-card-desc">Matching Headings (nối tiêu đề) là dạng bài thường xuyên xuất hiện nhất trong đề thi IELTS Reading....</p>
							<div class="knowledge-card-footer">
								<div class="knowledge-card-date-icon">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/calendar.svg" alt="Calendar Icon" width="18" height="18" loading="lazy">
								</div>
								<span class="knowledge-card-date-text">27/03/2025</span>
							</div>
						</div>
					</div>

					<!-- Fallback Card 3 -->
					<div class="knowledge-card">
						<div class="knowledge-card-cover">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/blog-banner.webp" alt="Hướng dẫn cách viết IELTS Writing task 1 Line Graph chi tiết" class="knowledge-card-img" width="346" height="214" loading="lazy">
						</div>
						<div class="knowledge-card-body">
							<h3 class="knowledge-card-title">
								<a href="#">Hướng dẫn cách viết IELTS Writing task 1 Line Graph chi tiết</a>
							</h3>
							<p class="knowledge-card-desc">Matching Headings (nối tiêu đề) là dạng bài thường xuyên xuất hiện nhất trong đề thi IELTS Reading....</p>
							<div class="knowledge-card-footer">
								<div class="knowledge-card-date-icon">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/calendar.svg" alt="Calendar Icon" width="18" height="18" loading="lazy">
								</div>
								<span class="knowledge-card-date-text">27/03/2025</span>
							</div>
						</div>
					</div>
					<?php
				endif;
				?>
			</div>
		</div>
	</section>

	<!-- Consultation Section -->
	<section class="consultation-section" id="consultation-section">
		<div class="consultation-uk-flag">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/uk-flag.svg" alt="UK Flag Decor" width="117" height="67" loading="lazy">
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
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/pointer.webp" alt="Student pointing to form" class="consultation-student-img" width="471" height="539" loading="lazy">
			</div>
		</div>
	</section>

	<!-- FAQ Section -->
	<section class="faq-section" id="faq-section">
		<div class="faq-container">
			<div class="faq-content">
				<h2 class="faq-title">Những điều bạn thắc mắc?</h2>
				<p class="faq-subtitle">Tìm hiểu về chất lượng học tập tại HVG</p>

				<div class="faq-accordion">
					<!-- Question 1 -->
					<div class="faq-item">
						<div class="faq-header">
							<h3 class="faq-question">Độ tuổi nào có thể tham gia chương trình học tại trung tâm?</h3>
							<div class="faq-icon">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/plus-fill.svg" alt="Toggle Icon" width="36" height="36" loading="lazy">
							</div>
						</div>
						<div class="faq-answer">
							<p class="faq-answer-inner">
								Chương trình của HVG được xây dựng đa dạng cho học sinh từ 12 tuổi trở lên, sinh viên và người đi làm muốn cải thiện kỹ năng tiếng Anh và thi chứng chỉ IELTS.
							</p>
						</div>
					</div>

					<!-- Question 2 -->
					<div class="faq-item">
						<div class="faq-header">
							<h3 class="faq-question">Chương trình đào tạo IELTS tại HVG</h3>
							<div class="faq-icon">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/plus-fill.svg" alt="Toggle Icon" width="36" height="36" loading="lazy">
							</div>
						</div>
						<div class="faq-answer">
							<p class="faq-answer-inner">
								HVG cung cấp lộ trình học cá nhân hóa toàn diện từ cơ bản đến nâng cao (cam kết đầu ra 6.5 - 8.0+), tập trung phát triển đều 4 kỹ năng Nghe - Nói - Đọc - Viết.
							</p>
						</div>
					</div>

					<!-- Question 3 -->
					<div class="faq-item">
						<div class="faq-header">
							<h3 class="faq-question">Học phí tại IELTS tại HVG như thế nào?</h3>
							<div class="faq-icon">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/plus-fill.svg" alt="Toggle Icon" width="36" height="36" loading="lazy">
							</div>
						</div>
						<div class="faq-answer">
							<p class="faq-answer-inner">
								Học phí tại HVG cực kỳ linh hoạt, phù hợp với lộ trình học tập của từng học viên. Trung tâm thường xuyên có các chương trình học bổng và ưu đãi hấp dẫn.
							</p>
						</div>
					</div>

					<!-- Question 4 -->
					<div class="faq-item">
						<div class="faq-header">
							<h3 class="faq-question">Thi thử IELTS như thế nào?</h3>
							<div class="faq-icon">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/plus-fill.svg" alt="Toggle Icon" width="36" height="36" loading="lazy">
							</div>
						</div>
						<div class="faq-answer">
							<p class="faq-answer-inner">
								Học viên được tham gia các kỳ thi thử (Mock Test) miễn phí định kỳ với đề thi thật cập nhật liên tục để đánh giá chính xác trình độ hiện tại.
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="faq-visual">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/qna-banner.webp" alt="Classroom at HVG" class="faq-classroom-img" width="573" height="382" loading="lazy">
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
