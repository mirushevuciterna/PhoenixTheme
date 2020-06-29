<?php get_header(); ?>

<div class="container-fluid">
    <?php 
if( have_posts() ): 
    while ( have_posts() ): the_post(); ?>
    <div class="list-group my-5 py-3 col-12 col-md-8 hideMe">
        <a href="<?php echo the_permalink()?>"
            class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between ">
                <h5 class="mb-1"><?php the_title() ?></h5>
                <small><?php echo meks_time_ago() ?></small>
            </div>
            <p class="mb-1"><?php the_excerpt() ?></p>
            <?php the_post_thumbnail('medium') ?>
        </a>
    </div>
    <?php endwhile;
endif;
?>

</div>

<?php get_footer(); ?>