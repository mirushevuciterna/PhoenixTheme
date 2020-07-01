<?php get_header(); ?>

<div class="p-5">
    <div class="div-post">
    <?php 
    if( have_posts() ):
        while( have_posts() ): the_post(); ?>
        <div class="postet">
            <div class="post-title">
                <h3><?php the_title(); ?></h3>
            </div>
            <div class="time-info">
                <small>Posted on: <?php the_time('F j, Y'); ?> 
                    at <?php the_time('g:i a') ?>, 
                    in <?php the_category(); ?></small>
            </div>
            <div class="post-content">
                <p><?php the_content(); ?></p>
            </div>
        </div>
    <?php endwhile;
    endif;
    ?>
    </div>

</div>
<div class="pagination">
    <?php post_pagination(); ?>
</div>


<?php get_footer(); ?>