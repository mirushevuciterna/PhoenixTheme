<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<div class="containerhome">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); //echo "THIS IS THE FORMAT: " . get_post_format(); 
    ?>

                <h3 class="titulli123"> <?php the_title(); ?></h3>


            <small class="datakoha">Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a') ?>, in <?php the_category(); ?></small>
            <p class="konten"> <?php the_content(); ?></p>
            <hr class="linebet">

    <?php endwhile;
    endif;
    ?>
    <div class="pagi">
        <?php post_pagination(); ?>
    </div>
</div>



<?php get_footer(); ?>