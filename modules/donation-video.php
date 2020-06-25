<?php
    if( have_rows('video_youtube1') ):
        while ( have_rows('video_youtube1') ) : the_row(); ?>
        <?php if (get_sub_field('position') == 'left_video') { ?>
            <div class="donationVideoFeature">
                <div class="video-container">
                    <div class="playDiv" id="myBtn">
                        <i class="fa fa-play"></i>
                    </div>

                    <div id="myModal" class="modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <?php the_sub_field('video'); ?>
                        </div>
                    </div>
                    
                </div>
                <div class="donationVideoText p-5 ">
                    <h3 class="donation-title"><?php the_sub_field('titulli_video');?></h3>
                    <p class="donation-paragraph"><?php the_sub_field('paragrafi_video');?></p>
                    <button class="btn btn-lg donateBTN"><?php the_sub_field('butoni_video');?></button>
                </div>
            </div>

        <?php } else { ?>

            <div class="donationVideoFeature">
                <div class="donationVideoText p-5 ">
                    <h3 class="donation-title"><?php the_sub_field('titulli_video');?></h3>
                    <p class="donation-paragraph"><?php the_sub_field('paragrafi_video');?></p>
                    <button class="btn btn-lg donateBTN"><?php the_sub_field('butoni_video');?></button>
                </div>

                <div class="video-container">

                    <div id="myModal1" class="modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <span class="close1">&times;</span>
                            <?php the_sub_field('video'); ?>
                        </div>
                    </div>

                    <div class="playDiv" id="myBtn1">
                        <i class="fa fa-play"></i>
                    </div> 
                </div>
            </div>
    <?php 
        }
        endwhile;
                
        endif;
    ?>
