<?php
get_header();
if(have_posts()):
    while(have_posts() ): the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <p><?php the_date();?> | <?php echo get_the_category_list(', ');?></p>
    <?php the_content(); ?>

    <?php
    endwhile;
else:
    echo  '<p>No posts</p>';
endif;
get_sidebar();
get_footer();
?>