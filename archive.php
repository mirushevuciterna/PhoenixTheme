<?php get_header(); ?>

<div class="container-fluid">
    <?php 
if( have_posts() ): while ( have_posts() ): the_post(); ?>

    <div class="list-group mb-5 py-3 col-12">
        <a href="<?php echo the_permalink()?>"
            class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-block d-md-flex w-100 justify-content-between ">
                <small class="times-ago"><?php echo meks_time_ago() ?></small>
                <h5 class="mb-1 order-last order-md-first"><?php the_title() ?></h5>        
            </div>
            <div class="col-12 col-md-6 pl-0">
                <p class="mb-1"><?php the_excerpt() ?></p>
                <?php //the_post_thumbnail() ?>
                <img src="<?php echo get_the_post_thumbnail_url (); ?>" class="pl-0 col-12">
            </div>
        </a>
    </div>

    <?php endwhile;
endif;
?>
<?php post_pagination(); ?>
</div>

<?php get_footer(); ?>