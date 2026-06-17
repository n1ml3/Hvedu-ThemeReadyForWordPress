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
				<?php
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$library_args = array(
					'post_type'      => 'post',
					'posts_per_page' => 6,
					'paged'          => $paged,
					'post_status'    => 'publish',
				);
				$library_query = new WP_Query( $library_args );
				if ( $library_query->have_posts() ) :
					while ( $library_query->have_posts() ) : $library_query->the_post();
						?>
						<!-- Card -->
						<div class="col-12 col-md-6 col-lg-4">
							<div class="library-card">
								<div class="library-card-img-wrapper">
									<?php if ( has_post_thumbnail() ) : ?>
										<?php the_post_thumbnail( 'medium_large', array( 'class' => 'library-card-img-el', 'alt' => get_the_title() ) ); ?>
									<?php else : ?>
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/library-banner.webp" alt="<?php the_title_attribute(); ?>">
									<?php endif; ?>
								</div>
								<div class="library-card-body">
									<a href="<?php the_permalink(); ?>" class="library-card-title"><?php the_title(); ?></a>
									<p class="library-card-desc"><?php echo wp_trim_words( get_the_excerpt(), 18, '...' ); ?></p>
									<div class="library-card-footer">
										<div class="library-card-date-container">
											<span class="library-card-date-icon">
												<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/date-fill.svg" alt="Date" loading="lazy">
											</span>
											<span><?php echo get_the_date( 'd/m/Y' ); ?></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
					endwhile;
					?>
			</div>

			<!-- Pagination -->
			<nav class="library-pagination-nav" aria-label="Library Page Navigation">
				<div class="library-pagination-wrapper">
					<?php
					echo paginate_links( array(
						'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
						'total'        => $library_query->max_num_pages,
						'current'      => max( 1, $paged ),
						'format'       => '?paged=%#%',
						'show_all'     => false,
						'type'         => 'plain',
						'prev_next'    => true,
						'prev_text'    => sprintf( '<span class="library-page-link">&laquo;</span>' ),
						'next_text'    => sprintf( '<span class="library-page-link">&raquo;</span>' ),
					) );
					?>
				</div>
			</nav>
			<?php
				wp_reset_postdata();
			else :
				// Fallback to static cards if no posts exist yet
				?>
				<!-- Card 1 -->
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

				<!-- Card 2 -->
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

				<!-- Card 3 -->
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
			<?php endif; ?>

		</div>
	</section>
</main>

<?php
get_footer();
