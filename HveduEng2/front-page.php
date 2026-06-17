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

// ==========================================
// FETCH CUSTOMIZER SETTINGS (HERO & VISUALS)
// ==========================================
$hero_title    = get_theme_mod( 'hero_title', 'Chinh Phục IELTS - Đạt Điểm Cao' );
$hero_subtitle = get_theme_mod( 'hero_subtitle', 'Ngay Lần Thi Đầu Tiên!' );
$hero_feat1    = get_theme_mod( 'hero_feature_1', 'Lộ trình học cá nhân hóa theo trình độ' );
$hero_feat2    = get_theme_mod( 'hero_feature_2', 'Giảng viên chuyên sâu, many years experience' );
$hero_feat3    = get_theme_mod( 'hero_feature_3', 'Cam kết đầu ra, hỗ trợ đến khi đạt mục tiêu' );

$hero_bg = get_theme_mod( 'hero_bg_image' );
if ( empty( $hero_bg ) ) {
	$hero_bg = get_template_directory_uri() . '/assets/hero-banner.webp';
}

$faq_visual = get_theme_mod( 'faq_visual_image' );
if ( empty( $faq_visual ) ) {
	$faq_visual = get_template_directory_uri() . '/assets/qna-banner.webp';
}

$uk_flag = get_theme_mod( 'consultation_flag' );
if ( empty( $uk_flag ) ) {
	$uk_flag = get_template_directory_uri() . '/assets/uk-flag.svg';
}

$student_pointer = get_theme_mod( 'consultation_student' );
if ( empty( $student_pointer ) ) {
	$student_pointer = get_template_directory_uri() . '/assets/pointer.webp';
}
?>

<main>
	<!-- Hero Section -->
	<section class="hero-section" id="hero-section">
		<div class="hero-background">
			<img src="<?php echo esc_url( $hero_bg ); ?>" alt="Hero Banner Background" class="hero-bg-image" width="1440" height="764" fetchpriority="high">
			<div class="hero-gradient-overlay"></div>
		</div>

		<div class="container hero-container">
			<div class="hero-content">
				<div class="hero-headline-box">
					<h1 class="hero-headline"><?php echo esc_html( $hero_title ); ?></h1>
				</div>

				<p class="hero-subheadline"><?php echo esc_html( $hero_subtitle ); ?></p>

				<ul class="hero-features">
					<?php if ( ! empty( $hero_feat1 ) ) : ?>
					<li class="hero-feature-item">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/tick.svg" alt="" class="hero-check-icon" width="30" height="30">
						<span><?php echo esc_html( $hero_feat1 ); ?></span>
					</li>
					<?php endif; ?>
					<?php if ( ! empty( $hero_feat2 ) ) : ?>
					<li class="hero-feature-item">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/tick.svg" alt="" class="hero-check-icon" width="30" height="30">
						<span><?php echo esc_html( $hero_feat2 ); ?></span>
					</li>
					<?php endif; ?>
					<?php if ( ! empty( $hero_feat3 ) ) : ?>
					<li class="hero-feature-item">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/tick.svg" alt="" class="hero-check-icon" width="30" height="30">
						<span><?php echo esc_html( $hero_feat3 ); ?></span>
					</li>
					<?php endif; ?>
				</ul>

				<div class="hero-cta-group">
					<a href="#consultation-section" class="btn-hero-outline">Đăng ký tư vấn</a>
					<a href="<?php echo esc_url( home_url( '/khoa-hoc' ) ); ?>" class="btn-hero-filled">Lộ trình học Ielts</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Stats Bar Section -->
	<section class="stats-section" id="stats-section">
		<div class="container">
			<div class="stats-bar">
				<?php 
				$default_stats = array(
					1 => array( 'num' => '30+', 'desc' => 'Nhân sự là chuyên gia trong lĩnh vực giáo dục và đào tạo' ),
					2 => array( 'num' => '+1000', 'desc' => 'Học viên tiếp cận với chương trình học tiên tiến' ),
					3 => array( 'num' => '11+', 'desc' => 'Năm nghiên cứu và hoạt động trong lĩnh vực giáo dục' ),
					4 => array( 'num' => '90%', 'desc' => 'Học viên đạt được mục tiêu mong muốn' ),
				);
				$rendered_count = 0;
				for ( $i = 1; $i <= 4; $i++ ) : 
					$stat_num  = get_theme_mod( "stat_number_{$i}", $default_stats[$i]['num'] );
					$stat_desc = get_theme_mod( "stat_desc_{$i}", $default_stats[$i]['desc'] );
					if ( empty( $stat_num ) && empty( $stat_desc ) ) {
						continue;
					}
					$rendered_count++;
					?>
					<?php if ( $rendered_count > 1 ) : ?>
						<div class="stat-divider"></div>
					<?php endif; ?>
					<div class="stat-item">
						<span class="stat-number"><?php echo esc_html( $stat_num ); ?></span>
						<p class="stat-desc"><?php echo esc_html( $stat_desc ); ?></p>
					</div>
				<?php endfor; ?>
			</div>
		</div>
	</section>

	<!-- Courses Section (CPT hvedu_course) -->
	<?php
	$courses_query = new WP_Query( array(
		'post_type'      => 'hvedu_course',
		'posts_per_page' => 4,
		'post_status'    => 'publish',
		'orderby'        => 'date',
		'order'          => 'ASC',
	) );

	$courses_list = array();
	if ( $courses_query->have_posts() ) {
		while ( $courses_query->have_posts() ) {
			$courses_query->the_post();
			$c_id = get_the_ID();
			
			$entry = get_post_meta( $c_id, '_course_entry', true );
			$exit  = get_post_meta( $c_id, '_course_exit', true );
			$mode  = get_post_meta( $c_id, '_course_mode', true );
			
			$feat1 = get_post_meta( $c_id, '_course_feat1', true );
			$feat2 = get_post_meta( $c_id, '_course_feat2', true );
			$feat3 = get_post_meta( $c_id, '_course_feat3', true );
			
			$t_name  = get_post_meta( $c_id, '_course_teacher_name', true );
			$t_score = get_post_meta( $c_id, '_course_teacher_score', true );

			$img = get_the_post_thumbnail_url( $c_id, 'large' );
			if ( empty( $img ) ) {
				$img = get_template_directory_uri() . '/assets/course-teacher.webp';
			}

			$courses_list[] = array(
				'title'         => get_the_title(),
				'entry'         => $entry ? $entry : 'Đầu vào: 0',
				'exit'          => $exit ? $exit : 'Đầu ra: 8.0+',
				'mode'          => $mode ? $mode : 'Online/ Offline',
				'feat1'         => $feat1 ? $feat1 : 'Đội ngũ giáo viên top đầu chuẩn sư phạm',
				'feat2'         => $feat2 ? $feat2 : 'Giáo trình được biên soạn đặc quyền',
				'feat3'         => $feat3 ? $feat3 : 'Giáo trình được biên soạn đặc quyền',
				'teacher_name'  => $t_name ? $t_name : 'Ms. Trinh My Hanh',
				'teacher_score' => $t_score ? $t_score : '8.5',
				'img_url'       => $img,
			);
		}
		wp_reset_postdata();
	}

	// Fallback dynamic defaults if client hasn't added courses yet
	if ( empty( $courses_list ) ) {
		for ( $i = 1; $i <= 4; $i++ ) {
			$courses_list[] = array(
				'title'         => 'Luyện thi Ielts',
				'entry'         => 'Đầu vào: 0',
				'exit'          => 'Đầu ra: 8.0+',
				'mode'          => 'Online/ Ofline',
				'feat1'         => 'Đội ngũ giáo viên top đầu chuẩn sư phạm',
				'feat2'         => 'Giáo trình được biên soạn đặc quyền',
				'feat3'         => 'Giáo trình được biên soạn đặc quyền',
				'teacher_name'  => 'Ms. Trinh My Hanh',
				'teacher_score' => '8.5',
				'img_url'       => get_template_directory_uri() . '/assets/course-teacher.webp',
			);
		}
	}

	$first_course = $courses_list[0];
	?>
	<section class="courses-section" id="courses-section">
		<div class="course-card">
			<div class="course-card-inner">
				
				<!-- LEFT COLUMN: Course info -->
				<div class="course-info">
					<p class="course-label">Chương trình học</p>
					<h2 class="course-title"><?php echo esc_html( $first_course['title'] ); ?></h2>

					<div class="course-level-group">
						<div class="course-level-item">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/enter.svg" alt="" class="course-level-icon" width="30" height="30" loading="lazy">
							<span class="course-level-text"><?php echo esc_html( $first_course['entry'] ); ?></span>
						</div>
						<div class="course-level-item">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/exit.svg" alt="" class="course-level-icon" width="30" height="30" loading="lazy">
							<span class="course-level-text"><?php echo esc_html( $first_course['exit'] ); ?></span>
						</div>
					</div>

					<div class="course-divider"></div>

					<div class="course-features">
						<div class="course-feature-item">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/teacher.svg" alt="" class="course-feature-icon" width="45" height="45" loading="lazy">
							<p class="course-feature-text"><?php echo esc_html( $first_course['feat1'] ); ?></p>
						</div>
						<div class="course-feature-item">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/magistrate.svg" alt="" class="course-feature-icon" width="45" height="45" loading="lazy">
							<p class="course-feature-text"><?php echo esc_html( $first_course['feat2'] ); ?></p>
						</div>
						<div class="course-feature-item">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/student.svg" alt="" class="course-feature-icon" width="45" height="45" loading="lazy">
							<p class="course-feature-text"><?php echo esc_html( $first_course['feat3'] ); ?></p>
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
					<img src="<?php echo esc_url( $first_course['img_url'] ); ?>" alt="Giáo viên IELTS" class="course-teacher-img" width="667" height="1000" loading="lazy">
					<div class="course-score-badge">
						<span class="course-score-number"><?php echo esc_html( $first_course['teacher_score'] ); ?></span>
						<span class="course-score-label">overall</span>
					</div>
					<p class="course-teacher-name"><?php echo esc_html( $first_course['teacher_name'] ); ?></p>
				</div>

			</div>

			<!-- Course Program Selector Bar -->
			<div class="course-programs-bar">
				<ul class="course-programs-list">
					<?php foreach ( $courses_list as $index => $course ) : 
						$puzzle_icon = ( $index === 0 ) ? 'puzzle.svg' : 'puzzle-white.svg';
						?>
						<?php if ( $index > 0 ) : ?>
							<li class="course-program-divider" aria-hidden="true"></li>
						<?php endif; ?>
						<li class="course-program-item <?php echo $index === 0 ? 'active' : ''; ?>" 
							data-title="<?php echo esc_attr( $course['title'] ); ?>"
							data-entry="<?php echo esc_attr( $course['entry'] ); ?>"
							data-exit="<?php echo esc_attr( $course['exit'] ); ?>"
							data-feat1="<?php echo esc_attr( $course['feat1'] ); ?>"
							data-feat2="<?php echo esc_attr( $course['feat2'] ); ?>"
							data-feat3="<?php echo esc_attr( $course['feat3'] ); ?>"
							data-teacher="<?php echo esc_attr( $course['teacher_name'] ); ?>"
							data-score="<?php echo esc_attr( $course['teacher_score'] ); ?>"
							data-img="<?php echo esc_url( $course['img_url'] ); ?>">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/' . $puzzle_icon ); ?>" alt="" class="course-program-icon" width="48" height="48" loading="lazy">
							<div class="course-program-info">
								<span class="course-program-name"><?php echo esc_html( $course['title'] ); ?></span>
								<span class="course-program-mode"><?php echo esc_html( $course['mode'] ); ?></span>
							</div>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>

		</div>
	</section>

	<!-- Reasons Section (CPT hvedu_reason) -->
	<?php
	$reasons_query = new WP_Query( array(
		'post_type'      => 'hvedu_reason',
		'posts_per_page' => 6,
		'post_status'    => 'publish',
	) );

	$reasons_list = array();
	if ( $reasons_query->have_posts() ) {
		while ( $reasons_query->have_posts() ) {
			$reasons_query->the_post();
			$icon = get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' );
			if ( empty( $icon ) ) {
				$icon = get_template_directory_uri() . '/assets/medal.svg';
			}
			$reasons_list[] = array(
				'title' => get_the_title(),
				'desc'  => get_the_content(),
				'icon'  => $icon,
			);
		}
		wp_reset_postdata();
	}

	// Fallback dynamic defaults if no reasons created yet
	if ( empty( $reasons_list ) ) {
		for ( $i = 1; $i <= 6; $i++ ) {
			$reasons_list[] = array(
				'title' => 'Cam kết hỗ trợ học viên ' . $i,
				'desc'  => 'Học viên được đồng hành và hỗ trợ liên tục cho đến khi đạt được mục tiêu đề ra.',
				'icon'  => get_template_directory_uri() . '/assets/medal.svg',
			);
		}
	}
	?>
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
				<!-- COLUMN 1: Reasons 0 & 3 -->
				<div class="reasons-col">
					<div class="reason-card">
						<div class="reason-card-icon-wrap">
							<img src="<?php echo esc_url( $reasons_list[0]['icon'] ); ?>" alt="" class="reason-card-icon" width="65" height="65" loading="lazy">
						</div>
						<h3 class="reason-card-title"><?php echo esc_html( $reasons_list[0]['title'] ); ?></h3>
						<p class="reason-card-desc"><?php echo esc_html( $reasons_list[0]['desc'] ); ?></p>
					</div>

					<div class="reason-card">
						<div class="reason-card-icon-wrap">
							<img src="<?php echo esc_url( $reasons_list[3]['icon'] ); ?>" alt="" class="reason-card-icon" width="65" height="65" loading="lazy">
						</div>
						<h3 class="reason-card-title"><?php echo esc_html( $reasons_list[3]['title'] ); ?></h3>
						<p class="reason-card-desc"><?php echo esc_html( $reasons_list[3]['desc'] ); ?></p>
					</div>
				</div>

				<!-- COLUMN 2: Reasons 1 & 4 (Staggered) -->
				<div class="reasons-col reasons-col-staggered">
					<div class="reason-card">
						<div class="reason-card-icon-wrap">
							<img src="<?php echo esc_url( $reasons_list[1]['icon'] ); ?>" alt="" class="reason-card-icon" width="65" height="65" loading="lazy">
						</div>
						<h3 class="reason-card-title"><?php echo esc_html( $reasons_list[1]['title'] ); ?></h3>
						<p class="reason-card-desc"><?php echo esc_html( $reasons_list[1]['desc'] ); ?></p>
					</div>

					<div class="reason-card">
						<div class="reason-card-icon-wrap">
							<img src="<?php echo esc_url( $reasons_list[4]['icon'] ); ?>" alt="" class="reason-card-icon" width="65" height="65" loading="lazy">
						</div>
						<h3 class="reason-card-title"><?php echo esc_html( $reasons_list[4]['title'] ); ?></h3>
						<p class="reason-card-desc"><?php echo esc_html( $reasons_list[4]['desc'] ); ?></p>
					</div>
				</div>

				<!-- COLUMN 3: Reasons 2 & 5 -->
				<div class="reasons-col">
					<div class="reason-card">
						<div class="reason-card-icon-wrap">
							<img src="<?php echo esc_url( $reasons_list[2]['icon'] ); ?>" alt="" class="reason-card-icon" width="65" height="65" loading="lazy">
						</div>
						<h3 class="reason-card-title"><?php echo esc_html( $reasons_list[2]['title'] ); ?></h3>
						<p class="reason-card-desc"><?php echo esc_html( $reasons_list[2]['desc'] ); ?></p>
					</div>

					<div class="reason-card">
						<div class="reason-card-icon-wrap">
							<img src="<?php echo esc_url( $reasons_list[5]['icon'] ); ?>" alt="" class="reason-card-icon" width="65" height="65" loading="lazy">
						</div>
						<h3 class="reason-card-title"><?php echo esc_html( $reasons_list[5]['title'] ); ?></h3>
						<p class="reason-card-desc"><?php echo esc_html( $reasons_list[5]['desc'] ); ?></p>
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
						<a href="<?php echo esc_url( home_url( '/gioi-thieu' ) ); ?>" class="btn-teacher-more">
							Tìm hiểu thêm
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/arrow-right.svg" alt="" width="14" height="14" loading="lazy">
						</a>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- Knowledge Section (Dynamic standard posts loop) -->
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
					// Fallback to static cards if no posts exist yet
					?>
					<div class="knowledge-card">
						<div class="knowledge-card-cover">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/blog-banner.webp" alt="" class="knowledge-card-img" width="346" height="214" loading="lazy">
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

					<div class="knowledge-card">
						<div class="knowledge-card-cover">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/blog-banner.webp" alt="" class="knowledge-card-img" width="346" height="214" loading="lazy">
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

					<div class="knowledge-card">
						<div class="knowledge-card-cover">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/blog-banner.webp" alt="" class="knowledge-card-img" width="346" height="214" loading="lazy">
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
				<?php endif; ?>
			</div>
		</div>
	</section>

	<!-- Consultation Section -->
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

	<!-- FAQ Section (CPT hvedu_faq) -->
	<?php
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
