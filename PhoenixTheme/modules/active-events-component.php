<?php 

$args = array('post_type'=>'portfolio', 'posts_per_page'=>-1);
query_posts( $args ); ?>
<div class="active-events">
    <div class="p-5 event-title-paragraph">
        <div class="event-title hideMe">
            <h1>Our active events</h1>
        </div>
        <div class="event-paragraph hideMe">
            <p>Donating to the causes you care about not only benefits the charities themselves,<br>
            it can be deeply rewarding for you too! Lorem ipsum dolor sit amet!</p>
        </div>
    </div>
    <!-- <div class="p-6"> -->
    <?php if( have_posts() ): ?>
        
            <div class="p-2 d-flex flex-column justify-content-between owl-caro-active-events owl-carousel owl-theme" id="active-events-section">
                <?php while(have_posts(  )) : the_post(  ); ?>
                <a href="<?php echo get_permalink(); ?>">
                    <div class="d-flex mr-auto flex-column charity-text-image hideMe">
                        <div class="p-2 charity-image">
                            <?php echo the_post_thumbnail('large') ?>
                        </div>
                        <div class="charity-content p-2" id="charity-content">
                            <h4><?php the_title(); ?></h4>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                </a>
                <?php endwhile;  ?>
            </div>
        
            
    <?php endif; ?>
    <?php wp_reset_query(); ?>
    <!-- </div> -->
    <div class="p-5 d-flex flex-sm-row flex-column justify-content-beetween">
        <div class="mr-auto inpire-quote p-2 hideMe">
            <h2>Give and change the world</h2>
            <p>Tristique senectus et netus et malesuada fames ac turpis.<br>
            Pharetra sit amet aliquam id diam maecenas ultricies.<br> Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="p-2 donate-buttoni hideMe">
            <button type="button" class="btn btn-lg donateBTN">Donate Now</button>
        </div>
    </div>
</div>

