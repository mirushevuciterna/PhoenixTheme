<?php 

$args = array('post_type'=>'portfolio', 'post_per_page'=>3);
query_posts( $args ); 

?>

<?php if( have_posts() ): ?>
    <?php while(have_posts(  )) : the_post(  ); ?>
    <div class="d-flex justify-content-between">
       <div class="flex-row"><?php echo the_post_thumbnail('medium') ?></div>
    </div>
        <?php the_title(); ?>
        <?php the_excerpt(); ?>
    <?php endwhile; ?>
<?php endif; ?>
