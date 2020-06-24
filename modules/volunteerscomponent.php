<div class="causeAllVOL">
        <div class="causeTopVOL " >
            <h1 id="causeTitullVOL"> Wonderful volunteers </h1> 
            <p>Our charity relies on volunteers like you to support our organization's efforts.</p>
        </div>
        
        
        <div class="bgcolor1VOL">
			<div class="containercontent1VOL">
				<div class="owl-caroVOL owl-carousel owl-theme">
                    <?php
                        if( have_rows('volunteers_settings') ):
                            while ( have_rows('volunteers_settings') ) : the_row(); ?>
                            <div class="item foto1VOL">
                            <div class="card p-3 cardthyrjeVOL">
                                <img class="card-img-top fotoinsideVOL" <?php the_sub_field('volunteer_image');?> alt="Card image cap">
                                <div class="card-body d-flex flex-column">
                                    <h4 class="card-title"><?php the_sub_field('volunteer_name');?></h4>
                                    <small>
                                        <p><?php the_sub_field('volunteer_description');?></p>
                                    </small>
                                    <div class="volsocials row d=flex justify-content-between mx-2">
                                        <div class="volbuttonsright">
                                            <span class=""><a href=""><i class="fa fa-facebook fa-sm"></i></a></span>
                                            <span class="ml-2"><a href=""><i class="fa fa-linkedin"></i></a></span>
                                            <span class="ml-2"><a href=""><i class="fa fa-twitter"></i></a></span>
                                        </div>
                                        <div class="volbuttonsleft">
                                            <span class="mr-2"><a href=""><i class="fa fa-envelope" ><?php the_sub_field('volunteer_email');?></i></a></span>
                                            <span class=""><a href=""><i class="fa fa-phone" ><?php the_sub_field('volunteer_phone');?></i></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
                    
                    <?php endwhile;

                    else :

                    endif;

                    ?>		
                </div>				
			</div>
        </div>
</div>
	
	