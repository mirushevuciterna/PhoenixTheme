<div class="questionSect">
        <div class="row">
            <div class="questionFoto col-lg-6"></div>
            <div class="queskolright col-lg-6 d-flex justify-content-center align-items-center">
                <div class=" quesrightcont d-flex flex-column " >
                    <h1>Got any questions?</br> See more below</h1>
                    
                    <?php
                        if( have_rows('quescomp_parts') ):
                            while ( have_rows('quescomp_parts') ) : the_row(); ?>
                                <div class="quesAll">
                                    <button class="accordion"><?php the_sub_field('quescom_button');?></button>
                                    <div class="panel">
                                        <p><?php the_sub_field('quescomp_content');?></p>
                                    </div>          
                                </div>
                                <?php endwhile;

                                else :
                                endif;
                                ?>	   
                </div>
                
            </div>
    </div>
                    <!-- <div class="quesAll">
                        <button class="accordion">1. Where your donations go?</button>
                        <div class="panel">
                        <p>Lorem ipsum...</p>
                    </div>          
                    </div> 




                    <div class="quesAll">
                        <button class="accordion">2.How does the program work?</button>
                        <div class="panel">
                        <p>Lorem ipsum...</p>
                        </div>
                    </div>
                    <div class="quesAll">
                        <button class="accordion">3.Can my donation be anonymous?</button>
                        <div class="panel">
                        <p>Lorem ipsum...</p>
                        </div>
                    </div> -->
                    
                    

                 