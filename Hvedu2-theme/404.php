<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package HVedu
 */

get_header(); ?>

<main>
    <section class="error-404 not-found py-5 my-5">
        <div class="container-xxl text-center py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <!-- Error Code Visual -->
                    <h1 class="display-1 fw-bold text-primary mb-3" style="font-size: 8rem; letter-spacing: -2px;">404</h1>
                    
                    <!-- Main heading -->
                    <h2 class="h2 mb-4 text-dark fw-bold">Không Tìm Thấy Trang</h2>
                    
                    <!-- Description -->
                    <p class="text-muted mb-5 lead">
                        Xin lỗi, trang bạn đang tìm kiếm không tồn tại hoặc đã bị di chuyển sang đường dẫn khác.
                    </p>
                    
                    <!-- Search form integration -->
                    <div class="search-form-wrapper mb-5 mx-auto" style="max-width: 450px;">
                        <p class="text-muted small mb-3">Bạn có thể thử tìm kiếm nội dung bên dưới:</p>
                        <?php get_search_form(); ?>
                    </div>
                    
                    <!-- Call to action button -->
                    <a href="<?php echo esc_url( home_url('/') ); ?>" class="btn btn-primary px-4 py-3 fw-bold rounded-pill text-white shadow-sm transition-all" style="background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%); border: none;">
                        Quay lại Trang chủ
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow-right-white.svg" alt="" style="margin-left: 8px; width: 16px;">
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
