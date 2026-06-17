<?php
/**
 * Template Name: Introduce Page
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
		<h1 class="breadcrumb-title">Giới thiệu</h1>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb-list">
				<li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumb-link">Trang chủ</a></li>
				<li class="breadcrumb-separator">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/arrow-right-filled.svg" alt="arrow right">
				</li>
				<li class="breadcrumb-item active" aria-current="page">Giới thiệu</li>
			</ol>
		</nav>
	</div>
</section>

<main>
	<!-- About HVG Section -->
	<section class="about-hvg-section">
		<div class="container about-hvg-container">
			<!-- Left column: image collage -->
			<div class="about-hvg-visual">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/school.webp" alt="Lớp học tại HVG" class="about-img-primary">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/discuss.webp" alt="Thảo luận nhóm tại HVG" class="about-img-secondary">
				<div class="about-card-badge">
					<h2 class="about-badge-value">10k<span class="about-badge-plus">+</span></h2>
					<p class="about-badge-label">Học viên tích cực trong khoá học của chúng tôi</p>
				</div>
			</div>

			<!-- Right column: text content -->
			<div class="about-hvg-content">
				<span class="about-tag">Giới thiệu</span>
				<h2 class="about-title">Chào mừng đến với HVG</h2>

				<p class="about-desc">Chúng tôi tạo ra không gian học tập năng động, hiện đại với lớp học tương tác cao, tài liệu cập nhật và phương pháp giảng dạy thực tiễn.</p>
				<p class="about-desc">Học viên không chỉ được hướng dẫn tận tình bởi giảng viên 8.5+ IELTS mà còn được tham gia các buổi luyện tập chuyên sâu, giúp nâng cao kỹ năng nhanh chóng.</p>

				<!-- Features Grid -->
				<div class="about-features">
					<!-- Feature 1 -->
					<div class="about-feature-item">
						<div class="about-feature-icon">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/play.svg" alt="Play">
						</div>
						<div class="about-feature-info">
							<h3 class="about-feature-title">Khoá học cao cấp</h3>
							<p class="about-feature-subtitle">Với các khoá học linh hoạt</p>
						</div>
					</div>

					<!-- Feature 2 -->
					<div class="about-feature-item">
						<div class="about-feature-icon">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/idea.svg" alt="Idea">
						</div>
						<div class="about-feature-info">
							<h3 class="about-feature-title">Học tập linh hoạt</h3>
							<p class="about-feature-subtitle">Học online mọi lúc mọi nơi</p>
						</div>
					</div>
				</div>

				<div class="about-actions">
					<a href="<?php echo esc_url( home_url( '/khoa-hoc' ) ); ?>" class="btn-about-more">
						Xem tất cả khoá học
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Vision & Mission Section -->
	<section class="vision-mission-section">
		<div class="container vision-mission-container">
			<div class="vision-mission-visual">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/mission-banner.webp" alt="Học viên tốt nghiệp tại HVG" class="vision-mission-img">
			</div>

			<div class="vision-mission-content">
				<!-- Vision Box -->
				<div class="vision-box">
					<div class="vision-box-header">
						<div class="vision-box-icon">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/eye.svg" alt="Biểu tượng Tầm nhìn">
						</div>
						<h3 class="vision-box-title">Tầm nhìn</h3>
					</div>
				</div>

				<!-- Mission Box -->
				<div class="mission-box">
					<div class="mission-box-header">
						<div class="mission-box-icon">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/target.svg" alt="Biểu tượng Sứ mệnh">
						</div>
						<h3 class="mission-box-title">Sứ mệnh</h3>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Teachers Section (CPT hvedu_teacher) -->
	<?php
	$teachers_query = new WP_Query( array(
		'post_type'      => 'hvedu_teacher',
		'posts_per_page' => 3,
		'post_status'    => 'publish',
	) );

	$teachers_list = array();
	if ( $teachers_query->have_posts() ) {
		while ( $teachers_query->have_posts() ) {
			$teachers_query->the_post();
			$t_id = get_the_ID();
			$avatar = get_the_post_thumbnail_url( $t_id, 'medium' );
			if ( empty( $avatar ) ) {
				$avatar = get_template_directory_uri() . '/assets/teacher.webp';
			}
			$role  = get_post_meta( $t_id, '_teacher_role', true );
			$meta1 = get_post_meta( $t_id, '_teacher_meta1', true );
			$meta2 = get_post_meta( $t_id, '_teacher_meta2', true );
			$meta3 = get_post_meta( $t_id, '_teacher_meta3', true );

			$teachers_list[] = array(
				'name'   => get_the_title(),
				'avatar' => $avatar,
				'role'   => $role ? $role : 'Giảng viên',
				'meta1'  => $meta1 ? $meta1 : 'Overall : 8.5 Ielts',
				'meta2'  => $meta2 ? $meta2 : 'Tốt nghiệp loại giỏi ĐH Sư phạm',
				'meta3'  => $meta3 ? $meta3 : 'Kinh nghiệm 7 năm giảng dạy',
			);
		}
		wp_reset_postdata();
	}

	// Fallback dynamic defaults if no teachers created yet
	if ( empty( $teachers_list ) ) {
		for ( $i = 1; $i <= 3; $i++ ) {
			$teachers_list[] = array(
				'name'   => 'Phạm Phương Dung',
				'avatar' => get_template_directory_uri() . '/assets/teacher.webp',
				'role'   => 'Giảng viên',
				'meta1'  => 'Overall : 8.5 Ielts',
				'meta2'  => 'Tốt nghiệp loại giỏi ĐH Sư phạm',
				'meta3'  => 'Kinh nghiệm 7 năm giảng dạy',
			);
		}
	}
	?>
	<section class="teachers-section" id="teachers-section">
		<div class="teachers-container">
			<div class="teachers-header">
				<h2 class="teachers-title"><span class="teachers-title-highlight">Đội ngũ giảng viên</span> của chúng tôi</h2>
				<p class="teachers-subtitle">Những người truyền cảm hứng tại HVG</p>
			</div>

			<div class="teachers-grid">
				<?php foreach ( $teachers_list as $teacher ) : ?>
					<div class="teacher-card">
						<div class="teacher-avatar-wrap">
							<img src="<?php echo esc_url( $teacher['avatar'] ); ?>" alt="Giảng viên <?php echo esc_attr( $teacher['name'] ); ?>" class="teacher-avatar" width="279" height="292" loading="lazy">
						</div>
						<h3 class="teacher-role"><?php echo esc_html( $teacher['role'] ); ?></h3>
						<h4 class="teacher-name"><?php echo esc_html( $teacher['name'] ); ?></h4>
						<div class="teacher-details">
							<p class="teacher-detail-item"><?php echo esc_html( $teacher['meta1'] ); ?></p>
							<p class="teacher-detail-item"><?php echo esc_html( $teacher['meta2'] ); ?></p>
							<p class="teacher-detail-item"><?php echo esc_html( $teacher['meta3'] ); ?></p>
						</div>
						<a href="#" class="btn-teacher-more">
							Tìm hiểu thêm
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/arrow-right.svg" alt="" width="14" height="14" loading="lazy">
						</a>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- FAQ Section (CPT hvedu_faq) -->
	<?php
	$faq_visual = get_theme_mod( 'faq_visual_image' );
	if ( empty( $faq_visual ) ) {
		$faq_visual = get_template_directory_uri() . '/assets/qna-banner.webp';
	}

	$faqs_query = new WP_Query( array(
		'post_type'      => 'hvedu_faq',
		'posts_per_page' => 10,
		'post_status'    => 'publish',
	) );

	$faqs_list = array();
	if ( $faqs_query->have_posts() ) {
		while ( $faqs_query->have_posts() ) {
			$faqs_query->the_post();
			$faqs_list[] = array(
				'q' => get_the_title(),
				'a' => get_the_content(),
			);
		}
		wp_reset_postdata();
	}

	// Fallback dynamic defaults if no FAQs created yet
	if ( empty( $faqs_list ) ) {
		$faqs_list = array(
			array(
				'q' => 'Độ tuổi nào có thể tham gia chương trình học tại trung tâm?',
				'a' => 'Chương trình của HVG được xây dựng đa dạng cho học sinh từ 12 tuổi trở lên, sinh viên và người đi làm muốn cải thiện kỹ năng tiếng Anh và thi chứng chỉ IELTS.',
			),
			array(
				'q' => 'Chương trình đào tạo IELTS tại HVG',
				'a' => 'HVG cung cấp lộ trình học cá nhân hóa toàn diện từ cơ bản đến nâng cao (cam kết đầu ra 6.5 - 8.0+), tập trung phát triển đều 4 kỹ năng Nghe - Nói - Đọc - Viết.',
			),
			array(
				'q' => 'Học phí tại IELTS tại HVG như thế nào?',
				'a' => 'Học phí tại HVG cực kỳ linh hoạt, phù hợp với lộ trình học tập của từng học viên. Trung tâm thường xuyên có các chương trình học bổng và ưu đãi hấp dẫn.',
			),
			array(
				'q' => 'Thi thử IELTS như thế nào?',
				'a' => 'Học viên được tham gia các kỳ thi thử (Mock Test) miễn phí định kỳ với đề thi thật cập nhật liên tục để đánh giá chính xác trình độ hiện tại.',
			),
		);
	}
	?>
	<section class="faq-section" id="faq-section">
		<div class="faq-container">
			<div class="faq-content">
				<h2 class="faq-title">Những điều bạn thắc mắc?</h2>
				<p class="faq-subtitle">Tìm hiểu về chất lượng học tập tại HVG</p>

				<div class="faq-accordion">
					<?php foreach ( $faqs_list as $index => $faq ) : ?>
						<div class="faq-item">
							<div class="faq-header">
								<h3 class="faq-question"><?php echo esc_html( $faq['q'] ); ?></h3>
								<div class="faq-icon">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/plus-fill.svg" alt="Toggle Icon" width="36" height="36" loading="lazy">
								</div>
							</div>
							<div class="faq-answer">
								<p class="faq-answer-inner"><?php echo wp_kses_post( $faq['a'] ); ?></p>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>

			<div class="faq-visual">
				<img src="<?php echo esc_url( $faq_visual ); ?>" alt="Classroom at HVG" class="faq-classroom-img" width="573" height="382" loading="lazy">
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
