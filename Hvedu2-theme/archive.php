<?php get_header(); ?>

<main class="page-main-content">
    <section class="info-section pt-5 pb-5">
        <div class="container-xxl px-4">
            
            <div class="info-header mb-5 text-center">
                <p class="info-tagline">Tin tức & Bài viết</p>
                <h1 class="info-title">
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

            <div class="info-grid">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="info-card">
                            <a href="<?php the_permalink(); ?>" class="info-card-img text-decoration-none d-block overflow-hidden">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail('medium_large', array('alt' => get_the_title(), 'class' => 'w-100 h-100 object-fit-cover')); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/peoplegroup.webp" alt="<?php the_title_attribute(); ?>" class="w-100 h-100 object-fit-cover">
                                <?php endif; ?>
                            </a>
                            <div class="info-card-body">
                                <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                                    <h3 class="info-card-title text-dark"><?php the_title(); ?></h3>
                                </a>
                                <div class="info-card-meta mt-3 mb-3">
                                    <span class="info-meta-item text-muted">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/stash_data-date-solid.svg" alt="Date"> <?php echo get_the_date('d/m/Y'); ?>
                                    </span>
                                    <span class="info-meta-divider text-muted mx-2">|</span>
                                    <span class="info-meta-item text-muted">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/solar_user-outline.svg" alt="Author"> <?php the_author(); ?>
                                    </span>
                                </div>
                                <div class="info-card-desc text-muted">
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                        </div>
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