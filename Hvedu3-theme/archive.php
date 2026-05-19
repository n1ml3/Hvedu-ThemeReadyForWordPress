<?php get_header(); ?>

<main class="page-main-content">
    <section class="blog-section pt-5 pb-5">
        <div class="container-xxl px-4">
            
            <div class="blog-header mb-5 text-center">
                <h1 class="blog-title">
                    <?php 
                    if ( is_category() ) {
                        single_cat_title();
                    } elseif ( is_tag() ) {
                        single_tag_title();
                    } elseif ( is_author() ) {
                        the_author();
                    } elseif ( is_home() ) {
                        echo single_post_title( '', false );
                    } else {
                        echo 'Tin tức cập nhật';
                    }
                    ?>
                </h1>
                <?php the_archive_description( '<div class="archive-description mt-3 text-muted">', '</div>' ); ?>
            </div>

            <div class="blog-grid">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article class="blog-card d-flex flex-column">
                            <a href="<?php the_permalink(); ?>" class="d-block overflow-hidden" style="height: 220px;">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail('medium_large', array('alt' => get_the_title(), 'class' => 'blog-image w-100 h-100 object-fit-cover')); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/boich-banner.webp" alt="<?php the_title_attribute(); ?>" class="blog-image w-100 h-100 object-fit-cover">
                                <?php endif; ?>
                            </a>
                            <div class="blog-content d-flex flex-column flex-grow-1">
                                <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                                    <h3 class="blog-card-title text-dark"><?php the_title(); ?></h3>
                                </a>
                                <div class="blog-excerpt text-muted mt-3 mb-4">
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="blog-footer pt-3 mt-auto" style="border-top: 1px solid #eee;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/lets-icons_date-fill.svg" alt="" class="blog-date-icon">
                                    <span class="blog-date"><?php echo get_the_date('d/m/Y'); ?></span>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p class="text-center w-100 py-5">Chưa có bài viết nào trong chuyên mục này.</p>
                <?php endif; ?>
            </div>
            
            <!-- Phân trang -->
            <div class="pagination-wrapper mt-5 pt-4 d-flex justify-content-center gap-2">
                <?php 
                echo paginate_links(array(
                    'prev_text' => '&laquo; Trước',
                    'next_text' => 'Sau &raquo;',
                    'type'      => 'list',
                )); 
                ?>
            </div>

        </div>
    </section>
</main>

<?php get_footer(); ?>
