<?php
get_header();

?>
<div id="content">
    <main id="main">

        <?php
    if(have_posts()):
        while(have_posts() ): the_post(); ?>
        <article>
            <h2> <?php the_title(); ?></h2>
            <p class="date-category"><?php the_date();?> | <?php echo get_the_category_list(', ');?></p>
            <?php the_content(); ?>
        </article>
        <?php
    endwhile;
else:
    echo  '<p>No posts</p>';
endif; ?>
</main>
<?php get_sidebar(); ?>
</div>
<?php get_footer();
?>