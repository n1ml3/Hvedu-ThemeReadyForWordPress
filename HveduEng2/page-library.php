<?php
/**
 * Template Name: Library Page
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
		<h1 class="breadcrumb-title">Thư viện</h1>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb-list">
				<li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumb-link">Trang chủ</a></li>
				<li class="breadcrumb-separator">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/arrow-right-filled.svg" alt="arrow right">
				</li>
				<li class="breadcrumb-item active" aria-current="page">Thư viện</li>
			</ol>
		</nav>
	</div>
</section>

<main>
	<!-- Document Library Section -->
	<section class="library-section">
		<div class="container">
			
			<!-- Header & Search -->
			<div class="library-header-row">
				<h2 class="library-title">Tài liệu học</h2>
				
				<div class="library-search-container">
					<input type="text" class="library-search-input" placeholder="Tìm kiếm">
					<div class="library-search-icon">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/search.svg" alt="Search">
					</div>
				</div>
			</div>

			<!-- Grid of 6 Document Cards -->
			<div class="row g-4 library-grid">
				<?php for ( $i = 1; $i <= 6; $i++ ) : ?>
					<!-- Card -->
					<div class="col-12 col-md-6 col-lg-4">
						<div class="library-card">
							<div class="library-card-img-wrapper">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/library-banner.webp" alt="Banner">
							</div>
							<div class="library-card-body">
								<a href="#" class="library-card-title">Hướng dẫn cách viết IELTS Writing task 1 Line Graph chi tiết</a>
								<p class="library-card-desc">Matching Headings (nối tiêu đề) là dạng bài thường xuyên xuất hiện nhất trong đề thi IELTS Reading....</p>
								<div class="library-card-footer">
									<div class="library-card-date-container">
										<span class="library-card-date-icon">
											<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/date-fill.svg" alt="Date">
										</span>
										<span>27/03/2025</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endfor; ?>
			</div>

			<!-- Pagination -->
			<nav class="library-pagination-nav" aria-label="Library Page Navigation">
				<ul class="library-pagination">
					<li class="library-page-item disabled">
						<span class="library-page-link" aria-label="Previous">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
								<polyline points="15 18 9 12 15 6"></polyline>
							</svg>
						</span>
					</li>
					
					<li class="library-page-item active">
						<span class="library-page-link">1</span>
					</li>
					<li class="library-page-item">
						<a class="library-page-link" href="#">2</a>
					</li>
					<li class="library-page-item">
						<span class="library-page-link">...</span>
					</li>
					<li class="library-page-item">
						<a class="library-page-link" href="#">5</a>
					</li>
					<li class="library-page-item">
						<a class="library-page-link" href="#">6</a>
					</li>
					
					<li class="library-page-item">
						<a class="library-page-link" href="#" aria-label="Next">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
								<polyline points="9 18 15 12 9 6"></polyline>
							</svg>
						</a>
					</li>
				</ul>
			</nav>

		</div>
	</section>
</main>

<?php
get_footer();
