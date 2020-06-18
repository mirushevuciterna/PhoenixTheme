<?php 

$args = array('post_type'=>'portfolio', 'post_per_page'=>3);
query_posts( $args ); ?>

<?php if( have_posts() ): ?>
    <div class="p-5 d-flex flex-row">
        
        <?php while(have_posts(  )) : the_post(  ); ?>
        <div class="d-flex flex-column">
            <div class="p-2">
            <?php echo the_post_thumbnail('medium') ?>
            </div>
            <div class="p-2">
                <h3><?php the_title(); ?></h3>
                <p><?php the_excerpt(); ?></p>
            </div>
            </div>
        <?php endwhile;  ?>
        
    </div>
<?php endif; ?>
