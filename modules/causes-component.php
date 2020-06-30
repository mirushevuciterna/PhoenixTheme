<div class="causeAll">
        <div class="causeTop hideMe" >
            <h1 id="causeTitull"> Causes We Support </h1> 
            <p>We’re here for people like you who want to make a difference. Choose how and when 
            you support the causes you care about here.</p>
        </div>
        
        
        <div class="bgcolor1 hideMe">
			<div class="containercontent1">
                <div class="owl-caro owl-carousel owl-theme">
                    <?php
                        if( have_rows('carousel_card') ):
                            while ( have_rows('carousel_card') ) : the_row(); ?>
                                <div class="item foto1">
                                    <div class="card p-3 cardthyrje">
                                        <img class="card-img-top fotoinside" src="<?php the_sub_field('card_image');?>" alt="test" alt="Card image cap">
                                        <div class="cardcause card-body d-flex flex-column">
                                            <h4 class="card-title"><?php the_sub_field('card_title');?></h4>
                                            <small><p><?php the_sub_field('card_text'); ?></p></small>
                                            <button type="button" id="butoniCard" class="mt-auto btn btn-md btn-primary"><?php the_sub_field('card_button');?></button>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile;

                                else :

                                    // no rows found

                                endif;

                                ?>		
                </div>
            </div>
	    </div>
</div>