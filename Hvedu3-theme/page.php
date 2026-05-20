<?php get_header(); ?>

<main class="page-main-content">
    <div class="container-xxl px-4 py-5">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                
                <header class="page-header mb-5 text-center">
                    <h1 class="page-title fw-bold text-primary" style="color: #35AFA5 !important; font-size: 38px; margin-bottom: 30px;">
                        <?php the_title(); ?>
                    </h1>
                </header>

                <div class="page-content" style="max-width: 900px; margin: 0 auto; line-height: 1.8;">
                    <?php the_content(); ?>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
