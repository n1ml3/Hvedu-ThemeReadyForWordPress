<?php get_header(); ?>

<div class="container-xxl px-4 py-5">

<?php if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_content(); 
    endwhile;
endif; ?>

</div>

<?php get_footer(); ?>
