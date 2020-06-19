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
            if( $image ) {
            echo wp_get_attachment_image( $image);
            } ?> 
            <div class="img col-12 col-lg-6"></div>
            <div class="text col-9 col-lg-5 m-auto">
                <?php //get_field('section_title_1') ?>
                <h2>1. Create the look you want on your website. Website building made easy, simple & fast.</h2>
                <div class="separator-line"></div>
                <h6 class="description">Customize the framework to match your small business processes using simple drag-and-drop tools.</h6>
            </div>
        </div>
    </div>
    <?php endwhile;  ?>
</div>
</div>

<?php get_footer(); ?>