<?php
/**
 * Template Name: Calendar Page
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
		<h1 class="breadcrumb-title">Lịch khai giảng</h1>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb-list">
				<li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumb-link">Trang chủ</a></li>
				<li class="breadcrumb-separator">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/arrow-right-filled.svg" alt="arrow right">
				</li>
				<li class="breadcrumb-item active" aria-current="page">Lịch khai giảng</li>
			</ol>
		</nav>
	</div>
</section>

<main>
	<!-- Schedule Section -->
	<section class="schedule-section">
		<div class="container">
			<div class="schedule-header">
				<h2 class="schedule-title">Lịch khai giảng tháng 4 tại <span class="text-highlight">HVG Education</span></h2>
				<div class="schedule-decor-line"></div>
			</div>

			<!-- Schedule Table Card -->
			<div class="schedule-table-card">
				<div class="table-responsive">
					<table class="table schedule-table align-middle">
						<thead>
							<tr>
								<th scope="col">Mã lớp</th>
								<th scope="col">Cơ sở</th>
								<th scope="col">Đầu vào</th>
								<th scope="col">Đầu ra</th>
								<th scope="col">Khai giảng</th>
								<th scope="col">Lịch học</th>
								<th scope="col">Thời lượng</th>
								<th scope="col">Tình trạng</th>
								<th scope="col" class="col-register">Đăng ký</th>
							</tr>
						</thead>
						<tbody>
							<!-- Class 1 -->
							<tr>
								<td>THH100</td>
								<td>Cơ sở 1</td>
								<td>Toeic &lt; 400</td>
								<td>Toeic 650+</td>
								<td>2025-04-20</td>
								<td>17h30-19h30</td>
								<td>2h</td>
								<td>Còn 8 slot</td>
								<td class="col-register">
									<a href="<?php echo esc_url( home_url( '/#consultation-section' ) ); ?>" class="btn-register-table">Đăng ký</a>
								</td>
							</tr>
							<!-- Class 2 -->
							<tr>
								<td>THH100</td>
								<td>Cơ sở 1</td>
								<td>Toeic &lt; 400</td>
								<td>Toeic 650+</td>
								<td>2025-04-20</td>
								<td>17h30-19h30</td>
								<td>2h</td>
								<td>Còn 8 slot</td>
								<td class="col-register">
									<a href="<?php echo esc_url( home_url( '/#consultation-section' ) ); ?>" class="btn-register-table">Đăng ký</a>
								</td>
							</tr>
							<!-- Class 3 -->
							<tr>
								<td>THH100</td>
								<td>Cơ sở 1</td>
								<td>Toeic &lt; 400</td>
								<td>Toeic 650+</td>
								<td>2025-04-20</td>
								<td>17h30-19h30</td>
								<td>2h</td>
								<td>Còn 8 slot</td>
								<td class="col-register">
									<a href="<?php echo esc_url( home_url( '/#consultation-section' ) ); ?>" class="btn-register-table">Đăng ký</a>
								</td>
							</tr>
							<!-- Class 4 -->
							<tr>
								<td>THH100</td>
								<td>Cơ sở 1</td>
								<td>Toeic &lt; 400</td>
								<td>Toeic 650+</td>
								<td>2025-04-20</td>
								<td>17h30-19h30</td>
								<td>2h</td>
								<td>Còn 8 slot</td>
								<td class="col-register">
									<a href="<?php echo esc_url( home_url( '/#consultation-section' ) ); ?>" class="btn-register-table">Đăng ký</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
