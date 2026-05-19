<?php get_header(); ?>

<main class="single-main-content">
    <div class="container-xxl px-4 py-5">
        <div class="row justify-content-center">
            <div class="">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        
                        <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white p-lg-5 p-4 rounded shadow-sm'); ?>>
                            
                            <header class="single-header mb-4 text-center">
                                <h1 class="single-title fw-bold text-primary mb-3" style="color: #0056b3 !important; font-size: 2.2rem;"><?php the_title(); ?></h1>
                                
                                <div class="single-meta d-flex justify-content-center align-items-center gap-3 text-muted mb-4 pb-4 border-bottom">
                                    <span class="meta-date d-flex align-items-center gap-1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/stash_data-date-solid.svg" alt="Date" width="16"> 
                                        <?php echo get_the_date('d/m/Y'); ?>
                                    </span>
                                    <span class="meta-author d-flex align-items-center gap-1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/solar_user-outline.svg" alt="Author" width="16"> 
                                        <?php the_author(); ?>
                                    </span>
                                    <span class="meta-category d-flex align-items-center gap-1">
                                        <strong>Chuyên mục: </strong> <?php the_category(', '); ?>
                                    </span>
                                </div>

                                <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="single-thumbnail mb-5 rounded overflow-hidden shadow-sm">
                                        <?php the_post_thumbnail('large', array('class' => 'img-fluid w-100 object-fit-cover', 'style' => 'max-height: 500px;')); ?>
                                    </div>
                                <?php endif; ?>
                            </header>

                            <div class="single-content lh-lg fs-6" style="color: #4a4a4a;">
                                <?php the_content(); ?>
                            </div>
                            
                            <div class="single-tags mt-5 pt-4 border-top">
                                <?php the_tags('<span class="fw-bold">Tags: </span>', ', ', ''); ?>
                            </div>

                        </article>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
