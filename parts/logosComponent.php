<div class="bgcolor">
			<div class="containercontent">
				<div class="owl-carous owl-carousel owl-theme">
						<?php
                        if( have_rows('img_carousel') ):
							while ( have_rows('img_carousel') ) : the_row(); ?>							
							<div class="item foto"><img src="<?php the_sub_field('car_img');?>" alt=""/></div>
                                <?php endwhile;
                                else :
                                    // no rows found
                                endif;
                                ?>
				</div>				
			</div>
	</div>
		
