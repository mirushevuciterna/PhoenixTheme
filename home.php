<?php get_header(); ?>

<div class="container">
	<div class="blogsettings">
	<?php 
    if( have_posts() ):
        while( have_posts() ): the_post(); ?>
        <h3 class=""><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
        <small class="blogunder">Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a') ?>, in:   <?php the_category(); ?></small>
        <p> <?php the_content(); ?></p>
        <hr>  
    <?php endwhile;
    endif;
    ?>
	</div>	
		
</div>
<div class="blognumbers d-flex justify-content-center align-items-center">
    <?php post_pagination(); ?>
</div>

<?php get_footer(); ?>