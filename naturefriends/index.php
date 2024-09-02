<?php
get_header();

?>
<div id="content">
    <main id="main">

        <?php
    if(have_posts()):
        while(have_posts() ): the_post(); ?>
        <article>
            <h2> <a href="<?php the_permalink()?>"><?php the_title(); ?></a></h2>
            <p class="date-category"><?php the_date();?> | <?php echo get_the_category_list(', ');?></p>
            <?php the_excerpt(); ?>
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