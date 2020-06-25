<div class="causeAllVOL">
    <div class="causeTopVOL ">
        <h1 id="causeTitullVOL"> Wonderful volunteers </h1>
        <p>Our charity relies on volunteers like you to support our organization's efforts.</p>
    </div>


    <div class="bgcolor1VOL">
        <div class="containercontent1VOL">

            <div class="owl-caroVOL owl-carousel owl-theme">
                <?php
                if( have_rows('volunteer_settings') ):
                while ( have_rows('volunteer_settings') ) : the_row(); ?>
                <div class="item foto1VOL">
                    <div class="card p-3 cardthyrjeVOL">
                        <img class="card-img-top fotoinsideVOL"
                            src="<?php the_sub_field('volunteer_image'); ?>""
                            alt="Card image cap">
                            <div class="card-body d-flex flex-column">
                            <h4 class="card-title"><?php the_sub_field('volunteer_name'); ?></h4>
                            <h5><?php the_sub_field('volunteer_title'); ?></h5>
                            <small id="voltest">
                                <p><?php the_sub_field('volunteer_description'); ?></p>
                            </small>
                            <div class="volsocials row d=flex justify-content-between mx-2">
                                <div class="volbuttonsright">
                                    <span class=""><a href=""><i class="fa fa-facebook fa-sm"></i></a></span>
                                    <span class="ml-1"><a href=""><i class="fa fa-linkedin"></i></a></span>
                                    <span class="ml-1"><a href=""><i class="fa fa-twitter"></i></a></span>
                                </div>
                                <div class="volbuttonsleft">
                                    <span class="expbuttons mr-1"><a href=""><i class="fa fa-envelope" ><span id="afterexp"><?php the_sub_field('volunteer_email'); ?></span></i></a></span>
                                    <span class="expbuttons"><a href=""><i class="fa fa-phone" ><span id="afterexp"><?php the_sub_field('volunteer_phone'); ?></span></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endwhile;

                else :

                    echo('No volunteers');
                      echo('No volunteers');  echo('No volunteers');

                endif;

                ?>	

            </div>
        </div>
    </div>
</div>







<!-- <div class="causeAllVOL">
        <div class="causeTopVOL " >
            <h1 id="causeTitullVOL"> Wonderful volunteers </h1> 
            <p>Our charity relies on volunteers like you to support our organization's efforts.</p>
        </div>
        
        
        <div class="bgcolor1VOL">
			<div class="containercontent1VOL">
				<div class="owl-caroVOL owl-carousel owl-theme">
                    <?php
                        if( have_rows('vol_set') ):
                            while ( have_rows('vol_set') ) : the_row(); ?>
                            <div class="item foto1VOL">
                            <div class="card p-3 cardthyrjeVOL">
                                <img class="card-img-top fotoinsideVOL" src="<?php the_sub_field('vol_image');?>" alt="test" alt="Card image cap">
                                <div class="card-body d-flex flex-column">
                                    <h4 class="card-title"><?php the_sub_field('vol_name');?></h4>
                                    <small>
                                        <p><?php the_sub_field('vol_description');?></p>
                                    </small>
                                    <div class="volsocials row d=flex justify-content-between mx-2">
                                        <div class="volbuttonsright">
                                            <span class=""><a href=""><i class="fa fa-facebook fa-sm"></i></a></span>
                                            <span class="ml-2"><a href=""><i class="fa fa-linkedin"></i></a></span>
                                            <span class="ml-2"><a href=""><i class="fa fa-twitter"></i></a></span>
                                        </div>
                                        <div class="volbuttonsleft">
                                            <span class="mr-2"><a href=""><i class="fa fa-envelope" ><?php the_sub_field('vol_mail');?></i></a></span>
                                            <span class=""><a href=""><i class="fa fa-phone" ><?php the_sub_field('vol_phone');?></i></a></span>
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
</div> --> 