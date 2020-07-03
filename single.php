<?php get_header(); ?>

<div class="container-fluid">
    <div id="wrapper-blog-post">
        <?php while(have_posts(  )) : the_post(  ); ?>
        
        <div class="mt-5 col-12 col-md-7">
            <div id="breadcrumb"><?php get_breadcrumb(); ?></div>
            <h1 class=""><?php the_title(); ?></h1>
            <div class="entry-meta py-3">
                <span class="published"><span class="fa fa-clock-o"></span> <?php the_time('j F, Y'); ?></span>
                <span class="author"><span class="fa fa-keyboard-o"></span> <?php echo get_the_author(); ?></span> 
                <span class="blog-label"><span class="fa fa-folder-open"></span> <?php 
                    $categories = [];
                    foreach (get_the_category() as $category){
                        $categories[] = $category->name;
                    }                                
                    ?>                        
                    <?php echo implode(', ', $categories); ?> 
                </span> 
                <span class="comment-count"><span class="fa fa-comment"></span> <?php echo get_comments_number() ?> comments</span>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-7">
            <img src="<?php echo get_the_post_thumbnail_url (); ?>" class="px-0 col-12">
            <div class="post-content py-3">
                <?php the_content(); ?>
            </div>
            <div class="text-primary mb-5"><?php the_tags() ?></div>
        </div>

        <div class="col-12 col-md-4 ml-0 ml-md-5">
        <?php get_sidebar(); ?>
        </div>
        </div>
     
        <?php endwhile;  ?>

      

        <div class="related-projects">
            <h3 class="px-5">Related Posts</h3>      

            <div class="related-content px-5 row">   
            <?php 
            $args = array(
                'post_type'=>'post', 
                'posts_per_page' => 3, 
                'post__not_in' => array( $post->ID  )
            );
            query_posts( $args ); 
            $related = new WP_Query($args);
            if( $related->have_posts() ) { 
            while( $related->have_posts() ) { 
	        $related->the_post();              
            ?>
                    <div class="card-portfolio col col-12 col-sm-8 col-md-3 mx-sm-4">
                        <a href="<?= get_permalink();?>">             
                            <?php the_post_thumbnail(array(400, 250), array('class'=>'card-img-top')); ?>
                        </a>

                        <div class="card-body">            
                            <span class="blog-label">
                                <span class="fa fa-folder-open"></span> 
                                <?php 
                                $categories = [];
                                foreach (get_the_category() as $category){
                                    $categories[] = $category->name;
                                }                                
                                ?>                        
                                <?php echo implode(', ', $categories); ?>                    
                            </span>

                            <h5 class="card-title mt-4"><a href="<?= get_permalink(); ?>"><?php the_title(); ?></a></h5>
                            <a class="post-link" href="<?= get_permalink(); ?>">View post <i class="fa fa-arrow-right"
                                    id="right-arrow"></i></a>
                        </div>
                    </div>
            <?php  }
            wp_reset_postdata();
            } ?>

            </div>
        </div>

    </div>
</div>
<?php get_footer(); ?>