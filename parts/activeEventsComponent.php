<?php 

$args = array('post_type'=>'portfolio', 'post_per_page'=>3);
query_posts( $args ); ?>

<?php if( have_posts() ): ?>
    <div class="p-5 d-flex flex-row justify-content-between" id="active-events-section">
        
        <?php while(have_posts(  )) : the_post(  ); ?>
        <div class="d-flex flex-column charity-text-image">
            <div class="p-2 charity-image">
            <?php echo the_post_thumbnail('medium') ?>
            </div>
            <div class="p-2" id="charity-content">
                <h4><?php the_title(); ?></h4>
                <p><?php the_excerpt(); ?></p>
            </div>
            </div>
        <?php endwhile;  ?>
        
    </div>
<?php endif; ?>
