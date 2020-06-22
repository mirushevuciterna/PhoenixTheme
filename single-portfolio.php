<?php get_header(); ?>

<div class="container-fluid">
    <div>
        <?php while(have_posts(  )) : the_post(  ); ?>
        <div class="mt-5 border-bottom title-section text-center">
            <h1 class="section-heading"><?php the_title(); ?></h1>
            <div id="breadcrumb"><?php get_breadcrumb(); ?></div>
        </div>
        <div class="row basic-info">
            <div class="col col-12 col-md-3">
                <div class="text-left">
                    <h6>Client</h6>
                    <p>Incubator Design</p>
                </div>

                <div>
                    <h6>Tools Used</h6>
                    <p>Photoshop</p>
                </div>
            </div>

            <div class="col col-12 col-md-6">
                <h6>Basic Info</h6>
                <p><?php the_content(); ?></p>
            </div>

            <div class="col col-12 col-md-2 categories">
                <h6>Categories</h6>
                <?php foreach (get_categories() as $category){ ?>
                <div class="row">
                    <div><i class="fa fa-check mx-3" style="font-size:14px;"></i></div>
                    <?= "<p>"; echo $category->name; echo "</p>"; ?>
                </div>
                <?php } ?>
            </div>
        </div>

        <div class="post-content-1 w-100">
            <div class="row">
                <?php $image = get_field('image_1');
            if( $image ) { ?>
                <div class="img col-12 col-lg-6" style="background-image:url('<?= $image ?>')"></div>
                <?php  } ?>
                <div class="text col-9 col-lg-5 m-auto">
                    <h2>1. <?php the_field('section_title_1') ?></h2>
                    <div class="separator-line"></div>
                    <h6 class="description"><?php the_field('description_1') ?></h6>
                </div>
            </div>
        </div>

        <div class="post-content-2 w-100">
            <div class="row">
                <?php $image = get_field('image_1');
            if( $image ) {
            echo wp_get_attachment_image( $image);
            } ?>
                <div class="text col-9 col-lg-5 m-auto">
                    <h2>2. <?php the_field('section_title_2') ?></h2>
                    <div class="separator-line"></div>
                    <h6 class="description"><?php the_field('description_2') ?></h6>
                </div>
                <?php $image = get_field('image_2');
            if( $image ) { ?>
                <div class="img col-12 col-lg-6" style="background-image:url('<?= $image ?>')"></div>
                <?php  } ?>
            </div>
        </div>
        <?php endwhile;  ?>
        <div class="row get-in-touch">
            <div class="w-50 text-center m-auto">
                <h2>Interested? Let's get in touch!</h2>
                <h6>
                    LeadEngine is a fully packed practical tool of premium built and design.
                    Let your creativity loose and start building your website now.
                </h6>
                <a href="#">
                    <button class="donate-button text-center" id="get-started">
                        Get started
                    </button>
                </a>
            </div>
        </div>

        <div class="related-projects">
            <h3 class="px-5">
                Related Projects
            </h3>
            
            <div class="related-content px-5 d-flex flex-column flex-sm-row">
        
            <?php 
            $args = array(
                'post_type'=>'portfolio', 
                'posts_per_page' => 3, 
                'post__not_in' => array( $post->ID  )
            );
            query_posts( $args ); 
            $related = new WP_Query($args);
            if( $related->have_posts() ) { 
            while( $related->have_posts() ) { 
	        $related->the_post();              
            ?>
                    <div class="card-portfolio d-flex flex-column ">
                        <a href="<?= get_permalink();?>">             
                            <?php the_post_thumbnail(array(400, 250), array('class'=>'card-img-top')); ?>
                        </a>

                        <div class="card-body">
                            <span class="blog-label"><span class="fa fa-folder-open"></span> Marketing, Web design </span>
                            <h5 class="card-title mt-4"><a href="<?= get_permalink(); ?>"><?php the_title(); ?></a></h5>
                            <a class="post-link" href="<?= get_permalink(); ?>">View project <i class="fa fa-arrow-right"
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