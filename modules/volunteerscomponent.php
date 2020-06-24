<div class="causeAllVOL">
    <div class="causeTopVOL ">
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
                        <img class="card-img-top fotoinsideVOL"
                            src="<?php the_sub_field('vol_image'); ?>""
                            alt="Card image cap">
                        <div class="card-body d-flex flex-column">
                            <h4 class="card-title"><?php the_sub_field('vol_name'); ?></h4>
                            <small>
                                <p><?php the_sub_field('vol_description'); ?></p>
                            </small>
                            <div class="volsocials row d=flex justify-content-between mx-2">
                                <div class="volbuttonsright">
                                    <span class=""><a href=""><i class="fa fa-facebook fa-sm"></i></a></span>
                                    <span class="ml-2"><a href=""><i class="fa fa-linkedin"></i></a></span>
                                    <span class="ml-2"><a href=""><i class="fa fa-twitter"></i></a></span>
                                </div>
                                <div class="volbuttonsleft">
                                    <span class="expbuttons mr-2"><a href=""><i class="fa fa-envelope" ><span id="afterexp"><?php the_sub_field('vol_mail'); ?></span></i></a></span>
                                    <span class="expbuttons mr-2"><a href=""><i class="fa fa-phone" ><span id="afterexp"><?php the_sub_field('vol_phone'); ?></span></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endwhile;

                else :

                    echo('No volunteers');

                endif;

                ?>	

            </div>
        </div>
    </div>
</div>







<!-- <div class="causeAllVOL">
        <div class="causeTopVOL " >
            <h1 id="causeTitullVOL"> Wonderful volunteers </h1> 
            <p ">Our charity relies on volunteers like you to support our organization's efforts.</p>
        </div>
        
        
        <div class="bgcolor1VOL">
			<div class="containercontent1VOL">

				<div class="owl-caroVOL owl-carousel owl-theme">
					<div class="item foto1VOL">
                            <div class="card p-3 cardthyrjeVOL">
                                <img class="card-img-top fotoinsideVOL" src="<?php echo get_stylesheet_directory_uri();?>/images/charity-team1.jpg" alt="Card image cap">
                                <div class="card-body d-flex flex-column">
                                    <h4 class="card-title">Animal welfare</h4>
                                    <small>
                                        <p>This is a longer card with supporting your text now as a natural lead-in to additional content</p>
                                    </small>
                                     <div class="volsocials row d=flex justify-content-between mx-2">
                                    <div class="volbuttonsright">
                                        <span class=""><a href=""><i class="fa fa-facebook fa-sm"></i></a></span>
                                        <span class="ml-2"><a href=""><i class="fa fa-linkedin"></i></a></span>
                                        <span class="ml-2"><a href=""><i class="fa fa-twitter"></i></a></span>
                                    </div>
                                    <div class="volbuttonsleft">
                                        <span class="mr-2"><a href=""><i class="fa fa-envelope" ></i></a></span>
                                        <span class=""><a href=""><i class="fa fa-phone" ></i></i></a></span>
                                    </div>
                                </div>
                                </div>
                            </div>
                    </div>
					<div class="item foto1VOL">
                            <div class="card p-3 cardthyrjeVOL">
                            <img class="card-img-top img-fluid fotoinsideVOL" src="<?php echo get_stylesheet_directory_uri();?>/images/charity-team2.jpg"" alt="Card image cap">
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">Child assistance</h4>
                                <small>
                                    <p>This is a longer card with supporting and helping text below as a natural lead-in to additional content</p>
                                </small>
                                <div class="volsocials row d=flex justify-content-between mx-2">
                                    <div class="volbuttonsright">
                                        <span class=""><a href=""><i class="fa fa-facebook fa-sm"></i></a></span>
                                        <span class="ml-2"><a href=""><i class="fa fa-linkedin"></i></a></span>
                                        <span class="ml-2"><a href=""><i class="fa fa-twitter"></i></a></span>
                                    </div>
                                    <div class="volbuttonsleft">
                                        <span class="expbuttons mr-2"><a href=""><i class="fa fa-envelope" ><span id="afterexp">New result</span></i></a></span>
                                        <span class="expbuttons mr-2"><a href=""><i class="fa fa-phone" ><span id="afterexp">New result</span></i></a></span>

                                    </div>
                                </div>
                            </div>
                            </div>
                    </div>
                    <div class="item foto1VOL">
                            <div class="card p-3 cardthyrjeVOL">
                            <img class="card-img-top img-fluid fotoinsideVOL" src="<?php echo get_stylesheet_directory_uri();?>/images/charity-team3.jpg" alt="Card image cap">
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">Child assistance</h4>
                                <small>
                                    <p>This is a longer card with supporting and helping text below as a natural lead-in to additional content</p>
                                </small>
                                <div class="volsocials row d=flex justify-content-between mx-2">
                                    <div class="volbuttonsright">
                                        <span class=""><a href=""><i class="fa fa-facebook fa-sm"></i></a></span>
                                        <span class="ml-2"><a href=""><i class="fa fa-linkedin"></i></a></span>
                                        <span class="ml-2"><a href=""><i class="fa fa-twitter"></i></a></span>
                                    </div>
                                    <div class="volbuttonsleft">
                                        <span class="mr-2"><a href=""><i class="fa fa-envelope" ></i></a></span>
                                        <span class=""><a href=""><i class="fa fa-phone" ></i></i></a></span>
                                    </div>
                                </div>
                            </div>
                            </div>
                    </div>
					<div class="item foto1VOL">
                            <div class="card p-3 cardthyrjeVOL">
                            <img class="card-img-top img-fluid fotoinsideVOL" src="<?php echo get_stylesheet_directory_uri();?>/images/charity-team4.jpg"" alt="Card image cap">
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">Child assistance</h4>
                                <small>
                                    <p>This is a longer card with supporting and helping text below as a natural lead-in to additional content</p>
                                </small>
                                <div class="volsocials row d=flex justify-content-between mx-2">
                                    <div class="volbuttonsright">
                                        <span class=""><a href=""><i class="fa fa-facebook fa-sm"></i></a></span>
                                        <span class="ml-2"><a href=""><i class="fa fa-linkedin"></i></a></span>
                                        <span class="ml-2"><a href=""><i class="fa fa-twitter"></i></a></span>
                                    </div>
                                    <div class="volbuttonsleft">
                                        <span class="mr-2"><a href=""><i class="fa fa-envelope" ></i></a></span>
                                        <span class=""><a href=""><i class="fa fa-phone" ></i></i></a></span>
                                    </div>
                                </div>
                            </div>
                            </div>
                    </div>

					
					
					



					
				</div>				
			</div>
        </div>
</div> --> 