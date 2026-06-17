<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HveduEng2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<!-- Simple Breadcrumb Header for default templates -->
<section class="breadcrumb-banner" style="background: linear-gradient(135deg, #0d233a 0%, #081522 100%); padding: 60px 0; text-align: center; color: #fff;">
	<div class="container">
		<h1 class="breadcrumb-title" style="font-size: 2.5rem; font-weight: 700; margin-bottom: 15px; color: #fff;">
			<?php 
			if ( is_archive() ) {
				the_archive_title();
			} elseif ( is_search() ) {
				printf( esc_html__( 'Kết quả tìm kiếm cho: %s', 'HveduEng2' ), '<span>' . get_search_query() . '</span>' );
			} elseif ( is_home() && ! is_front_page() ) {
				single_post_title();
			} else {
				the_title();
			}
			?>
		</h1>
	</div>
</section>

<main id="primary" class="site-main py-5" style="background-color: #f8fafc; min-height: 400px;">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) {
						// Blog archive page
						while ( have_posts() ) :
							the_post();
							?>
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-5 p-4 bg-white rounded shadow-sm' ); ?>>
								<header class="entry-header mb-3">
									<h2 class="entry-title">
										<a href="<?php the_permalink(); ?>" class="text-decoration-none" style="color: #0d233a; font-weight: 700;">
											<?php the_title(); ?>
										</a>
									</h2>
									<div class="entry-meta text-muted small">
										<span class="posted-on">
											<i class="calendar-icon"></i> <?php echo get_the_date(); ?>
										</span>
									</div>
								</header>

								<?php if ( has_post_thumbnail() ) : ?>
									<div class="post-thumbnail mb-3">
										<?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid rounded' ) ); ?>
									</div>
								<?php endif; ?>

								<div class="entry-content">
									<?php the_excerpt(); ?>
								</div>
							</article>
							<?php
						endwhile;

						the_posts_navigation( array(
							'prev_text' => esc_html__( '« Bài cũ hơn', 'HveduEng2' ),
							'next_text' => esc_html__( 'Bài mới hơn »', 'HveduEng2' ),
						) );

					} else {
						// Single post or static page
						while ( have_posts() ) :
							the_post();
							?>
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'bg-white p-4 p-md-5 rounded shadow-sm' ); ?>>
								<?php if ( has_post_thumbnail() && ! is_page() ) : ?>
									<div class="post-thumbnail mb-4">
										<?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid rounded' ) ); ?>
									</div>
								<?php endif; ?>

								<div class="entry-content" style="line-height: 1.8; color: #334155;">
									<?php
									the_content();

									wp_link_pages( array(
										'before' => '<div class="page-links">' . esc_html__( 'Trang:', 'HveduEng2' ),
										'after'  => '</div>',
									) );
									?>
								</div>
							</article>
							<?php
						endwhile;
					}

				else :
					?>
					<div class="no-results not-found bg-white p-5 rounded shadow-sm text-center">
						<h2 class="mb-3"><?php esc_html_e( 'Không tìm thấy nội dung', 'HveduEng2' ); ?></h2>
						<p class="text-muted"><?php esc_html_e( 'Rất tiếc, không có nội dung nào phù hợp với yêu cầu của bạn.', 'HveduEng2' ); ?></p>
					</div>
					<?php
				endif;
				?>
			</div>
		</div>
	</div>
</main>

<?php
get_footer();
