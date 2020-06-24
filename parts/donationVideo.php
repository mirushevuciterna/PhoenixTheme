<?php
    if( have_rows('video_youtube1') ):
        while ( have_rows('video_youtube1') ) : the_row(); ?>
            <div class="donationVideoFeature">
                <div class="video-container">
                    <?php the_sub_field('video'); ?>
                </div>
                <div class="donationVideoText p-5 ">
                    <h3 class="donation-title"><?php the_sub_field('titulli_video');?></h3>
                    <p class="donation-paragraph"><?php the_sub_field('paragrafi_video');?></p>
                    <button class="btn btn-lg donateBTN"><?php the_sub_field('butoni_video');?></button>
                </div>
            </div>   
        <?php endwhile;
        else :
        // no rows found
    endif;
?>