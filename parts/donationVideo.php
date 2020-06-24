
    <?php
        if( have_rows('video_youtube1') ):
            while ( have_rows('video_youtube1') ) : the_row(); ?>
            <div class="row bckdonation" style="height: 600px;">
            
            <div class="col py-2">
                <?php the_sub_field('video'); ?>
            </div>

            
            <div  class="col colcontent">
                <div class="colcontent2 ">
                    <h2 class="donation-title"><?php the_sub_field('titulli_video');?></h2>
                    <h2 class="donation-paragraph"><?php the_sub_field('paragrafi_video');?></h2>
                    <button class="btn btn-lg donateBTN "><?php the_sub_field('butoni_video');?></button>
                </div>
            </div>		
            <hr class="donationhr">
    
    
			</div>
            <?php endwhile;
            else :
            // no rows found
        endif;
    ?>




    <!-- <div class="col">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
        </iframe>
        </div>
    <div  class="col colcontent">
        <div class="colcontent2 ">
            <h2 class="donation-title">Learn how your donation will make a difference</h2>
            <h2 class="donation-paragraph">Amet dictum sit amet justo donec enim diam vulputate.
                Vitae suscipit tellus mauris a diam maecenas sed enim ut. Lorem ipsum dolor sit amet</h2>
            <button class="btn btn-lg donateBTN ">Read more</button>
        </div>
    </div> -->
    


    



<!-- <div class="d-flex flex-row justify-content-between">
    <div class="video-container">

    </div>
    <div class="donationVideoText p-5 m-5">
        <h3 class="donation-title">Learn how your donation will make a difference</h3>
        <p class="donation-paragraph">Amet dictum sit amet justo donec enim diam vulputate.
            <br> Vitae suscipit tellus mauris a diam maecenas sed enim ut.
            <br> Lorem ipsum dolor sit amet</p>
        <button class="btn btn-lg donateBTN">Read more</button>
    </div>
</div> -->
